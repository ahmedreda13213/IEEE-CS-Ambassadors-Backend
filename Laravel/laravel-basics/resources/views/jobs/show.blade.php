<x-layout>
   <x-slot:heading>
      job
   </x-slot:heading>

   <ul>
      <h2 class="font-bold text-lg">{{ $job->title }}</h2>
      <p>
         this job pays {{ $job->salary }} per year.
      </p>
      @can('edit',$job)
      <p class="mt-6">
         <x-buttom href="/jobs/{{ $job->id }}/edit">Edit Job</x-buttom>
      </p>
      @endcan
</x-layout>