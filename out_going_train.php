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
    .header {
        text-align: center;
        margin: 20px 0;
        width: 100%;
    }
    .note-container {
        text-align: center;
        margin-top: 20px;
        width: 100%;
        max-width: 800px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .stats-table {
        width: 100%;
        margin: 20px auto;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .note-container, .stats-table {
            width: 90%; /* Makes the container use more of the screen on smaller devices */
        }
        table, .stats-table {
            width: 90%;
        }
        th, td {
            padding: 6px; /* Smaller padding on smaller screens */
        }
    }

    @media (max-width: 480px) {
        .header, .note-container, .stats-table {
            width: 100%; /* Use full width on very small devices */
        }
        th, td {
            padding: 4px; /* Even smaller padding for very small devices */
            font-size: 0.8em; /* Smaller font size on very small devices */
        }
    }
</style>

</head>
<body>
<?php
include "connection.php";
?>
  <h1>1:out going</h1>
    <form action="daily_detail.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <h1>2:in coming</h1>
    <form action="incoming_train.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <h1>3:lobby duty</h1>
    <form action="lobby_duty.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <h1>4:TOD in</h1>
    <form action="daily_detail.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
    <h1>5:TOD out going</h1>
    <form action="daily_detail.php" method="post">
        <label for="date">Choose a date:</label>
        <input type="date" id="date" name="date">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
