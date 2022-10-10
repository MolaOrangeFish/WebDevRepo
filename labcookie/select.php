<html>

<body>
    <?php
         $lang="null";
         if(empty( $_GET["language"])){
             setcookie("lang",$lang,time()+3600*24);
         }   
         else{
             $lang=$_GET["language"];
             setcookie("lang",$lang,time()+3600*24);
         }
    ?>
</body>

</html>