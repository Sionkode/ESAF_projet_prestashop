<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.supplier.command_handler.set_product_default_supplier_handler' shared service.

return $this->services['prestashop.adapter.product.supplier.command_handler.set_product_default_supplier_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductDefaultSupplierHandler(($this->services['prestashop.adapter.product.update.product_supplier_updater'] ?? $this->load('getPrestashop_Adapter_Product_Update_ProductSupplierUpdaterService.php')));