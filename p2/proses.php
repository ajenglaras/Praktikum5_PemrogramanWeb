<?php
include "inc.php"; //termasuk halaman inc.php
echo $angka; //variabel angka
echo "<br>";
if ($angka==100){ //jika angka=100
    echo "Memuaskan"; //maka akan mencetak memuaskan
} elseif ($angka<100&&$angka>=85) { //jika angka=85
    echo "Sangat Baik";  //maka akan mencetak sangat baik
} elseif ($angka<85&&$angka>=70) { //jika angka 85-70
    echo "Baik"; //maka akan mencetak baik
} elseif ($angka<70&&$angka>=55) { //jika angka 70-55
    echo "Cukup"; //maka akan mencetak cukup
} elseif ($angka<55&&$angka>=0) { //jika angka 55-0
    echo "Kurang"; //maka akan mencetak kurang
}
?>