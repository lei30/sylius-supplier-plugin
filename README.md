<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Supplier Plugin</h1>

Demo by [Sylius PluginSkeleton v1.3.0](https://github.com/Sylius/PluginSkeleton)

<p align="center">
    <a target="_blank" rel="noopener noreferrer" href="screenshot.png">
        <img src="screenshot.png" alt="Screenshot" style="max-width:100%;">
    </a>
</p>

### Install

* require package `$ composer require e3-lei/sylius-demo-supplier-plugin`
* add Plugin in the `app/AppKernel.php` with `new Lei\SyliusSupplierPlugin\SyliusSupplierPlugin(),`
* add configs

```yml
// app/config/routing.yml

sylius_supplier_plugin_admin:
    resource: "@SyliusSupplierPlugin/Resources/config/admin_routing.yml"
```

```yml
// app/config/config.yml

- { resource: "@SyliusSupplierPlugin/Resources/config/config.yml" }
```

* run migrations

```bash
$ php bin/console doctrine:migrations:diff -e dev
$ php bin/console doctrine:migrations:migrate -e dev
```

* cache clear `php bin/console cache:clear -e dev`