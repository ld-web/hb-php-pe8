<?php

const ABILITIES = [
    'dev' => [
        'label' => 'Dev',
        'tw-class' => 'text-white bg-blue-800',
        ],
    'back' => [
        'label' => 'Backend',
        'tw-class' => 'text-black bg-gray-300'],
    'front' => [
        'label' => 'Frontend',
        'tw-class' => 'text-white bg-green-600'
    ],
    'sysadmin' => [
        'label' => 'SysAdmin',
        'tw-class' => 'text-white bg-orange-800'
    ],
    'devops' => [
        'label' => 'DevOps',
        'tw-class' => 'text-white bg-teal-700'
    ],
    'architect' => [
        'label' => 'Architect',
        'tw-class' => 'text-white bg-red-700'
    ],
    'dba' => [
        'label' => 'DBA',
        'tw-class' => 'text-white bg-cyan-800'
    ],
    'lead' => [
        'label' => 'Tech Lead',
        'tw-class' => 'text-white bg-yellow-600'
    ]
];

$members = [
    [
        'id' => 1,
        'name' => 'Steele',
        'firstname' => 'Essie',
        'birth_date' => '3/24/2078',
        'abilities' => ['dev', 'devops'],
        'quote' => 'triangle attached wagon strike chair driver rain occur skill country jungle satellites correct strong car appearance was porch difficulty thumb rather chosen winter individualcitation',
        'picture' => 'http://unsplash.it/g/150/150?random&gravity=center'
    ],
    [
        'id' => 2,
        'name' => 'Evans',
        'firstname' => 'Iva',
        'birth_date' => '4/4/2109',
        'abilities' => ['back', 'dba', 'lead', 'sysadmin'],
        'quote' => 'accident cloud dot hill speed correct halfway eaten taste left heavy huge stems substance another shut free operation proper improve cost load rod molecularcitation',
        'picture' => 'http://unsplash.it/g/150/150?random&gravity=center'
    ],
    [
        'id' => 3,
        'name' => 'Francis',
        'firstname' => 'Lillie',
        'birth_date' => '1/17/2095',
        'abilities' => ['front', 'dev'],
        'quote' => 'scene porch using sand than parent pond beautiful however obtain ran swim alphabet ate selection ahead atomic show breathe whispered quiet triangle calm strugglecitation',
        'picture' => 'http://unsplash.it/g/150/150?random&gravity=center'
    ],
    [
        'id' => 4,
        'name' => 'Jenkins',
        'firstname' => 'Raymond',
        'birth_date' => '1/16/2087',
        'abilities' => ['devops', 'back', 'architect'],
        'quote' => 'getting tight driving outline although still ring chicken torn music every select experience automobile log load obtain certainly glass minerals age us breathe welcomecitation',
        'picture' => 'http://unsplash.it/g/150/150?random&gravity=center'
    ],
    [
        'id' => 5,
        'name' => 'Bell',
        'firstname' => 'Benjamin',
        'birth_date' => '9/7/2050',
        'abilities' => ['dev', 'back'],
        'quote' => 'fierce grabbed corner middle excellent sale up carefully matter queen hearing laugh protection night garden earlier lost stairs audience sight needle blow reader findcitation',
        'picture' => 'http://unsplash.it/g/150/150?random&gravity=center'
    ],
];
