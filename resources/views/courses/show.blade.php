@section('content')
<div class="card">
<div class="card-header">Contactus Page</div>
<div class="card-body">
<div class="card-body">
<h5 class="card-title">Name : {{ $courses->name }}</h5>
<p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
<p class="card-text">Duration : {{ $courses->duration() }}</p>
</div>

</div>
</div>
</div>