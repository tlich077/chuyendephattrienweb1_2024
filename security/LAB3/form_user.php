<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
require_once 'mahoa.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

// if (!empty($_GET['id'])) {
//     $_id = $_GET['id'];
//     $user = $userModel->findUserById($_id);//Update existing user
// }
if (!empty($_GET['id'])) {
    // Giải mã ID từ URL
    $_id = decodeId($_GET['id']);
    $user = $userModel->findUserById($_id); // Cập nhật người dùng hiện có
}
// if (!empty($_POST['submit'])) {

//     if (!empty($_id)) {
//         $userModel->updateUser($_POST);
//     } else {
//         $userModel->insertUser($_POST);
//     }
//     header('location: list_users.php');
// }

// CÂU 3
if (!empty($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $errors[] = "Tên đăng nhập không để trống";
    } elseif (!preg_match('/^[a-zA-Z0-9]{5,15}$/', $_POST['name'])) {
        $errors[] = "Tên đăng nhập không có ký tự đặc biệt chiều dài từ 5 - 15 kí tự";
    }

    if (empty($_POST['password'])) {
        $errors[] = "Password không để trống.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors[] = "Mật khẩu phải dài 5-10 ký tự và chứa ít nhất một chữ thường, một chữ hoa, một số và một ký tự đặc biệt.";
    }

    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error) {
                        echo "<li>$error</li>";
                    } ?>
                </ul>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
