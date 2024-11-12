<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'dob' => 'required|date',
            'adhar' => 'required|string|max:20',
            'father' => 'required|string|max:255',
            'mother' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255'
        ]);

        Admission::create($request->all());

        return back()->with('success', 'Application successfully submitted!');
    }
}
