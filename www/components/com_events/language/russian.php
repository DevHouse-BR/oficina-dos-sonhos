<?php
// $Id: russian.php,v 1.7 2004/10/05 20:23:01 mleinmueller Exp $
//Events//
/**
* Content code
* @package Mambo Open Source
* @Copyright (C) 2000 - 2003 Eric Lamette, Dave McDonnell
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
**/
// �������: ������� �������� (DJ SLIDER). ���������� � ���������: ��� ������ (Rosida) v.1.1 20/04/2004 13:53

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Check
DEFINE("_CAL_LANG_INCLUDED", 1);

// Months
DEFINE("_CAL_LANG_JANUARY", "������");
DEFINE("_CAL_LANG_FEBRUARY", "�������");
DEFINE("_CAL_LANG_MARCH", "����");
DEFINE("_CAL_LANG_APRIL", "������");
DEFINE("_CAL_LANG_MAY", "���");
DEFINE("_CAL_LANG_JUNE", "����");
DEFINE("_CAL_LANG_JULY", "����");
DEFINE("_CAL_LANG_AUGUST", "������");
DEFINE("_CAL_LANG_SEPTEMBER", "��������");
DEFINE("_CAL_LANG_OCTOBER", "�������");
DEFINE("_CAL_LANG_NOVEMBER", "������");
DEFINE("_CAL_LANG_DECEMBER", "�������");

// Short day names
DEFINE("_CAL_LANG_SUN", "��");
DEFINE("_CAL_LANG_MON", "��");
DEFINE("_CAL_LANG_TUE", "��");
DEFINE("_CAL_LANG_WED", "��");
DEFINE("_CAL_LANG_THU", "��");
DEFINE("_CAL_LANG_FRI", "��");
DEFINE("_CAL_LANG_SAT", "��");

// Days
DEFINE("_CAL_LANG_SUNDAY", "�����������");
DEFINE("_CAL_LANG_MONDAY", "�����������");
DEFINE("_CAL_LANG_TUESDAY", "�������");
DEFINE("_CAL_LANG_WEDNESDAY", "�����");
DEFINE("_CAL_LANG_THURSDAY", "�������");
DEFINE("_CAL_LANG_FRIDAY", "�������");
DEFINE("_CAL_LANG_SATURDAY", "�������");

// Days letters
DEFINE("_CAL_LANG_SUNDAYSHORT", "��");
DEFINE("_CAL_LANG_MONDAYSHORT", "��");
DEFINE("_CAL_LANG_TUESDAYSHORT", "��");
DEFINE("_CAL_LANG_WEDNESDAYSHORT", "��");
DEFINE("_CAL_LANG_THURSDAYSHORT", "��");
DEFINE("_CAL_LANG_FRIDAYSHORT", "��");
DEFINE("_CAL_LANG_SATURDAYSHORT", "��");

// Repeat type
DEFINE("_CAL_LANG_ALLDAYS", "������ ����");
DEFINE("_CAL_LANG_EACHWEEK", "������ ������");
DEFINE("_CAL_LANG_EACHWEEKPAIR", "������ ������ ������");
DEFINE("_CAL_LANG_EACHWEEKIMPAIR", "������ �������� ������");
DEFINE("_CAL_LANG_EACHMONTH", "������ �����");
DEFINE("_CAL_LANG_EACHYEAR", "������ ���");
DEFINE("_CAL_LANG_ONLYDAYS", "������ ��������� ���");
DEFINE("_CAL_LANG_EACH", "����.");
DEFINE("_CAL_LANG_EACHOF","�������");
DEFINE("_CAL_LANG_ENDMONTH", "����� ������");

// Repeat days
DEFINE("_CAL_LANG_BYDAYNUMBER", "��� �� ������");

// User type
DEFINE("_CAL_LANG_ANONYME", "���������");

// Post
//PAS D'ACCENTS DANS LES _ACT_
DEFINE("_CAL_LANG_ACT_ADDED", "���������� ��� �� ���������� �������! �� �������� � ���������� ��� � ��������� �����"); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_MODIFIED", "������ ������� ���� ��������."); //NO ACCENT !!
DEFINE("_CAL_LANG_ACT_DELETED", "������ ������� ���� �������!"); //NO ACCENT !!
DEFINE("_CAL_LANG_NOPERMISSION", "� ��� ��� ������� � ����� �������!"); //NO ACCENT !!

DEFINE("_CAL_LANG_MAIL_ADDED", "����� ����������:");
DEFINE("_CAL_LANG_MAIL_MODIFIED", "����� ���������");

// Presentation
DEFINE("_CAL_LANG_BY", "������������:");
DEFINE("_CAL_LANG_FROM", "�");
DEFINE("_CAL_LANG_TO", "��");
DEFINE("_CAL_LANG_ARCHIVE", "������");
DEFINE("_CAL_LANG_WEEK", "������");
DEFINE("_CAL_LANG_NO_EVENTS", "��� �������");
DEFINE("_CAL_LANG_NO_EVENTFOR", "��� ������� ��:");
DEFINE("_CAL_LANG_NO_EVENTFORTHE", "��� ������� ��:");
DEFINE("_CAL_LANG_THIS_DAY", "���� ����");
DEFINE("_CAL_LANG_THIS_MONTH", "� ���� ������...");
DEFINE("_CAL_LANG_LAST_MONTH", "� ������� ������...");
DEFINE("_CAL_LANG_NEXT_MONTH", "� ��������� ������...");
DEFINE("_CAL_LANG_EVENTSFOR", "������� ��:");
DEFINE("_CAL_LANG_EVENTSFORTHE", "������� ��");
DEFINE("_CAL_LANG_REP_DAY", "����");
DEFINE("_CAL_LANG_REP_WEEK", "������ ��:");
DEFINE("_CAL_LANG_REP_WEEKPAIR", "������ ������");
DEFINE("_CAL_LANG_REP_WEEKIMPAIR", "�������� ������");
DEFINE("_CAL_LANG_REP_MONTH", "����� ��:");
DEFINE("_CAL_LANG_REP_YEAR", "��� ��:");
DEFINE("_CAL_LANG_REP_NOEVENTSELECTED", "Please select an event first");

// Navigation
DEFINE("_CAL_LANG_VIEWTODAY", "�������&nbsp;��&nbsp;�������");
DEFINE("_CAL_LANG_VIEWTOCOME", "�������&nbsp;�&nbsp;����&nbsp;������");
DEFINE("_CAL_LANG_VIEWBYDAY", "���������� �� ����");
DEFINE("_CAL_LANG_VIEWBYCAT", "���������� �� ����������");
DEFINE("_CAL_LANG_VIEWBYMONTH", "���������� �� �����");
DEFINE("_CAL_LANG_VIEWBYYEAR", "���������� �� ���");
DEFINE("_CAL_LANG_VIEWBYWEEK", "���������� �� ������");
DEFINE("_CAL_LANG_BACK", "�������");
DEFINE("_CAL_LANG_CLOSE", "Close");
DEFINE("_CAL_LANG_PREVIOUSDAY", "���������� ����");
DEFINE("_CAL_LANG_PREVIOUSWEEK", "���������� ������");
DEFINE("_CAL_LANG_PREVIOUSMONTH", "���������� �����");
DEFINE("_CAL_LANG_PREVIOUSYEAR", "���������� ���");
DEFINE("_CAL_LANG_NEXTDAY", "�������� ����");
DEFINE("_CAL_LANG_NEXTWEEK", "�������� ������");
DEFINE("_CAL_LANG_NEXTMONTH", "�������� �����");
DEFINE("_CAL_LANG_NEXTYEAR", "�������� ���");

DEFINE("_CAL_LANG_ADMINPANEL", "�����. ������");
DEFINE("_CAL_LANG_ADDEVENT", ":: �������� �������");
DEFINE("_CAL_LANG_MYEVENTS", ":: ��� �������");
DEFINE("_CAL_LANG_DELETE", "�������");
DEFINE("_CAL_LANG_MODIFY", "��������");

// Form
DEFINE("_CAL_LANG_HELP", "������");

DEFINE("_CAL_LANG_CAL_TITLE", "�������");
DEFINE("_CAL_LANG_ADD_TITLE", "��������");
DEFINE("_CAL_LANG_MODIFY_TITLE", "��������");

DEFINE("_CAL_LANG_EVENT_TITLE", "�������");
DEFINE("_CAL_LANG_EVENT_COLOR", "����");
DEFINE("_CAL_LANG_EVENT_CATCOLOR", "������������ ����");
DEFINE("_CAL_LANG_EVENT_CATEGORY", "���������");
DEFINE("_CAL_LANG_EVENT_CHOOSE_CATEG", "�������� ���������");
DEFINE("_CAL_LANG_EVENT_ACTIVITY", "��������");
DEFINE("_CAL_LANG_EVENT_URLMAIL_INFO", "��� ���������� URL ��� E-mail, ���������� � ��������� ������� <u>http://www.mysite.com</u> ��� <u>mailto:my@mail.com</u>");
DEFINE("_CAL_LANG_EVENT_ADRESSE", "���� ��������������");
DEFINE("_CAL_LANG_EVENT_CONTACT", "�������");
DEFINE("_CAL_LANG_EVENT_EXTRA", "�������������� ����������");
DEFINE("_CAL_LANG_EVENT_AUTHOR_ALIAS", "����� (���������)");
DEFINE("_CAL_LANG_EVENT_STARTDATE", "���� ������ ����������");
DEFINE("_CAL_LANG_EVENT_ENDDATE", "���� ��������� ����������");
DEFINE("_CAL_LANG_EVENT_STARTHOURS", "����� ������");
DEFINE("_CAL_LANG_EVENT_ENDHOURS", "����� �����");
DEFINE("_CAL_LANG_EVENT_STARTTIME", "����� ������");
DEFINE("_CAL_LANG_EVENT_ENDTIME", "����� �����");
DEFINE("_CAL_LANG_PUB_INFO", "����������� ����������");
DEFINE("_CAL_LANG_EVENT_REPEATTYPE", "��� �������");
DEFINE("_CAL_LANG_EVENT_REPEATDAY", "���� �������");
DEFINE("_CAL_LANG_EVENT_CHOOSE_WEEKDAYS", "���� � ������");
DEFINE("_CAL_LANG_EVENT_PER", "�");
DEFINE("_CAL_LANG_EVENT_WEEKOPT", "������(�) ������ �� ����������� ������");

DEFINE("_CAL_LANG_SUBMITPREVIEW", "������������");
DEFINE("_CAL_LANG_SUBMITCANCEL", "������");
DEFINE("_CAL_LANG_SUBMITSAVE", "���������");

DEFINE("_CAL_LANG_E_WARNWEEKS", "��������������.");
DEFINE("_CAL_LANG_E_WARNDAYS", "��������������.");

// Admin
DEFINE("_CAL_LANG_EVENT_ALLCAT", "��� ���������");
DEFINE("_CAL_LANG_EVENT_ACCESSLEVEL", "������� �������");
DEFINE("_CAL_LANG_EVENT_HITS", "�������");
DEFINE("_CAL_LANG_EVENT_STATE", "���������");
DEFINE("_CAL_LANG_EVENT_CREATED", "���� ��������");
DEFINE("_CAL_LANG_EVENT_NEWEVENT", "����� �������");
DEFINE("_CAL_LANG_EVENT_MODIFIED", "���� ���������� ���������");
DEFINE("_CAL_LANG_EVENT_NOTMODIFIED", "�� ��������");

// dmcd aug 22/04  new warning alert for no specified activity in event entry
DEFINE("_CAL_LANG_WARNACTIVITY", "����������������� ��������\\n������ ���� ��������.");


	$com_events_form_help_color = <<<END
        <tr>
		  <td width="110" align="left" valign="top">
            <b>����</b>
          </td>
          <td>�������� ���� ����, ������� ����� ����������� ��� ������ ��������� ������� � ������ ������. ���� ������� ������� ���������, ���� ����� ���������� �� ��������� ������ ����� ��������� (������������ ��������������� �����), ������� ������ � �������-�������� ������� � ������ ������ ����� ����� ��������� .</td>
        </tr>
END;

	$com_events_form_help = <<<END
    	<tr>
          <td align="left"><b>����</b></td>
          <td>����� ���� ������ � ��������� ������ �������.</td>
        </tr>
    	<tr>
          <td align="left" valign="top"><b>�����</b></td>
          <td>�������� ����� ������ �������. ������ - <span style='color:blue;font-weight:bold;'>hh:mm {am|pm}</span>.<br/>����� ����� ���� ������������ ��� � 12-, ��� � � 24-������� �������.<br/><br/><b><i><span style='color:red;'>(�����)</span></i> ����������:</b> ����������� �������� <span style='color:red;font-weight:bold;'>������ �������</span>. IE. ��� ������� �������, ������������� � 19.00 � ���������������� � 3.00, ��������� � �������� ���� <b>������ ����</b> 
		  ����������� - ���� ������ ������� (�� ��������).</td>
        </tr>
END;

	$com_events_form_help_extended = <<<END
        <tr>
    	  <td align="left" valign="top" nowrap><b>��� �������</b></td>
  	  	<td colspan="2"></td>
  		</tr>
  		<tr>
    	  <td colspan="2" align="left" valign="top">
	    	<table width="100%" border="0" cellspacing="2">
              <tr>
                <td width="60" align="left" valign="top"><u>�� ����</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">������ ����<br/><i>(default)</i></font>
                </td>
                <td align="left" valign="top" class="frm_td_bydays">
                  <font color="#000000">�������� ��� ����� ��� ���������������� ������� ��� ��� �������, ������������ �� ���������� ����, �� �������� ����������� ����������������� (�� ���� ���� ������ ������ ������� ���� ������ � ����� �������)</font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="3" align="left" valign="top"><u>� ������</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    ��� � ������
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  ��� ����� ��������� ������� ���� ������ ��� �������������� �������
                  <table border="0" width="100%" height="100%"><tr><td><b>����� ���</b> ��� �������� ���� \"������� 10 �����\" </td></tr><tr><td><b>���� ������</b> ��� �������� ���� \"������ �����������\"</td></tr></table>
                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                    ��������� ��� � ������
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">��� ����� ��������� ��� �������, �� ����� ���� ������ ���� ������� ����� ��������.</font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000"><i>����� ������ ������ <br>��� ������� '��� � ������' � '��������� ��� � ������'</i></font></td>
                  <td align="left" valign="top" class="frm_td_byweeks">
                  <font color="#000000">
                  <table border="0" width="100%" height="100%">
                    <tr><td><b>Week 1 :</b> 1-� ������ ������</td></tr>
                    <tr><td><b>Week 2 :</b> 2-� ������ ������</td></tr>
                    <tr><td><b>Week 3 :</b> 3-� ������ ������</td></tr>
                    <tr><td><b>Week 4 :</b> 4-� ������ ������</td></tr>
                    <tr><td><b>Week 5 :</b> 5-� ������ ������ (���� ����)</td></tr>
                   </table>
                 </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>� �����</u></td>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">��� � �����</font></td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                     ��� ����� ��������� ������� ��� ������ ������� �� ������������ ���� ������
                     <table border="0" width="100%" height="100%"><tr><td><b>����� ���</b> ��� �������� ���� \"������� 10 �����\" </td></tr><tr><td><b>���� ������</b> ��� �������� ���� \"������ �����������\"</td></tr></table>

                  </font>
                </td>
              </tr>
              <tr>
                <td width="110" align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
                  ��������� ���� ������
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_bymonth">
                  <font color="#000000">
				   �������, ������������ � ��������� ���� ������� ������, ���������� �� ��� ����.
                  </font>
                </td>
              </tr>
              <tr>
                <td width="60" rowspan="2" align="left" valign="top"><u>� ���</u></td>
                <td width="110" align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  ��� � ���
                  </font>
                </td>
                <td align="left" valign="top" class="frm_td_byyear">
                  <font color="#000000">
                  ���� ������ �� ������ ������� ��� ������� ������������ ���� ������ ���
                  <table border="0" width="100%" height="100%"><tr><td><b>����� ���</b> ��� �������� ���� \"������� 10 �����\" </td></tr><tr><td><b>���� ������</b> ��� �������� ���� \"������ �����������\"</td></tr></table>
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
