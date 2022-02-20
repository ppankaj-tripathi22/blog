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
  <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter course" name="course">
    </div>
    <div class="form-group">
      <label for="section">Section:</label>
      <input type="text" class="form-control" id="section" placeholder="Enter section" name="section">
    </div>
	<div class="form-group">
		<input type="file" name="image" placeholder="Choose image" id="image">
	@error('image')
		<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
	@enderror
	</div>
               
	
	
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
