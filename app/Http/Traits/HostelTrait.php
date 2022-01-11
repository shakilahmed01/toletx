<?php

namespace App\Http\Traits;
use App\Models\Student;

trait HostelTrait {
    public function resource() {
        // Fetch all the students from the 'student' table.
        $hostel = Hostel::all();
        return view('Dashboard.hostel.list_hostel')->with(compact('hostel'));
    }
}
