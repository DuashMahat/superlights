<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 00:26
 */

namespace Lights;


class IndexView extends BaseView
{
    public function present()
    {
        $html = '';

        $html .= <<<HTML
<form id="signin" method="post" action="posts/signin-post.php">
    <fieldset>
        <p><img src="img/banner.png" width="521" height="346" alt="Super Lights Banner"></p>
        <p>Welcome to Super Lights</p>
        <p><label for="name">Your Name: </label>
            <input type="text" name="name" id="name"></p>
        <p><input type="submit" value="Start Game" ></p>
    </fieldset>
</form>
HTML;

        return $html;
    }

}