<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsApiController extends Controller
{
    public function index()
    {
        return Comment::all();
    }
    public function store(StoreCommentsRequest $request) {
        return comment::create([
            'name' => request('name'),
            'email' => request('email'),
            'body' => request('body'),
        ]);
    }
    
}