<?php
require("./Model/item.php");

class ItemController{
    public function getItens($pedido_id){
      $controller = new Item();
      return $controller->getItemByPedido($pedido_id);
    }
}