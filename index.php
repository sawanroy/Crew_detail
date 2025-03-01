<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Data</title>
</head>


<body>
    <form action="submit.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        crew_id: <input type="text" name="crew_id" required><br><br>
        Designation: <input type="text" name="designation" required><br><br>
        status: <input type="text" name="status" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <h1>Upload Excel File to Database</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Excel File to upload:
        <input type="file" name="file" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">

</body>
</html>
