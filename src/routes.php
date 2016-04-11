<?php
// Routes

$app->get('/', function ($request, $response) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml');
});

$app->get('/login', function ( $request,  $response) {
    $this->logger->addInfo("Acessando a tela de login");
    $response = $this->view->render("login.phtml");
    return $response;
});
