<?php
$num = 30;
?>

{{ "Exemplo de estrutura condicional" }}

@if($num < 20)
    <p>Número é menor que vinte</p>
@elseif($num == 20)
    <p>Número é igual a vinte</p>
@else
    <p>Número é maior que vinte</p>
@endif

{{ "Exemplo de estrutura de repetição com for" }}

@for($i = 0; $i < 10; $i++)
    <p>Valor for: {{ $i }}</p>
@endfor

{{ "Exemplo de estrutura de repetição com while" }}

<?php
$k = 0;
?>

@while($k < 15)
    <p>Valor while: {{ $k }}</p>
    <?php $k++; ?>
@endwhile

{{ "FOREACH" }}

<?php
$array = [1,2,3,4,5];
?>

@foreach($array as $value)
    <p>Chave {{ $loop->index }}, Valor foreach: {{ $value }}</p>
@endforeach

<?php
$array = [];
?>

@forelse($array as $value)
    <p>Chave {{ $loop->index }}, Valor foreach: {{ $value }}</p>
@empty
    <p>Nenhum elemento no array</p>
@endforelse

