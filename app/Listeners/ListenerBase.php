<?php

namespace App\Listeners;

use App\Services\Statut;

class ListenerBase
{
    /**
     * The Statut instance.
     *
     * @var App\Services\Statut
     */
    protected $statut;

    /**
     * Create the event listener.
     *
     * @param App\Services\Statut $statut
     *
     * @return void
     */
    public function __construct(Statut $statut)
    {
        $this->statut = $statut;
    }
}
