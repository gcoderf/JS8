<html>
<head>
</head>
<body>
    <?php
            $A = 7;
            $B = 8;
            $C = 9;
            ?>
            
    <p><b>Menentukan Angka yang terbesar</b></p>
    <p>----------------------------------------------</p>
    <p>Angka Pertama = <?php echo "$A" ?></p>   
    <p>Angka Kedua = <?php echo "$B" ?></p>
    <p>Angka Ketiga = <?php echo "$C" ?></p>
    <p>----------------------------------------------</p><br>
    
    <?php
    if ($A > $B && $A>$C)
            echo " = $A adalah yang terbesar";
            elseif ($B > $A && $B>$C)
            echo "= $B adalah yang terbesar";
            else
            echo "= $C adalah yang terbesar";
    ?> 
</body>
</html>