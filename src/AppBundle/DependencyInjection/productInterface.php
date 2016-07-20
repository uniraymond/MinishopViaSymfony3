<?php
/**
 * Created by PhpStorm.
 * User: raymond
 * Date: 20/07/16
 * Time: 10:51 PM
 */

Interface iProduct
{
  public function listProducts();

  public function showProduct($productId);

  public function createProduct();

  public function deleteProduct($productId);
}