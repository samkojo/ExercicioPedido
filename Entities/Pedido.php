<?php
class Pedido {

  $PedidoID;
  $DataHora;
  $ClienteID;
  $Total;
    
  public function select() {
    $array = array(
      array(
        "idPedido" => 1,
        "idCliente" => 1,
        "data" => '14/09/2020',
        "total" => 20.89
      )
      array(
        "idPedido" => 2,
        "idCliente" => 3,
        "data" => '15/09/2020',
        "total" => 20.89
      ) 
    )
  }
}