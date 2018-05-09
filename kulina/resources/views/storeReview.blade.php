<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Review</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="post">
        {{csrf_field()}}
        <input type="integer" name="order_id"> <br>
        <input type="integer" name="product_id"> <br>
        <input type="integer" name="user_id"> <br>
        <input type="range" name="rating" min=1 max=5> <br>
        <input type="text" name="review"> <br>
        
        <input type="submit">
    </form>
</body>
</html>