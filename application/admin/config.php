<?php

return [
    'template'         => [
    // 模板后缀
        'view_suffix'  => 'htm',  
     ],
    'view_replace_str' => [
          '__PUBLIC__' => SITE_URL.'/public/static/admin',
          '__IMG__' => SITE_URL.'/public/static',
     ],
     
];
