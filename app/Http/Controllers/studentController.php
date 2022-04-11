<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Basic;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;



class studentController extends Controller
{
    //

    public function show(Request $request)
    {
        $number=2;
        $data = student::get();
        $page = student::paginate($number);
        
        $auth=0;
        $data = Auth::user();
        if($data!=null)
        {
            
              
            $user=User::find($data->id);

            if ( $user->roles[0]->role==1) {
        
                $auth++;
            }
        }
        Log::info($page);

        return view('show_data', ['data' => $page,'number'=> $number,'auth'=> $auth]);
        // return $request->input('date').$data[3];
    }

    public function save(Request $request)
    {
        $request->session()->put('key', 'value');
        $student = new student();
        $student->name = $request->input('name');
        $student->marks = $request->input('marks');
        $student->subject = $request->input('subject');
        $student->class = $request->input('class');
        $student->save();

        return redirect('/view/student');
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
    public function update_student(Request $request, $id)
    {
        $student = new student();
        $student = student::find($id);

        $student->name = $request->input('name');
        $student->marks = $request->input('marks');
        $student->subject = $request->input('subject');
        $student->class = $request->input('class');
        $student->save();

/*         DB::table('students')->where('id', $id)->update([
            'name' => $request->input('name'),
            'marks' => $request->input('marks'),
            'subject' => $request->input('subject'),
            'class' => $request->input('class'),
        ]); */
        return redirect('view/student');
    }
    public function delete_student($id)
    {
        echo $id;
        student::find($id)->delete();

        return redirect('view/student');
    }
    public function check(Request $request)
    {
/*         return Basic::wherehas('education',function(Builder $query){
            $query->where('option_id','2');
        })->get(); */


   /*      return Basic::whereDoesntHave('preferred',function(Builder $query){
            $query->wherein('option_id',[21]);
        })->get(); */
/*         $basic= Basic::withCount('education')->get();

        foreach($basic as $data)
        {
            echo $data->education_count;
        } */
       //return $request->session()->get('i');

       echo Hash::make('my-secret-password').'<br>';
       return $password = bcrypt('my-secret-password');
          
        
    }
}
