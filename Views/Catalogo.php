<?php
session_start();
$lista=$_SESSION['lista'];
echo sizeof($lista);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>CATALOGO</h2>
        <table border="0" width="700" align="center">
            <?php
            $num=0;
                    foreach ($lista as $reg){
                        if($num==3){
                            echo "<tr>";
                            $num=1 ; 
                        }
                        else {
                            $num++;
                        }
                    }
            ?>
            <th><img src="../Images/<?php echo $reg[6] ?>" width="120"
                     height="120"></th>
            <?php
            
            ?>
            
        </table>
    </body>
</html>
