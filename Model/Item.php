<?php
require('./Entities/Item.php');

class ItemModel {
  function getItemByPedido($id_pedido){
    $item = new Item();
    $lista_itens = $this->_group_by($item->select(), "idPedido");
    return $lista_itens[$id_pedido];
  }

  private function _group_by($array, $key) {
    $return = array();
    foreach($array as $val) {
        $return[$val[$key]][] = $val;
    }
    return $return;
  }
}