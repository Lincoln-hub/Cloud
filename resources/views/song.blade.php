<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
	  content ="width=device-width, user-scalable=no,maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content = "ie=edge">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Music Catalog</title>
</head>
<body>
	<div class="container-fluid">
    	<div class="row">
    		<div class="col-md-6">
    			<form action="{{route('songs.create')}}" method="post">
    				@csrf
    				<div class="row form-group">
    					<div class="col-md-12">
    						<label for"">Artist</label>
    						<input type="text" name ="artist" class="form-control" required>
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-md-12">
    						<label for"">Song</label>
    						<input type="text" name ="song" class="form-control" required>
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-md-12">
    						<label for"">Genre</label>
    						<input type="text" name ="genre" class="form-control" required>
    					</div>
    				</div>
    				<div class="row form-group">
    					<div class="col-md-12">
    						<button type ="submit" class="btn btn-success w-50 float-right">Create</button>
    					</div>
    				</div>
    			</form>
    		</div>
    		<div class="col-md-6">
    			<table class="table table-striped table-hover">
    				<tr>
    					<th>Artist</th>
    					<th>Song</th>
    					<th>Genre</th>
    				</tr>
    				@foreach($songs as $song)
        				<tr>
        					<td>{{$song->Artist}}</td>
        					<td>{{$song->Song}}</td>
        					<td>{{$song->Genre}}</td>
        				</tr>
        			@endforeach
    			</table>
    		</div>
    	</div>
	</div>
</body>
</html>
