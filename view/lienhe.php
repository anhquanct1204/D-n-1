<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Phúc Long</title>
    <style>
        .contact {
            text-align: left;
        }

        .contact h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #004d00;
        }

        .contact h2 {
            font-size: 1.2em;
            margin-top: 20px;
            color: #004d00;
        }

        .contact p {
            font-size: 1em;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #004d00;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003300;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="boxtitle">LIÊN HỆ</div>
        <div class="row boxcontent">
            <div class="contact">
                <h1>Liên Hệ Với Chúng Tôi</h1>
                <p>Nếu bạn có bất kỳ câu hỏi hay ý kiến đóng góp nào, vui lòng liên hệ với chúng tôi qua thông tin dưới đây hoặc gửi tin nhắn trực tiếp từ mẫu liên hệ.</p>

                <h2>Thông Tin Liên Hệ</h2>
                <p><strong>Địa chỉ:</strong> 42 Nguyễn Huệ, Quận 1, TP. Hồ Chí Minh</p>
                <p><strong>Điện thoại:</strong> (028) 1234 5678</p>
                <p><strong>Email:</strong> contact@phuclong.com</p>

                <h2>Mẫu Liên Hệ</h2>
                <form action="submit_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Họ và Tên:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Tin Nhắn:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>