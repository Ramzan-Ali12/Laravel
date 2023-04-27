<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Subject;

class StudentController extends Controller
{

    public function index(): View
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }
    
    
    public function create(Request $request)
{
    $subjects = Subject::all();
    $defaultSubjects = [1, 2];
    $selectedSubjects = $request->old('subjects', $defaultSubjects);
    return view('students.create', compact('subjects', 'selectedSubjects'));
}

    
    
    
    public function store(Request $request): RedirectResponse
{
    // define validation rules
    $rules = [
        'Name' => 'required|max:255',
        'Education' => 'required|max:255',
        'Designation' => 'required|max:255',
        'Department' => 'required|max:255',
        'subjects' => 'required|array|min:2', // add validation rule for subjects field
    ];

    // run validation
    $validatedData = $request->validate($rules);

    // create new Student instance with validated data
    $student = new Student();
    $student->fill($validatedData);
    $student->save();


    // attach the selected subjects to the student
    $subjects = $request->input('subjects');
    $student->subjects()->attach($subjects);


    return redirect('Student')->with('flash_message', 'Student Added!');
}

    


public function show(string $id): View
{
    $student = Student::find($id);
    $subjects = $student->subjects()->get(['Name']);
    return view('students.show', compact('student', 'subjects'));
}



    public function edit($id)
    {
        $student = Student::find($id);
        $subjects = Subject::all();
    
        // get the IDs of the currently selected subjects
        $selectedSubjects = $student->subjects->pluck('id')->toArray();
    
        return view('students.edit', compact('student', 'subjects', 'selectedSubjects'));
    }
    
    
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        
        // attach the selected subjects to the student
        $subjects = $request->input('subjects');
        $student->subjects()->sync($subjects);
        
        return redirect('Student')->with('flash_message', 'Student Updated!');
    }
    

    
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->subjects()->detach(); // delete the associated records in pivot table
        $student->delete(); // delete the student record
        session()->flash('flash_message', 'Student deleted!');
        return redirect('Student');  
    }
    

}