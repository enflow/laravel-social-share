<?php

return [
    'services' => [
        'facebook' => [
            'url' => 'https://www.facebook.com/sharer/sharer.php?u=#url#&text=#text#',
            'color' => '#1777f2',
        ],
        'twitter' => [
            'url' => 'https://twitter.com/intent/tweet?url=#url#',
            'color' => '#1da1f2',
        ],
        'linkedin' => [
            'url' => 'https://www.linkedin.com/sharing/share-offsite/?url=#url#&summary=#text#',
            'color' => '#0077b5',
        ],
        'whatsapp' => [
            'url' => 'https://wa.me/?text=#textWithUrl#',
            'color' => '#4dc247',
        ],
        'pinterest' => [
            'url' => 'https://pinterest.com/pin/create/button/?url=#url#',
            'color' => '#cb2027',
        ],
        'reddit' => [
            'url' => 'https://www.reddit.com/submit?url=#url#&title=#text#',
            'color' => '#ff5700',
        ],
        'telegram' => [
            'url' => 'https://telegram.me/share/url?url=#url#&text=#text#',
            'color' => '#0088cc',
        ],
        'email' => [
            'url' => 'mailto:?body=#textWithUrl#',
            'color' => '#848484',
        ],
    ],
];
