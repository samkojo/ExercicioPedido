<?php

namespace Controller;
use Repository\PedidoRepository;
use Exceptions\PedidoException;

class PedidoController{

  private $pedidoRepository;

  function __construct(PedidoRepository $pedidoRepository){
    $this->pedidoRepository = $pedidoRepository;
  }

    public function getPedido(){

      try {
        $result_pedido = $this->pedidoRepository->getAll();

        foreach($result_pedido as $pedido) {
          $result[] = array(
            "idPedido"  => $pedido->idPedido,
            "idCliente" => $pedido->idCliente,
            "data"      => date("d/m/Y", strtotime($pedido->data)),
            "total"     => $pedido->total
          );
        }

        return $result;
      } catch (PedidoException $error) {
        echo("[LOG]: " . $error->getMessage(). "\n");
        return $error->getMessage();
      }
    }
}