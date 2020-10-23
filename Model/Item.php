<?php
require('./Entities/Item.php');

class ItemModel {
  function getItemByPedido($id_pedido){
    $all = $this->select();
    $itens = array();

    foreach($all as $item){
      if($item->idPedido == $id_pedido) {
        array_push($itens, $item);
      }
    }

    return $itens;
  }
  
  private function select() {
    $itens = array();

    array_push($itens, new Item(1, 1, 1, 2, 22));
    array_push($itens, new Item(1, 2, 2, 2, 15.50));
    array_push($itens, new Item(1, 3, 3, 2, 50.60));
    array_push($itens, new Item(2, 4, 1, 2, 20.89));
    array_push($itens, new Item(2, 5, 3, 1, 50.60));
    array_push($itens, new Item(3, 6, 1, 1, 22));

    return $itens;
  }
}