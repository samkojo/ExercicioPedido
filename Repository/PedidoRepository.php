<?php
namespace Repository;
use Entities\Pedido;

interface PedidoRepository {
  function getAll(): array;
  
  function getPedidoById(int $id): Pedido;

  function addPedido(Pedido $pedido);
}