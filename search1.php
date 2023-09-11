<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:nth-child(even){
            background-color:bisque;
        }
    </style>
</head>
<body>
    <?php
    
    $host="localhost";
    $user="root";
    $password="";
    $database="syit31db";

    $con=mysqli_connect($host,$user,$password,$database);
    if(!$con)
    {
        die("error: ".mysqli_connect_error());
    }
    $id=$_POST['empid'];
    $name=$_POST['empname'];
    $dept=$_POST['empdept'];
    $pos=$_POST['emppos'];

    $sql ="SELECT * FROM emp WHERE emp_dept='$dept'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0)
    {
        // echo "<table border='1'>
        // <tr>
        // <th>id</th>
        // <th>name</th>
        // <th>dept</th>
        // <th>pos</th>
        // </tr>";

    

    while($row=mysqli_fetch_assoc($result))
    {
        echo '<!DOCTYPE html>
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
                        <input type="text" name="empid" id="empid" placeholder="EMP ID" value="'.$row["emp_id"].'" aria-label="EMPLOYEE id">
                    </div><br><br>
                    <div>
                        <input type="text" name="empname" id="empname" placeholder="EMP NAME" value="'.$row["emp_name"].'"aria-label="EMPLOYEE name">
                    </div><br><br>
                    <div>
                        <input type="text" name="empdept" id="empdept" placeholder="EMP DEPT" value="'.$row["emp_dept"].'"aria-label="EMPLOYEE department">
                    </div><br><br>
                    <div>
                        <input type="text" name="emppos" id="emppos" placeholder="EMP POS" value="'.$row["emp_position"].'"aria-label="EMPLOYEE position">
                    </div><br><br>
                    <div>
                    <input type="submit" value="insert" onclick="" id="reset" aria-label="reset" formaction="insert.php">
                    <input type="submit" value="delete" onclick="" id="delete" aria-label="delete" formaction="delete.php">
                    <input type="submit" value="view" onclick="" id="view" aria-label="view" formaction="retrieve.php">
                    <input type="submit" value="search" onclick="" id="search" aria-label="search" formaction="search1.php">
                    <input type="submit" value="update" onclick="" id="search" aria-label="search" formaction="update.php">
                    <input type="submit" value="reset" onclick="" id="insert" aria-label="reset" formaction="index.php">
                    </div>
                </form>
            </div>
        </body>
        </html>';
        // echo'<tr>
        // <td><input type="text" value="'.$row["emp_id"].'"></td>
        // <td><input type="text" value="'.$row["emp_name"].'"</td>
        // <td><input type="text" value="'.$row["emp_dept"].'"</td>
        // <td><input type="text" value="'.$row["emp_position"].'"</td>
        // </tr>';
    }
    echo "</table>";
    }
    else
    {
        echo "NO RESULTS";
    }
    mysqli_close($con);

    ?>
</body>
</html> 