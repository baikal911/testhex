<?php

namespace My\Project\Runner;

use Illuminate\Support\Collection;

echo '1 thesis!';

//require __DIR__ . '/../vendor/autoload.php';

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}

echo "2 thesis!";

echo run();

echo "End thesis!";