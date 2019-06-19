<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 6/1/19
 * Time: 6:36 PM
 */

namespace App\Services\Question\Models;

use App\Services\Levels\Traits\HasLevel;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasLevel;

    protected $fillable = ['title', 'body', 'student_id', 'level_id', 'year_id', 'section_id', 'type_id'];

}