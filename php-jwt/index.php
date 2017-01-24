<?php

//DEFININDO INFORMAÇÕES

//header
$cabecalho = [
  'alg' => 'HS256',
  'typ'=> 'JWT'
];

//payload
$corpoDaInformacao = [
  'first_name' => 'Estevam',
  'last_name'  => 'Rodrigues',
  'email'      => 'estevam.mrodrigues@gmail.com'
];

$cabecalho = json_encode($cabecalho);
$corpoDaInformacao = json_encode($corpoDaInformacao);

echo "Cabecalho JSON: $cabecalho";
echo "\n";
echo "Corpo da informacao JSON: $corpoDaInformacao";
echo "\n\n";

//TRANSFORMAR EM BASE64

$cabecalho = base64_encode($cabecalho);
$corpoDaInformacao = base64_encode($corpoDaInformacao);

echo "Cabecalho BASE64: $cabecalho";
echo "\n";
echo "Corpo da informacao BASE64: $corpoDaInformacao";
echo "\n\n";

echo base64_decode($cabecalho) . " ". base64_decode($corpoDaInformacao);
echo "\n\n";

$chave = 'd54s56d4s65d4sd65s4d65s4d54d8ws4dwf84sg8d4h8gk4gj8%$545@@@5454';

//GERAR ASSINATURA

$assinatura = hash_hmac('sha256', $cabecalho.'.'.$corpoDaInformacao, $chave, true);

echo "Assinatura: $assinatura";
echo "\n";
$assinatura = base64_encode($assinatura);
echo "Assinatura base64: $assinatura";
echo "\n\n";

//CRIAR TOKEN
echo $cabecalho . '.' . $corpoDaInformacao . '.' . $assinatura;