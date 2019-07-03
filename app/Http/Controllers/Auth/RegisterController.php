<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MailerLiteApi\MailerLite;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)  {  
        $rules = array(
            'name'     => 'required|min:3', 
            'email'    => 'required|email|unique:users', 
            'password' => 'required|min:6'
        );  
        
        $validation = $this->validator($request->all());
        
        if ($validation->fails())  {  
            
            return response()->json($validation->errors()->toArray());
        
        }else{
        
            $mailerliteClient = new MailerLite('99b6ae3965bdf000980c48313f71f88c');

            $groupsApi = $mailerliteClient->groups();
            $groups = $groupsApi->get(); // returns array of groups

            $groupId = 43056896;
            $singleGroup = $groupsApi->find($groupId); // returns single item object


            $subscriber = [
                'email' => $request->email,
                'fields' => [
                    'name' => $request->name,
                    //'last_name' => 'Doe',
                    //'company' => 'John Doe Co.'
                ]
            ];

            $response = $groupsApi->addSubscriber($groupId, $subscriber);

            $user = $this->create($request->all());
            Auth::login($user);

            return response()->json($user);

            //$url = route('/');

            //return response()->json($user);
            //return redirect('/');
        
        }
    }
}
