@props(['job'])

<x-panel>
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl">
            <a href="{{ $job->url }}">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center my-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42" />
    </div>
</x-panel>
