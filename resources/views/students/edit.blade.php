@extends('students.layout')
@section('content')

<div class="card" style="margin-top: 10%; margin-left: 7%; margin-right: 7%;">
    <div class="card-header" style="background-color:black;color:white">
        <h2 style="text-align:center;">Edit Student Details</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('student/'.$student->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <strong for="Name">Name</strong>
                <input type="text" class="form-control" id="Name" name="Name" value="{{ $student->Name }}" required>
            </div>
            <div class="form-group">
                <strong for="Education">Education</strong>
                <input type="text" class="form-control" id="Education" name="Education" value="{{ $student->Education }}" required>
            </div>
            <div class="form-group">
                <strong for="Designation">Designation</strong>
                <input type="text" class="form-control" id="Designation" name="Designation" value="{{ $student->Designation }}" required>
            </div>
            <div class="form-group">
                <strong for="Department">Department</strong>
                <input type="text" class="form-control" id="Department" name="Department" value="{{ $student->Department }}" required>
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


            <div class="text-center">
            <button type="submit" class="btn btn-outline-info mt-4">Update</button>
            <a href="{{ url('/Student') }}" class="btn btn-outline-warning mt-4">Cancel</a>
            </div>
        </form>
    </div>
</div>

@stop
