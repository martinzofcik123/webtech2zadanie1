<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        #okno{
            background-color: rgba(0,0,0,0.5);
            opacity back: 0.3;
        }
        #mydiv {
            position:fixed;
            top: 50%;
            left: 50%;
            width:30em;
            height:18em;
            margin-top: -9em; /*set to a negative number 1/2 of your height*/
            margin-left: -15em; /*set to a negative number 1/2 of your width*/
            border: 1px solid #ccc;
            background-color: #f3f3f3;
        }
        footer {
            width: 100%;
            bottom: 0;
            left: 0;
            color: rgb(253, 253, 253);
            background-color: rgba(18, 18, 19, 0.5);
            text-align: center;
            position: absolute;
            width: 100%;
        }
    </style>



</head>
<body id="mydiv">
<div id="okno">
    Kliknutím môžete nahrať súbor =>
    <a href="formular.php" style="color:#FFFFF0;">FORMULÁR</a>
</div>
</body>


</html>
<?php

$dir = "/home/xpetrikj3/public_html/zadanie_1/files/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        $files= array();
        $obsah= array();
        $i = 0;

        while (($file = readdir($dh)) !== false) {
            if(($file!="..")&&($file!=".")&&($file!="upload.php")&&($file!="index.php")&&($file!="script.js")&&($file!="formular.php")&&($file!="style.css")){
                $datum = date("F d Y ", filemtime($file));
                $velkost= filesize($file)." bajtov";

                $obsah[0] = $file;
                $obsah[1] = $velkost;
                $obsah[2] = $datum;
                $files[$i] = $obsah;
                $i=$i+1;
            }
        }
        $j=$i;
        $flag=false;
        rsort($files);
        $i=0;
        ?>
        <table>

        <tr><td>Názov <a href="?sort=true">A-Z</a> <a href="?sort=false">Z-A</a></td><td>Veľkost </td><td>Dátum</td></tr>
        <?php
        $pomoc=false;
        if(!empty($_GET['sort'])){
            $pomoc = $_GET['sort'];
        }

        if($pomoc=="true"){
            sort($files);
        }
        if($pomoc=="false"){
            ksort($files);
        }
        while ($j!== $i) {$url="/zadanie_1/files/".$file;

            $nazov=$files[$i][0];
            $datum =$files[$i][1];
            $velkost=$files[$i][2];
            $url="/zadanie_1/files/".$nazov;
            $link= "<a href = $url>$nazov</a>";

            echo "<tr><td width='30%'>$link</td><td width='30%'>$datum</td><td width='40%'>$velkost</td></tr>";
            $i++;
        }
        echo "</table>";
        closedir($dh);
    }

}

?>




