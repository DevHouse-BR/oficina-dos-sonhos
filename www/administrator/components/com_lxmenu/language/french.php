<?php
/**
* A DHTML menu component for mambo
* @version 1.11
* @package lxmenu
* @copyright (C) 2004 - 2005 by Georg Lorenz
* @license Released under the terms of the GNU General Public License
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Action Labels
DEFINE('_LX_NEW','Nouveau');
DEFINE('_LX_COPY','Copier');
DEFINE('_LX_EDIT','Editer');
DEFINE('_LX_DELETE','Effacer');
DEFINE('_LX_CANCEL','Annuler');
DEFINE('_LX_APPLY','Appliquer');
DEFINE('_LX_SAVE','Enregistrer');
DEFINE('_LX_PREVIEW','Aper�u');

//Heading Labels
DEFINE('_LX_MENU_CONFIG','Configuration LxMenu ');
DEFINE('_LX_MENU_PRO_CONFIG','Configuration LxMenu Pro ');
DEFINE('_LX_MENU_ENTRIES','Enregistrements LxMenu Pro');

//Column Labels
DEFINE('_LX_DIRECTION','Orientation');
DEFINE('_LX_POSITION_STYLE','Style de Position');
DEFINE('_LX_MODULE_NAME','Nom du module');
DEFINE('_LX_PUBLISHED','Module publi�');
DEFINE('_LX_ACCESS','Module access');
DEFINE('_LX_MODULE_POSITION','Module position');
DEFINE('_LX_MENU_NAME','Nom du Menu');

//Tab Labels
DEFINE('_LX_TAB_COMMON','G�n�rale');
DEFINE('_LX_TAB_BACKGROUND','Arri�re plans');
DEFINE('_LX_TAB_BORDER','Bordure');
DEFINE('_LX_TAB_LABEL','Label');
DEFINE('_LX_TAB_SUB_MENU','Sous menu');

//Section Labels
DEFINE('_LX_SECTION_COMMON','Param�tres globaux');
DEFINE('_LX_SECTION_BACKGROUND_OUTER','Param�tre arri�re plans (interne)');
DEFINE('_LX_SECTION_BACKGROUND_INNER','Param�tre arri�re plans (externe)');
DEFINE('_LX_SECTION_BACKGROUND_MARGIN','Param�tre espace interne <> externe (marge)');
DEFINE('_LX_SECTION_BORDER','Param�tre bordure');
DEFINE('_LX_SECTION_BORDER_SIZE','Taille');
DEFINE('_LX_SECTION_LABEL_TEXT_SETTINGS','Menuitem text label settings');
DEFINE('_LX_SECTION_LABEL_PADDING','Param�tre Espace');
DEFINE('_LX_SECTION_MAIN_ITEM','Param�tres des �l�ments du Menu Principal');
DEFINE('_LX_SECTION_SUB_ITEM','Param�tres des �l�ments du sous-menu');
DEFINE('_LX_SECTION_BACKGROUND_IMAGE','Arri�re plan');

//Field Labels
DEFINE('_LX_FIELD_MENU_NAME','Nom du menu');
DEFINE('_LX_FIELD_MENU_DIRECTION','Orientation du menu');
DEFINE('_LX_FIELD_POSITION_STYLE','Position style');
DEFINE('_LX_FIELD_POSITION_LEFT','Position � droite');
DEFINE('_LX_FIELD_POSITION_TOP','Position en haut');
DEFINE('_LX_FIELD_ITEM_WIDTH','Largeur menu');
DEFINE('_LX_FIELD_ITEM_HEIGHT','Hauteur menu');
DEFINE('_LX_FIELD_CREATE_EXPAND_SYMBOL','Afficher un symbol');
DEFINE('_LX_FIELD_EXPAND_SYMBOL','symbol');
DEFINE('_LX_FIELD_POPUP_ON_CLICK','Afficher une Popup quand clique');
DEFINE('_LX_FIELD_EXPAND_DELAY','D�lai pour afficher');
DEFINE('_LX_FIELD_HIDE_DELAY','D�lai pour masquer');
DEFINE('_LX_FIELD_COLOR','Couleur');
DEFINE('_LX_FIELD_COLOR_ON_HIGHLIGHT','Quand s�lectionn�');
DEFINE('_LX_FIELD_TOP','Haut');
DEFINE('_LX_FIELD_RIGHT','Droite');
DEFINE('_LX_FIELD_BOTTOM','Bas');
DEFINE('_LX_FIELD_LEFT','Gauche');
DEFINE('_LX_FIELD_BORDER_SIZE','Size');
DEFINE('_LX_FIELD_BORDER_TYPE','Type');
DEFINE('_LX_FIELD_BORDER_TYPE_ON_HIGHLIGHT','Type quand s�lectionn�');
DEFINE('_LX_FIELD_FONT_FAMILY','Police');
DEFINE('_LX_FIELD_FONT_SIZE','Taille de la police');
DEFINE('_LX_FIELD_ALIGN','Alignement');
DEFINE('_LX_FIELD_ALIGN_ON_HIGHLIGHT','Aligner quand s�lectionn�');
DEFINE('_LX_FIELD_WEIGHT','Largeur');
DEFINE('_LX_FIELD_WEIGHT_ON_HIGHLIGHT','Largeur quand s�lectionn�');
DEFINE('_LX_FIELD_DECORATION','D�coration');
DEFINE('_LX_FIELD_DECORATION_ON_HIGHLIGHT','D�coration quand s�lectionn�');
DEFINE('_LX_FIELD_WHITE_SPACE','Espace');
DEFINE('_LX_FIELD_WHITE_SPACE_ON_HIGHLIGHT','Espace quand s�lectionn�');
DEFINE('_LX_FIELD_INHERIT_SETTINGS','R�cup�re les param�tres du  main menu');
DEFINE('_LX_FIELD_TOP_OFFSET','D�calage en haut');
DEFINE('_LX_FIELD_LEFT_OFFSET','Decalage � gauche');
DEFINE('_LX_FIELD_SET_TRANSPARENCY','D�finir la transparence');
DEFINE('_LX_FIELD_TRANSPARENCY','Transparence');
DEFINE('_LX_FIELD_TEMPLATE','Template');
DEFINE('_LX_FIELD_MENU_ALIGN','Alignement du Menu');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE','Selectionner un fichier image');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_HL','Image quand selectionner');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_UPLOAD','Envoyer le fichier image');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_USE','Utiliser une image en arri�re plan');
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_REPEAT','R�p�ter image');
DEFINE('_LX_FIELD_SUB_DIRECTION','Expand to'); //new
DEFINE('_LX_FIELD_SET_FADING','Enable fading effect');//needs translation
DEFINE('_LX_FIELD_BG_COLOR','Background color');//needs translation
DEFINE('_LX_FIELD_EXPANSION_DIRECTION','Expansion direction');//needs translation
DEFINE('_LX_FIELD_BACKGROUND_IMAGE_POSITION','Image position');//needs translation

//Value Labels
DEFINE('_LX_LIST_VALUES_VERTICAL','vertical');
DEFINE('_LX_LIST_VALUES_HORIZONTAL','horizontal');
DEFINE('_LX_LIST_VALUES_RELATIVE','relative');
DEFINE('_LX_LIST_VALUES_ABSOLUTE','absolue');
DEFINE('_LX_LIST_VALUES_FIXED','fixe');
DEFINE('_LX_LIST_VALUES_YES','Oui');
DEFINE('_LX_LIST_VALUES_NO','Non');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_1','Fl�che � droite grise 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_GREY_2','Fl�che � droite grise 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_1','Fl�che en bas grise 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_GREY_2','Fl�che en bas grise 2');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_1','Fl�che � droite blanc 1');
DEFINE('_LX_LIST_VALUES_RIGHT_ARROW_WHITE_2','Fl�che � droite blanc 2');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_1','Fl�che en bas blanche 1');
DEFINE('_LX_LIST_VALUES_BOTTOM_ARROW_WHITE_2','Fl�che en bas blanche 2');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_BLACK','Plus noir');
DEFINE('_LX_LIST_VALUES_PLUS_NODE_WHITE','Plus blanc');
DEFINE('_LX_LIST_VALUES_BORDER_NONE','sans');
DEFINE('_LX_LIST_VALUES_BORDER_DOTTED','pointill�');
DEFINE('_LX_LIST_VALUES_BORDER_DASHED','tiret');
DEFINE('_LX_LIST_VALUES_BORDER_SOLID','solide');
DEFINE('_LX_LIST_VALUES_BORDER_DOUBLE','double');
DEFINE('_LX_LIST_VALUES_BORDER_GROOVE','grav�e');
DEFINE('_LX_LIST_VALUES_BORDER_RIDGE','effet 3D');
DEFINE('_LX_LIST_VALUES_BORDER_INSET','interne');
DEFINE('_LX_LIST_VALUES_BORDER_OUTSET','externe');
DEFINE('_LX_LIST_VALUES_LEFT','gauche');
DEFINE('_LX_LIST_VALUES_CENTER','centrer');
DEFINE('_LX_LIST_VALUES_RIGHT','droite');
DEFINE('_LX_LIST_VALUES_NORMAL','normal');
DEFINE('_LX_LIST_VALUES_BOLD','large');
DEFINE('_LX_LIST_VALUES_BOLDER','plus large');
DEFINE('_LX_LIST_VALUES_LIGHTER','plus fin');
DEFINE('_LX_LIST_VALUES_NONE','aucun');
DEFINE('_LX_LIST_VALUES_UNDERLINE','soulign�');
DEFINE('_LX_LIST_VALUES_OVERLINE','surlign�');
DEFINE('_LX_LIST_VALUES_LINE_THROUGH','line-through');
DEFINE('_LX_LIST_VALUES_NOWRAP','nowrap');
DEFINE('_LX_LIST_VALUES_PALETTE_WINDOWS','Palette Windows system');
DEFINE('_LX_LIST_VALUES_PALETTE_WEBSAFE','Palette Web');
DEFINE('_LX_LIST_VALUES_PALETTE_GREYSCALE','Palette Niveaux de gris');
DEFINE('_LX_LIST_VALUES_PALETTE_MAC','Palette Mac OS ');
DEFINE('_LX_LIST_VALUES_INDEPENDENT','- independant -');
DEFINE('_LX_LIST_VALUES_NO_REPEAT','ne pas r�p�ter');
DEFINE('_LX_LIST_VALUES_REPEAT','r�p�ter horizontally and vertically');
DEFINE('_LX_LIST_VALUES_REPEAT_X','r�p�ter horizontalement uniquement');
DEFINE('_LX_LIST_VALUES_REPEAT_Y','r�p�ter verticalement uniquement');

//Other Labels
DEFINE('_LX_MAIN_MENU','Main menu');
DEFINE('_LX_SUB_MENU','Sous menu');
DEFINE('_LX_NONE_MODULE','Merci d\'ouvrir et d\'enregistrer pour retrouver le module');
DEFINE('_LX_TOOLTIP_IMG_UPLOAD','Envoyer le fichier');
DEFINE('_LX_TOOLTIP_IMG_CANCEL','Annuler l\'envoie du fichier');
DEFINE('_LX_TOOLTIP_IMG_REMOVE','Effacer le fichier image');

//Help Labels
DEFINE('_LX_HELP_MENU_NAME',"S�lectionnez le menu que vous voulez configurer  <b>(utilisez le bouton appliquer pour mettre l\'aper�u � jour)</b>");
DEFINE('_LX_HELP_TEMPLATE','Ce menu appara�t sur le template s�lectionn�');
DEFINE('_LX_HELP_MENU_DIRECTION','D�cidez ici si vous voulez d�velopper le menu verticalement ou horizontalement');
DEFINE('_LX_HELP_POSITION_STYLE',"Comment  le menu doit �tre positionner  <b>(ceci n\'affecte pas l\'aper�u)</b>");
DEFINE('_LX_HELP_POSITION_LEFT',"D�pend du style de position  <b>(ceci n\'affecte pas l\'aper�u)</b>");
DEFINE('_LX_HELP_POSITION_TOP', "D�pend du style de position  <b>(ceci n\'affecte pas l\'aper�u)</b>");
DEFINE('_LX_HELP_ITEM_WIDTH',"Donner la largeur des �l�ments en pixels");
DEFINE('_LX_HELP_ITEM_HEIGHT',"Donner la hauteur des �l�ments en pixels");
DEFINE('_LX_HELP_CREATE_EXPAND_SYMBOL',"Le symbole d\'agrandissement doit il appara�tre sur les menu contenant au moins un sous-menu ?");
DEFINE('_LX_HELP_POPUP_ON_CLICK','Afficher les sous-menus uniquement quand le menu est cliqu� ?');
DEFINE('_LX_HELP_EXPAND_DELAY','D�lai en millisecondes avant que le sous-menu soit affich�');
DEFINE('_LX_HELP_HIDE_DELAY','D�lai en millisecondes avant que le sous-menu soit masqu�');
DEFINE('_LX_HELP_BG_COLOR',"Couleur de \'arri�re plans");
DEFINE('_LX_HELP_BG_COLOR_ON_HIGHLIGHT',"Couleur de \'arri�re plans quand le pointeur est dessus");
DEFINE('_LX_HELP_MARGIN_TOP','Marge du haut en pixels');
DEFINE('_LX_HELP_MARGIN_RIGHT','Marge de droite en pixels');
DEFINE('_LX_HELP_MARGIN_BOTTOM','Marge du bas en pixels');
DEFINE('_LX_HELP_MARGIN_LEFT','Marge de gauche en pixels');
DEFINE('_LX_HELP_BORDER_TYPE','Type de bordure');
DEFINE('_LX_HELP_BORDER_TYPE_ON_HIGHLIGHT','Border type quand le pointeur est dessus');
DEFINE('_LX_HELP_BORDER_SIZE','Largeur de la bordure en pixels');
DEFINE('_LX_HELP_BORDER_COLOR','Couleur de la bordure');
DEFINE('_LX_HELP_BORDER_COLOR_ON_HIGHLIGHT','Couleur de la bordure quand le pointeur est dessus');
DEFINE('_LX_HELP_FONT_FAMILY',"Famille de polices");
DEFINE('_LX_HELP_FONT_SIZE',"Taille de la police");
DEFINE('_LX_HELP_COLOR','Couleur du texte');
DEFINE('_LX_HELP_COLOR_ON_HIGHLIGHT','Couleur du texte quand le pointeur est dessus');
DEFINE('_LX_HELP_ALIGN','Alignement du texte');
DEFINE('_LX_HELP_ALIGN_ON_HIGHLIGHT','Alignement du texte quand le pointeur est dessus');
DEFINE('_LX_HELP_WEIGHT','Epaisseur de la police');
DEFINE('_LX_HELP_WEIGHT_ON_HIGHLIGHT','Epaisseur de la police quand le pointeur est dessus');
DEFINE('_LX_HELP_DECORATION','D�coration du texte');
DEFINE('_LX_HELP_DECORATION_ON_HIGHLIGHT','D�coration du texte quand le pointeur est dessus');
DEFINE('_LX_HELP_WHITE_SPACE','Gestion des espaces blanc');
DEFINE('_LX_HELP_WHITE_SPACE_ON_HIGHLIGHT','Gestion des espaces blanc quand le pointeur est dessus');
DEFINE('_LX_HELP_PADDING_TOP','Espace int�rieur du haut');
DEFINE('_LX_HELP_PADDING_RIGHT','Espace int�rieur de droite');
DEFINE('_LX_HELP_PADDING_BOTTOM','Espace int�rieur du bas');
DEFINE('_LX_HELP_PADDING_LEFT','Espace int�rieur de gauche');
DEFINE('_LX_HELP_INHERIT_SETTINGS','Utilisez les param�tres du menu principal ?');
DEFINE('_LX_HELP_TOP_OFFSET','D�calage en Haut pour les sous-menus');
DEFINE('_LX_HELP_LEFT_OFFSET','D�calage � Droite pour les sous-menus');
DEFINE('_LX_HELP_SET_TRANSPARENCY','Activer la transparence? <b>(fonctionne uniquement avec IE et FF)</b>');
DEFINE('_LX_HELP_TRANSPARENCY','Valeur de la transparence en pourcentage <b>(100% signifie pas de transparence)</b>');
DEFINE('_LX_HELP_MENU_ALIGN','Alignement pour tout le block menu. Menu horizontal uniquement. <b>(ceci n\'affecte pas l\'aper�u');
DEFINE('_LX_HELP_MAIN_ITEM_WIDTH',"Configurer ici la largeur des �l�ments de menu en pixel. Si la valeur est 0 (uniquement pour les �l�ments du menu principal) en orientation horizontal la valeur sera configur�e automatiquement en fonction du libel� <b>(non actif sur LxMenu Free)</b>.");
DEFINE('_LX_HELP_SUB_ITEM_HEIGHT',"Configurer ici la hauteur des �l�ments de sous-menu en pixel. Si la valeur est 0 (uniquement pour les �l�ments du sous-menu) en orientation horizontal et vertical la valeur sera configur�e automatiquement en fonction du libel� <b>(non actif sur LxMenu Free)</b>.");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_USE',"Voulez vous utiliser une image de fond?");
DEFINE('_LX_HELP_BACKGROUND_IMAGE',"Image arri�re plan � utiliser");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_HL',"Image arri�re plan � utiliser quand le curseur et dessus");
DEFINE('_LX_HELP_BACKGROUND_IMAGE_REPEAT',"Comment r�p�ter l\'image d\'arri�re plan");
DEFINE('_LX_HELP_SUB_DIRECTION','Direction which the submenus should expand to'); //new
DEFINE('_LX_HELP_SET_FADING',"Would you like to enable a fading effect for sub menu items?");//needs translation
DEFINE('_LX_HELP_MENU_BG_COLOR',"Background color from the menu block on horizontal orientation. <b>(does not affect the preview)</b>");//needs translation
DEFINE('_LX_HELP_EXPANSION_DIRECTION',"Which direction should sub menu items expand to?");//needs translation
DEFINE('_LX_HELP_BACKGROUND_IMAGE_POSITION',"Choose the position the image should placed to.");//needs translation
?>

