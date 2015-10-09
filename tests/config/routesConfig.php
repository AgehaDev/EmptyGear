<?php
return array(
    'home' => array(
        'route' => '/',
        'defaults' => array(
            'controller' => 'Application\Controller\IndexController',
            'action' => 'index',
        ),
    ),
    'api' => array(
        'route' => '/api/[id]',
        'GearBox' => 'ApiBox',
        'filter' => array(
            'id' => '[0-9]+',
        ),
        'defaults' => array(
            'controller' => 'Application\Controller\RestController',
        ),
    ),
    'segmentRequired' => array(
        'route' => '/{action}/[nr]',
        'GearBox' => 'ApiBox',
        'filter' => array(
            'action' => '[a-zA-Z]',
            'id' => '[0-9]+',
        ),
        'defaults' => array(
            'controller' => 'Application\Controller\RestController',
        ),
    ),
    'segmentRequired' => array(
        'route' => '/test/{nr}',
        'GearBox' => 'ApiBox',
        'filter' => array(
            'nr' => '[0-9]+',
        ),
        'defaults' => array(
            'controller' => 'Application\Controller\RestController',
        ),
    ),
    'dhome' => array(
        'route' => '/entityList',
        'defaults' => array(
            'controller' => 'Application\Controller\IndexController',
            'action' => 'baba',
        ),
    ),
    'Sta' => array(
        'route' => '/static',
        'GearBox' => 'Static',
        'defaults' => array(
            'controller' => '',
            'action' => '',
        ),
        'view' => array(
            'type' => 'phtml',
            'view' => 'application/view/partial/lorem',
        ),
    ),
);