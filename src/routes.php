<?php
// Routes

//$app->get('/[{name}]', function ($request, $response, $args) {
//    // Sample log message
//    $this->logger->info("Slim-Skeleton '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
//});

$app->get('/', function ($request, $response, $args) use($app) {
    // Sample log message
    $db = $app->getContainer()->get('db');
    $posts = $db->table('posts')->get();
    //$this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'home.twig', $args);
});



