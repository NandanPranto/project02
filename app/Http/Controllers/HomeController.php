<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class HomeController extends Controller
{
    public function about(){
    	$name='Nandan';
    	$email='nandan@gmail.com';
    	return view('about',['myname'=>$name,'myemail'=>$email]);

    }


    public function add(){

    	return view('add');
    }

    public function store(Request $request){
    	$myname = $request->name;
    	$myemail = $request->email;
    	$mydate_of_birth = $request->date_of_birth;
    	$mysalary = $request->salary;

    	//echo $name.','.$email.','.$date_of_birth.','.$salary;
    	$obj = new Employee();
    	$obj->name = $myname;
		$obj->email = $myemail;
		$obj->birth_date = $mydate_of_birth;
		$obj->salary = $mysalary;

		if($obj->save()){
			echo 'Successfully inserted';
		}

    }
    public function all(){
    	$data = Employee::all();

    	return view('list', ['employees'=>$data]);
    }
}


