<?php
namespace App\Services\Dashboard;

class Dashboard {

    /**
     * @var
     */
    public $user;

    /**
     * @var string
     */
    public $path;

    /**
     * @var
     */
    public $role;

    /**
     * Dashboard constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->path = \strtolower($this->user->role->name);
        $this->role =  $this->user->role->name;
    }
}