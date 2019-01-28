<?php

require_once __DIR__ . '/bootstrap.php';

$productRepository = $entityManager->getRepository('Product');
/** @var Product[] $products */
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}