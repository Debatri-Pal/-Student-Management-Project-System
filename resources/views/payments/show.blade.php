@section('content')
<div class="card">
<div class="card-header">Contactus Page</div>
<div class="card-body">
<div class="card-body">
<h5 class="card-title">Enrollment No : {{ $payments->enrollment->enroll_id }}</h5>
<p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
<p class="card-text">Amount : {{ $payments->amount }}</p>
</div>

</div>
</div>
</div>