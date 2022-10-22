<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <?php require "config/connect.php"; ?>


  
  <form action="vendor/create.php" method="post" class="max-w-xl mx-auto mt-16">
      <h2 class="text-xl font-bold">Записать новый элемент в таблицу</h2>
      <div class="flex flex-col gap-y-4 mt-5">
        <input type="text" name="title" placeholder="set name" class="bg-neutral p-2 rounded w-full" />
        <textarea name="discription" class="bg-neutral p-2 rounded w-full"></textarea>
        <input type="number" name="price" class="bg-neutral p-2 rounded w-full" />
        <button class="btn" type="submit">add new element</button>  
      </div>
  </form>

  <table class="mt-16 mx-auto max-w-xl">
    <thead>
      <tr class="grid grid-cols-4 gap-x-4 bg-neutral p-2 rounded">
        <th> id </th> <th> titile </th> <th> discription </th> <th> price </th>
      </tr>
    <thead>
  
    <tbody>
      <?php 
      $products = mysqli_query($connect, "SELECT * FROM `products`");
      $products = mysqli_fetch_all($products);
      // print_r($products);
      foreach ($products as $product) {
        echo <<< "TABLE"
        <tr class="grid grid-cols-4 gap-x-4 text-center border-b py-2 border-base-300">
          <td>{$product[0]}</td>
          <td>{$product[1]}</td>
          <td>{$product[3]}</td>
          <td>{$product[2]}</td>
        </tr>
        TABLE;
      }
      ?>
    </tbody>
  </table>



</body>