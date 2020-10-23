<?php
// namespace Entities\Item;
  class Item {
    // $PedidoID;
    // $ItemID;
    // $ProdutoID;
    // $Quantidade;
    // $ValorUnitario;
        
  public function select() {
    $array = array(
      array(
        "idPedido" => 1,
        "idItem" => 1,
        "idProduto" => '1',
        "quantidade" => 2,
        "valor_unitario" => 21.50
      ),
      array(
        "idPedido" => 1,
        "idItem" => 1,
        "idProduto" => '1',
        "quantidade" => 2,
        "valor_unitario" => 20.89
      ),
      array(
        "idPedido" => 2,
        "idItem" => 1,
        "idProduto" => '1',
        "quantidade" => 2,
        "valor_unitario" => 20.89
      )
    );

    return $array;
  }
}