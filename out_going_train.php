<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing Trains and Detailed Notes</title>
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
    </style>
</head>
<body>
<?php
include "connection.php";
$sql = "SELECT Sno,Name, Destination, LR, FROM lp_name";
$result = $conn->query($sql);
?>
    <div class="header">
        <h2>OUT GOING TRAINS</h2>
        <div>Date: 24/02/2025</div>
        <div>Day: Monday</div>
    </div>

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
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>10 Hours</td>
            <td>Jane Doe</td>
            <td>8 H</td>
            <td>Express</td>
            <td>12345</td>
            <td>City A</td>
            <td>12:00</td>
            <td>Y</td>
        </tr>
        <!-- Add more rows as necessary -->
    </table>

    <div class="note-container">
        <div class="header-note">
            उपरोक्त डेटा प्रविष्टियाँ हैं, आवश्यकतानुसार व्यवस्था किया जा सकता है।
            <br>
            NOTE: ऐसी LP/ALP के कार्य इत्यादि, विवरण में आवश्यकता से विचार की जा सकती है।
            <br>
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
            <tr>
                <td>LPP</td>
                <td>41</td>
                <td>25</td>
            </tr>
            <tr>
                <td>LPG</td>
                <td>*</td>
                <td>32</td>
            </tr>
            <tr>
                <td>TOTAL</td>
                <td>90</td>
                <td>103</td>
            </tr>
            <tr>
                <td>ALP</td>
                <td>90</td>
                <td>100</td>
            </tr>
        </table>
    </div>
</body>
</html>
