<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Review</title>
</head>
<body>
    <form method="post" action="{{action('reviewController@update', $id)}}">
    {{csrf_field()}}
    <input type="longText" name="review"> <br>
    <input type="range" name="rating" min=1 max=5> <br>
    <input type="submit">
</body>
</html>