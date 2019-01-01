<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
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
            Attributes\EnumAttribute::make('sourceable_type', array_keys(Config::get('amethyst.source.data.source.sourceables')))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('sourceable_id')
                ->setRelationKey('sourceable_type')
                ->setRelationName('sourceable')
                ->setRelations(Config::get('amethyst.source.data.source.sourceables'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
