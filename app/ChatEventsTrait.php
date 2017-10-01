<?php

namespace App;

use Ratchet\ConnectionInterface;

trait ChatEventsTrait
{
    protected function handleJoined(ConnectionInterface $conn, $pl)
    {
        $this->users[$conn->resourceId] = $pl->data->user;

        foreach ($this->clients as $key => $client) {
            $client->send(json_encode([
                'event' => 'joined',
                'data' => $pl->data->user
            ]));
        }
    }
}
