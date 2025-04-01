@extends('layouts.master')
<?php 

$comics = config('comics'); 
// dd($comics);
?>

@section('content')
<h1>homepage</h1>
<div class="row row-cols-3 g-3">
    <div class="col">

        
        @foreach($comics as $comic)
        <x-card>
            <x-slot:img>
                <img src="{{$comic['thumb']}}" class="card-img-top img-fluid w-25" alt="...">
            </x-slot:img>
            <x-slot:title>
                {{$comic['title']}}
            </x-slot:title>
            <x-slot:price>
                {{$comic['price']}}
            </x-slot:price>
            
        </x-card>
        @endforeach
    </div>
</div>




@endsection
