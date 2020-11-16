<?php
// require("./Controller/PedidoController.php");
// require("./Controller/ItemController.php");
// require("./Repository/DBPedidoRepository.php");
require_once 'autoload.php';

use Controller\PedidoController;
use Repository\DBPedidoRepository;

$pedido_controller = new PedidoController(new DBPedidoRepository());
$pedido = $pedido_controller->getPedido();

if(is_array($pedido)) {
  foreach($pedido as $data) {
    echo "id:" .$data['idPedido']. "\n";
    echo "Data:" .$data['data']. "\n";
    echo "Total:" .$data['total']. "\n\n";
  }
} else{
  echo($pedido);
}

// echo ("-------------------------------------------\n\n");

// $item_controller = new ItemController();
// $itens = $item_controller->getItens(1);

// echo "Lista Itens: Pedido 1\n\n";

// foreach(json_decode($itens, true) as $item) {
//   echo "ID:" .$item['idItem']. "\n";
//   echo "Produto:" .$item['idProduto']. "\n";
//   echo "Quantidade:" .$item['quantidade']. "\n";
//   echo "Valor Unitário:" .$item['valorUnitario']. "\n\n";
// }
