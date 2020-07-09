<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use App\Person;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;
use DateTime;
use Session;
use Auth;
use File;


use App\Http\Controllers\Controller;

class agro_farmcontroller extends Controller
{

    public function welcomePage(){
    	return view('welcome');
    }
	public function homePage(){
    	return view('index');
    }
	public function aboutPage(){
    	return view('about');
    }
	public function contactPage(){
    	return view('contact')  ;
    }
	public function dashboardPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('dashboard');
        }
    }
	public function accounting_detailsPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('accounting_details');
        }
    }
	public function cow_infoPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('cow_info');
        }
    }
	public function cow_listPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('cow_list');
        }
    }
	public function add_cowPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('add_cow');
        }
    }
	public function view_cow_infoPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('view_cow_info');
        }
    }
	public function update_cowPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('update_cow');
        }
    }
	public function edit_profilePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('edit_profile');
        }
    }
	public function user_settingPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('user_setting');
        }
    }
	public function add_userPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('add_user');
        }
    }
	public function remove_userPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('remove_user');
        }
    }
	public function user_listPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('user_list');
        }
    }
	public function view_profilePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('view_profile');
        }
    }
	public function add_expenditurePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('add_expenditure');
        }
    }
	public function monthly_expenditurePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('monthly_expenditure');
        }
    }
	public function show_expenditurePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('show_expenditure');
        }
    }
	public function d_view_expenditurePage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('d_view_expenditure');
        }
    }
    public function change_passwordPage(){
        
        if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('change_password');
        }
    }
    public function admin_panelPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('admin_panel');
        }
    }
	public function add_adminPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('add_admin');
        }
    }
	public function remove_adminPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('remove_admin');
        }
    }
	public function admin_listPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('admin_list');
        }
    }
	public function view_user_detailsPage(){
		
		if(!isset($_SESSION['id'])){
            return Redirect::to('/home');
        }
        else{
            return view('view_user_details');
        }
    }

	
	//logout================================================
    public function logout(Request $request){
        if (isset($_SESSION["id"])) {
            session_destroy();
            return redirect('/home');
        }
        elseif(!isset($_SESSION["id"])){
        	Session::put('massage','***Login First***');
            return Redirect::to('/home');
        }
    }

	
	// login======================================================
		public function login(Request $request){
			$email=$request->email;
			$password=$request->password;

			$result= DB::table('user')
						->where('email',$email)
						->where('password',$password)
						->first();

			if ($result) {
				$type=$result->user_type;
				if ($type=="Admin and Shareholder") {
					$_SESSION["id"] = $result->user_id;
					return Redirect::to('/dashboard');
				} 
			}
			else{
				Session::put('massage','***Invalid email or password***');
				return Redirect::to('/home');
			}
		}
		
	// adding_user=================================================
    public function adding_user(Request $request){
    	$email=$request->email;
		$mobile=$request->mobile_no;
        $result= DB::table('user')
                    ->where('email',$email)
					->where('mobile_no',$mobile)
                    ->first();
        if (is_object($result)){
            Session::put('massage','***Email address or Mobile number should be unique...!!*** ');
            return Redirect::to('/add_user');
        }
		 else{
			 
			 $image = $request->file('image');
			 if(!is_null($image))
			 {
				$imageName = $image->getClientOriginalName();
				$image->move(public_path('/user_image/'), $imageName);
			 }
			 else{
				$imageName = 'null';
			 } 
            $data= array();
            $data['user_name']= $request->uname;
            $data['user_type']= "Shareholder";
			$data['address']=$request->address;
			$data['email']= $request->email;
			$data['mobile_no']=$request->mobile_no;
            $data['password']= $request->password;
			$data['professoin']=$request->Profession;
            $data['share']= $request->share;
			$data['image']=$imageName;
            DB::table('user')->insert($data);
			Session::put('massage','Added user successfully ');
			return Redirect::to('/add_user');
        }
	}
	
	// remove_user=================================================
	public function delete_user(Request $request){
        $user_id=$request->user;
        DB::table('user')
                    ->where('user_id',$user_id)
                    ->delete();

        Session::put('massage','User is removed succecsfully');
        return Redirect::to('/remove_user');
	}
	
	// daily_expenditure=================================================
    public function daily_expenditure(Request $request){
    	$date=Date("Y-m-d");
        $result= DB::table('expenditure')
                    ->where('date',$date)
					->where('rent','=','0')
                    ->first();
        if (is_object($result)){
            Session::put('massage','***This expenditure record is already exist...!!*** ');
            return Redirect::to('/add_expenditure');
        }
		 else{
            $data= array();
            $data['rent']= '0';
            $data['employee_salary']= '0';
			$data['travelling_cost']=$request->travelling_cost;
			$data['other']= $request->other;
			$data['food']=$request->cow_food;
            $data['date']= $date;
			$data['user_id']= $_SESSION['id'];
            DB::table('expenditure')->insert($data);
			$data1=DB::table('expenditure')	   
    			 ->select(DB::raw('sum(travelling_cost) as travel_t'), DB::raw('sum(other) as other_t'), DB::raw('sum(food) as food_t'),DB::raw('sum(travelling_cost + other + food) as total_t'))
    			 ->where('date',$date) 
				 ->first();
			$total=$data1->total_t;
			$cow = DB::table('cow_info')
				->select(DB::raw('count(*) as cow_count'))
				->where('status','available')
				->first();
			$cow_num=$cow->cow_count;
			if($cow_num!='0')
			{
				$cost=$total/$cow_num;
				$result = DB::table('cow_info')
					->where('status', 'available')
					->increment('cost', $cost);
				
				Session::put('massage','Added daily expenditure successfully ');
				return Redirect::to('/add_expenditure');
			}
			else
			{
				Session::put('massage','Added daily expenditure successfully ');
				return Redirect::to('/add_expenditure');
			}
        }
	}
	
	// monthly_expenditure=================================================
    public function addmonthly_expenditure(Request $request){
    	$date=$request->mdate;
		$monthyear	= date('m-y', strtotime($date));

        $result= DB::table('expenditure')
					->where(DB::raw("(DATE_FORMAT(date,'%m-%y'))"),$monthyear)
					->where('rent','>','0')
                    ->first();
        if (is_object($result)){
            Session::put('massage','***This monthly expenditure record is already exist...!!*** ');
            return Redirect::to('/monthly_expenditure');
        }
		 else{
            $data= array();
            $data['rent']= $request->rent;
            $data['employee_salary']= $request->employee_salary;
			$data['travelling_cost']='0';
			$data['other']= '0';
			$data['food']='0';
            $data['date']= $date;
			$data['user_id']= $_SESSION['id'];
            DB::table('expenditure')->insert($data);
			$data1=DB::table('expenditure')	   
    			 ->select(DB::raw('sum(rent) as rent_t'), DB::raw('sum(employee_salary) as employee_salary_t'), DB::raw('sum(rent + employee_salary) as total_t'))
    			 ->where('date',$date) 
				 ->first();
			$total=$data1->total_t;
			$cow = DB::table('cow_info')
				->select(DB::raw('count(*) as cow_count'))
				->where('status','available')
				->first();
			$cow_num=$cow->cow_count;
			if($cow_num!='0')
			{
					$cost=$total/$cow_num;
					$result = DB::table('cow_info')
						->where('status', 'available')
						->increment('cost', $cost);
					Session::put('massage','Added monthly expenditure successfully ');
					return Redirect::to('/monthly_expenditure');
			}	
			else
			{
				Session::put('massage','Added monthly expenditure successfully ');
				return Redirect::to('/monthly_expenditure');
			}
        }
	}
	
	// adding_cow=================================================
    public function adding_cow(Request $request){
    	$id=$request->id;
        $result= DB::table('cow_info')
                    ->where('cow_id',$id)
                    ->first();
        if (is_object($result)){
            Session::put('massage','***The cow-id is already registered...!!*** ');
            return Redirect::to('/add_cow');
        }
		 else{
			 $image = $request->file('image');
			 if(!is_null($image))
			 {
				$imageName = $image->getClientOriginalName();
				$image->move(public_path('/cow_image/'), $imageName);
			 }
			 else{
				$imageName = 'null';
			 }

            $data= array();
            $data['cow_id']= $request->id;
            $data['cow_type']= $request->cow_type;
			$data['cow_color']=$request->cow_color;
			$data['buying_price']= $request->buying_price;
			$data['buying_date']=$request->buying_date;
			$data['selling_date']='null';
			$data['cost']='0';
            $data['status']='available';
			$data['buying_place']=$request->buying_place;
			$data['selling_price']='null';
			$data['cow_image']=$imageName;
			$data['description']='null';
            DB::table('cow_info')->insert($data);
			Session::put('massage','Added Cow succecsfully ');
			return Redirect::to('/add_cow');
        }
	}
	
	// edit user profile info===============================================
    public function edit_profile_info(Request $request){
		
		
        $id = $_SESSION["id"];
		$photo=DB::table('user')
					->where('user_id',$id)
                    ->first();
		$photo_t=$photo->image;
        $data= array();
        $data['user_name']= $request->name;
        $data['address']=$request->address;
        $data['email']= $request->email;
        $data['mobile_no']=$request->mobile_no;
		$image = $request->file('image');
        if(!is_null($image))
        {
			$photo_file = public_path('/user_image/'). $photo_t;
			//dd($photo_file);
			if(File::exists($photo_file)) {
				File::delete($photo_file);
			}
				
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/user_image/'), $imageName);
			$data['image']=$imageName;
        }
        else{
            $data['image']=$photo_t;
        }
        DB::table('user')->where('user_id',$id)
                        ->update($data);
        Session::put('massage','Profile Info Update successfully ');
        return Redirect::to('/view_profile');
    }
		
	// edit cow info===============================================
    public function edit_cow_info(Request $request){
        $id = $request->id;
        $data= array();
        $data['cow_type']= $request->type;
        $data['selling_date']=$request->selling_date;
        $data['selling_price']= $request->selling_price;
		$data['status']='unavailable';
        // print_r($data);die;
        DB::table('cow_info')->where('c_id',$id)
                        ->update($data);
        Session::put('massage','Cow Info Update successfully ');
        return Redirect::to('/view_cow_info?cow_id='.$id);
    }

    //change password===================================================
    public function change_password_admin(Request $request){
        $id = $_SESSION["id"];
        $this->validate($request, [
            'current_password'     => 'required',
            'new_password'     => 'required|min:3',
            'confirm_password' => 'required|same:new_password',
        ]);

        $data = $request->all();
        $result= DB::table('user')
                    ->where('user_id',$id)
                    ->first();
        if($data['current_password'] != $result->password){
            Session::put('massage','1');
            return back();

        }else{
            $upload_data= array();
            $upload_data['password']=$data['new_password'];
            DB::table('user')
                 ->where('user_id',$id)
                 ->update($upload_data);
            Session::put('massage','2');
            return Redirect::to('/change_password');

        }
    }
	// add_admin=================================================
	public function adding_admin(Request $request){
        $user_id=$request->user;
		$upload_data= array();
        $upload_data['user_type']="Admin and Shareholder";
        DB::table('user')
                    ->where('user_id',$user_id)
                    ->update($upload_data);

        Session::put('massage','Admin is added succecsfully');
        return Redirect::to('/add_admin');
	}
	// remove_admin=================================================
	public function removed_admin(Request $request){
        $user_id=$request->user;
		$upload_data= array();
        $upload_data['user_type']="Shareholder";
        DB::table('user')
                    ->where('user_id',$user_id)
                    ->update($upload_data);

        Session::put('massage','Admin removed succecsfully');
        return Redirect::to('/remove_admin');
	}
	// add_cow_for_sell=================================================
	public function add_for_sell(Request $request){
		$id = $request->cow_id;
        $data= array();
		$data['status']="sell";
		DB::table('cow_info')
		               ->where('c_id',$id)
                        ->update($data);
	    return Redirect::to('/cow_info');
	
	}
	// remove_sell=================================================
	public function remove_sell($id){
		//$id = $request->cow_id;
		//dd($id);
        $data= array();
		$data['status']="available";
		DB::table('cow_info')
		               ->where('c_id',$id)
                        ->update($data);
	    return Redirect::to('/cow_info');
	
	}

}	

