<html>
    <head>
        <style type="text/css"> /*memberikan style css */
            body {
                background: paleturquoise; text-align:center; margin-top:2cm;}
            section {
                background: mediumturquoise; color:black; padding: 1em; position: absolute; top: 50%; left: 50%; margin-right: -50%; 
                transform: translate(-50%, -50%) }
            a {
                background:lightblue; color:black; padding:5px;
            }
        </style>
         <!--pada bagian style body memberikan style pada bagian baody web yaitu background web warna paleturquoise dan letak text di tengah
        dengan jarak margin atas 2 cm, pada bagian style section memberikan style warna background mediumturquoise, warna font hitam,
        jarak antara text dan border 1em, kemudian membawa semua elemen yang berada di body web ke posisi center di tengah-tengah 
        dengan jarak margin kanan, kiri, atas, dan bawah sebesar 50% dari luas tampilan. dan pada a setting background warna lightblue
        warna font hitam padding 5px-->
    </head>
    <body>
        <section>
        <?php
            ob_start(); /*menyimpan output dalam internal buffer PHP*/
            session_start(); /*memulai eksekusi session pada server */
            ob_end_clean(); /*untuk menghapus otput*/
            if(isset($_SESSION["username"])){ /*jika sesi login berhasil*/
                echo "LOGIN BERHASIL <hr>"; /*menampilkan text login berhasil */
                echo "Username : ajenglw <hr>"; /*menampilkan text username*/
                echo "Nama : Ajeng Laras Wangi <hr>";   /*menampilkan text nama user */
                echo "Email : ajenglaras6@gmail.com <hr>";  /*menampilkan email user*/
                echo "Waktu Login : "; 
                echo date ("m-F-Y, g:i:s a "); /*menampilkan waktu login*/
                echo "<hr>";
                echo "Lihat profil di sini";
                echo "<a href='index.php'>Menu</a>"; /*redirect menuju halaman menu */
                echo "<hr>";
                echo "<a href='logout.php'>Logout</a>"; /*redirect menuju halaman logout*/
            }
            else{
                echo header("location:form_login.php");
            }
        ?>
        </section>
    </body>
</html>