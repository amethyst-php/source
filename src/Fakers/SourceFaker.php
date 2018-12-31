<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class SourceFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('vendor', $faker->name);
        $bag->set('uid', md5(microtime()));
        $bag->set('url', 'https://github.com');

        return $bag;
    }
}
