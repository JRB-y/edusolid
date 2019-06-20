<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 6/1/19
 * Time: 11:46 PM
 */

namespace App\Services\Question\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Services\Question\Http\Requests\StoreQuestion;
use App\Services\Question\Models\Question;
use App\Services\Question\Repositories\QuestionRepository;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->question = new QuestionRepository($question);
    }

    public function askQuestion(StoreQuestion $request)
    {

        // create the question with status 'untreated'

        // get all the Tutors 'online' who fits the level and year of the question == student

        // shuffle the tutors

        // send the question to the first tutor
            // we need to save the question_id - tutor_id and status in 'q-life_cycle' table

        $attributes = [
            'title' => $request->title,
            'body' => $request->body,
            'student_id' => Auth::user()->student->id
        ];

        $this->question->create($attributes);

        return response()->json([
            'type' => 'success',
            'msg' => 'Question Created with success'
        ]);
    }
}