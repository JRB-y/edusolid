<?php
/**
 * User: JRB <jrb.youssef@gmail.com>
 * Date: 6/20/19
 * Time: 12:34 PM
 */

namespace App\Services\Tutor\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Tutor\Repositories\TutorRepository;

class GoOnline extends Controller
{

    /**
     * @var TutorRepository
     */
    protected $tutor;

    /**
     * GoOnline constructor.
     * Inject a TutorRepository into the Controller
     *
     * @param TutorRepository $tutorRepository
     */
    public function __construct(TutorRepository $tutorRepository)
    {
        $this->tutor = $tutorRepository;
    }

    /**
     * Get the Availability QR of the tutor
     * @return string
     */
    public function getAvailabilityQr()
    {
        return (string) request()->user()->tutor->availableQR;
    }

    /**
     *  Update Availability QR of the tutor
     */
    public function qrGoOnline()
    {
        $attributes = $this->getAttributes(request()->user()->tutor, 'qr');
        $this->tutor->qrGoOnline($attributes);

    }

    /**
     * Get the Availability Live of the tutor
     * @return string
     */
    public function getAvailabilitySl()
    {
        return (string) request()->user()->tutor->availableLive;
    }

    /**
     * Update Availability Sl the tutor
     */
    public function slGoOnline()
    {
        $attributes = $this->getAttributes(request()->user()->tutor, 'sl');
        $this->tutor->slGoOnline($attributes);
    }

    /**
     * Get the attributes
     * 'tutor_id' and 'available' depends on type.
     *
     * @param $tutor
     * @param $type
     *
     * @return array
     */
    private function getAttributes($tutor, $type)
    {
        $tutor_id = $tutor->id;
        if($type == "qr"){
            $available = $tutor->availableQR;
        } else {
            $available = $tutor->availableLive;
        }
        return ['tutor_id' => $tutor_id, 'available' => $available];
    }
}