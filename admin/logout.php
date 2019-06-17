<!-- (ขั้นตอนที่ 18) -->
<?php
    session_start();
    session_destroy();
    
    header("location: login.php");
?>