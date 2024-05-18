<?php

// Função para filtrar os produtos pelo preço
function filterProductsByPrice($products, $maxPrice) {
    // Verifica validação dos dados de entrada
    if (!is_array($products) || empty($products)) {
        return "Entrada inválida";
    }
    // Filtrar produtos
    $filteredProducts = array_filter($products, function($product) use ($maxPrice) {
        return $product['price'] <= $maxPrice;
    });
    return $filteredProducts;
}

// Exemplo de entrada
$products = [
    ['id' => 1, 'name' => 'Caneta Azul', 'price' => 2.50],
    ['id' => 2, 'name' => 'Caderno de 10 Matérias', 'price' => 15.00],
    ['id' => 3, 'name' => 'Borracha', 'price' => 1.25],
    ['id' => 4, 'name' => 'Estojo para Lápis', 'price' => 25.00]
];

// Bloco de código para testar a função
$maxPrice = 10.00;
$filteredProducts = filterProductsByPrice($products, $maxPrice);

// Resultado
print_r($filteredProducts);

?>
