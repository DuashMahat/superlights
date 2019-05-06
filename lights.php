<?php
require 'lib/lights.inc.php';
$view = new Lights\LightsView($game);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="lights.css" type="text/css" rel="stylesheet" />
    <title>Super Lights</title>
</head>

<body>

<form id="gameform" action="posts/lights-post.php" method="post">
    <fieldset>

        <?php
        echo $view->presentIntro();
        echo $view->presentTable();
        echo $view->presentFooter();
        ?>



    </fieldset>
</form>


</body>
</html>
