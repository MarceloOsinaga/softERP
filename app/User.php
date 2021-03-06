<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Support\Facades\Request;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\UserController;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class User extends Authenticatable
{
    //use SoftDelete;
    use Notifiable,ShinobiTrait;
    //use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tema','tafuente','fuente'
    ];
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return ('App\User');
    }
    
    public function setActivities()
    {
        $description = "Usted ha visitado la url: ".Request::url()." en fecha y hora: ".Carbon::now();
        Activity::create(['description' => $description,
                            'date' => date('Y-m-d'),
                            'user_id' => Auth()->id(),
                            'client_id' => Auth()->user()->client_id??Auth()->id()
            ]);
    }
    public function registerBinnacle()
    {
        $user = $this::find(Auth::id());
        $date = date('d-m-Y H:i:s');
        $path = public_path().'/binnacle'.'/binnacle.txt';
        $myfile = fopen($path, "a");
        $txt = "Fecha: ".$date." || ID: ".Auth()->id()." || Nombre: ".$user->name." ".$user->email." || IP: ".Request::ip()." || Url: "
        .Request::fullUrl();
        fwrite($myfile, "\n". $txt);
        fclose($myfile);

    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
