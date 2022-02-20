<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
 <form action="{{url('student_update')}}" method="POST"> 
                        @csrf     						
	<div class="form-group">
      <label for="name">Id:</label>
      <input type="text" class="form-control" id="id" value='{{$data->id}}' placeholder="Enter name" name="id">
    </div>					
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value='{{$data->name}}' placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value='{{$data->email}}' placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" value='{{$data->course}}'placeholder="Enter course" name="course">
    </div>
    <div class="form-group">
      <label for="section">Section:</label>
      <input type="text" class="form-control" id="section" value='{{$data->section}}' placeholder="Enter section" name="section">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
