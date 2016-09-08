<?php
// $Id: czech.php,v 1.5 2004/10/05 20:23:01 mleinmueller Exp $
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
DEFINE("_CAL_LANG_JANUARY", "Leden");
DEFINE("_CAL_LANG_FEBRUARY", "�nor");
DEFINE("_CAL_LANG_MARCH", "B�ezen");
DEFINE("_CAL_LANG_APRIL", "Duben");
DEFINE("_CAL_LANG_MAY", "Kv�ten");
DEFINE("_CAL_LANG_JUNE", "�erven");
DEFINE("_CAL_LANG_JULY", "�ervenec");
DEFINE("_CAL_LANG_AUGUST", "Srpen");
DEFINE("_CAL_LANG_SEPTEMBER", "Z���");
DEFINE("_CAL_LANG_OCTOBER", "��jen");
DEFINE("_CAL_LANG_NOVEMBER", "Listopad");
DEFINE("_CAL_LANG_DECEMBER", "Prosinec");

// Short day names
DEFINE("_CAL_LANG_SUN", "Ne");
DEFINE("_CAL_LANG_MON", "Po");
DEFINE("_CAL_LANG_TUE", "�t");
DEFINE("_CAL_LANG_WED", "St");
DEFINE("_CAL_LANG_THU", "�t");
DEFINE("_CAL_LANG_FRI", "P�");
DEFINE("_CAL_LANG_SAT", "So");

// Days
DEFINE("_CAL_LANG_SUNDAY", "Ned�le");
DEFINE("_CAL_LANG_MONDAY", "Pond�l�");
DEFINE("_CAL_LANG_TUESDAY", "�ter�");
DEFINE("_CAL_LANG_WEDNESDAY", "St�eda");
DEFINE("_CAL_LANG_THURSDAY", "�tvrtek");
DEFINE("_CAL_LANG_FRIDAY", "P�tek");
DEFINE("_CAL_LANG_SATURDAY", "Sobota");

// Days lettres
DEFINE("_CAL_LANG_SUNDAYSHORT", "N");
DEFINE("_CAL_LANG_MONDAYSHORT", "P");
DEFINE("_CAL_LANG_TUESDAYSHORT", "�");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "S");
DEFINE("_CAL_LANG_THURSDAYSHORT", "�");
DEFINE("_CAL_LANG_FRIDAYSHORT", "P");
DEFINE("_CAL_LANG_SATURDAYSHORT", "S");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "Ka�d� den");
DEFINE("_CAL_LANG_EACHWEEK", "Ka�d� t�den");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Ka�d� sud� t�den");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Ka�d� lich� t�den");
DEFINE("_CAL_LANG_EACHMONTH", "Ka�d� m�s�c");
DEFINE("_CAL_LANG_EACHYEAR", "Ka�d� rok");
DEFINE("_CAL_LANG_ONLYDAYS", "Pouze vybran� dny");
DEFINE("_CAL_LANG_EACH", "Ka�d�");
DEFINE("_CAL_LANG_EACHOF","ka�d�ho");
DEFINE("_CAL_LANG_ENDMONTH", "konec m�s�ce");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "By day number");

// User type
DEFINE("_CAL_LANG_ANONYME", "Anonymn�");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "D�kujeme za p��sp�vek. P�ed publikov�n�m, bude V� p��sp�vek zkontrolov�n!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Tato ud�lost byla zm�n�na."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "Tato ud�lost byla smaz�na!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Nem�te p��stup k t�to slu�b�!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Nov� p��sp�vek k");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Nov� zm�na k");

// Presentation
DEFINE("_CAL_LANG_BY", "autor"); 
DEFINE("_CAL_LANG_FROM", "Od"); 
DEFINE("_CAL_LANG_TO", "Do"); 
DEFINE("_CAL_LANG_ARCHIVE", "Arch�v"); 
DEFINE("_CAL_LANG_WEEK", "t�den"); 
DEFINE("_CAL_LANG_NO_EVENTS", "��dn� ud�lost");
DEFINE("_CAL_LANG_NO_EVENTFOR", "��dn� ud�lost");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "��dn� ud�lost pro");
DEFINE("_CAL_LANG_REP_DAY", "day");
DEFINE("_CAL_LANG_THIS_DAY", "tento den");
DEFINE("_CAL_LANG_THIS_MONTH", "Tento m�s�c");
DEFINE("_CAL_LANG_LAST_MONTH", "Last month");
DEFINE("_CAL_LANG_NEXT_MONTH", "Next month");
DEFINE("_CAL_LANG_EVENTSFOR", "Ud�lost pro");
DEFINE("_CAL_LANG_EVENTSFORTHE", "Ud�lost pro");
DEFINE("_CAL_LANG_REP_WEEK", "t�den");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "sud� t�den");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "lich� t�den");
DEFINE("_CAL_LANG_REP_MONTH", "m�s�c");
DEFINE("_CAL_LANG_REP_YEAR", "rok");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Please select an event first");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "Dnes");
DEFINE("_CAL_LANG_VIEWTOCOME", "UpComing this month");
DEFINE("_CAL_LANG_VIEWBYDAY", "See by day");
DEFINE("_CAL_LANG_VIEWBYCAT", "N�hled podle kategori�");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Tento m�s�c");
DEFINE("_CAL_LANG_VIEWBYYEAR", "See by year");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Tento t�den");
DEFINE("_CAL_LANG_BACK", "Zp�t");
DEFINE("_CAL_LANG_CLOSE", "Close");
DEFINE("_CAL_LANG_PREVIOUSDAY", "P�edchoz� den");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Previous week");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "P�edchoz� m�s�c");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Previous year");
DEFINE("_CAL_LANG_NEXTDAY", "Dal�� den");
DEFINE("_CAL_LANG_NEXTWEEK", "Next week");
DEFINE("_CAL_LANG_NEXTMONTH", "Dal�� m�s�c");
DEFINE("_CAL_LANG_NEXTYEAR", "Next year");

DEFINE("_CAL_LANG_ADMINPANEL", "Asministrace");
DEFINE("_CAL_LANG_ADDEVENT", "P�idat ud�lost");
DEFINE("_CAL_LANG_MYEVENTS", "Moje ud�losti");
DEFINE("_CAL_LANG_DELETE", "Smazat");
DEFINE("_CAL_LANG_MODIFY", "Zm�nit");

// Form
DEFINE("_CAL_LANG_HELP", "N�pov�da");

DEFINE("_CAL_LANG_CAL_TITLE", "Ud�lost");
DEFINE("_CAL_LANG_ADD_TITLE", "P�idat");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Zm�nit");

DEFINE("_CAL_LANG_EVENT_TITLE", "P�edm�t");
DEFINE("_CAL_LANG_EVENT_COLOR", "Barva");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "Use Category Color");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategorie");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "Vyberte pros�m kategorii");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "�innost");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "Pokud chcete p�idat URL nebo EMAIL, napi�t� jednodu�e <u>tp://www.pr�klad.cz</u> or <u>mailto:muj@email.cz</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "M�sto");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Kontakt");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Dal�� info");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Autor (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Za��tek (datum)");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Konec (datum)");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Za��tek (hodina)");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Konec (hodina)");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Za��tek (hodina)");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Konec (hodina)");
DEFINE("_CAL_LANG_PUB_INFO", "Publikovat");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Repeat type");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Opakovat den");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "Dny v t�dnu");
DEFINE("_CAL_LANG_EVENT_PER", "per");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Week(s) of a month repeat type week");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "N�hled");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Zru�it");
DEFINE("_CAL_LANG_SUBMITSAVE", "Ulo�it");

DEFINE("_CAL_LANG_E_WARNWEEKS", "Veuillez choisir une semaine.");
DEFINE("_CAL_LANG_E_WARNDAYS", "Veuillez choisir un jour.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "V�echny kategorie");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "�rove� p��stupu");
DEFINE("_CAL_LANG_EVENT_HITS", "Shl�dnuto");
DEFINE("_CAL_LANG_EVENT_STATE", "Status");
DEFINE("_CAL_LANG_EVENT_CREATED", "Vytvo�eno");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Nov� ud�lost");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Naposledy zm�n�no");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "Nezm�n�no");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "Some sort of Activity\\ndescription must be entered.");
 

	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>Color</b>
          </td>
          <td>Choose the color of the background which will be visible in month calendar view.  If the Category checkbox is checked,
		  the color will default to the color of the category (defined by the site admin) that is chosen under the Content tab form for the event, and the
		  'Color Picker' button will be disabled.</td>
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>Date</b></td>
          <td>Choose the Begin Date and the End Date of your event.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Time</b></td>
          <td>Choose the Time of Day of your event.  Format is <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>Time can be specified in either 12 or 24 hr format.<br/><br/><b><i><span style='color:red;'>(New)</span></i> Note</b> that a special case occurs for <span style='color:red;font-weight:bold;'>single day over-night events</span>.  IE. For a single day event beginning at say 19:00 and finishing at 3:00, the Start and End Dates <b>MUST</b> be&nbsp;
		   the same date, and should be set to the date corresponding to the day before midnight.</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Repeat Type</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>By Day</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Every Day<br/><i>(default)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Choose this option for a non-reoccurring single or multi-day event, with a new event occurrence for every day within the Start and End Date range</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>By Week</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Once Per Week
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  This option allow to choose the weekday of repeat
                  <table border="0" width="100%" height="100%"><tr><td><b>Day number</b> for repeat type each 10/../2003</td></tr><tr><td><b>Day name</b> for repeat type each Monday</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Multiple Week Days Per Week
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">This option allow to choose on which week days your event will be visible.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>Week of Month # <br>For 'Once per Week' and 'Multiple Days Per Week' options above</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Week 1 :</b> 1st week of the month</td></tr>
                    <tr><td><b>Week 2 :</b> 2nd week of the month</td></tr>
                    <tr><td><b>Week 3 :</b> 3rd week of the month</td></tr>
                    <tr><td><b>Week 4 :</b> 4th week of the month</td></tr>
                    <tr><td><b>Week 5 :</b> 5th week of the month (if applicable)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>By Month</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">Once Per Month</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     This option allow to choose the repeating Day of the Month
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
                  Once Per Year
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  This option allow to choose a single day every Year
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
