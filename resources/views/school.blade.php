@extends('layouts.app')
@section("data-header")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection
@section('content')
New
<table class="table table-striped table-bordered" id="school-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Logo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
		@foreach($schools as $school)
		<tr>
			<td>
			{{ $school->name}}
			</td>
			<td>
			{{$school->address}}
			</td>
			<td>
			{{$school->logo}}
			</td>
			<td>
			  Update Delete
			</td>			
		</tr>
		@endforeach
    </tbody>
</table>

<script>

</script>    
@endsection