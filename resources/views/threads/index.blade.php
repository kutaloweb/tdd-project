@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">Threads</h2>
        @include ('threads.list')
    </div>
@endsection
