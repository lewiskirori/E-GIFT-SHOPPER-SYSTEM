<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div style="width:150px;margin:auto;height:500px;margin-top:300px">

        <?php
        include('database connection.php');
        session_destroy();

        echo '<meta http-equiv="refresh" content="2;url=login.php">';
        echo '<progress max=100><strong>Progress: 70% 
        done.</strong></progress><br>';
        
        echo '<span class="itext">BYE for now! Logging Out please wait...!</span>';

        ?>
        </div>

    </body>
</html>
