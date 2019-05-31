<?php
/**
 * Created by PhpStorm.
 * User: jrb
 * Date: 5/31/19
 * Time: 1:13 PM
 */

namespace App\Services\Profile;


class Profile
{
    public $completeProfilePath;

    public function __construct($profile)
    {
        $this->completeProfilePath = 'profile::'.$profile->role->name.'.completeProfile';
    }
}