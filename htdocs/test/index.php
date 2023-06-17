<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: linear-gradient(40deg, #7FFFD4 0%, #00FFFF 100%);">
    <div id="names"  style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal; font-size: 20px;">
        <?php
        $dir    = 'C:\xampp\htdocs\data\sops';
        $files1 = scandir($dir);
        $files2 = scandir($dir, SCANDIR_SORT_DESCENDING);
        
        print_r($files1);
        print_r($files2);
        ?>
    </div>
</body>
</html>
