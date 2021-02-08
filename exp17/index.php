<html>
    <head>
        <title>Mark List</title>
    </head>
    <body>
    <h1>MARK DETAILS</h1>
    <form method="POST">
        <table border=1>
            <tr>
                <td>Register Number</td>
                <td><input type="text" name="rno"></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    </body>
</html>

<?php
    $rno = $_POST["rno"];
    $con=mysqli_connect("localhost","root","root","student");
    if(!$con)
        echo "DB Connection error";

    $sql = "select * from ct where rno = '$rno'";

    $res = mysqli_query($con,$sql);

    echo "<h1>STUDENT DETAILS</h1>";
    echo "<table border=1 align=center>";
    echo"<tr>";
    echo "<th>Register No: </th>";
    echo "<th>Name: </th>";
    echo "<th>Department: </th>";
    echo "<th>Mark 1: </th>";
    echo "<th>Mark 2: </th>";
    echo "<th>Mark 3: </th>";
    echo"</tr>";

    $row = mysqli_fetch_array($res);

    echo"<tr>";
    echo"<td>". $row['rno']. "</td>";
    echo"<td>". $row['uname']. "</td>";
    echo"<td>". $row['dept']. "</td>";
    echo"<td>". $row['m1']. "</td>";
    echo"<td>". $row['m2']. "</td>";
    echo"<td>". $row['m3']. "</td>";
    echo"</tr>";
?>
