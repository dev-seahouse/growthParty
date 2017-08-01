<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\Events\NewMessage;
use Illuminate\Http\Request;

class ConversationController extends Controller
{

  public function show($id)
  {
    $chatHistory = Conversation::where('program_id', $id);
    return $chatHistory->with('user')->get();
  }

  public function store()
  {
    $conversation = Conversation::create(array(
      'message'    => request('message'),
      'program_id' => request('program_id'),
      'user_id'    => auth()->user()->id
    ));

    broadcast(new NewMessage($conversation))->toOthers();
    return $conversation->load('user');
  }
}
