<?php

namespace App\Events;

use App\Conversation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $conversation;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Conversation $conversation)
    {
      $this->conversation= $conversation;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('programs.'.$this->conversation->program->id);
    }

    public function broadcastWith()
    {
      return [
        'message' => $this->conversation->message,
        'user' => [
          'id' => $this->conversation->user->id,
          'name' => $this->conversation->user->name,
          'avatar' => $this->conversation->user->avatar
        ]
      ];
    }
}
