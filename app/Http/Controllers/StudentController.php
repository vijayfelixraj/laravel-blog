<?php

namespace App\Http\Controllers;

use App\Models\Student;
//use Illuminate\Http\Request;
use App\Http\Resources\Student as StudentResources;

class StudentController extends Controller
{
    public function index() {
        return Student::all(); 
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $student = Student::create($request->all());
        return (new StudentResources($student))
            ->response()
            ->setStatusCode(201);
    }

    public function delete($id) {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->json(null, 204);
    }
}
