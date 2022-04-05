<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\DB;


class studentController extends Controller
{
    //

    public function show(Request $request)
    {
        $data =student::get();


        return view('show_data',['data' => $data,'req'=> $request->input('name')]);
        //return $request->input('date').$data[3];
    }
    public function insert()
    {
        DB::table('students')->insert([
            'name' => 'test',
            'marks' => 10,
            'subject' => 'maths',
            'class' => 'IMS'
        ]);
        /*      $student = new student();
        $student->name="testing";
        $student->marks=50;
        $student->subject="Maths";
        $student->class="IMS";
        $student->save(); */
    }
    public function save(Request $request)
    {

        $student = new student();
        $student->name = $request->input('name');
        $student->marks = $request->input('marks');
        $student->subject = $request->input('subject');
        $student->class = $request->input('class');
        $student->save();
        $data =student::get();
        return redirect('view/student');
    }
    public function add_student(Request $request)
    { 
        return view('studentForm');
    }
    public function edit_student(Request $request, $id)
    {   
        $data = student::find($id);
        return view('studentForm', ['data' => $data]);
    }
    public function update_student(Request $request,$id)
    {
        DB::table('students')->where('id',$id)->update([
            'name' => $request->input('name'),
            'marks' => $request->input('marks'),
            'subject' => $request->input('subject'),
            'class' => $request->input('class'),
        ]);
        return redirect('view/student');
    }
    public function delete_student($id)
    {
       // DB::table('students')->where('id',$id)->delete();
       student::find($id)->delete(); 
       
       return redirect('view/student');
    }
}
