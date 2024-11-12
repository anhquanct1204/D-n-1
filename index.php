<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/bill.php";
include "model/cart.php";

include "global.php";
$sanphamnew =  loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if (!isset($_SESSION['mycart']) || !is_array($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $spcl = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                insert_taikhoan($user, $pass, $email, $diachi, $sdt);
                $thongbao = "Đăng Ký Thành Công. Vui lòng đăng nhập để thực hiện đặt hàng và bình luận!";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('location: index.php');
                    // $thongbao = "Đăng Nhập Thành Công. Bây giờ bạn có thể đặt hàng và bình luận!";
                } else {
                    $thongbao = "Tài Khoản không tồn tại. Vui lòng kiểm tra lại user hoặc pass";
                }
            }
            include "view/taikhoan/dangky.php";
            break;

        case "addtocart":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case "delcart":
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            include "view/cart/viewcart.php";
            break;

        case "bill":
            include "view/cart/bill.php";
            break;

            case "billcomfirm":
                if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                    $name = $_POST['user'];
                    $email = $_POST['email'];
                    $address = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $ngaydathang = date('Y-m-d H:i:s');
                    $pt_thanhtoan = $_POST['pt_thanhtoan'];            
                    $idbill = insert_bill($_SESSION['user']['id'], $name, $address, $sdt, $pt_thanhtoan, 0, $ngaydathang);
            
                    foreach($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[3] * $cart[4], $idbill);
                    }
                }
                include __DIR__ . '/view/cart/billcomfirm.php';
                break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'gopy':
            include "view/gopy.php";
            break;

        default:
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
