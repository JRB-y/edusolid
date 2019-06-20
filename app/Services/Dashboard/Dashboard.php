<?php
namespace App\Services\Dashboard;

class Dashboard {

    /**
     * @var
     */
    protected $user;

    /**
     * @var
     */
    public $data;

    /**
     * Dashboard constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->data  = $this->getDataForUser($user);
    }

    /**
     * @param $user
     *
     * @return mixed
     */
    private function getDataForUser($user)
    {
        $function = $user->role->name . 'Data';
        return Dashboard::$function($user);
    }

    /**
     * @param $user
     *
     * @return array
     */
    protected static function studentData($user){
        return [
            'questions' => $user->student->questions
        ];
    }

    /**
     * @param $user
     *
     * @return array
     */
    private static function tutorData($user){
        return [
            //
        ];
    }

}