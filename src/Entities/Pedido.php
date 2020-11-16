<?php
namespace Entities;

class Pedido {
  public $idPedido;
  public $idCliente;
  public $data;
  public $total;

  function __construct($idPedido, $idCliente, $data, $total) {
    $this->idPedido = $idPedido;
    $this->idCliente = $idCliente;
    $this->data = $data;
    $this->total = $total;
  }
}