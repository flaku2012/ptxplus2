@extends('home')

@section('content')
<h3 class="text-center alert alert-dark">Formularz rejestracji</h3>
<a href="{{ url('tickets/show') }}"><button class="btn btn-sm btn-success">Pokaż wszystkie</button></a>

<div>

  <ticket-create></ticket-create>

</div>

<br><br>
@endsection