<?php
trait Message {
  function alert() {
    echo $this->message;
  }
}
class Messenger {
  use Message;
  private $message = "This is a message";
}

$messenger = new Messenger;
$messenger->alert(); //This is a message
?>