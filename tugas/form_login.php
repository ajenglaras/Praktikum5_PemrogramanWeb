<!DOCTYPE html>
<html lang="en"> <!--bahasa ingris-->
    <head>
        <title>Login Form</title> <!--judul pada header-->
    </head>
        <style type="text/css"> /*memberikan style css*/
            body {
                background: paleturquoise; text-align:center; margin-top:2cm;}
            section {
                background: mediumturquoise; color:black; padding: 1em; position: absolute; top: 50%; left: 50%; margin-right: -50%; 
                transform: translate(-50%, -50%) }
        </style>
        <!--pada bagian style body memberikan style pada bagian baody web yaitu background web warna paleturquoise dan letak text di tengah
        dengan jarak margin atas 2 cm, pada bagian style section memberikan style warna background mediumturquoise, warna font hitam,
        jarak antara text dan border 1em, kemudian membawa semua elemen yang berada di body web ke posisi center di tengah-tengah 
        dengan jarak margin kanan, kiri, atas, dan bawah sebesar 50% dari luas tampilan-->
    <body>
        <h1 style= margin-top:2cm;>LOGIN KE WEBSITE AJENG LARAS</h1> <!--judul website dengan jarak margin atas 2cm-->
        <section> 
        <?php /*script php*/
            if(isset($_GET["login_error"])){ /*set login eror*/
                echo "<h2 style='color:red';>Username atau password salah!!!!!!</h2>"; /*print login eror */
                }
        ?>
        <h1>Form Login</h1> <!--judul form login-->
        <form method="post" action="cek_login.php"> <!--menambahkan inputan user berupa username dan password-->
            <p><input type="text" name="username" value="" placeholder="Username"></p> <!--inputan username oleh user-->
            <p><input type="password" name="password" value="" placeholder="Password"></p> <!--inputan password oleh user-->
            <p class="submit"><input type="submit" name="commit" value="Login"></p> <!--inputan submit untuk login-->
        </form>
        </div>
        </section>
    </body>
</html> 