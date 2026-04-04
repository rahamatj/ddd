<?php

return [
    'domains' => [
        'Product' => [
            'fields' => [
                'name' => 'string',
                'description' => 'text',
                'price' => 'decimal',
            ],
            'rules' => [
                'name' => 'required | string',
                'description' => 'required | string',
            ]
        ],
        'Post' => [
            'fields' => [
                'title' => 'string',
                'description' => 'text',
            ],
            'rules' => [
                'title' => 'required | string',
                'description' => 'required | string',
            ]
        ],
        'Category' => [
            'fields' => [
                'title' => 'string',
                'description' => 'text',
            ],

            'rules' => [
                'title' => 'required | string',
                'description' => 'required | string',
            ]
        ],
        'Student' => [
            'fields' => [
                'name' => 'string',
                'id' => 'string',
            ],

            'rules' => [
                'name' => 'required | string',
                'id' => 'required | string'
            ]
        ],
    ],
];
