<?php

/**
 * Gets a product from a products array, using the given ID
 *
 * @param integer $id Product's ID
 * @param array $products Products collection
 * @return array|null Associative array representing found product, null if not found
 */
function getProduct(int $id, array $products): ?array
{
    $productsIds = array_column($products, 'id');
    $productKey = array_search($id, $productsIds);

    if ($productKey === false) {
        return null;
    }

    return $products[$productKey];
}
