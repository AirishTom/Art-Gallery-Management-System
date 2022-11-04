<?php
    session_start();
    session_destroy();
        echo"<script>window.location.href='http://localhost/artgallery/index.php'</script>";

    
    // $_SESSION['login']=="";
    // session_unset();
    // $_SESSION['action1']=="You have loged out successfully";
    // echo"<script>window.location.href='http://localhost/artgallery/index.php'</script>"
    /*if(session_destroy()){
        header(location"artgallery\logou.php");*/
?>
<!-- <script>
document.location="http://localhost/artgallery/index.php";
</script> -->
