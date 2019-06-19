<?php
namespace App\Services\Student\Models;

use App\Services\Question\Models\Question;
use App\User;

use App\Services\Levels\Traits\HasLevel;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Student
 * @package App\Services\Student\Models
 */
class Student extends Model
{
    use HasLevel;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'level_id', 'section_id', 'type_id', 'year_id', 'profile_completed'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
