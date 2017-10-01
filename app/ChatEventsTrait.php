<?php

namespace App;

trait ChatEventsTrait
{
    protected function handleJoined($conn, $pl)
    {
        $this->users[$conn->resourceId] = $pl->data->user;
    }
}
