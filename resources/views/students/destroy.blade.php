@extends('students.layout')
@section('content')
 
<div class="card" style="margin-top: 10%; margin-left: 7%; margin-right: 7%;">
    <div class="card-header">
        <h2>Delete Details</h2>
    </div>
    <div class="card-body">
    <form action="{{ url('student/', $student->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <p>Are you sure you want to delete this student?</p>
            <h4>{{ $student->Name }}</h4>
            <input type="submit" value="Yes" class="btn btn-outline-danger">
            <a href="{{ url('/Student') }}" class="btn btn-outline-secondary">No</a>
        </form>
    </div>
</div>

@stop
