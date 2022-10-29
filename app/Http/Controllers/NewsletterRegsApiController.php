<?php

namespace App\Http\Controllers;

use App\Models\NewsletterReg;
use Illuminate\Http\Request;

class NewsletterRegsApiController extends Controller
{
    public function index()
    {
        return NewsletterReg::all();
    }

    public function store()
    {
        request()->validate([
            'email' => 'required',
        ]);

        return NewsletterReg::create([
            'email' => request('email'),
        ]);
    }

    public function update(Event $event)
    {
        request()->validate([
            'email' => 'required',
        ]);

        $success = $event->update([
            'email' => request('email'),
        ]);

        return [
            'success' => $success
        ];
    }
}