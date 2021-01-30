@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">Thread</h2>
        <div class="card mb-3">
            <div class="card-header">
                <a href="#">{{ $thread->creator->name }}</a> posted:
                <h4 class="card-title">{{ $thread->title }}</h4>
            </div>
            <div class="card-body">
                {{ $thread->body }}
            </div>
        </div>
        @foreach ($thread->replies as $reply)
            @include('threads.reply')
        @endforeach

        @if (auth()->check())
            <form method="POST" action="{{ $thread->path() . '/replies' }}">
                @csrf
                <textarea class="form-control mb-3" id="body" name="body" rows="3"></textarea>
                <button type="submit" class="btn btn-primary btn-sm">Comment</button>
            </form>
        @endif
    </div>
@endsection
