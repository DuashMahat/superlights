<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 00:27
 */

namespace Lights;


class BaseController
{
    public function __construct(Game $game, $post)
    {
        $this->game = $game;
        $this->post = $post;
    }

    /**
     * @return Game
     */
    public function getGame()
    {
        return $this->game;
    }
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * @param mixed $redirect
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;
    }
    private $redirect;
    private $game;
    private $post;
}