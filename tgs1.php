<html>
    <body>
    <?php
    $a=array(array(6,2),array(11,3));
    $b=array(array(5,3),array(4,3));

    echo "Pemjumlahan Matriks 2x2 <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>
    </body>
</html>