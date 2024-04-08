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
    // Je crée un nouveau tableau contenant uniquement les ID des produits
    // Je les isole :
    // [1, 2, 3, 4, 5, 6, ...]
    $productsIds = array_column($products, 'id');

    // Une fois que j'ai mon tableau d'ID, je cherche $id dedans
    $productKey = array_search($id, $productsIds);

    if ($productKey === false) {
        return null;
    }

    return $products[$productKey];
}
