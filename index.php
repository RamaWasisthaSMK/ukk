<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator sederhana UKK</title>
</head>
<style>
    body{
        background-color: yellow;
        text-align: center;
        font-family: arial;
        font-weight: bolder;
    }

    h1{
        color: black;
        font-size: 45px;
    }

    form{
        background-color: white;
        width: 1000px;
        height: 160px;
        text-align: center;
        font-family: arial;
        margin: 0 auto;
        border-radius: 30px;
        border-width: 12px;
        border-style: solid;
    }

    input{
        background-color: white;
        width: 175px;
        height: 50px;
        border-radius: 60px;
        border-width: 5px;
        border-style: solid;
        font-family: arial;
        font-size: 17px;
        font-weight: bold;
        text-align: center;
        margin-top: 10px;
    }

    button{
        background-color: white;
        width: 100px;
        height: 50px;
        border-radius: 60px;
        border-width: 7px;
        border-style: solid;
        margin-top: 3px;
        text-align: center;
        font-weight: bold;
        font-size: 20px:
    }

    select{
        background-color: white;
        width: 90px;
        height: 60px;
        border-radius: 60px;
        border-width: 7px;
        border-style: solid;
        margin-top: 3px;
        text-align: center;
        font-weight: bold;
        font-size: 35px;
    }

    h2{
        color:black
        text-align: center;
        font-weight: bold;
        font-size: 50px;
    }
</style>
<body>
    <H1>Kalkulator Sederhana</H1>
    <form action="" method="post">
        <input type="number" name="angka_1" placeholder="Masukkan Angka 1">
        <select name="operator" id="">
            <option value="tambah">+</option>
            <option value="kurangi">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="number" name="angka_2" placeholder="Masukkan Angka 2">
        <br>
        <button name="hitung">Hitung</button>
        <button type="reset">Ulangi</button>
    </form>
</body>

<?php
if (isset ($_POST ["hitung"]))
    {
        $angka_1 = $_POST ["angka_1"];
        $angka_2 = $_POST ["angka_2"];
        $simbol = $_POST ["operator"];

        if (empty($angka_1) || empty($angka_2) || empty($simbol))
        {
            echo "<p class='error'> Harap isi bidang yang diwajibkan! </p>";
        }
        else
        {
            if ($simbol=="tambah")
            {
                $hasil = $angka_1 + $angka_2 ;
                echo "<p2 class='hasil'> <h2> Hasil penghitungan adalah <br> $hasil </h2> </p2 class='hasil'>";
            }

            else if($simbol=="kurangi")
            {
                $hasil = $angka_1 - $angka_2 ;
                echo "<p2 class='hasil'> <h2> Hasil penghitungan adalah <br> $hasil </h2> </p2 class='hasil'>";
            }

            else if ($simbol=="kali")
            {
                $hasil = $angka_1 * $angka_2 ;
                echo "<p2 class='hasil'> <h2> Hasil penghitungan adalah <br> $hasil </h2> </p2 class='hasil'>";
            }

            else if ($simbol=="bagi")
            {
                $hasil = $angka_1 / $angka_2 ;
                echo "<p2 class='hasil'> <h2> Hasil penghitungan adalah <br> $hasil </h2> </p2 class='hasil'>";
            }

            else 
            {
                echo "<h3>Maaf, program mengalami error";
            }
        }
    }
?>

</html>