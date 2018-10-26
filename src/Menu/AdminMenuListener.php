<?php

namespace Lei\SyliusSupplierPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{

    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('extra')
            ->setLabel('sylius_supplier_plugin.menu.admin.extra.main')
        ;

        $newSubmenu
            ->addChild('supplier', ['route' => 'sylius_supplier_plugin_admin_supplier_index'])
            ->setLabel('sylius_supplier_plugin.menu.admin.extra.supplier')
            ->setLabelAttribute('icon', 'star')
        ;
    }
}