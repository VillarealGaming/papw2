@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 hidden-xs">
			<div class=" panel panel-default sidepanel pull-right">
				<div class="panel-heading">
					<a href="/usuario">
						<img src={{ URL::asset($usuario->avatarMinRuta) }}>
					</a>
					ID de usuario: {{ Auth::id()}}
				</div>
				<div class="panel-body">
					Clubes que sigo...
{{-- 						@foreach ($misClubes as $club)
						{{$club}}
					@endforeach --}}
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-sm-push-6 hidden-xs">
			<div class=" list-group sidepanel">
			<li class="list-group-item">Nuevos grupos</li>
			@foreach ($nuevosClubs as $club)
			<a href="/club/{{$club->id}}" class="list-group-item">
				<img src="{{ URL::asset($club->avatarMinRuta) }}" class="pull-left" width="40" height="40">
				<h4 class="list-group-item-heading"> {{ str_limit($club->nombreClub, 15, '...') }} </h4>
				<p class="list-group-item-text"> {{ str_limit($club->descripcion, 20,'...') }} </p>
			</a>
			@endforeach
			</div>
		</div>
		<div class="col-sm-6 col-sm-pull-3">
			<div class="row">
				@for ($i = 0; $i < 15; $i++)
				<div class="panel panel-default">
					<div class="panel panel-heading">
						Publicación {{$i}}
						<br>
					</div>
					<div class="panel panel">
						Aquí va a haber contenido...
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>
@endsection