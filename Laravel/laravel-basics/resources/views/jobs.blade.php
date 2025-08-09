<x-layout>
    <x-slot:heading>
    job
   </x-slot:heading>
 
 @foreach ($jobs as $job )
    <li>
      <a href="/jobs/{{ $job['id']}}" class="text-blue-500 hover:underline">
            <strong>{{ $job['title'] }}:</strong>pays {{ $job['salary'] }} per year.


     </a>       

    </li>
    
    @endforeach
</x-layout>