<?php
/***************************************************************************
 *                        lang_admin.php [portuguese_brazil]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2002 Grupo Suporte phpBB
 *     email                : forum@suportephpbb.org
 *
 *     $Id: lang_admin.php,v 2.0 2006/04/07 15:24:37 JuniorZ Exp $
 *
 ****************************************************************************/

/****************************************************************************
 * Traduzido por:
 * Equipe Suporte phpBB - <http://www.suportephpbb.org>
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Administra��o Geral';
$lang['Users'] = 'Administra��o de Usu�rios';
$lang['Groups'] = 'Administra��o de Grupos';
$lang['Forums'] = 'Administra��o do F�runs';
$lang['Styles'] = 'Administra��o de Estilos';

$lang['Configuration'] = 'Configura��o';
$lang['Permissions'] = 'Permiss�es';
$lang['Manage'] = 'Gerenciar';
$lang['Disallow'] = 'Nomes Proibidos';
$lang['Prune'] = 'Limpar';
$lang['Mass_Email'] = 'E-mail em Massa';
$lang['Ranks'] = 'Ranks';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Controle de Expuls�es';
$lang['Word_Censor'] = 'Palavras Censuradas';
$lang['Export'] = 'Exportar';
$lang['Create_new'] = 'Criar';
$lang['Add_new'] = 'Adicionar';
$lang['Backup_DB'] = 'Copiar Banco de Dados';
$lang['Restore_DB'] = 'Restaurar Banco de Dados';
$lang['Permissions List'] = 'Listar Permiss�es';


//
// Index
//
$lang['Admin'] = 'Administra��o';
$lang['Not_admin'] = 'Voc� n�o est� autorizado a administrar este painel';
$lang['Welcome_phpBB'] = 'Bem-vindo ao phpBB';
$lang['Admin_intro'] = 'Obrigado por escolher o phpBB como seu f�rum. Este painel lhe d� uma visualiza��o global das estat�sticas do seu f�rum. Voc� poder� voltar aqui clicando em <u>�ndice de Administra��o</u> no painel esquerdo. Para voltar ao �ndice global dos f�runs clique no logo phpBB. Os outros atalhos lhe d�o acesso aos diversos pain�is de controle dos f�runs, cada possui instru��es de como us�-lo.';
$lang['Main_index'] = '�ndice do F�rum';
$lang['Forum_stats'] = 'Estat�sticas do F�rum';
$lang['Admin_Index'] = '�ndice de Administra��o';
$lang['Preview_forum'] = 'Prever F�rum';

$lang['Click_return_admin_index'] = 'Clique %sAqui%s para retornar ao �ndice de Administra��o';

$lang['Statistic'] = 'Estat�stica';
$lang['Value'] = 'Valor';
$lang['Number_posts'] = 'N�mero de Mensagens';
$lang['Posts_per_day'] = 'Mensagens / Dia';
$lang['Number_topics'] = 'N�mero de T�picos';
$lang['Topics_per_day'] = 'T�picos / Dia';
$lang['Number_users'] = 'N�mero de Usu�rios';
$lang['Users_per_day'] = 'Usu�rios / Dia';
$lang['Board_started'] = 'In�cio dos F�runs';
$lang['Avatar_dir_size'] = 'Pasta de Avatars';
$lang['Database_size'] = 'Tamanho do Banco de Dados';
$lang['Gzip_compression'] = 'Compress�o Gzip';
$lang['Not_available'] = 'N�o Dispon�vel';

$lang['ON'] = 'Habilitado'; // This is for GZip compression
$lang['OFF'] = 'Desabilitado';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilit�rios de Banco de Dados';

$lang['Restore'] = 'Restaurar';
$lang['Backup'] = 'Copiar';
$lang['Restore_explain'] = 'Isso executar� uma restaura��o completa de todas as tabelas do phpBB a partir de um arquivo salvo. Caso o seu servidor permita voc� poder� enviar um arquivo de texto compactado em Gzip e ele ser� descompactado automaticamente. <b>ATEN��O</b> Esta opera��o sobrescrever� qualquer informa��o existente. Dependendo do tamanho de seu Banco de Dados este processo poder� levar algum tempo. N�o saia desta p�gina para outra at� que o processo seja finalizado. ';
$lang['Backup_explain'] = 'Aqui voc� pode fazer um backup de todos os dados relacionados ao seu phpBB. Se pretender copiar tabelas adicionais que estejam no Banco de Dados escreva na caixa de texto abaixo: "Tabelas Adicionais" os nomes das tabelas separados por v�rgulas. Caso o seu servidor permita, voc� pode compactar o arquivo em gzip de forma a reduzir o seu tamanho antes de copi�-lo. ';

$lang['Backup_options'] = 'Op��es de Backup';
$lang['Start_backup'] = 'Iniciar o Backup';
$lang['Full_backup'] = 'Backup Total';
$lang['Structure_backup'] = 'Backup apenas da Estrutura';
$lang['Data_backup'] = 'Backup apenas dos Dados';
$lang['Additional_tables'] = 'Tabelas Adicionais';
$lang['Gzip_compress'] = 'Compactar arquivo como Gzip';
$lang['Select_file'] = 'Selecione um arquivo';
$lang['Start_Restore'] = 'Iniciar a Restaura��o';

$lang['Restore_success'] = 'O  Banco de Dados foi restaurado com sucesso.<br /><br />Os seus f�runs dever�o voltar agora ao estado em que se encontravam na �poca da c�pia.';
$lang['Backup_download'] = 'A c�pia dever� iniciar em breve. Por favor aguarde at� que comece.';
$lang['Backups_not_supported'] = 'O seu sistema de Banco de Dados n�o permite efetuar c�pias de Dados';

$lang['Restore_Error_uploading'] = 'Erro ao Enviar o arquivo';
$lang['Restore_Error_filename'] = 'Problema no nome do arquivo, por favor tente outro nome';
$lang['Restore_Error_decompress'] = 'N�o � poss�vel descompactar um arquivo Gzip, por favor envie uma vers�o em texto plano.';
$lang['Restore_Error_no_file'] = 'Nenhum arquivo foi Enviado';


//
// Auth pages
//
$lang['Select_a_User'] = 'Selecione um Usu�rio';
$lang['Select_a_Group'] = 'Selecione um Grupo';
$lang['Select_a_Forum'] = 'Selecione um F�rum';
$lang['Auth_Control_User'] = 'Controle de Permiss�es de Usu�rio';
$lang['Auth_Control_Group'] = 'Controle de Permiss�es de Grupo';
$lang['Auth_Control_Forum'] = 'Controle de Permiss�es de F�rum';
$lang['Look_up_User'] = 'Selecionar Usu�rio';
$lang['Look_up_Group'] = 'Selecionar Grupo';
$lang['Look_up_Forum'] = 'Selecionar F�rum';

$lang['Group_auth_explain'] = 'Aqui voc� pode alterar as permiss�es e status do moderador de cada Grupo de Usu�rios. N�o esque�a que quando as alterar, as permiss�es particulares n�o ser�o alteradas, como impedir que o Usu�rio entre nos f�runs, etc. Caso isso aconte�a voc� ser� devidamente avisado. ';
$lang['User_auth_explain'] = 'Aqui voc� pode alterar as permiss�es e status de moderador delegado a cada Usu�rio individualmente. N�o esque�a que quando mudar as permiss�es de um Usu�rio, as permiss�es de Grupo n�o ser�o alteradas, como impedir que o Usu�rio entre nos f�runs, etc.  Caso isso aconte�a voc� ser� devidamente avisado.';
$lang['Forum_auth_explain'] = 'Aqui voc� pode alterar os n�veis de autoriza��o de cada f�rum. Voc� ter� o m�todo Simples e o Avan�ado para fazer isso, sendo que o Avan�ado oferece maior controle das opera��es de cada f�rum. Lembre-se que a altera��o do n�vel de permiss�o de seu f�rum afetar� o que cada usu�rio pode efetuar e aonde ele poder� efetuar. ';

$lang['Simple_mode'] = 'Modo Simples';
$lang['Advanced_mode'] = 'Modo Avan�ado';
$lang['Moderator_status'] = 'Status do Moderador';

$lang['Allowed_Access'] = 'Acesso Permitido';
$lang['Disallowed_Access'] = 'Acesso Proibido';
$lang['Is_Moderator'] = '� Moderador';
$lang['Not_Moderator'] = 'N�o � Moderador';

$lang['Conflict_warning'] = 'Aviso de Conflito de Autoriza��o';
$lang['Conflict_access_userauth'] = 'Este Usu�rio ainda possui direitos de acesso a este f�rum atrav�s do seu registro no Grupo. Voc� talvez queira alterar as permiss�es de Grupo ou remover este Usu�rio desse Grupo para bloquear por completo os seus direitos de acesso. As permiss�es dos Grupos (e os f�runs envolvidos) est�o indicados abaixo:';
$lang['Conflict_mod_userauth'] = 'Este Usu�rio ainda possui direitos de moderador neste f�rum atrav�s do seu registro no Grupo. Voc� talvez queira alterar as permiss�es de Grupo ou remover este Usu�rio desse Grupo para bloquear por completo os seus direitos de acesso. As permiss�es dos Grupos (e os f�runs envolvidos) est�o indicados abaixo:';

$lang['Conflict_access_groupauth'] = 'O seguinte Usu�rio (ou Usu�rios) ainda possuem direitos de acesso a este atrav�s de sua Configura��o de Permiss�es de Usu�rio. Talvez voc� queira alterar as permiss�es de Usu�rio para bloquear por completo os seus direitos de acesso. As permiss�es dos Usu�rios (e os f�runs envolvidos) est�o indicadas abaixo:';

$lang['Conflict_mod_groupauth'] = 'O seguinte Usu�rio (ou Usu�rios) ainda possuem direitos de moderador neste f�rum atrav�s de sua Configura��o de Permiss�es de Usu�rio. Talvez voc� queira alterar as permiss�es de Usu�rio para bloquear por completo os seus direitos de acesso. As permiss�es dos Usu�rios (e os f�runs envolvidos) est�o indicadas abaixo:';

$lang['Public'] = 'P�blico';
$lang['Private'] = 'Particular';
$lang['Registered'] = 'Registrados';
$lang['Administrators'] = 'Administradores';
$lang['Hidden'] = 'Oculto';

// These are displayed in the drop down boxes
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'TODOS';
$lang['Forum_REG'] = 'REGISTRADOS';
$lang['Forum_PRIVATE'] = 'PARTICULAR';
$lang['Forum_MOD'] = 'MODERADORES';
$lang['Forum_ADMIN'] = 'ADMINISTRADORES';

$lang['View'] = 'Ver';
$lang['Read'] = 'Ler';
$lang['Post'] = 'Enviar';
$lang['Reply'] = 'Responder';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Remover';
$lang['Sticky'] = 'Fixo';
$lang['Announce'] = 'An�ncio';
$lang['Vote'] = 'Votar';
$lang['Pollcreate'] = 'Criar Enquete';

$lang['Permissions'] = 'Permiss�es';
$lang['Simple_Permission'] = 'Permiss�o Simples';

$lang['User_Level'] = 'N�vel de Usu�rio';
$lang['Auth_User'] = 'Usu�rio';
$lang['Auth_Admin'] = 'Administrador';
$lang['Group_memberships'] = 'Membros do Grupo de Usu�rios';
$lang['Usergroup_members'] = 'Este Grupo tem os seguintes Membros';

$lang['Forum_auth_updated'] = 'Permiss�es do F�rum atualizadas';
$lang['User_auth_updated'] = 'Permiss�es de Usu�rio atualizadas';
$lang['Group_auth_updated'] = 'Permiss�es de Grupo atualizadas';

$lang['Auth_updated'] = 'As permiss�es foram atualizadas';
$lang['Click_return_userauth'] = 'Clique %sAqui%s para voltar � Permiss�es de Usu�rio';
$lang['Click_return_groupauth'] = 'Clique %sAqui%s para voltar � Permiss�es de Grupo';
$lang['Click_return_forumauth'] = 'Clique %sAqui%s para voltar � Permiss�es de F�rum';


//
// Banning
//
$lang['Ban_control'] = 'Controle de Expuls�es';
$lang['Ban_explain'] = 'Aqui voc� pode controlar a expuls�o de Usu�rios. Voc� pode expulsar um Usu�rio espec�fico ou um grupo de endere�os de IP ou \'hostnames\'. Estes m�todos impedem Usu�rios de alcan�ar sequer a p�gina inicial dos f�runs. Para evitar que um Usu�rio se registre com um nome de Usu�rio diferente voc� pode tamb�m banir um endere�o de e-mail espec�fico. Note que ao banir um e-mail s� por si n�o impede um Usu�rio de se ligar ou colocar mensagens nos f�runs. Para que isso aconte�a empregue um dos m�todos descritos inicialmente.';
$lang['Ban_explain_warn'] = 'Note que ao especificar um grupo de endere�os de IP resultar� no banimento de TODOS os endere�os inclu�dos nessa sele��o, ou seja desde o primeiro IP at� ao �ltimo, ser�o adicionados � lista de IPs banidos. O sistema de phpBB tenta minimizar o n�mero de endere�os a adicionar ao Banco de Dados empregando automaticamente filtros de sele��o sempre que for poss�vel. Se voc� realmente tiver que mencionar um grupo de IPs tente faz�-lo de forma a abranger uma quantidade reduzida de endere�os ou, melhor ainda, use endere�os espec�ficos.';

$lang['Select_username'] = 'Selecionar um Usu�rio';
$lang['Select_ip'] = 'Selecionar um IP';
$lang['Select_email'] = 'Selecionar um endere�o de E-mail';

$lang['Ban_username'] = 'Banir um ou mais Usu�rios espec�ficos';
$lang['Ban_username_explain'] = 'Voc� pode banir m�ltiplos usu�rios de uma s� vez usando as combina��es apropriadas de mouse do seu computador e navegador';

$lang['Ban_IP'] = 'Banir um ou mais endere�os de IP ou hostnames';
$lang['IP_hostname'] = 'Endere�os de IP ou hostnames';
$lang['Ban_IP_explain'] = 'Quando usar mais que um IP e \'hostname\' separe cada item com uma v�rgula. Para especificar um grupo de endere�os de IP separe o in�cio do fim com um tra�o \'-\'. Pode tamb�m usar asteriscos \'*\'';

$lang['Ban_email'] = 'Banir um ou mais endere�os de e-mail';
$lang['Ban_email_explain'] = 'Quando usar mais que um e-mail separe cada item com uma v�rgula. Para especificar um usu�rio qualquer de um certo provedor, utilize asteriscos \'*\', como por exemplo, *@hotmail.com';

$lang['Unban_username'] = 'Remover a expuls�o de um ou mais Usu�rios';
$lang['Unban_username_explain'] = 'Voc� pode remover a expuls�o de v�rios Usu�rios simultaneamente usando a combina��o apropriada de teclas e cliques do mouse no seu computador ou navegador.';

$lang['Unban_IP'] = 'Remover a expuls�o de um ou mais endere�os de IP';
$lang['Unban_IP_explain'] = 'Pode remover a expuls�o de v�rios endere�os de IP simultaneamente usando a combina��o apropriada de teclas e cliques do mouse no seu computador ou browser.';

$lang['Unban_email'] = 'Remover a expuls�o de um ou mais endere�os de e-mail';
$lang['Unban_email_explain'] = 'Pode remover a expuls�o de v�rios endere�os de e-mail simultaneamente usando a combina��o apropriada de teclas e cliques do mouse no seu computador ou browser.';

$lang['No_banned_users'] = 'N�o h� Nomes de Usu�rios banidos';
$lang['No_banned_ip'] = 'N�o h� endere�os de IP banidos';
$lang['No_banned_email'] = 'N�o h� endere�os de e-mail banidos';

$lang['Ban_update_sucessful'] = 'A lista de expuls�es foi atualizada com sucesso';
$lang['Click_return_banadmin'] = 'Clique %sAqui%s para voltar ao Painel de Controle de Expuls�es';


//
// Configuration
//
$lang['General_Config'] = 'Configura��o Geral';
$lang['Config_explain'] = 'O Formul�rio abaixo te permitir� personalizar todas as op��es gerais do seu phpBB. Para configura��es de F�runs ou Usu�rios use os respectivos links no painel esquerdo.';

$lang['Click_return_config'] = 'Clique %sAqui%s para voltar � Configura��o Geral';

$lang['General_settings'] = 'Configura��o geral do phpBB';
$lang['Server_name'] = 'Nome do Servidor';
$lang['Server_name_explain'] = 'O nome do Dom�nio de onde este f�rum est� rodando';
$lang['Script_path'] = 'Diret�rio do Script';
$lang['Script_path_explain'] = 'O diret�rio onde se encontra o phpBB em rela��o ao Dominio';
$lang['Server_port'] = 'Porta do Servidor';
$lang['Server_port_explain'] = 'A porta em que o seu servidor est� rodando, normalmente 80 - mude apenas se for diferente';
$lang['Site_name'] = 'Nome do Site';
$lang['Site_desc'] = 'Descri��o do Site';
$lang['Board_disable'] = 'Desativar';
$lang['Board_disable_explain'] = 'Isto torna os f�runs inacess�veis aos usu�rios, mas os Administradores ainda poder�o efetuar login para reativar o f�rum.';
$lang['Board_disable_text'] = 'Texto de Desativa��o do F�rum';
$lang['Board_disable_text_explain'] = 'Digite uma justificativa para a desativa��o do F�rum.';

$lang['Acct_activation'] = 'Usar a fun��o de ativa��o de registro';
$lang['Acc_None'] = 'Nunca'; // These three entries are the type of activation
$lang['Acc_User'] = 'Usu�rios';
$lang['Acc_Admin'] = 'Administradores';

$lang['Abilities_settings'] = 'Configura��es b�sicas de Usu�rios e F�runs';
$lang['Max_poll_options'] = 'N�mero m�ximo de op��es nas Enquetes';
$lang['Flood_Interval'] = 'Intervalo de \'Flood\'';
$lang['Flood_Interval_explain'] = 'Tempo em segundos que um Usu�rio deve aguardar entre o envio de mensagens';
$lang['Board_email_form'] = 'Email de Usu�rios via f�rum';
$lang['Board_email_form_explain'] = 'Fun��o que permite Usu�rios enviar e-mail a outros atrav�s do phpBB';
$lang['Topics_per_page'] = 'N�m. M�x. de T�picos por p�gina';
$lang['Posts_per_page'] = 'N�m. M�x. de Mensagens por p�gina';
$lang['Hot_threshold'] = 'N�m. M�x. de Mensagens para Tornar um t�pico Popular';
$lang['Default_style'] = 'Estilo padr�o';
$lang['Override_style'] = 'Substituir estilo do Usu�rio';
$lang['Override_style_explain'] = 'For�a o uso do estilo padr�o em vez do escolhido pelos Usu�rios';
$lang['Default_language'] = 'Idioma padr�o';
$lang['Date_format'] = 'Formato da Data';
$lang['System_timezone'] = 'Fuso Hor�rio do sistema';
$lang['Enable_gzip'] = 'Ativar compress�o GZip';
$lang['Enable_prune'] = 'Ativar Limpeza de F�rum';
$lang['Allow_HTML'] = 'Permitir HTML';
$lang['Allow_BBCode'] = 'Permitir BBCode';
$lang['Allowed_tags'] = 'Tags HTML permitidas';
$lang['Allowed_tags_explain'] = 'Separe as Tags com v�rgulas';
$lang['Allow_smilies'] = 'Permitir Emo��es';
$lang['Smilies_path'] = 'Pasta dos Emo��es';
$lang['Smilies_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB p.e. images/smiles';
$lang['Allow_sig'] = 'Permitir Assinaturas';
$lang['Max_sig_length'] = 'Comprimento M�x. da Assinatura';
$lang['Max_sig_length_explain'] = 'N�mero m�ximo de caracteres permitidos na assinatura do Usu�rio';
$lang['Allow_name_change'] = 'Permitir mudan�a de Nome de Usu�rio';

$lang['Avatar_settings'] = 'Configura��o de Avatares';
$lang['Allow_local'] = 'Permitir Galeria de Avatares';
$lang['Allow_remote'] = 'Permitir Avatares remotos';
$lang['Allow_remote_explain'] = 'Avatares ligados a partir de algum outro site';
$lang['Allow_upload'] = 'Permitir o Envio de Avatares';
$lang['Max_filesize'] = 'Tamanho M�x. do Arquivo de Avatar';
$lang['Max_filesize_explain'] = 'Para arquivos de Avatares Enviados';
$lang['Max_avatar_size'] = 'Dimens�es M�x. dos Avatares';
$lang['Max_avatar_size_explain'] = '(Altura x Largura em pixels)';
$lang['Avatar_storage_path'] = 'Pasta de armazenamento dos Avatares';
$lang['Avatar_storage_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB p.e. images/avatars';
$lang['Avatar_gallery_path'] = 'Pasta da Galeria de Avatares';
$lang['Avatar_gallery_path_explain'] = 'Pasta sob o diret�rio raiz do seu phpBB p. e. images/avatars/gallery';

$lang['COPPA_settings'] = 'Configura��o de COPPA';
$lang['COPPA_fax'] = 'Fax para COPPA';
$lang['COPPA_mail'] = 'Endere�o de e-mail para COPPA';
$lang['COPPA_mail_explain'] = 'Este � o endere�o de e-mail para o qual os pais enviar�o os formul�rios de registro de COPPA';

$lang['Email_settings'] = 'Configura��o de E-mail';
$lang['Admin_email'] = 'Endere�o de E-mail do Administrador';
$lang['Email_sig'] = 'Assinatura do E-mail';
$lang['Email_sig_explain'] = 'Este texto ser� anexado a todos os e-mails enviados pelo f�rum';
$lang['Use_SMTP'] = 'Usar Servidor de SMTP para o envio';
$lang['Use_SMTP_explain'] = 'Selecione SIM caso queira ou tenha que enviar E-mail atrav�s de um servidor em vez da fun��o mail() do PHP';
$lang['SMTP_server'] = 'Endere�o do servidor de SMTP';
$lang['SMTP_username'] = 'Nome de Usu�rio do SMTP';
$lang['SMTP_username_explain'] = 'S� escreva o nome de Usu�rio se o seu servidor de SMTP assim o exiga';
$lang['SMTP_password'] = 'Senha para o SMTP';
$lang['SMTP_password_explain'] = 'S� escreva a Senha caso o seu servidor de SMTP assim o exija';

$lang['Disable_privmsg'] = 'Mensagens Particulares';
$lang['Inbox_limits'] = 'N�m. Total de mensagens permitidas na Caixa de Entrada';
$lang['Sentbox_limits'] = 'N�m. Total de mensagens permitidas na Caixa de Sa�da';
$lang['Savebox_limits'] = 'N�m. Total de mensagens permitidas na Caixa de Mensagens Salvas';

$lang['Custom_Footer_and_Header_settings'] = 'Configura��es de Cabe�alhos e Rodap�s Personalizados';
$lang['Custom_Overall_Header'] = 'Cabe�alho Geral Personalizado';
$lang['Custom_Overall_Footer'] = 'Rodap� Geral Personalizado';
$lang['Custom_Simple_Header'] = 'Cabe�alho Simples Personalizado';
$lang['Custom_Simple_Footer'] = 'Rodap� Simples Personalizado';

$lang['Cookie_settings'] = 'Configura��es de Cookies';
$lang['Cookie_settings_explain'] = 'Esses detalhes definem como os cookies ser�o enviados para os navegadores de seus Usu�rios. Na maioria dos casos os valores padr�o para a configura��o dos cookies dever�o ser suficientes mas caso necessite mud�-los fa�a-o com cuidado pois uma configura��o incorreta poder� impedir os Usu�rios de ligarem-se.';
$lang['Cookie_domain'] = 'Dom�nio do Cookie';
$lang['Cookie_name'] = 'Nome do Cookie';
$lang['Cookie_path'] = 'Pasta do Cookie';
$lang['Cookie_secure'] = 'Cookie Seguro [ https:// ]';
$lang['Cookie_secure_explain'] = 'Se o seu servidor estiver rodando atrav�s de SSL ative isto, caso contr�rio deixe desligado';
$lang['Session_length'] = 'Tempo da sess�o [ segundos ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Habilitar Confirma��o Visual';
$lang['Visual_confirm_explain'] = 'Exige que os usu�rios informem um c�digo definido por uma imagem no ato do registro.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Permitir logins autom�ticos';
$lang['Allow_autologin_explain'] = 'Determina se os usu�rios est�o autorizados a selecionar serem logados automaticamente ao visitar o f�rum';
$lang['Autologin_time'] = 'Expira��o da chave autom�tica de login';
$lang['Autologin_time_explain'] = 'Por quanto tempo, em dias, uma chave de auto-login � v�lida se o usu�rio n�o visitar o f�rum. Use 0 para desabilitar a expira��o. ';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Intervalo de Pesquisas';
$lang['Search_Flood_Interval_explain'] = 'N�mero de segundos que o usu�rio dever� aguardar entre as pesquisas realizadas';

//
// Forum Management
//
$lang['Forum_admin'] = 'Administra��o dos F�runs';
$lang['Forum_admin_explain'] = 'A partir desse Painel voc� pode adicionar, remover, editar, reordenar e resincronizar Categorias e F�runs.';
$lang['Edit_forum'] = 'Editar f�rum';
$lang['Create_forum'] = 'Criar novo F�rum';
$lang['Create_category'] = 'Criar nova Categoria';
$lang['Remove'] = 'Remover';
$lang['Action'] = 'A��o';
$lang['Update_order'] = 'Atualizar Ordem';
$lang['Config_updated'] = 'Configura��o do F�rum atualizada com sucesso';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Remover';
$lang['Move_up'] = 'Mover - Cima';
$lang['Move_down'] = 'Mover - Baixo';
$lang['Resync'] = 'Resincronizar';
$lang['No_mode'] = 'N�o foi definido nenhum modo';
$lang['Forum_edit_delete_explain'] = 'O formul�rio abaixo lhe permitir� personalizar todas as Op��es Gerais do Painel. Para Configura��es de Usu�rios e use os atalhos no painel do lado esquerdo.';

$lang['Move_contents'] = 'Mover todo o conte�do';
$lang['Forum_delete'] = 'Remover F�rum';
$lang['Forum_delete_explain'] = 'O formul�rio abaixo lhe permitir� remover um f�rum (ou categoria) e decidir onde pretende colocar todos os t�picos (ou f�runs) existentes.';

$lang['Status_locked'] = 'Trancado';
$lang['Status_unlocked'] = 'Destrancado';
$lang['Forum_settings'] = 'Configura��es Gerais dos F�runs';
$lang['Forum_name'] = 'Nome do F�rum';
$lang['Forum_desc'] = 'Descri��o';
$lang['Forum_status'] = 'Estado';
$lang['Forum_pruning'] = 'Auto-limpar';

$lang['prune_freq'] = 'Verificar o tempo dos t�picos a cada';
$lang['prune_days'] = 'Remover t�picos que n�o tenham sido respondidos em';
$lang['Set_prune_data'] = 'Voc� ativou a fun��o para auto-limpar o f�rum mas n�o especificou a freq��ncia ou n�mero de dias em que o mesmo deve ser limpo. Volte e especifique esse valor';

$lang['Move_and_Delete'] = 'Mover e Remover';

$lang['Delete_all_posts'] = 'Remover todas as mensagens';
$lang['Nowhere_to_move'] = 'N�o h� local para onde mover';

$lang['Edit_Category'] = 'Editar Categoria';
$lang['Edit_Category_explain'] = 'Use este formul�rio para mudar o nome da Categoria.';

$lang['Forums_updated'] = 'Informa��o de F�rum e Categoria atualizada com sucesso ';

$lang['Must_delete_forums'] = 'Voc� precisa remover todos os f�runs antes de remover esta categoria';

$lang['Click_return_forumadmin'] = 'Clique %sAqui%s para voltar � Administra��o dos F�runs';


//
// Smiley Management
//
$lang['smiley_title'] = 'Administra��o de Smilies';
$lang['smile_desc'] = 'A partir dessa p�gina voc� pode adicionar, remover e editar as emo��es ou smilies que os Usu�rios poder�o usar nas suas mensagens.';

$lang['smiley_config'] = 'Configura��o de Smilies';
$lang['smiley_code'] = 'C�digo para o Smilie';
$lang['smiley_url'] = 'Arquivo da imagem do Smilie';
$lang['smiley_emot'] = 'Emo��o do Smilie';
$lang['smile_add'] = 'Adicionar um Smilie';
$lang['Smile'] = 'Imagem';
$lang['Emotion'] = 'Express�o do Smilie';

$lang['Select_pak'] = 'Selecionar arquivo de pacote (.pak)';
$lang['replace_existing'] = 'Substituir Smilie existente';
$lang['keep_existing'] = 'Manter o Smilie existente';
$lang['smiley_import_inst'] = 'Voc� deve descompactar o pacote de Smilies e colocar todos os arquivos na respectiva pasta da sua instala��o do phpBB.  Selecione depois a informa��o correta neste formul�rio para importar o pacote. ';
$lang['smiley_import'] = 'Importar pacote';
$lang['choose_smile_pak'] = 'Escolher arquivo de pacote de Smilies (.pak)';
$lang['import'] = 'Importar';
$lang['smile_conflicts'] = 'Em caso de conflitos:';
$lang['del_existing_smileys'] = 'Remova os Smilies existentes antes de importar o pacote';
$lang['import_smile_pack'] = 'Importar Pacote de Smilie';
$lang['export_smile_pack'] = 'Criar Pacote';
$lang['export_smiles'] = 'Para criar um pacote de Smilies a partir dos atualmente instalados, primeiro clique %sAqui%s para fazer download do pacote smiles.pak. Renomeie este arquivo apropriadamente, mantendo a extens�o .pak.  Ent�o crie um arquivo zip contendo todos as suas imagens de Smilie mais este arquivo de configura��o (.pak).';

$lang['smiley_add_success'] = 'O Smilie foi adicionado com sucesso';
$lang['smiley_edit_success'] = 'O Smilie foi atualizado com sucesso';
$lang['smiley_import_success'] = 'O pacote de Smilie foi importado com sucesso!';
$lang['smiley_del_success'] = 'O Smilie foi removido com sucesso';
$lang['Click_return_smileadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Smilies';
$lang['Confirm_delete_smiley'] = 'Voc� tem certeza que deseja remover este Smilie?';


//
// User Management
//
$lang['User_admin'] = 'Ger�ncia de Usu�rios';
$lang['User_admin_explain'] = 'Aqui voc� pode mudar a informa��o dos seus Usu�rios al�m de algumas op��es espec�ficas. Para modificar as permiss�es de Usu�rios use o painel de <b>Permiss�es</b> para Usu�rios e Grupos. ';

$lang['Look_up_user'] = 'Selecionar Usu�rio';

$lang['Admin_user_fail'] = 'N�o foi poss�vel Atualizar o perfil de Usu�rio.';
$lang['Admin_user_updated'] = 'O perfil de Usu�rio foi atualizado com sucesso.';
$lang['Click_return_useradmin'] = 'Clique %sAqui%s para voltar � Ger�ncia de Usu�rios';

$lang['User_delete'] = 'Remover este Usu�rio';
$lang['User_delete_explain'] = 'Clique aqui para remover o Usu�rio. Esta opera��o tem efeitos permanentes. ';
$lang['User_deleted'] = 'Usu�rio removido com sucesso.';

$lang['User_status'] = 'Usu�rio est� ativo';
$lang['User_allowpm'] = 'Pode enviar Mensagens Privadas';
$lang['User_allowavatar'] = 'Pode mostrar Avatar';

$lang['Admin_avatar_explain'] = 'Aqui voc� pode ver e remover o Avatar atual do Usu�rio.';

$lang['User_special'] = 'Campos especiais Apenas para Administradores';
$lang['User_special_explain'] = 'Estes campos n�o podem ser modificados por Usu�rios. Aqui voc� pode especificar estado do usu�rio bem como outras op��es que n�o s�o dadas aos Usu�rios. ';

//
// Group Management
//
$lang['Group_administration'] = 'Administra��o de Grupos';
$lang['Group_admin_explain'] = 'A partir desse painel voc� pode administrar todos os seus Grupos de Usu�rios, voc� pode: remover, criar e editar Grupos existentes. Voc� pode eleger moderadores, abrir/fechar Grupos e definir Nome e Descri��o de cada grupo.';
$lang['Error_updating_groups'] = 'Houve um erro ao Atualizar os grupos';
$lang['Updated_group'] = 'O grupo foi atualizado com sucesso';
$lang['Added_new_group'] = 'O novo grupo foi criado com sucesso';
$lang['Deleted_group'] = 'O grupo foi removido com sucesso';
$lang['New_group'] = 'Criar um Grupo';
$lang['Edit_group'] = 'Editar o Grupo';
$lang['group_name'] = 'Nome do Grupo';
$lang['group_description'] = 'Descri��o do Grupo';
$lang['group_moderator'] = 'Moderador do Grupo';
$lang['group_status'] = 'Estado do Grupo';
$lang['group_open'] = 'Aberto';
$lang['group_closed'] = 'Fechado';
$lang['group_hidden'] = 'Oculto';
$lang['group_delete'] = 'Remover grupo';
$lang['group_delete_check'] = 'Remover este grupo';
$lang['submit_group_changes'] = 'Enviar Altera��es';
$lang['reset_group_changes'] = 'Restaurar Altera��es';
$lang['No_group_name'] = 'Deve ser especificado um nome para este grupo';
$lang['No_group_moderator'] = 'Deve ser especificado um moderador para este grupo';
$lang['No_group_mode'] = 'Deve ser especificado um modo para este grupo, aberto ou fechado';
$lang['No_group_action'] = 'Nenhuma a��o foi especificada';
$lang['delete_group_moderator'] = 'Remover o moderador antigo do grupo?';
$lang['delete_moderator_explain'] = 'Se estiver alterando o moderador do grupo assinale aqui para remover o moderador anterior.  Caso contr�rio n�o assinale e o Usu�rio passar� a ser um membro normal do grupo. ';
$lang['Click_return_groupsadmin'] = 'Clique %sAqui%s para voltar � Administra��o de Grupos.';
$lang['Select_group'] = 'Selecione um Grupo';
$lang['Look_up_group'] = 'Selecionar Grupo';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Limpar F�rum';
$lang['Forum_Prune_explain'] = 'Esta opera��o remover� qualquer t�pico que n�o possua resposta dentro do limite de dias especificado. Se n�o for mencionado um n�mero de dias todos os t�picos ser�o removidos. Isto n�o remove t�picos que possuam uma Enquete ativa nem An�ncios. Voc� ter� que remov�-los manualmente. ';
$lang['Do_Prune'] = 'Limpar';
$lang['All_Forums'] = 'Todos os F�runs';
$lang['Prune_topics_not_posted'] = 'Remover todos os t�picos sem resposta durante um per�odo de ';
$lang['Topics_pruned'] = 'T�picos Removidos';
$lang['Posts_pruned'] = 'Mensagens Removidas';
$lang['Prune_success'] = 'Desbaste de f�runs conclu�do com sucesso';


//
// Word censor
//
$lang['Words_title'] = 'Censura de Palavras';
$lang['Words_explain'] = 'A partir desse painel de controle voc� pode adicionar, editar e remover palavras que ser�o automaticamente censuradas em seus f�runs. O uso dessas palavras ser� tamb�m interditado no registro de Nomes de Usu�rios. Podem ser usados asteriscos \'*\' aumentando as possibilidades de abranger varia��es da mesma palavra. Por exemplo, *testa* abranger� detest�vel, testa* abranger� testando, *testa abranger� detesta. ';
$lang['Word'] = 'Palavra';
$lang['Edit_word_censor'] = 'Editar palavra Censurada';
$lang['Replacement'] = 'Substitui��o';
$lang['Add_new_word'] = 'Adicionar nova palavra';
$lang['Update_word'] = 'Atualizar palavra censurada';

$lang['Must_enter_word'] = 'Voc� deve escrever a palavra e o que ir� substitu�-la';
$lang['No_word_selected'] = 'N�o foi escolhida palavra para editar';

$lang['Word_updated'] = 'A palavra censurada foi atualizada com sucesso';
$lang['Word_added'] = 'A palavra a censurar foi adicionada com sucesso';
$lang['Word_removed'] = 'A palavra censurada foi removida com sucesso';

$lang['Click_return_wordadmin'] = 'Clique %sAqui%s para voltar � Censura de Palavras';
$lang['Confirm_delete_word'] = 'Voc� tem certeza que deseja remover esta Palavra Censurada?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'A partir daqui voc� pode enviar um e-mail para todos os Usu�rios dos f�runs ou Usu�rios membros de um certo grupo, pra tal empregue o endere�o de <b>E-mail Administrativo</b> previamente configurado. Caso seja enviado um e-mail para um n�mero elevado de pessoas aguarde um pouco ap�s clicar abaixo em <b>E-mail</b> e n�o pare a p�gina durante o processo - � normal que o envio de um e-mail em massa demore um pouco, mas voc� ser� avisado quando o processo for conclu�do. ';
$lang['Compose'] = 'Compor';

$lang['Recipients'] = 'Destinat�rios';
$lang['All_users'] = 'Todos os Usu�rios';

$lang['Email_successfull'] = 'A sua mensagem foi enviada';
$lang['Click_return_massemail'] = 'Clique %sAqui%s para voltar ao Formul�rio de Email em Massa';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Ger�ncia de Rank';
$lang['Ranks_explain'] = 'Usando este painel poder� adicionar, editar, ver e remover Ranks de Usu�rios. Poder� tamb�m criar Ranks espec�ficos podendo os mesmos ser aplicados a um Usu�rio atrav�s do  painel de <b>Administra��o de Usu�rios</b>';

$lang['Add_new_rank'] = 'Adicionar um novo Rank';

$lang['Rank_title'] = 'T�tulo do Rank';
$lang['Rank_special'] = 'Rank Especial';
$lang['Rank_minimum'] = 'N�m. M�n. de Mensagens';
$lang['Rank_maximum'] = 'N�m. M�x. de Mensagens';
$lang['Rank_image'] = 'Imagem do Rank (relativo ao diret�rio raiz do phpBB)';
$lang['Rank_image_explain'] = 'Use isto para definir uma pequena imagem associada ao Rank';

$lang['Must_select_rank'] = 'Voc� deve escolher um Rank';
$lang['No_assigned_rank'] = 'N�o foi especificado nenhum Rank Especial';

$lang['Rank_updated'] = 'O Rank foi atualizado com sucesso';
$lang['Rank_added'] = 'O Rank foi adicionado com sucesso';
$lang['Rank_removed'] = 'O Rank foi removido com sucesso';
$lang['No_update_ranks'] = 'O Rank foi exclu�do com sucesso. Entretanto, contas de usu�rios que utilizam esse rank n�o foram atualizadas.  Voc� precisar� alterar o rank dessas contas manualmente';

$lang['Click_return_rankadmin'] = 'Clique %sAqui%s para voltar a Ger�ncia de Ranks';
$lang['Confirm_delete_rank'] = 'Voc� tem certeza que deseja remover este Rank?';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Controle de Nomes de Usu�rios Proibidos';
$lang['Disallow_explain'] = 'Aqui voc� poder� controlar nomes de Usu�rios que n�o ser�o permitidos a serem usados.  Nomes proibidos podem conter asteriscos \'*\' para abranger um maior n�mero de varia��es na palavra.  Note que n�o podem ser especificados Nomes de Usu�rios que j� se encontrem registrados, devendo primeiro ser removidos e ent�o especific�-los aqui para n�o mais serem usados.';

$lang['Delete_disallow'] = 'Remover';
$lang['Delete_disallow_title'] = 'Remover um Nome de Usu�rio Proibido';
$lang['Delete_disallow_explain'] = 'Voc� pode remover um Nome de Usu�rio selecionando-o nessa lista e clicando em Remover';

$lang['Add_disallow'] = 'Adicionar';
$lang['Add_disallow_title'] = 'Adicionar um Nome de Usu�rio Proibido';
$lang['Add_disallow_explain'] = 'Use asteriscos \'*\' se necess�rio';

$lang['No_disallowed'] = 'N�o h� Nomes de Usu�rios Proibidos';

$lang['Disallowed_deleted'] = 'O Nome de Usu�rio Proibido foi removido com sucesso';
$lang['Disallow_successful'] = 'O Nome de Usu�rio Proibido foi adicionado com sucesso';
$lang['Disallowed_already'] = 'O nome que especificou n�o pode ser proibido. Pode ser que j� exista na lista de Nomes Proibidos, na lista de Palavras Censuradas ou encontre-se atualmente em uso por algum Usu�rio registrado';

$lang['Click_return_disallowadmin'] = 'Clique %sAqui%s para voltar ao Painel de Controle de Nomes de Usu�rios Proibidos';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Ger�ncia de Estilos';
$lang['Styles_explain'] = 'Usando este painel poder� adicionar, remover e administrar estilos (Modelos e Temas) dispon�veis aos Usu�rios.';
$lang['Styles_addnew_explain'] = 'Este painel � destinado � listagem dos Temas de f�rum para os Modelos que presentemente possui e ainda n�o se encontram instalados na base de dados do phpBB. Para instalar um tema espec�fico clique em <b>Instalar</b> ao lado desse item. ';

$lang['Select_template'] = 'Selecionar um Modelo';

$lang['Style'] = 'Estilo';
$lang['Template'] = 'Modelo';
$lang['Install'] = 'Instalar';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Editar Tema';
$lang['Edit_theme_explain'] = 'Configurar o tema selecionado no formul�rio abaixo';

$lang['Create_theme'] = 'Criar Tema';
$lang['Create_theme_explain'] = 'Use o formul�rio abaixo para criar um Tema novo para o Modelo existente. Quando aplicar cores (que devem ser escritas num formato hexadecimal) n�o deve ser inclu�do o # inicial, ou seja, CCCCCC � a forma correta de escrever, #CCCCCC � incorreto. ';

$lang['Export_themes'] = 'Exportar Temas';
$lang['Export_explain'] = 'Usar este painel para exportar informa��o de um Tema para um dado Modelo. Escolha um Modelo na lista e ser� automaticamente criado um arquivo de configura��o do tema que ir� ser guardado e instalado na pasta do Modelo selecionado. Caso n�o for poss�vel guardar o arquivo por si pr�prio ser� dada a op��o para ser feito o seu \'download\'. Deve haver ou ser dada permiss�o de escrita ao servidor de WEB para a pasta do Modelo selecionado de forma que o arquivo seja guardado. Para mais informa��o sobre esta opera��o ver o <b>phpBB 2 users guide</b>.';

$lang['Theme_installed'] = 'O tema selecionado foi instalado com sucesso';
$lang['Style_removed'] = 'O estilo selecionado foi removido da base de dados. Para remover completamente este estilo do seu sistema deve apagar o estilo apropriado na pasta dos Modelos. ';
$lang['Theme_info_saved'] = 'A informa��o do tema para o Modelo selecionado foi guardada. Voc� deve agora mudar as permiss�es para \'read-only\' no arquivo theme_info.cfg (e caso aplic�vel na pasta de Modelos)';
$lang['Theme_updated'] = 'O tema selecionado foi atualizado. Voc� deve agora exportar a nova configura��o do tema';
$lang['Theme_created'] = 'Tema criado. Voc� deve agora exportar o tema para o arquivo de configura��o do tema como seguran�a ou usar em outro local';

$lang['Confirm_delete_style'] = 'Tem a certeza que quer remover este estilo?';

$lang['Download_theme_cfg'] = 'N�o foi poss�vel escrever o arquivo de informa��o do tema. clique o bot�o abaixo para fazer o \'download\' deste arquivo com o seu \'navegador\'. Logo que termine o download poder� transferir o arquivo para a pasta contendo os arquivos do Modelo. Pode depois arrumar os arquivos para distribui��o ou usar noutro local, se assim o pretender';
$lang['No_themes'] = 'O Modelo que selecionou n�o Possui temas anexos. Para criar um tema novo clique em Criar no painel do lado esquerdo';
$lang['No_template_dir'] = 'N�o foi poss�vel abrir a pasta de Modelos. Pode ser que n�o haja possibilidade de ser lido pelo servidor de Web ou a pasta n�o exista';
$lang['Cannot_remove_style'] = 'N�o pode remover o estilo selecionado porque � presentemente o estilo b�sico do f�rum. Mudar o estilo b�sico e tentar novamente. ';
$lang['Style_exists'] = 'O nome para o estilo que selecionou j� existe, voltar atr�s e escolher um nome diferente.';

$lang['Click_return_styleadmin'] = 'Clique %sAqui%s para voltar � Ger�ncia de Estilos';

$lang['Theme_settings'] = 'Configura��o de Temas';
$lang['Theme_element'] = 'Elemento de Tema';
$lang['Simple_name'] = 'Nome Simples';
$lang['Value'] = 'Valor';
$lang['Save_Settings'] = 'Guardar Configura��o';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Stylesheet_explain'] = 'Nome do arquivo de folha de estilos CSS a ser usado para esse tema.';
$lang['Background_image'] = 'Imagem de Background';
$lang['Background_color'] = 'Cor de Background';
$lang['Theme_name'] = 'Nome do Tema';
$lang['Link_color'] = 'Cor de Atalho';
$lang['Text_color'] = 'Cor de Texto';
$lang['VLink_color'] = 'Cor de Atalho Visitado';
$lang['ALink_color'] = 'Cor de Atalho Ativo';
$lang['HLink_color'] = 'Cor de Atalho Hover';
$lang['Tr_color1'] = 'Cor 1 de Coluna de Tabela';
$lang['Tr_color2'] = 'Cor 2 de Coluna de Tabela';
$lang['Tr_color3'] = 'Cor 3 de Coluna de Tabela';
$lang['Tr_class1'] = 'Classe 1 de Coluna de Tabela';
$lang['Tr_class2'] = 'Classe 2 de Coluna de Tabela';
$lang['Tr_class3'] = 'Classe 3 de Coluna de Tabela';
$lang['Th_color1'] = 'Cor 1 de Cabe�a de Tabela';
$lang['Th_color2'] = 'Cor 2 de Cabe�a de Tabela';
$lang['Th_color3'] = 'Cor 3 de Cabe�a de Tabela';
$lang['Th_class1'] = 'Classe 1 de Cabe�a de Tabela';
$lang['Th_class2'] = 'Classe 2 de Cabe�a de Tabela';
$lang['Th_class3'] = 'Classe 3 de Cabe�a de Tabela';
$lang['Td_color1'] = 'Cor 1 de C�lula de Tabela';
$lang['Td_color2'] = 'Cor 2 de C�lula de Tabela';
$lang['Td_color3'] = 'Cor 3 de C�lula de Tabela';
$lang['Td_class1'] = 'Classe 1 de C�lula de Tabela';
$lang['Td_class2'] = 'Classe 2 de C�lula de Tabela';
$lang['Td_class3'] = 'Classe 3 de C�lula de Tabela';
$lang['fontface1'] = 'Fonte Face 1';
$lang['fontface2'] = 'Fonte Face 2';
$lang['fontface3'] = 'Fonte Face 3';
$lang['fontsize1'] = 'Tamanho 1 de Fonte';
$lang['fontsize2'] = 'Tamanho 2 de Fonte';
$lang['fontsize3'] = 'Tamanho 3 de Fonte';
$lang['fontcolor1'] = 'Cor 1 de Fonte';
$lang['fontcolor2'] = 'Cor 2 de Fonte';
$lang['fontcolor3'] = 'Cor 3 de Fonte';
$lang['span_class1'] = 'Classe 1 - Extens�o';
$lang['span_class2'] = 'Classe 2 - Extens�o';
$lang['span_class3'] = 'Classe 3 - Extens�o';
$lang['img_poll_size'] = 'Tamanho da Imagem da Vota��o [px]';
$lang['img_pm_size'] = 'Tamanho de Estado de Mensagem Privada [px]';

//
// Install Process
//
$lang['Welcome_install'] = 'Bem-vindo � Instala��o do phpBB 2';
$lang['Initial_config'] = 'Configura��o B�sica';
$lang['DB_config'] = 'Configura��o do Banco de Dados';
$lang['Admin_config'] = 'Configura��o de Administra��o';
$lang['continue_upgrade'] = 'Logo que tenha terminado o download do arquivo de configura��o para o seu computador poder� clicar em \"Continuar a Atualiza��o\" abaixo para continuar o processo.  Aguarde que seja feito o upload do arquivo de configura��o at� que o processo de atualiza��o esteja completo. ';
$lang['upgrade_submit'] = 'Continuar a Atualiza��o';

$lang['Installer_Error'] = 'Ocorreu um erro durante a instala��o';
$lang['Previous_Install'] = 'Foi detectada uma instala��o anterior';
$lang['Install_db_error'] = 'Ocorreu um erro ao tentar Atualizar o banco de dados';

$lang['Re_install'] = 'A sua instala��o anterior ainda se encontra ativa. <br /><br />Se pretende reinstalar phpBB 2 dever� clicar no bot�o Sim abaixo. Tenha aten��o que ao reinstalar o phpBB 2 todas as informa��es existentes ser�o apagadas, n�o sendo feitas c�pias de seguran�a! O Nome de Usu�rio e Senha de administrador que voc� tem usado para logar-se ao f�rum ser� recriada ap�s esta reinstala��o, n�o sendo quaisquer outros dados de configura��o salvados. <br /><br />Pense cautelosamente antes de clicar em Sim!';

$lang['Inst_Step_0'] = 'Obrigado por ter escolhido phpBB 2. Para completar esta instala��o preencha os detalhes pedidos abaixo. Note que o banco de dados onde as informa��es do f�rum ser�o instaladas j� deve existir. Caso v� instalar o phpBB 2 num banco de dados que use ODBC, ou seja, MS Acess, deve primeiro ser criado um DS.';

$lang['Start_Install'] = 'Come�ar a Instala��o';
$lang['Finish_Install'] = 'Terminar a Instala��o';

$lang['Default_lang'] = 'Idioma padr�o do F�rum';
$lang['DB_Host'] = 'Hostname do Sevidor da Base de Dados / DSN';
$lang['DB_Name'] = 'Nome do Banco de Dados';
$lang['DB_Username'] = 'Nome de Usu�rio no Banco de Dados';
$lang['DB_Password'] = 'Senha no Banco de Dados';
$lang['Database'] = 'Seu Banco de Dados';
$lang['Install_lang'] = 'Escolher o Idioma para a Instala��o';
$lang['dbms'] = 'Tipo de Banco de Dados';
$lang['Table_Prefix'] = 'Prefixo para as tabelas no Banco de Dados';
$lang['Admin_Username'] = 'Nome de Usu�rio do Administrador';
$lang['Admin_Password'] = 'Senha do Administrador';
$lang['Admin_Password_confirm'] = 'Senha do Administrador [Confirmar]';

$lang['Inst_Step_2'] = 'O seu Nome de Usu�rio para Administrador foi criado.  Neste momento a Instala��o B�sica est� conclu�da. Ir� ser conduzido agora a um painel onde poder� administrar a sua nova instala��o. Verificar os detalhes de Configura��o Geral e proceder �s mudan�as necess�rias. Obrigado por usar phpBB 2.';

$lang['Unwriteable_config'] = 'O seu arquivo de configura��o n�o pode ser escrito neste momento. Ser� feita uma c�pia do arquivo quando carregar no bot�o abaixo. Dever� colocar este arquivo na mesma pasta que o phpBB 2. Uma vez conclu�do, voc� dever� logar-se usando o Nome de Usu�rio de administrador e respectiva senha que forneceu anteriormente visitando de seguida o Painel de Administra��o (um atalho ir� surgir na parte inferior de cada janela) para verificar a configura��o geral. Obrigado por escolher phpBB 2.';
$lang['Download_config'] = 'Download a Configura��o';

$lang['ftp_choose'] = 'Escolher um m�todo para Download';
$lang['ftp_option'] = '<br />Visto as extens�es de FTP se encontrarem ativas nesta vers�o de PHP deve-lhe ter sido tamb�m dada a op��o para primeiro tentar automaticamente FTP o arquivo de configura��o para o local certo.';
$lang['ftp_instructs'] = 'Escolheu para FTP automaticamente o arquivo para a conta contendo phpBB 2. Por favor forne�a a informa��o abaixo para facilitar o processo. De notar que o \'path\' do FTP dever� ser exatamente o mesmo via FTP para a instala��o do seu phpBB 2 como se estivesse a efetuar FTP usando um cliente normal.';
$lang['ftp_info'] = 'Escrever a informa��o do FTP';
$lang['Attempt_ftp'] = 'Tentando FTP o arquivo de configura��o para o local correto';
$lang['Send_file'] = 'Apenas enviar o arquivo para mim e eu farei o FTP manualmente';
$lang['ftp_path'] = 'Path de FTP para o phpBB 2';
$lang['ftp_username'] = 'O seu nome de Usu�rio para o FTP';
$lang['ftp_password'] = 'A sua senha para o FTP';
$lang['Transfer_config'] = 'Iniciar a Transfer�ncia';
$lang['NoFTP_config'] = 'A tentativa de FTP o arquivo de configura��o para o local correto falhou. Por favor, fazer o download do mesmo e efetuar o FTP manualmente. ';

$lang['Install'] = 'Instalar';
$lang['Upgrade'] = 'Atualizar';


$lang['Install_Method'] = 'Escolher o seu m�todo de instala��o';

$lang['Install_No_Ext'] = 'A configura��o de PHP no seu Server n�o aceita o tipo de base de dados que escolheu';

$lang['Install_No_PCRE'] = 'O phpBB2 requer o m�dulo para PHP \'Perl-Compatible Regular Expressions\' cuja configura��o do seu PHP parece n�o aceitar!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'A sua vers�o est� em dia, n�o h� atualiza��es para a sua vers�o do phpBB.';
$lang['Version_not_up_to_date'] = 'Sua instala��o <b>n�o</b> est� em dia. Atualiza��es s�o necess�rias para a vers�o do seu phpBB, por favor visite <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obter a �ltima vers�o.';
$lang['Latest_version_info'] = 'A �ltima vers�o lan�ada � a <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Voc� est� usando o <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Imposs�vel abrir conex�o com o servidor do phpBB.com, o erro reportado �:<br />%s';
$lang['Socket_functions_disabled'] = 'Desativado para usar fun��es de socket.';
$lang['Mailing_list_subscribe_reminder'] = 'Para receber as �ltimas informa��es e not�cias sobre o phpBB, clique <a href="http://www.phpbb.com/support/" target="_new">aqui</a> e cadastre seu e-mail.';
$lang['Version_information'] = 'Informa��o da vers�o';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Tentativas permitidas de login';
$lang['Max_login_attempts_explain'] = 'O n�mero de tentativas de logins permitidos.';
$lang['Login_reset_time'] = 'Tempo para bloqueio de login';
$lang['Login_reset_time_explain'] = 'Tempo em minutos que o usu�rio tem que esperar at� que esteja permitido a logar-se outra vez ap�s ter excedido o n�mero de tentativas permitidas de login.';

//
// That's all Folks!
// -------------------------------------------------

?>