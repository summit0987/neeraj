<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Session;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function get_user($res){
      $user = DB::table('users')->where('email',$res->email)->first();
      if(!empty($user)){
        if($res->password == $user->password){
          $arry = array(
            'id' => $user->id,
            'email'=>$user->email,
            'role' => '1',
            'role_id' => '1',
            'logged_in' => '1'
          );
          Session::put('userdata',$arry);

          return array('status'=>'true','msg'=>'User validate');
        }
        else{
          return array('status'=>'false','msg'=>'Incorrect password');
        }
      }
      else{
        return array('status'=>'false','msg'=>'Email does not exits');
      }
    }
}
