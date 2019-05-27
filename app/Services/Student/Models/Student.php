<?php
namespace App\Services\Student\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
