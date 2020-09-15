<?php
return [
    'base_route'      => 'admin/filemanager',
    'middleware'      => ['guest', 'web'],
    'allow_format'    => 'jpeg,jpg,png,gif,webp',
    'max_size'        => 500,
    'max_image_width' => 1024,
    'image_quality'   => 80,
];
