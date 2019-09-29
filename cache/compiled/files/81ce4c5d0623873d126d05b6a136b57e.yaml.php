<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Xampp/htdocs/uptail/user/plugins/antispam/blueprints.yaml',
    'modified' => 1569783037,
    'data' => [
        'name' => 'Antispam',
        'version' => '1.2.5',
        'description' => 'Automatic obfuscation of plaintext email addresses in Grav pages.',
        'icon' => 'at',
        'author' => [
            'name' => 'Netzhexe.de',
            'email' => 'ak@netzhexe.de'
        ],
        'homepage' => 'https://github.com/skinofthesoul/grav-plugin-antispam',
        'keywords' => 'grav, plugin, spam protection, email obfuscation',
        'bugs' => 'https://github.com/skinofthesoul/grav-plugin-antispam/issues',
        'docs' => 'https://github.com/skinofthesoul/grav-plugin-antispam/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
