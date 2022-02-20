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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>How to Fetch data in Laravel 8</h4>
					@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                </div>
                <div class="card-body">	
<!---Below image retrieving code are work only when data in public folder not in storage folder-->
<img src="{{url('/studentphoto/Photo.jpg')}}" height="50" width="50" style="float: left" alt="Image"/>


<img src="{{asset('/studentphoto/Photo.jpg')}}" height="50" width="50" style="float: left">	
<img src="{{asset('/studentphoto/ajay.jpg')}}" height="50" width="50" style="float: left">
				
<a href="{{ url('add-student') }}" class="btn btn-primary btn-sm">Add</a>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
								<th>Photo path</th>
								<th>Photo</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->section }}</td>
								<td>{{ $item->photo }}</td>
								<!--
								<td><img src="{{ asset('/uploads'.$item->photo)}}" width="70px" height="70px" alt="Image"</td>
                                ---->
								<td><img src="{{ asset('studentphoto/'.$item->photo)}}" width="70px" height="70px" alt="Image"></td>
								
								<td>
                                    <a href="{{ url('student_edit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('student_delete/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>