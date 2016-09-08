<?php
/**
* A DHTML menu component for mambo
* @version 1.11
* @package lxmenu
* @copyright (C) 2004 - 2005 by Georg Lorenz
* @license Released under the terms of the GNU General Public License
* polish lang Piotr Laskowski - MamboPL.com
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Action Labels
DEFINE('_LX_NEW','Nowy');
DEFINE('_LX_COPY','Kopiuj');
DEFINE('_LX_EDIT','Edytuj');
DEFINE('_LX_DELETE','Skasuj');
DEFINE('_LX_CANCEL','Anuluj');
DEFINE('_LX_APPLY','Zastosuj');
DEFINE('_LX_SAVE','Zapisz');
DEFINE('_LX_PREVIEW','Podgl�d');

//Heading Labels
DEFINE('_LX_MENU_CONFIG','Konfiguracja LxMenu Pro');
DEFINE('_LX_MENU_PRO_CONFIG','Konfiguracja LxMenu');
DEFINE('_LX_MENU_ENTRIES','Wej�cia LxMenu Pro');

//Column Labels
DEFINE('_LX_DIRECTION','Kierunek');
DEFINE('_LX_POSITION_STYLE','Styl pozycji');
DEFINE('_LX_MODULE_NAME','Nazwa Modu�u');
DEFINE('_LX_PUBLISHED','Opublikowany Modu�u');
DEFINE('_LX_ACCESS','Dost�p Modu�u');
DEFINE('_LX_MODULE_POSITION','Pozycja Modu�u');
DEFINE('_LX_MENU_NAME','Nazwa Menu');

//Tab Labels
DEFINE('_LX_TAB_COMMON','Og�lne');
DEFINE('_LX_TAB_BACKGROUND','T�o');
DEFINE('_LX_TAB_BORDER','Obramowanie');
DEFINE('_LX_TAB_LABEL','Etykiety');
DEFINE('_LX_TAB_SUB_MENU','Sub menu');

//Section Labels
DEFINE('_LX_SECTION_COMMON','Ustawienia og�lne');
DEFINE('_LX_SECTION_BACKGROUND_OUTER','Ustawienia t�a (zewn�trzne)');
DEFINE('_LX_SECTION_BACKGROUND_INNER','Ustawienia t�a (wewn�trzne)');
DEFINE('_LX_SECTION_BACKGROUND_MARGIN','Ustawienia odst�p�w wewn�trzne <> zewn�trzne (marginesy)');
DEFINE('_LX_SECTION_BORDER','Ustawienia obramowania');
DEFINE('_LX_SECTION_BORDER_SIZE','Rozmiar');
DEFINE('_LX_SECTION_LABEL_TEXT_SETTINGS','Ustawienia etykiet tekstowych w pozycjach menu');
DEFINE('_LX_SECTION_LABEL_PADDING','Ustawienia odst�p�w');
DEFINE('_LX_SECTION_MAIN_ITEM','Ustawienia g��wnych pozycji');
DEFINE('_LX_SECTION_SUB_ITEM','Ustawienia podrz�dnych pozycji'); 
DEFINE('_LX_SECTION_BACKGROUND_IMAGE','Obrazek t�a');

//Field Labels
DEFINE('_LX_FIELD_MENU_NAME','Nazwa Menu');
DEFINE('_LX_FIELD_MENU_DIRECTION','Orientacja Menu');
DEFINE('_LX_FIELD_POSITION_STYLE','Po�o�enie');
DEFINE('_LX_FIELD_POSITION_LEFT','Od lewej');
DEFINE('_LX_FIELD_POSITION_TOP','Od g�ry');
DEFINE('_LX_FIELD_ITEM_WIDTH','Szeroko�� pozycji');
DEFINE('_LX_FIELD_ITEM_HEIGHT','Wysoko�� pozycji');
DEFINE('_LX_FIELD_CREATE_EXPAND_SYMBOL','Wybierz symbol rozwiniecia');
DEFINE('_LX_FIELD_EXPAND_SYMBOL','Symbol rozwini�cia');
DEFINE('_LX_FIELD_POPUP_ON_CLICK','Okno Popup gdy klikniesz');
DEFINE('_LX_FIELD_EXPAND_DELAY','Op�nienie rozwiajania');
DEFINE('_LX_FIELD_HIDE_DELAY','Op�nienie zwiajania');
DEFINE('_LX_FIELD_COLOR','Kolor');
DEFINE('_LX_FIELD_COLOR_ON_HIGHLIGHT','Po najechaniu kursorem');
DEFINE('_LX_FIELD_TOP','G�ra');
DEFINE('_LX_FIELD_RIGHT','Prawy');
DEFINE('_LX_FIELD_BOTTOM','D�');
DEFINE('_LX_FIELD_LEFT','Lewy');
DEFINE('_LX_FIELD_BORDER_SIZE','Size');
DEFINE('_LX_FIELD_BORDER_TYPE','Styl');
DEFINE('_LX_FIELD_BORDER_TYPE_ON_HIGHLIGHT','Styl po najechaniu kursorem');
DEFINE('_LX_FIELD_FONT_FAMILY','Typ czcionki');
DEFINE('_LX_FIELD_FONT_SIZE','Rozmiar czcionki');
DEFINE('_LX_FIELD_ALIGN','Wyr�wnanie');
DEFINE('_LX_FIELD_ALIGN_ON_HIGHLIGHT','Wyr�wnanie po najechaniu kursorem');
DEFINE('_LX_FIELD_WEIGHT','Styl czcionki');
DEFINE('_LX_FIELD_WEIGHT_ON_HIGHLIGHT','Styl po najechaniu kursorem');
DEFINE('_LX_FIELD_DECORATION','Styl czcionki');
DEFINE('_LX_FIELD_DECORATION_ON_HIGHLIGHT','Styl po najechaniu kursorem');
DEFINE('_LX_FIELD_WHITE_SPACE','Bia�e znaki (np. spacje normalnie lub bez �amania (nowrap))');
DEFINE('_LX_FIELD_WHITE_SPACE_ON_HIGHLIGHT','Bia�e znaki po najechaniu kursorem');
DEFINE('_LX_FIELD_INHERIT_SETTINGS','Przyjmij ustawienia takie jak menu g��wne');
DEFINE('_LX_FIELD_TOP_OFFSET','G�rny offset');
DEFINE('_LX_FIELD_LEFT_OFFSET','Lewy offset');
DEFINE('_LX_FIELD_SET_TRANSPARENCY','Ustaw przezroczysto��');
DEFINE('_LX_FIELD_TRANSPARENCY','Przezroczysto��');
DEFINE('_LX_FIELD_TEMPLATE','Szablon');
DEFINE('_LX_FIELD_MENU_ALIGN','Wyr�wnanie menu');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE','Wybierz obrazek');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_HL','Obrazek po najechaniu kursorem');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_UPLOAD','Wczytaj obrazek');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_USE','U�yj obrazka t�a');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_REPEAT','Potw�rz obrazek');
DEFINE('_LX_FIELD_SUB_DIRECTION','Expand to'); //new
DEFINE('_LX_FIELD_SET_FADING','Enable fading effect');//needs translation
DEFINE('_LX_FIELD_BG_COLOR','Background color');//needs translation
DEFINE('_LX_FIELD_EXPANSION_DIRECTION','Expansion direction');//needs translation
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_POSITION','Image position');//needs translation

//Value Labels
DEFINE('_LX_LIST_VALUES_VERTICAL','pionowo');
DEFINE('_LX_LIST_VALUES_HORIZONTAL','poziomo');
DEFINE('_LX_LIST_VALUES_RELATIVE','relatywne');
DEFINE('_LX_LIST_VALUES_ABSOLUTE','absolutne');
DEFINE('_LX_LIST_VALUES_FIXED','sta�y');
DEFINE('_LX_LIST_VALUES_YES','Tak');
DEFINE('_LX_LIST_VALUES_NO','Nie');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_1','Szara prawa strza�ka 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_2','Szara prawa strza�ka 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_1','Szara dolna strza�ka 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_2','Szara dolna strza�ka 2');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_1','Bia�a prawa strza�ka 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_2','Bia�a prawa strza�ka 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_1','Bia�a dolna strza�ka 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_2','Bia�a dolna strza�ka 2');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_BLACK','Znak plus czarny');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_WHITE','Znak plus bia�y'); 
DEFINE('_LX_LIST_VALUES_BORDER_NONE','brak');
DEFINE('_LX_LIST_VALUES_BORDER_DOTTED','kropkowane');
DEFINE('_LX_LIST_VALUES_BORDER_DASHED','kreskowane');
DEFINE('_LX_LIST_VALUES_BORDER_SOLID','pe�ne');
DEFINE('_LX_LIST_VALUES_BORDER_DOUBLE','podw�jne');
DEFINE('_LX_LIST_VALUES_BORDER_GROOVE','rowek');
DEFINE('_LX_LIST_VALUES_BORDER_RIDGE','grzbiet');
DEFINE('_LX_LIST_VALUES_BORDER_INSET','do wewn�trz');
DEFINE('_LX_LIST_VALUES_BORDER_OUTSET','do zewn�trz');
DEFINE('_LX_LIST_VALUES_LEFT','lewa');
DEFINE('_LX_LIST_VALUES_CENTER','centralnie');
DEFINE('_LX_LIST_VALUES_RIGHT','prawa');
DEFINE('_LX_LIST_VALUES_NORMAL','normalna');
DEFINE('_LX_LIST_VALUES_BOLD','pogrubiona');
DEFINE('_LX_LIST_VALUES_BOLDER','grubsza');
DEFINE('_LX_LIST_VALUES_LIGHTER','cie�sza');
DEFINE('_LX_LIST_VALUES_NONE','brak');
DEFINE('_LX_LIST_VALUES_UNDERLINE','podkre�lenie');
DEFINE('_LX_LIST_VALUES_OVERLINE','linia nad czcionk�');
DEFINE('_LX_LIST_VALUES_LINE_THROUGH','przekre�lenie');
DEFINE('_LX_LIST_VALUES_NOWRAP','bez zawijania akapit�w');
DEFINE('_LX_LIST_VALUES_PALETTE_WINDOWS','Paleta kolor�w Windows');
DEFINE('_LX_LIST_VALUES_PALETTE_WEBSAFE','Paleta kolor�w Web');
DEFINE('_LX_LIST_VALUES_PALETTE_GREYSCALE','Paleta odcieni szaro�ci');
DEFINE('_LX_LIST_VALUES_PALETTE_MAC','Paleta kolor�w Mac OS');
DEFINE('_LX_LIST_VALUES_INDEPENDENT','- niezale�nie -');
DEFINE('_LX_LIST_VALUES_NO_REPEAT','nie powtarzaj');
DEFINE('_LX_LIST_VALUES_REPEAT','powtarzaj w poziomie i pionie');
DEFINE('_LX_LIST_VALUES_REPEAT_X','powtarzaj w poziomie');
DEFINE('_LX_LIST_VALUES_REPEAT_Y','powtarzaj w pionie');

//Other Labels
DEFINE('_LX_MAIN_MENU','G��wne menu');
DEFINE('_LX_SUB_MENU','Sub menu');
DEFINE('_LX_NONE_MODULE','Otw�rz i zapisz aby odzyska� modu�');
DEFINE('_LX_TOOLTIP_IMG_UPLOAD','Wczytaj obrazek');
DEFINE('_LX_TOOLTIP_IMG_CANCEL','Anuluj wczytywanie');
DEFINE('_LX_TOOLTIP_IMG_REMOVE','Skasuj obrazek');

//Help Labels
DEFINE('_LX_HELP_MENU_NAME','Wybierz menu, kt�re chcesz wykona� przy pomocy LxMenu <b>(podgl�d niedost�pny dop�ki nie zapiszesz zmian)</b>');
DEFINE('_LX_HELP_TEMPLATE','To menu pojawi si� w wybranym szablonie');
DEFINE('_LX_HELP_MENU_DIRECTION','Wybierasz czy menu b�dzie rozwija� sie pionowo czy poziomo');
DEFINE('_LX_HELP_POSITION_STYLE','Po�o�enie menu wewn�trz elementu tabeli <b>(podgl�d niedost�pny)</b>');
DEFINE('_LX_HELP_POSITION_LEFT','Zale�ne od wybranego Po�o�enia <b>(podgl�d niedost�pny)</b>');
DEFINE('_LX_HELP_POSITION_TOP','Zale�ne od wybranego Po�o�enia <b>(podgl�d niedost�pny)</b>');
DEFINE('_LX_HELP_ITEM_WIDTH',"Okre�lasz pozycje menu\' szeroko�� w pikselach");
DEFINE('_LX_HELP_ITEM_HEIGHT',"Okre�lasz pozycje menu\' wysoko�� w pikselach");
DEFINE('_LX_HELP_CREATE_EXPAND_SYMBOL','Czy symbol rozwini�cia ma si� pojawia� w pozycjach menu zawieraj�cych przynajmniej jedn� pozycj� sub menu?');
DEFINE('_LX_HELP_POPUP_ON_CLICK','Czy pozycje sub menu rozwija� po klikni�ciu w menu?');
DEFINE('_LX_HELP_EXPAND_DELAY','Czas w milisekundach po jakim menu si� rozwinie');
DEFINE('_LX_HELP_HIDE_DELAY','Czas w milisekundach po jakim sub menu si� zwinie');
DEFINE('_LX_HELP_BG_COLOR','Kolor t�a');
DEFINE('_LX_HELP_BG_COLOR_ON_HIGHLIGHT','Kolor t�a po najechaniu kursorem myszy');
DEFINE('_LX_HELP_MARGIN_TOP','G�rny odst�p w pikselach');
DEFINE('_LX_HELP_MARGIN_RIGHT','Prawy odst�p w pikselach');
DEFINE('_LX_HELP_MARGIN_BOTTOM','Dolny odst�p w pikselach');
DEFINE('_LX_HELP_MARGIN_LEFT','Lewy odst�p w pikselach');
DEFINE('_LX_HELP_BORDER_TYPE','Styl obramowania');
DEFINE('_LX_HELP_BORDER_TYPE_ON_HIGHLIGHT','Styl obramowania po najechaniu kursorem myszy');
DEFINE('_LX_HELP_BORDER_SIZE','Szeroko�� obramowania w pikselach');
DEFINE('_LX_HELP_BORDER_COLOR','Kolor obramowania');
DEFINE('_LX_HELP_BORDER_COLOR_ON_HIGHLIGHT','Kolor obramowania po najechaniu kursorem myszy');
DEFINE('_LX_HELP_FONT_FAMILY',"Typ czcionki (gdy zmieniasz pami�taj aby poprawi� pozycje: wysoko��, odst�py lub ustawienia obramowania)");
DEFINE('_LX_HELP_FONT_SIZE',"Typ czcionki (gdy zmieniasz pami�taj aby poprawi� pozycje: wysoko��, odst�py lub ustawienia obramowania)");
DEFINE('_LX_HELP_COLOR','Kolor tekstu');
DEFINE('_LX_HELP_COLOR_ON_HIGHLIGHT','Kolor tekstu po najechaniu kursorem myszy');
DEFINE('_LX_HELP_ALIGN','Wyr�wnanie tekstu');
DEFINE('_LX_HELP_ALIGN_ON_HIGHLIGHT','Wyr�wnanie tekstu po najechaniu kursorem myszy');
DEFINE('_LX_HELP_WEIGHT','Styl czcionki');
DEFINE('_LX_HELP_WEIGHT_ON_HIGHLIGHT','Styl czcionki po najechaniu kursorem myszy');
DEFINE('_LX_HELP_DECORATION','Efekty czcionki');
DEFINE('_LX_HELP_DECORATION_ON_HIGHLIGHT','Efekty czcionki po najechaniu kursorem myszy');
DEFINE('_LX_HELP_WHITE_SPACE','Jak traktowa� bia�e znaki (np. spacje normalnie lub bez �amania (nowrap)');
DEFINE('_LX_HELP_WHITE_SPACE_ON_HIGHLIGHT','Jak traktowa� bia�e znaki po najechaniu kursorem myszy (np. spacje normalnie lub bez �amania (nowrap)');
DEFINE('_LX_HELP_PADDING_TOP','Wielko�� dope�nienia g�rnego');
DEFINE('_LX_HELP_PADDING_RIGHT','Wielko�� dope�nienia prawego');
DEFINE('_LX_HELP_PADDING_BOTTOM','Wielko�� dope�nienia dolnego');
DEFINE('_LX_HELP_PADDING_LEFT','Wielko�� dope�nienia lewego');
DEFINE('_LX_HELP_INHERIT_SETTINGS','Przejmij ustawienia z g��wnego menu?');
DEFINE('_LX_HELP_TOP_OFFSET','G�rny offset dla sub menu');
DEFINE('_LX_HELP_LEFT_OFFSET','Lewy offset dla sub menu');
DEFINE('_LX_HELP_SET_TRANSPARENCY','Czy przezroczysto�� ma by� ustawiona? <b>(dzia�a tylko w przegl�darkach IE i Gecko)</b>');
DEFINE('_LX_HELP_TRANSPARENCY','Warto�� przezroczysto�ci w procentach <b>(mniejsza warto�� oznacza wi�ksz� przezroczysto��, 100% oznacza brak przezroczysto�ci)</b>');
DEFINE('_LX_HELP_MENU_ALIGN','Wyr�wnanie dla ca�ego bloku menu. Tylko dla poziomego menu. <b>(podgl�d niedost�pny)</b>');
DEFINE('_LX_HELP_MAIN_ITEM_WIDTH',"Zdefinujesz tutaj szeroko�c pozycji menu w pikselach. Gry ustawisz 0 (tylko pozycje g��wnego menu) przy pionowym ustawieniu menu, szeroko�� g��wnego menu b�dzie zale�na od d�ugo�ci wpisanego tekstu w menu <b>(brak tej opcji w LxMenu Free)</b>.");
DEFINE('_LX_HELP_SUB_ITEM_HEIGHT',"Zdefinujesz tutaj wysoko�c pozycji menu w pikselach. Gry ustawisz 0 (tylko pozycje sub menu) przy pionowym lub poziomym ustawieniu menu, wysoko�� pozycji w sub menu b�dzie zale�na od d�ugo�ci wpisanego tekstu w menu <b>(brak tej opcji w LxMenu Free)</b>.");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_USE',"Czy chcesz u�y� obrazek w tle?");
DEFINE('_LX_HELP_BACKGROUND_IMAGE',"Obrazek t�a, kt�ry b�dzie u�yty");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_HL',"Obrazek t�a, kt�ry b�dzie u�yty po najechaniu kursorem myszy");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_REPEAT',"W jaki spos�b obrazek t�a ma by� powtarzany");
DEFINE('_LX_HELP_SUB_DIRECTION','Direction which the submenus should expand to'); //new
DEFINE('_LX_HELP_SET_FADING',"Would you like to enable a fading effect for sub menu items?");//needs translation
DEFINE('_LX_HELP_MENU_BG_COLOR',"Background color from the menu block on horizontal orientation. <b>(does not affect the preview)</b>");//needs translation
DEFINE('_LX_HELP_EXPANSION_DIRECTION',"Which direction should sub menu items expand to?");//needs translation
DEFINE('_LX_HELP_BACKGROUND_IMAGE_POSITION',"Choose the position the image should placed to.");//needs translation
?>
