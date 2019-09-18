<?php

namespace My\Project\Runner;

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}