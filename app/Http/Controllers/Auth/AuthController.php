<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Repositorios\UserRepo;
use App\Managers\Users\user_registro;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $UserRepo;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(UserRepo $UserRepo)
    {
        $this->UserRepo   = $UserRepo;
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }



    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {

        $user    = $this->UserRepo->getEntidad();
        $manager = new user_registro($user,$request->all());

        //verifica si paso la validación o no
        if ($manager->isValid())
        {
         //me traigo la funcion del repositorio UserRepo y ya Hago el Login de ese Usuario   
         Auth::login($this->UserRepo->CreoUsuarioNuevo($request)); 

         return redirect()->route('home')
                          ->with('alert' , $user->name . ' Ve a tu Email: ' . $user->email .' y verifica tu cuenta');      
        }  

        
        return redirect()->back()->withErrors($manager->getErrors())->withInput($manager->getData());
    }
}
