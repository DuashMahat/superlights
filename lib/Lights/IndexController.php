<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 00:26
 */

namespace Lights;


class IndexController extends BaseController
{
    public function __construct(Game $game, $post)
    {
        parent::__construct($game, $post);
        $root = $game->getRoot();
        if(!isset($post['name']) || empty($post['name'])){
            $this->setRedirect("index.php");
        } else {
            $username = strip_tags($post['name']);
            $this->getGame()->setUsername($username);
            $this->setRedirect("$root/lights.php");
        }
    }
}