<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\SourcesController::class,
    'router'     => [
        'as'     => 'source.',
        'prefix' => '/sources',
    ],
];
