@extends('students.layout')
@section('content')
 
<div class="card" style="margin: auto 3px; margin-top: 15%;">
  <div class="card-header">
    <div class="card-header" style="background-color: black; color: white;">
      <h2 style="text-align: center;">Details</h2>
    </div>
    <div class="card-body">
      <div class="card-text"><strong>Name:</strong> {{ $student->Name }}</div>
      <div class="card-text"><strong>Education:</strong> {{ $student->Education }}</div>
      <div class="card-text"><strong>Designation:</strong> {{ $student->Designation }}</div>
      <div class="card-text"><strong>Department:</strong> {{ $student->Department }}</div>
      <div class="card-text">
        <strong>Subjects:</strong>
        <ul>
          @foreach($subjects as $subject)
          <li>{{ $subject->Name }}</li>
          @endforeach
        </ul>
      </div>

      <div class="text-center">
        <a href="{{ url('/Student') }}" class="btn btn-outline-dark mt-3">Back to List</a>
      </div>
    </div>
  </div>
</div>

@stop
