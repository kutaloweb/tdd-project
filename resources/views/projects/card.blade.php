<div class="card mb-3">
    <div class="card-header">
        <h4 class="card-title"><a href="{{ $project->path() }}">{{ $project->title }}</a></h4>
    </div>
    <div class="card-body">
        <div class="card-text">{{ str_limit($project->description, 100) }}</div>
    </div>
    <div class="card-footer">
        @can ('manage', $project)
            <form method="POST" action="{{ $project->path() }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
        @endcan
    </div>
</div>
