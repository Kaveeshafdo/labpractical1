<html>
    <head>
        <link href ="style.css" type="text/css" rel="stylesheet">
        <title>Lab practical 1 project2</title>
    </head>
    <body>
    <form method="GET" action="index.php">
        <center> <input type="text" id="temin" name="tem" placeholder="Enter fahrenheit value "><br><br></center>
           <center> <input type="submit" id="sub" name="submit" value="CONVERT"></center>
        </form>
        <?php
       
            
           if(isset($_GET["submit"])){
               $fahrenheit = $_GET["tem"];
               $centigrade = ($fahrenheit - 32)* 5/9;
               echo "<p>Your centigrade value is ".$centigrade."</p>";
      
           }
           else{
               $centigrade = 0;
              echo "<p>Your centigrade value is ".$centigrade."</p>";
           }
           
        ?>
    </body>
</html>
