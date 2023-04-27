@extends('students.layout')
@section('content')
    <div class="container" style="margin-top:8%;margin-left:12%">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card" >
                    <div class="card-header" style="background-color:black;color:white">
                        <h2 style="text-align:center;">CRUD Application in Laravel</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Student/create') }}" class="btn btn-outline-success btn-sm" title="Add New Student">
                           <strong> <i class="fa fa-plus" aria-hidden="true"></i> Add New</strong>
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Education</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>{{ $item->Education }}</td>
                                        <td>{{ $item->Designation }}</td>
                                        <td>{{ $item->Department }}</td>

 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-outline-info btn-sm"> <strong><i class="fa fa-eye" aria-hidden="true"></i> View </strong></button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-outline-primary btn-sm"> <strong><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </strong></button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"> <strong><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </strong></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
