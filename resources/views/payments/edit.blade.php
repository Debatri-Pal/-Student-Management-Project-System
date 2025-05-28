@extends('layout')
@section('content')
<div class="card">
<div class="card-header">Payments Page</div>
<div class="card-body">
<form action="{{ url('payments/' .$payments->id) }}" method="post">
{!! csrf_field() !!}
@method("PATCH")
<label>Enrollment ID</label></br>
<input type="hidden" enrollment_id="id" id="id" value="{{$payments->enrollment->enroll_id}}" id="id" />


<label>Paid Date</label></br>
<input type="text" name="course_id" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>
<label>Amount</label></br>
<input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
<input type="submit" value="Update" class="btn btn-success"></br>
</form>
</div>
</div>
@stop