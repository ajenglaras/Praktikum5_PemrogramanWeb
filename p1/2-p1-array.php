<html>
    <head>
        <title> Pemrograman PHP dengan Array</title> <!--judul pada header browser-->
    </head>
    <body>
        <?php
        //penulisan array dapat dibuat seperti berikut
        $nama[] = "Agung Teguh"; //nama pada index 0
        $nama [] = "Wibowo" ; //nama pada index 1
        $nama[] = "Almais"; //nama pada index 2
        echo $nama[1] . $nama[2] . $nama[0]; //menampilkan nama berdasarkan urutan
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array; //menampilkan output jumlah array
        ?>
    </body>
</html>