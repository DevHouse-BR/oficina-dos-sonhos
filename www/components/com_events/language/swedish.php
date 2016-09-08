<?php
// $Id: swedish.php,v 1.11 2004/10/05 20:23:01 mleinmueller Exp $
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
DEFINE("_CAL_LANG_JANUARY", "Januari");
DEFINE("_CAL_LANG_FEBRUARY", "Februari");
DEFINE("_CAL_LANG_MARCH", "Mars");
DEFINE("_CAL_LANG_APRIL", "April");
DEFINE("_CAL_LANG_MAY", "Maj");
DEFINE("_CAL_LANG_JUNE", "Juni");
DEFINE("_CAL_LANG_JULY", "Juli");
DEFINE("_CAL_LANG_AUGUST", "Augusti");
DEFINE("_CAL_LANG_SEPTEMBER", "September");
DEFINE("_CAL_LANG_OCTOBER", "Oktober");
DEFINE("_CAL_LANG_NOVEMBER", "November");
DEFINE("_CAL_LANG_DECEMBER", "December");

// Short day names
DEFINE("_CAL_LANG_SUN", "S�n");
DEFINE("_CAL_LANG_MON", "M�n");
DEFINE("_CAL_LANG_TUE", "Tis");
DEFINE("_CAL_LANG_WED", "Ons");
DEFINE("_CAL_LANG_THU", "Tor");
DEFINE("_CAL_LANG_FRI", "Fre");
DEFINE("_CAL_LANG_SAT", "L�r");

// Days
DEFINE("_CAL_LANG_SUNDAY", "S�ndag");
DEFINE("_CAL_LANG_MONDAY", "M�ndag");
DEFINE("_CAL_LANG_TUESDAY", "Tisdag");
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
DEFINE("_CAL_LANG_ALLDAYS", "Varje dag");
DEFINE("_CAL_LANG_EACHWEEK", "Varje vecka");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Alla j�mna veckor");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Alla udda veckor");
DEFINE("_CAL_LANG_EACHMONTH", "Varje m�nad");
DEFINE("_CAL_LANG_EACHYEAR", "Varje �r");
DEFINE("_CAL_LANG_ONLYDAYS", "Endast utvalda dagar");
DEFINE("_CAL_LANG_EACH", "varje");
DEFINE("_CAL_LANG_EACHOF","i varje");
DEFINE("_CAL_LANG_ENDMONTH", "sista dag i m�naden");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "P� datumet");

// User type
DEFINE("_CAL_LANG_ANONYME", "Anonym");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Tack f�r ditt bidrag - Vi kommer kontrollera dina uppgifter!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Denna aktivitet har �ndrats."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "Denna aktivitet har raderats!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Du har inte tillg�ng till denna funktion!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nytt bidrag p�");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Ny f�r�ndring p�");

// Presentation
DEFINE("_CAL_LANG_BY", "registerat av");
DEFINE("_CAL_LANG_FROM", "Fr�n");
DEFINE("_CAL_LANG_TO", "Till");
DEFINE("_CAL_LANG_ARCHIVE", "Arkivet");
DEFINE("_CAL_LANG_WEEK", "veckan");
DEFINE("_CAL_LANG_NO_EVENTS", "Inga h�ndelser");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Inga h�ndelser");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Inga h�ndelser den");
DEFINE("_CAL_LANG_THIS_DAY", "Vad h�nder idag?");
DEFINE("_CAL_LANG_THIS_MONTH", "Vad h�nder denna m�nad?");
DEFINE("_CAL_LANG_LAST_MONTH", "F�reg�ende m�nad");
DEFINE("_CAL_LANG_NEXT_MONTH", "N�sta m�nad");
DEFINE("_CAL_LANG_EVENTSFOR", "H�ndelser");
DEFINE("_CAL_LANG_EVENTSFORTHE", "H�ndelser");
DEFINE("_CAL_LANG_REP_DAY", "dag");
DEFINE("_CAL_LANG_REP_WEEK", "vecka");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "j�mn vecka");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "udda vecka");
DEFINE("_CAL_LANG_REP_MONTH", "m�nad");
DEFINE("_CAL_LANG_REP_YEAR", "�r");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Please select an event first");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Dagens h�ndelser");
DEFINE("_CAL_LANG_VIEWTOCOME", "M�nadens h�ndelser");
DEFINE("_CAL_LANG_VIEWBYDAY", "Urval per dag");
DEFINE("_CAL_LANG_VIEWBYCAT", "Urval per kategori");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Urval per m�nad");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Urval per �r");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Urval per vecka");
DEFINE("_CAL_LANG_BACK", "Tillbaka");
DEFINE("_CAL_LANG_CLOSE", "Close");
DEFINE("_CAL_LANG_PREVIOUSDAY", "F�reg�ende dag");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "F�reg�ende vecka");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "F�reg�ende m�nad");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "F�reg�ende �r");
DEFINE("_CAL_LANG_NEXTDAY", "N�sta dag");
DEFINE("_CAL_LANG_NEXTWEEK", "N�sta vecka");
DEFINE("_CAL_LANG_NEXTMONTH", "N�sta m�nad");
DEFINE("_CAL_LANG_NEXTYEAR", "N�sta �r");

DEFINE("_CAL_LANG_ADMINPANEL", "Administrationspanel");
DEFINE("_CAL_LANG_ADDEVENT", "L�gg till h�ndelse");
DEFINE("_CAL_LANG_MYEVENTS", "Min kalender");
DEFINE("_CAL_LANG_DELETE", "Ta bort");
DEFINE("_CAL_LANG_MODIFY", "�ndra");

// Form
DEFINE("_CAL_LANG_HELP", "Hj�lp");

DEFINE("_CAL_LANG_CAL_TITLE", "Kalendarium");
DEFINE("_CAL_LANG_ADD_TITLE", "L�gg till");
DEFINE("_CAL_LANG_MODIFY_TITLE", "�ndra");

DEFINE("_CAL_LANG_EVENT_TITLE", "Rubrik");
DEFINE("_CAL_LANG_EVENT_COLOR", "F�rg");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Use Category Color");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategorier");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "V�lj kategori");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "H�ndelser");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "F�r att l�gga till en URL eller en epostadress, skriv <br><u>http://www.mysite.com</u> eller <u>mailto:my@mail.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Plats");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Kontakta");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Extra information");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "F�rfattare (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Startdatum");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Slutdatum");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Starttid");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Sluttid");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Start Time");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "End Time");
DEFINE("_CAL_LANG_PUB_INFO", "Publiceringsinformation");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Repetitionstyp");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Repetera dag");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Veckodagar");
DEFINE("_CAL_LANG_EVENT_PER", "per");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Veckor i en m�nad f�r repetition varje vecka");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "F�rhandsgranska");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Avbryt");
DEFINE("_CAL_LANG_SUBMITSAVE", "Spara");

DEFINE("_CAL_LANG_E_WARNWEEKS", "Var v�nlig och v�lj en vecka.");
DEFINE("_CAL_LANG_E_WARNDAYS", "Var v�nlig och v�lj en dag.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Alla kategorier");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "Accessniv�");
DEFINE("_CAL_LANG_EVENT_HITS", "Bes�k");
DEFINE("_CAL_LANG_EVENT_STATE", "Tillst�nd");
DEFINE("_CAL_LANG_EVENT_CREATED", "Skapad");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Ny h�ndelse");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Senast �ndrad");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "Aldrig �ndrad");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "Du m�ste ge n�gon beskrivning\\nav h�ndelsen.");


	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>F�rgv�ljare</b>
          </td>
          <td>V�lj den bakgrundsf�rg som skall visas i kalendervyn. Om du kryssar i
	Kategori-rutan kommer bakgrundsf�rgen att v�ljas efter den av webadministrat�ren
	f�rinst�llda f�r h�ndelsens kategori. Kategori v�ljer du p� Inneh�lls-fliken. F�rgv�ljaren kommer d� ocks� att avaktiveras.
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>Datum</b></td>
          <td>V�lj Startdatum och Slutdatum f�r h�ndelsen.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Tid</b></td>
	<td>V�lj Klockslag f�r h�ndelsen. Klockslagen skall f�lja formatet <span style='color:blue;font-weight:bold;'>tt:mm {am|pm}</span>.<br/>Klockslag kan anges i 12- eller 24-timmarsformat.<br/><br/><b><i><span style='color:red;'>(Nyhet)</span></i> Notera</b> specialfallet <span style='color:red;font-weight:bold;'>enstaka h�ndelse �ver natt</span>.  T.ex. en enstaka h�ndelse som startar 19:00 och slutar 03:00 <b>M�STE</b> ha Startdatum och Slutdatum lika, dvs. den dag som h�ndelsen startade (f�re midnatt).</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Repetitionsintervall</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top">
                  <u>Per Dag</u>
                  </td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">
	            Varje Dag<br/><i>(standard)</i>
	          </font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">F�r icke �terkommande h�ndelser och f�r flerdagarsh�ndelser som har ett nytt tillf�lle varje dag inom intervallet.</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top">
	          <u>Per Vecka</u>
                </td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    En G�ng Per Vecka
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  V�lj veckodag som h�ndelsen repeteras p�.
	  <table border="0" width="100%" height="100%"><tr><td><b>Datum</b> f�r repetition p� samma datum, t.ex den 7:e oavsett vilken veckodag det �r.</td></tr><tr><td><b>Dag</b> f�r repetition, t.ex varje m�ndag.</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Flera G�nger Per Vecka
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">V�lj vilka veckodagar h�ndelsen intr�ffar.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">Vecka I M�naden<br><i>F�r alternativen 'En G�ng Per Vecka' och 'Flera G�nger Per Vecka' ovan, ange om h�ndelsen bara intr�ffar vissa veckor</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
	  <tr><td><b>Vecka 1 :</b> 1:a veckan i m�naden</td></tr>
	  <tr><td><b>Vecka 2 :</b> 2:a veckan i m�naden</td></tr>
	  <tr><td><b>Vecka 3 :</b> 3:e veckan i m�naden</td></tr>
	  <tr><td><b>Vecka 4 :</b> 4:e veckan i m�naden</td></tr>
	  <tr><td><b>Vecka 5 :</b> 5:e veckan i m�naden (om till�mpligt)</td></tr>                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top">
	          <u>Per M�nad</u>
                </td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
	            En G�ng Per M�nad
	          </font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     V�lj dag i m�naden som h�ndelsen repeteras.
	  <table border="0" width="100%" height="100%"><tr><td><b>Datum</b> f�r repetition p� datumet, t.ex den 7:e varje m�nad.</td></tr><tr><td><b>Dag</b> f�r repetition t.ex den f�rsta m�ndagen.</td></tr></table>

                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  M�nadens Sista Dag
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
	  H�ndelsen intr�ffar sista dagen i m�naden, oavsett datum, om den dagen infaller i intervallet.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top">
	          <u>Per �r</u>
	        </td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  En G�ng Om �ret
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  V�lj en dag varje �r
                  <table border="0" width="100%" height="100%"><tr><td><b>Datum</b> f�r repetition p� datumet</td></tr><tr><td><b>Dag</b> f�r repetion t.ex p� f�rsta m�ndagen p� �ret.</td></tr></table>
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
