 <h2>
     {{ $job->title }}
 </h2>

 <p>
     congrats your products is live on our website
 </p>
 <p>
     <a href=" {{ url('/job/' . $job->id) }}">Viiew Your Job</a>
 </p>
