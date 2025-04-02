@extends('layouts.master')
<?php 

$comics = config('comics'); 
// dd($comics);
?>

@section('content')
<section class="jumbo">
    
    <button class="btn btm-primary"></button>
</section>
<div class="container">
    <h1>homepage</h1>
    <div class=""></div>
    <div class="row row-cols-5 g-3">     
        @foreach($comics as $comic)
        <x-card>
            <x-slot:img>
                {{$comic['thumb']}}
            </x-slot:img>
            <x-slot:title>
                {{$comic['series']}}
            </x-slot:title>
            <x-slot:price>
                {{$comic['price']}}
            </x-slot:price>
            
        </x-card>
        @endforeach
    </div>
</div>




@endsection
