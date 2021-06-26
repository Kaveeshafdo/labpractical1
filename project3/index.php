<html>
    <head>
        <title>lab practical 1 project 3</title>
        <link href ="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        
        <form method="GET" action="index.php">
            <center><input type="text" id="radin" name="rad" placeholder="Enter radius value"><br><br></center>
            <center><input type="submit" id="sub1" name ="submit" value="Answer"></center>
        </form>
        
        <?php
        if(isset($_GET["submit"])){
        $pi = 3.14;
        $radius = $_GET["rad"];
        $area = $pi * $radius * $radius;
        $perimeter = 2 * $pi * $radius;
        echo "<p> Area value is ".$area."</p>";
        echo "<p>Perimeter value is ".$perimeter."</p>";
        }
       
        ?>
        
<!--        <table border="1">
            
              <tr>
                    <td>The radius entered</td>
                    <td><?php echo $radius;?></td>
                </tr>
                <tr>
                    <td>The area</td>
                    <td><?php echo $area;?></td>
                </tr>
                <tr>
                    <td>The Perimeter</td>
                    <td><?php echo $perimeter;?></td>
                </tr>
            
        </table>-->

    </body>
</html>
