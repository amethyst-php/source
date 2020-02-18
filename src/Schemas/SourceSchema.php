<?php

namespace Amethyst\Schemas;

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
            Attributes\NumberAttribute::make('weight'),
            Attributes\EnumAttribute::make('sourceable_type', app('amethyst')->getDataNames())
                ->setRequired(true),
            Attributes\MorphToAttribute::make('sourceable_id')
                ->setRelationKey('sourceable_type')
                ->setRelationName('sourceable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
