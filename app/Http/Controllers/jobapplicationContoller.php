<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\City;
use App\Models\Country;
use App\Models\Education;
use App\Models\Language;
use App\Models\Option;
use App\Models\Preferred;
use App\Models\References;
use App\Models\Select;
use App\Models\State;
use App\Models\Technology;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class jobapplicationContoller extends Controller
{
    //

    public function insert_jobApp(Request $request)
    {
        $basic_request= $request->all();
        //return $basic_request;
      
        $basic=Basic::create($basic_request);
        $id=$basic->id; 
        

        foreach($request->edu as $edu)
        {
              $edu['basic_id'] =  $id;
             $education=Education::create($edu);
        }
        foreach($request->work as $work)
        {
              $work['basic_id'] =  $id;
             $works=Work::create($work);
        }
        foreach($request->lang as $lang)
        {
              $lang['basic_id'] =  $id;
            $langs=Language::create($lang);
        }
        foreach($request->tech as $tech)
        {
            $tech['basic_id'] =  $id;
            $techs=Technology::create($tech);
        }
        foreach($request->ref as $ref)
        {
            $ref['basic_id'] =  $id;
            
            $refs=References::create($ref);
        }
        foreach($request->location as $location)
        {
            $location_insert=$request->all();
            $location_insert['basic_id'] =  $id;
            $location_insert['option_id']=$location;
           // return $location_insert;
            $location_inserts=Preferred::create($location_insert);
        }

        return redirect('/add/job_app'); 

    }

    public function open_form()
    {
        $countries= Country::get();
        $course=Option::where('select_id',1)->get();
        $lang=Option::whereIn('select_id',[2,3,4])->get();
        $tech=Option::where('select_id',5)->get();
        $tech=Option::where('select_id',5)->get();
        $location=Option::where('select_id',6)->get();
        $dept=Option::where('select_id',10)->get();

        return view('job_app',['counties'=> $countries,'course'=> $course,'lang'=>$lang,'tech'=>$tech,'location'=>$location,'dept'=>$dept]);
    }

    public function find_state($id)
    {
        $states=State::where('country_id',$id)->get();
        return json_decode($states);
        
    }

    public function find_city($id)
    {
        $city=City::where('state_id',$id)->get();
        return json_decode($city);
    }
    public function show_grid()
    {
        $basic=Basic::all();
        return view('grid_job_app',['basic'=>$basic]);
    }

    public function delete_employee_details($id)
    {


    }

    public function relationship()
    {
        $relation=Basic::find(82)->education;
        return $relation;
    }
}
