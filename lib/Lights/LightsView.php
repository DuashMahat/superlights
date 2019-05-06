<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-24
 * Time: 21:05
 */

namespace Lights;


class LightsView extends BaseView
{

    public function presentIntro()
    {
        $html = "<p>".$this->getGame()->getUsername()."'s Super Lights</p>";
        return $html;
    }

    public function presentTable()
    {
        $values = [
            [-1, -1, -1, -1, 0, -1, 0],
            [0, -1, -1, -1, -1, -1, -1],
            [-1, 5, -1, -1, 2, -1, -1],
            [-1, -1, -1, -1, -1, 5, -1],
            [-1, -1, 2, -1, -1, 1, -1],
            [5, -1, -1, -1, -1, -1, 1],
            [-1, -1, -1, -1, 5, 5, -1]
        ];

        $html = '<table>';


        for($r=0; $r<count($values); $r++) {

            $html .= '<tr>';
            $row = $values[$r];
            for($c=0; $c<count($row); $c++) {
                $value = $values[$r][$c];
                if($value < 0) {
                    if($this->getGame()->getCellState($r, $c) === Game::L)
                    {
                        if($this->getGame()->getCheckStatesCell($r, $c) === Game::W){
                            $class_light = "light wrong";
                        } else {
                            $class_light = "light";
                        }
                        $html.='<td class="'.$class_light.'">
                                    <button name="cell" value="'.$r . ',' .$c .'">
                                        <img src="img/light.png" width="43" height="75">
                                    </button>
                                </td>    <!-- light -->';
                    }
                    else if($this->getGame()->getCellState($r, $c) === Game::D)
                    {
                        if($this->getGame()->getCheckStatesCell($r, $c) === Game::W){
                            $class_unlight = "unlight wrong";
                        } else {
                            $class_unlight = "unlight";
                        }
                        $html.='<td class="'.$class_unlight.'">
                                    <button name="cell" value="'.$r . ',' .$c .'">&bull;</button>
                                </td>    <!-- unlight   -->';
                    }
                    else
                    {
                        $html .= '<td class="unset"><button name="cell" value="'.$r . ',' .$c .'">&nbsp;</button></td>';
                    }
                } else if($value > 4) {
                    $html .= '<td class="wall">&nbsp;</td>';
                } else {
                    $html .= '<td class="wall">' . $value . '</td>';
                }
            }

            $html .= '</tr>';
        }

        $html .= '</table>';
        return $html;
    }

    public function presentFooter(){
        if($this->getGame()->getCheckButtonVal() === "check"){
            $html = '<p><input type="submit" name="check" value="Check"></p>';
        } else {
            $html = '<p><input type="submit" name="check" value="Uncheck"></p>';
        }

        $html .= <<<HTML
<p><input type="submit" name="giveup" value="Give Up"></p>
<p><input type="submit" name="newgame" value="New Game"></p>
<p><a href="posts/logout.php">Goodbye!</a></p>
HTML;
        return $html;
    }
}