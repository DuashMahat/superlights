<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 00:10
 */

namespace Lights;


class Game
{
    public function __construct($username=null)

    {
        $this->username = $username;
    }

    /**
     * @return null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param array $states
     */
    public function getCellState($row, $column)
    {
        return $this->states[$row][$column];
    }

    /**
     * @return array
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @return array
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * @return array
     */
    public function getNewgameStates()
    {
        return $this->newgameStates;
    }

    /**
     * @return array
     */
    public function getCheckStatesCell($row, $column)
    {
        return $this->checkStates[$row][$column];
    }

    /**
     * @return array
     */
    public function getCheckStates()
    {
        return $this->checkStates;
    }
    /**
     * @param null $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param array $states
     */
    public function setCellState($state, $row, $column)
    {
        $this->states[$row][$column] = $state;
    }

    /**
     * @param array $states
     */
    public function setStates($states)
    {
        $this->states = $states;
    }

    /**
     * @param array $checkStates
     */
    public function setCheckStatesCell($checkState, $row, $column)
    {
        $this->checkStates[$row][$column] = $checkState;
    }

    /**
     * @return mixed
     */
    public function getCheckButtonVal()
    {
        return $this->checkButtonVal;
    }

    /**
     * @param mixed $checkButtonVal
     */
    public function setCheckButtonVal($checkButtonVal)
    {
        $this->checkButtonVal = $checkButtonVal;
    }

    public function reinitializeCheckStates(){
        $this->checkStates = self::checkTable;
        $this->checkButtonVal = "check";
    }

    const L = 'Light';
    const D = 'unlight';
    const U = 'unset';
    const W = 'wrong';
    const N = 'no check';

    private $username;
    private $root = '/~abdull53/superlights';
    private $newgameStates = [
        [self::U, self::U, self::U, self::U, 0, self::U, 0],
        [0, self::U, self::U, self::U, self::U, self::U, self::U],
        [self::U, 5, self::U, self::U, 2, self::U, self::U],
        [self::U, self::U, self::U, self::U, self::U, 5, self::U],
        [self::U, self::U, 2, self::U, self::U, 1, self::U],
        [5, self::U, self::U, self::U, self::U, self::U, 1],
        [self::U, self::U, self::U, self::U, 5, 5, self::U]
    ];
    private $states = [
        [self::U, self::U, self::U, self::U, 0, self::U, 0],
        [0, self::U, self::U, self::U, self::U, self::U, self::U],
        [self::U, 5, self::U, self::U, 2, self::U, self::U],
        [self::U, self::U, self::U, self::U, self::U, 5, self::U],
        [self::U, self::U, 2, self::U, self::U, 1, self::U],
        [5, self::U, self::U, self::U, self::U, self::U, 1],
        [self::U, self::U, self::U, self::U, 5, 5, self::U]
    ];
    private $solution = [
        [self::D, self::L, self::D, self::D, 0, self::D, 0],
        [0, self::D, self::L, self::D, self::D, self::D, self::D],
        [self::D, 5, self::D, self::L, 2, self::L, self::D],
        [self::L, self::D, self::D, self::D, self::D, 5, self::L],
        [self::D, self::L, 2, self::D, self::L, 1, self::D],
        [5, self::D, self::L, self::D, self::D, self::D, 1],
        [self::L, self::D, self::D, self::D, 5, 5, self::L]
    ];
    private $checkStates = [
        [self::N, self::N, self::N, self::N, 0, self::N, 0],
        [0, self::N, self::N, self::N, self::N, self::N, self::N],
        [self::N, 5, self::N, self::N, 2, self::N, self::N],
        [self::N, self::N, self::N, self::N, self::N, 5, self::N],
        [self::N, self::N, 2, self::N, self::N, 1, self::N],
        [5, self::N, self::N, self::N, self::N, self::N, 1],
        [self::N, self::N, self::N, self::N, 5, 5, self::N]
    ];
    const checkTable = [
        [self::N, self::N, self::N, self::N, 0, self::N, 0],
        [0, self::N, self::N, self::N, self::N, self::N, self::N],
        [self::N, 5, self::N, self::N, 2, self::N, self::N],
        [self::N, self::N, self::N, self::N, self::N, 5, self::N],
        [self::N, self::N, 2, self::N, self::N, 1, self::N],
        [5, self::N, self::N, self::N, self::N, self::N, 1],
        [self::N, self::N, self::N, self::N, 5, 5, self::N]
    ];
    private $checkButtonVal = "check";
}