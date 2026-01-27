<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Welcome Challenge</title>
    <style>
        body { font-family: Arial; text-align: center; background: #e0eafc; padding-top: 100px; }
        .box { background: white; display: inline-block; padding: 40px; border-radius: 10px; border-left: 5px solid #8e44ad; }
        h1 { color: #8e44ad; }
    </style>
</head>
<body>
    <div class="box">
        <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $hour = date('H');

            // 1. Hiển thị lời chào theo thời gian
            if ($hour < 12) $chao = "Chào buổi sáng!";
            elseif ($hour < 18) $chao = "Chào buổi chiều!";
            else $chao = "Chào buổi tối!";

            // 2. Hiển thị ngày trong tuần bằng tiếng Việt
            $days = ["Chủ Nhật", "Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy"];
            $thu = $days[date('w')];

            // 3. Đếm số ngày còn lại trong tháng
            $ngayTrongThang = date('t');
            $ngayHienTai = date('j');
            $conLai = $ngayTrongThang - $ngayHienTai;

            echo "<h1>$chao</h1>";
            echo "<p>Hôm nay là <strong>$thu</strong>, ngày " . date('d/m/Y') . "</p>";
            echo "<p>Tháng này còn <strong>$conLai</strong> ngày nữa là kết thúc.</p>";
        ?>
    </div>
</body>
</html>