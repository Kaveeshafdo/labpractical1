<html>
    <head>
        <title>lab project 1 practical 1</title>
        <link href ="style.css" type="text/css" rel="stylesheet"><!-- link exernal css file -->
    </head>
    <body>
        <?php
            $transport_income = 626523.32;
            $fuel_charge = 141500.00;
            $income_after_fuel_charge = $transport_income - $fuel_charge;
            $driver_salary = $income_after_fuel_charge * 15/100;
            $supporter_salary = $income_after_fuel_charge * 10/100;
            $net_profit_before_tax = $income_after_fuel_charge -($driver_salary + $supporter_salary);
            $income_tax = $transport_income *10/100;
            $net_profit_after_tax = $net_profit_before_tax - $income_tax;
        ?>
        
        <table>
            
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            
            
                <tr>
                    <td>Transport Income</td>
                    <td><?php echo $transport_income; ?></td>
                </tr>
                <tr>
                    <td>Fuel Charge</td>
                    <td><?php echo $fuel_charge; ?></td>
                </tr>
                <tr>
                    <td>Driver Salary</td>
                    <td><?php echo $driver_salary; ?></td>
                </tr>
                <tr>
                    <td>Supporter Salary</td>
                    <td><?php echo $supporter_salary; ?></td>
                </tr>
                <tr>
                    <td>Net Profit before TAX</td>
                    <td><?php echo $net_profit_before_tax; ?></td>
                </tr>
                <tr>
                    <td>Income Tax</td>
                    <td><?php echo $income_tax; ?></td>
                </tr>
                <tr>
                    <td>Net Profit after TAX</td>
                    <td><?php echo $net_profit_after_tax; ?></td>
                </tr>
            
        </table>


    </body>
</html>
