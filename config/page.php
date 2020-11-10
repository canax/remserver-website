<?php
/**
 * Configuration file for page which can create and put together web pages
 * from a collection of views. Through configuration you can add the
 * standard parts of the page, such as header, navbar, footer, stylesheets,
 * javascripts and more.
 */
return [
    // This layout view is the base for rendering the page, it decides on where
    // all the other views are rendered.
    "layout" => [
        //"template" => "anax/v2/layout/default",
        //"template" => "anax/v2/layout/dbwebb_se",
        //"template" => "anax/v2/layout/anax",
        "template" => "anax/v2/layout/plain",
        "region" => "layout",
        "sort" => null,
        "data" => [
            "favicon" => "favicon.ico",
            "lang" => "en",
            "stylesheets" => [
                "css/style.css",
            ],
            "javascripts" => [],
        ],
    ],
];
