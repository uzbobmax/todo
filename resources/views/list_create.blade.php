
@section('content')
    <p><form action="/create" method="post">
    	@csrf
		<input type="text" name="insert_data">
		<input type="submit" value="Add Task">
</form></p>
<div class="container">
	<div class="row">
		@yield('list-item')
	</div>
	
</div>

@endsection
