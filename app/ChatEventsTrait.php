<?php

namespace App;

use Ratchet\ConnectionInterface;

trait ChatEventsTrait
{
    protected function handleJoined(ConnectionInterface $conn, $pl)
    {
        $this->users[$conn->resourceId] = $pl->data->user;

        var_dump($pl);
    }
}
