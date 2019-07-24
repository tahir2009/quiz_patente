<?php

namespace App\Http\Controllers\School;

use App\Country;
use App\License;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('School.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $licenses = License::where('admin_id', auth()->user()->id)->get();
        return view('School.student.create')->with(['countries' => $countries, 'licenses' => $licenses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'nullable|email|unique:students|max:191',
            'phone' => 'required|string|unique:students|max:191',
            'password' => 'required|confirmed|max:191',
            'country_id' => 'required'
        ]);

        $request['admin_id'] = auth()->user()->id;
        $request['password'] = bcrypt($request->password);
        $for_booking=input::has('for_booking') ? true : false;


        $student = Student::create($request->all());

        $alert = [];
        if ($student) {
            $alert['type'] = 'success';
            $alert['message'] = 'student added';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = 'student not added';
        }
        return redirect()->route('student.index')->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $licenses = auth()->user()->licenses;
        foreach ($licenses as $index => $license) {
            if ($license->student != '[]') {
                unset($licenses[$index]);
            }
        }

        return view('School.student.view')->with(['student' => $student, 'licenses' => $licenses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $countries = Country::all();
        return view('School.student.edit')->with(['student' => $student, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'country_id' => 'required'
        ]);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->country_id = $request->country_id;

        if (!empty($request->email) and $request->email != $student->email) {
            $request->validate([
                'email' => 'email|unique:students|max:191'
            ]);
            $student->email = $request->email;
        }
        if (!empty($request->phone) and $request->phone != $student->phone) {
            $request->validate([
                'phone' => 'required|string|unique:students|max:191',
            ]);
            $student->phone = $request->phone;
        }
        if (!empty($request->password)) {
            $request->validate([
                'password' => 'required|confirmed|string|max:191'
            ]);
            $request['password'] = bcrypt($request->password);
            $student->password = $request->password;
        }

        $student->save();

        $alert['type'] = 'success';
        $alert['message'] = 'student updated';
        return redirect()->route('student.index')->with('alert', $alert);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function assign_license(Request $request, Student $student)
    {
        $request->validate([
            'license_id' => 'required|integer'
        ]);

        $student->licenses()->attach($request->license_id);

        $alert['type'] = 'success';
        $alert['message'] = 'license assigned';
        return redirect()->back()->with('alert', $alert);

    }

    public function stats(Student $student)
    {
        return view('School.student.stats')->with('student', $student);
    }
}
