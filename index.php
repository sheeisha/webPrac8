<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>
    <title>prac7</title>
</head>
<body>
    <div class="container">
        <h1>EMPLOYEE DETAILS</h1>
        <form action="" method="post">
            <div>
                <input type="text" name="empid" id="empid" placeholder="EMP ID" aria-label="EMPLOYEE id">
            </div><br><br>
            <div>
                <input type="text" name="empname" id="empname" placeholder="EMP NAME" aria-label="EMPLOYEE name">
            </div><br><br>
            <div>
                <input type="text" name="empdept" id="empdept" placeholder="EMP DEPT" aria-label="EMPLOYEE department">
            </div><br><br>
            <div>
                <input type="text" name="emppos" id="emppos" placeholder="EMP POS" aria-label="EMPLOYEE position">
            </div><br><br>
            <div>
                <input type="submit" value="insert" onclick="" id="reset" aria-label="reset" formaction="insert.php">
                <input type="submit" value="delete" onclick="" id="delete" aria-label="delete" formaction="delete.php">
                <input type="submit" value="view" onclick="" id="view" aria-label="view" formaction="retrieve.php">
                <input type="submit" value="search" onclick="" id="search" aria-label="search" formaction="search1.php">
                <input type="submit" value="update" onclick="" id="search" aria-label="search" formaction="update.php">
                <input type="reset" value="reset" onclick="" id="insert" aria-label="insert">
            </div>
        </form>
    </div>
</body>
</html>