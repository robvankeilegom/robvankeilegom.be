<h2 class="text-center text-uppercase">tags</h2>
<hr class="star-dark mb-5">

<div class="mb-5 text-center">
    @if ($allTags)
        @foreach ($allTags as $key => $tag)
            <a href="{{ route('projectsByTag', [ $tag->name]) }}" class="badge badge-outline">
                @if (isset($currentTag) && $tag->name == $currentTag)
                    <b>{{ $tag->name }}</b>
                @else
                    {{ $tag->name }}
                @endif
                ({{ App\Models\Project::withAllTags([$tag])->count() }})
            </a>
        @endforeach
    @endif
</div>
