<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>競馬予想登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Zen Kaku Gothic New', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Head[Start] -->
    <header>
        <nav class="bg-white shadow-sm">
            <div class="container mx-auto py-4">
                <div class="flex justify-between items-center">
                    <div class="text-2xl font-bold text-black"><a href="select.php">有馬記念予想</a></div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <main class="container mx-auto mt-8 p-4">
        <form method="post" action="insert.php" class="bg-white shadow-xl rounded px-8 py-6">
            <fieldset>
                <legend class="text-2xl mb-4">夢を託そう🎠</legend>
                <div class="mb-4">
                    <label for="first" class="block text-gray-700 text-sm font-bold mb-2">一着</label>
                    <input type="text" name="first" id="first" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="second" class="block text-gray-700 text-sm font-bold mb-2">二着</label>
                    <input type="text" name="second" id="second" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="third" class="block text-gray-700 text-sm font-bold mb-2">三着</label>
                    <input type="text" name="third" id="third" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="memo" class="block text-gray-700 text-sm font-bold mb-2">メモ</label>
                    <textarea name="memo" id="memo" rows="4" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" value="夢をたくします 👉👉" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </fieldset>
        </form>
    </main>
    <!-- Main[End] -->
</body>
</html>