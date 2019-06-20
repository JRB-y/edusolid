<?php
/**
 * User: JRB <jrb.youssef@gmail.com>
 * Date: 6/20/19
 * Time: 1:30 PM
 */

namespace App\Services\Tutor\Repositories;

use App\Services\Tutor\Models\Tutor;

class TutorRepository extends Tutor
{
    protected $tutor;

    /**
     * TutorRepository constructor.
     *  Inject a Tutor Model into the Repository
     * @param Tutor $tutor
     */
    public function __construct(Tutor $tutor)
    {
        $this->tutor = $tutor;
    }

    /**
     * QR go online
     * @param $attributes
     */
    public function qrGoOnline($attributes)
    {
        $tutor = $this->tutor->where('id', $attributes['tutor_id']);
        if($attributes['available'] === 1) {
            $tutor->update(['availableQR' => 0]);
        }
        else{
            $tutor->update(['availableQR' => 1]);
        }
    }

    /**
     * SL go online
     * @param $attributes
     */
    public function slGoOnline($attributes)
    {
        $tutor = $this->tutor->where('id', $attributes['tutor_id']);
        if($attributes['available'] === 1) {
            $tutor->update(['availableLive' => 0]);
        }
        else{
            $tutor->update(['availableLive' => 1]);
        }

    }

}
