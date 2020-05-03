<?php

namespace Support;

use Mpociot\Reflection\DocBlock\Tag;
use Knuckles\Scribe\Extracting\Strategies\Metadata\GetFromDocBlocks;

class GetAuthWithDifferentTag extends GetFromDocBlocks
{
    protected function getAuthStatusFromDocBlock(array $tags)
    {
        $authTag = collect($tags)
            ->first(function ($tag) {
                return $tag instanceof Tag && strtolower($tag->getName()) === 'authd';
            });

        return (bool) $authTag;
    }
}
