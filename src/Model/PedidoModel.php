<?php
namespace Model;

use Entities\Pedido;
use Exceptions\DBConnectionException;

class PedidoModel {

  function getAllPedidos(){
    // throw new DBConnectionException("Falha ao conectar no banco");
    $pedidos = array();

    array_push($pedidos, new Pedido(1, 1, '2020-09-14', 20.89));

    array_push($pedidos, new Pedido(2, 3, '2020-09-15', 50.45));

    return $pedidos;
  }
}