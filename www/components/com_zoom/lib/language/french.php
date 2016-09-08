<?php
//zOOm Media Gallery//
/**
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Date: February, 2005                                                |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Mambo. It's the most feature-rich gallery component    |
|              for Mambo! For documentation and a detailed list       |
|              of features, check the zOOm homepage:                  |
|              http://zoom.ummagumma.nl                               |
| License: GPL                                                        |
| Filename: french.php                                               |
| Version: 2.5 beta3                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_ISO","iso-8859-1");
define("_ZOOM_PICK","Choisir une Galerie");
define("_ZOOM_DELETE","Supprimer");
define("_ZOOM_BACK","Retour");
define("_ZOOM_MAINSCREEN","Ecran principal");
define("_ZOOM_BACKTOGALLERY","Retour � la Galerie");
define("_ZOOM_INFO_DONE","termin�!");
define("_ZOOM_TOOLTIP", "zOOm Astuce");
define("_ZOOM_WARNING", "zOOm Alerte!");

//Gallery admin page
if ($zoom->_isAdmin || $zoom->_isUser){
define("_ZOOM_ADMINSYSTEM","Espace Administrateur");
define("_ZOOM_USERSYSTEM","Espace Utilisateur");
define("_ZOOM_ADMIN_TITLE","Espace Administrateur de Galerie");
define("_ZOOM_USER_TITLE","Espace Utilisateur de Galerie");
define("_ZOOM_CATSMGR","Manager de Galerie");
define("_ZOOM_CATSMGR_DESCR","cr�er une nouvelle galerie d'images et la supprimer dans le Manager de Galeries, ici.");
define("_ZOOM_NEW","Nouvelle Galerie");
define("_ZOOM_DEL","Supprimer une Galerie");
define("_ZOOM_MEDIAMGR","Manager d'Images");
define("_ZOOM_MEDIAMGR_DESCR","publier, effa�er, charger automatiquement une image ou envoyer manuellement plusieurs images.");
define("_ZOOM_UPLOAD","Fichier(s) � envoyer");
define("_ZOOM_EDIT","Publier une Galerie");
define("_ZOOM_ADMIN_CREATE","Cr�er une base de donn�es");
define("_ZOOM_ADMIN_CREATE_DESCR","construire les tables de la base de donn�es requise pour pouvoir utiliser un album.");
define("_ZOOM_HD_PREVIEW","Visualiser");
define("_ZOOM_HD_CHECKALL","Tout v�rifier ou non");
define("_ZOOM_HD_CREATEDBY","Cr��e par");
define("_ZOOM_HD_AFTER","Ins�rer apr�s");
define("_ZOOM_HD_HIDEMSG","Cacher le texte 'pas d'images'");
define("_ZOOM_HD_NAME","Nom de la Galerie");
define("_ZOOM_HD_DIR","R�pertoire");
define("_ZOOM_HD_NEW","Nouvelle Galerie");
define("_ZOOM_HD_SHARE","Partager cette Galerie");
define("_ZOOM_SHARE","Partager");
define("_ZOOM_UNSHARE","Ne plus partager");
define("_ZOOM_PUBLISH","Publier");
define("_ZOOM_UNPUBLISH","D�publier");
define("_ZOOM_TOPLEVEL","Premier niveau");
define("_ZOOM_HD_UPLOAD","Envoi fichier");
define("_ZOOM_A_ERROR_ERRORTYPE","Erreur");
define("_ZOOM_A_ERROR_IMAGENAME","Nom de l'image");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> non disponible");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> non disponible");
define("_ZOOM_A_ERROR_NOTINSTALLED","Non install�e");
define("_ZOOM_A_ERROR_CONFTODB","Erreur de configuration pendant la sauvegarde dans la base de donn�es!");
define("_ZOOM_A_MESS_NOT_SHURE","* Si vous n'�tes pas s�r, utilisez \"auto\" par d�faut.");
define("_ZOOM_A_MESS_SAFEMODE1","Note: \"Safe Mode\" est activ�; dans ce cas, il est possible que l'envoi de fichiers plus gros ne soit pas trait�!<br />Vous deriez changer le FTP-Mode dans l'Espace Administrateur.");
define("_ZOOM_A_MESS_SAFEMODE2","Note: \"Safe Mode\" est activ�; dans ce cas, il est possible que l'envoi de fichiers plus gros ne soit pas trait�!<br />zOOm recommande d'activer le FTP-Mode dans l'Espace Administrateur.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Traitement en cours...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Non ouverture de l'url:");
define("_ZOOM_A_MESS_PARSE_URL","Analyse \"%s\" des images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Si vous voyez seulement une bo�te grise ci-dessus ou si vous avez des probl�mes de t�l�chargement,<br />il est possible que vous n'ayez pas la derni�re version de Java. Rendez-vous ici: <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> et t�l�chargez la derni�re version.");
define("_ZOOM_SETTINGS","Param�tres");
define("_ZOOM_SETTINGS_DESCR","modifiez et visualisez ici les param�tres disponibles.");
define("_ZOOM_SETTINGS_TAB1","Syst�me");
define("_ZOOM_SETTINGS_TAB2","Fichiers");
define("_ZOOM_SETTINGS_TAB3","Apparence"); 
//Tab 4 is Module
define("_ZOOM_SETTINGS_TAB5","Safe Mode");
define("_ZOOM_SETTINGS_TAB6","Accessibilit�");
define("_ZOOM_SETTINGS_CONVTYPE","Type de conversion");
define("_ZOOM_SETTINGS_AUTODET","auto-d�tect�: ");
define("_ZOOM_SETTINGS_IMGPATH","Chemin vers le fichier images:");
define("_ZOOM_SETTINGS_TTIMGPATH","Le chemin courant est ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Param�tres de conversion d'image:");
define("_ZOOM_SETTINGS_IMPATH","Chemin vers ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," ou NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Chemin vers FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg est requis pour cr�er les fichiers 'Thumbnails' de vos fivhiers vid�os.<br />Les extensions support�es sont: ");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Chemin vers PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text est un �l�ment de Xpdf package et est requis pour l'indexation d'un fichier PDF.");
define("_ZOOM_SETTINGS_MAXSIZE","Volume max. d'une image: ");
define("_ZOOM_SETTINGS_THUMBSETTINGS","Param�tres 'Thumbnails':");
define("_ZOOM_SETTINGS_QUALITY","Qualit� de NetPBM et GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Volume max. d'un 'Thumbnail': ");
define("_ZOOM_SETTINGS_TEMPNAME","Nom provisoire: ");
define("_ZOOM_SETTINGS_AUTONUMBER","num�rotation auto des noms d'images (eg. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Description provisoire: ");
define("_ZOOM_SETTINGS_TITLE","Titre de la galerie:");
define("_ZOOM_SETTINGS_SUBCATSPG","Nbre de colonne d'une (sous)galerie");
define("_ZOOM_SETTINGS_COLUMNS","Nbre de colonne d'un 'thumbnail'");
define("_ZOOM_SETTINGS_THUMBSPG","Onglets par page");
define("_ZOOM_SETTINGS_CMTLENGTH","Longueur max. des commentaires");
define("_ZOOM_SETTINGS_CHARS","caract�res");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Pr�fixe du titre de Galerie");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Capacit� avanc�e ON/ OFF");
define("_ZOOM_SETTINGS_CSS_TITLE","Edition Style");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Donn�es � afficher ON/ OFF");
define("_ZOOM_SETTINGS_COMMENTS","Commentaires");
define("_ZOOM_SETTINGS_POPUP","PopUp Images");
define("_ZOOM_SETTINGS_CATIMG","Montrer la cat�gorie d'image");
define("_ZOOM_SETTINGS_SLIDESHOW","Diaporama");
define("_ZOOM_SETTINGS_ZOOMLOGO","Montrer le logo zOOm");
define("_ZOOM_SETTINGS_SHOWHITS","Afficher le score");
define("_ZOOM_SETTINGS_READEXIF","Lire les donn�es EXIF");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Ce m�mo montrera les donn�es additionnelles EXIF et autre IPTC, sans que le module EXIF ait besoin d'�tre pr�sent sur votre syst�me.");
define("_ZOOM_SETTINGS_READID3","Lire mp3 ID3-data"); // Per Lasse - this one has been added!
define("_ZOOM_SETTINGS_ID3TOOLTIP","Cette fonction montre des param�tres ID3 v1.1 et v2.0 lorsqu'on voit le d�tail d\'un fichier MP3."); // Per Lasse - this one has been added!
define("_ZOOM_SETTINGS_RATING","Classement");
define("_ZOOM_SETTINGS_CSS","fen�tre popup de la feuille de style");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galerie &amp; vue moyenne");
define("_ZOOM_SETTINGS_USERUPL","Autoriser l'envoi par un utilisateur:");
define("_ZOOM_SETTINGS_ACCESSLVL","Niveau d'acc�s: ");
define("_ZOOM_SETTINGS_SUCCESS","Configuration mise � jour avec succ�s!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom image");
define("_ZOOM_SETTINGS_ORDERBY","M�thode de tri'Thumbnail'; trier par:");
define("_ZOOM_SETTINGS_CATORDERBY","M�thode de tri d'une (sous-)galerie; trier par:");
define("_ZOOM_SETTINGS_DATE_ASC","DATE, ascendante");
define("_ZOOM_SETTINGS_DATE_DESC","DATE, descendante");
define("_ZOOM_SETTINGS_FLNM_ASC","Nom de fichier, ascendant");
define("_ZOOM_SETTINGS_FLNM_DESC","Nom de fichier, descendant");
define("_ZOOM_SETTINGS_NAME_ASC","NOM, ascendant");
define("_ZOOM_SETTINGS_NAME_DESC","NOM, descendant");
define("_ZOOM_SETTINGS_LIGHTBOX","Lightbox");
define("_ZOOM_SETTINGS_LBTOOLTIP","Une 'Lightbox' est comme un album rempli par les images choisies par un utilisateur et pouvant �tre t�l�charg�es comme un dossier ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Affichage du Nom");
define("_ZOOM_SETTINGS_SHOWDESCR","Affichage de la description");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Affichage des mots-cl�s");
define("_ZOOM_SETTINGS_SHOWDATE","Affichage de la date");
define("_ZOOM_SETTINGS_SHOWUNAME","Afficher nom utilisateur");
define("_ZOOM_SETTINGS_SHOWFILENAME","Affichage du nom de fichier");
define("_ZOOM_SETTINGS_METABOX","Affichage d�taill� des pages-galeries");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Supprimez ce dispositif pour acc�l�rer l'affichage de votre galerie. Efficace avec de grandes bases de donn�es.");
define("_ZOOM_SETTINGS_ECARDS","E-cartes");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-cartes permanentes");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","une semaine");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","deux semaines");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","un mois");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","trois mois");
define("_ZOOM_SETTINGS_SHOWSEARCH","Champ de recherche sur TOUTES les pages");
define("_ZOOM_SETTINGS_ALLOWCREATE","Autoriser un utilisateur � cr�er une galerie");
define("_ZOOM_SETTINGS_ALLOWDEL","Autoriser un utilisateur � supprimer une galerie partag�e");
define("_ZOOM_SETTINGS_ALLOWEDIT","Autoriser un utilisateur � publier une galerie (partag�e)");
define("_ZOOM_SETTINGS_SETMENUOPTION","Afficher le lien 'Envoi Media' dans le menu Utilisateur");
define("_ZOOM_SETTINGS_USEFTP","Utiliser FTP mode?");
define("_ZOOM_SETTINGS_FTPHOST","Nom de l'ordinateur");
define("_ZOOM_SETTINGS_FTPUNAME","Nom utilisateur");
define("_ZOOM_SETTINGS_FTPPASS","Mot de passe");
define("_ZOOM_SETTINGS_FTPWARNING","Attention: Mot de passe non sauvegard�!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","R�pertoire sur l'ordinateur");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","SVP, veuillez indiquer ici le chemin de votre racine FTP � Mambo. IMPORTANT: Terminer <b>sans</b> 'slash' ni 'backslash'!");
define("_ZOOM_SETTINGS_GROUP","Groupe");
define("_ZOOM_SETTINGS_PRIV_DESCR","Vous �tes habilit� � changer les privil�ges de tous les groupes d'utilisateurs connus de Mambo et ainsi modifier les privil�ges de tout utilisateur membre de ces groupes!<br />
    Un utilisateur peut, en th�orie, faire les actions suivantes: envoi de fichier(s), �diter/effacer media, cr�er/�diter/effacer (partag�) galeries.<br />
    Ce qu'ils peuvent faire et ne pas faire dans la vie r�elle ne tient qu'� vous.");
define("_ZOOM_SYSTEM_TITLE","Configuration syst�me");
define("_ZOOM_YES","oui");
define("_ZOOM_NO","non");
define("_ZOOM_SAVE","Sauvegarder");
define("_ZOOM_MOVEFILES","D�placer les images");
define("_ZOOM_MOVEFILES_DESCR","d�placer une image d'une galerie � une autre.");
define("_ZOOM_BUTTON_MOVE","D�placer");
define("_ZOOM_MOVEFILES_STEP1","Etape 1: Selectionner la galerie-source");
define("_ZOOM_MOVEFILES_STEP2","Etape 2: S�lectionner les images que vous voulez d�placer");
define("_ZOOM_MOVEFILES_STEP3","Etape 3: Selectionner la galerie-cible et d�placer les images");
define("_ZOOM_ALERT_MOVEOK","Images d�plac�es avec succ�s!");
define("_ZOOM_OPTIMIZE","Optimiser les tables");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery utilise beaucoup de tables et cr�e ainsi des donn�es volatiles, ie. 'donn�es bric-�-brac'. Cliquer ici pour les supprimer.");
define("_ZOOM_OPTIMIZE_SUCCESS","Tables zOOm Media Gallery optimis�es!");
define("_ZOOM_UPDATE","Mise � jour zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","ajoutez des nouveaut�s, solutionnez les probl�mes et r�solvez les bogues! Allez sur <a href=\"http://zoom.ummagumma.nl\" target=\"_blank\">zoom.ummagumma.nl</a> pour conna�tre la derni�re version!");
define("_ZOOM_UPDATE_XMLDATE","Date de la derni�re mise � jour");
define("_ZOOM_UPDATE_PACKAGE","Mise � jour fichier ZIP: ");
define("_ZOOM_CREDITS","A propos de zOOm Media Gallery & Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Espace disque actuellement utilis�");
define("_ZOOM_UPLOAD_SINGLE","fichier unique (ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","fichiers multiples");
define("_ZOOM_UPLOAD_DRAGNDROP","Glisser-d�poser");
define("_ZOOM_UPLOAD_SCANDIR","analyser un r�pertoire");
define("_ZOOM_UPLOAD_INTRO","Cliquez sur <b>Browse</b> pour rechercher une image � envoyer.");
define("_ZOOM_UPLOAD_STEP1","1. Selectionner le nbre de fichiers que vous voulez envoyer: ");
define("_ZOOM_UPLOAD_STEP2","2. Selectionner la galerie o� vous voulez que les fichiers soient charg�s: ");
define("_ZOOM_UPLOAD_STEP3","3. Utilisez 'Browse' pour rechercher des photos sur votre ordinateur");
define("_ZOOM_SCAN_STEP1","Etape 1: indiquez l'emplacement � examiner pour les images...");
define("_ZOOM_SCAN_STEP2","Etape 2: s�lectionnez les fichiers � charger...");
define("_ZOOM_SCAN_STEP3","Etape 3: zOOm traite les fichiers choisis...");
define("_ZOOM_SCAN_STEP1_DESCR","L'emplacement peut �tre soit une URL soit un r�pertoire sur le serveur.<br />&nbsp;   Info: Les images FTP indiquent alors le chemin vers votre r�pertoire sur le serveur, ici!");
define("_ZOOM_SCAN_STEP2_DESCR1","En cours...");
define("_ZOOM_SCAN_STEP2_DESCR2","comme un r�pertoire local");
define("_ZOOM_FORMCREATE_NAME","Nom");
define("_ZOOM_FORM_IMAGEFILE","Image");
define("_ZOOM_FORM_IMAGEFILTER","Type Images support�");
define("_ZOOM_FORM_INGALLERY","Dans la galerie");
define("_ZOOM_FORM_SETFILENAME","Nommer les images comme les fichiers.");
define("_ZOOM_FORM_LOCATION","Emplacement");
define("_ZOOM_BUTTON_SCAN","Soumettre une URL ou un r�pertoire");
define("_ZOOM_BUTTON_UPLOAD","Envoyer");
define("_ZOOM_BUTTON_EDIT","Publier");
define("_ZOOM_BUTTON_CREATE","Cr�er");
define("_ZOOM_CONFIRM_DEL","Cette option supprimera compl�tement la galerie, y compris les images!\\nConfirmez vous?");
define("_ZOOM_CONFIRM_DELMEDIUM","Vous allez compl�tement supprimer cette image!\\nConfirmez vous?");
define("_ZOOM_ALERT_DEL","La galerie est supprim�e!");
define("_ZOOM_ALERT_NOCAT","Aucune galerie s�lectionn�e!");
define("_ZOOM_ALERT_NOMEDIA","Aucune image s�lectionn�e!");
define("_ZOOM_ALERT_EDITOK","Les champs de galerie ont �t� �dit�s avec succ�s!");
define("_ZOOM_ALERT_NEWGALLERY","Nouvelle galerie cr��e.");
define("_ZOOM_ALERT_NONEWGALLERY","Galerie non cr��e!");
define("_ZOOM_ALERT_EDITIMG","Les propri�t�s de l'image ont �t� �dit�es avec succ�s.");
define("_ZOOM_ALERT_DELPIC","Groupe d'images supprim�!.");
define("_ZOOM_ALERT_NODELPIC","L'image ne peut �tre effa��e!");
define("_ZOOM_ALERT_NOPICSELECTED","Aucune image s�lectionn�e.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Aucun groupe d'images s�lectionn�.");
define("_ZOOM_ALERT_UPLOADOK","Image correctement charg�e!");
define("_ZOOM_ALERT_UPLOADSOK","Groupe d'images correctement charg�!");
define("_ZOOM_ALERT_WRONGFORMAT","Format d'image erron�!.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Format erron�!.");
define("_ZOOM_ALERT_MOVEFAILURE","Transfert de fichier erron�.");
define("_ZOOM_ALERT_IMGERROR","Erreur de redimensionnement d'image/ de cr�ation de 'thumbnail'.");
define("_ZOOM_ALERT_PCLZIPERROR","Erreur pendant l'extraction d'une archive.");
define("_ZOOM_ALERT_INDEXERROR","Erreur pendant l'indexation du document.");
define("_ZOOM_ALERT_IMGFOUND","image(s) trouv�e(s).");
define("_ZOOM_INFO_CHECKCAT","Veuillez s�lectionner une galerie avant de cliquer sur 'Upload'!");
define("_ZOOM_BUTTON_ADDIMAGES","Ajouter des images");
define("_ZOOM_BUTTON_REMIMAGES","Supprimer des images");
define("_ZOOM_INFO_PROCESSING","Traitement du fichier:");
define("_ZOOM_ITEMEDIT_TAB1","Propri�t�s");
define("_ZOOM_ITEMEDIT_TAB2","Membres");
define("_ZOOM_ITEMEDIT_TAB3","Actions");
define("_ZOOM_USERSLIST_LINE1",">>Choisir les membres de cet article<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Acc�s public<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Membres seulement<<");
define("_ZOOM_PUBLISHED","Publi�");
define("_ZOOM_SHARED","Partager cette galerie");
define("_ZOOM_ROTATE","Rotation 90�");
define("_ZOOM_CLOCKWISE","dans le sens des aiguilles d'une montre");
define("_ZOOM_CCLOCKWISE","compteur dans le sens des aiguilles d'une montre");
define("_ZOOM_FLIP_HORIZ","Glissement image horizontal");
define("_ZOOM_FLIP_VERT","Glissement image vertical");
define("_ZOOM_PROGRESS_DESCR","Votre requ�te est en cours de traitement... Veuillez patienter.");
}

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Diaporama:");
define("_ZOOM_PREV_IMG","Image pr�c�dente");
define("_ZOOM_NEXT_IMG","Image suivante");
define("_ZOOM_FIRST_IMG","Premi�re image");
define("_ZOOM_LAST_IMG","Derni�re image");
define("_ZOOM_PLAY","d�marrer");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","remise � z�ro");
define("_ZOOM_FIRST","Premier");
define("_ZOOM_LAST","Dernier");
define("_ZOOM_PREVIOUS","Pr�c�dent");
define("_ZOOM_NEXT","Suivant");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Recherche rapide...");
define("_ZOOM_ADVANCED_SEARCH","Recherche avan��e");
define("_ZOOM_SEARCH_KEYWORD","Recherche par mots-cl�s");
define("_ZOOM_IMAGES","images");
define("_ZOOM_IMGFOUND","trouv�es - vous �tes sur la page");
define("_ZOOM_IMGFOUND2","de");
define("_ZOOM_SUBGALLERIES","sous-galeries");
define("_ZOOM_ALERT_COMMENTOK","Votre commentaire a bien �t� ajout�!");
define("_ZOOM_ALERT_COMMENTERROR","Vous avez d�j� comment� cette image!");
define("_ZOOM_ALERT_VOTE_OK","Votre vote a �t� pris en compte. Mer�i! ");
define("_ZOOM_ALERT_VOTE_ERROR","Vous avez d�j� vot� pour cette image!");
define("_ZOOM_WINDOW_CLOSE","Fermer");
define("_ZOOM_NOPICS","Pas d'images dans la galerie");
define("_ZOOM_PROPERTIES","Propri�t�s");
define("_ZOOM_COMMENTS","Commentaires");
define("_ZOOM_NO_COMMENTS","Pas de commentaires encore ajout�s!");
define("_ZOOM_YOUR_NAME","Nom");
define("_ZOOM_ADD","Ajouter");
define("_ZOOM_NAME","Nom");
define("_ZOOM_DATE","Date ajout�e");
define("_ZOOM_UNAME","Ajout� par");
define("_ZOOM_DESCRIPTION","Description");
define("_ZOOM_IMGNAME","Nom");
define("_ZOOM_FILENAME","Nom du fichier");
define("_ZOOM_CLICKDOCUMENT","(cliquer le nom du fichier pour ouvrir le document)");
define("_ZOOM_KEYWORDS","Mots-cl�s");
define("_ZOOM_HITS","score");
define("_ZOOM_CLOSE","Fermer");
define("_ZOOM_NOIMG", "Aucune image trouv�e!");
define("_ZOOM_NONAME", "Vous devez indiquer un nom!");
define("_ZOOM_NOCAT", "Pas de cat�gorie s�lectionn�e!");
define("_ZOOM_EDITPIC", "Publier une image");
define("_ZOOM_SETCATIMG","Placer comme image d'une galerie");
define("_ZOOM_SETPARENTIMG","Placer comme image de galerie d'une galerie PARENTE");
define("_ZOOM_PASS","Mot de passe");
define("_ZOOM_PASS_REQUIRED","Cette galerie requiert un mot de passe.<br />Veuillez saisir un mot de passe<br />et cliquer sur 'Go'. Mer�i.");
define("_ZOOM_PASS_BUTTON","Go");
define("_ZOOM_PASS_GALLERY","Mot de passe");
define("_ZOOM_PASS_INNCORRECT","Mot de passe erron�");

//Lightbox
define("_ZOOM_LIGHTBOX","S�lection"); //Per Lasse - this one has moved from _ZOOM_SETTINGS_LIGHTBOX to here for general use.
define("_ZOOM_LIGHTBOX_GALLERY","Mettre cette galerie dans ma s�lection!");
define("_ZOOM_LIGHTBOX_ITEM","Mettre cet article dans ma s�lection!");
define("_ZOOM_LIGHTBOX_VIEW","Voir ma s�lection");
define("_ZOOM_YOUR_LIGHTBOX","Votre s�lection contient:");
define("_ZOOM_LIGHTBOX_EMPTY","Votre s�lection est actuellement vide.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Cr�er un fichier ZIP");
define("_ZOOM_LIGHTBOX_CATS","Galeries");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Titre & Description");
define("_ZOOM_ACTION","Action");
define("_ZOOM_LIGHTBOX_ADDED","Article ajout� � votre s�lection!");
define("_ZOOM_LIGHTBOX_NOTADDED","Erreur lors de l'ajout d'un article dans votre s�lection!");
define("_ZOOM_LIGHTBOX_EDITED","Article �dit� correctement!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Erreur d'�dition de l'article!");
define("_ZOOM_LIGHTBOX_DEL","Article supprim� de votre s�lection!");
define("_ZOOM_LIGHTBOX_NOTDEL","Erreur lors de la suppression de l'article de votre s�lection!");
define("_ZOOM_LIGHTBOX_NOZIP","Vous avez d�j� cr�� le fichier ZIP de votre s�lection!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Analyse d'images depuis la galerie...");
define("_ZOOM_LIGHTBOX_DOZIP","cr�ation du fichier ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Vous pouvez maintenant t�l�charger la s�lection");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Montrer/ cacher les Metadonn�es");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Lecture en cours:"); // Per Lasse - this one has been added!
define("_ZOOM_AUDIO_CLICKTOPLAY","Cliquer ici pour lire le fichier."); // Per Lasse - this one has been added!
define("_ZOOM_ID3","ID3"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_SHOWHIDE","Montrer/cacher les donn�es ID3"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_LENGTH","Longueur"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_TITLE","Titre"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_ARTIST","Artist"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_ALBUM","Album"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_YEAR","Ann�e"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_COMMENT","Commentaire"); // Per Lasse - this one has been added!
define("_ZOOM_ID3_GENRE","Genre"); // Per Lasse - this one has been added!

//rating
define("_ZOOM_RATING","Classement");
define("_ZOOM_NOTRATED","Pas encore class�!");
define("_ZOOM_VOTE","vote");
define("_ZOOM_VOTES","votes");
define("_ZOOM_RATE0","� jeter!");
define("_ZOOM_RATE1","bof!!");
define("_ZOOM_RATE2","sans opinion!");
define("_ZOOM_RATE3","bien!");
define("_ZOOM_RATE4","tr�s bien!");
define("_ZOOM_RATE5","parfait!");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Derni�re soumission");
define("_ZOOM_LASTCOMM","Dernier commentaire");
define("_ZOOM_SEARCHRESULTS","R�sultats de recherche");
define("_ZOOM_TOPRATED","Top Classement");

//ecard
define("_ZOOM_ECARD_SENDAS","Envoyer cette E-carte � un ami!");
define("_ZOOM_ECARD_YOURNAME","Votre nom");
define("_ZOOM_ECARD_YOUREMAIL","Votre e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","Le nom de votre ami");
define("_ZOOM_ECARD_FRIENDSEMAIL","L'e-mail de votre ami");
define("_ZOOM_ECARD_MESSAGE","Message");
define("_ZOOM_ECARD_SENDCARD","Envoyer l'E-carte");
define("_ZOOM_ECARD_SUCCESS","Votre carte a bien �t� envoy�e.");
define("_ZOOM_ECARD_CLICKHERE","La visualiser ici!");
define("_ZOOM_ECARD_ERROR","Echec de l'envoi de votre E-carte �");
define("_ZOOM_ECARD_TURN","Regardez au dos de la carte!");
define("_ZOOM_ECARD_TURN2","Regardez le recto de cette carte!");
define("_ZOOM_ECARD_SENDER","Envoy�e par:");
define("_ZOOM_ECARD_SUBJ","Vous avez re�u une E-carte de:");
define("_ZOOM_ECARD_MSG1","E-carte exp�di�e depuis");
define("_ZOOM_ECARD_MSG2","Cliquer sur le lien ci-dessous pour voir votre carte!");
define("_ZOOM_ECARD_MSG3","Mer�i de ne pas r�pondre � ce message g�n�r� automatiquement.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm Installation essaie de cr�er un r�pertoire images "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','fait!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','�chec!');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery install� avec succ�s.<br>Vous pouvez maintenant rendre public vos albums!');
define ('_ZOOM_INSTALL_MESS2','NOTE: la premi�re chose que vous devriez faire maintenant est d\'aller dans le menu composant ci-dessus,<br>rep�rer l\'acc�s � "zOOm Media Gallery Admin", le cliquer et<br>v�rifier les param�tres de la page dans l\'espace Administrateur.');
define ('_ZOOM_INSTALL_MESS3','Ici vous pouvez modifier toutes les variables pour adapter zOOm � votre configuration.');
define ('_ZOOM_INSTALL_MESS4','N\'oubliez pas de cr�er une galerie et vous aurez fait le plus dur!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery n\'a pu �tre install� correctement!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Les r�pertoires suivants doivent �tre cr��s et ensuite les droits pass�s � "0777":<br />'
. '"images/zoom"<br />'
. '/components/com_zoom/images"<br />'
. '"/components/com_zoom/admin"<br />'
. '"/components/com_zoom/classes"<br />'
. '"/components/com_zoom/images"<br />'
. '"/components/com_zoom/images/admin"<br />'
. '"/components/com_zoom/images/filetypes"<br />'
. '"/components/com_zoom/images/rating"<br />'
. '"/components/com_zoom/images/smilies"<br />'
. '"/components/com_zoom/language"<br />'
. '"/components/com_zoom/tabs"');
define ('_ZOOM_INSTALL_MESS_FAIL3','Une fois que vous avez cr�� ces r�pertoires et chang� les droits, aller � <br /> "Components -> zOOm Media Gallery" et adaptez les param�tres aux v�tres.');


//Module Language
define("_ZOOM_M_config","Module");
define("_ZOOM_M_method","M�thode de visualisation");
define("_ZOOM_M_all","tout");
define("_ZOOM_M_random","au hasard");
define("_ZOOM_M_newest","nouveau");
define("_ZOOM_M_hits","classements");
define("_ZOOM_M_votes","votes");
define("_ZOOM_M_count","Nbre d\'images:");
define("_ZOOM_M_lastup","Derni�re mise � jour:");
define("_ZOOM_M_admin_count","Montrer le nombre d\'images:");
define("_ZOOM_M_admin_lastup","Montrer la date mise � jour:");
define("_ZOOM_M_admin_cats","Montrer le nom des galeries:");
define("_ZOOM_M_admin_meth","Montrer la m�thode:");
define("_ZOOM_M_admin_df","Format de Date (j M, H:i):");
?>
