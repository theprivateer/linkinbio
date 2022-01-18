<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'Phil Stephens',
    'rssTitle' => 'Phil Stephens - Bio Links',
    'description' => "Hi, I'm a marathon mountain biker and creative software developer.",
    'siteLanguage' => 'en',
    'collections' => [
        'links' => [
            'author' => 'Phil Stephens', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'link/{-filename}',
            'filter' => function ($item) {
                return $item->date;
            },
        ],
    
    ],
    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
];
