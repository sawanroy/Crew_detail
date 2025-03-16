<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture all data from POST
    $lp_names = $_POST['userSelection'] ?? [];
    $alp_names = $_POST['userSelection_alp'] ?? [];
    $lp_rests = $_POST['lp_rest'] ?? [];
    $alp_rests = $_POST['alp_rest'] ?? [];
    $train_nos = $_POST['train_no'] ?? [];
    $destinations = $_POST['destination'] ?? [];
    $times = $_POST['time'] ?? [];
    $remarks = $_POST['remark'] ?? [];
    $m_e_deteail = $_POST['train_type'] ?? []; 
?>

    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>LP NAME</th>
                        <th>LP REST</th>
                        <th>ALP NAME</th>
                        <th>ALP REST</th>
                        <th>MAIL/EXP DETAIL</th>
                        <th>TRAIN NO.</th>
                        <th>DEST.</th>
                        <th>TIME</th>
                        <th>REMARK</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Ensure variables are defined and are arrays
                    if(isset($lp_names) && is_array($lp_names)) {
                        foreach ($lp_names as $index => $lp_name) {
                            $alp_name = $alp_names[$index] ?? '';
                            $lp_rest = $lp_rests[$index] ?? '';
                            $alp_rest = $alp_rests[$index] ?? '';
                            $train_no = $train_nos[$index] ?? '';
                            $destination = $destinations[$index] ?? '';
                            $time = $times[$index] ?? '';
                            $remark = $remarks[$index] ?? '';
                            $mail_exp_detail=$m_e_deteail[$index] ?? '';
                            
                            
                            // Format the time to display only hours and minutes
                            $timeFormatted = (new DateTime($time))->format('H:i');
                            
                            ?>
                            <tr>
                                <td><?php echo ($index + 1); ?></td>
                                <td><input type="text" name="lp_name[]" value="<?php echo htmlspecialchars($lp_name); ?>" class="form-control"></td>
                                <td><input type="text" name="lp_rest[]" value="<?php echo htmlspecialchars($lp_rest); ?>" class="form-control"></td>
                                <td><input type="text" name="alp_name[]" value="<?php echo htmlspecialchars($alp_name); ?>" class="form-control"></td>
                                <td><input type="text" name="alp_rest[]" value="<?php echo htmlspecialchars($alp_rest); ?>" class="form-control"></td>
                                <td><input type="text" name="train_type[]" value="<?php echo htmlspecialchars($mail_exp_detail); ?>" class="form-control"></td>
                                <td><input type="text" name="train_no[]" value="<?php echo htmlspecialchars($train_no); ?>" class="form-control"></td>
                                <td><input type="text" name="destination[]" value="<?php echo htmlspecialchars($destination); ?>" class="form-control"></td>
                                <td><input type="text" name="time[]" value="<?php echo htmlspecialchars($timeFormatted); ?>" class="form-control"></td>
                                <td><input type="text" name="remark[]" value="<?php echo htmlspecialchars($remark); ?>" class="form-control"></td>


                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
