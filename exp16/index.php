<html>
    <head>
        <title>Student Details</title>
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
                    <td>Name</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><input type="text" name="dept"></td>
                </tr>
                <tr>
                    <td>Mark 1</td>
                    <td><input type="text" name="m1"></td>
                </tr>
                    <tr>
                    <td>Mark 2</td>
                    <td><input type="text" name="m2"></td>
                </tr>
                <tr>
                    <td>Mark 3</td>
                    <td><input type="text" name="m3"></td>
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
    $rno = $_GET["rno"];
    $uname = $_GET["uname"];
    $dept = $_GET["dept"];
    $m1 = $_GET["m1"];
    $m2 = $_GET["m2"];
    $m3 = $_GET["m3"];
    $con = mysqli_connect("localhost","root","root","student");
    if(!$con)
        echo "DB Connection error";

    $sql = "insert into ct values ('$rno','$uname','$dept','$m1','$m2','$m3')";
    $res = mysqli_query($con,$sql);
    
    if($res)
        echo"Data inserted sucessfully";
    else
        echo"Insertion error";
?>
