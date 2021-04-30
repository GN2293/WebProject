<?php
trait Game{
  function play() {
    echo "Playing a game";
  }
}
trait Music{
  function play() {
    echo "Playing music";
  }
}

class Player{
  use Game, Music{
    //將 Game 的 play 別名成 gamePlay
    Game::play as gamePlay;
    //使用 Music 的 play 功能，取消 Game 的 play 功能！
    Music::play insteadof Game;
  }
}
$player = new Player();
$player->play();
$player->gamePlay();
?>