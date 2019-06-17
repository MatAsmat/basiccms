<!-- (ขั้นตอนที่ 14) -->
<?php
    session_start();
    if (!isset($_SESSION['username'])) { //หากไม่มีการเข้าระบบ ก็จะต้องไปหน้า login ก่อน
        header("location: login.php");
    } else { //แต่ถ้าเข้าสู่ระบบแล้วให้เข้าหน้า index ได้
        // ตัดปีกกา } เพื่อจะคลุมหน้า index ทั้งหมด
?>

<!-- (ขั้นตอนที่ 6) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Admin Page Mr. <?php echo $_SESSION['username'];?> </h1>
        </div>
    </header>
    <section class="content">
        <div class="content_grid">
            <div class="sidebar">
                <h1>Welcome : </h1>
                <h3><a href="index.php">Home</a></h3>
                <h3><a href="view_posts.php">View Posts</a></h3>
                <h3><a href="insert_post.php">Insert Post</a></h3>
                <h3><a href="logout.php">Log out</a></h3>
            </div>
            <div class="showinfo">
                <h1>Welcome to Admin Panel</h1>
                <img width="350" height="540" src="img/admin.jpg" alt="">
            </div>
        </div>
    </section>
</body>
</html>
<?php } ?>