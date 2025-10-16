<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <style>
        .loadtrang {
            position: absolute;
            width: 100%;
            height: 100%;
            display: none;
            background-color: #fff;
            z-index: 9999;
        }

        .huyload {
            position: absolute;
            top: 1%;
            left: 1%;
        }

        .huyload>button {
            border: none;
            height: 40px;
            width: 100px;
            border-radius: 5px;
            background-color: #ff8400;
            color: #fff;
            font-weight: 500;
        }

        .rectionload {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rectionload>i {
            font-size: 70px;
            color: rgb(255, 115, 0);
            animation: Amimation 3s infinite alternate;
        }

        @keyframes Amimation {
            from {
                transform: rotate(-360deg);
            }

            to {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

<body>
    <div class="loadtrang">
        <div class="huyload">
            <button>Hủy tải trang</button>
        </div>
        <div class="rectionload">
            <i class="bxr bx-loader-dots bx-spin "></i>
        </div>
    </div>
</body>

</html>