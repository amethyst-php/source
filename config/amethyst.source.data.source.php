<?php

return [
    'table'       => 'amethyst_sources',
    'comment'     => 'Source',
    'model'       => Amethyst\Models\Source::class,
    'schema'      => Amethyst\Schemas\SourceSchema::class,
    'repository'  => Amethyst\Repositories\SourceRepository::class,
    'serializer'  => Amethyst\Serializers\SourceSerializer::class,
    'validator'   => Amethyst\Validators\SourceValidator::class,
    'authorizer'  => Amethyst\Authorizers\SourceAuthorizer::class,
    'faker'       => Amethyst\Fakers\SourceFaker::class,
    'manager'     => Amethyst\Managers\SourceManager::class,
    'sourceables' => [
        Amethyst\Models\Foo::class => Amethyst\Managers\FooManager::class,
    ],
];
