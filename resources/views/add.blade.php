<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form class="w-[50%] mx-auto mt-20 flex flex-col gap-6" action="{{ URL('') }}" method="post">
        <h1 class=" text-5xl font-bold text-center">Add New Music</h1>
        @csrf
            <input type="text" name="img" placeholder="images" class="p-3 border border-gray-400 rounded-md">
            <input type="text" name="senger" placeholder="Senger" class="p-3 border border-gray-400 rounded-md">
            <input type="text" name="songs" placeholder="Songs" class="p-3 border border-gray-400 rounded-md">
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md">Add Music</button>
    </form>
</body>
</html>