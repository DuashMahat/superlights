<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 01:50
 */

namespace Lights;


class LightsController extends BaseController
{
    public function __construct(Game $game, $post)
    {
        parent::__construct($game, $post);
        $root = $game->getRoot();
        $game->reinitializeCheckStates();
        if(isset($post['cell']))
        {

            $rc = explode(',', $post['cell']);

            //echo $game->getState($rc[0], $rc[1]);

            if($game->getCellState($rc[0], $rc[1]) === Game::U)
            {
                $game->setCellState(Game::L, $rc[0], $rc[1]);
            }
            else if($game->getCellState($rc[0], $rc[1]) == Game::L)
            {
                $game->setCellState(Game::D, $rc[0], $rc[1]);
            }
            else
            {
                $game->setCellState(Game::U, $rc[0], $rc[1]);
            }
            $this->setRedirect("$root/lights.php");
        }
        else if(isset($post['check']))
        {
//            echo "only here going";
            if($post['check'] === 'Check'){
                //echo "going";
                for($r=0; $r<count($game->getStates()); $r++) {
                    $row = $game->getStates()[$r];
                    for($c=0; $c<count($row); $c++) {
                        if($game->getCellState($r, $c) !== Game::U){
                            if($game->getCellState($r, $c) !== $game->getSolution()[$r][$c]){
                                $game->setCheckStatesCell(Game::W, $r, $c);
                            }
                        }

                    }
                }
                $game->setCheckButtonVal("uncheck");
            }
            else if($post['check'] === 'Uncheck'){
                for($r=0; $r<count($game->getCheckStates()); $r++) {
                    $row = $game->getCheckStates()[$r];
                    for($c=0; $c<count($row); $c++) {
                        if($game->getCheckStatesCell($r, $c) === Game::W){
                            $game->setCheckStatesCell(Game::N, $r, $c);
                        }
                    }
                }
                $game->setCheckButtonVal("check");
            }
            $this->setRedirect("$root/lights.php");

        }
        else if(isset($post['newgame']))
        {
            $game->setStates($game->getNewgameStates());
            $this->setRedirect("$root/lights.php");

        } else if(isset($post['giveup']))
        {
            $game->setStates($game->getSolution());
            $this->setRedirect("$root/lights.php");

        }
    }


}