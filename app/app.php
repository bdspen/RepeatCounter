<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
    $app->get("/", function() use ($app) {
        return $app['twig']->render('repeat_counter.html.twig');
    });
    $app->get("/results", function() use ($app){
        $results = new RepeatCounter;
        $outcome = $results->countRepeats($_GET['search_word'], $_GET['sentence']);
        return $app['twig']->render('results.html.twig', array('result' => $outcome,
        'search_word' => $_GET['search_word'], 'sentence' => $_GET['sentence']));
    });
    return $app;
?>
