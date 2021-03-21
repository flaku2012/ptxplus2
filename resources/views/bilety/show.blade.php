@extends('home')

@section('content')
<br>
<div class="row">
	<div class="col-sm-12">
		<h3 class="text-center alert alert-dark">Bilety - podgląd</h3>
		<a href="{{ url('tickets/add') }}"><button class="btn btn-sm btn-success">Dodaj nowy</button></a>
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		<table class="table">
		  <thead>
		    <tr class="text-center">
		      <th scope="col">Nazwisko</th>
		      <th scope="col">Imię</th>
		      <th scope="col">Kategoria</th>
		      <th scope="col" width="30px">Usuń</th>
		    </tr>
		  </thead>
		  <tbody>
		    	@foreach($tickets as $ticket)
			    	<tr class="text-center">
			    	<td>{{$ticket->surname}}</td>
			    	<td>{{$ticket->name}}</td>
			    	<td>{{$ticket->category_id}}</td>
			    	<td>
			    		<form method="POST" action="{{ url('/tickets/delete/' . $ticket->id ) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-sm" onClick="return confirm('Czy na pewno chcesz usunąć?')"><span class="fas fa-trash-alt"></span></button>
						</form>
			    	</td>
			    	</tr>
		    	@endforeach
		  </tbody>
		</table>

	</div>
</div>

@endsection