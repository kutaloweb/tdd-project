<div>
    <form method="POST" action="{{ $project->path() . '/invitations' }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email address" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Invite</button>
    </form>
    @include ('errors', ['bag' => 'invitations'])
</div>
