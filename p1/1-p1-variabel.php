<html>
    <head>
        <title> Variabel </title> <!--judul pada header browser-->
    </head>
    <body>
        <?php
        $nilai_1 = 10; //set nilai variabel nilai_1 adalah 10
        $nilai_2 = 3; //set nilai variabel nilai_2 adalah 3
        $nilai_3 = 2 * $nilai_1 + 8 * $nilai_2; //set nilai variabel nilai_3 adalah 2 * nilai_1 + 8 * nilai_2
        echo "nilai = ", $nilai_3; //menampilkan nilai bersama output nilai_3
        echo "<br>";
        $jumlah = $nilai_1 + $nilai_2;
        echo "hasil dari $nilai_1 + $nilai_2 adalah : $jumlah"; echo "<br><br>"; //menampilkan hasil perhitungan
        echo "\"Nama : Ajeng Laras Wangi\" <br>"; //mencetak text nama
        echo "NPM : 19082010058"; //mencetak text npm
        ?>
    </body>
</html>