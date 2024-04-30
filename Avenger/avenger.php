<?php
require('avenger-classiAstratte.php');
require('Armatura.php');
require('AttaccoConMartello.php');
require('AttaccoConScudo.php');
require('Martello.php');
require('RaggioPropulsore.php');
require('Scudo.php');
require('creaAvenger.php');
require('Pugno.php');
require('SuperForza.php');






$ironman = new Avenger(new RaggioPropulsore, new Armatura);
$thor = new Avenger(new AttaccoConMartello, new Martello);
$capAmerica= new Avenger(new AttaccoConScudo,new Scudo);
$hulk= new Avenger(new Pugno,new SuperForza);
/* $ironman->accessori->equipaggio();
$thor->accessori->equipaggio(); */

/* $ironman->attacco->attaccaIlNemico();
$thor->attacco->attaccaIlNemico(); */
Avenger::contaAvenger();

$hulk->accessori();
$ironman->accessori();
$thor->accessori();
$capAmerica->accessori();
$capAmerica->attacca();
$thor->attacca();
$hulk->attacca();
$ironman->attacca();
