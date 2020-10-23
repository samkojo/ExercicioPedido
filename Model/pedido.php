<?php
require('./Entities/Pedido.php');

class PedidoModel {

  function getAllPedidos(){
    $pedido = new Pedido();
    return $pedido->select();
  }

}