
@extends('layouts.master')

@section('content')
	
	<h1>Selamat Datang Di Halaman {{ $item->id }}</h1>
	<h2>
		{{ $item->material_name }}
	</h2>
	<hr>
	<p>
		{{ $item->item_code }}
		{{ $item->group }}
	</p>


@endsection
