<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Comment;

class CommentsApiController extends Controller
{
  public function index(event $event)
  {
    return response()->json($event->comments()->latest()->get());
  }

  public function store(Request $request, Event $event)
  {
    $comment = $event->comments()->create([
      'body' => $request->body,
      'name' => $request->name,
      'email' => $request->email,
     
    ]);

    return $comment->toJson();
  }
}