<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'zfc_user_metadata' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(__DIR__ . '/orm')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ZfcUserMetadata\Entity' => 'zfc_user_metadata',
                )
            )
        )
    ),

    'service_manager' => include 'service.config.php',

    'view_manager' => array(
        'template_map' => array(
            'zfc-user/user/index' => __DIR__ . '/../view/zfc-user/user/index.phtml',
        )
    ),

    'zfc_user' => array(
        'extensions' => array(
            'metadata' => array(
                'type'         => 'ZfcUserMetadata\Extension',
                'entity_class' => 'ZfcUserMetadata\Entity\UserMetadata',
            ),

            'metadata_doctrine' => 'ZfcUserMetadata\DoctrineExtension'
        )
    ),
);