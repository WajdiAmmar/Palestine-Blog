<?php return array(
    'root' => array(
        'name' => 'maram/ds2',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'components/jquery' => array(
            'pretty_version' => '3.5.1',
            'version' => '3.5.1.0',
            'reference' => 'b33e8f0f9a1cb2ae390cf05d766a900b53d2125b',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'maram/ds2' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.0.2',
            'version' => '5.0.2.0',
            'reference' => '688bce4fa695cc360a0d084e34f029b0c192b223',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.0.2',
            ),
        ),
    ),
);
