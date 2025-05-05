<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mira Report Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Mira Report Generator</h1>
        <form method="POST" action="/mira/generate">
            <input type="text" name="prompt" class="w-full p-2 border rounded mb-4" placeholder="Enter your report prompt..." />
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Generate</button>
        </form>
    </div>
</body>
</html>
