@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text"
           class="form-control"
           id="title"
           name="title"
           placeholder="My next project"
           value="{{ $project->title }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea
        class="form-control"
        id="description"
        name="description"
        rows="4">{{ $project->description }}</textarea>
</div>
<button type="submit" class="btn btn-primary btn-sm mr-3">{{ $buttonText }}</button>
<a href="{{ $project->path() }}">Cancel</a>

@include ('errors')
