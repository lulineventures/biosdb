<?php 
    session_start();

    $conn = new mysqli("localhost","root","","multiuser");

    $msg = "";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sql = "SELECT* FROM login where username=? and password=? and usertype=? ";

        $stmt= $conn->prepare($sql);
        $stmt->bind_param("sss",$username,$password,$usertype);
        $stmt->execute();
        $result = $stmt->get_result();
        $row= $result->fetch_assoc();

        session_regenerate_id();
        $_SESSION['username'] =$row['username'];
        $_SESSION['role'] =$row['usertype'];
        session_write_close();

            if($result->num_rows==1 && $_SESSION['role']=="admin"){
                header("location:admin.php");
            } else if ($result->num_rows==1 && $_SESSION['role']=="user"){
                header("location:user.php");
            } else {
                $msg = "username or password is incorrect.";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="row justify content-center">
            <div class="col-lg-5 bg-light mt-5 px-0">
                <h3 class="text-center text-light bg-success p-3">Bios Dynamis</h3>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class ="p-4">
                    <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required></<input>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                    </div>
                    <div class="form-group lead">
                        <label for="role"></label>
                        <input type="radio" name="role" value="user" class="custom-radio" required>&nbsp user &nbsp</input>
                        <input type="radio" name="role" value="admin" class="custom-radio" required>&nbsp admin</input>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="login" class="btn btn-success btn-block">
                    </div>
                    <div class="form-group">
                        <input type="reset" value="Cancel" name="login" class="btn btn-block">
                    </div>
                    <h5 class="text-danger text-center"><?= $msg; ?></h5>
                </form>
            </div>
        </div>
    </div>
</body>
</html>