<?php

namespace App;


use App\Services\Tutor\Models\Tutor;
use Illuminate\Notifications\Notifiable;
use App\Services\Student\Models\Student;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use \HighIdeas\UsersOnline\Traits\UsersOnlineTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'prenom', 'role_id', 'email', 'profile_completed', 'password'
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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne(Student::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tutor(){
        return $this->hasOne(Tutor::class);
    }

    public function myRole(){
        if($this->role_id == 2){
            return $this->student;
        }
        if($this->role_id == 3) {
            return $this->tutor;
        }
    }
}
