<?php
namespace App\Services\Profile\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * $profile
     *
     * @var undefined
     */
    public $profile;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->profile = request()->user();
        return view('profile::index')->with('user', $this->profile);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::find(request()->user()->id);
        return view('profile::' . $user->role->name . '.show', compact('user'));
    }



}
