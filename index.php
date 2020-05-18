<?php
require 'Pessoa.class.php';

$pessoa = new Pessoa('João', '10/02/1929');

echo $pessoa->getNome()." tem ".$pessoa->getIdade()." anos";