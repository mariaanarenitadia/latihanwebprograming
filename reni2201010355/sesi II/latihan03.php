<?php
    $pr = "p1";
    if(isset($_GET["pg"])){
        $pr =$_GET["pg"];
    }

    $konten = "";
    $judulpage = "";

    switch($pr){
        case "p1":
            $judulpage = "halaman 1";
            $konten = "<h3>halaman p1</h3>";
            $konten .= "<p>menampilkan halaman p1</p>";
            break;
        case "p2":
            $judulpage = "halamaan 2";
            $konten = "<h3>halaman p2</h3>";
            $konten .= "<p>menampilkan halaman p2</p>";
            break;
    
        case "p3":
            $judulpage ="halaman 3";
            $konten = "<h3>halaman p3</h3>";
            echo $konten .="<p>menampilkan halaman p3</p>";
            break;
            default;
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?$judulpage;?></title>
    </head>
    <body>

    <a href="latihan03.php?pg=P1">halamaan1</a> <a href="latihan02.php?pg=P2">halaman2</a> <a href="latihan03.php?pg=P3">halaman3</a>;
        <?php
        echo $konten;
    ?>
        
    </body>
    </html>