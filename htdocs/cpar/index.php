<!DOCTYPE html>
<html>
<head>
<title>pcclmasterfileserver</title>
</head>
<body style="background-image: linear-gradient(40deg, #7FFFD4 0%, #00FFFF 100%);">

    <div id="ftp buttons" style="position: relative; text-align:center; bottom: 50%;">
        <H1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-style: normal; font-size: 50px;">PCCL C P A R</H1>
        <?php
        
            if(isset($_POST['button1'])) {
                header('Location: '.$uri.'/controlleddocuments/');
                exit();
            }
            if(isset($_POST['button2'])) {
                echo "This is Button2 that is selected";
            }
            if(isset($_POST['button3'])) {
                echo "This is Button3 that is selected";
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

        </form>
    </div>

    <img src="MSA Logo final.jpg" alt="" style="position: relative; display: block; max-width: 10%; height: auto; bottom: 0;  display: inline-block;">
</body>
</html>