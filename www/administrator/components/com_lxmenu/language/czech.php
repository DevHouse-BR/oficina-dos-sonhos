<?php
/**
* A DHTML menu component for mambo
* @version 1.13

* @package lxmenu
* @copyright (C) 2004 - 2005 by Georg Lorenz
* @license Released under the terms of the GNU General Public License
* Preklad: Vamp_, pchvojka@centrum.cz, zdnek.machek@atlas.cz 
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Action Labels
DEFINE('_LX_NEW','Nov�');
DEFINE('_LX_COPY','Kop�rovat');
DEFINE('_LX_EDIT','Upravit');
DEFINE('_LX_DELETE','Vymazat');
DEFINE('_LX_CANCEL','Zru�it');
DEFINE('_LX_APPLY','Potvrdit');
DEFINE('_LX_SAVE','Ulo�it');
DEFINE('_LX_PREVIEW','N�hled');

//Heading Labels
DEFINE('_LX_MENU_CONFIG','LxMenu Konfigurace ');
DEFINE('_LX_MENU_PRO_CONFIG','LxMenu Pro Konfigurace ');
DEFINE('_LX_MENU_ENTRIES','LxMenu Pro Polo�ky');

//Column Labels
DEFINE('_LX_DIRECTION','Sm�rov�n�');
DEFINE('_LX_POSITION_STYLE','Pozice stylu');
DEFINE('_LX_MODULE_NAME','N�zev modulu');
DEFINE('_LX_PUBLISHED','Publikovat modul');
DEFINE('_LX_ACCESS','P��stup k modulu');
DEFINE('_LX_MODULE_POSITION','Pozice modulu');
DEFINE('_LX_MENU_NAME','Jm�no menu');

//Tab Labels
DEFINE('_LX_TAB_COMMON','Hlavn�');
DEFINE('_LX_TAB_BACKGROUND','Pozad�');
DEFINE('_LX_TAB_BORDER','Okraj');
DEFINE('_LX_TAB_LABEL','Vzhled polo�ky');
DEFINE('_LX_TAB_SUB_MENU','Podmenu');

//Section Labels
DEFINE('_LX_SECTION_COMMON','Hlavn� nastaven�');
DEFINE('_LX_SECTION_BACKGROUND_OUTER','Nastaven� pozad� (vn�j��)');
DEFINE('_LX_SECTION_BACKGROUND_INNER','Nastaven� pozad� (vnit�n�)');
DEFINE('_LX_SECTION_BACKGROUND_MARGIN','Nastaven� mezer vnit�n�<>  vn�j�� (margin)');
DEFINE('_LX_SECTION_BORDER','Nastaven� okraj�');
DEFINE('_LX_SECTION_BORDER_SIZE','Velikost okraje');
DEFINE('_LX_SECTION_LABEL_TEXT_SETTINGS','Nastaven� polo�ky menu ');
DEFINE('_LX_SECTION_LABEL_PADDING','Nastaven� Padding ');
DEFINE('_LX_SECTION_MAIN_ITEM','Nastaven� hlavn� polo�ky menu');
DEFINE('_LX_SECTION_SUB_ITEM','Nastaven� polo�ky podmenu');
DEFINE('_LX_SECTION_BACKGROUND_IMAGE','Obr�zek na pozad�');

//Field Labels
DEFINE('_LX_FIELD_MENU_NAME','Jm�no menu');
DEFINE('_LX_FIELD_MENU_DIRECTION','Orientace menu');
DEFINE('_LX_FIELD_POSITION_STYLE','Pozice stylu');
DEFINE('_LX_FIELD_POSITION_LEFT','Pozice vlevo');
DEFINE('_LX_FIELD_POSITION_TOP','Pozice nahore');
DEFINE('_LX_FIELD_ITEM_WIDTH','D�lka polo�ky');
DEFINE('_LX_FIELD_ITEM_HEIGHT','V��ka polo�ky');
DEFINE('_LX_FIELD_CREATE_EXPAND_SYMBOL','Vytvo�it expand symbol');
DEFINE('_LX_FIELD_EXPAND_SYMBOL','Expandovan� symbol');
DEFINE('_LX_FIELD_POPUP_ON_CLICK','Vytahov�n� menu pokliknut�m');
DEFINE('_LX_FIELD_EXPAND_DELAY','Spo�d�n� rozvinut� menu');
DEFINE('_LX_FIELD_HIDE_DELAY','Spo�d�n� st�hnut� menu');
DEFINE('_LX_FIELD_COLOR','Barva');
DEFINE('_LX_FIELD_COLOR_ON_HIGHLIGHT','Po najet�');
DEFINE('_LX_FIELD_TOP','Naho�e');
DEFINE('_LX_FIELD_RIGHT','Vpravo');
DEFINE('_LX_FIELD_BOTTOM','Dole');
DEFINE('_LX_FIELD_LEFT','Vlevo');
DEFINE('_LX_FIELD_BORDER_SIZE','Velikost');
DEFINE('_LX_FIELD_BORDER_TYPE','Typ');
DEFINE('_LX_FIELD_BORDER_TYPE_ON_HIGHLIGHT','Typ po najet�');
DEFINE('_LX_FIELD_FONT_FAMILY','Font p�sma');
DEFINE('_LX_FIELD_FONT_SIZE','Velikost p�sma');
DEFINE('_LX_FIELD_ALIGN','Zarovn�n�');
DEFINE('_LX_FIELD_ALIGN_ON_HIGHLIGHT','Zarovn�n� po najet�');
DEFINE('_LX_FIELD_WEIGHT','���ka');
DEFINE('_LX_FIELD_WEIGHT_ON_HIGHLIGHT','���ka po najet�');
DEFINE('_LX_FIELD_DECORATION','Zv�razn�n�');
DEFINE('_LX_FIELD_DECORATION_ON_HIGHLIGHT','Zv�razn�n� po najet�');
DEFINE('_LX_FIELD_WHITE_SPACE','White space');
DEFINE('_LX_FIELD_WHITE_SPACE_ON_HIGHLIGHT','White space po najet�');
DEFINE('_LX_FIELD_INHERIT_SETTINGS','D�di�n� nastaven� z hlavn�ho menu');
DEFINE('_LX_FIELD_TOP_OFFSET','Odsazen� zvrchu');
DEFINE('_LX_FIELD_LEFT_OFFSET','Odsazen� zleva');
DEFINE('_LX_FIELD_SET_TRANSPARENCY','Nastaven� pr�hlednosti');
DEFINE('_LX_FIELD_TRANSPARENCY','Pr�hlednost');
DEFINE('_LX_FIELD_TEMPLATE','Vzhled');
DEFINE('_LX_FIELD_MENU_ALIGN','Zarovn�n� menu');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE','Vybrat obr�zek');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_HL','Obr�zek po najet�');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_UPLOAD','Nahr�t obr�zek');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_USE','Pou�ij obr�zek na pozad�');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_REPEAT','Opakovat obr�zek');
DEFINE('_LX_FIELD_SUB_DIRECTION','Expand to'); //new
DEFINE('_LX_FIELD_SET_FADING','Zapnout  sl�bnouc� efekt');
DEFINE('_LX_FIELD_BG_COLOR','Barva pozad�');
DEFINE('_LX_FIELD_EXPANSION_DIRECTION','Orientace p�ete�en�');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_POSITION','Pozice obr�zku');

//Value Labels
DEFINE('_LX_LIST_VALUES_VERTICAL','Vertik�ln�');
DEFINE('_LX_LIST_VALUES_HORIZONTAL','Horizont�ln�');
DEFINE('_LX_LIST_VALUES_RELATIVE','relativn�');
DEFINE('_LX_LIST_VALUES_ABSOLUTE','absolutn�');
DEFINE('_LX_LIST_VALUES_FIXED','fixovan�');
DEFINE('_LX_LIST_VALUES_YES','Ano');
DEFINE('_LX_LIST_VALUES_NO','Ne');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_1','Prav� �ipka �ed� 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_2','Prav� �ipka �ed� 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_1','Doln� �ipka �ed� 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_2','Doln� �ipka �ed�2');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_1','Prav� �ipka b�l� 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_2','Prav� �ipka b�l� 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_1','Doln� �ipka b�l� 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_2','Doln� �ipka b�l� 2');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_BLACK','Znak plus �ern�');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_WHITE','Znak plus b�l�');
DEFINE('_LX_LIST_VALUES_BORDER_NONE','nic');
DEFINE('_LX_LIST_VALUES_BORDER_DOTTED','te�kovan�');
DEFINE('_LX_LIST_VALUES_BORDER_DASHED','��rkovan�');
DEFINE('_LX_LIST_VALUES_BORDER_SOLID','vcelku');
DEFINE('_LX_LIST_VALUES_BORDER_DOUBLE','dvojit�');
DEFINE('_LX_LIST_VALUES_BORDER_GROOVE','�l�bek');
DEFINE('_LX_LIST_VALUES_BORDER_RIDGE','ridge');
DEFINE('_LX_LIST_VALUES_BORDER_INSET','uvnit�');
DEFINE('_LX_LIST_VALUES_BORDER_OUTSET','vn�');
DEFINE('_LX_LIST_VALUES_LEFT','vlevo');
DEFINE('_LX_LIST_VALUES_CENTER','nast�ed');
DEFINE('_LX_LIST_VALUES_RIGHT','vpravo');
DEFINE('_LX_LIST_VALUES_NORMAL','normal');
DEFINE('_LX_LIST_VALUES_BOLD','tu�n�');
DEFINE('_LX_LIST_VALUES_BOLDER','tu�n�j��');
DEFINE('_LX_LIST_VALUES_LIGHTER','leh��, sv�tlej��');
DEFINE('_LX_LIST_VALUES_NONE','��dn�');
DEFINE('_LX_LIST_VALUES_UNDERLINE','podtr�en�');
DEFINE('_LX_LIST_VALUES_OVERLINE','nadtr�en�');
DEFINE('_LX_LIST_VALUES_LINE_THROUGH','p�e�krtnut�');
DEFINE('_LX_LIST_VALUES_NOWRAP','neopakovat');
DEFINE('_LX_LIST_VALUES_PALETTE_WINDOWS','Windows system paleta');
DEFINE('_LX_LIST_VALUES_PALETTE_WEBSAFE','Web safe paleta');
DEFINE('_LX_LIST_VALUES_PALETTE_GREYSCALE','Grey scale paleta');
DEFINE('_LX_LIST_VALUES_PALETTE_MAC','Mac OS paleta');
DEFINE('_LX_LIST_VALUES_INDEPENDENT','- nez�vlisl�/e -');
DEFINE('_LX_LIST_VALUES_NO_REPEAT','nad�le neopakovat');
DEFINE('_LX_LIST_VALUES_REPEAT','opakovat vodorovn� a svisle');
DEFINE('_LX_LIST_VALUES_REPEAT_X','opakovat jen vodorovn�');
DEFINE('_LX_LIST_VALUES_REPEAT_Y','opakovat jen svisle');

//Other Labels
DEFINE('_LX_MAIN_MENU','Hlavn� menu');
DEFINE('_LX_SUB_MENU','Pod menu');
DEFINE('_LX_NONE_MODULE','Pros�m otev�ete a ulo�te pro obnoven� modul');
DEFINE('_LX_TOOLTIP_IMG_UPLOAD','Nahran� obr�zku');
DEFINE('_LX_TOOLTIP_IMG_CANCEL','Zru�en� nahr�v�n�');
DEFINE('_LX_TOOLTIP_IMG_REMOVE','Vymaz�n� obr�zku');

//Help Labels
DEFINE('_LX_HELP_MENU_NAME','Vyber menu, pro kter� chce� nastavit LxMenu <b>(neovlivn� n�hled, dokud nejsou ulo�eny zm�ny)</b>');
DEFINE('_LX_HELP_TEMPLATE','Toto menu se objev� ve zvolen� �ablon�');
DEFINE('_LX_HELP_MENU_DIRECTION','Rozhodni, zda se m� menu zobrazit horizont�ln� nebo vertik�ln�');
DEFINE('_LX_HELP_POSITION_STYLE','Jak by m�lo b�t menu um�st�no v rodi�ovsk�m elementu<b>(neovlivn� n�hled)</b>');
DEFINE('_LX_HELP_POSITION_LEFT','Je ovlivn�no nastaven�m stylu um�st�n�<b>(neovlivn� n�hled)</b>');
DEFINE('_LX_HELP_POSITION_TOP','Je ovlivn�no nastaven�m stylu um�st�n� <b>(neovlivn� n�hled)</b>');
DEFINE('_LX_HELP_ITEM_WIDTH',' Zadejte ���ku polo�ky menu v pixelech');
DEFINE('_LX_HELP_ITEM_HEIGHT',' Zadejte v��ku polo�ky menu v pixelech ');
DEFINE('_LX_HELP_CREATE_EXPAND_SYMBOL','M�l by se expandovan� sysmbol objevit v polo�ce menu obsahuj�c� alespo� jednu podpolo�ku?');
DEFINE('_LX_HELP_POPUP_ON_CLICK','Zobrazit rozev�rac� podmenu poklik�n�m na polo�ku menu?');
DEFINE('_LX_HELP_EXPAND_DELAY','�as prodlevy v milisekund�ch p�ed otev�en�m podmenu');
DEFINE('_LX_HELP_HIDE_DELAY','�as prodlevy v milisekund�ch p�ed schov�n�m podmenu');
DEFINE('_LX_HELP_BG_COLOR','Barva pozad�');
DEFINE('_LX_HELP_BG_COLOR_ON_HIGHLIGHT','Barva pozad� po najet� my��');
DEFINE('_LX_HELP_MARGIN_TOP','Odsazen� zezhora v pixelech');
DEFINE('_LX_HELP_MARGIN_RIGHT','Odsazen� zprava v pixelech');
DEFINE('_LX_HELP_MARGIN_BOTTOM','Odsazen� zespodu v pixelech');
DEFINE('_LX_HELP_MARGIN_LEFT','Odsazen� zleva v pixelech');
DEFINE('_LX_HELP_BORDER_TYPE','Typ okraje');
DEFINE('_LX_HELP_BORDER_TYPE_ON_HIGHLIGHT','Typ okraje po najet� my��');
DEFINE('_LX_HELP_BORDER_SIZE','Okraj v pixelech');
DEFINE('_LX_HELP_BORDER_COLOR','Barva okraje');
DEFINE('_LX_HELP_BORDER_COLOR_ON_HIGHLIGHT','Barva okraje po najet� ');
DEFINE('_LX_HELP_FONT_FAMILY',"Font family <b>(po zm�n� nastaven� bude� muset p�enastavit polo�ky\' v��ky, odsazen� popisku nebo nastaven� okraje)</b>");
DEFINE('_LX_HELP_FONT_SIZE',"Font size <b>(po zm�n� nastaven� bude� muset p�enastavit polo�ky\' v��ky, odsazen� popisku nebo nastaven� okraje)</b>");
DEFINE('_LX_HELP_COLOR','Barva textu');
DEFINE('_LX_HELP_COLOR_ON_HIGHLIGHT','Barva textu po najet�');
DEFINE('_LX_HELP_ALIGN','Zarovn�n� textu');
DEFINE('_LX_HELP_ALIGN_ON_HIGHLIGHT','Zarovn�n� textu po najet�');
DEFINE('_LX_HELP_WEIGHT','Tlou��ka textu');
DEFINE('_LX_HELP_WEIGHT_ON_HIGHLIGHT','Tlou��ka textu po najet�');
DEFINE('_LX_HELP_DECORATION','Zv�razn�n� textu');
DEFINE('_LX_HELP_DECORATION_ON_HIGHLIGHT','Zv�razn�n� textu po najet�');
DEFINE('_LX_HELP_WHITE_SPACE','�prava b�l�ch m�st');
DEFINE('_LX_HELP_WHITE_SPACE_ON_HIGHLIGHT','Upraven� b�l�ch m�st po najet�');
DEFINE('_LX_HELP_PADDING_TOP','Odsazen� od vrchu');
DEFINE('_LX_HELP_PADDING_RIGHT','Odsazen� zprava');
DEFINE('_LX_HELP_PADDING_BOTTOM','Odsazen� od spodu');
DEFINE('_LX_HELP_PADDING_LEFT','Odsazen� zleva');
DEFINE('_LX_HELP_INHERIT_SETTINGS','D�dit nastaven� z hlavn�ho menu?');
DEFINE('_LX_HELP_TOP_OFFSET','Odsazen� zvrchu pro sub menu');
DEFINE('_LX_HELP_LEFT_OFFSET','Odsazen� zleva pro sub menu');
DEFINE('_LX_HELP_SET_TRANSPARENCY','Aktivovat pr�svitnost? <b>(pracuje pouze na IE, Firefox)</b>');
DEFINE('_LX_HELP_TRANSPARENCY','Pr�svitnost v procentech (ni��� hodnota znamen� pr�svitn�j��, 100% nepr�svitn�)');
DEFINE('_LX_HELP_MENU_ALIGN','Zarovn�n� cel�ho bloku menu. Pouze horizont�ln� menu. (neovlivn� n�hled)');
DEFINE('_LX_HELP_MAIN_ITEM_WIDTH',"Nastav v��ku polo�ky \' v pixelech. 0 (pouze polo�ky hlavn�ho menu) horizont�ln� i vertik�ln� nastaven� bude z�le�et na d�lk�ch text�<b>(nen� k dispozici na  LxMenu Free)</b>.");
DEFINE('_LX_HELP_SUB_ITEM_HEIGHT',"Nastav v��ku pod polo�ky items\' v pixelech. 0 (pouze pod polo�ky) horizont�ln� i vertik�ln� nastaven� bude z�le�et na d�lk�ch text�<b>(nen� k dispozici na LxMenu Free)</b>.");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_USE',"Pou��t obr�zek na pozad�?");
DEFINE('_LX_HELP_BACKGROUND_IMAGE',"Obr�zek pro pozad�");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_HL',"Obr�zek pozad�, kter� se pou�ije po najet� my��");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_REPEAT',"Pokud se bude opakovat obr�zek pozad�, jak�m zp�sobem");
DEFINE('_LX_HELP_SUB_DIRECTION','Direction which the submenus should expand to'); //new
DEFINE('_LX_HELP_SET_FADING',"Zapnout padac� efekt pro zobrazov�n� menu?");
DEFINE('_LX_HELP_MENU_BG_COLOR',"Pozad� z bliku menu pro horizont�ln� zobrazen�. <b>(neovlivn� n�hled)</b>");
DEFINE('_LX_HELP_EXPANSION_DIRECTION',"Kter�m sm�rem rozbalit menu?");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_POSITION',"Vyber pozici pro um�st�n� obr�zku.");?>
