<h3>Fornecedor</h3>

{{-- @dd($fornecedores) --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10) 
<h3>Existem alguns fornecedores cadastrados!</h3>
@elseif(count($fornecedores) > 10)
<h3>Existem vários fornecedores cadastrados!</h3>
@else 
 <h3>Ainda não existem fonrecedores cadastrados</h3> 
@endif --}}

{{-- unless executa se o retorno for false --}}

{{-- @unless --}}
{{-- 
Fornecedor: {{ $fornecedores[0]['nome']}} 
<br>
Status: {{ $fornecedores[0]['status']}} 
<br>

@if($fornecedores[0]['status'] == 'N') 
 Fornecedor Inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- Executa se a condição for false-->
Fornecedor Inativo
<br>
@endunless --}}

@isset($fornecedores)
  Fornecedor: {{ $fornecedores[1]['nome']}} <br>
  Status: {{ $fornecedores[1]['status']}} <br>
  @isset($fornecedores[1]['cnpj'])
    Cnpj: {{ $fornecedores[1]['cnpj'] }} <br>
    @empty($fornecedores[1]['cnpj'])
      - Vazio
    @endempty
  @endisset
@endisset