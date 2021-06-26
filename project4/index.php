<html>
    <head>
        <title>lab project 1 practical 4</title>
    </head>
    <body>
         <?php
         $Borrowed_amount = 20000000;
         $anum_interest_rate = 17/100;
         $years = 05;
         
         $monthly_installment = ((($Borrowed_amount * $anum_interest_rate)*$years) + $Borrowed_amount)/($years*12);
         
         
         ?>
        <table border="1">
            
           
                <tr>
                    <td>Borrowed amount</td>
                    <td><?php echo $Borrowed_amount;?></td>
                </tr>
                <tr>
                    <td>Anum Interest Rate</td>
                    <td><?php echo $anum_interest_rate;?></td>
                </tr>
                <tr>
                    <td>Years</td>
                    <td><?php echo $years;?></td>
                </tr>
                <tr>
                    <td>Monthly Installment</td>
                    <td><?php echo $monthly_installment;?></td>
                </tr>
            
        </table>

    </body>
</html>
