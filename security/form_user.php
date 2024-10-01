<?php
// Bắt đầu phiên
session_start();
require_once 'models/UserModel.php';

// Hàm mã hóa và giải mã ID
function encodeId($id) {
    return base64_encode($id);
}

function decodeId($encodedId) {
    return base64_decode($encodedId);
}

$userModel = new UserModel();

$user = NULL; // Thêm người dùng mới
$_id = NULL;

$errors = []; // Mảng chứa lỗi xác thực

if (!empty($_GET['id'])) {
    $_id = decodeId($_GET['id']); // Giải mã ID
    $user = $userModel->findUserById($_id); // Cập nhật người dùng hiện tại
}

if (!empty($_POST['submit'])) {
    // Xác thực Tên
    if (empty($_POST['name'])) {
        $errors[] = "Tên là bắt buộc.";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $_POST['name'])) {
        $errors[] = "Tên phải từ 5 đến 15 ký tự và chỉ chứa chữ cái và số.";
    }

    // Xác thực Mật khẩu
    if (empty($_POST['password'])) {
        $errors[] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/", $_POST['password'])) {
        $errors[] = "Mật khẩu phải từ 5 đến 10 ký tự và bao gồm ít nhất một chữ thường, một chữ hoa, một số và một ký tự đặc biệt.";
    }

    // Nếu không có lỗi, tiến hành cập nhật hoặc thêm mới
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit; // Luôn dừng lại sau khi chuyển hướng
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
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']); ?>'>
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