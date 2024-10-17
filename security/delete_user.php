<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng có đang đăng nhập không
if (!isset($_SESSION['id'])) {
    die("Bạn cần đăng nhập để thực hiện hành động này.");
}

// Kiểm tra ID người dùng muốn xóa
if (empty($_GET['id'])) {
    die("ID không hợp lệ.");
}

$userIdToDelete = $_GET['id'];
$currentUserId = $_SESSION['id'];

// Kiểm tra xem người dùng hiện tại có quyền xóa người dùng này không
if ($currentUserId != $userIdToDelete) {
    $_SESSION['message'] = "Bạn không có quyền xóa người dùng khác.";
    header('location: list_users.php');
    exit();
}

// Thực hiện hành động xóa
// Thực hiện hành động xóa
if ($userModel->deleteUserById($userIdToDelete, $currentUserId)) {
    $_SESSION['message'] = "Bạn đã xóa thành công.";
} else {
    $_SESSION['message'] = "Bạn không có quyền xóa người dùng này.";
}
header('location: list_users.php');
exit();