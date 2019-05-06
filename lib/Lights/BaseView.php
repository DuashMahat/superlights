<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 00:27
 */

namespace Lights;


class BaseView
{
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @return Game
     */
    public function getGame()
    {
        return $this->game;
    }

    private $game;
}