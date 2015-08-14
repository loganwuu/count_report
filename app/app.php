<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    // Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    // Use Twig from views folder
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    // form.html page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // view_count.html page
    $app->get("/view_count", function() use($app) {
        $my_RepeatCounter = new RepeatCounter;
        $repeat_number = $my_RepeatCounter->countRepeats($_GET['word'], $_GET['string']);
        $word = $_GET['word'];
        $string = $_GET['string'];
        return $app['twig']->render('view_count.html.twig', array('result' => $repeat_number, 'word' => $word, 'string' => $string));
    });

    return $app;
?>
