<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full overflow-auto">
  <form action="./" method="get" class="flex flex-col gap-y-4 max-w-xs mx-auto pt-24">
    <label class="translate-y-4 font-bold" for="field_1">введите поле1</label>
    <input type="text" name="field_1"   class="border-gray-500 border  rounded-md p-4" >
    <label class="translate-y-4 font-bold" for="field_2">введите поле2</label>
    <input type="text" name="field_2"   class="border-gray-500 border  rounded-md p-4" >
    <label class="translate-y-4 font-bold" for="field_3">введите поле3</label>
    <input type="text" name="field_3"   class="border-gray-500 border  rounded-md p-4" >
    <label class="translate-y-4 font-bold" for="field_4">введите поле4</label>
    <input type="number" name="field_4" class="border-gray-500 border  rounded-md p-4" >
    <button
    	type="submit"
    	value="отправить"
    	name="formSubmit"
    	class="w-full bg-green-500 transition-colors hover:bg-green-400 rounded-md p-4 text-white">
		записать
    	</button>
    <?php
    if (isset($_GET['formSubmit'])) {
    } else {
      die("some err");
    }
    ?>
  </form>
</body>
</html>