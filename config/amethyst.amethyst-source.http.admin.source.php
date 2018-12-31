<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\SourcesController::class,
    'router'      => [
        'as'        => 'source.',
        'prefix'    => '/sources',
    ],
];
