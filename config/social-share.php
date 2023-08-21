<?php

return [
    'services' => [
        'facebook' => [
            'label' => 'Facebook',
            'url' => 'https://www.facebook.com/sharer/sharer.php?u=#url#&text=#text#',
            'color' => '#1777f2',
        ],
        // @DEPRECATED. Is replaced with `x`. The values of `x` are the same.
        'twitter' => [
            'name' => 'x',
            'label' => 'X',
            'url' => 'https://x.com/intent/tweet?url=#url#',
            'color' => '#000000',
        ],
        'x' => [
            'label' => 'X',
            'url' => 'https://x.com/intent/tweet?url=#url#', // @TODO: replace with actual URL if `tweet` get's renamed.
            'color' => '#000000',
        ],
        'linkedin' => [
            'label' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/sharing/share-offsite/?url=#url#&summary=#text#',
            'color' => '#0077b5',
        ],
        'whatsapp' => [
            'label' => 'WhatsApp',
            'url' => 'https://wa.me/?text=#textWithUrl#',
            'color' => '#4dc247',
        ],
        'pinterest' => [
            'label' => 'Pinterest',
            'url' => 'https://pinterest.com/pin/create/button/?url=#url#',
            'color' => '#cb2027',
        ],
        'reddit' => [
            'label' => 'Reddit',
            'url' => 'https://www.reddit.com/submit?url=#url#&title=#text#',
            'color' => '#ff5700',
        ],
        'telegram' => [
            'label' => 'Telegram',
            'url' => 'https://telegram.me/share/url?url=#url#&text=#text#',
            'color' => '#0088cc',
        ],
        'email' => [
            'label' => 'Email',
            'url' => 'mailto:?body=#textWithUrl#',
            'color' => '#848484',
        ],
    ],
];
