<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\SourceFaker;
use Railken\Amethyst\Managers\SourceManager;
use Railken\Amethyst\Tests\BaseTest;
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
