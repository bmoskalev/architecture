<?php


class PoolGameAdapter implements IPool
{
    private $poolGame;

    public function __construct(PoolGame $poolGame)
    {
        $this->poolGame=$poolGame;
    }

    public function shoot()
    {
        $this->poolGame->udarit();
    }

    public function win()
    {
        $this->poolGame->pobeda();
    }

    public function loose()
    {
        $this->poolGame->proigrish();
    }
}