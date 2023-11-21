<?php

include('brands/brands-easy.php');
$easyImgPath = 'brands/img/';
$randomBrandKey = array_rand($brands,  1);
$randomBrandName = $randomBrandKey;
$randomBrandImg = $easyImgPath . $brands[$randomBrandKey];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Brand Puzzler</title>
</head>
<body class="flex justify-center items-center w-screen h-screen">
<div class="flex justify-center w-full h-3/6 lg:h-80">
    <div class="brand-card flex flex-col items-center justify-evenly bg-[#f1f1f1] w-4/6 lg:w-3/12 h-full rounded-lg">
        <h1 class="text-2xl">Your Brand</h1>
        <img class="w-3/6 h-40 object-contain" src=" <?= $randomBrandImg ?>" />
        <a class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" href="<?php $_SERVER['PHP_SELF']; ?>">Refresh</a>
    </div>
</div>
</body>
</html>
