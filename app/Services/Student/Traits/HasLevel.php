<?php
namespace App\Services\Student\Traits;

use App\Services\Levels\models\Type;
use App\Services\Levels\models\Year;
use App\Services\Levels\models\Level;
use App\Services\Levels\models\Section;

trait HasLevel {

    /**
     * level
     *
     * @return void
     */
    public function level() {
        return $this->belongsTo(Level::class);
    }

    /**
     * year
     *
     * @return void
     */
    public function year() {
        return $this->belongsTo(Year::class);
    }

    /**
     * section
     *
     * @return void
     */
    public function section() {
        return $this->belongsTo(Section::class);
    }

    /**
     * type
     *
     * @return void
     */
    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function fullLevel()
    {
        if($this->level_id == 1){
            return $this->year->name . ' année Collège';
        }
        if($this->level_id == 2 && $this->year_id > 1){
            return $this->year->name . ' année ' . $this->section->name;
        }
        if($this->level_id == 3){
            return $this->type->name . ' ' . $this->year->name . ' ' . $this->section->name;
        }
    }
}