<?php
require("./Controller/PedidoController.php");
require("./Controller/ItemController.php");

$pedido_controller = new PedidoController();
foreach ( $pedido_controller as $pedido ) {
  echo "id : $pedido->idPedido";
}

echo $pedido_controller->getPedido();

$item_controller = new ItemController();
