<?php
namespace Exceptions;

class DBConnectionException extends \Exception {  
  public function __construct($message) {
      parent::__construct($message);
  }
}
