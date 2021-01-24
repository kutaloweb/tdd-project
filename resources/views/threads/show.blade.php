@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">Thread</h2>
        <div class="card mb-3">
            <div class="card-header">
                <h4 class="card-title">{{ $thread->title }}</h4>
            </div>
            <div class="card-body">
                {{ $thread->body }}
            </div>
        </div>
        @foreach ($thread->replies as $reply)
            <div class="card mb-3">
                <div class="card-header">
                    {{ $reply->owner->name }} said {{ $reply->created_at->diffForHumans() }}
                </div>
                <div class="card-body">
                    {{ $reply->body }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
