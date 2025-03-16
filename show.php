<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing Trains and Detailed Notes</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
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
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header, .note-container {
            text-align: center;
            margin-top: 20px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .stats-table {
            width: 50%;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Date Picker Form</h1>
    <form action="daily_detail.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <div class="header">
        <h2>OUTGOING TRAINS</h2>
        <div>Date: 24/02/2025</div>
        <div>Day: Monday</div>
    </div>
    <!-- Assuming $results has been populated correctly -->
    <table>
        <tr>
            <th>S. No.</th>
            <th>LP NAME</th>
            <th>LP REST</th>
            <th>ALP NAME</th>
            <th>ALP REST</th>
            <th>MAIL/EXP DETAIL</th>
            <th>Train No.</th>
            <th>Dest.</th>
            <th>Time</th>
            <th>I/C</th>
        </tr>
        <!-- Loop through each row in results -->
        <!-- Sample static row for demonstration -->
        <tr>
            <td>1</td>
            <td><select name="lpName" id="lpNameSelect"></select></td>
            <td><input type="text" name="lpRest" id="lpRestInput"></td>
            <td><select name="alpName" id="alpNameSelect"></select></td>
            <td><input type="text" name="alpRest" id="alpRestInput"></td>
            <td><input type="text" name="mailExpDetail" id="mailExpDetailInput"></td>
            <td>12345</td>
            <td>City X</td>
            <td>10:00 AM</td>
            <td>IC Name</td>
        </tr>
    </table>
    <div class="note-container">
        <div class="header-note">
            उपरोक्त डेटा प्रविष्टियाँ हैं, आवश्यकतानुसार व्यवस्था किया जा सकता है।<br>
            NOTE: ऐसी LP/ALP के कार्य इत्यादि, विवरण में आवश्यकता से विचार की जा सकती है।<br>
            NOTE-LP/ALP LINK इत्यादि OUT STN. से SPR तक समय SIGN/OFF से लेकर समय आवश्यकता-SR DEE(TRO)/BP
        </div>
        <table class="stats-table">
            <tr>
                <th>DESIG</th>
                <th>SS</th>
                <th>OR</th>
            </tr>
            <tr>
                <td>LPM</td>
                <td>49</td>
                <td>46</td>
            </tr>
            <!-- Add more rows as necessary -->
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#lpNameSelect, #alpNameSelect').select2({
                placeholder: "Select a name",
                allowClear: true
            });
        });
    </script>
</body>
</html>
