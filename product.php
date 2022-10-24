<?php
require "config/connect.php";
$product_id = $_GET["id"];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);
// print_r($product);
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
  
<form action="vendor/update.php" method="post" class="max-w-xl mx-auto mt-16">
  <h2 class="text-xl font-bold">Обновить элемент</h2>
  <div class="flex flex-col gap-y-4 mt-5">
    <div class="flex gap-x-2">
      <input type="text"  value="<?= $product['id'] ?>" name="id" placeholder="id" readonly class="bg-neutral p-2 rounded w-24" />
      <input type="text" name="title" value="<?= $product['tiltle'] ?>" placeholder="title" class="bg-neutral p-2 rounded w-full" />
    </div>
    <textarea name="discription" placeholder="discription"  class="bg-neutral p-2 rounded w-full"> <?= $product['discription'] ?></textarea>
    <input type="number" name="price" value="<?= $product['price'] ?>" placeholder="price" class="bg-neutral p-2 rounded w-full" />
    <button class="btn" type="submit">update element</button>  
  </div>
</form>


</body>