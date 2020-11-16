<?php
namespace Entities;

class Item {
  public $idPedido;
  public $idItem;
  public $idProduto;
  public $quantidade;
  public $valorUnitario;

  function __construct($idPedido, $idItem, $idProduto, $quantidade, $valorUnitario) {
      $this->idPedido = $idPedido;
      $this->idItem = $idItem;
      $this->idProduto = $idProduto;
      $this->quantidade = $quantidade;
      $this->valorUnitario = $valorUnitario;
  }
}