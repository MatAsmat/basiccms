<!-- (ขั้นตอนที่ 13) -->
<?php
    require_once "connect.php";
    session_start();
    if(isset($_POST['login'])) { //เมื่อมีการกดปุ่มล๊อคอิน
        $username = mysqli_real_escape_string($conn, $_POST['username']);//ใส่ค่าเข้ามาจากอินพุท
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        //สร้างตัวแปรชื่ออะไรก็ได้ เป็นคำสั่งเลือกข้อมูลจาก Database
        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        //คำสั่งการประมวลผล
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login Successfully');</script>";
            header("location: index.php");
        } else {
            echo "<script>alert('Username or Password is incorrect!');</script>";
        }
    }
?> 
    

<!-- (ขั้นตอนที่ 8) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login Page</title>
</head>
<body>

    <center style="margin-top: 2rem;">
        <form action="login.php" method="post">
            <table width="400" border="1" align="center">
                <tr>
                    <td bgcolor="yellow" colspan="4" align="center">
                        <h1>Admin Login Form</h1>
                    </td>
                </tr>    
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username"></td>
                </tr> 
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr> 
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="login" value="Login" ></td>
                </tr>        
            </table>
        </form>    
    </center>
</body>
</html>
