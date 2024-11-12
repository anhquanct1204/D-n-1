-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 05, 2024 lúc 02:46 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Trà Nguyên Bản'),
(6, 'Trà Sữa Nguyên Bản'),
(10, 'Đá Xay'),
(14, 'Cà Phê'),
(15, 'Nguyễn Đức Quân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,3) NOT NULL DEFAULT '0.000',
  `img` varchar(255) DEFAULT NULL,
  `mota` text,
  `view` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(4, 'Sữa Chua Phúc Bồn Tử', 165.000, 'tra10.png', 'Trà Sữa Dâu là một món đồ uống giải khát phổ biến, kết hợp giữa trà và hương vị ngọt ngào của dâu. Thức uống này thường được làm từ trà đen hoặc trà xanh pha với sữa, cùng với siro dâu hoặc dâu tươi xay nhuyễn. Hương vị của Trà Sữa Dâu là sự hòa quyện hoàn hảo giữa vị đắng nhẹ của trà, sự béo ngậy của sữa và sự ngọt ngào của dâu, mang lại một trải nghiệm uống ngon miệng và tươi mới. Trà Sữa Dâu có thể được thưởng thức lạnh với đá hoặc nóng, thường được trang trí bằng lát dâu hoặc một chút kem để thêm phần hấp dẫn.', 10, 10),
(6, ' Mãng Cầu Đá Xay', 150.000, 'tra2.png', 'Trà Nguyên Bản là sản phẩm trà nổi bật, đại diện cho sự tinh tế và chất lượng của thương hiệu. Được làm từ lá trà tươi chọn lọc, Trà Nguyên Bản giữ nguyên hương vị đặc trưng và sự tinh khiết của trà nguyên chất. Hương vị của trà tinh tế, đậm đà, và rõ nét, với màu sắc có thể là vàng nhạt của trà xanh hoặc nâu đậm của trà đen. Được pha chế với nước sôi ở nhiệt độ phù hợp, Trà Nguyên Bản mang đến trải nghiệm trà tuyệt vời, thể hiện sự chăm sóc và kỹ lưỡng trong từng công đoạn chế biến của.', 20, 10),
(8, 'Trà Nhãn Sen', 170.000, 'tra1.png', 'Hồng Trà Vải là một món đồ uống thơm ngon và tươi mát, kết hợp giữa hồng trà (trà đen) và vải, tạo nên một trải nghiệm hương vị độc đáo. Thức uống này thường được làm từ trà đen pha với nước sôi, sau đó kết hợp với vải tươi hoặc vải đóng hộp, có thể là vải xay nhuyễn hoặc vải cắt nhỏ. Vị đắng nhẹ của trà đen hòa quyện hoàn hảo với sự ngọt ngào và hương thơm đặc trưng của vải, mang lại một sự kết hợp hài hòa và dễ chịu. Hồng Trà Vải có thể được thưởng thức lạnh với đá hoặc nóng, thường được trang trí bằng một vài miếng vải hoặc lá bạc hà để thêm phần hấp dẫn.', 30, 1),
(9, 'Hồng Trà Sữa', 165.000, 'tra3.png', 'Trà Đào Sữa là một món đồ uống ngon miệng, kết hợp giữa vị ngọt ngào của đào và sự béo ngậy của sữa, hòa quyện với hương trà để tạo nên một trải nghiệm uống thú vị. Thức uống này thường được làm từ trà đen hoặc trà xanh, kết hợp với sữa tươi hoặc sữa đặc, cùng với nước cốt đào hoặc đào xay nhuyễn. Hương vị của Trà Đào Sữa mang đến sự hòa quyện hoàn hảo giữa vị đắng nhẹ của trà, sự ngọt ngào của đào và sự béo ngậy của sữa, tạo ra một sự kết hợp hài hòa và dễ chịu. Thức uống có thể được thưởng thức lạnh với đá hoặc nóng, và thường được trang trí bằng lát đào hoặc một chút bột cacao để thêm phần hấp dẫn.', 40, 6),
(10, 'Chanh Đá Xay', 150.000, 'tra8.png', 'Trà Chanh là một đồ uống giải khát phổ biến nhờ sự kết hợp tươi mát giữa trà và nước cốt chanh. Thức uống này thường được pha từ trà xanh hoặc trà đen, hòa quyện với nước cốt chanh tươi và có thể thêm đường hoặc mật ong tùy theo khẩu vị. Trà Chanh mang đến hương vị độc đáo, hòa quyện giữa sự đắng nhẹ của trà và vị chua ngọt của chanh, tạo nên cảm giác sảng khoái và tươi mới. Được thưởng thức lạnh với đá hoặc nóng, Trà Chanh thường được trang trí bằng lát chanh hoặc lá bạc hà để tăng phần hấp dẫn.', 50, 10),
(11, 'Đác Cam Đá Xay', 165.000, 'tra5.jpg', 'Hồng Trà Đào, hay trà đào, là một loại đồ uống phổ biến với sự kết hợp hoàn hảo giữa hồng trà (trà đen) và hương thơm ngọt ngào của đào. Thức uống này thường có màu nâu đỏ hoặc hồng nhạt, tùy thuộc vào lượng đào và phương pháp pha chế. Để chuẩn bị Hồng Trà Đào, hồng trà được pha với nước sôi, sau đó thêm đào vào khi trà còn nóng hoặc lạnh, với đào có thể được cắt thành miếng nhỏ hoặc xay nhuyễn. Đôi khi, đường hoặc mật ong được thêm vào để tăng độ ngọt. Hồng Trà Đào có thể được thưởng thức nóng hoặc lạnh, thường được trang trí với lát đào hoặc lá bạc hà để tăng phần hấp dẫn.', 60, 10),
(12, 'Matcha Đá Xay', 200.000, 'tra9.png', 'Trà Matcha là loại trà xanh cao cấp, nổi bật với màu xanh lục sáng và hương vị đậm đà. Được chế biến từ những lá trà non được nghiền mịn thành bột, trà matcha không chỉ có lợi cho sức khỏe mà còn mang lại trải nghiệm thưởng thức độc đáo. Trà matcha cung cấp một lượng lớn chất chống oxy hóa, giúp tăng cường năng lượng, cải thiện sự tập trung và hỗ trợ giảm căng thẳng. Được yêu thích bởi sự thanh mát và hương vị đặc trưng, trà matcha là lựa chọn lý tưởng cho những ai tìm kiếm một thức uống bổ dưỡng và tinh tế. Thường được dùng để pha chế trà matcha latte, smoothie hoặc có thể dùng trực tiếp với nước nóng để thưởng thức.', 70, 10),
(13, 'Capuchino Đá Xay', 185.000, 'tra11.png', 'Trà Sữa Socola là sự kết hợp hoàn hảo giữa vị đậm đà của trà đen và hương vị thơm ngon của socola, mang đến cho bạn một thức uống hấp dẫn và đầy năng lượng. Sản phẩm có ba kích cỡ với mức giá phải chăng: 25.000 VNĐ cho size nhỏ, 30.000 VNĐ cho size vừa và 35.000 VNĐ cho size lớn. Được yêu thích bởi hương vị thơm ngon và dễ uống, trà sữa socola là lựa chọn lý tưởng cho mọi lứa tuổi, đặc biệt là giới trẻ. Sản phẩm không chỉ phù hợp để thưởng thức hàng ngày mà còn là món đồ uống phổ biến trong các dịp lễ, sự kiện và mùa hè.', 80, 10),
(14, 'Cà Phê Sữa', 165.000, 'tra6.png', 'Cà Phê Bạc Xỉu là một thức uống pha trộn hoàn hảo giữa cà phê và sữa đặc, mang đến hương vị thơm ngon, béo ngậy và đậm đà. Sự kết hợp giữa cà phê đậm và sữa ngọt tạo ra một ly bạc xỉu hấp dẫn, phù hợp cho những ai yêu thích cà phê nhưng muốn thưởng thức một chút vị ngọt và béo từ sữa. Cà phê bạc xỉu có mức giá phải chăng và phù hợp với mọi lứa tuổi, đặc biệt là những người trẻ tuổi và dân văn phòng. Đây là một lựa chọn tuyệt vời để khởi đầu ngày mới hoặc thưởng thức trong những giờ giải lao.\r\n', 90000, 14),
(16, 'Cà Phê Latte', 165.000, 'tra7.png', 'Cà phê sữa đá là một loại đồ uống truyền thống của Việt Nam, kết hợp giữa cà phê pha phin đậm đà và sữa đặc ngọt, được thêm đá lạnh. Khi pha chế, cà phê được nhỏ giọt chậm rãi qua phin, tạo nên hương vị đặc trưng và mạnh mẽ. Sữa đặc được thêm vào ly, khuấy đều để hòa quyện với cà phê. Cuối cùng, thêm đá vào để tạo cảm giác mát lạnh và sảng khoái. Cà phê sữa đá không chỉ là một thức uống phổ biến mà còn là biểu tượng văn hóa, thể hiện nét đẹp giản dị và gần gũi của người Việt.', 100, 14),
(17, 'Trà Lucky', 165.000, 'Tra14.png', 'Trà Lucky là một loại trà nổi tiếng được ưa chuộng bởi hương vị thơm ngon và chất lượng cao. Được sản xuất từ những lá trà tươi chọn lọc kỹ lưỡng, Trà Lucky mang đến một trải nghiệm thưởng trà tuyệt vời với hương thơm tự nhiên và vị trà thanh mát. Sản phẩm này thường được đóng gói tiện lợi, giúp người dùng dễ dàng pha chế và thưởng thức mọi lúc, mọi nơi. Trà Lucky không chỉ là một thức uống giải khát mà còn có lợi cho sức khỏe, giúp tinh thần thư thái và tăng cường năng lượng cho một ngày làm việc hiệu quả.', 0, 1),
(18, 'Hồng Trà Chanh', 165.000, 'tra12.png', 'Hồng Trà Chanh là một loại trà kết hợp giữa hồng trà và nước chanh, tạo ra một thức uống vừa có hương vị đậm đà của trà, vừa mang đến sự tươi mát và chua nhẹ từ chanh. Đây là một sự lựa chọn tuyệt vời cho những ai yêu thích trà nhưng muốn thêm chút hương vị mới lạ.\r\n\r\nHồng trà, với hương vị đậm và màu sắc đỏ nâu đặc trưng, kết hợp hoàn hảo với chanh, tạo ra một thức uống có vị chua nhẹ, tươi mới và dễ chịu. Hồng Trà Chanh thường được dùng để giải khát, nhất là vào những ngày hè oi ả. Không chỉ vậy, hồng trà còn chứa nhiều chất chống oxy hóa, giúp cải thiện sức khỏe, trong khi chanh cung cấp vitamin C và tăng cường hệ miễn dịch.', 0, 1),
(19, 'Trà Lài Đác Thơm', 165.000, 'tra13.png', 'Trà Lài Đác Thơm là một loại trà nổi bật với hương thơm đặc trưng của hoa nhài, mang lại trải nghiệm thưởng trà tuyệt vời. Trà được làm từ những lá trà xanh chất lượng cao kết hợp với hoa nhài, tạo ra một thức uống có màu sắc sáng đẹp mắt và hương thơm nhẹ nhàng, quyến rũ.\r\n\r\nHương vị của Trà Lài Đác Thơm thường rất thanh mát, với sự hòa quyện giữa vị trà nhẹ nhàng và hương nhài dịu dàng. Đây là sự lựa chọn lý tưởng cho những ai yêu thích sự thư giãn và muốn thưởng thức một tách trà thơm ngon, thanh khiết. Trà không chỉ giúp giải khát mà còn có lợi cho sức khỏe, với các hợp chất chống oxy hóa có trong trà xanh và tinh chất từ hoa nhài giúp làm dịu tinh thần và tăng cường sức khỏe.', 0, 1),
(20, 'Trà Vải Lài', 165.000, 'tra15.png', 'Trà Vải Lài là một loại trà kết hợp giữa hồng trà hoặc trà xanh với hương vải và hoa nhài, tạo ra một thức uống độc đáo và hấp dẫn. Hương vị của trà này được đặc trưng bởi sự kết hợp hài hòa giữa sự ngọt ngào của vải và sự tươi mát của hoa nhài, mang lại trải nghiệm thưởng trà mới lạ và thơm ngon.\r\n\r\nTrà Vải Lài thường có màu sắc sáng đẹp và hương thơm dễ chịu. Vị ngọt nhẹ của vải cùng với hương thơm của hoa nhài làm cho trà trở nên quyến rũ và dễ uống. Thức uống này không chỉ làm hài lòng những ai yêu thích sự kết hợp hương vị mới lạ mà còn cung cấp nhiều lợi ích cho sức khỏe nhờ các chất chống oxy hóa từ trà và các thành phần tự nhiên khác.', 0, 1),
(21, 'Hồng Trà Đào', 165.000, 'tra16.png', 'Hồng Trà Đào là một loại trà kết hợp giữa hồng trà và vị đào ngọt ngào, tạo ra một thức uống hấp dẫn và thơm ngon. Hồng trà, với hương vị đậm đà và màu sắc đỏ nâu đặc trưng, được phối hợp hoàn hảo với vị ngọt và hương thơm của đào, mang lại trải nghiệm thưởng trà thú vị và dễ chịu.\r\n\r\nTrà Hồng Trà Đào thường có màu sắc đẹp mắt và hương thơm quyến rũ. Vị trà đậm đà kết hợp với vị đào ngọt ngào tạo nên một thức uống thanh mát và lôi cuốn. Thức uống này không chỉ giúp giải khát mà còn cung cấp một số lợi ích cho sức khỏe, nhờ vào các chất chống oxy hóa có trong trà và các vitamin có trong đào.', 0, 1),
(22, 'Trà Ô Long Dâu', 165.000, 'tra17.png', 'Trà Ô Long Dâu là một loại trà kết hợp giữa trà ô long và hương dâu tươi mát, mang đến một trải nghiệm thưởng trà đầy màu sắc và hấp dẫn. Trà ô long, nổi tiếng với hương vị phong phú và hương thơm nhẹ nhàng, được phối hợp với vị ngọt và hương thơm đặc trưng của dâu, tạo ra một thức uống hài hòa và dễ chịu.\r\n\r\nTrà Ô Long Dâu thường có màu sắc tươi sáng và hương thơm quyến rũ. Vị trà ô long có độ đậm vừa phải kết hợp với vị dâu ngọt ngào, tạo nên một thức uống vừa thanh mát, vừa thơm ngon. Ngoài việc giải khát, Trà Ô Long Dâu còn cung cấp nhiều lợi ích cho sức khỏe nhờ vào các chất chống oxy hóa có trong trà ô long và các vitamin có trong dâu, giúp cải thiện hệ miễn dịch và hỗ trợ tiêu hóa.', 190000, 1),
(23, 'Trà Sữa Matcha', 150.000, 'tra19.png', 'Trà Sữa Matcha là một loại thức uống kết hợp giữa matcha, một loại bột trà xanh Nhật Bản, và sữa, tạo ra một sự hòa quyện giữa vị trà xanh đậm đà và sự mềm mịn của sữa. Matcha, với hương vị đắng nhẹ và màu xanh đặc trưng, khi kết hợp với sữa, tạo ra một thức uống ngọt ngào và thơm ngon.\r\n\r\nTrà Sữa Matcha thường có màu xanh tươi sáng và lớp bọt mịn, với hương thơm quyến rũ của trà xanh kết hợp với sự béo ngậy của sữa. Thức uống này không chỉ làm hài lòng những ai yêu thích sự kết hợp hương vị mới lạ mà còn mang lại nhiều lợi ích sức khỏe. Matcha chứa nhiều chất chống oxy hóa, giúp cải thiện sức khỏe tổng thể, tăng cường năng lượng và tăng cường sự tập trung.', 0, 6),
(24, 'Mãng Cầu Jelly Dừa', 150.000, 'tra18.png', 'Mãng Cầu Jelly Dừa là một món tráng miệng độc đáo kết hợp giữa mãng cầu, dừa và thạch jelly. Được làm từ mãng cầu chín, với vị ngọt thanh và hương thơm đặc trưng, kết hợp với dừa tươi và thạch jelly mát lạnh, món này mang lại trải nghiệm ẩm thực tươi mát và hấp dẫn.\r\n\r\nThạch jelly dừa có độ giòn và mát, hòa quyện cùng hương vị ngọt ngào của mãng cầu và sự béo ngậy của dừa, tạo ra một món ăn tráng miệng thơm ngon và dễ chịu. Đây là lựa chọn lý tưởng cho những ngày hè nóng bức hoặc khi bạn muốn thưởng thức một món ăn ngọt ngào và nhẹ nhàng. Mãng Cầu Jelly Dừa không chỉ ngon miệng mà còn cung cấp các vitamin và khoáng chất từ mãng cầu và dừa, giúp bổ sung dinh dưỡng cho cơ thể.', 0, 6),
(25, 'Trà Sữa Nhãn Sen', 150.000, 'tra20.png', 'Trà Sữa Nhãn Sen là một loại thức uống kết hợp giữa trà sữa và các thành phần truyền thống như nhãn và hạt sen, mang lại một trải nghiệm thưởng thức độc đáo và thơm ngon. Nhãn, với vị ngọt thanh và hương thơm đặc trưng, cùng với hạt sen, vốn được biết đến với lợi ích sức khỏe và sự mềm mại, tạo ra một thức uống hòa quyện hài hòa giữa sự ngọt ngào và thanh mát.\r\n\r\nTrà Sữa Nhãn Sen thường có màu sắc đẹp mắt và hương thơm dễ chịu. Hương vị của trà sữa hòa quyện với nhãn và hạt sen tạo nên một thức uống vừa béo ngậy, vừa tươi mát. Món này không chỉ giúp giải khát mà còn cung cấp các lợi ích sức khỏe nhờ vào các thành phần tự nhiên như nhãn và hạt sen, giúp cải thiện tinh thần và hỗ trợ sức khỏe tiêu hóa.', 0, 6),
(26, 'Trà Sữa Ô Long', 150.000, 'tra3.png', 'Trà Sữa Ô Long là một loại thức uống kết hợp giữa trà ô long và sữa, mang đến một trải nghiệm thưởng thức đầy hương vị và mềm mịn. Trà ô long, với hương vị phong phú và độ đậm vừa phải, được phối hợp với sữa tươi, tạo ra một thức uống có vị thanh mát, béo ngậy và dễ uống.\r\n\r\nTrà Sữa Ô Long thường có màu sắc nhạt hơn so với trà sữa truyền thống và hương thơm đặc trưng của trà ô long kết hợp với sự mềm mại của sữa. Thức uống này không chỉ giúp giải khát mà còn cung cấp một số lợi ích sức khỏe, nhờ vào các chất chống oxy hóa có trong trà ô long, giúp cải thiện sức khỏe tổng thể và tăng cường sự tập trung. Trà Sữa Ô Long thường được phục vụ lạnh hoặc ấm, tùy theo sở thích của người thưởng thức.', 0, 6),
(27, 'Bạc Xỉu', 140.000, 'bac-xiu.png', 'Bạc Xỉu là một loại cà phê truyền thống của Việt Nam, nổi bật với sự kết hợp giữa cà phê và sữa đặc, tạo ra một thức uống ngọt ngào và béo ngậy. Tên gọi \"Bạc Xỉu\" có nguồn gốc từ tiếng Quảng Đông, có nghĩa là \"đắng sữa\" – phản ánh sự hòa quyện giữa vị đắng của cà phê và vị ngọt của sữa đặc.\r\n\r\nBạc Xỉu thường được làm từ cà phê phin pha đậm, sau đó thêm sữa đặc và khuấy đều. Kết quả là một thức uống có màu sắc vàng nâu đẹp mắt, với vị cà phê đậm đà và sự ngọt ngào của sữa. Bạc Xỉu có thể được thưởng thức nóng hoặc lạnh, tùy theo sở thích, và thường được uống vào buổi sáng hoặc trong các buổi gặp gỡ bạn bè. Đây là một món đồ uống phổ biến và yêu thích tại nhiều quán cà phê ở Việt Nam.', 150000, 14),
(28, 'Cappuccino', 140.000, 'tra21.png', 'Cappuccino là một loại cà phê nổi tiếng với sự kết hợp giữa cà phê espresso, sữa nóng và lớp bọt sữa dày. Đặc trưng của cappuccino là tỷ lệ cân bằng giữa espresso, sữa và bọt sữa, tạo ra một thức uống vừa có hương vị cà phê đậm đà, vừa có sự mềm mại và béo ngậy của sữa.\r\nCappuccino thường được phục vụ trong cốc nhỏ, khoảng 150-180ml, và có thể được trang trí với bột cacao hoặc quế trên lớp bọt sữa để thêm hương vị và thẩm mỹ. Thức uống này thường được thưởng thức vào buổi sáng, nhưng cũng là một lựa chọn phổ biến trong suốt cả ngày.', 0, 14),
(29, 'Cà Phê Đen', 140.000, 'tra22.png', 'Cà phê đen là một loại cà phê đơn giản và tinh khiết, được chế biến từ hạt cà phê rang xay mà không thêm đường, sữa hay bất kỳ chất phụ gia nào khác. Đây là cách thưởng thức cà phê phổ biến ở nhiều nơi vì nó giữ nguyên hương vị nguyên bản và đậm đà của cà phê.Cà phê đen thường có vị đắng nhẹ đến mạnh mẽ, tùy thuộc vào loại hạt cà phê và mức độ rang. Hương vị của cà phê đen có thể có các nốt hương của trái cây, chocolate, gia vị, hoặc các yếu tố khác tùy thuộc vào nguồn gốc của hạt cà phê. Đây là lựa chọn lý tưởng cho những ai yêu thích thưởng thức cà phê nguyên chất mà không bị pha loãng bởi sữa hay đường.', 0, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `vaitro` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `diachi`, `sdt`, `vaitro`) VALUES
(1, 'quanph51116', '123321', 'anhquanct1204@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddm_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
