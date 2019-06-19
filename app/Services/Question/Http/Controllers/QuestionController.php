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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->question = new QuestionRepository($question);
    }

    public function store(StoreQuestion $request)
    {
        $this->question->create([
            'title'     => $request->title,
            'body'      => $request->body,
            'student_id'   => Auth::user()->student->id
        ]);

        return response()->json([
            'type' => 'success',
            'msg' => 'Question Created with success'
        ]);
    }
}