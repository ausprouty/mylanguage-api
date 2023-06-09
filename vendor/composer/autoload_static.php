<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Opis\\ORM\\' => 9,
            'Opis\\Database\\' => 14,
        ),
        'M' => 
        array (
            'MyLanguageApi\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Opis\\ORM\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/orm/src',
        ),
        'Opis\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/database/src',
        ),
        'MyLanguageApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/MyLanguageApi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Opis\\Database\\Connection' => __DIR__ . '/..' . '/opis/database/src/Connection.php',
        'Opis\\Database\\Database' => __DIR__ . '/..' . '/opis/database/src/Database.php',
        'Opis\\Database\\ResultSet' => __DIR__ . '/..' . '/opis/database/src/ResultSet.php',
        'Opis\\Database\\SQL\\BaseStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/BaseStatement.php',
        'Opis\\Database\\SQL\\ColumnExpression' => __DIR__ . '/..' . '/opis/database/src/SQL/ColumnExpression.php',
        'Opis\\Database\\SQL\\Compiler' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler.php',
        'Opis\\Database\\SQL\\Compiler\\DB2' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/DB2.php',
        'Opis\\Database\\SQL\\Compiler\\Firebird' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/Firebird.php',
        'Opis\\Database\\SQL\\Compiler\\MySQL' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/MySQL.php',
        'Opis\\Database\\SQL\\Compiler\\NuoDB' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/NuoDB.php',
        'Opis\\Database\\SQL\\Compiler\\Oracle' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/Oracle.php',
        'Opis\\Database\\SQL\\Compiler\\SQLServer' => __DIR__ . '/..' . '/opis/database/src/SQL/Compiler/SQLServer.php',
        'Opis\\Database\\SQL\\Delete' => __DIR__ . '/..' . '/opis/database/src/SQL/Delete.php',
        'Opis\\Database\\SQL\\DeleteStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/DeleteStatement.php',
        'Opis\\Database\\SQL\\Expression' => __DIR__ . '/..' . '/opis/database/src/SQL/Expression.php',
        'Opis\\Database\\SQL\\Having' => __DIR__ . '/..' . '/opis/database/src/SQL/Having.php',
        'Opis\\Database\\SQL\\HavingExpression' => __DIR__ . '/..' . '/opis/database/src/SQL/HavingExpression.php',
        'Opis\\Database\\SQL\\HavingStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/HavingStatement.php',
        'Opis\\Database\\SQL\\Insert' => __DIR__ . '/..' . '/opis/database/src/SQL/Insert.php',
        'Opis\\Database\\SQL\\InsertStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/InsertStatement.php',
        'Opis\\Database\\SQL\\Join' => __DIR__ . '/..' . '/opis/database/src/SQL/Join.php',
        'Opis\\Database\\SQL\\Query' => __DIR__ . '/..' . '/opis/database/src/SQL/Query.php',
        'Opis\\Database\\SQL\\SQLStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/SQLStatement.php',
        'Opis\\Database\\SQL\\Select' => __DIR__ . '/..' . '/opis/database/src/SQL/Select.php',
        'Opis\\Database\\SQL\\SelectStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/SelectStatement.php',
        'Opis\\Database\\SQL\\Subquery' => __DIR__ . '/..' . '/opis/database/src/SQL/Subquery.php',
        'Opis\\Database\\SQL\\Update' => __DIR__ . '/..' . '/opis/database/src/SQL/Update.php',
        'Opis\\Database\\SQL\\UpdateStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/UpdateStatement.php',
        'Opis\\Database\\SQL\\Where' => __DIR__ . '/..' . '/opis/database/src/SQL/Where.php',
        'Opis\\Database\\SQL\\WhereStatement' => __DIR__ . '/..' . '/opis/database/src/SQL/WhereStatement.php',
        'Opis\\Database\\Schema' => __DIR__ . '/..' . '/opis/database/src/Schema.php',
        'Opis\\Database\\Schema\\AlterColumn' => __DIR__ . '/..' . '/opis/database/src/Schema/AlterColumn.php',
        'Opis\\Database\\Schema\\AlterTable' => __DIR__ . '/..' . '/opis/database/src/Schema/AlterTable.php',
        'Opis\\Database\\Schema\\BaseColumn' => __DIR__ . '/..' . '/opis/database/src/Schema/BaseColumn.php',
        'Opis\\Database\\Schema\\Compiler' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler.php',
        'Opis\\Database\\Schema\\Compiler\\MySQL' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler/MySQL.php',
        'Opis\\Database\\Schema\\Compiler\\Oracle' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler/Oracle.php',
        'Opis\\Database\\Schema\\Compiler\\PostgreSQL' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler/PostgreSQL.php',
        'Opis\\Database\\Schema\\Compiler\\SQLServer' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler/SQLServer.php',
        'Opis\\Database\\Schema\\Compiler\\SQLite' => __DIR__ . '/..' . '/opis/database/src/Schema/Compiler/SQLite.php',
        'Opis\\Database\\Schema\\CreateColumn' => __DIR__ . '/..' . '/opis/database/src/Schema/CreateColumn.php',
        'Opis\\Database\\Schema\\CreateTable' => __DIR__ . '/..' . '/opis/database/src/Schema/CreateTable.php',
        'Opis\\Database\\Schema\\ForeignKey' => __DIR__ . '/..' . '/opis/database/src/Schema/ForeignKey.php',
        'Opis\\ORM\\Core\\DataMapper' => __DIR__ . '/..' . '/opis/orm/src/Core/DataMapper.php',
        'Opis\\ORM\\Core\\EntityMapper' => __DIR__ . '/..' . '/opis/orm/src/Core/EntityMapper.php',
        'Opis\\ORM\\Core\\EntityQuery' => __DIR__ . '/..' . '/opis/orm/src/Core/EntityQuery.php',
        'Opis\\ORM\\Core\\ForeignKey' => __DIR__ . '/..' . '/opis/orm/src/Core/ForeignKey.php',
        'Opis\\ORM\\Core\\Junction' => __DIR__ . '/..' . '/opis/orm/src/Core/Junction.php',
        'Opis\\ORM\\Core\\LazyLoader' => __DIR__ . '/..' . '/opis/orm/src/Core/LazyLoader.php',
        'Opis\\ORM\\Core\\PrimaryKey' => __DIR__ . '/..' . '/opis/orm/src/Core/PrimaryKey.php',
        'Opis\\ORM\\Core\\Proxy' => __DIR__ . '/..' . '/opis/orm/src/Core/Proxy.php',
        'Opis\\ORM\\Core\\Query' => __DIR__ . '/..' . '/opis/orm/src/Core/Query.php',
        'Opis\\ORM\\Core\\Relation' => __DIR__ . '/..' . '/opis/orm/src/Core/Relation.php',
        'Opis\\ORM\\Core\\RelationFactory' => __DIR__ . '/..' . '/opis/orm/src/Core/RelationFactory.php',
        'Opis\\ORM\\Entity' => __DIR__ . '/..' . '/opis/orm/src/Entity.php',
        'Opis\\ORM\\EntityManager' => __DIR__ . '/..' . '/opis/orm/src/EntityManager.php',
        'Opis\\ORM\\IDataMapper' => __DIR__ . '/..' . '/opis/orm/src/IDataMapper.php',
        'Opis\\ORM\\IEntityMapper' => __DIR__ . '/..' . '/opis/orm/src/IEntityMapper.php',
        'Opis\\ORM\\IMappableEntity' => __DIR__ . '/..' . '/opis/orm/src/IMappableEntity.php',
        'Opis\\ORM\\Relations\\BelongsTo' => __DIR__ . '/..' . '/opis/orm/src/Relations/BelongsTo.php',
        'Opis\\ORM\\Relations\\HasOneOrMany' => __DIR__ . '/..' . '/opis/orm/src/Relations/HasOneOrMany.php',
        'Opis\\ORM\\Relations\\ShareOneOrMany' => __DIR__ . '/..' . '/opis/orm/src/Relations/ShareOneOrMany.php',
        'Opis\\ORM\\Traits\\AggregateTrait' => __DIR__ . '/..' . '/opis/orm/src/Traits/AggregateTrait.php',
        'Opis\\ORM\\Traits\\LoaderTrait' => __DIR__ . '/..' . '/opis/orm/src/Traits/LoaderTrait.php',
        'Opis\\ORM\\Traits\\SelectTrait' => __DIR__ . '/..' . '/opis/orm/src/Traits/SelectTrait.php',
        'Opis\\ORM\\Traits\\SoftDeletesTrait' => __DIR__ . '/..' . '/opis/orm/src/Traits/SoftDeletesTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd728466e20aefd30fd2ee1557d006a9b::$classMap;

        }, null, ClassLoader::class);
    }
}
