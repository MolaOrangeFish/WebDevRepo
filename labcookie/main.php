<html>

<body>
    <?php
  
        if( $_COOKIE['lang']=="en"){
            echo "Welcome";
        }
        else if($_COOKIE['lang']=="th"){
            echo "ยินดีต้อนรับ";
        }
        else{
            echo"No cookie or error";
        }
        
    ?>
</body>

</html>