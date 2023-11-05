@extends('layouts.app')
@section('content')

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
		</tr>
		@endforeach
    </tbody>
</table>    
@endsection