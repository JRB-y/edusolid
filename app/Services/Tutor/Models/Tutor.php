<?php
namespace App\Services\Tutor\Models;

use App\Services\Levels\Traits\HasLevel;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Tutor extends User
{
    use HasLevel;

    protected $fillable = ['user_id', 'level_id', 'section_id', 'type_id', 'year_id', 'profile_completed', 'availableQR', 'availableLive'];
}
