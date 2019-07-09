<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SourceFaker;
use Amethyst\Managers\SourceManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SourceTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SourceManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SourceFaker::class;
}
