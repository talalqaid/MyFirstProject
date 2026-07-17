<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold txt-lg">{{$job['title']}}</h2>
    <p>
        This job pays {{$job['salary']}} per year
    </p>

    <p>
        <a href="/jobs/{{$job->id}}/edit" class="mt-1">Edit</a>
    </p>

</x-layout>
