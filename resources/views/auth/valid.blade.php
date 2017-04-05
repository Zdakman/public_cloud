    @extends('welcome')

@section('content')
                    <div class="container">
		<form action="{{ URL::to('customValiPost') }}" class="form-horizontal" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<input type="text" name="title" class="form-control" style="width:30%" placeholder="Add Odd String" />
			<br/>
			<button class="btn btn-primary">Save</button>
		</form>
	</div>

@endsection