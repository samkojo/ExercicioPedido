<?php declare(strict_types=1);
namespace Tests\Controller;

use PHPUnit\Framework\TestCase;
use Controller\PedidoController;
// use Tests\Controller\FakePedidoRepository;
require("./tests/Controller/FakePedidoRepository.php");

final class PedidoControllerTest extends TestCase{
  /** @test */
  public function dadoGetpedido_QuandoTiverPedidos_EntaoRetornarPedidos(){
    //Dado
    $arrayExpected = [
      [
        'idPedido' => 1,
        'idCliente' => 1,
        'data' => '14/09/2020',
        'total' => 20.89,
      ],
      [
        'idPedido' => 2,
        'idCliente' => 3,
        'data' => '15/09/2020',
        'total' => 50.45,
      ]
    ];

    $fakePedidos = new FakePedidoRepository();
    $pedidoController = new PedidoController($fakePedidos);

    //Quando
    $arrayPedidos = $pedidoController->getPedido();

    //Então
    $this->assertEquals($arrayExpected,$arrayPedidos);
  }

  /** @test */
  public function dadoGetpedido_QuandoReceberPedidoException_EntaoRetornarMensagemErro(){
    //Dado
    $fakePedidos = new FakePedidoRepository();
    $fakePedidos->hasError = true;
    $fakePedidos->messageError = 'Fake Error Message';
    $expected = 'Fake Error Message';

    $pedidoController = new PedidoController($fakePedidos);

    //Quando
    $ErrorMessage = $pedidoController->getPedido();

    //Então
    $this->assertEquals($expected,$ErrorMessage);
  }
}