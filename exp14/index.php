<html>
    <head>
    <!-- Jacob Deepu Roll No. 29 -->
    <title>Pay Slip</title>
    <style>
        h1 {
            color: #1D2D50;
        }
        table {
            width: 60%;
            border: 0px;
        }
        th {
            border: 0px;
            padding: 20px;
            font-size: 20px;
            text-align: left;
            color: #FDFDFD;
            background-color: #354B64;
        }
        td {
            border: 0px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            color: #FDFDFD;
            background-color: #354B64;
        }
        </style>
    </head>
    <?php
        if(isset($_POST['submit'])) {
            $salary = $loan = $da = 0;
            $hra = $gpay = $npay = 0;
            $pf = $insurance = $deduction = 0;

            $salary = $_POST['salary'];
            $loan = $_POST['loan'];
            settype($salary,'int');
            settype($loan,'int');

            if($salary < 20000) {
                $da = ($salary * 0.38);
                $hra = 500;
            }
            elseif($salary >= 20000 && $salary <= 30000) {
                $da =($salary * 0.30);
                $hra = 250;
            }
            elseif($salary > 30000) {
                $da = $salary * 0.25;
                $hra = 150;
            }
            $gpay = $salary + $da +$hra;

            $pf = $salary * 0.08;
            $insurance = $salary * 0.04;
            $deduction = $pf + $insurance + $loan;

            $npay = $gpay - $deduction;
        }
        
        if(isset($_POST['reset'])) {
            $pf = $insurance = $gpay = $npay = "";
        }
    ?>
<body>
<h1 align="center">Enter Details</h1>
    <table align="center" border="4" width="420">
        <form name="payslip" action="index.php" method="POST">
            <tr>
                <th><label for="name">Name</label></th>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <th><label for="empcode">Employee Code</label></th>
                <td><input type="text" id="empcode" name="empcode"></td>
            </tr>
            <tr>
                <th><label for="salary">Basic Salary</label></th>
                <td><input type="text" id="salary" name="salary"></td>
            </tr>
            <tr>
                <th><label for="loan">Loan</label></th> 
                <td><input type="text" id="loan" name="loan"></td>
            </tr>
            <tr>
                <th><label for="email">E-Mail ID</label></th>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="submit" name="reset" value="Reset"></td>
            </tr>
        </form>
    </table>
    <h1 align="center">Pay Slip</h1>
    <table align="center" border="0">
        <tr>
            <th>PF deduction</th>
            <td>Rs. <?php echo $pf; ?></td>
        </tr>
        <tr>
            <th>Insurance deduction</th>
            <td>Rs. <?php echo $insurance; ?></td>
        </tr>
        <tr>
            <th>Gross Pay</th>
            <td>Rs. <?php echo $gpay; ?></td>
        </tr>
        <tr>
            <th>Net Pay</th>
            <td>Rs. <?php echo $npay; ?></td>
        </tr>
    </table>
</body>
</html>
