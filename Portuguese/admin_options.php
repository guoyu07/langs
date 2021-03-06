<?php

// Language definitions used in admin-options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'HTTP_REFERER mau. Se voc&#234; moveu este f&#243;rum para um novo servidor ou alterou o dom&#237;nio, precisa actualizar a URL Base manualmente na base de dados (procure por o_base_url na tabela config) e ent&#227;o limpe a cache excluindo todos os ficheiros .php da pasta /cache.',
'Must enter title message'			=>	'Voc&#234; deve definir um t&#237;tulo para o f&#243;rum.',
'Invalid e-mail message'			=>	'O endere&#231;o de e-mail de administrador que digitou &#233; inv&#225;lido.',
'Invalid webmaster e-mail message'	=>	'O endere&#231;o de e-mail de webmaster que digitou &#233; inv&#225;lido.',
'SMTP passwords did not match'		=>	'Voc&#234; deve digitar a senha SMTP duas vezes exactamente iguais para alter&#225;-la.',
'Enter announcement here'			=>	'Digite o seu an&#250;ncio aqui.',
'Enter rules here'					=>	'Digite as suas regras aqui.',
'Default maintenance message'		=>	'O f&#243;rum est&#225; temporariamente desactivado para manuten&#231;&#227;o. Por favor, tente novamente daqui alguns minutos.',
'Timeout error message'				=>	'O valor de "Tempo limite online" deve ser menor que o valor de "Tempo limite de visita".',
'Options updated redirect'			=>	'Op&#231;&#245;es actualizadas. Redireccionando &#8230;',
'Options head'						=>	'Op&#231;&#245;es',

// Essentials section
'Essentials subhead'				=>	'Essenciais',
'Board title label'					=>	'T&#237;tulo do f&#243;rum',
'Board title help'					=>	'O t&#237;tulo deste f&#243;rum (exibido no topo de todas as p&#225;ginas). Este campo <strong>n&#227;o</strong> pode conter HTML.',
'Board desc label'					=>	'Descri&#231;&#227;o do f&#243;rum',
'Board desc help'					=>	'Uma breve descri&#231;&#227;o deste f&#243;rum (exibido no topo de todas as p&#225;ginas). Este campo pode conter HTML.',
'Base URL label'					=>	'URL Base',
'Base URL help'						=>	'A URL completa do f&#243;rum sem a barra final (ex. http://www.meudominio.pt/forum). Isto <strong>deve</strong> estar correcto para que todas as fun&#231;&#245;es de administra&#231;&#227;o e modera&#231;&#227;o funcionem. Se voc&#234; vir erros "M&#225; refer&#234;ncia", &#233; prov&#225;vel que esteja incorrecto.',
'Timezone label'					=>	'Fuso hor&#225;rio padr&#227;o',
'Timezone help'						=>	'O fuso hor&#225;rio padr&#227;o para usu&#225;rios e visitantes tentando registar-se no f&#243;rum.',
'DST label'							=>	'Ajuste de Hor&#225;rio de Ver&#227;o',
'DST help'							=>	'Active caso o hor&#225;rio de ver&#227;o esteja em efeito (avan&#231;a o hor&#225;rio em 1 hora).',
'Language label'					=>	'Idioma padr&#227;o',
'Language help'						=>	'O idioma padr&#227;o para visitantes e usu&#225;rios que n&#227;o alteraram o ajuste padr&#227;o no seu perfil. Se remover um pacote de idioma, isto precisa de ser actualizado.',
'Default style label'				=>	'Estilo padr&#227;o',
'Default style help'				=>	'O estilo padr&#227;o para visitantes e usu&#225;rios que n&#227;o alteraram o ajuste padr&#227;o no seu perfil.',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) Linha dedata Internacional do Oeste',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Ilhas Cook',
'UTC-09:30'							=>	'(UTC-09:30) Arquip&#233;lago das Marquesas',
'UTC-09:00'							=>	'(UTC-09:00) Alasca',
'UTC-08:30'							=>	'(UTC-08:30) Ilhas Pitcairn',
'UTC-08:00'							=>	'(UTC-08:00) Pac&#237;fico',
'UTC-07:00'							=>	'(UTC-07:00) Montanha',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Oriental',
'UTC-04:00'							=>	'(UTC-04:00) Atl&#226;ntico',
'UTC-03:30'							=>	'(UTC-03:30) Terra Nova',
'UTC-03:00'							=>	'(UTC-03:00) Brasil, Gronel&#226;ndia Central',
'UTC-02:00'							=>	'(UTC-02:00) M&#233;dio Atl&#226;ntico',
'UTC-01:00'							=>	'(UTC-01:00) A&#231;ores, Cabo Verde, Gronel&#226;ndia Oriental',
'UTC'								=>	'(UTC) Europa Ocidental, Greenwich, Lisboa, Londres',
'UTC+01:00'							=>	'(UTC+01:00) Europa Central, &#193;frica Ocidental',
'UTC+02:00'							=>	'(UTC+02:00) Europa Oriental, &#193;frica Central',
'UTC+03:00'							=>	'(UTC+03:00) &#193;frica Oriental',
'UTC+03:30'							=>	'(UTC+03:30) Ir&#227;o',
'UTC+04:00'							=>	'(UTC+04:00) Moscovo, Golfo, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afeganist&#227;o',
'UTC+05:00'							=>	'(UTC+05:00) Paquist&#227;o',
'UTC+05:30'							=>	'(UTC+05:30) &#205;ndia, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, But&#227;o, Ekaterinburgo',
'UTC+06:30'							=>	'(UTC+06:30) Ilhas Cocos (Keeling), Mianmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novossibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Grande China, Austr&#225;lia Ocidental, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Austr&#225;lia Ocidental Sul',
'UTC+09:00'							=>	'(UTC+09:00) Jap&#227;o, Coreia, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Austr&#225;lia Central',
'UTC+10:00'							=>	'(UTC+10:00) Austr&#225;lia Oriental',
'UTC+10:30'							=>	'(UTC+10:30) Arquip&#233;lago de Lorde Howe',
'UTC+11:00'							=>	'(UTC+11:00) Ilha de Santa Isabel, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Ilha Norfolk',
'UTC+12:00'							=>	'(UTC+12:00) Nova Zel&#226;ndia, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Ilha Chatham',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Ilhas F&#233;nix, Pen&#237;nsula de Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Ilhas da Linha',

// Timeout Section
'Timeouts subhead'					=>	'Hora e limites de tempo',
'Time format label'					=>	'Formato da hora',
'PHP manual'						=>	'Manual PHP',
'Time format help'					=>	'[Formato actual: %s]. Veja %s para op&#231;&#245;es de formata&#231;&#227;o.',
'Date format label'					=>	'Formato da data',
'Date format help'					=>	'[Formato actual: %s]. Veja %s para op&#231;&#245;es de formata&#231;&#227;o.',
'Visit timeout label'				=>	'Tempo limite da visita',
'Visit timeout help'				=>	'N&#250;mero em segundos que um usu&#225;rio precisa ficar inactivo antes que os seus &#250;ltimos dados da visita sejam actualizados (afecta primariamente os indicadores de novas mensagens).',
'Online timeout label'				=>	'Tempo limite online',
'Online timeout help'				=>	'N&#250;mero em segundos que um usu&#225;rio precisa ficar inactivo antes de ser removido da lista de usu&#225;rios online.',
'Redirect time label'				=>	'Tempo de redireccionamento',
'Redirect time help'				=>	'N&#250;mero em segundos para se esperar durante o redireccionamento. Se definido como 0, nenhuma p&#225;gina de redireccionamento ser&#225; exibida (isso n&#227;o &#233; recomendado).',

// Display Section
'Display subhead'					=>	'Visualiza&#231;&#227;o',
'Version number label'				=>	'N&#250;mero de vers&#227;o',
'Version number help'				=>	'Exibir o n&#250;mero de vers&#227;o do FluxBB no rodap&#233;.',
'Info in posts label'				=>	'Informa&#231;&#245;es dos usu&#225;rios nas mensagens',
'Info in posts help'				=>	'Exibir informa&#231;&#245;es do autor da mensagem abaixo do nome de usu&#225;rio na visualiza&#231;&#227;o de t&#243;pico. A informa&#231;&#227;o afectada &#233; localiza&#231;&#227;o, data de registo, contagem de mensagens e links de contacto (e-mail e URL).',
'Post count label'					=>	'Contagem de mensagens do usu&#225;rio',
'Post count help'					=>	'Exibir o n&#250;mero de mensagens que o usu&#225;rio j&#225; enviou (afecta visualiza&#231;&#227;o de t&#243;pico, perfil e lista de usu&#225;rios).',
'Smilies label'						=>	'Emoticons nas mensagens',
'Smilies help'						=>	'Converter Emoticons como &#237;cones gr&#225;ficos.',
'Smilies sigs label'				=>	'Emoticons nas assinaturas',
'Smilies sigs help'					=>	'Converter Emoticons em pequenos &#237;cones gr&#225;ficos na assinatura dos usu&#225;rios.',
'Clickable links label'				=>	'Tornar endere&#231;os em links clic&#225;veis',
'Clickable links help'				=>	'Quando activo, o FluxBB ir&#225; detectar automaticamente qualquer endere&#231;o URL nas mensagens e vai converter&#225; numa hiperliga&#231;&#227;o clic&#225;vel.',
'Topic review label'				=>	'Revis&#227;o do t&#243;pico',
'Topic review help'					=>	'N&#250;mero m&#225;ximo de mensagens a exibir na p&#225;gina de resposta (mais novas primeiro). Defina como 0 para desabilitar.',
'Topics per page label'				=>	'T&#243;picos por p&#225;gina',
'Topics per page help'				=>	'O n&#250;mero padr&#227;o de t&#243;picos a exibir por p&#225;gina num f&#243;rum. Os usu&#225;rios podem personalizar esta configura&#231;&#227;o.',
'Posts per page label'				=>	'Mensagens por p&#225;gina',
'Posts per page help'				=>	'O n&#250;mero padr&#227;o de mensagens a exibir por p&#225;gina num t&#243;pico. Os usu&#225;rios podem personalizar esta configura&#231;&#227;o.',
'Indent label'						=>	'Tamanho de indenta&#231;&#227;o',
'Indent help'						=>	'Se definido como 8, um par&#234;ntesis recto ser&#225; usado quando exibir textos com a tag [code][/code]. Caso contr&#225;rio esta quantia de espa&#231;os ser&#225; usada para indentar o texto.',
'Quote depth label'					=>	'Profundidade m&#225;xima de cita&#231;&#245;es [quote]',
'Quote depth help'					=>	'O n&#250;mero m&#225;ximo de vezes que a tag [quote] pode ser inserida dentro de outra tag [quote], todas as tags excedentes ser&#227;o eliminadas.',

// Features section
'Features subhead'					=>	'Fun&#231;&#245;es',
'Quick post label'					=>	'Resposta r&#225;pida',
'Quick post help'					=>	'Quando activo, o FluxBB ir&#225; adicionar um formul&#225;rio para resposta r&#225;pida no rodap&#233; das p&#225;ginas dos t&#243;picos. Deste modo os usu&#225;rios podem responder directamente da p&#225;gina de visualiza&#231;&#227;o do t&#243;pico.',
'Users online label'				=>	'Usu&#225;rios online',
'Users online help'					=>	'Exibir na p&#225;gina principal informa&#231;&#245;es sobre visitantes e usu&#225;rios registados navegando no f&#243;rum actualmente.',
'Censor words label'				=>	'Palavras censuradas',
'Censor words help'					=>	'Active isto para censurar palavras espec&#237;ficas no f&#243;rum. Veja %s para mais informa&#231;&#245;es.',
'Signatures label'					=>	'Assinaturas',
'Signatures help'					=>	'Permitir que os usu&#225;rios anexem uma assinatura &#224;s suas mensagens.',
'User ranks label'					=>	'Classes de usu&#225;rios',
'User ranks help'					=>	'Active isto para usar classes de usu&#225;rios. Veja %s para mais informa&#231;&#245;es.',
'User has posted label'				=>	'O usu&#225;rio publicou anteriormente',
'User has posted help'				=>	'Esta fun&#231;&#227;o exibe um ponto em frente aos t&#243;picos no viewforum.php caso o usu&#225;rio autenticado tenha publicado no t&#243;pico anteriormente. Desactive se estiver a experimentar sobrecarga no servidor.',
'Topic views label'					=>	'Visualiza&#231;&#245;es de t&#243;pico',
'Topic views help'					=>	'Acompanhe o n&#250;mero de visualiza&#231;&#245;es de cada t&#243;pico. Desactive se estiver a experimentar sobrecarga no servidor.',
'Quick jump label'					=>	'Troca r&#225;pida',
'Quick jump help'					=>	'Activar troca r&#225;pida com a lista (trocar de f&#243;rum).',
'GZip label'						=>	'Sa&#237;da GZip',
'GZip help'							=>	'Se activo, o FluxBB ir&#225; compactar em gzip a sa&#237;da enviada para o navegador dos usu&#225;rios. Isto ir&#225; reduzir o consumo de banda, mas ir&#225; usar um pouco mais de processamento do servidor. Esta fun&#231;&#227;o requer que o PHP esteja configurado com zlib (--with-zlib). Nota: Se voc&#234; j&#225; possui um dos m&#243;dulos Apache mod_gzip ou mod_deflate configurados para compactar scripts PHP, voc&#234; deve desactivar esta fun&#231;&#227;o.',
'Search all label'					=>	'Pesquisar todos os f&#243;runs',
'Search all help'					=>	'Quando desactivado, pesquisas s&#243; ser&#227;o permitidas num f&#243;rum por vez. Desactive se o servidor estiver sobrecarregado devido ao excesso de pesquisas.',
'Menu items label'					=>	'Itens de menu adicionais',
'Menu items help'					=>	'Ao inserir hiperliga&#231;&#245;es HTML nesta caixa de texto, qualquer n&#250;mero de itens pode ser adicionado ao menu de navega&#231;&#227;o no topo de todas as p&#225;ginas. O formato para adicionar novos links &#233; X = &lt;a href="URL"&gt;LINK&lt;/a&gt; onde X &#233; a posi&#231;&#227;o na qual o link dever&#225; ser inserido (ex. 0 para inserir no in&#237;cio e 2 para inserir ap&#243;s "Lista de usu&#225;rios"). Separe cada item com uma quebra de linha.',

// Feeds section
'Feed subhead'						=>	'Feeds',
'Default feed label'				=>	'Tipo de feed padr&#227;o',
'Default feed help'					=>	'Seleccione o tipo de feed de distribui&#231;&#227;o a ser utilizado. Nota: N&#227;o escolher nenhum n&#227;o ir&#225; desactivar os feeds, apenas ocult&#225;-los por padr&#227;o.',
'None'								=>	'Nenhum',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Dura&#231;&#227;o de cache dos feeds',
'Feed TTL help'						=>	'Os feeds podem ter cache para reduzir o uso de recursos com os feeds.',
'No cache'							=>	'N&#227;o usar cache',
'Minutes'							=>	'%d minutos',

// Reports section
'Reports subhead'					=>	'Relat&#243;rios',
'Reporting method label'			=>	'M&#233;todo de relat&#243;rio',
'Internal'							=>	'Interno',
'By e-mail'							=>	'E-mail',
'Both'								=>	'Ambos',
'Reporting method help'				=>	'Seleccione o m&#233;todo para gerir relat&#243;rios de t&#243;picos/mensagens. Voc&#234; pode escolher se os relat&#243;rios de t&#243;picos/mensagens devem ser geridos pelo sistema de relat&#243;rios interno, enviados por e-mail para os endere&#231;os na lista de correio (veja abaixo) ou ambos.',
'Mailing list label'				=>	'Lista de correio',
'Mailing list help'					=>	'Uma lista de assinantes separada por virgulas. As pessoas nesta lista ir&#227;o receber os relat&#243;rios.',

// Avatars section
'Avatars subhead'					=>	'Avatares',
'Use avatars label'					=>	'Usar avatares',
'Use avatars help'					=>	'Quando activo, os usu&#225;rios poder&#227;o enviar um avatar que ser&#225; exibido abaixo de seu t&#237;tulo/classe.',
'Upload directory label'			=>	'Direct&#243;rio de envio',
'Upload directory help'				=>	'O direct&#243;rio de armazenamento de avatares (relativo ao direct&#243;rio base do FluxBB). O PHP precisa ter permiss&#245;es de escrita neste direct&#243;rio.',
'Max width label'					=>	'Largura m&#225;xima',
'Max width help'					=>	'A largura m&#225;xima permitida para avatares, em pixeis (60 &#233; o recomendado).',
'Max height label'					=>	'Altura m&#225;xima',
'Max height help'					=>	'A altura m&#225;xima permitida para avatares, em pixeis (60 &#233; o recomendado).',
'Max size label'					=>	'Tamanho m&#225;ximo',
'Max size help'						=>	'O tamanho m&#225;ximo permitido para avatares, em  bytes (10240 &#233; o recomendado).',

// E-mail section
'E-mail subhead'					=>	'E-mail',
'Admin e-mail label'				=>	'E-mail do administrador',
'Admin e-mail help'					=>	'O endere&#231;o de e-mail do administrador do f&#243;rum.',
'Webmaster e-mail label'			=>	'E-mail do Webmaster',
'Webmaster e-mail help'				=>	'Este &#233; o endere&#231;o usado como remetente em todos os e-mails enviados pelo f&#243;rum.',
'Forum subscriptions label'			=>	'Inscri&#231;&#245;es de f&#243;runs',
'Forum subscriptions help'			=>	'Permitir que os usu&#225;rios subscrevam f&#243;runs (recebem um e-mail quando algu&#233;m criar um novo t&#243;pico).',
'Topic subscriptions label'			=>	'Inscri&#231;&#245;es de t&#243;picos',
'Topic subscriptions help'			=>	'Permitir que os usu&#225;rios subscrevam t&#243;picos (recebem um e-mail quando algu&#233;m responder o t&#243;pico).',
'SMTP address label'				=>	'Endere&#231;o do servidor SMTP',
'SMTP address help'					=>	'O endere&#231;o de um servidor SMTP externo pelo qual ser&#227;o enviados os e-mails. Voc&#234; pode especificar um n&#250;mero de porta personalizado se o servidor SMTP n&#227;o utilizar a porta padr&#227;o 25 (ex: mail.meuhost.pt:3580). Deixe em branco para usar o programa de e-mail local.',
'SMTP username label'				=>	'Nome de usu&#225;rio SMTP',
'SMTP username help'				=>	'Nome de usu&#225;rio do servidor SMTP. Apenas digite um nome de usu&#225;rio se for exigido pelo servidor SMTP (a maioria dos servidores <strong>n&#227;o</strong> exigem autentica&#231;&#227;o).',
'SMTP password label'				=>	'Senha SMTP',
'SMTP change password help'			=>	'Active isto se desejar alterar ou excluir a senha actualmente armazenada.',
'SMTP password help'				=>	'Senha do servidor SMTP. Apenas digite uma senha se for exigida pelo servidor SMTP (a maioria dos servidores <strong>n&#227;o</strong> exigem autentica&#231;&#227;o). Por favor, digite sua senha duas vezes para confirmar.',
'SMTP SSL label'					=>	'Criptografar SMTP usando SSL',
'SMTP SSL help'						=>	'Criptografa a conex&#227;o ao servidor SMTP usando SSL. S&#243; deve ser utilizado caso seu servidor SMTP exija isso e sua vers&#227;o do PHP suporte SSL.',

// Registration Section
'Registration subhead'				=>	'Registo',
'Allow new label'					=>	'Permitir novos registos',
'Allow new help'					=>	'Controla se o f&#243;rum aceita novos registos. Desactive apenas sob circunst&#226;ncias especiais.',
'Verify label'						=>	'Verificar registo',
'Verify help'						=>	'Quando activo, os usu&#225;rios recebem um e-mail com uma senha aleat&#243;ria quando se registam. Podem ent&#227;o autenticar-se no f&#243;rum e alterar a senha no seu perfil se desejarem. Esta fun&#231;&#227;o tamb&#233;m exige que os usu&#225;rios verifiquem novos endere&#231;os de e-mail caso decidam trocar para um endere&#231;o diferente do qual usaram durante o registo. Este &#233; um modo efectivo de evitar abuso de registos e SPAM, al&#233;m de garantir que todos os usu&#225;rios possuam um endere&#231;o de e-mail "correcto" nos seus perfis.',
'Report new label'					=>	'Notificar novos registos',
'Report new help'					=>	'Se activo, o FluxBB ir&#225; notificar os usu&#225;rios na lista de correio (veja acima) quando um novo usu&#225;rio se registar no f&#243;rum.',
'Use rules label'					=>	'Regras de uso do f&#243;rum',
'Use rules help'					=>	'Quando activo, os usu&#225;rios devem concordar com as regras para poder registar-se (defina-as na caixa de texto abaixo). As regras sempre estar&#227;o dispon&#237;veis num link no menu de navega&#231;&#227;o no topo do site.',
'Rules label'						=>	'Defina as suas regras aqui',
'Rules help'						=>	'Aqui voc&#234; pode definir quaisquer regras e outras informa&#231;&#245;es que os usu&#225;rios precisem saber ao registarem-se. Se voc&#234; activou as regras acima, voc&#234; dever&#225; digitar algo, caso contr&#225;rio ser&#225; desactivada. Este texto n&#227;o ser&#225; processado como mensagens comuns e, portanto, pode conter HTML.',
'E-mail default label'				=>	'Configura&#231;&#227;o padr&#227;o de e-mail',
'E-mail default help'				=>	'Escolha a configura&#231;&#227;o de privacidade padr&#227;o para o registo de novos usu&#225;rios.',
'Display e-mail label'				=>	'Exibir endere&#231;os de e-mail para outros usu&#225;rios.',
'Hide allow form label'				=>	'Ocultar endere&#231;os de e-mail, mas permitir o formul&#225;rio de e-mail.',
'Hide both label'					=>	'Ocultar endere&#231;os de e-mail e desabilitar formul&#225;rio de e-mail.',

// Announcement Section
'Announcement subhead'				=>	'An&#250;ncios',
'Display announcement label'		=>	'Exibir an&#250;ncios',
'Display announcement help'			=>	'Active isto para exibir a mensagem abaixo como um an&#250;ncio geral no f&#243;rum.',
'Announcement message label'		=>	'Mensagem de an&#250;ncio',
'Announcement message help'			=>	'Este texto n&#227;o ser&#225; processado como uma mensagem comum e, portanto, pode conter HTML.',

// Maintenance Section
'Maintenance subhead'				=>	'Manuten&#231;&#227;o',
'Maintenance mode label'			=>	'Modo de manuten&#231;&#227;o',
'Maintenance mode help'				=>	'Quando activado, o f&#243;rum estar&#225; dispon&#237;vel apenas para administradores. Isto deve ser usado caso o f&#243;rum precise de ser desactivado temporariamente para manuten&#231;&#227;o. <strong>AVISO! N&#227;o saia do f&#243;rum enquanto estiver no modo de manuten&#231;&#227;o.</strong> Voc&#234; n&#227;o poder&#225; autenticar-se novamente.',
'Maintenance message label'			=>	'Mensagem de manuten&#231;&#227;o',
'Maintenance message help'			=>	'A mensagem que ser&#225; exibida aos usu&#225;rios quando o f&#243;rum estiver em modo de manuten&#231;&#227;o. Se deixado em branco, uma mensagem padr&#227;o ser&#225; usada. Este texto n&#227;o ser&#225; processado como mensagens comuns e, portanto, pode conter HTML.',

);
