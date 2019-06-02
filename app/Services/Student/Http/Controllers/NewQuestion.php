<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 6/1/19
 * Time: 10:04 PM
 */

namespace App\Services\Student\Http\Controllers;

use App\Http\Controllers\Controller;

class NewQuestion extends Controller
{
    public function getFormNewQuestion()
    {
        $user = request()->user();
        return view('student::question.new-question', compact('user'));
    }
}