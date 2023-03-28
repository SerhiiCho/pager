<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5d40776ed6d1971a2d646b73372d4da
{
    public static $files = array (
        '5ff2501974ebd86c0be698ddfca6451e' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v5p0.php',
        '3c1171ed55467b6377ca288852cab70b' => __DIR__ . '/../..' . '/inc/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpPager\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpPager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/WpPager',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WpPager\\Dir' => __DIR__ . '/../..' . '/inc/WpPager/Dir.php',
        'WpPager\\Dto\\ImageFile' => __DIR__ . '/../..' . '/inc/WpPager/Dto/ImageFile.php',
        'WpPager\\Dto\\Option' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Option.php',
        'WpPager\\Dto\\Requests\\AddFilesRequest' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Requests/AddFilesRequest.php',
        'WpPager\\Dto\\Requests\\DeleteFileRequest' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Requests/DeleteFileRequest.php',
        'WpPager\\Dto\\Requests\\GiveImageNameRequest' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Requests/GiveImageNameRequest.php',
        'WpPager\\Dto\\Requests\\SetFilesRequest' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Requests/SetFilesRequest.php',
        'WpPager\\Dto\\Requests\\UpdateSettingsRequest' => __DIR__ . '/../..' . '/inc/WpPager/Dto/Requests/UpdateSettingsRequest.php',
        'WpPager\\Exceptions\\MissingRequestParameter' => __DIR__ . '/../..' . '/inc/WpPager/Exceptions/MissingRequestParameter.php',
        'WpPager\\File' => __DIR__ . '/../..' . '/inc/WpPager/File.php',
        'WpPager\\Helper' => __DIR__ . '/../..' . '/inc/WpPager/Helper.php',
        'WpPager\\Hook' => __DIR__ . '/../..' . '/inc/WpPager/Hook.php',
        'WpPager\\Http\\Ajax\\AjaxResponse' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/AjaxResponse.php',
        'WpPager\\Http\\Ajax\\Entry' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Entry.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\AddFilesHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/AddFilesHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\DeleteAllFilesHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/DeleteAllFilesHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\DeleteFileHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/DeleteFileHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\GetFilesHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/GetFilesHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\GiveImageNameHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/GiveImageNameHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Files\\SetFilesHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Files/SetFilesHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Handler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Handler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Settings\\GetSettingsHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Settings/GetSettingsHandler.php',
        'WpPager\\Http\\Ajax\\Handlers\\Settings\\UpdateSettingsHandler' => __DIR__ . '/../..' . '/inc/WpPager/Http/Ajax/Handlers/Settings/UpdateSettingsHandler.php',
        'WpPager\\Http\\Request' => __DIR__ . '/../..' . '/inc/WpPager/Http/Request.php',
        'WpPager\\Json' => __DIR__ . '/../..' . '/inc/WpPager/Json.php',
        'WpPager\\OptionsStorage' => __DIR__ . '/../..' . '/inc/WpPager/OptionsStorage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5d40776ed6d1971a2d646b73372d4da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5d40776ed6d1971a2d646b73372d4da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5d40776ed6d1971a2d646b73372d4da::$classMap;

        }, null, ClassLoader::class);
    }
}
