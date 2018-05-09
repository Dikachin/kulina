<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Show Review</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Order_id</th>
        <th>Product_id</th>
        <th>User_id</th>
        <th>Rating</th>
        <th>Review</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($post as $review)
      <tr>
        <td>{{$review['order_id']}}</td>
        <td>{{$review['product_id']}}</td>
        <td>{{$review['user_id']}}</td>
        <td>{{$review['rating']}}</td>
        <td>{{$review['review']}}</td> 
        <td><a href="{{action('reviewController@edit', $review['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('reviewController@destroy', $review['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>