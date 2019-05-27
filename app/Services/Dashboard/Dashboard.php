<?php
namespace App\Services\Dashboard;

use App\User;

class Dashboard {

    public $user;
    public $path;

    public function __construct($user)
    {
        $this->user = $user;
        $this->path = \strtolower($this->user->role->name);
    }

}