<html>

<head>
    <!-- Jacob Deepu Roll No. 29 -->
    <title>Login Form</title>
    <style>
        table {
            width: 420px;
            padding: 45px;
            margin-top: 12%;
            margin-left: 38%;
            position: absolute;
        }
        th {
            font-size: 20px;
            text-align: left;
            color: #354B64;
        }
        td {
            font-size: 20px;
            text-align: left;
            padding: 0px 0px 12px 0px;
        }
        input[type=text] {
            padding: 10px 0px 10px 0px;
            font-size: 20px;
            color: #162234;
            background-color: #FDFDFD;
        }
        input[type=password] {
            padding: 10px 0px 10px 0px;
            font-size: 20px;
            color: #162234;
            background-color: #FDFDFD;
        }
        input[type=submit] {
            width:270px;
            font-size: 18px;
            text-align: center;
            padding: 14px;
            border: 2px;
            border-radius: 24px;
            color: #FDFDFD;
            background-color: #162234;
        }
    </style>
    <?php
        $name = $password = "";
        if(isset($_POST['submit'])) {
            $name = $_POST['username'];
            $password = $_POST['password'];
            if($name == "admin" && $password == "1234") {
                echo '<script>alert("Login Succesfull");</script>';
            }
            else {
                echo '<script>alert("Failed to login");</script>';
            }
        }
    ?>
</head>

<body>
    <form name="login" method="post">
        <table align="center" border="0">
            <tr>
                <th><label for="username">Username</label></th>
            </tr>
            <tr>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <th><label for="password">Password</label></th>
            </tr>
            <tr>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>
