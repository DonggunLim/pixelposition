<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="" class="my-6">
                <input type="text" placeholder="looking for..."
                    class="rounded-xl bg-white/15 border-white/25 px-5 py-4 w-full max-w-lg ">
            </form>
        </section>

        <section class="my-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="my-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="my-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
