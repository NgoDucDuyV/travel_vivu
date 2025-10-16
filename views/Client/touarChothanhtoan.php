<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        :root {
            --primary-red: #ff3b30;
            --text-color: #333;
            --light-gray: #f7f7f7;
            --border-color: #e0e0e0;
            --card-bg: #fff;
            --font-family: 'Roboto', sans-serif;
        }

        body {
            font-family: var(--font-family);
        }

        .cart-container {
            width: 100%;
            height: 100%;
            background-color: var(--card-bg);
            border-radius: 8px;
            position: relative;
            bottom: 30px;
        }

        .cart-header {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            background-color: var(--light-gray);
            border-bottom: 1px solid var(--border-color);
            font-size: 1.2em;
            font-weight: 500;
        }

        .back-link {
            display: flex;
            align-items: center;
            margin-right: 10px;
            color: inherit;
        }

        .back-link svg {
            width: 20px;
            height: 20px;
        }

        .cart-content {
            display: flex;
            padding: 20px;
            flex-wrap: wrap;
        }

        .product-list {
            flex: 2;
            padding-right: 20px;
        }

        .summary-section {
            flex: 1;
            padding-left: 20px;
            border-left: 1px solid var(--border-color);
        }

        @media (max-width: 768px) {
            .cart-content {
                flex-direction: column;
            }

            .product-list,
            .summary-section {
                padding: 0;
                border-left: none;
            }

            .summary-section {
                margin-top: 20px;
            }
        }

        .section-title {
            font-size: 1.1em;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 10px 0px;
        }

        .product-info {
            display: flex;
            align-items: flex-start;
        }

        .product-image {
            width: 100px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 15px;
        }

        .product-details {
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-weight: 500;
            line-height: 1.4;
        }

        .product-date-label {
            font-size: 0.9em;
            color: #666;
            margin-top: 5px;
        }

        .product-date-value {
            font-size: 0.9em;
            font-weight: 500;
            margin-top: 2px;
        }

        .price-quantity-group {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .product-price {
            font-weight: 500;
        }

        .quantity-input-group {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .quantity-input-group span {
            font-size: 0.9em;
            color: #666;
            margin-right: 5px;
        }

        .quantity-input-group input {
            width: 50px;
            text-align: center;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 5px;
        }

        .product-total-price {
            text-align: right;
            font-weight: 500;
            margin-top: 20px;
            border-top: 1px dashed var(--border-color);
            padding-top: 15px;
        }

        .total-value {
            font-weight: 700;
            color: var(--primary-red);
        }

        .discount-box,
        .summary-box {
            margin-bottom: 20px;
            padding: 15px;
            background-color: var(--light-gray);
            border-radius: 8px;
        }

        .discount-input-group {
            display: flex;
        }

        .discount-input-group input {
            flex: 1;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            outline: none;
            font-size: 1em;
        }

        .discount-input-group button {
            padding: 10px 15px;
            border: none;
            background-color: #ddd;
            color: var(--text-color);
            font-weight: 500;
            border-radius: 4px;
            margin-left: 10px;
            cursor: pointer;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .final-price {
            font-weight: 700;
            color: var(--primary-red);
        }

        .final-price-value {
            font-size: 1.1em;
        }

        .checkout-btn {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: var(--primary-red);
            color: #fff;
            font-size: 1.1em;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #ff8000ff;
        }
    </style>
</head>

<body>

    <div class="cart-container">
        <div class="cart-header">
            <a href="#" class="back-link">
                <i class='bxr  bx-shopping-bag-alt'></i>
            </a>
            <span>Giỏ hàng</span>
        </div>

        <div class="cart-content">
            <div class="product-list">
                <div class="section-title">Sản phẩm</div>
                <?php foreach ($dataChoThanhToan as  $value): ?>
                    <div class="product-item">
                        <div class="product-info">
                            <img src="<?= $value->image ?>" alt="Lặn biển ngắm san hô" class="product-image">
                            <div class="product-details">
                                <div class="product-name"><?= $value->title ?></div>
                                <div class="product-date-label">Ngày Trải Nghiệm</div>
                                <div class="product-date-value"><?= $value->time_days ?> Ngày</div>
                            </div>
                        </div>
                        <div class="price-quantity-group">
                            <div class="product-price"><?= number_format($value->price) ?>VND</div>
                            <div class="quantity-input-group">
                                <span>x</span>
                                <input type="number" value="1" min="1">
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (!empty($dataChoThanhToan)) { ?>
                    <div class="product-total-price">
                        Tổng: <span class="total-value">1,800,000 đ</span>
                    </div>
                <?php } else { ?>
                    <div class="product-total-price">
                        Tổng: <span class="total-value">Không có sản phẩm nào</span>
                    </div>
                <?php } ?>
            </div>

            <div class="summary-section">
                <div class="discount-box">
                    <div class="section-title">Giảm giá</div>
                    <div class="discount-input-group">
                        <input type="text" placeholder="Mã giảm giá">
                        <button>Đồng ý</button>
                    </div>
                </div>

                <div class="summary-box">
                    <div class="summary-row">
                        <span>Tổng (chưa giảm giá):</span>
                        <span>1,800,000 đ</span>
                    </div>
                    <div class="summary-row">
                        <span>Tổng giảm giá:</span>
                        <span>0 đ</span>
                    </div>
                    <div class="summary-row final-price">
                        <span>Tạm tính:</span>
                        <span class="final-price-value">1,800,000 đ</span>
                    </div>
                </div>

                <button class="checkout-btn">Tiến hành đặt tour</button>
            </div>
        </div>
    </div>

</body>

</html>