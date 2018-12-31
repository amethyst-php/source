<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SourceAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'source.create',
        Tokens::PERMISSION_UPDATE => 'source.update',
        Tokens::PERMISSION_SHOW   => 'source.show',
        Tokens::PERMISSION_REMOVE => 'source.remove',
    ];
}
