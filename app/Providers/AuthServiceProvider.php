<?php

use App\Models\Attraction;
use App\Policies\AttractionPolicy;

protected $policies = [
    Attraction::class => AttractionPolicy::class,
];