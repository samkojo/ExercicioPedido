<?php
class Pedido {
  public function select() {
    $array = array(
      array(
        "idPedido" => 1,
        "idCliente" => 1,
        "data" => '2020-09-14',
        "total" => 20.89
      ),
      array(
        "idPedido" => 2,
        "idCliente" => 3,
        "data" => '2020-09-15',
        "total" => 20.89
      ) 
    );
    return $array;
  }
}