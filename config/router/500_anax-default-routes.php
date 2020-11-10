<?php
/**
 * Anax default setup of routes, place in order of evaluation.
 */
return [
    "routes" => [
        [
            "mount"     => null,
            "handler"   => "\Anax\Content\FileBasedContentController",
            "info"      => "Flat file content controller.",
        ],
    ]
];
