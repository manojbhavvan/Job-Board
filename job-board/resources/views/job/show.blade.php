<x-layout>
    @vite('resources/css/app.css')
    <x-breadcrumbs class="mb-4"
        :links="['Jobs' => route('jobs.index'), $job->title => '#']"/>
    <x-job-card :$job />
</x-layout>