<?php
namespace Repository;

use Entities\Pedido;
use Model\PedidoModel;
use Exceptions\DBConnectionException;
use Exceptions\PedidoException;

class DBPedidoRepository implements PedidoRepository{
  function getAll(): array {
    try {
      $pedido_model = new PedidoModel();
      return $pedido_model->getAllPedidos();
    } catch(DBConnectionException $error) {
      throw new PedidoException("Falha ao recuperar pedidos");
    }
 }
  
  function getPedidoById(int $id): Pedido{
    
  }

  function addPedido(Pedido $pedido){
    
  }

}