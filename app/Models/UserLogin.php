<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model{
    use HasFactory;

    protected $table = "users";

    // id	nombre	apellidos	direccion	email	email_verified_at	password	remember_token	created_at	updated_at	
    protected $fillable = ['nombre','apellidos','direccion','email','password'];
    protected $hidden = ['id'];

    // obtener email y password desde bd
    public function getUser($email,$password){
        return UserLogin::find($email,$password);
    }
}
?>