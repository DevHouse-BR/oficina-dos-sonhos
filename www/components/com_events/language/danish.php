<?php
// $Id: danish.php,v 1.1 2005/01/16 12:02:02 mleinmueller Exp $
//Events//
// Translated by Per Bressendorff, email: per at bressendorff dot com
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
DEFINE("_CAL_LANG_JANUARY", "Januar");
DEFINE("_CAL_LANG_FEBRUARY", "Februar");
DEFINE("_CAL_LANG_MARCH", "Marts");
DEFINE("_CAL_LANG_APRIL", "April");
DEFINE("_CAL_LANG_MAY", "Maj");
DEFINE("_CAL_LANG_JUNE", "Juni");
DEFINE("_CAL_LANG_JULY", "Juli");
DEFINE("_CAL_LANG_AUGUST", "August");
DEFINE("_CAL_LANG_SEPTEMBER", "September");
DEFINE("_CAL_LANG_OCTOBER", "Oktober");
DEFINE("_CAL_LANG_NOVEMBER", "November");
DEFINE("_CAL_LANG_DECEMBER", "December");

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
DEFINE("_CAL_LANG_EACHWEEK", "Hver uge");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Hver lige uge");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Hver ulige uge");
DEFINE("_CAL_LANG_EACHMONTH", "Hver m�ned");
DEFINE("_CAL_LANG_EACHYEAR", "Hvert �r");
DEFINE("_CAL_LANG_ONLYDAYS", "Kun valgte dage");
DEFINE("_CAL_LANG_EACH", "Hver");
DEFINE("_CAL_LANG_EACHOF","af hver");
DEFINE("_CAL_LANG_ENDMONTH", "slutningen af m�neden");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "efter dag nummer");

// User type
DEFINE("_CAL_LANG_ANONYME", "Anononym");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Tak for dit bidrag - Vi vil overveje dit forslag!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "H�ndelsen er blevet �ndret."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "H�ndelsen er blevet slettet!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Du har ikke adgang til denne funktion !"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nyt bidrag den");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Ny �ndring den");

// Presentation
DEFINE("_CAL_LANG_BY", "af"); 
DEFINE("_CAL_LANG_FROM", "Fra"); 
DEFINE("_CAL_LANG_TO", "Til"); 
DEFINE("_CAL_LANG_ARCHIVE", "Arkiv"); 
DEFINE("_CAL_LANG_WEEK", "ugen"); 
DEFINE("_CAL_LANG_NO_EVENTS", "Ingen h�ndelser");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Ingen h�ndelser for");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Ingen h�ndelser for");
DEFINE("_CAL_LANG_THIS_DAY", "Denne dag");
DEFINE("_CAL_LANG_THIS_MONTH", "Denne m�ned");
DEFINE("_CAL_LANG_LAST_MONTH", "Sidste m�ned");
DEFINE("_CAL_LANG_NEXT_MONTH", "N�ste m�ned");
DEFINE("_CAL_LANG_EVENTSFOR", "H�ndelser for");
DEFINE("_CAL_LANG_EVENTSFORTHE", "H�ndelser for");
DEFINE("_CAL_LANG_REP_DAY", "dag");
DEFINE("_CAL_LANG_REP_WEEK", "uge");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "hver anden uge");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "hver tredje uge");
DEFINE("_CAL_LANG_REP_MONTH", "m�ned");
DEFINE("_CAL_LANG_REP_YEAR", "�r");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "V�lg f�rst en h�ndelse");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Vis i dag");
DEFINE("_CAL_LANG_VIEWTOCOME", "Kommende i denne m�ned");
DEFINE("_CAL_LANG_VIEWBYDAY", "Vis efter dag");
DEFINE("_CAL_LANG_VIEWBYCAT", "Vis efter kategori");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Vis efter m�ned");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Vis efter �r");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Vis efter uge");
DEFINE("_CAL_LANG_BACK", "Tilbage");
DEFINE("_CAL_LANG_CLOSE", "Afslut");
DEFINE("_CAL_LANG_PREVIOUSDAY", "Foreg�ende dag");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Foreg�ende uge");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "Foreg�ende m�ned");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Foreg�ende �r");
DEFINE("_CAL_LANG_NEXTDAY", "N�ste dag");
DEFINE("_CAL_LANG_NEXTWEEK", "N�ste uge");
DEFINE("_CAL_LANG_NEXTMONTH", "N�ste m�ned");
DEFINE("_CAL_LANG_NEXTYEAR", "N�ste �r");

DEFINE("_CAL_LANG_ADMINPANEL", "Admin panel");
DEFINE("_CAL_LANG_ADDEVENT", "Tilf�j en h�ndelse");
DEFINE("_CAL_LANG_MYEVENTS", "Mine h�ndelser");
DEFINE("_CAL_LANG_DELETE", "Slet");
DEFINE("_CAL_LANG_MODIFY", "Rediger");

// Form
DEFINE("_CAL_LANG_HELP", "Hj�lp");

DEFINE("_CAL_LANG_CAL_TITLE", "H�ndelser");
DEFINE("_CAL_LANG_ADD_TITLE", "Tilf�j");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Rediger");

DEFINE("_CAL_LANG_EVENT_TITLE", "Emne");
DEFINE("_CAL_LANG_EVENT_COLOR", "Farve");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Anvend kategori farve");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategorier");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "V�lg en kategori");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "Aktivitet");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "For at tilf�je en URL eller e-mail adresse, skriv blot <br><u>http://www.mysite.com</u> eller <u>mailto:my@mail.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Sted");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Kontakt");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Yderligere Info");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Forfatter (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Start dato");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Slut dato");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Start time");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Slut time");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Start tidspunkt");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Slut tidspunkt");
DEFINE("_CAL_LANG_PUB_INFO", "Publikationsdato");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Gentagelsestype");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Gentag dag");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Dage i ugen");
DEFINE("_CAL_LANG_EVENT_PER", "pr.");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Uge(r) i en m�ned gentag ugetype");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "Forh�ndsvis");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Afbryd");
DEFINE("_CAL_LANG_SUBMITSAVE", "Gem");

DEFINE("_CAL_LANG_E_WARNWEEKS", "V�lg en uge.");
DEFINE("_CAL_LANG_E_WARNDAYS", "V�lg en dag.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Alle kategorier");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "Adgangs niveau");
DEFINE("_CAL_LANG_EVENT_HITS", "Hits");
DEFINE("_CAL_LANG_EVENT_STATE", "Status");
DEFINE("_CAL_LANG_EVENT_CREATED", "Oprettet");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Ny h�ndelse");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Sidst �ndret");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "U�ndret");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "En form for aktivitet\\nbeskrivelse m� angives.");
 

	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>Color</b>
          </td>
          <td>V�lg den baggrundsfarve som vil v�re synlig i m�nedskalendervisningen. Hvis kategoriafkrydsningsboksen er krydset af, s� vil farven blive sat til den som er standard for denne kategori
		  (definert af administratoren), og Farvev�lger knappen vil v�re sl�et fra.</td>
		  
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>Dato</b></td>
          <td>V�lg start og slutdato for denne aktivitet.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Tid</b></td>
          <td>V�lg tidspunktet for denne aktivitet. Formatet er <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>Tiden kan enten v�re angivet i 12 eller 24 timers format.<br/><br/><b><i><span style='color:red;'>(Ny)</span></i> Bem�rk</b> at hvis du har en <span style='color:red;font-weight:bold;'>en-dags, over midnat aktivitet</span>, f.eks. med start kl 19:00 og slut kl 03:00, s� <b>SKAL</b> Start og Slutdato v�re sat til den samme dato, og skal s�ttes til den dato som korresponderer med dagen f�r midnat, dvs. datoen som aktiviteten starter p�.</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Gentagelsestype</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>Dagligt</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Hver dag<br/><i>(default)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">V�lg denne for ikke-gentagende eller fler-dags aktiviteter, hvor aktiviteten gentages for hver dag mellem Start og Slutdatoen.</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>Ugentligt</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    En gang om ugen
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  Her kan du v�lge hvilken ugedag der gentages
                  <table border="0" width="100%" height="100%"><tr><td><b>Dagsnummer</b> for gentagelser af typen hver 10. i m�neden.</td></tr><tr><td><b>Dag-navn</b> for gentagelser af typen hver mandag</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Flere dage pr. uge
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">Denne option giver mulighed for at v�lge p� hvilke ugedage din h�ndelse vil blive vist.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>Uge af m�ned # <br>For 'En gang pr. uge' og 'Flere dage hver uge' muligheden ovenfor</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Week 1 :</b> 1. uge i m�neden</td></tr>
                    <tr><td><b>Week 2 :</b> 2. uge i m�neden</td></tr>
                    <tr><td><b>Week 3 :</b> 3. uge i m�neden</td></tr>
                    <tr><td><b>Week 4 :</b> 4. uge i m�neden</td></tr>
                    <tr><td><b>Week 5 :</b> 5. uge i m�neden (hvis muligt)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>M�nedsvist</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">En gang pr. m�ned</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     Denne mulighed lader dig v�lge dagen for gentagelser af typen dag i m�neden
                     <table border="0" width="100%" height="100%"><tr><td><b>Dag nummer</b> for gentagelser af typen hver 10. i m�neden</td></tr><tr><td><b>Dag-navn</b> for gentagelser af typen hver mandag</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  Slutningen af hver m�ned
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
				   Denne h�ndelse er af sidste dag i m�neden uafh�ngig af dag nummer, 
				   hvis den sidste dag forekommer indenfor datoene for Start og Slut for h�ndelsen.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>�rligt</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  En gang om �ret
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Denne mulighed lader dig v�lge en enkelt dag hvert �r
                  <table border="0" width="100%" height="100%"><tr><td><b>Dag nummer</b> for gentagelser af typen hver 10/../2005
                  </td></tr><tr><td><b>Dag-navn</b> for gentagelser af typen hver mandag</td></tr></table>
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
