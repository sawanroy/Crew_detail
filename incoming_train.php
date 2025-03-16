
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing Trains and Detailed Notes</title>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <style>
        body, html {
            font-family: Arial, sans-serif;
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        table {
            width: 100%; /* Full width for main table, adjust if necessary */
            border-collapse: collapse;
            margin: 20px auto; /* Centering the table horizontally */
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header {
            text-align: center;
            margin: 20px 0;
            width: 100%;
        }
        .note-container {
            text-align: center;
            margin-top: 20px;
            width: 100%;
            max-width: 800px; /* Adjust this value based on your preference */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Optional: adds shadow for better visibility */
        }
        .stats-table {
            margin-top: 20px;
            width: 50%; /* Adjust width of stats table as necessary */
            margin: auto; /* Centers the stats table horizontally */
        }
        .stats-table th, .stats-table td {
            text-align: center;
        }
    </style> -->

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


    
    $sql_5 = "SELECT Name FROM lp_name WHERE Designation IN ('LPP', 'LPG','LPM') AND status!='busy'";
    $stmt_5 = $pdo->query($sql_5);
    $results_5 = $stmt_5->fetchAll(PDO::FETCH_ASSOC);



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
                                

      $sql_3 = "SELECT Name, Designation, status FROM lp_name WHERE Designation IN ('ALP', 'SALP') AND status!='busy'";
      $stmt_3 = $pdo->query($sql_3);
                                  
      if ($stmt_3) {
      $results_3 = $stmt_3->fetchAll(PDO::FETCH_ASSOC);
       // You can process your results here
      } else {
          echo "Error in query execution: " . $pdo->errorInfo()[2];
        }

                            
 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date'])) {
            $date = $_POST['date'];
            //$specificDate = "2025-03-05";  // YYYY-MM-DD format
        
            // Convert the date string into a timestamp
            $timestamp = strtotime($date);
        
            // Get the day of the week
            $dayOfWeek = date('l', $timestamp); // Outputs full weekday name (e.g., Monday, Tuesday)
        
            echo "The day of the week for " . $date . " is " . $dayOfWeek . ".";
            //$dayOfWeek = 'Monday'; // This can be dynamically set based on user input or any logic
        
            $sql = "SELECT Sno,train_no,time,destination,remark FROM trains WHERE day = :dayOfWeek";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['dayOfWeek' => $dayOfWeek]);
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        

        if ($results) {
        ?>
    <form action="Incoming_daily_data.php" method="post">        
    <div class="header">
        <h2>OUT GOING TRAINS</h2>
        <div>Date:<?php echo $date?></div>
        <div>Day: <?php echo $dayOfWeek?></div>
    </div>

            <table>
            <tr>
                <th>S. No.</th>
                <th>DS</th>
                <th>LP NAME</th>
                <th>ALP NAME</th>
                <th>Train No.</th>
                <th>Arrival Time</th>
                <th>Sign Off</th>
            </tr>
            <tr>
            <?php
            foreach ($results as  $index => $row) {
                
            ?>
            <td><?php echo ($row['Sno']) ?></td>
            <td><select name="Des_select[]" class="Des_select"  data-sno="<?php echo $row['Sno']; ?>"style= "width: 100%">
            <option value="">Select</option>  
            <option value="LPP">LPP</option>
            <option value="LPG">LPG</option>
            <option value="LPM">LPM</option>
            <option value="---">---</option>
            </select></td>
            <td><select name="userSelection[]" class="userSelection"  data-sno="<?php echo $row['Sno']; ?>"  style="width: 100%">
            <option value="">------Select the name-----</option>
            <option value="DIVERTED">DIVERTED</option>
                        <?php 
                        if($results_5){ 
                             foreach ($results_5 as  $row_5) {
                        ?>
                        <option value="<?php echo ($row_5['Name']);?>"><?php echo ($row_5['Name'])?></option>
                             <?php }}?>

                    </select></td>
            <td><select  name="userSelection_alp[]"  class="userSelection_alp" style="width: 100%">
                        <option value="">-------Select the name-------</option>
                        <option value="DIVERTED">DIVERTED</option>
                        <?php
                        if($results_3){ 
                             foreach ($results_3 as $row_3) {
                        ?>
                        <option value="<?php echo ($row_3['Name']);?>"><?php echo ($row_3['Name'])?></option>
                             <?php }}?>

                    </select></td>
            <td><input type="hidden"  name="train_no[]"value="<?php echo htmlspecialchars($row['train_no']); ?>"><?php echo ($row['train_no'])?></td>
            <td><input type="hidden"  name="time[]"value="<?php echo htmlspecialchars($row['time']); ?>"><?php echo ($row['time'])?></td>
            <td><input type="hidden"  name="remark[]" value="<?php echo htmlspecialchars($row['remark']); ?>"><?php echo ($row['remark'])?></td>
        </tr>
       <?php }} ?>
        <!-- Add more rows as necessary -->
    </table>
    <button type="submit">Submit</button>
    </form>

     <!-- Include Select2 JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<script>
$(document).ready(function() {
    // Initialize Select2
    $('.userSelection').select2({
        placeholder: "------Select a name--------",
        allowClear: true
    });

    // Function to update user status in the database
    function updateUserStatus(name, status) {
        $.ajax({
            url: 'daily_detail.php', // Server-side script to handle the update
            type: 'POST',
            data: { userName: name, userStatus: status },
            success: function(response) {
                console.log('Status updated');
                refreshDropdowns(name, status);
            },
            error: function() {
                console.log('Error updating status');
            }
        });
    }

    // Refresh other dropdowns after a status update
    function refreshDropdowns(selectedName, newStatus) {
        $('.userSelection').each(function() {
            var current = $(this); // Current select element
            var currentValue = current.val(); // Current value of this select
            // Check if the selectedName is not 'Diverted'
            if (selectedName !== 'DIVERTED') {
            if (newStatus === 'busy') {
                // Disable the option that was set to 'busy' in other selects
                current.find('option').each(function() {
                    if ($(this).val() === selectedName && $(this).val() !== currentValue) {
                        $(this).prop('disabled', true).attr('data-status', 'busy');
                    }
                });
            } else {
                // Enable the option again if it was set to 'free'
                current.find('option').each(function() {
                    if ($(this).val() === selectedName) {
                        $(this).prop('disabled', false).attr('data-status', 'free');
                    }
                });
            }
        }
            // Update Select2
            current.trigger('change.select2');
        });
    }

    // Listen for changes on any userSelection dropdown
    $('.userSelection').on('change', function() {
        var selectedName = $(this).val();
        var previousValue = $(this).data('previous'); // Track the previous value
        $(this).data('previous', selectedName); // Update the previous value
        if (selectedName && selectedName !== 'DIVERTED') {
            updateUserStatus(selectedName, 'busy');
            if (previousValue && previousValue !== 'DIVERTED') {
                updateUserStatus(previousValue, 'free'); // Set previous value to free
            }
        }else if (!selectedName && previousValue && previousValue !== 'DIVERTED') { 
         {
                updateUserStatus(previousValue, 'free');
            }
        }
    });
       // Handle the clear event in Select2
       $('.userSelection').on('select2:unselect', function(e) {
        var previousValue = $(this).data('previous');
        if (previousValue && previousValue !== 'DIVERTED') {
            updateUserStatus(previousValue, 'free');
            refreshDropdowns(previousValue, 'free'); // Refresh dropdowns to mark the user as free
        }
    });
});
</script>


<script>
$(document).ready(function() {
    // Initialize Select2
    $('.userSelection_alp').select2({
        placeholder: "------Select a name--------",
        allowClear: true
    });

    // Function to update user status in the database
    function updateUserStatus_2(name, status) {
        $.ajax({
            url: 'daily_detail.php', // Server-side script to handle the update
            type: 'POST',
            data: { userName: name, userStatus: status },
            success: function(response) {
                console.log('Status updated');
                refreshDropdowns_2(name, status);
            },
            error: function() {
                console.log('Error updating status');
            }
        });
    }

    // Refresh other dropdowns after a status update
    function refreshDropdowns_2(selectedName, newStatus) {
        $('.userSelection_alp').each(function() {
            var current = $(this); // Current select element
            var currentValue = current.val(); // Current value of this select

            // Check if the selectedName is not 'Diverted'
            if (selectedName !== 'DIVERTED') {
                if (newStatus === 'busy') {
                    // Disable the option that was set to 'busy' in other selects
                    current.find('option').each(function() {
                        if ($(this).val() === selectedName && $(this).val() !== currentValue) {
                            $(this).prop('disabled', true).attr('data-status', 'busy');
                        }
                    });
                } else {
                    // Enable the option again if it was set to 'free'
                    current.find('option').each(function() {
                        if ($(this).val() === selectedName) {
                            $(this).prop('disabled', false).attr('data-status', 'free');
                        }
                    });
                }
            }
            // Update Select2
            current.trigger('change.select2');
        });
    }

    // Listen for changes on any userSelection_alp dropdown
    $('.userSelection_alp').on('change', function() {
        var selectedName = $(this).val();
        var previousValue = $(this).data('previous'); // Track the previous value
        $(this).data('previous', selectedName); // Update the previous value

        if (selectedName && selectedName !== 'DIVERTED') {
            updateUserStatus_2(selectedName, 'busy');
            if (previousValue && previousValue !== 'DIVERTED') {
                updateUserStatus_2(previousValue, 'free'); // Set previous value to free
            }
        } else if (!selectedName && previousValue && previousValue !== 'DIVERTED') {
            updateUserStatus_2(previousValue, 'free');
        }
    });
       // Handle the clear event in Select2
       $('.userSelection_alp').on('select2:unselect', function(e) {
        var previousValue = $(this).data('previous');
        if (previousValue && previousValue !== 'DIVERTED') {
            updateUserStatus_2(previousValue, 'free');
            refreshDropdowns_2(previousValue, 'free'); // Refresh dropdowns to mark the user as free
        }
    });
});
</script>

<!-- <script>
    $(document).ready(function() {
        $('.Des_select[]').on('change', function() {
            var designation = $(this).val(); // Get selected value
            var index = $(this).data('index'); // Get the index of the current dropdown

            $.ajax({
                url: 'daily_detail.php',
                type: 'POST',
                data: {Des_select: designation},
                success: function(data) {
                    $('.userSelection[data-index="' + index + '"]').html(data); // Update only the matching index userSelection
                },
                error: function() {
                    $('.userSelection[data-index="' + index + '"]').html('<option>Error retrieving data.</option>');
                }
            });
        });
    });
</script> -->
<!-- <script>
    $(document).ready(function() {
        $('.Des_select').on('change', function() {
            var designation = $(this).val();  // Get the value of the selected designation
            var $thisRow = $(this).closest('tr');  // Find the closest table row (<tr>)

            $.ajax({
                url: 'daily_detail.php',
                type: 'POST',
                data: {Des_select: designation},
                success: function(data) {
                    $thisRow.find('.userSelection').html(data);  // Update only userSelection in the same row
                },
                error: function() {
                    $thisRow.find('.userSelection').html('<option>Error retrieving data.</option>');
                }
            });
        });
    });
</script> -->


</body>
</html>