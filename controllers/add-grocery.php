<?php



$app['database']->insert('groceries', [
    'name' => $_POST['name'],
    'number' => $_POST['number'],
    'price' => $_POST['price']
]);



// the page we want to redirect to
header('Location: /groceries');

