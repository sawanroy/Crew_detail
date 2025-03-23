<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// DB connection parameters
$host = 'localhost'; // or your host
$dbname = 'katni_mail_detail';
$username = 'root';
$password = '';

// Connect to the database
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Check if it's an AJAX request to update user status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userName'], $_POST['userStatus'])) {
    $userName = $_POST['userName'];
    $userStatus = $_POST['userStatus'];

    $sql = "UPDATE lp_name SET status = :status WHERE Name = :name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':status' => $userStatus, ':name' => $userName]);

    // Output for AJAX
    echo 'Status updated successfully';
    exit; // Stop further processing since it's an AJAX call
}

// Normal page load below (only execute if not an AJAX request)

    
    $sql_5 = "SELECT Name FROM lp_name WHERE Designation IN ('LPP', 'LPG','LPM') AND status!='busy'";
    $stmt_5 = $pdo->query($sql_5);
    $results_5 = $stmt_5->fetchAll(PDO::FETCH_ASSOC);

    $sql_3 = "SELECT Name, Designation, status FROM lp_name WHERE Designation IN ('ALP', 'SALP') AND status!='busy'";
    $stmt_3 = $pdo->query($sql_3);
                                
    if ($stmt_3) {
    $results_3 = $stmt_3->fetchAll(PDO::FETCH_ASSOC);
     // You can process your results here
    } else {
        echo "Error in query execution: " . $pdo->errorInfo()[2];
      }   

      // Check if it's an AJAX request to update user status
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userName'], $_POST['userStatus'])) {
    $userName = $_POST['userName'];
    $userStatus = $_POST['userStatus'];

    $sql_4 = "UPDATE lp_name SET status = :status WHERE Name = :name";
    $stmt_4 = $pdo->prepare($sql_4);
    $stmt_4->execute(['status' => $userStatus, 'name' => $userName]);

    // Output for AJAX
    echo 'Status updated successfully';
    exit; // Stop further processing since it's an AJAX call
}
?>
<div class="container mt-4">
<div class="col">
            <h2 class="mb-1">TOD- OUTCOMING TRAINS</h2>
        </div>
    <button id="addRow" class="btn btn-primary mb-2">Add Row</button>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Sno.</th>
                <th>Desg</th>
                <th>LP Name</th>
                <th>LP REST</th>
                <th>ALP NAME</th>
                <th>ALP REST</th>
                <th>TRAIN No.</th>
                <th>Destination</th>
                <th>Time</th>
                <th>remark</th>
                <!-- More headers as needed -->
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Rows will be added here -->
        </tbody>
    </table>
</div>
    </table>
</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
$(document).ready(function() {


    var counter = 1;
    var nameStatus = {};

    function addRow() {
        var newRow = $('<tr>');
        newRow.append($('<td>').text(counter));
        newRow.append($('<td>').html('<input type="text" name="desg[]" class="form-control">'));
        // Dropdown for LP NAME
        var selectLP = $('<select>').addClass('form-control lp-select').attr('name', 'lp_name[]');
        selectLP.append('<option value="">Select LP</option>');
        <?php if ($results_5) { foreach ($results_5 as $row_5) { ?>
        var name = '<?php echo $row_5['Name']; ?>';
        var option = $('<option>').val(name).text(name);
        if (nameStatus[name] === 'busy') {
            option.prop('disabled', true);
        }
        selectLP.append(option);
        <?php }} ?>
        newRow.append($('<td>').html(selectLP));
         // Add other LP inputs
        newRow.append($('<td>').html('<input type="text" name="lp_rest[]" class="form-control">'));
                // Dropdown for ALP NAME
                var selectALP = $('<select>').addClass('form-control userSelection_alp').attr('name', 'userSelection_alp[]');
        selectALP.append('<option value="">Select ALP</option>');
        <?php if ($results_3) { foreach ($results_3 as $row_3) { ?>
        var alpName = '<?php echo $row_3['Name']; ?>';
        var alpOption = $('<option>').val(alpName).text(alpName);
        if (nameStatus[alpName] === 'busy') {
            alpOption.prop('disabled', true);
        }
        selectALP.append(alpOption);
        <?php }} ?>
        newRow.append($('<td>').html(selectALP));
         // Add other ALP inputs
        newRow.append($('<td>').html('<input type="text" name="alp_rest[]" class="form-control">'));
        newRow.append($('<td>').html('<input type="text" name="train_no[]" class="form-control">'));
        newRow.append($('<td>').html('<input type="text" name="destination[]" class="form-control">'));


         newRow.append($('<td>').html('<input type="text" name="time[]" class="form-control">'));
        newRow.append($('<td>').html('<input type="text" name="remark[]" class="form-control">'));

        $("#tableBody").append(newRow); // Append the new row to the table
        counter++; // Increment the counter
        initSelect2();
    }

    function createSelect(className, data) {
        var select = $('<select>').addClass('form-control ' + className).attr('name', className + '[]').data('previous', '');
        select.append('<option value="">Select Name</option>');
        data.forEach(function(item) {
            var option = $('<option>').val(item.Name).text(item.Name);
            if (nameStatus[item.Name] === 'busy') {
                option.prop('disabled', true);
            }
            select.append(option);
        });
        return select;
    }

    function initSelect2() {
        $('.userSelection_alp, .lp-select').select2({
            placeholder: "Select a name",
            allowClear: true
        });
            // Listen for changes on any userSelection dropdown
            $('.userSelection_alp, .lp-select').on('change', function() {
        var selectedName = $(this).val();
        var previousValue = $(this).data('previous'); // Track the previous value
        $(this).data('previous', selectedName); // Update the previous value

        // Handle the case when a new name is selected
        if (selectedName && selectedName !== 'DIVERTED') {
            updateUserStatus_2(selectedName, 'busy');
            // Free the previous value if it was different and not a special case
            if (previousValue && previousValue !== 'DIVERTED' && previousValue !== selectedName) {
                updateUserStatus_2(previousValue, 'free');
            }
        } 
        // Handle the case when the selection is cleared
        else if (!selectedName && previousValue && previousValue !== 'DIVERTED') {
            updateUserStatus_2(previousValue, 'free');
        }
    });

    // Handle the clear event in Select2
    $('.userSelection_alp, .lp-select').on('select2:unselect', function(e) {
        var previousValue = $(this).data('previous');
        if (previousValue && previousValue !== 'DIVERTED') {
            updateUserStatus_2(previousValue, 'free');
            refreshDropdowns(previousValue, 'free'); // Refresh dropdowns to mark the user as free
        }
    });
//});
    }

    function updateUserStatus_2(name, status) {
        console.log('Sending AJAX to update status for', name, 'to', status); // Additional debug log
        nameStatus[name] = status;
        $.ajax({
            url: 'lobby_duty.php',
            type: 'POST',
            data: { userName: name, userStatus: status },
            success: function(response) {
                console.log('Response from server:', response);
                refreshDropdowns(name, status);
            },
            error: function(xhr, textStatus, error) {
                console.log('AJAX error:', error);
            }
        });
    }

    function refreshDropdowns(selectedName, newStatus) {
        $('select').each(function() {
            $(this).find('option').each(function() {
                if ($(this).val() === selectedName) {
                    $(this).prop('disabled', newStatus === 'busy');
                }
            });
            $(this).trigger('change.select2');
        });
    }

    $("#addRow").click(addRow);
    initSelect2();
});
</script>



</body>
</html>
