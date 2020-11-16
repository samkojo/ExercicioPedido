<?php
namespace Exceptions;

class PedidoException extends \Exception {  
  public function __construct($message) {
      parent::__construct($message);
  }
}
