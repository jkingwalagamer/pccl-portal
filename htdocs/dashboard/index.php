<!DOCTYPE html>
<html>
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
<title>pcclmasterfilesverver</title>
</head>
<body style="background-image: linear-gradient(40deg, #7FFFD4 0%, #00FFFF 100%);">

    <div id="ftp buttons" style="width: 100%; position: absolute; text-align:center; top: 10%;">
        <H1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal; font-size: 50px;">PCCL Labels (Private) Limated</H1>
        <?php
        
            if(isset($_POST['button1'])) {
                header('Location: '.$uri.'/controlleddocuments/');
                exit();
            }
            if(isset($_POST['button2'])) {
                header('Location: '.$uri.'/materialspecs/');
                exit();
            }
            if(isset($_POST['button3'])) {
                header('Location: '.$uri.'/cpar/');
                exit();
            }
            if(isset($_POST['button4'])) {
                header('Location: '.$uri.'/training/');
                exit();
            }
            if(isset($_POST['button5'])) {
                header('Location: '.$uri.'/training/');
                exit();
            }
            if(isset($_POST['button6'])) {
                header('Location: '.$uri.'/coa/');
                exit();
            }
            if(isset($_POST['button7'])) {
                header('Location: '.$uri.'/calibration/');
                exit();
            }
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

        <form method="post">
        <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button1" value="Controlled Documents"/>
            <br>
            <br>
            <br>
            
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button2" value="Material Specs"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button3" value="C P A R"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button4" value="Training"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button5" value="MLP Data"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button6" value="C O A"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button7" value="Calibration"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button2" value="Product Specs"/>
        </form>
    </div>
    <div style="width: 100%; position: absolute; top: 150%;">
        <img src="MSA Logo final.jpg" alt="" style="position: relative; display: block; max-width: 10%; height: auto; display: inline-block; left: 90%;">
    </div>
    <div style="width: 100%; position: absolute; top: 12%;">
    <img src="logo.png" alt="" style="position: relative; display: block; max-width: 10%; height: auto; display: inline-block;">
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