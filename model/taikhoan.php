<?php
function insert_taikhoan($user, $pass, $email, $diachi, $sdt)
{
    $sql = "INSERT INTO taikhoan (user, pass, email, diachi, sdt) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, [$user, $pass, $email, $diachi, $sdt]);
}

// Hàm kiểm tra tài khoản
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user = ? AND pass = ?";
    return pdo_query_one($sql, [$user, $pass]);
}

// Hàm lấy tất cả tài khoản
function loadall_taikhoan()
{
    $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
    return pdo_query($sql);
}

// Hàm xóa tài khoản
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id = ?";
    pdo_execute($sql, [$id]);
}

// Hàm lấy thông tin một tài khoản
function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id = ?";
    return pdo_query_one($sql, [$id]);
}

// Hàm cập nhật tài khoản
function update_taikhoan($id, $user, $pass, $email, $diachi, $sdt)
{
    $sql = "UPDATE taikhoan SET user = ?, pass = ?, email = ?, diachi = ?, sdt = ? WHERE id = ?";
    pdo_execute($sql, [$user, $pass, $email, $diachi, $sdt, $id]);
}


