<x-layout>
    <x-slot:heading>
    job
   </x-slot:heading>
     <div class="space-y-4">  
      
     @foreach ($jobs as $job )
       <div class="font-bold text-blue-500  text-sm ">{{ $job->employer->name }}</div>
      <a href="/jobs/{{ $job['id']}}" class=" block px-4 py-6 broder broder-gray-200 rounded-lg">
          <div>
          <strong>{{ $job['title'] }}:</strong>pays {{ $job['salary'] }} per year.
        </div>
     </a>       
    @endforeach 
  </div>
  <div>
    {{ $jobs->links() }}
  </div>
   
</x-layout>