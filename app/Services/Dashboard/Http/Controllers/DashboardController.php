<?php
namespace App\Services\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\Dashboard;


class DashboardController extends Controller{

    protected $user;

    /**
     * __construct
     *
     * @param Dashboard $dashboard
     * @return void
     */
    public function __construct()
    {
    }
    public function index()
    {
        $user = request()->user();
        if($user->role_id == 2){
            if(!$user->student->profile_completed){
                return view('profile::completeProfile-step1')->with('profile', $user);
            }

        }
        $dashboard = new Dashboard($user);
        return view('dashboard::index')->withDashboard($dashboard);
    }


}