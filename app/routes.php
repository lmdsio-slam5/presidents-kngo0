<?php

// Home page
$app->get('/', function () use ($app) {
    $presidents = $app['dao.president']->findAll();
    return $app['twig']->render('index.html.twig', array('presidents' => $presidents));
});
