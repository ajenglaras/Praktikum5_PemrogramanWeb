<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="postAct.php"> <!--menambahkan inputan form post-->
            <table width="400" align="center" cellpadding="2" cellspacing="2"> <!--menambahkan tabel dengan lebar 400, letak di tengah,
            jarak cell 2 dan spasi 2-->
                <tr>
                    <td width="130" >Nama</td> <!--isi tabel nama dengan lebar 130-->
                    <td><input type="text" name="nama"></td> <!--input nama-->
                </tr>
                <tr>
                    <td width=" 130" >Email</td> <!--isi tabel email dengan lebar 130-->
                    <td><input type="text" name="email"></td>  <!--input email-->
                </tr>
                <tr>
                    <input type="submit" name="btnLogin" value="Login">  <!--input button untuk submit login-->
                    <input type="reset" name="reset" value="Reset"> <!--input button untuk reset-->
                </tr>
            </table>
        </form>
    </body>
</html>