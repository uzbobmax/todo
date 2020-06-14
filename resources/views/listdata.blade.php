@extends('app')
@extends('list_create')
@section('title', 'todo')

@section('list-item')
<div class="list">
	<h1>List tasks</h1>

		<ul>
			@foreach($data as $el)
			<li>{{ $el->name }}</li>
			@endforeach
		</ul>
</div>
@endsection
	