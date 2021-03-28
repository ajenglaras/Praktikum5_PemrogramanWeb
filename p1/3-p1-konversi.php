<html>
    <head>
        <title>Konversi Tipe</title> <!--judul pada header browser-->
    </head>
    <body>
        <?php  
        $a = 300.4; //set variabel a=300.4
        echo $a;
        echo "<br>";
        echo "tipe Double : ", doubleval ($a), "<br>"; //menampilkan tipe double
        echo "tipe Integer : ", intval ($a), "<br>"; //menampilkan tipe integer
        echo "tipe string : ", strval ($a); //menampilkan tipe string
        ?>
    </body>
</html>