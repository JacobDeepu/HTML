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
    $con=mysql_connect("localhost","root","mysql");
    if(!$con)
        echo "DB Connection error";

    $db = mysql_select_db("inventory",$con);
    if(!$db)
        echo "DB selection error";
    
    $sql = "select * from product";
    $res = mysql_query($sql,$con);

    echo "<h1>PRODUCT DETAILS</h1>";
    echo "<table border=1 align=center>"
    echo"<tr>";
    echo "<th>product</th>"
    echo "<th>inventer</th>";
    echo"</tr>";

    while($row=mysql_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>". $row['pname']. "</td>";
        echo "<td>". $row['inventer']. "</td>";
        echo "</tr>";
    }
?>
