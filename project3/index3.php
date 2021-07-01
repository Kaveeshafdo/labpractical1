<html>
    <head>
        <title>lab practical 1 project 3</title>
        <link href ="style3.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        
        <form method="GET" action="index3.php">
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
   

    </body>
</html>
