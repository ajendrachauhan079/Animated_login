<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

<table class="table">
<caption>Total Rcords {{ $data->count()}}</caption>
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $product)

  <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $product->name}}</td>
      <td>{{ $product->description}}</td>
      <td><a href="{{ route('delete',$product->id) }}" class='btn btn-danger'>Delete</a>  <a href="{{ route('edit',$product->id) }}" class='btn btn-primary'>Edit</a></td>
    </tr>

  @endforeach
 
  
  </tbody>
</table>
    
</body>
</html>