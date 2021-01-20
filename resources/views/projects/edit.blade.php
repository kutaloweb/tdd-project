@extends ('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-muted text-center mb-4">Edit your project</h2>
        <div class="card">
            <div class="card-body">
                <form
                    method="POST"
                    action="{{ $project->path() }}"
                >
                    @method('PATCH')
                    @include ('projects.form', [
                        'buttonText' => 'Update Project'
                    ])
                </form>
            </div>
        </div>
    </div>
@endsection
