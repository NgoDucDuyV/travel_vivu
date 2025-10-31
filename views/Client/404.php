<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-b from-amber-200 via-orange-100 to-blue-100 text-gray-800 px-6 py-12">
        <!-- Icon du lịch -->
        <div class="relative mb-8">
            <div class="absolute -top-10 -left-10 w-16 h-16 bg-orange-400 rounded-full blur-2xl opacity-30 animate-pulse"></div>
            <div class="absolute -bottom-8 -right-8 w-20 h-20 bg-blue-400 rounded-full blur-3xl opacity-30 animate-pulse"></div>
            <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png"
                alt="Travel icon"
                class="w-32 h-32 animate-bounce drop-shadow-lg">
        </div>

        <!-- Tiêu đề -->
        <h1 class="text-[120px] font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-blue-500 drop-shadow-lg">
            404
        </h1>
        <h2 class="text-3xl md:text-4xl font-semibold mb-4 text-orange-600">
            Ôi! Trang bạn tìm không tồn tại 🏖️
        </h2>

        <p class="text-gray-600 text-center max-w-md mb-8">
            Có vẻ như bạn đã lạc vào một hành trình không có trong bản đồ.
            Hãy quay lại trang chủ để tiếp tục khám phá những tour tuyệt vời nhé!
        </p>

        <!-- Nút trở về -->
        <a href="<?= BASE_URL ?>?mode=client&act=trangchu"
            class="px-6 py-3 bg-gradient-to-r from-orange-500 to-blue-400 text-white font-semibold rounded-full shadow-md hover:from-orange-600 hover:to-blue-500 transition duration-300">
            🏡 Quay lại trang chủ
        </a>

        <!-- Trang trí -->
        <div class="mt-12 flex gap-3 opacity-80 animate-bounce">
            <img src="https://cdn-icons-png.flaticon.com/512/147/147258.png" class="w-10 h-10" alt="Plane">
            <img src="https://cdn-icons-png.flaticon.com/512/616/616490.png" class="w-10 h-10" alt="Balloon">
            <img src="https://cdn-icons-png.flaticon.com/512/3448/3448659.png" class="w-10 h-10" alt="Map">
        </div>
    </div>
</body>

</html>