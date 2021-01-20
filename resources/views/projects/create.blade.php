@extends ('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-3">Let's start something new</h2>
        <div class="card">
            <div class="card-body">
                <form
                    method="POST"
                    action="/projects"
                >
                    @include ('projects.form', [
                        'project' => new App\Project,
                        'buttonText' => 'Create Project'
                    ])
                </form>
            </div>
        </div>
    </div>
@endsection
