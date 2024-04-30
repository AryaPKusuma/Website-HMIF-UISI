<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    public function store( Request $request )
    {
        $validatedData = $request->validate([
            'email' => 'nullable|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if (empty($validatedData['email'])) {
            $validatedData['email'] = 'anonimous';
        }

        Email::create($validatedData);

        return back();
    }
}
