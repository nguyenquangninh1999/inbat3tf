<!DOCTYPE html>
<html lang="vi">
<head><meta charset="utf-8"></head>
<body style="font-family: Arial, sans-serif; color: #333; padding: 20px;">
    <h1 style="color: #5b2d8e;">Tư vấn báo giá</h1>
    <table style="width:100%; border-collapse:collapse; margin-top:16px;">
        <tr><td style="padding:8px; font-weight:bold; width:120px;">Tên:</td><td style="padding:8px;">{{ $name }}</td></tr>
        <tr style="background:#f9f9f9;"><td style="padding:8px; font-weight:bold;">Số điện thoại:</td><td style="padding:8px;">{{ $phone }}</td></tr>
        <tr><td style="padding:8px; font-weight:bold;">Email:</td><td style="padding:8px;">{{ $email ?? '—' }}</td></tr>
        <tr style="background:#f9f9f9;"><td style="padding:8px; font-weight:bold;">Mô tả:</td><td style="padding:8px;">{{ $note ?? '—' }}</td></tr>
    </table>
    <p style="margin-top:32px; color:#888; font-size:13px;">Công ty TNHH 3TF</p>
</body>
</html>
