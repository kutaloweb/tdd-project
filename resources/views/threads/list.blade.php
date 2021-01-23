@forelse ($threads as $thread)
    <div class="card mb-3">
        <div class="card-header">
            <h4 class="card-title"><a href="{{ $thread->path() }}">{{ $thread->title }}</a></h4>
        </div>
        <div class="card-body">
            <div class="card-text">{{ str_limit($thread->body, 100) }}</div>
        </div>
    </div>
@empty
    <div class="card">
        <div class="card-body">
            There are no relevant results at this time.
        </div>
    </div>
@endforelse
