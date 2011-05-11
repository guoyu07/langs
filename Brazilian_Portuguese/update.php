<?php

// Language definitions used in db_update.php

$lang_update = array(

'Update'						=>	'Atualizar FluxBB',
'Update message'				=>	'O banco de dados do FluxBB está desatualizado e deve ser atualizado para continuar. Se você é o administrador do site, por favor, siga as instruções abaixo para completar a atualização.',
'Note'							=>	'Nota:',
'Members message'				=>	'Este processo serve apenas para os administradores do site. Se você é um dos membros do fórum não precisa se preocupar - o fórum estará pronto em breve!',
'Administrator only'			=>	'Este processo serve apenas para os administradores do site!',
'Database password info'		=>	'Para realizar a atualização do banco de dados, por favor, digite a senha do banco de dados com que o FluxBB foi instalado. Se você não lembra da senha, pode encontrá-la no arquivo \'config.php\'.',
'Database password note'		=>	'Se você utiliza SQLite (e portanto não possui senha de banco de dados) por favor, ao invés disso use o nome do arquivo do banco de dados. É necessário digitar o nome do banco de dados exatamente igual o nome registrado no arquivo de configuração.',
'Database password'				=>	'Senha do banco de dados',
'Next'							=>	'Próximo',

'You are running error'			=>	'Você está usando %1$s versão %2$s. FluxBB %3$s requer ao menos %1$s %4$s para rodar corretamente. Você deve atualizar sua instalação %1$s antes de continuar.',
'Version mismatch error'		=>	'Incompatibilidade de versão. O banco de dados \'%s\' não parece estar rodando um esquema de banco de dados FluxBB suportado por este script de atualização.',
'Invalid file error'			=>	'Nome de arquivo de banco de dados inválido. Quando usar um banco de dados SQLite, o nome do arquivo do banco de dados deve ser digitado exatamente como registrado no seu \'%s\'',
'Invalid password error'		=>	'Senha do banco de dados inválida. Para atualizar o FluxBB você deve digitar a senha do seu banco de dados exatamente como registrada no seu \'%s\'',
'No password error'				=>	'Nenhuma senha do banco de dados foi fornecida',
'Script runs error'				=>	'Parece que o script de atualização já está sendo executado por outra pessoa. Se este não for o caso, por favor, exclua manualmente o arquivo \'%s\' e tente novamente',
'No update error'				=>	'Seu fórum já está tão atualizado quanto possível com este script',

'Intro 1'						=>	'Este script irá atualizar o banco de dados do seu fórum. O procedimento de atualização pode tomar desde poucos segundos até várias horas dependendo da velocidade do servidor e o tamanho do banco de dados do fórum. Não se esqueça de fazer um backup do banc de dados antes de continuar.',
'Intro 2'						=>	'Você já leu as instruções de atualização na documentação? Caso não, comece por lá.',
'No charset conversion'			=>	'<strong>IMPORTANTE!</strong> O FluxBB detectou que este ambiente PHP não possui suporte para os mecanismos de codificação requeridos para a conversão de caracteres diferentes do conjunto ISO-8859-1 para UTF-8. Isso significa que se o conjunto de caracteres atual não for ISO-8859-1, o FluxBB não conseguirá converter o banco de dados do seu fórum para UTF-8 e você terá que fazê-lo manualmente. Detalhes para a conversão manual de caracteres podem ser encontradas nas instruções de atualização.',
'Enable conversion'				=>	'<strong>Ativar conversão:</strong> Quando ativo, este script de atualização irá, após ter feito as mudanças estruturais necessárias no banco de dados, converter todo o texto no banco de dados do conjunto de caracteres atual para UTF-8. Esta conversão é requerida se você estiver atualizado a partir da versão 1.2.',
'Current character set'			=>	'<strong>Conjunto de caracteres atual:</strong> Se o idioma primário do seu fórum é Inglês, você pode deixar isto no valor padrão. Contudo, se seu fórum for utilizar outro idioma, você deve definir o conjunto de caracteres do idioma primário usado no fórum. <em>Errar essa configuração pode corromper o seu banco de dados, então não tente apenas adivinhar!</em> Nota: Isto é necessário mesmo que o antigo banco de dados seja UTF-8.',
'Charset conversion'			=>	'Conversão de conjunto de caracteres',
'Enable conversion label'		=>	'<strong>Ativar conversão</strong> (realizar conversão de conjunto de caracteres do banco de dados).',
'Current character set label'	=>	'Conjunto de caracteres atual',
'Current character set info'	=>	'Aceite o padrão para fóruns em Inglês ou defina o conjunto de caracteres do idioma primário.',
'Start update'					=>	'Iniciar atualização',
'Error converting users'		=>	'Erro ao converter usuários',
'Error info 1'					=>	'Houve um erro durante a conversão de alguns usuários. Isto pode ocorrer quando for converter do FluxBB v1.2 se múltiples usuários se registraram com nomes de usuários similares, por exemplo "bob" e "böb".',
'Error info 2'					=>	'Abaixo está uma lista de usuários que não puderam ser convertidos. Por favor, escolha um novo nome de usuário para cada um deles. Usuários que forem renomeados irão receber um email automático de alerta sobre a mudança.',
'New username'					=>	'Novo nome de usuário',
'Required'						=>	'(Requerido)',
'Correct errors'				=>	'Os seguintes erros precisam ser corrigidos:',
'Rename users'					=>	'Renomear usuários',
'Successfully updated'			=>	'O banco de dados do seu fórum foi atualizado com sucesso. Você pode agora %s.',
'go to index'					=>	'ir até o índice do fórum',

'Unable to lock error'			=>	'Incapaz de escrever a trava de atualização. Por favor certifique-se que o PHP tem acesso de escrita ao diretório \'%s\' e que ninguém mais está rodando o script de atualização.',

'Converting'					=>	'Convertendo %s …',
'Converting item'				=>	'Convertendo %1$s %2$s …',
'Preparsing item'				=>	'Pré-analisando %1$s %2$s …',
'Rebuilding index item'			=>	'Reconstruindo índice para %1$s %2$s',

'ban'							=>	'banimentos',
'categories'					=>	'categorias',
'censor words'					=>	'palavras censuradas',
'configuration'					=>	'configuração',
'forums'						=>	'fóruns',
'groups'						=>	'grupos',
'post'							=>	'mensagens',
'ranks'							=>	'classes',
'report'						=>	'relatórios',
'topic'							=>	'tópicos',
'user'							=>	'usuários',
'signature'						=>	'assinaturas',

'Username too short error'		=>	'Nomes de usuários devem ter ao menos 2 caracteres. Por favor, escolha um nome de usuário mais longo.',
'Username too long error'		=>	'Nomes de usuários devem ter menos de 25 caracteres. Por favor, escolha um nome de usuário mais curto.',
'Username Guest reserved error'	=>	'O nome de usuário visitante é reservado. Por favor, escolha outro nome de usuário.',
'Username IP format error'		=>	'Nomes de usuários não podem ter a forma de um endereço de IP. Por favor, escolha outro nome de usuário.',
'Username bad characters error'	=>	'Nomes de usuários não podem usar todos os caracteres \', " e [ ou ] de uma vez. Por favor escolha outro nome de usuário.',
'Username BBCode error'			=>	'Nomes de usuários não podem conter nenhuma das tags de formatação de texto (BBCode) que o fórum usa. Por favor escolha outro nome de usuário.',
'Username duplicate error'		=>	'Alguém já está registrado com o nome de usuário %s. O nome de usuário que você escolheu é muito similar. O nome de usuário deve ser diferente disso por pelo menos um caractere alfanumérico (a-z ou 0-9). Por favor, escolha um nome de usuário diferente.',

'JavaScript disabled'			=>	'JavaScript parece estar desativado. %s.',
'Click here to continue'		=>	'Clique aqui para continuar',
'Required field'				=>	'é um campo necessário neste formulário.'

);
