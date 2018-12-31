<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class SourceSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('vendor')
                ->setRequired(true),
            Attributes\TextAttribute::make('uid'),
            Attributes\UrlAttribute::make('url'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
