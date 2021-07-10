@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
    @csrf
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type</label>
        <select name="type" id="type">
            <option value="margherita">Margarita</option>
            <option value="hawaian">Hawaian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose pizza base</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label>
            Extra toppings</label>
            <input type="checkbox" name="toppings[]"
            value="mushrooms" 
            >Mashroom<br/>
            <input type="checkbox" name="toppings[]"
            value="pappers" 
            >pappers<br/>
            <input type="checkbox" name="toppings[]"
            value="garlic" 
            >garlic<br/>
            <input type="checkbox" name="toppings[]"
            value="olives" 
            >olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizzas">
    </form>
</div>
@endsection('content')