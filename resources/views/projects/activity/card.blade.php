<div class="card mb-3">
    <div class="card-body">
        <h4 class="text-muted mb-2">Activity</h4>
        @foreach ($project->activity as $activity)
            <div class="card-text">
                @include ("projects.activity.{$activity->description}")
                <span class="text-muted">{{ $activity->created_at->diffForHumans(null, true) }} ago</span>
            </div>
        @endforeach
    </div>
</div>
