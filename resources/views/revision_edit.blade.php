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
    
<form method='POST' action="{{ route('revision.update', $revision->id) }}">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='name' value="{{ $revision->name ?? '' }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='age'  value="{{ $revision->age ?? '' }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
   <select name ='gender'> 
    <option> ----------</option>
    <option value='male' {{ $revision->gender == 'male' ? 'selected' :''}} > Male</option>
    <option  value='female'  {{ $revision->gender == 'female' ? 'selected' :''}}> Female</option>
   </select >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">mobile</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='mobile'  value="{{ $revision->mobile ?? '' }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
  <select name ='status'> 
    <option> ----------</option>
    <option value='1'   {{ $revision->status == '1' ? 'selected' :''}} > Active</option>
    <option  value='0'  {{ $revision->status == '0' ? 'selected' :''}}> Inactiv</option>
   </select >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>