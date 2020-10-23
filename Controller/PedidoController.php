<?php
require("./Model/pedido.php");

class PedidoController{

    public function getPedido(){
      $pedido_model = new PedidoModel();
      $result_pedido = $pedido_model->getAllPedidos();

      foreach($result_pedido as $pedido) {
        $result[] = array(
          "idPedido"  => $pedido->idPedido,
          "idCliente" => $pedido->idCliente,
          "data"      => date("d/m/Y", strtotime($pedido->data)),
          "total"     => $pedido->total
        );
      }

      return json_encode($result);
    }
}