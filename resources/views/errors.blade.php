@if ($errors->{ $bag ?? 'default' }->any())
    <div class="mt-3">
        @foreach ($errors->{ $bag ?? 'default' }->all() as $error)
            <div class="text-danger">{{ $error }}</div>
        @endforeach
    </div>
@endif
