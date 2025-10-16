<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiệu ứng Loading Skeleton</title>
    <style>
        .skeleton-card-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            display: none;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            z-index: 100;
        }

        .skeleton-card {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        /* Cấu trúc Skeleton */
        .skeleton-image {
            width: 100%;
            height: 200px;
            background-color: #e0e0e0;
            position: relative;
            overflow: hidden;
        }

        .skeleton-content {
            padding: 15px;
        }

        .skeleton-line {
            height: 15px;
            background-color: #e0e0e0;
            margin-bottom: 10px;
            border-radius: 4px;
            position: relative;
            overflow: hidden;
        }

        .skeleton-line.skeleton-title {
            width: 80%;
            height: 25px;
            margin-bottom: 15px;
        }

        .skeleton-line.short {
            width: 60%;
        }

        /* Hiệu ứng chuyển động (Animation) */
        .skeleton-line::after,
        .skeleton-image::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shine 1s infinite;
        }

        @keyframes shine {
            to {
                left: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="skeleton-card-container">
        <div class="skeleton-card">
            <div class="skeleton-image"></div>
            <div class="skeleton-content">
                <div class="skeleton-line skeleton-title"></div>
                <div class="skeleton-line"></div>
                <div class="skeleton-line"></div>
                <div class="skeleton-line short"></div>
            </div>
        </div>
    </div>

</body>

</html>