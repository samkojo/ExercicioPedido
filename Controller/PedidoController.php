<?php
require("./Model/pedido.php");

class PedidoController{

    public function getPedido(){
      $pedido_model = new PedidoModel();
      return json_encode($pedido_model->getAllPedidos());
    }

    public function addPedido(){

    }

    public function editPedido(){
        
    }

    public function deletePedido(){
        
    }

    protected function convertDate($data) {

      $result = [];

      foreach($data as $pedido) {
        $result[] = array(
          "idPedido"  => $pedido["idPedido"],
          "idCliente" => $pedido["idCliente"],
          "data"      => date("d/m/Y", strtotime($pedido["idCliente"])),
          "total"     => $pedido["total"]
        )
      }

      return $result;

    }
}