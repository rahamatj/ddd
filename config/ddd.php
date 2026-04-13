<?php

return [
    'domains' => [
        'Post' => [
            'fields' => [
                'title' => 'string',
                'description' => 'text',
            ],
            'rules' => [
                'title' => 'required | string',
                'description' => 'required | string',
            ],
            'factory' => [
                'title' => 'sentence',
                'description' => 'paragraph',
            ],
            'seed' => 20,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Category' => [
            'fields' => [
                'name' => 'string',
                'description' => 'text',
            ],
            'rules' => [
                'name' => 'required | string',
                'description' => 'required | string',
            ],
            'factory' => [
                'name' => 'sentence',
                'description' => 'paragraph',
            ],
            'seed' => 20,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Student' => [
            'fields' => [
                'name' => 'string',
                'age' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'age' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'age' => 'randomNumber',
            ],
            'seed' => 20,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Teacher' => [
            'fields' => [
                'name' => 'string',
                'salary' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'salary' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'salary' => 'randomNumber',
            ],
            'seed' => 20,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Product' => [
            'fields' => [
                'name' => 'string',
                'price' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'price' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'price' => 'randomNumber',
            ],
            'seed' => 30,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Admin' => [
            'fields' => [
                'name' => 'string',
                'age' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'age' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'age' => 'randomNumber',
            ],
            'seed' => 30,
            'migrate' => false,
            'scaffold' => false,
        ],
        'Employee' => [
            'fields' => [
                'name' => 'string',
                'salary' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'salary' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'salary' => 'randomNumber',
            ],
            'seed' => 30,
            'migrate' => true,
            'scaffold' => true,
        ],
        'Radio' => [
            'fields' => [
                'name' => 'string',
                'price' => 'integer',
            ],
            'rules' => [
                'name' => 'required | string',
                'price' => 'required | integer',
            ],
            'factory' => [
                'name' => 'word',
                'price' => 'randomNumber',
            ],
            'seed' => 30,
            'migrate' => true,
            'scaffold' => true,
        ],
    ]
];