<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= CSSDuyDumStomaty ?>userDiachi.css">
</head>

<body>
    <div class="container_users">
        <h1>Địa chỉ thanh toán</h1>
        <p class="description">Chỉnh sửa chi tiết địa chỉ thanh toán của bạn.</p>

        <form>
            <div class="form-group">
                <label for="address">Địa chỉ: <span style="color: red;">*</span></label>
                <input type="text" id="address" name="address" required placeholder="Nhập địa chỉ của bạn">
            </div>

            <div class="form-group">
                <label for="zip-code">Zip/Postal Code: <span style="color: red;">*</span></label>
                <input type="text" id="zip-code" name="zip-code" required placeholder="Ví dụ: 700000">
            </div>

            <div class="form-group">
                <label for="country">Quốc gia: <span style="color: red;">*</span></label>
                <select id="country" name="country" required>
                    <option value="">Chọn 1 quốc gia</option>
                    <option value="Vietnam">Việt Nam</option>
                    <option value="USA">Hoa Kỳ</option>
                    <option value="UK">Vương Quốc Anh</option>
                    <option value="Japan">Nhật Bản</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone-number">Số điện thoại: <span style="color: red;">*</span></label>
                <input type="tel" id="phone-number" name="phone-number" required placeholder="Ví dụ: 0912345678">
            </div>

            <button type="submit" class="save-button">LƯU THAY ĐỔI</button>
        </form>
    </div>
</body>

</html>