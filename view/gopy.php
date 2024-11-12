<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Góp Ý - Phúc Long</title>
    <style>
        .feedback {
            text-align: left;
        }

        .feedback h1 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #004d00;
        }

        .feedback h2 {
            font-size: 1.2em;
            margin-top: 20px;
            color: #004d00;
        }

        .feedback p {
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
        <div class="boxtitle">Góp Ý</div>
        <div class="row boxcontent">
            <div class="feedback">
                <h1>Góp Ý Cho Chúng Tôi</h1>
                <p>Chúng tôi luôn lắng nghe và mong muốn nhận được những góp ý từ khách hàng để cải thiện dịch vụ và sản phẩm tốt hơn. Vui lòng điền vào mẫu dưới đây để gửi ý kiến của bạn.</p>

                <h2>Mẫu Góp Ý</h2>
                <form action="submit_feedback.php" method="POST">
                    <div class="form-group">
                        <label for="name">Họ và Tên:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Góp Ý:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit">Gửi Góp Ý</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>