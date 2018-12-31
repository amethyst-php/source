<?php

return [
    'table'      => 'amethyst_sources',
    'comment'    => 'Source',
    'model'      => Railken\Amethyst\Models\Source::class,
    'schema'     => Railken\Amethyst\Schemas\SourceSchema::class,
    'repository' => Railken\Amethyst\Repositories\SourceRepository::class,
    'serializer' => Railken\Amethyst\Serializers\SourceSerializer::class,
    'validator'  => Railken\Amethyst\Validators\SourceValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\SourceAuthorizer::class,
    'faker'      => Railken\Amethyst\Authorizers\SourceFaker::class,
    'manager'    => Railken\Amethyst\Authorizers\SourceManager::class,
];
