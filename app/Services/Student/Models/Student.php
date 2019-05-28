<?php
namespace App\Services\Student\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Services\Student\Traits\HasLevel;

class Student extends Model
{
    use HasLevel;
    
    protected $fillable = [
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
