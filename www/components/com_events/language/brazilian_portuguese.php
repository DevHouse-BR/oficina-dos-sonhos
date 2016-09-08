<?php
// $Id: brazilian_portuguese.php,v 1.6 2004/10/05 20:23:01 mleinmueller Exp $
//Events//
/**
* Content code
* @package Mambo Open Source
* @Copyright (C) 2000 - 2003 Eric Lamette, Dave McDonnell
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Check
DEFINE("_CAL_LANG_INCLUDED", 1);

// Months
DEFINE("_CAL_LANG_JANUARY", "Janeiro");
DEFINE("_CAL_LANG_FEBRUARY", "Fevereiro");
DEFINE("_CAL_LANG_MARCH", "Mar�o");
DEFINE("_CAL_LANG_APRIL", "Abril");
DEFINE("_CAL_LANG_MAY", "Maio");
DEFINE("_CAL_LANG_JUNE", "Junho");
DEFINE("_CAL_LANG_JULY", "Julho");
DEFINE("_CAL_LANG_AUGUST", "Agosto");
DEFINE("_CAL_LANG_SEPTEMBER", "Setembro");
DEFINE("_CAL_LANG_OCTOBER", "Outubro");
DEFINE("_CAL_LANG_NOVEMBER", "Novembro");
DEFINE("_CAL_LANG_DECEMBER", "Dezembro");

// Short day names
DEFINE("_CAL_LANG_SUN", "Dom");
DEFINE("_CAL_LANG_MON", "Seg");
DEFINE("_CAL_LANG_TUE", "Ter");
DEFINE("_CAL_LANG_WED", "Qua");
DEFINE("_CAL_LANG_THU", "Qui");
DEFINE("_CAL_LANG_FRI", "Sex");
DEFINE("_CAL_LANG_SAT", "Sab");

// Days
DEFINE("_CAL_LANG_SUNDAY", "Domingo");
DEFINE("_CAL_LANG_MONDAY", "Segunda");
DEFINE("_CAL_LANG_TUESDAY", "Ter�a");
DEFINE("_CAL_LANG_WEDNESDAY", "Quarta");
DEFINE("_CAL_LANG_THURSDAY", "Quinta");
DEFINE("_CAL_LANG_FRIDAY", "Sexta");
DEFINE("_CAL_LANG_SATURDAY", "S�bado");

// Days lettres
DEFINE("_CAL_LANG_SUNDAYSHORT", "D");
DEFINE("_CAL_LANG_MONDAYSHORT", "S");
DEFINE("_CAL_LANG_TUESDAYSHORT", "T");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "Q");
DEFINE("_CAL_LANG_THURSDAYSHORT", "Q");
DEFINE("_CAL_LANG_FRIDAYSHORT", "S");
DEFINE("_CAL_LANG_SATURDAYSHORT", "S");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "Todos os dias");
DEFINE("_CAL_LANG_EACHWEEK", "Todas as semanas");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Todas as semanas pares");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Todas as semanas �mpares");
DEFINE("_CAL_LANG_EACHMONTH", "Todos os meses");
DEFINE("_CAL_LANG_EACHYEAR", "Todos os anos");
DEFINE("_CAL_LANG_ONLYDAYS", "Somente os dias marcados");
DEFINE("_CAL_LANG_EACH", "Cada");
DEFINE("_CAL_LANG_EACHOF","de cada");
DEFINE("_CAL_LANG_ENDMONTH", "t�rmino do m�s");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "Por n�mero do dia");

// User type
DEFINE("_CAL_LANG_ANONYME", "An�nimo");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Obrigado por sua colabora��o - Verificaremos sua proposta!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Este evento foi modificado."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "Este evento foi apagado!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Voc� n�o tem acesso a esse servi�o!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nova submiss�o");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Nova modifica��o");

// Presentation
DEFINE("_CAL_LANG_BY", "por");
DEFINE("_CAL_LANG_FROM", "De");
DEFINE("_CAL_LANG_TO", "Para");
DEFINE("_CAL_LANG_ARCHIVE", "Arquivos");
DEFINE("_CAL_LANG_WEEK", "a semana");
DEFINE("_CAL_LANG_NO_EVENTS", "Nenhum evento");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Nenhum evento para");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Nenhum evento para o");
DEFINE("_CAL_LANG_THIS_DAY", "esse dia");
DEFINE("_CAL_LANG_THIS_MONTH", "Esse mes");
DEFINE("_CAL_LANG_LAST_MONTH", "M�s anterior");
DEFINE("_CAL_LANG_NEXT_MONTH", "Pr�ximo m�s");
DEFINE("_CAL_LANG_EVENTSFOR", "Eventos para");
DEFINE("_CAL_LANG_EVENTSFORTHE", "Eventos para o");
DEFINE("_CAL_LANG_REP_DAY", "dia");
DEFINE("_CAL_LANG_REP_WEEK", "semana");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "semana par");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "semana �mpar");
DEFINE("_CAL_LANG_REP_MONTH", "m�s");
DEFINE("_CAL_LANG_REP_YEAR", "ano");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Please select an event first");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Atual");
DEFINE("_CAL_LANG_VIEWTOCOME", "Pr�ximo");
DEFINE("_CAL_LANG_VIEWBYDAY", "Ver por dia");
DEFINE("_CAL_LANG_VIEWBYCAT", "Ver por categoria");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Ver o m�s");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Ver por ano");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Ver por semana");
DEFINE("_CAL_LANG_BACK", "Voltar");
DEFINE("_CAL_LANG_CLOSE", "Close");
DEFINE("_CAL_LANG_PREVIOUSDAY", "Dia anterior");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Semana anterior");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "M�s anterior");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Ano anterior");
DEFINE("_CAL_LANG_NEXTDAY", "Pr�ximo dia");
DEFINE("_CAL_LANG_NEXTWEEK", "Pr�xima semana");
DEFINE("_CAL_LANG_NEXTMONTH", "Pr�ximo m�s");
DEFINE("_CAL_LANG_NEXTYEAR", "Pr�ximo ano");

DEFINE("_CAL_LANG_ADMINPANEL", "Painel de administra��o");
DEFINE("_CAL_LANG_ADDEVENT", "Adicionar um evento");
DEFINE("_CAL_LANG_MYEVENTS", "Meus eventos");
DEFINE("_CAL_LANG_DELETE", "Apagar");
DEFINE("_CAL_LANG_MODIFY", "Modificar");

// Form
DEFINE("_CAL_LANG_HELP", "Ajuda");

DEFINE("_CAL_LANG_CAL_TITLE", "Eventos");
DEFINE("_CAL_LANG_ADD_TITLE", "Adicionar");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Modificar");

DEFINE("_CAL_LANG_EVENT_TITLE", "Assunto");
DEFINE("_CAL_LANG_EVENT_COLOR", "Cor");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Usar Cor da Categoria");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Categorias");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "Por favor selecione uma categoria");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "Atividade");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "Para incluir uma URL ou um EMAIL, simplesmente digite <u>http://www.meusite.com</u> ou <u>mailto:meu@email.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Endere�o");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Contato");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Informa��es complementares");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Autor (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Data de inicio");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Data do t�rmino");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Hora de inicio");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Hora do t�rmino");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Hora de inicio");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Hora do t�rmino");
DEFINE("_CAL_LANG_PUB_INFO", "Informa��es de publica��o");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Tipo de repeti��o");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Dia de repeti��o");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Dias da semana");
DEFINE("_CAL_LANG_EVENT_PER", "por");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Week(s) of a month repeat type week");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "Prever");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Cancelar");
DEFINE("_CAL_LANG_SUBMITSAVE", "Salvar");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Todas as categorias");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "Nivel de acesso");
DEFINE("_CAL_LANG_EVENT_HITS", "Hits");
DEFINE("_CAL_LANG_EVENT_STATE", "Estado");
DEFINE("_CAL_LANG_EVENT_CREATED", "Criado");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Novo evento");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "�ltima modifica��o");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "N�o modificado");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "Algum tipo de Atividade\\ndescri��o deve ser inclu�do.");


	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>Cor</b>
          </td>
          <td>Escolha a cor de fundo que ser� visivel no calend�rio mensal.  Se a Categoria estiver marcada,
		  a cor ser� a cor da categoria (definida pelo administrador do site) que � escolhida na tabela de Conte�do para o evento, e o
		  bot�o 'Color Picker' ser� desabilitado.</td>
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>Data</b></td>
          <td>Escolha a Data de Inicio e a Data de Encerramento do seu evento.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Hora</b></td>
          <td>Escolha a Hora do Dia de seu evento.  O formato � <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>A Hora pode ser especificada no formato de 12 ou 24 horas .<br/><br/><b><i><span style='color:red;'>(New)</span></i> Nota</b> caso especial ocorre para <span style='color:red;font-weight:bold;'>evento de dia �nico que atravessa a noite</span>.  IE. Para um evento de dia �nico que inicia as  19:00 e encerra as  3:00, as Datas de In�cio e Fim <b>DEVEM</b> be&nbsp;
		   ser a mesma  data, e devem ser configuradas para a data correspondente ao dia antes da meia-noite.</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Tipo de Repeti��o</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>By Day</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Todo Dia<br/><i>(default)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Choose this option for a non-reoccurring single or multi-day event, with a new event occurrence for every day within the Start and End Date range</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>Por Semana</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Uma vez por Semana
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  Essa op��o permite escolher a semana de repeti��o
                  <table border="0" width="100%" height="100%"><tr><td><b>N�mero do dia</b> para repetir cada  10/../2003</td></tr><tr><td><b>Nome do dia</b> para repetir cada Segunda </td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Multiplos Dias de Semana por Semana
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">Essa op��p permite escolher em que dia da semana seu evento ser� visivel.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>Semana no M�s # <br>For 'Once per Week' and 'Multiple Days Per Week' options above</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Semana 1 :</b> 1� semana do m�s</td></tr>
                    <tr><td><b>Semana 2 :</b> 2� semana do m�s</td></tr>
                    <tr><td><b>Semana 3 :</b> 3� semana do m�s</td></tr>
                    <tr><td><b>Semana 4 :</b> 4� semana do m�s</td></tr>
                    <tr><td><b>Semana 5 :</b> 5� semana do m�s (se aplic�vel)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Por M�s</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">Uma Vez por M�s</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     Essa op��o permite escolher o Dia do M�s que repetir� o evento
                     <table border="0" width="100%" height="100%"><tr><td><b>Day number</b> for repeat type each 10/../2003</td></tr><tr><td><b>Day name</b> for repeat type each Monday</td></tr></table>

                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  End of Each Month
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
				   The event is on the last day of each month independently of the day number, if that last day
		falls within the date range specified by the Start and End Dates for the event.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>By Year</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Uma vez por Ano
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Essa op��o permite escolher um �nico dia por Ano
                  <table border="0" width="100%" height="100%"><tr><td><b>Day number</b> for repeat type each 10/../2003</td></tr><tr><td><b>Day name</b> for repeat type each Monday</td></tr></table>
                  </font>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!-- END REPEAT -->
END;


// Do not change below
DEFINE("_CAL_LANG_EVENT_FORM_HELP_ADMIN", $com_events_form_help_color . $com_events_form_help .$com_events_form_help_extended);

if(!defined("_CAL_FORCE_CAT_COLOR_EVENT_FORM") || _CAL_FORCE_CAT_COLOR_EVENT_FORM == "NO")
	$com_events_form_help = $com_events_form_help_color . $com_events_form_help;

if(!defined("_CAL_SIMPLE_EVENT_FORM") || _CAL_SIMPLE_EVENT_FORM == "NO")
	$com_events_form_help .= $com_events_form_help_extended;

DEFINE("_CAL_LANG_EVENT_FORM_HELP", $com_events_form_help);

?>
