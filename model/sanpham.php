<?php

// Hàm chèn sản phẩm mới
function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    // Kiểm tra và chuẩn hóa giá trị của $giasp
    $giasp = !empty($giasp) && is_numeric($giasp) ? (float)$giasp : 0.0; // Nếu trống hoặc không phải số, thay bằng 0.0

    $sql = "INSERT INTO sanpham (name, price, img, mota, iddm) VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, [$tensp, $giasp, $hinh, $mota, $iddm]);
}
// Hàm xóa sản phẩm
function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id = ?";
    pdo_execute($sql, [$id]);
}

// Hàm lấy tất cả sản phẩm với điều kiện tìm kiếm
function loadall_sanpham($kyw, $iddm = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    $params = [];

    if ($kyw != "") {
        $sql .= " AND name LIKE ?";
        $params[] = '%' . $kyw . '%';
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = ?";
        $params[] = $iddm;
    }
    $sql .= " ORDER BY id DESC";

    return pdo_query($sql, $params);
}

// Hàm lấy thông tin một sản phẩm
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id = ?";
    return pdo_query_one($sql, [$id]);
}

// Hàm cập nhật sản phẩm
function update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $mota, $view)
{
    if ($hinh != "") {
        $sql = "UPDATE sanpham SET name = ?, price = ?, mota = ?, img = ?, iddm = ?, view = ? WHERE id = ?";
        $params = [$tensp, $giasp, $mota, $hinh, $iddm, $view, $id];
    } else {
        $sql = "UPDATE sanpham SET name = ?, price = ?, mota = ?, iddm = ?, view = ? WHERE id = ?";
        $params = [$tensp, $giasp, $mota, $iddm, $view, $id];
    }

    pdo_execute($sql, $params);
}

// Hàm lấy tất cả sản phẩm cho trang chính
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham ORDER BY view DESC LIMIT 0, 9";
    return pdo_query($sql);
}

// Hàm lấy 10 sản phẩm mới nhất
function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 0, 10";
    return pdo_query($sql);
}

// Hàm lấy sản phẩm cùng loại
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE iddm = ? AND id <> ?";
    return pdo_query($sql, [$iddm, $id]);
}

// Hàm lấy tên danh mục
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id = ?";
        $dm = pdo_query_one($sql, [$iddm]);
        if ($dm) {
            extract($dm);
            return $name;
        }
    }
    return "";
}
?>
