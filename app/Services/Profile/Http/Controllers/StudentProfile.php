<?php
namespace App\Services\Profile\Http\Controllers;

use Illuminate\Http\Request;

class StudentProfile {
    
    public function completeLevel(Request $request)
    {

        $student = request()->user()->student;

        $level = $request->level;
        $section = $request->section;
        $year = $request->annee;

        $student->level_id = $level;
        $student->year_id = $year;
        $student->section_id = $section;
        
        $student->profile_completed = 1;
        $student->save();

        return response()->json([
            'student' => $student,
            'success' => ' votre niveau de scolarité est enregistré avec success !'
        ], 201); // Status code here
        
    }
}