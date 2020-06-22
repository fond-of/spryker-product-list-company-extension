<?php

namespace FondOfSpryker\Zed\ProductListCompanyExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductListCompanyRelationTransfer;

interface ProductListCompanyPostSavePluginInterface
{
    /**
     * Specification:
     * - Plugin is triggered after product list company relation object is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductListCompanyRelationTransfer $productListCompanyRelationTransfer
     *
     * @return \Generated\Shared\Transfer\ProductListCompanyRelationTransfer
     */
    public function postSave(
        ProductListCompanyRelationTransfer $productListCompanyRelationTransfer
    ): ProductListCompanyRelationTransfer;
}
