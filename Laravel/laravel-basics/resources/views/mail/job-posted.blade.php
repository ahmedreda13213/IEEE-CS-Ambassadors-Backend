<h2>
  {{ $job->title }}

</h2>


<p>
    congrats! your job is now live in server
</p>

<p>
    <a href="{{ url('/jobs/' , $job->id) }}">View Your Job Listing</a>
</p>