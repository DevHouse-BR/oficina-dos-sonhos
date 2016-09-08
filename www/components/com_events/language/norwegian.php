<?php
// $Id: norwegian.php,v 1.10 2004/10/05 20:23:01 mleinmueller Exp $
//Events//
// Translated by Sven-Erik Andersen, email: sven dash erik dot andersen at pkf107 dot no
/**
* Content code
* @package Mambo Open Source
* @Copyright (C) 2000 - 2003 Eric Lamette, Dave McDonnell
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
**/
defined( '_VALID_MOS' ) or die( 'Direkte adgang til denne siden er ikke tillatt.' );

//Check
DEFINE("_CAL_LANG_INCLUDED", 1);

// Months
DEFINE("_CAL_LANG_JANUARY", "Januar");
DEFINE("_CAL_LANG_FEBRUARY", "Februar");
DEFINE("_CAL_LANG_MARCH", "Mars");
DEFINE("_CAL_LANG_APRIL", "April");
DEFINE("_CAL_LANG_MAY", "Mai");
DEFINE("_CAL_LANG_JUNE", "Juni");
DEFINE("_CAL_LANG_JULY", "Juli");
DEFINE("_CAL_LANG_AUGUST", "August");
DEFINE("_CAL_LANG_SEPTEMBER", "September");
DEFINE("_CAL_LANG_OCTOBER", "Oktober");
DEFINE("_CAL_LANG_NOVEMBER", "November");
DEFINE("_CAL_LANG_DECEMBER", "Desember");

// Short day names
DEFINE("_CAL_LANG_SUN", "S�n");
DEFINE("_CAL_LANG_MON", "Man");
DEFINE("_CAL_LANG_TUE", "Tir");
DEFINE("_CAL_LANG_WED", "Ons");
DEFINE("_CAL_LANG_THU", "Tor");
DEFINE("_CAL_LANG_FRI", "Fre");
DEFINE("_CAL_LANG_SAT", "L�r");

// Days
DEFINE("_CAL_LANG_SUNDAY", "S�ndag");
DEFINE("_CAL_LANG_MONDAY", "Mandag");
DEFINE("_CAL_LANG_TUESDAY", "Tirsdag");
DEFINE("_CAL_LANG_WEDNESDAY", "Onsdag");
DEFINE("_CAL_LANG_THURSDAY", "Torsdag");
DEFINE("_CAL_LANG_FRIDAY", "Fredag");
DEFINE("_CAL_LANG_SATURDAY", "L�rdag");

// Days lettres
DEFINE("_CAL_LANG_SUNDAYSHORT", "S");
DEFINE("_CAL_LANG_MONDAYSHORT", "M");
DEFINE("_CAL_LANG_TUESDAYSHORT", "T");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "O");
DEFINE("_CAL_LANG_THURSDAYSHORT", "T");
DEFINE("_CAL_LANG_FRIDAYSHORT", "F");
DEFINE("_CAL_LANG_SATURDAYSHORT", "L");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "Hver dag");
DEFINE("_CAL_LANG_EACHWEEK", "Hver uke");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Hver partallsuke");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Hver oddetalsuke");
DEFINE("_CAL_LANG_EACHMONTH", "Hver m�ned");
DEFINE("_CAL_LANG_EACHYEAR", "Hvert �r");
DEFINE("_CAL_LANG_ONLYDAYS", "Bare valgte dager");
DEFINE("_CAL_LANG_EACH", "Hver");
DEFINE("_CAL_LANG_EACHOF","av hver");
DEFINE("_CAL_LANG_ENDMONTH", "slutten av m�neden");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "Etter dagnummer");

// User type
DEFINE("_CAL_LANG_ANONYME", "Anonym");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Takk for ditt bidrag - vi vil kontrollere ditt forslag!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Hendelsen har blitt redigert."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "Denne hendelsen har blitt slettet!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Du har ikke adgang til denne tjenesten!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nytt bidrag den");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Ny endring den");

// Presentation
DEFINE("_CAL_LANG_BY", "av");
DEFINE("_CAL_LANG_FROM", "Fra");
DEFINE("_CAL_LANG_TO", "Til");
DEFINE("_CAL_LANG_ARCHIVE", "Arkiv");
DEFINE("_CAL_LANG_WEEK", "uka");
DEFINE("_CAL_LANG_NO_EVENTS", "Ingen hendelser");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Ingen hendelser for");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Ingen hendelsen for den");
DEFINE("_CAL_LANG_THIS_DAY", "Denne dag");
DEFINE("_CAL_LANG_THIS_MONTH", "Denne m�ned");
DEFINE("_CAL_LANG_LAST_MONTH", "Forrige m�ned");
DEFINE("_CAL_LANG_NEXT_MONTH", "Neste m�ned");
DEFINE("_CAL_LANG_EVENTSFOR", "Hendelser for");
DEFINE("_CAL_LANG_EVENTSFORTHE", "Hendelser for den");
DEFINE("_CAL_LANG_REP_DAY", "dag");
DEFINE("_CAL_LANG_REP_WEEK", "uke");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "partallsuke");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "oddetallsuke");
DEFINE("_CAL_LANG_REP_MONTH", "m�ned");
DEFINE("_CAL_LANG_REP_YEAR", "�r");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Please select an event first");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Vis idag");
DEFINE("_CAL_LANG_VIEWTOCOME", "Kommende denne m�ned");
DEFINE("_CAL_LANG_VIEWBYDAY", "Vis etter dag");
DEFINE("_CAL_LANG_VIEWBYCAT", "Vis etter kategori");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Vis etter m�ned");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Vis etter �r");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Vis etter uke");
DEFINE("_CAL_LANG_BACK", "Tilbake");
DEFINE("_CAL_LANG_CLOSE", "Close");
DEFINE("_CAL_LANG_PREVIOUSDAY", "Forrige dag");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Forrige uke");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "Forrige m�ned");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Forrige �r");
DEFINE("_CAL_LANG_NEXTDAY", "Neste dag");
DEFINE("_CAL_LANG_NEXTWEEK", "Neste uke");
DEFINE("_CAL_LANG_NEXTMONTH", "Neste m�ned");
DEFINE("_CAL_LANG_NEXTYEAR", "Neste �r");

DEFINE("_CAL_LANG_ADMINPANEL", "Administrasjonspanel");
DEFINE("_CAL_LANG_ADDEVENT", "Legg til ny hendelse");
DEFINE("_CAL_LANG_MYEVENTS", "Mine hendelser");
DEFINE("_CAL_LANG_DELETE", "Slett");
DEFINE("_CAL_LANG_MODIFY", "Rediger");

// Form
DEFINE("_CAL_LANG_HELP", "Hjelp");

DEFINE("_CAL_LANG_CAL_TITLE", "Hendelser");
DEFINE("_CAL_LANG_ADD_TITLE", "Ny");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Rediger");

DEFINE("_CAL_LANG_EVENT_TITLE", "Tittel");
DEFINE("_CAL_LANG_EVENT_COLOR", "Farge");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Bruk kategorifarge");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategorier");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "Velg en kategori");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "Aktivitet");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "For � legge til en URL eller en MAIL, s� bare skriv <u>http://www.mysite.com</u> eller <u>mailto:my@mail.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Sted");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Kontakt");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Ekstra informasjon");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Forfatter (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Startdato");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Sluttdato");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Starttid");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Slutttid");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Starttid");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Slutttid");
DEFINE("_CAL_LANG_PUB_INFO", "Publiseringsinformasjon");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Gjentagelsestype");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Gjenta dag");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Dager i uken");
DEFINE("_CAL_LANG_EVENT_PER", "per");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Uke(r) i en m�ned, gjenta uketype");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "Forh�ndsvis");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Avbryt");
DEFINE("_CAL_LANG_SUBMITSAVE", "Lagre");

DEFINE("_CAL_LANG_E_WARNWEEKS", "Velg en uke.");
DEFINE("_CAL_LANG_E_WARNDAYS", "Velg en dag.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Alle kategorier");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "Adgangsniv�");
DEFINE("_CAL_LANG_EVENT_HITS", "Treff");
DEFINE("_CAL_LANG_EVENT_STATE", "Status");
DEFINE("_CAL_LANG_EVENT_CREATED", "Opprettet");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Ny hendelse");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Sist endret");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "Ikke endret");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "En form for aktivitet\\nbeskrivelse m� oppgis.");


	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top"><b>Farge</b></td>
          <td>Velg den bakgrunnsfargen som vil v�re synlig i m�nedkalendervisningen. Hvis kategoriavkrysningsboksen er krysset av, s� vil fargen bli satt til den som er standard for denne kategorien (definert av administrator), og Fargevelger knappen vil v�re avsl�tt.</td>
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>Dato</b></td>
          <td>Velg start og sluttdato for denne aktiviteten.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Tid</b></td>
          <td>Velg tidspunktet for denne aktiviteten. Formatet er <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>Tid kan enten bli spesifisert i 12 eller 24 timersformat.<br/><br/><b><i><span style='color:red;'>(Ny)</span></i> Merk</b> at hvis du har en <span style='color:red;font-weight:bold;'>en dags, over natten aktivitet</span>, f.eks. med start kl 19:00 og slutt kl 03:00, s� <b>M�</b> Start og Sluttdato v�re satt til den samme datoen, og skal settes til den datoen som korresponderer med dagen f�r midnatt, dvs. datoen som aktiviteten starter p�.</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Gjentagelsestype</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>Etter dag</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays"><font color="#000000">Hver dag<br/><i>(standard)</i></font></td>
                <td align="left" valign="top" class="frm_td_bydays"><font color="#000000">Velg denne for ikke gjentagende eller fler-dagers aktiviteter, hvor aktiviteten gjentas for hver dag mellom Start og Sluttdatoen.</font></td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>Etter uke</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks"><font color="#000000">En gang per uke</font></td>
                <td align="left" valign="top" class="frm_td_byweeks"><font color="#000000">Denne opsjonen lar deg velge ukedag for gjentagelse.<table border="0" width="100%" height="100%"><tr><td><b>Dagnummer</b> for gjentagelser av typen hver 10. i m�neden.</td></tr><tr><td><b>Dag-navn</b> for gjentagelser av typen hver mandag</td></tr></table></font></td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks"><font color="#000000">Flere dager hver uke</font></td>
                <td align="left" valign="top" class="frm_td_byweeks">
                <font color="#000000">Denne opsjonen lar deg velge hvilke p� hvilke ukedager din aktivitet vil foreg�.</font></td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks"><font color="#000000"><i>Uke av m�ned # <br>For 'En gang per uke' og 'Flere dager hver uke' opsjonen ovenfor</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Uke 1 :</b> 1. uka i m�neden</td></tr>
                    <tr><td><b>Uke 2 :</b> 2. uka i m�neden</td></tr>
                    <tr><td><b>Uke 3 :</b> 3. uka i m�neden</td></tr>
                    <tr><td><b>Uke 4 :</b> 4. uka i m�neden</td></tr>
                    <tr><td><b>Uke 5 :</b> 5. uka i m�neden (hvis tilgjengelig)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Etter m�ned</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth"><font color="#000000">En gang per m�ned</font></td>
                <td align="left" valign="top" class="frm_td_bymonth"><font color="#000000">Denne opsjonen lar deg velge den dagen for gjentagelser av typen dag i m�neden<table border="0" width="100%" height="100%"><tr><td><b>Dag nummer</b> for gjentagelser av typen hver 10 i m�neden</td></tr><tr><td><b>Dag-navn</b> for gjentagelser av typen hver mandag</td></tr></table></font></td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth"><font color="#000000">Slutten av hver m�ned</font></td>
                <td align="left" valign="top" class="frm_td_bymonth"><font color="#000000">Denne hendelsen er av siste dag i m�neden uavhengig av dag nummer, hvis den siste dagen forekommer innenfor datoene for Start og Slutt for aktiviteten.</font></td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Etter �r</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear"><font color="#000000">En gang per �r</font></td>
                <td align="left" valign="top" class="frm_td_byyear"><font color="#000000">Denne opsjonen lar deg velge en enkelt dag hvert �r<table border="0" width="100%" height="100%"><tr><td><b>Dag nummer</b> for gjentagelser av typen hver 10/../2003</td></tr><tr><td><b>Dag-navn</b> for gjentagelser av typen hver mandag</td></tr></table></font></td>
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
