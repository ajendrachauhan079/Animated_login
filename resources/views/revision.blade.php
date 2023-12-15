<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method='POST' action="{{ route('revision.create') }}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='name' value="{{ old('name') }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='age' value="{{ old('age') }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
   <select name ='gender'> 
    <option> ----------</option>
    <option value='male' > Male</option>
    <option  value='female'> Female</option>
   </select >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mobile</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='mobile'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
  <select name ='status'> 
    <option> ----------</option>
    <option value='1' > Active</option>
    <option  value='0'> Inactiv</option>
   </select >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>