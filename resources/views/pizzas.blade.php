@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    
    <br />
    <div class="flex-center">
        <div> i am {{ $name }}</div>
        <p> {{ $age }} years old now</p>
        @foreach($pizzas as $pizza)
            <p>
            {{ $loop->index + 1 }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
                <span> - this is the first pizza</span>
            @elseif($loop->last)
                <span> - this is the last pizza</span>
            @endif
            </p>    
        @endforeach    
    </div>
</div>
@endsection
