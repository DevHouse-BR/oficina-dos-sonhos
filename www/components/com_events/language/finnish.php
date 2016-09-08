<?php
// $Id: finnish.php,v 1.1 2004/12/15 22:32:40 mleinmueller Exp $
//Events//
/** Finnish language file for Events 1.2
* author Markku Suominen (markku.suominen@antamis.com)
* Content code
* @package Mambo Open Source
* @Copyright (C) 2000 - 2003 Eric Lamette, Dave McDonnell
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
**/

defined( '_VALID_MOS' ) or die( 'P��sy estetty.' );

//Check
DEFINE("_CAL_LANG_INCLUDED", 1);

// Months
DEFINE("_CAL_LANG_JANUARY", "Tammikuu");
DEFINE("_CAL_LANG_FEBRUARY", "Helmikuu");
DEFINE("_CAL_LANG_MARCH", "Maaliskuu");
DEFINE("_CAL_LANG_APRIL", "Huhtikuu");
DEFINE("_CAL_LANG_MAY", "Toukokuu");
DEFINE("_CAL_LANG_JUNE", "Kes�kuu");
DEFINE("_CAL_LANG_JULY", "Hein�kuu");
DEFINE("_CAL_LANG_AUGUST", "Elokuu");
DEFINE("_CAL_LANG_SEPTEMBER", "Syyskuu");
DEFINE("_CAL_LANG_OCTOBER", "Lokakuu");
DEFINE("_CAL_LANG_NOVEMBER", "Marraskuu");
DEFINE("_CAL_LANG_DECEMBER", "Joulukuu");

// Short day names
DEFINE("_CAL_LANG_SUN", "Su");
DEFINE("_CAL_LANG_MON", "Ma");
DEFINE("_CAL_LANG_TUE", "Ti");
DEFINE("_CAL_LANG_WED", "Ke");
DEFINE("_CAL_LANG_THU", "To");
DEFINE("_CAL_LANG_FRI", "Pe");
DEFINE("_CAL_LANG_SAT", "La");

// Days
DEFINE("_CAL_LANG_SUNDAY", "Sunnuntai");
DEFINE("_CAL_LANG_MONDAY", "Maanantai");
DEFINE("_CAL_LANG_TUESDAY", "Tiistai");
DEFINE("_CAL_LANG_WEDNESDAY", "Keskiviikko");
DEFINE("_CAL_LANG_THURSDAY", "Torstai");
DEFINE("_CAL_LANG_FRIDAY", "Perjantai");
DEFINE("_CAL_LANG_SATURDAY", "Lauantai");

// Days lettres
DEFINE("_CAL_LANG_SUNDAYSHORT", "S");
DEFINE("_CAL_LANG_MONDAYSHORT", "M");
DEFINE("_CAL_LANG_TUESDAYSHORT", "T");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "K");
DEFINE("_CAL_LANG_THURSDAYSHORT", "T");
DEFINE("_CAL_LANG_FRIDAYSHORT", "P");
DEFINE("_CAL_LANG_SATURDAYSHORT", "L");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "Yksitt�inen tapahtuma");
DEFINE("_CAL_LANG_EACHWEEK", "Kerran viikossa");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "Joka parillinen viikko");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "Joka pariton viikko");
DEFINE("_CAL_LANG_EACHMONTH", "Joka kuukausi");
DEFINE("_CAL_LANG_EACHYEAR", "Joka vuosi");
DEFINE("_CAL_LANG_ONLYDAYS", "Vain valittuina p�ivin�");
DEFINE("_CAL_LANG_EACH", "Joka");
DEFINE("_CAL_LANG_EACHOF","jokainen");
DEFINE("_CAL_LANG_ENDMONTH", "kuukauden lopussa");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "P�iv�n numeron mukaan");

// User type
DEFINE("_CAL_LANG_ANONYME", "Nimet�n");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "Kiitos viestist�si - vahvistamme ehdotuksesi!"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "Tapahtumaa on muokattu."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "Tapahtuma on poistettu!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "Sinulla ei ole k�ytt�oikeuksia t�lle sivustolle!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "Uusi viesti l�htien");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "Uusi muutos l�htien");

// Presentation
DEFINE("_CAL_LANG_BY", "Lis�nnyt"); 
DEFINE("_CAL_LANG_FROM", "Alkaa"); 
DEFINE("_CAL_LANG_TO", "Loppuu"); 
DEFINE("_CAL_LANG_ARCHIVE", "Arkistot"); 
DEFINE("_CAL_LANG_WEEK", "viikko"); 
DEFINE("_CAL_LANG_NO_EVENTS", "Ei tapahtumia");
DEFINE("_CAL_LANG_NO_EVENTFOR", "Ei tapahtumia ajanjaksolla");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "Ei tapahtumia");
DEFINE("_CAL_LANG_THIS_DAY", "t�m� p�iv�");
DEFINE("_CAL_LANG_THIS_MONTH", "T�m� kuukausi");
DEFINE("_CAL_LANG_LAST_MONTH", "Edellinen kuukausi");
DEFINE("_CAL_LANG_NEXT_MONTH", "Seuraava kuukausi");
DEFINE("_CAL_LANG_EVENTSFOR", "Tapahtumat ajalla - ");
DEFINE("_CAL_LANG_EVENTSFORTHE", "Tapahtumat ajalla - ");
DEFINE("_CAL_LANG_REP_DAY", "p�iv�");
DEFINE("_CAL_LANG_REP_WEEK", "viikko");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "joka toinen viikko");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "joka kolmas viikko");
DEFINE("_CAL_LANG_REP_MONTH", "kuukausi");
DEFINE("_CAL_LANG_REP_YEAR", "vuosi");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Valitse tapahtuma");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "T�n��n");
DEFINE("_CAL_LANG_VIEWTOCOME", "Tulossa t�ss� kuussa");
DEFINE("_CAL_LANG_VIEWBYDAY", "P�iv�n�kym�");
DEFINE("_CAL_LANG_VIEWBYCAT", "Katso kategorioittain");
DEFINE("_CAL_LANG_VIEWBYMONTH", "Kuukausin�kym�");
DEFINE("_CAL_LANG_VIEWBYYEAR", "Vuosin�kym�");
DEFINE("_CAL_LANG_VIEWBYWEEK", "Viikkon�kym�");
DEFINE("_CAL_LANG_BACK", "Takaisin");
DEFINE("_CAL_LANG_CLOSE", "Sulje");
DEFINE("_CAL_LANG_PREVIOUSDAY", "Edellinen p�iv�");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "Edellinen viikko");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "Edellinen kuukausi");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "Edellinen vuosi");
DEFINE("_CAL_LANG_NEXTDAY", "Seuraava p�iv�");
DEFINE("_CAL_LANG_NEXTWEEK", "Seuraava viikko");
DEFINE("_CAL_LANG_NEXTMONTH", "Seuraava kuukausi");
DEFINE("_CAL_LANG_NEXTYEAR", "Seuraava vuosi");

DEFINE("_CAL_LANG_ADMINPANEL", "Yll�pito");
DEFINE("_CAL_LANG_ADDEVENT", "Lis�� tapahtuma");
DEFINE("_CAL_LANG_MYEVENTS", "Omat tapahtumat");
DEFINE("_CAL_LANG_DELETE", "Poista");
DEFINE("_CAL_LANG_MODIFY", "Muokkaa");

// Form
DEFINE("_CAL_LANG_HELP", "Ohje");

DEFINE("_CAL_LANG_CAL_TITLE", "Tapahtumat");
DEFINE("_CAL_LANG_ADD_TITLE", "Lis��");
DEFINE("_CAL_LANG_MODIFY_TITLE", "Muokkaa");

DEFINE("_CAL_LANG_EVENT_TITLE", "Aihe");
DEFINE("_CAL_LANG_EVENT_COLOR", "V�ri");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "K�yt� kategorian v�ri�");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "Kategoria");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "Valitse kategoria");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "Tapahtuman kuvaus");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "Lis��  www- tai s�hk�postiosoite kirjoittamallla esim. <u>http://www.yle.fi</u> tai <u>info@yle.fi</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "Sijainti");
DEFINE("_CAL_LANG_EVENT_CONTACT", "Yhteyshenkil�");
DEFINE("_CAL_LANG_EVENT_EXTRA", "Lis�tietoa");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "Kirjoittanut (alias)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "Aloitusp�iv�");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "Lopetusp�iv�");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "Aloitus (tunti)");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "Lopetus (tunti)");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "Aloitusaika");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "Lopetusaika");
DEFINE("_CAL_LANG_PUB_INFO", "Julkaisup�iv�");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "Toistotyyppi");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "Toistop�iv�");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "P�ivi� viikossa");
DEFINE("_CAL_LANG_EVENT_PER", "joka");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "Kuukauden viikko (viikot)");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "Esikatsele");
DEFINE("_CAL_LANG_SUBMITCANCEL", "Peru");
DEFINE("_CAL_LANG_SUBMITSAVE", "Tallenna");

DEFINE("_CAL_LANG_E_WARNWEEKS", "Valitse viikko.");
DEFINE("_CAL_LANG_E_WARNDAYS", "Valitse p�iv�.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "Kaikki kategoriat");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "K�ytt�oikeustaso");
DEFINE("_CAL_LANG_EVENT_HITS", "Osumia");
DEFINE("_CAL_LANG_EVENT_STATE", "Tila");
DEFINE("_CAL_LANG_EVENT_CREATED", "Luotu");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "Uusi tapahtuma");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "Viimeksi muokattu");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "Ei muokattu");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "Tapahtuman kuvaus tulee lis�t�.");
 


 $com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>V�ri</b>
          </td>
          <td>Valitse tapahtuman taustav�ri kalenterissa. Jos kategoria -valintalaatikko on valittu, k�ytet��n kategorian v�ri�. Kategorian
          v�ri� hallinnoidaan yll�pitoliittym�st�. 'Color Picker' painike ei ole k�ytett�viss�.</td>
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>P�iv�ys</b></td>
          <td>Valitse tapahtuman aloitus- ja lopetusp�iv�.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>Aika</b></td>
          <td>Valitse tapahtuman kellonaika. K�yt� muotoa <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>
          Aika voi olla muotoa 12 tai 24 tuntia.<br/><br/><b><i><span style='color:red;'>(Uutta)</span></i> Huomaa</b>
          ett� yksitt�inen <span style='color:red;font-weight:bold;'>yli puoleny�n jatkuva tapahtuma</span> on erityistapaus.
          Jos tapahtuma alkaa klo 19:00 ja loppuu klo 3:00, aloitus- ja lopetusp�iv�n <b>TULEE</b> &nbsp;
		   olla samat. P�iv�m��r�ksi asetetaan aloitusp�iv�.</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>Toistotyyppi</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>P�iv�</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Joka p�iv�<br/><i>(oletus)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">Valitse t�m� jos kyseess� yksitt�inen tai useamman p�iv�n mittainen yht�jaksoinen
                   tapahtuma.</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>Viikko</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Kerran viikossa
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  Voit valita toistuvan tapahtuman viikonp�iv�n
                  <table border="0" width="100%" height="100%"><tr><td><b>P�iv�n numero</b> toistotyypille 
                 joka 10/../2005</td></tr><tr><td><b>P�iv�n nimi</b> toistotyypille joka Maananta</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    Monena p�iv�n� viikossa
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">Asetuksen avulla voit valita min� viikonp�ivin� tapahtuma on n�kyviss�.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>Kuukauden viikko # <br>
                  Asetusten 'Kerran viikossa' ja 'Monena p�iv�n� viikossa' valinnat yll�</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Viikko 1 :</b> Kuukauden 1. viikko</td></tr>
                    <tr><td><b>Viikko 2 :</b> Kuukauden 2. viikko</td></tr>
                    <tr><td><b>Viikko 3 :</b> Kuukauden 3. viikko</td></tr>
                    <tr><td><b>Viikko 4 :</b> Kuukauden 4. viikko</td></tr>
                    <tr><td><b>Viikko 5 :</b> Kuukauden 5. viikko (jos mahdollista)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Kuukausi</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">Kerran kuussa</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     Voit valita tapahtuman toistop�iv�ksi kuukauden tietyn p�iv�n
                     <table border="0" width="100%" height="100%"><tr><td><b>P�iv�n numero</b> toistotyypeille 10/../2005
                     </td></tr><tr><td><b>P�iv�n nimi</b> toistotyypeille jokainen Maanantai</td></tr></table>

                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  Jokaisen kuukauden lopussa
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
				   Tapahtuma on jokaisen kuukauden viimeinen p�iv� jos kuun viimeinen p�iv� on tapahtuman m��ritellyll� 
				   aloitus- ja lopetusp�iv� -alueella.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>Vuosi</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Kerran vuodessa
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  Voit valita tapahtuman toistop�iv�ksi vuoden tietyn p�iv�n
                  <table border="0" width="100%" height="100%"><tr><td><b>P�iv�n numero</b> toistotyypeille jokainen 10/../2003</td></tr><tr><td>
                  <b>P�iv�n nimi</b> toistotyypeille jokainen Maanantai</td></tr></table>
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