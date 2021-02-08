<html>
    <head>
        <title>Product details</title>
    </head>
    <body>
    <h1>>PRODUCT DETAILS</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>Click here for product details</td>
                    <td><input type="submit" value="Details"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    $con = mysqli_connect("localhost","root","root","inventory");
    if(!$con)
        echo "DB Connection error";
    
    $sql = "select * from product";
    $res = mysqli_query($con,$sql);

    echo "<h1>PRODUCT DETAILS</h1>";
    echo "<table border=1 align=center>";
    echo"<tr>";
    echo "<th>product</th>";
    echo "<th>inventer</th>";
    echo"</tr>";

    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>". $row['pname']. "</td>";
        echo "<td>". $row['inventer']. "</td>";
        echo "</tr>";
    }
?>
