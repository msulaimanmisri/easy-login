<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cfeb1f949954b88dbfea89048dd6c4b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SulaimanMisri\\EasyLogin\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SulaimanMisri\\EasyLogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5cfeb1f949954b88dbfea89048dd6c4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5cfeb1f949954b88dbfea89048dd6c4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5cfeb1f949954b88dbfea89048dd6c4b::$classMap;

        }, null, ClassLoader::class);
    }
}
