<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title></title>
</head>
<body style="text-align:center">
<div class="wrapper-grid">
            <div class="container-grid">
    <h1>Add Item</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/upload" method="post">
        @csrf
        <label for="title">Choose an item</label>

<select name="title" type="text" id="title" style="padding:10px 20px;">
  <option value="tea">Tea</option>
  <option value="coffee">Coffee</option>
  <option value="apple">Apple</option>
  <option value="banana">Banana</option>
</select><br><br>
        <!-- <input type="text" class="text-edit" name="title" /> <br><br> -->
        <input type="submit" class="edit-btn" value="Create" /><br><br>
    </form>
    <br>
    <a href="/index" class="back-btn" >Home</a> <br><br><br><br>
    </div>
    </div>
</body>
</html>
