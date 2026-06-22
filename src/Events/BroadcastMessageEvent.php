<?php

namespace Namu\WireChat\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\Attributes\WithoutRelations;
use Illuminate\Queue\SerializesModels;
use Namu\WireChat\Models\Conversation;
use Namu\WireChat\Models\Message;

class BroadcastMessageEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        #[WithoutRelations]
        public Message $message,
        #[WithoutRelations]
        public Conversation $conversation)
    {

        // Log::info($participant);
    }
}
