<?php
function insert_bill($id_user, $name, $address, $sdt, $pt_thanhtoan, $stt)
{
    $sql = "INSERT INTO donhang (id_user, name, address, sdt, pt_thanhtoan, stt) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_returnLastInsertId($sql, [$id_user, $name, $address, $sdt, $pt_thanhtoan, $stt]);
}


function insert_cart($id_user, $id_pro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart (id_user, id_pro, img, name, price, soluong, thanhtien, idbill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, [$id_user, $id_pro, $img, $name, $price, $soluong, $thanhtien, $idbill]);
}


function loadall_donhang()
{
    $sql = "SELECT * FROM donhang ORDER BY id_donhang DESC";
    return pdo_query($sql);
}

function delete_donhang($id_donhang)
{
    $sql = "DELETE FROM donhang WHERE id_donhang = ?";
    pdo_execute($sql, [$id_donhang]);
}
