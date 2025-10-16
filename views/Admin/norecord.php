<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Không có hồ sơ</title>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .noracord {
            background-color: #ffffff;
            border-radius: 0.75rem;
            /* rounded-xl */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            /* shadow-xl */
            padding: 3rem;
            /* p-12 */
            text-align: center;
            max-width: 90%;

            height: 80vh;
            /* max-w-sm (tăng nhẹ để phù hợp) */
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .icon-wrapper {
            width: 6rem;
            /* w-24 */
            height: 6rem;
            /* h-24 */
            margin: 0 auto 2rem;
            /* mx-auto mb-8 */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .icon-wrapper svg {
            width: 100%;
            height: 100%;
            color: #ff9a35ff;
            /* indigo-500 */
        }

        .main-message {
            font-size: 1.5rem;
            /* text-2xl */
            font-weight: 600;
            /* font-semibold */
            color: #1f2937;
            /* gray-900 */
            margin-bottom: 0.5rem;
            /* mb-2 */
        }

        .sub-message {
            font-size: 0.875rem;
            /* text-sm */
            color: #6b7280;
            /* gray-500 */
            line-height: 1.5;
            /* leading-relaxed */
        }
    </style>
</head>

<body>
    <div class="noracord">
        <div class="icon-wrapper">
            <!-- SVG icon for "no document" or "empty state" -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
        </div>
        <h2 class="main-message">Không có hồ sơ</h2>
        <p class="sub-message">Không có hồ sơ nào trong tài nguyên này</p>
    </div>
</body>

</html>