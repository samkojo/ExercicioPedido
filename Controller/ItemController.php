<?php
require("./Model/Item.php");

class ItemController{
    public function getItens($pedido_id){
      $item_model = new ItemModel();
      $itens = $item_model->getItemByPedido($pedido_id);
      return json_encode($itens);
    }
}