@extends ('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">{{ $project->title }}</h2>
        <a class="btn btn-dark mb-3 btn-sm" href="{{ $project->path().'/edit' }}">Edit Project</a>
        <span class="mb-3 float-right">
            <a href="/projects" class="text-muted">My projects</a> / {{ $project->title }}
        </span>

        @include ('projects.card')

        <div class="card mb-3">
            <div class="card-body">
                <h4 class="text-muted mb-2">Tasks</h4>
                @foreach ($project->tasks as $task)
                    <form method="POST" action="{{ $task->path() }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <div class="input-group" style="width: 100%">
                            <span class="input-group-prepend">
                                <input class="task-checkbox"
                                       type="checkbox"
                                       name="completed"
                                       onChange="this.form.submit(); return false;"
                                       {{ $task->completed ? 'checked' : '' }}>
                            </span>
                                <input type="text"
                                       name="body"
                                       value="{{ $task->body }}"
                                       class="{{ $task->completed ? 'form-control task-completed text-muted' : 'form-control' }}">
                            </div>
                        </div>
                    </form>
                @endforeach
                <form action="{{ $project->path() . '/tasks' }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Add a new task..." name="body">
                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h4 class="text-muted mb-2">General notes</h4>
                <form method="POST" action="{{ $project->path() }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                    <textarea
                        class="form-control"
                        id="notes"
                        placeholder="Anything special that you want to make a note of?"
                        name="notes"
                        rows="4">{{ $project->notes }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

        @include ('projects.activity.card')

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="text-muted mb-2">Members</h4>
                        @foreach ($project->members as $member)
                            {{ $member->name }} ({{ $member->email }}),
                        @endforeach
                        {{ $project->owner->name }} ({{ $project->owner->email }})
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                @can ('manage', $project)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="text-muted mb-2">Invite a User</h4>
                            @include ('projects.invite')
                        </div>
                    </div>
                @endcan
            </div>
        </div>
    </div>
@endsection
