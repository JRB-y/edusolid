<?php
namespace App\Services\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\Dashboard;

class DashboardController extends Controller{

    public function index()
    {
        $user = request()->user();
        $dashboard = new Dashboard($user);
        return view('dashboard::index', compact('dashboard', 'user'));
    }

}