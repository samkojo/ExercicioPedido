<?php

namespace Repository;
use Entities\Pedido;
use Model\PedidoModel;

class DBPedidoRepository implements PedidoRepository{
  function getAll(): array {
    $pedido_model = new PedidoModel();
    return $pedido_model->getAllPedidos();
  }
  
  function getPedidoById(int $id): Pedido{
    
  }

  function addPedido(Pedido $pedido){
    
  }

}