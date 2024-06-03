<h3>Fornecedor</h3>

@forelse($fornecedores as $fornecedor)
  @if($loop->first) 
    Primeira Iteração do Loop <br>
  @endif

  @if($loop->last) 
    Última Iteração do Loop <br>
    Total de Registros = {{ $loop->count }}
    <br>
  @endif
  
  Iteração Atual:{{ $loop->iteration}}
  
  <br></br>
  Nome:
  {{ $fornecedor['nome'] }} <br>
  Status:
  {{ $fornecedor['status'] }} <br>
  Cnpj:
  {{ $fornecedor['cnpj'] ?? ''}} <br>
  Telefone:
  {{ $fornecedor['ddd'] }}    {{ $fornecedor['telefone'] }}  <br><br>
  @empty
    Não existem fornecedores cadastrados!!!
@endforelse