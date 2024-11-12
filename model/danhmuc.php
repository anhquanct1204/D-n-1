<?php

// Hàm chèn danh mục mới
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc (name) VALUES (?)";
    pdo_execute($sql, [$tenloai]);
}

// Hàm xóa danh mục
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id = ?";
    pdo_execute($sql, [$id]);
}

// Hàm lấy tất cả danh mục
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    return pdo_query($sql);
}

// Hàm lấy thông tin một danh mục
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id = ?";
    return pdo_query_one($sql, [$id]);
}

// Hàm cập nhật danh mục
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET name = ? WHERE id = ?";
    pdo_execute($sql, [$tenloai, $id]);
}

// Hàm lấy đơn hàng của người dùng (Cần pdo_connection để hoạt động)
function listDonhang($userId) {
    $sql = "SELECT * FROM donhang WHERE user_id = ?";
    return pdo_query($sql, [$userId]);
}

// Hàm lấy thông tin thống kê
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, 
                   COUNT(sanpham.id) AS countsp, 
                   MAX(sanpham.price) AS maxprice, 
                   MIN(sanpham.price) AS minprice, 
                   AVG(sanpham.price) AS avgprice
            FROM sanpham 
            LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
            GROUP BY danhmuc.id, danhmuc.name";
    return pdo_query($sql);
}
?>
