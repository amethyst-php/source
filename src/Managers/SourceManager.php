<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Source                 newEntity()
 * @method \Amethyst\Schemas\SourceSchema          getSchema()
 * @method \Amethyst\Repositories\SourceRepository getRepository()
 * @method \Amethyst\Serializers\SourceSerializer  getSerializer()
 * @method \Amethyst\Validators\SourceValidator    getValidator()
 * @method \Amethyst\Authorizers\SourceAuthorizer  getAuthorizer()
 */
class SourceManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.source.data.source';
}
