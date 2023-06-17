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
<title>pcclmasterfileserver</title>
</head>
<body style="background-image: linear-gradient(40deg, #7FFFD4 0%, #00FFFF 100%);">

    <div id="ftp buttons" style="position: absolute; width: 100%; text-align:center; top: 10%;">
        <H1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal; font-size: 50px;">PCCL Controlled Documents</H1>
        <?php
        
            if(isset($_POST['button1'])) {  
                header('Location: '.$uri.'/controlleddocuments/sops.php');
                exit();
            }
            if(isset($_POST['button2'])) {
                header('Location: '.$uri.'/controlleddocuments/workinstructions.php');
                exit();
            }
            if(isset($_POST['button3'])) {
                echo "This is Button3 that is selected";
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
             type="submit" name="button1" value="SOPs"/>
            <br>
            <br>
            <br>
            
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button2" value="Work instructions"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button3" value="Forms"/>
            <br>
            <br>
            <br>
            <input style="position: relative; border: none; border-radius: 15px; padding: 15px 25px; font-size: 24px; color: #fff; background-color: #4CAF50; align-self: center;"
             type="submit" name="button3" value="Policies and other Documents"/>

    </div>
    </form>
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

    <img src="MSA Logo final.jpg" alt="" style="position: relative; display: block; max-width: 10%; height: auto; bottom: 0;  display: inline-block;">
</body>
</html>