@extends ('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">My Projects</h2>
        <a class="btn btn-success mb-3 btn-sm" href="{{ url('/projects/create') }}">Create Project</a>
        @forelse ($projects as $project)
            <div class="card-group">
                @include ('projects.card')
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    No projects yet.
                </div>
            </div>
        @endforelse
    </div>
@endsection
