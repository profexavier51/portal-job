<?php
return [

/*
|--------------------------------------------------------------------------
| Mensagens de Validação
|--------------------------------------------------------------------------
|
| As seguintes linhas de código contêm as mensagens de erro padrão utilizadas
| pela classe de validação. Algumas dessas regras têm várias versões, como
| as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas
| mensagens aqui.
|
*/

'accepted' => 'O campo deve ser aceito.',
'accepted_if' => 'O campo deve ser aceito quando outro é :value.',
'active_url' => 'O campo deve ser uma URL válida.',
'after' => 'O campo deve ser uma data após :date.',
'after_or_equal' => 'O campo deve ser uma data após ou igual a :date.',
'alpha' => 'O campo deve conter apenas letras.',
'alpha_dash' => 'O campo deve conter apenas letras, números, traços e sublinhados.',
'alpha_num' => 'O campo deve conter apenas letras e números.',
'array' => 'O campo deve ser um array.',
'ascii' => 'O campo deve conter apenas caracteres alfanuméricos e símbolos.',
'before' => 'O campo deve ser uma data antes de :date.',
'before_or_equal' => 'O campo deve ser uma data antes ou igual a :date.',
'between' => [
    'array' => 'O campo deve ter entre :min e :max itens.',
    'file' => 'O campo deve ter entre :min e :max kilobytes.',
    'numeric' => 'O campo deve ter entre :min e :max.',
    'string' => 'O campo deve ter entre :min e :max caracteres.',
],
'boolean' => 'O campo deve ser verdadeiro ou falso.',
'can' => 'O campo contém um valor não autorizado.',
'confirmed' => 'A confirmação do campo não corresponde.',
'current_password' => 'A senha está incorreta.',
'date' => 'O campo deve ser uma data válida.',
'date_equals' => 'O campo deve ser uma data igual a :date.',
'date_format' => 'O campo deve corresponder ao formato :format.',
'decimal' => 'O campo deve ter :decimal casas decimais.',
'declined' => 'O campo deve ser recusado.',
'declined_if' => 'O campo deve ser recusado quando outro é :value.',
'different' => 'O campo e outro devem ser diferentes.',
'digits' => 'O campo deve ter :digits dígitos.',
'digits_between' => 'O campo deve ter entre :min e :max dígitos.',
'dimensions' => 'O campo tem dimensões de imagem inválidas.',
'distinct' => 'O campo tem um valor duplicado.',
'doesnt_end_with' => 'O campo não deve terminar com um dos seguintes valores: :values.',
'doesnt_start_with' => 'O campo não deve começar com um dos seguintes valores: :values.',
'email' => 'O campo deve ser um endereço de e-mail válido.',
'ends_with' => 'O campo deve terminar com um dos seguintes valores: :values.',
'enum' => 'O campo selecionado é inválido.',
'exists' => 'O campo selecionado é inválido.',
'extensions' => 'O campo deve ter uma das seguintes extensões: :values.',
'file' => 'O campo deve ser um arquivo.',
'filled' => 'O campo deve ter um valor.',
'gt' => [
    'array' => 'O campo deve ter mais de :value itens.',
    'file' => 'O campo deve ter mais de :value kilobytes.',
    'numeric' => 'O campo deve ser maior que :value.',
    'string' => 'O campo deve ser maior que :value caracteres.',
],
'gte' => [
    'array' => 'O campo deve ter :value itens ou mais.',
    'file' => 'O campo deve ter :value kilobytes ou mais.',
    'numeric' => 'O campo deve ser maior ou igual a :value.',
    'string' => 'O campo deve ser maior ou igual a :value caracteres.',
],
'hex_color' => 'O campo deve ser uma cor hexadecimal válida.',
'image' => 'O campo deve ser uma imagem.',
'in' => 'O campo selecionado é inválido.',
'in_array' => 'O campo deve existir em outro.',
'integer' => 'O campo deve ser um número inteiro.',
'ip' => 'O campo deve ser um endereço IP válido.',
'ipv4' => 'O campo deve ser um endereço IPv4 válido.',
'ipv6' => 'O campo deve ser um endereço IPv6 válido.',
'json' => 'O campo deve ser uma string JSON válida.',
'lowercase' => 'O campo deve ser em minúsculas.',
'lt' => [
    'array' => 'O campo deve ter menos de :value itens.',
    'file' => 'O campo deve ter menos de :value kilobytes.',
    'numeric' => 'O campo deve ser menor que :value.',
    'string' => 'O campo deve ser menor que :value caracteres.',
],
'lte' => [
    'array' => 'O campo não deve ter mais de :value itens.',
    'file' => 'O campo não deve ter mais de :value kilobytes.',
    'numeric' => 'O campo deve ser menor ou igual a :value.',
    'string' => 'O campo deve ser menor ou igual a :value caracteres.',
],
'mac_address' => 'O campo deve ser um endereço MAC válido.',
'max' => [
    'array' => 'O campo não deve ter mais de :max itens.',
    'file' => 'O campo não deve ter mais de :max kilobytes.',
    'numeric' => 'O campo não deve ser maior que :max.',
    'string' => 'O campo não deve ter mais de :max caracteres.',
],
'max_digits' => 'O campo não deve ter mais de :max dígitos.',
'mimes' => 'O campo deve ser um arquivo do tipo: :values.',
'mimetypes' => 'O campo deve ser um arquivo do tipo: :values.',
'min' => [
    'array' => 'O campo deve ter pelo menos :min itens.',
    'file' => 'O campo deve ter pelo menos :min kilobytes.',
    'numeric' => 'O campo deve ser pelo menos :min.',
    'string' => 'O campo deve ter pelo menos :min caracteres.',
],
'min_digits' => 'O campo deve ter pelo menos :min dígitos.',
'missing' => 'O campo deve estar faltando.',
'missing_if' => 'O campo deve estar faltando quando outro é :value.',
'missing_unless' => 'O campo deve estar faltando a menos que outro seja :value.',
'missing_with' => 'O campo deve estar faltando quando outro estiver presente.',
'missing_with_all' => 'O campo deve estar faltando quando todos os outros estiverem presentes.',
'multiple_of' => 'O campo deve ser múltiplo de :value.',
'not_in' => 'O campo selecionado é inválido.',
'not_regex' => 'O campo tem um formato inválido.',
'numeric' => 'O campo deve ser um número.',
'password' => [
    'letters' => 'O campo deve conter pelo menos uma letra.',
    'mixed' => 'O campo deve conter pelo menos uma letra maiúscula e uma letra minúscula.',
    'numbers' => 'O campo deve conter pelo menos um número.',
    'symbols' => 'O campo deve conter pelo menos um símbolo.',
    'uncompromised' => 'O campo fornecido já foi comprometido. Por favor, escolha outro.',
],
'present' => 'O campo deve estar presente.',
'present_if' => 'O campo deve estar presente quando outro é :value.',
'present_unless' => 'O campo deve estar presente a menos que outro seja :value.',
'present_with' => 'O campo deve estar presente quando outro estiver presente.',
'present_with_all' => 'O campo deve estar presente quando todos os outros estiverem presentes.',
'prohibited' => 'O campo está proibido.',
'prohibited_if' => 'O campo está proibido quando outro é :value.',
'prohibited_unless' => 'O campo está proibido a menos que outro seja em :values.',
'prohibits' => 'O campo proíbe que outro esteja presente.',
'regex' => 'O campo tem um formato inválido.',
'required' => 'O campo é obrigatório.',
'required_array_keys' => 'O campo deve conter entradas para: :values.',
'required_if' => 'O campo é obrigatório quando outro é :value.',
'required_if_accepted' => 'O campo é obrigatório quando outro é aceito.',
'required_unless' => 'O campo é obrigatório a menos que outro seja em :values.',
'required_with' => 'O campo é obrigatório quando outro estiver presente.',
'required_with_all' => 'O campo é obrigatório quando todos os outros estiverem presentes.',
'required_without' => 'O campo é obrigatório quando outro não estiver presente.',
'required_without_all' => 'O campo é obrigatório quando nenhum dos outros estiver presente.',
'same' => 'O campo deve corresponder a outro.',
'size' => [
    'array' => 'O campo deve conter :size itens.',
    'file' => 'O campo deve ter :size kilobytes.',
    'numeric' => 'O campo deve ser :size.',
    'string' => 'O campo deve ter :size caracteres.',
],
'starts_with' => 'O campo deve começar com um dos seguintes valores: :values.',
'string' => 'O campo deve ser uma string.',
'timezone' => 'O campo deve ser uma zona horária válida.',
'unique' => 'O campo já está em uso.',
'uploaded' => 'O campo não foi carregado com sucesso.',
'uppercase' => 'O campo deve ser em maiúsculas.',
'url' => 'O campo deve ser uma URL válida.',
'ulid' => 'O campo deve ser um ULID válido.',
'uuid' => 'O campo deve ser um UUID válido.',

/*
|--------------------------------------------------------------------------
| Mensagens de Validação Personalizadas
|--------------------------------------------------------------------------
|
| Aqui você pode especificar mensagens de validação personalizadas para
| atributos usando a convenção "atributo.regra" para nomear as linhas.
| Isso permite que você especifique uma mensagem de validação personalizada
| para um atributo específico e regra.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'mensagem personalizada',
    ],
],

/*
|--------------------------------------------------------------------------
| Atributos Personalizados
|--------------------------------------------------------------------------
|
| As seguintes linhas de código são usadas para substituir o placeholder
| de atributo por algo mais legível, como "Endereço de E-mail" em vez de
| "email". Isso simplesmente ajuda a tornar nossas mensagens mais expressivas.
|
*/

'attributes' => [],

];
