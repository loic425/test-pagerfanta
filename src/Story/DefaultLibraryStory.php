<?php

namespace App\Story;

use App\Factory\BookFactory;
use Zenstruck\Foundry\Story;

final class DefaultLibraryStory extends Story
{
    public function build(): void
    {
        BookFactory::createMany(20);
    }
}
