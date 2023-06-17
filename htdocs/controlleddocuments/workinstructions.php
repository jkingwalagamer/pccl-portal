<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            .sidebar {
            background-color: #333;
            overflow: hidden;
            }

            /* Style the links inside the navigation bar */
            .sidebar input {
            position: relative;
            border: none;
            background: none;
            color: #f2f2f2;
            font-size: large;
            line-height: 50px;
            }

            /* Change the color of links on hover */
            .sidebar input:hover {
            background-color: #04AA6D;
            color: black;
            }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: linear-gradient(40deg, #7FFFD4 0%, #00FFFF 100%);">
    <div id="names"  style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal; font-size: 20px; position: absolute; top: 10%;">
        <?php
        // connect and login to FTP server
        $ftp_username = "user1";
        $ftp_server = "localhost";
        $ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
        $login = ftp_login($ftp_conn, $ftp_username, "");

        $fn = "/SOP'S";

        ftp_chdir($ftp_conn,$fn);

        $filelist = ftp_nlist($ftp_conn, "/Work insrtuction");

        foreach ($filelist as $file) {
            $output = exec("wget -N ftp://user1@localhost$file 2>&1 |grep 'filename w/o extension'|grep -v ftp|grep -v =");
            echo "<iframe src=\"$file\" width=\"100%\" style=\"height:1000px\" style='hight: 100%;'></iframe>";
        }

        // close connection
        ftp_close($ftp_conn);
        if(isset($_POST['home'])) {
            header('Location: '.$uri.'/dashboard/');
            exit();
        }
        if(isset($_POST['cd'])) {
            header('Location: '.$uri.'/controlleddocuments/');
            exit();
        }
        if(isset($_POST['ms'])) {
            header('Location: '.$uri.'/materialspecs/');
            exit();
        }
        if(isset($_POST['cpar'])) {
            header('Location: '.$uri.'/cpar/');
            exit();
        }
        if(isset($_POST['traning'])) {
            header('Location: '.$uri.'/training/');
            exit();
        }
        if(isset($_POST['mlp'])) {
            header('Location: '.$uri.'/mlpdata/');
            exit();
        }
        if(isset($_POST['ms'])) {
            header('Location: '.$uri.'/coa/');
            exit();
        }
        if(isset($_POST['cal'])) {
            header('Location: '.$uri.'/calibration/');
            exit();
        }
        if(isset($_POST['ps'])) {
            header('Location: '.$uri.'/productspecs/');
            exit();
        }
        ?>
    </div>
    <form method="post" class=sidebar>
        <input type="submit" name="home" value="Home" class="a">
        <input type="submit" name="cd" value="Controlled Documents" class="a">
        <input type="submit" name="ms" value="Material Specs" class="a">
        <input type="submit" name="cpar" value="C P A R" class="a">
        <input type="submit" name="traning" value="Training" class="a">
        <input type="submit" name="mlp" value="MLP Data" class="a">
        <input type="submit" name="coa" value="C O A" class="a">
        <input type="submit" name="cal" value="Calibration" class="a">
        <input type="submit" name="ps" value="Product Specs" class="a">
    </form>
</body>
</html>