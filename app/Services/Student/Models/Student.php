<?php
namespace App\Services\Student\Models;

use App\User;

use App\Services\Levels\Traits\HasLevel;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasLevel;

    protected $fillable = [
        'user_id', 'level_id', 'section_id', 'type_id', 'year_id', 'profile_completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
