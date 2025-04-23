<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

// 获取表单提交的用户名和密码
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// 检查用户名和密码是否为空
if (empty($username) || empty($password)) {
echo "用户名或密码不能为空";
exit;
}
$result = $username

if ($result) {
echo "登录完成"
} else {
// 用户名或密码错误
echo "用户名或密码错误";
}

$conn->close();
?>
