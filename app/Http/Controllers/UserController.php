<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\UserLogin;

class UserController extends BaseController
{
    protected $usr_Email;
    protected $usr_Password;

    public function __construct(UserLogin $email, $password){
        $this->usr_Email = $email;
        $this->usr_Password = $password;
    }

    // Return view of login
    public function index()
    {
        $usr_Email = $this->usr_Email->getUser();
        $usr_Password = $this->usr_Password->getUser();

        $this->UserLogin = getUser($usr_Email,$usr_Password);
        return view('menu', ['usuario'=>$usuario]);
    }

    public function show($usr_Email,$usr_Password)
    {
        //Buscamos al usuario mediante el email y la contrasena
        $usuario = $this->UserLogin->getUser($usr_Email,$usr_Password);    
        echo $usuario;
        if($usuario === null || $usuario === ""){
            //showErrorMessage();
            return redirect()->view('login');            
        }             
        else{
            return view('menu', ['usuario' => $usuario]);
        }
    }
}
