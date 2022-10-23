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
        <input type="text" name="title" placeholder="title" class="bg-neutral p-2 rounded w-full" />
        <textarea name="discription" placeholder="discription" class="bg-neutral p-2 rounded w-full"></textarea>
        <input type="number" name="price" placeholder="price" class="bg-neutral p-2 rounded w-full" />
        <button class="btn" type="submit">add new element</button>  
      </div>
  </form>

  <table class="my-16 mx-auto max-w-xl">
    <thead>
      <tr class="grid grid-cols-5 gap-x-4 bg-neutral p-2 rounded">
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
        <tr class="grid grid-cols-5 gap-x-4 text-center border-b py-2 border-base-300">
          <td>{$product[0]}</td>
          <td>{$product[1]}</td>
          <td>{$product[3]}</td>
          <td>{$product[2]}</td>
          <td class="flex justify-end gap-x-2"><a href="product.php?id={$product[0]}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg>
          </a>
            <a href="vendor/delete.php?id={$product[0]}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            </a>
          </td>
        </tr>
        TABLE;
      }
      ?>
    </tbody>
  </table>



</body>