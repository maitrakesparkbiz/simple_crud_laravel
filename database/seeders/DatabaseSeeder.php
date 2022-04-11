<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use App\Models\student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('id' => 1, 'country_name' => 'India'),
            array('id' => 2, 'country_name' => 'China'),
            array('id' => 3, 'country_name' => 'Russia'),
        );
        $states=array(
            array('id'=>1,'country_id'=> 1,'state_name'=>'Gujarat'),
            array('id'=>2,'country_id'=> 2,'state_name'=>'Zhejiang'),
            array('id'=>3,'country_id'=> 3,'state_name'=>'Altai'),
        );
        $cities=array(
            array('id'=>1,'state_id'=> 1,'city_name'=>'Ahmadabad'),
            array('id'=>2,'state_id'=> 2,'city_name'=>'Beijing'),
            array('id'=>3,'state_id'=> 3,'city_name'=>'Moscow'),


        );
           $country = Country::insert(
            $countries
        ); 
        $state = State::insert(
            $states
        );
        $city = City::insert(
            $cities
        );    

        
    }
}
