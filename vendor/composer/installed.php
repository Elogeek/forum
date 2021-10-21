<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '217afb72c7e014182082509edb2e1889106da7ba',
        'name' => 'upto/monolog',
        'dev' => true,
    ),
    'versions' => array(
        'monolog/monolog' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(
                0 => '2.x-dev',
            ),
            'reference' => 'f19a2ae873d42f4494f3fb29de9dadb91a3f7601',
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0 || 2.0.0 || 3.0.0',
            ),
        ),
        'upto/monolog' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '217afb72c7e014182082509edb2e1889106da7ba',
            'dev_requirement' => false,
        ),
    ),
);
