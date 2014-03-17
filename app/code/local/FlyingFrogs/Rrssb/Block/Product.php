<?php
/**
 * RRSSB Product Block
 */
?>
<?php

class FlyingFrogs_Rrssb_Block_Product extends Mage_Core_Block_Template {
  public $product = null;
  public function _construct() {
    $this->product = Mage::registry('current_product');
  }

  public function getShareSubject() {
    return urlencode($this->product->getName());
  }

  public function getShareMedia() {
    return urlencode((string)Mage::helper('catalog/image')->init($this->product, 'image'));
  }

  public function getShareUrl() {
    return urlencode($this->product->getProductUrl());
  }
  
}

?>