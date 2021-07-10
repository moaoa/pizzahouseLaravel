@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <div class="title m-b-md">
    </div>
    <h1>The North's Best Pizzas</h1>
    <p>{{ session('mssg') }}</p> 
    <a href=" {{ route('pizzas.create') }}">Create a New Pizza</a>
</div>
@endsection('content')