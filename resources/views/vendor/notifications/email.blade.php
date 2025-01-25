@component('mail::message')
# Olá!

Você está recebendo este e-mail porque recebemos uma solicitação para redefinir a senha da sua conta.

Este link de redefinição de senha irá expirar em 60 minutos.

Caso você não tenha solicitado a redefinição de senha, nenhuma ação é necessária.

Atenciosamente,
{{ config('app.name') }}

@component('mail::button', ['url' => $actionUrl])
Redefinir Senha
@endcomponent

Se você estiver com problemas para clicar no botão "Redefinir Senha", copie e cole o URL abaixo no seu navegador:
[{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
