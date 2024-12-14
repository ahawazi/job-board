<h2>
    {{ $job->title }}
</h2>
<p>
    your jobs is publish
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">view your job listing</a>
</p>
