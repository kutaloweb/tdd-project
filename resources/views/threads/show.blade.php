@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">Thread</h2>
        <div class="card mb-3">
            <div class="card-header">
                <h4 class="card-title">{{ $thread->title }}</h4>
            </div>
            <div class="card-body">
                <div class="card-text">{{ $thread->body }}</div>
            </div>
        </div>
    </div>
@endsection
