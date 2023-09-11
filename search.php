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
    <h1>data:</h1>
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
        echo "<table border='1'>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>dept</th>
        <th>pos</th>
        </tr>";

    

    while($row=mysqli_fetch_assoc($result))
    {
        echo'<tr>
        <td><input type="text" value="'.$row["emp_id"].'"></td>
        <td><input type="text" value="'.$row["emp_name"].'"</td>
        <td><input type="text" value="'.$row["emp_dept"].'"</td>
        <td><input type="text" value="'.$row["emp_position"].'"</td>
        </tr>';
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