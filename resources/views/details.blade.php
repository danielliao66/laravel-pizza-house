@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    
    <br />
    <div class="flex-center">
        <div> the secret code is <strong>{{ $id }}</strong> </div> 
    </div>
</div>
@endsection
