<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d23a1f1b3bfdd1981466b422a870850
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Really_Rich_Results\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Really_Rich_Results\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Really_Rich_Results\\Admin\\Plugin_Settings' => __DIR__ . '/../..' . '/src/Admin/Plugin_Settings.php',
        'Really_Rich_Results\\Admin\\Post_Settings' => __DIR__ . '/../..' . '/src/Admin/Post_Settings.php',
        'Really_Rich_Results\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'Really_Rich_Results\\Common' => __DIR__ . '/../..' . '/src/Common.php',
        'Really_Rich_Results\\Content_Types\\Abstract_Content_Type' => __DIR__ . '/../..' . '/src/Content_Types/Abstract_Content_Type.php',
        'Really_Rich_Results\\Content_Types\\Archive' => __DIR__ . '/../..' . '/src/Content_Types/Archive.php',
        'Really_Rich_Results\\Content_Types\\Blog_Index' => __DIR__ . '/../..' . '/src/Content_Types/Blog_Index.php',
        'Really_Rich_Results\\Content_Types\\Index' => __DIR__ . '/../..' . '/src/Content_Types/Index.php',
        'Really_Rich_Results\\Content_Types\\Single' => __DIR__ . '/../..' . '/src/Content_Types/Single.php',
        'Really_Rich_Results\\Data_Sources\\Abstract_Data_Source' => __DIR__ . '/../..' . '/src/Data_Sources/Abstract_Data_Source.php',
        'Really_Rich_Results\\Data_Sources\\Generic' => __DIR__ . '/../..' . '/src/Data_Sources/Generic.php',
        'Really_Rich_Results\\Data_Sources\\List_Array' => __DIR__ . '/../..' . '/src/Data_Sources/List_Array.php',
        'Really_Rich_Results\\Data_Sources\\Really_Rich_Results_Product' => __DIR__ . '/../..' . '/src/Data_Sources/Really_Rich_Results_Product.php',
        'Really_Rich_Results\\Data_Sources\\Site' => __DIR__ . '/../..' . '/src/Data_Sources/Site.php',
        'Really_Rich_Results\\Data_Sources\\WP_Comment' => __DIR__ . '/../..' . '/src/Data_Sources/WP_Comment.php',
        'Really_Rich_Results\\Data_Sources\\WP_Post' => __DIR__ . '/../..' . '/src/Data_Sources/WP_Post.php',
        'Really_Rich_Results\\Data_Sources\\WP_Term' => __DIR__ . '/../..' . '/src/Data_Sources/WP_Term.php',
        'Really_Rich_Results\\Data_Sources\\WP_User' => __DIR__ . '/../..' . '/src/Data_Sources/WP_User.php',
        'Really_Rich_Results\\Factories\\Data_Source' => __DIR__ . '/../..' . '/src/Factories/Data_Source.php',
        'Really_Rich_Results\\Factories\\Schema' => __DIR__ . '/../..' . '/src/Factories/Schema.php',
        'Really_Rich_Results\\Main' => __DIR__ . '/../..' . '/src/Main.php',
        'Really_Rich_Results\\Routes' => __DIR__ . '/../..' . '/src/Routes.php',
        'Really_Rich_Results\\Routes\\Settings\\Post_Types' => __DIR__ . '/../..' . '/src/Routes/Settings/Post_Types.php',
        'Really_Rich_Results\\Routes\\Settings\\Site' => __DIR__ . '/../..' . '/src/Routes/Settings/Site.php',
        'Really_Rich_Results\\Schema' => __DIR__ . '/../..' . '/src/Schema.php',
        'Really_Rich_Results\\Schema\\AboutPage' => __DIR__ . '/../..' . '/src/Schema/AboutPage.php',
        'Really_Rich_Results\\Schema\\Action' => __DIR__ . '/../..' . '/src/Schema/Action.php',
        'Really_Rich_Results\\Schema\\Article' => __DIR__ . '/../..' . '/src/Schema/Article.php',
        'Really_Rich_Results\\Schema\\BreadcrumbList' => __DIR__ . '/../..' . '/src/Schema/BreadcrumbList.php',
        'Really_Rich_Results\\Schema\\CollectionPage' => __DIR__ . '/../..' . '/src/Schema/CollectionPage.php',
        'Really_Rich_Results\\Schema\\Comment' => __DIR__ . '/../..' . '/src/Schema/Comment.php',
        'Really_Rich_Results\\Schema\\ContactPage' => __DIR__ . '/../..' . '/src/Schema/ContactPage.php',
        'Really_Rich_Results\\Schema\\CreativeWork' => __DIR__ . '/../..' . '/src/Schema/CreativeWork.php',
        'Really_Rich_Results\\Schema\\ImageObject' => __DIR__ . '/../..' . '/src/Schema/ImageObject.php',
        'Really_Rich_Results\\Schema\\ItemList' => __DIR__ . '/../..' . '/src/Schema/ItemList.php',
        'Really_Rich_Results\\Schema\\ListItem' => __DIR__ . '/../..' . '/src/Schema/ListItem.php',
        'Really_Rich_Results\\Schema\\MediaObject' => __DIR__ . '/../..' . '/src/Schema/MediaObject.php',
        'Really_Rich_Results\\Schema\\Offer' => __DIR__ . '/../..' . '/src/Schema/Offer.php',
        'Really_Rich_Results\\Schema\\Organization' => __DIR__ . '/../..' . '/src/Schema/Organization.php',
        'Really_Rich_Results\\Schema\\Person' => __DIR__ . '/../..' . '/src/Schema/Person.php',
        'Really_Rich_Results\\Schema\\PostalAddress' => __DIR__ . '/../..' . '/src/Schema/PostalAddress.php',
        'Really_Rich_Results\\Schema\\Product' => __DIR__ . '/../..' . '/src/Schema/Product.php',
        'Really_Rich_Results\\Schema\\Review' => __DIR__ . '/../..' . '/src/Schema/Review.php',
        'Really_Rich_Results\\Schema\\SearchAction' => __DIR__ . '/../..' . '/src/Schema/SearchAction.php',
        'Really_Rich_Results\\Schema\\Thing' => __DIR__ . '/../..' . '/src/Schema/Thing.php',
        'Really_Rich_Results\\Schema\\WebPage' => __DIR__ . '/../..' . '/src/Schema/WebPage.php',
        'Really_Rich_Results\\Schema\\WebSite' => __DIR__ . '/../..' . '/src/Schema/WebSite.php',
        'Really_Rich_Results\\Types' => __DIR__ . '/../..' . '/src/Types.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d23a1f1b3bfdd1981466b422a870850::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d23a1f1b3bfdd1981466b422a870850::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d23a1f1b3bfdd1981466b422a870850::$classMap;

        }, null, ClassLoader::class);
    }
}
