Symfony 3.4 + FosUserbundle + EasyAdminBundle + vichuploaderbundle
Para iniciar el server ejecutar en consola: php bin/console server:run

ingresar al admin con /admin

Notas: Al hacer el pull por primera vez ejecutar por consola: - php bin/console assets:install --symlink (links simbolicos de cssy js) - php bin/console doctrine:schema:update --force (para configurar base de datos)

Referencias:

Symfony: https://symfony.com/doc/3.4/setup.html

EasyAdminBundle: instalación: https://symfony.com/doc/master/bundles/EasyAdminBundle/index.html

vichuploaderbundle: Instalación: https://symfony.com/doc/master/bundles/EasyAdminBundle/integration/vichuploaderbundle.html