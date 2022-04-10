<?php 
session_start();
?>

<html>
    <body>
        <?php 
        $_SESSION['user'] = "John";

        echo "Session variables are set. <br />";
        ?>
        <a href="session2.php">Visit next page</a>
        
        

    </body>
</html>
