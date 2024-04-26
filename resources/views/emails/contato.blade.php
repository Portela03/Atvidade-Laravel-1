<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

<div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px;">
    <h2 style="color: #333333;">Nova mensagem de contato</h2>
    <hr style="border: 0; border-top: 1px solid #dddddd; margin: 20px 0;">
    <p><strong style="color: #333333;">Nome:</strong> {{ $nome }}</p>
    <p><strong style="color: #333333;">E-mail:</strong> {{ $email }}</p>
    <p><strong style="color: #333333;">Telefone:</strong> {{ $telefone }}</p>
    <p><strong style="color: #333333;">Mensagem:</strong></p>
    <p style="color: #333333;">{{ $mensagem }}</p>
</div>

</body>
</html>
