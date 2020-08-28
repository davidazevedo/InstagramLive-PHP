[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=davidazevedo_InstagramLive-PHP&metric=alert_status)](https://sonarcloud.io/dashboard?id=davidazevedo_InstagramLive-PHP)

# InstagramLive-PHP
Um script PHP que permite que você entre no Instagram com qualquer programa de streaming compatível com RTMP!

# Nota
Isso foi testado apenas no Windows, não tenho idéia se isso funciona em sistemas baseados em UNIX. Sinta-se livre para tentar!

Além disso, eu só testei isso no OBS. Então eu recomendo usá-lo

# Configuração
Se você estiver executando isso após a primeira instalação, trabalhe a partir da etapa seis em ...

1. Instale o PHP: (https://windows.php.net/download#php-7.2)
2. [Install Composer] (https://getcomposer.org/download/)
3. Clone o Repositório ou Baixe o arquivo e descompate (https://github.com/davidazevedo/InstagramLive-PHP/archive/master.zip)
4. Execute ```composer require adrifkat/instagram-api react/child-process``` na pasta clonada
5. Edite o nome de usuário e a senha dentro de `config.php` com os detalhes do instagram
6. Execute o script `goLive.php`. (`php -f goLive.php`)
7. Copie seu Stream-URL e Stream-Key e cole-os no seu software de streaming. [Consulte OBS-Setup](https://github.com/davidazevedo/InstagramLive-PHP#obs-setup)

# OBS-Setup
1. Vá para a seção "Stream" das configurações do OBS
2. Defina "Tipo de fluxo" como "Servidor de fluxo personalizado"
3. Defina o campo "URL" como o URL do fluxo que você obteve do script
4. Defina o campo "Chave de fluxo" como a chave de fluxo que você obteve do script
5. Certifique-se de que "Usar autenticação" esteja ** desmarcado ** e pressione "OK"
6. Inicie a transmissão no OBS
7. Para interromper o streaming, execute o comando "stop" no seu terminal e pressione "Stop Streaming" no OBS
* Observação: para emular o conteúdo exato que está sendo enviado ao Instagram, defina o tamanho da tela do OBS para 720x1280. Isso pode ser feito em Ajustes-> Vídeo e editando a Resolução da Tela Base para "720x1280".

# PERGUNTAS FREQUENTES
#### OBS fornece um erro "Falha ao conectar"
Isso ocorre principalmente devido a uma chave de fluxo inválida: a chave de fluxo muda ** toda vez que você inicia um novo fluxo, portanto, ele deve ser substituído no OBS toda vez.
Parei de transmitir, mas o Instagram ainda me mostra ao vivo
Isso ocorre porque você não está executando o comando "stop" dentro do script. Você não pode simplesmente fechar a janela de comando para fazer o Instagram parar de transmitir, você deve executar o comando stop no script. Se você * fecha * a janela de comando, no entanto, inicie-a novamente e execute o comando stop, isso deve impedir que o Instagram seja listado no conteúdo ao vivo.

#### Recebo um erro dentro do Instagram ao arquivar minha história
Isso geralmente ocorre devido ao arquivamento de um fluxo que não tinha conteúdo (vídeo). Basta excluir o arquivo e continuar com o seu dia.

# Doação
Se quiser doar, faça pelo mercado pago: http://mpago.la/1p6zyw
