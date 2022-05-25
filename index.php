<?php

    require_once ('libraries/autoload.php');

    $s1 = \App\Singleton::getInstance();
    $s2 = \App\Singleton::getInstance();

    if ($s1 === $s2) {
        echo ('Le Singleton fonctionne, les deux variables contiennent la même instance.');
    }
    else {
        echo ('Le Singleton a échoué, les deux variables contiennent des instances différentes.');
    }

?>