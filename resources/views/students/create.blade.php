@extends('students.layout')
@section('content')
 
<div class="card" style="margin-top: 10%;margin-left: 7%;">
  <div class="card-header" style="background-color:black;color:white">
    <h2 style="text-align:center;">Add New Details</h2>
  </div>
  <div class="card-body">
    <form action="{{ url('/Student') }}" method="post">
      {!! csrf_field() !!}
      <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="Name" id="Name" class="form-control">
      </div>
      <div class="form-group">
        <strong>Education</strong>
        <input type="text" name="Education" id="Education" class="form-control">
      </div>
      <div class="form-group">
        <strong>Designation</strong>
        <input type="text" name="Designation" id="Designation" class="form-control">
      </div>
      <div class="form-group">
        <strong>Department</strong>
        <input type="text" name="Department" id="Department" class="form-control">
      </div>
      <div class="form-group">
        <strong for="subjects">Subjects:</strong>
        @foreach($subjects as $subject)
          <div class="form-check">
            <input type="checkbox" name="subjects[]" id="subject-{{ $subject->id }}" value="{{ $subject->id }}" @if(in_array($subject->id, $selectedSubjects)) checked @endif class="form-check-input">
            <label for="subject-{{ $subject->id }}" class="form-check-label">{{ $subject->Name }}</label>
          </div>
        @endforeach
      </div>


      <div class="form-group text-center">
        <input type="submit" value="Submit" class="btn btn-outline-success mt-5">
        <a href="{{ url('/Student') }}" class="btn btn-outline-primary mt-5">Back to List</a>
        @if ($errors->any())
          <div class="alert alert-danger mt-3">
              Please enter all the details.
          </div>
        @endif
      </div>
    </form>
  </div>
</div>

@stop
