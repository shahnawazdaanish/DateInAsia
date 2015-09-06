<?php
	namespace App\Http\Controllers;
	use App;
	use Auth;
	use Session;
	use URL;
	use Redirect;
	use Request;
	use Route;
	use DB;
	use Datatables;
	use Event;
	use Input;
	use Validator;
	use Hash;
	use Flash;
	use App\Models\DiaUsers as User;
	use App\Models\DiaFavorites as Fav;
	use App\Models\DiaInterested as Inter;
	use App\Models\DiaVisits as Visit;

class UserController extends Controller {

	public function signin(){
		if (Auth::check())
		{
		    // The user is logged in...
        	Session::flash('flash_message', 'Logged In');
		}
		return view("signin");
	}

	public function signup(){

		// if (Auth::check()) {
		// }
		// else {
		// 	return Redirect::to('/');
		// }
		return view("signup");
	}

	public function checkUsername() {
        $uCount = User::where('username', '=', Input::get('username'))->count();
        if ($uCount == 0) {
            return 'true';
        } else {
            return 'false';
        }
    }
    public function checkEmail() {
        $eCount = User::where('email', '=', Input::get('email'))->count();
        if ($eCount == 0) {
            return 'true';
        } else {
            return 'false';
        }
    }



	public function saveuser()
	{

		$rules = array(
            'username' => 'required|unique:dia_users|max:25',
            'password' => 'required',
            'email' => 'required|unique:dia_users|email',
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

		$username = Input::get('username');
		$password = Hash::make(Input::get('password'));
		$email = Input::get('email');
		$b_day = Input::get('b_day');
		$b_month = Input::get('b_month');
		$b_year = Input::get('b_year');
		$country = Input::get('country');
		$city = Input::get('city');
		$province = Input::get('province');
		$gender = Input::get('gender');
		$looking_for = Input::get('looking_for');
		$repeat_email = Input::get('repeat_email');

		$dob = $b_year."-".$b_month."-".$b_day;
		$confirmation_code = str_random(30);

		$s = new User;
		$s->username = $username;
		$s->password = $password;
		$s->email = $email;
		$s->date_of_birth = $dob;
		$s->country = $country;
		$s->city = $city;
		$s->province = $province;
		$s->gender = $gender;
		$s->looking_for = $looking_for;
		$s->confirmation_code = $confirmation_code;
		$s->isConfirm = 0;
		$s->save();

		if($s)
		{
			// Mail::send('email.verify', $confirmation_code, function($message) {
			//           $message->to(Input::get('email'), Input::get('username'))
			//               ->subject('Verify your email address');
			//       });
        	Session::flash('flash_message', 'Thanks for signing up! Please check your email.');
        	return view('confirmation')->with('email', $email)->with('username',$username);

		}
		else
		{
			return "failed to save";
		}
	}

	public function confirm($code){
		if( ! $code)
        {
	        Session::flash('flash_message', 'Code Invalid');
	       	return Redirect::to('/');
        }

        $user = User::whereConfirmationCode($code)->first();

        if ( ! $user)
        {
	        Session::flash('flash_message', 'User not available');
	       	return Redirect::to('/');
        }
        $user->isConfirm = 1;
        $user->isActive = 0;
        $user->isComplete = 0;
        $user->confirmation_code = null;
        $user->save();

        $uid = $user->id;

        Session::flash('flash_message', 'You have successfully verified your account.');
       	return view('completeprofile')->with('id',$uid);
	}

	public function dologin(){

		$rules = array(
		    'username'    => 'required',
		    'password' => 'required'
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			Session::flash('flash_message', 'Password Error');
		    return Redirect::to('/')
		        ->withInput(Input::except('password'));
		} 
		else
		{
	        $username=Input::get('username');
	        $password=Input::get('password');
		    if (Auth::attempt(array('username' => $username, 'password' => $password, 'isActive' => 1, 'isConfirm'=>1))) {
		        echo 'SUCCESS!';
		    }
		    else
		    {        
		        Session::flash('flash_message', 'Erro to login');
		        return Redirect::to('/');
		    }
		}
	}

	public function storefirstdetails(){

		$id = Input::get('profile_id');
		$store_data = array(
			'profile_headline' => Input::get('profile_headline'),
			'profile_description' => Input::get('profile_description'),
			'profile_appearance' => Input::get('profile_appearance'),
			'profile_bodytype' => Input::get('profile_bodytype'),
			'profile_height'	=> Input::get('profile_height'),
			'profile_weight'	=> Input::get('profile_weight'),
			'profile_eyecol' => Input::get('profile_eyecol'),
			'profile_haircol' => Input::get('profile_haircol'),
			'profile_education' => Input::get('profile_education'),
			'profile_race' => Input::get('profile_race'),
			'profiel_religion' => Input::get('profiel_religion'),
			'profile_rltnstatus' => Input::get('profile_rltnstatus'),
			'profile_havechild' => Input::get('profile_havechild'),
			'profile_wantchild' => Input::get('profile_wantchild'),
			'profile_smoking' => Input::get('profile_smoking'),
			'profile_drinker' => Input::get('profile_drinker'),
			'profile_wantchangeloc' => Input::get('profile_wantchangeloc'),
			'profile_meetgender'	=> Input::get('profile_meetgender'),
			'profile_meetagefrom' => Input::get('profile_meetagefrom'),
			'profile_meetfordate' => Input::get('profile_meetfordate'),
			'profile_meetforfrnd' => Input::get('profile_meetforfrnd'),
			'profile_meetforserious'	=> Input::get('profile_meetforserious'),
			'profile_meetfornet' => Input::get('profile_meetfornet'),
			'profile_meetforother' => Input::get('profile_meetforother'),
			'profile_detailsaboutmeet' => Input::get('profile_detailsaboutmeet')
		);		

		$store = User::whereId($id)->update($store_data);
		if($store){
			return "Success";
		}

	}



	public function profiles(){
		$users = User::select('id', 'username')->get();

		return view('user.profiles',compact('users'));
	}
	public function loggedin(){

		return view('user.profiles');
	}

	public function add_fav(){
		$u_id = Input::get('user_id');
		$fav_id = Input::get('fav_id');

		if($u_id == $fav_id){
			return "You cannot add yourself as fav";
		}

		$chkFav = Fav::whereUser_id($u_id)->whereFavorite_id($fav_id)->count();

		if($chkFav == 0){
			$s = new Fav;
			$s->user_id = $u_id;
			$s->favorite_id = $fav_id;
			$s->status = 1;
			$s->save();
			return "Done";
		}
	}

	public function add_interest(){

		$u_id = Input::get('user_id');
		$int_id = Input::get('int_id');

		if($u_id == $int_id){
			return "You cannot add yourself as interest";
		}

		$chkFav = Inter::whereUser_id($u_id)->whereInterested_id($int_id)->count();

		if($chkFav == 0){
			$s = new Inter;
			$s->user_id = $u_id;
			$s->interested_id = $int_id;
			$s->status = 1;
			$s->save();
			return "Done";
		}
		return "Error";
	}

	public function messages(){
		return view('user.messages');
	}

	public function logout(){
   		Auth::logout();
    	return Redirect::to('/'); 
	}









}
