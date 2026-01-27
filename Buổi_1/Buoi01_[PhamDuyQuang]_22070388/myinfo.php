<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin cá nhân - Duy Quang</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; display: flex; justify-content: center; padding-top: 50px; }
        .card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #2c3e50; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        p { line-height: 1.6; color: #555; }
        .label { font-weight: bold; color: #3498db; }
        .footer { margin-top: 20px; font-size: 0.8em; color: #999; text-align: center; border-top: 1px solid #eee; padding-top: 10px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Thông Tin Cá Nhân</h2>
        <?php
            $hoTen = "Phạm Duy Quang";
            $ngaySinh = "31/01/2004"; 
            $queQuan = "Hà Nội";
            $soThich = "Chơi game, lướt Tiktok";

            echo "<p><span class='label'>Họ tên:</span> $hoTen</p>";
            echo "<p><span class='label'>Ngày sinh:</span> $ngaySinh</p>";
            echo "<p><span class='label'>Quê quán:</span> $queQuan</p>";
            echo "<p><span class='label'>Sở thích:</span> $soThich</p>";
        ?>
        <div class="footer">
            Ngày giờ truy cập: <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date("d/m/Y H:i:s"); ?>
        </div>
    </div>
</body>
</html>