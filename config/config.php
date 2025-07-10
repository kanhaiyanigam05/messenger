<?php

return [

    // 'user_model' => App\Models\User::class,

    'message_model' => Kanhaiyanigam05\Messenger\Models\Message::class,

    'participant_model' => Kanhaiyanigam05\Messenger\Models\Participant::class,

    'thread_model' => Kanhaiyanigam05\Messenger\Models\Thread::class,

    /**
     * Define custom database table names - without prefixes.
     */
    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
