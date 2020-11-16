<?php
namespace Tests\Controller;

use Entities\Pedido;
use Repository\PedidoRepository;
use Exceptions\PedidoException;

class FakePedidoRepository implements PedidoRepository{
  public $hasError;
  public $messageError;

  function __construct(){
    $this->hasError = false;
    $this->messageError = '';
  }

  function getAll(): array {
    if (!$this->hasError){
      $pedidos = [];
      array_push($pedidos, new Pedido(1, 1, '2020-09-14', 20.89));
      array_push($pedidos, new Pedido(2, 3, '2020-09-15', 50.45));

      return $pedidos;
    } else {
      throw new PedidoException($this->messageError);
    }
 }
  
  function getPedidoById(int $id): Pedido{
    
  }

  function addPedido(Pedido $pedido){
    
  }

}