<!doctype html>
<html lang="en">
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
            background-color: #cccccc;
        }
        #submit{
            margin-left: 12em;
        }
    </style>


</head>

<body id="mydiv">
<div id="okno">
<form method="POST" action="upload.php" id="profileData" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col">
            <div class="form-group">
                <label for="filename">Názov súboru</label>
                <input name="filename" type="text" id="filename" class="form-control" placeholder="File name">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="upfile">Nahraj súbor</label>
        <input name="upfile" type="file" class="form-control" id="upfile">
    </div>
    <div class="form-group">
        <button  type="button" id="submit" class="btn btn-outline-primary" >Odoslať</button>
    </div>

</form>
    Kliknutím sa vrátite k tabuľke =>
<a href="index.php" style="color:#FFFFF0;">Zoznam</a>
</div>

<script src="script.js"></script>

</body>
</html>