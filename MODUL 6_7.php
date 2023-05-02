<?php
$angka1 = @$_POST['angka1'];
$angka2 = @$_POST['angka2'];
$hasil = @$_POST['hasil'];

if(isset($_POST['tambah']))
{
    $hasil = $angka1 + $angka2;
}
if(isset($_POST['kurang']))
{
    $hasil = $angka1 - $angka2;
}
if(isset($_POST['kali']))
{
    $hasil = $angka1 *   $angka2;
}
if(isset($_POST['bagi']))
{
    $hasil = $angka1 / $angka2;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
            background-color: pink;
            padding: 5%;
            margin:10px;
            border-radius: 10px;
        }
        .top {
            background-color: pink;
            padding: 20%;
            font-family: courier;
            color:white;
        }
        body{
            background-image: url(./kalkulator.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            font-family: courier;
        }
    </style>
</head>
<body >
    <form method="post">
        <h1><center> KALKULATOR YANG SANGAT SEDERHANA </center></h1>
       <center> <p> Tutorial menggunakan Kalkulator <br>
1. Masukkan angka pertama yang ingin diolah<br>
2. Masukkan angka pertama yang ingin diolah<br>
3.Pilih operasi hitung yang ingin digunakan, dengan cara meng-klik lambangnya<br>
4.Kemudian hasil akan muncul secara otomatis, hapus angka pertama dan kedua jika ingin menggunakan ulang
<p></center>
        <table border="1" align="center">
            <tr class="top">
                <td colspan="2">KALKULATOR YANG SANGAT SEDERHANA </td>
            </tr>
            <tr>
                <td>Angka Pertama :</td>
         
                <td>
                    <input type="text" name="angka1"  value="<?=$angka1?>">
                </td>
            </tr>
            <tr>
                <td>Angka Kedua : </td>
                
                <td>
                    <input type="text" name="angka2" value="<?=$angka2?>">
                </td>
            </tr>
            <tr>
                
                <td colspan="2">
                <button type="submit" name="tambah" value="+" >+</button>
                <button type="submit" name="kurang" value="-">-</button>
                <button type="submit" name="kali" value="x">x</button>
                <button type="submit" name="bagi" value=":">:</button>

                </td>
                
            </tr>
            <tr>
                <td>Hasil :</td>
                
                <td>
                    <input type="text" name="thasil" value="<?=$hasil?>">
                </td>
            </tr>
           
        </table>
    </form>
</body>
</html>