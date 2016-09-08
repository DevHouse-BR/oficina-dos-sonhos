<?php
/***************************************************************************
 *                          lang_faq.php [Catalan]
 *                            -------------------
 *   begin                : Sun Jul 14, 2002
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *   $Id: lang_faq.php,v 1.1.2.2 2002/11/14 23:31:32 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//

  
$faq[] = array("--","Inici de sessi� (login) i registre");
$faq[] = array("Per qu� no puc iniciar una sessi�?", "T'has registrat? Has de registrar-te per tal d'iniciar una sessi�. Se t'ha excl�s del f�rum? (si es aix�, quan intentis iniciar una sessi� t'apareixer� un missatge dient-ho). En aquest cas, envia un missatge al webmaster o l'administrador del f�rum per saber perqu�. Si t'has registrat i no has estat excl�s verifica que el teu nom d'usuari i contrasenya coincideixin, �s el problema m�s habitual. Si est�s segur que les teves dades s�n correctes, envia un missatge a l'administrador del f�rum, �s possible que aquest estigui mal configurat.");
$faq[] = array("Per qu� m'he de registrar?", "Potser que no calgui, �s decisi� de l'administrador del f�rum si �s necessari registrar-se per tal de publicar missatges. No obstant, registrar-te et donar� acc�s a caracter�stiques addicionals no disponibles per als usuaris invitats com ara tenir el teu gr�fic personalitzat (avatar), enviar missatges privats o correu electr�nic a altres usuaris, subscripci� a grups d'usuaris, etc. Nom�s costa un moment, per tant �s molt recomanable.");
$faq[] = array("Per qu� surto de la meva sessi� autom�ticament?", "Si no actives la casella <i>Iniciar sessi� autom�ticament</i> quan inicies la sessi� al f�rum, nom�s et mantindr�s dins el sistema durant un temps predeterminat. Aix� es fa per evitar l'�s inadequat del teu compte per part d'alg� altre. Per mantenir-te dintre del sistema activa la casella quan inici�s la sessi�, per� recorda que aix� no �s recomanable si accedeixes al f�rum des d'un ordinador compartit, e.g. biblioteca, cibercaf�, universitat, etc.");
$faq[] = array("Com puc evitar apar�ixer als llistats d'usuaris connectats?", "Al teu perfil trobar�s l'opci� <i>Ocultar el meu estat de connexi�</i>; si actives aquesta opci�, nom�s apareixer�s als administradors i a tu mateix. Se't comptar� com a usuari ocult.");
$faq[] = array("He perdut la meva contrasenya!", "Calma, tot i que la teva contrasenya no es pot recuperar, es pot canviar per una de nova. Per fer-ho ves a la p�gina d'inici de sessi� i clica sobre <u>He oblidat la contrasenya</u>, segueix les instruccions i en poc temps podr�s tornar a entrar.");
$faq[] = array("M'he registrat per� no puc iniciar una sessi�!", "Primer verifica que est�s introduint el nom d'usuari i la contrasenya correctament. Si tot �s correcte poden haver passat dues coses. Si el Sistema de Protecci� Infantil (COPPA) est� activat i quan t'has registrat has escollit l'opci� <u>S�c menor de 13 anys d'edat</u> llavors tindr�s que seguir les instruccions que rebis. Si no �s el cas, potser el teu compte necessita ser activat. Alguns f�rums requereixen que o b� tu o l'administrador activeu el nou compte abans de poder iniciar una sessi�. Quan vas registrar-te se t'hauria d'haver informat sobre si era necess�ria l'activaci�. Si has rebut un email, segueix-ne les instruccions; si no l'has rebut, llavors assegura't que l'adre�a electr�nica que vas introduir sigui v�lida. Una ra� per la qual s'utilitza l'activaci� d'usuaris �s reduir la possibilitat que alg� malintencionat s'aprofiti del f�rum de manera an�nima.");
$faq[] = array("Vaig registrar-me fa temps per� ara ja no puc iniciar una sessi�!", "Les raons m�s probables s�n aquestes: el nom d'usuari o la contrasenya que has introdu�t s�n incorrectes (revisa l'email que vas rebre quan vas registrar-te), o b� l'administrador ha esborrat el teu compte per alguna ra�. Si aquest �s el cas, potser no vas arribar a enviar cap missatge. Sol passar que els f�rums esborrin peri�dicament els usuaris que no han publicat mai res per tal de reduir la mida de la base de dades. Prova de registrar-te de nou i participar en algunes discussions.");


$faq[] = array("--","Prefer�ncies d'usuari i configuracions");
$faq[] = array("Com canvio la meva configuraci�?", "Totes les teves configuracions (si est�s registrat) estan emmagatzemades en una base de dades. Per modificar-les clica l'enlla� <u>Perfil</u> que es troba, generalment, a dalt de cada p�gina, tot i que la ubicaci� pot canviar. Aix� et permetr� canviar la teva configuraci�.");
$faq[] = array("Les hores no s�n correctes!", "Les hores segurament s�n correctes per� �s possible que estiguis veient les hores corresponents a un altre fus horari. Si aquest �s el cas, hauries de canviar la configuraci� del fus horari al teu perfil per que es correspongui amb el teu e.g. Londres, Paris, New York, Sydney, etc. Tingues present que per canviar el fus horari has d'estar registrat. Per tant, si no est�s registrat, ja va sent hora que ho facis.");
$faq[] = array("He canviat el fus horari per� l'hora segueix estant malament", "Si est�s segur que has seleccionat el fus horari correcte i l'hora encara �s diferent, el m�s probable �s que es degui al canvi horari que es fa a l'estiu en alguns pa�sos. El f�rum no est� dissenyat per gestionar aquest canvi horari i, per tant, durant els mesos d'estiu el f�rum pot diferir de l'hora local real en una hora.");
$faq[] = array("El meu idioma no est� a la llista d'idiomes!", "El m�s probable �s que l'administrador no hagi instal�lat el paquet del teu idioma o b� que ning� hagi fet la traducci� del f�rum. Prova de demanar-li a l'administrador del f�rum si pot instal�lar el paquet d'idioma que necessites. Si no existeix, llavors ets lliure de crear una nova traducci�. Pots trobar m�s informaci� a la p�gina web del phpBB Group (clica l'enlla� que hi ha al final de la p�gina).");
$faq[] = array("Com puc mostrar una imatge sota el meu nom d'usuari?", "Pot haver-hi dos tipus d'imatges sota el teu nom d'usuari en els missatges. La primera �s una imatge associada al teu rang, generalment t� forma d'estrelles o blocs que indiquen quants de missatges has publicat o el teu status. A sota d'aquesta hi pot haver una imatge m�s gran coneguda com Avatar, un gr�fic generalment �nic i personal per a cada usuari. �s decisi� de l'administrador del f�rum permetre l'�s d'avatars i el escull de quina manera es poden obtenir. Si no pots utilitzar-los �s perqu� aix� ho ha decidit l'administrador, pots preguntar-li les raons per les quals ho ha fet (estem segur que seran bones!).");
$faq[] = array("Com canvio el meu rang?", "Generalment no pots canviar el teu rang directament. La majoria de f�rums utilitzen els rangs per indicar el nombre de missatges que has publicat i per identificar determinats usuaris, e.g. moderadors i administradors poden tenir un rang especial. Si us plau no facis un �s abusiu del f�rum enviant missatges de forma innecess�ria nom�s per incrementar el teu rang; si ho fas, �s probable que un moderador o l'administrador simplement baixin el teu nombre de missatges publicats.");
$faq[] = array("Quan clico sobre l'enlla� per enviar un email a un usuari se'm demana que inici� una sessi�", "Desafortunadament, nom�s els usuaris registrats poden enviar emails a trav�s del formulari d'email que t� implementat el f�rum (sempre i quant l'administrador hagi activat aquesta caracter�stica). Aix� es fa per evitar un �s inadequat del sistema d'email per part d'usuaris an�nims.");


$faq[] = array("--","Publicaci� de missatges");
$faq[] = array("Com publico un tema en un f�rum?", "F�cil, clica el bot� adequat a la pantalla del f�rum o tema. �s possible que necessitis registrar-te abans de poder publicar missatges, all� que se't permet est� llistat al final de les pantalles dels f�rums i dels temes (la llista <i>Pots publicar nous temes, Pots votar a les enquestes, etc.</i>");
$faq[] = array("Com edito o esborro un missatge?", "Si no ets un administrador o moderador del f�rum nom�s pots editar o esborrar els teus propis missatges. Pots editar un missatges (de vegades nom�s durant un per�ode de temps limitat despr�s de ser fet) clicant el bot� <i>editar</i> del missatge en q�esti�. Si alg� ja ha respost al teu missatge trobar�s un petit text sota el teu missatge quan tornis a la pantalla del tema que llista el nombre de vegades que l'has editat. Aix� no apareixer� si ning� hi ha contestat ni tampoc si s�n els administradors o els moderadors els que editen el missatge (haurien de deixar un missatge dient qu� han modificat i per qu�). Si us plau tingues en compte que els usuaris normals no poden esborrar un missatge un cop alg� hi ha contestat.");
$faq[] = array("Com afegeixo una signatura al meu missatge?", "Per afegir una signatura a un missatge primer n'has de crear una, aix� es fa a trav�s del teu perfil. Un cop creada pots activar l'opci� <i>Afegir signatura</i> al formulari de publicaci� per tal d'afegir-la. Tamb� pots afegir la signatura per defecte a tots el missatges activant l'opci� corresponent del teu perfil (de totes maneres pots desactivar l'addici� de la teva signatura a missatges individuals deseleccionant l'opci� afegir signatura al formulari de publicaci�).");
$faq[] = array("Com creo una enquesta?", "Crear una enquesta �s f�cil, quan publiques un tema nou (o edites el primer missatge d'un tema, si hi perm�s) hauries de veure l'opci� <i>Afegir enquesta</i> sota el quadre del missatge principal (si no ho pots veure probablement no tens perm�s per crear enquestes). Has d'introduir un t�tol per a l'enquesta i llavors dues opcions com a m�nim (per afegir una opci� escriu la pregunta i clica sobre el bot� <i>Afegir opci�</i>). Tamb� pots decidir el l�mit de temps durant el qual l'enquesta estar� activa, 0 �s una enquesta que no acaba mai. Hi haur� un l�mit per al nombre d'opcions que pots llistar que �s decidit per l'administrador del f�rum.");
$faq[] = array("Com edito o esborro una enquesta?", "Igual com amb els missatges, les enquestes nom�s poden ser editades per l'usuari que les va crear, un moderador o l'administrador del f�rum. Per editar una enquesta clica sobre el primer missatge del tema (aquest sempre hi t� l'enquesta associada). Si ning� ha em�s cap vot llavors els usuaris poden esborrar l'enquesta o editar qualsevol opci� d'aquesta, no obstant si alg� ja hi ha votat nom�s els moderadors i administradors poden editar-la o esborrar-la. Aix� �s per evitar que la gent les falsegi canviant opcions a mitja enquesta.");
$faq[] = array("Per qu� no puc accedir a alguns f�rums?", "Alguns f�rums poden estar limitats a determinats grups d'usuaris. Per veure, llegir, enviar missatges, etc. potser necessitis una autoritzaci� especial, nom�s el moderador del f�rum i l'administrador poden permetre't l'acc�s, prova de contactar-hi.");
$faq[] = array("Per qu� no puc votar a les enquestes?", "Nom�s els membres registrats poden votar a les enquestes (per tal de prevenir el falsejament dels resultats), si t'has registrat i encara segueixes sense poder votar llavors probablement no tinguis els permisos necessaris.");


$faq[] = array("--","Formateig i Tipus de temes");
$faq[] = array("Qu� �s el codi BBCode?", "BBCode �s una implementaci� especial de l'HTML, si pots utilitzar BBCode o no ho decideix l'administrador (tamb� pots deshabilitar-lo per a missatges individuals al formulari de publicaci�). BBCode t� un estil molt similar al de l'HTML, els marcadors van entre claud�tors [ i ] i ofereix un major control sobre qu� i com es mostra alguna cosa. Per m�s informaci� sobre el BBCode mira la guia  a que pots accedir des de la p�gina de publicaci�.");
$faq[] = array("Puc utilitzar l'HTML?", "Dep�n de si l'administrador t'ho permet o no, ell t� el control sobre aix�. Si se't permet utilitzar-lo probablement et trobar�s amb que nom�s funcionen determinats marcadors. Aix� �s una caracter�stica de <i>seguretat</i> per evitar que la gent perjudiqui la visualitzaci� del f�rum utilitzant marcadors que en trenquin l'estructura. Si l'HTML est� habilitat el pots desactivar per a missatges individuals a trav�s del formulari de publicaci�.");
$faq[] = array("Qu� s�n els Smileys?", "Els Smileys o Emoticons son petites imatges que poden ser utilitzades per expressar alguns sentiments utilitzant un petit codi, e.g. :) significa feli�, :( significa trist. La llista completa d'emoticons es pot veure al formulari de publicaci�. Intenta no abusar-ne per�, poden fer r�pidament que un missatge es torni il�legible i un moderador pot decidir treure'ls o eliminar el missatge completament.");
$faq[] = array("Puc afegir imatges als missatges?", "Pots mostrar imatges en els teus missatges. No obstant, de moment no hi ha una manera per pujar directament les imatges al f�rum. Per aix� has d'enlla�ar-la a una imatge emmagatzemada en un servidor web accessible p�blicament, e.g. http://www.some-unknown-place.net/my-picture.gif. No pots ficar enlla�os a imatges emmagatzemades al teu PC (si no �s que es tracta d'un servidor accessible p�blicament) ni imatges emmagatzemades amb mecanismes d'autentificaci�, e.g. b�sties de hotmail, yahoo, p�gines protegides per contrasenya, etc. Per mostrar la imatge utilitza o b� el marcador de BBCode [img] o l'apropiat d'HTML (si est� perm�s).");
$faq[] = array("Qu� s�n los Anuncis?", "Els anuncis sovint contenen informaci� important i els hauries de llegir tan aviat com sigui possible. Els anuncis apareixen a dalt de cada pagina al f�rum on s�n publicats. Si pots o no publicar un anunci depens dels permisos necessaris, aquests els decideix l'administrador.");
$faq[] = array("Qu� s�n els Temes Permanents?", "Els temes permanents apareixen sota els anuncis als f�rums i nom�s a la primera p�gina. Sovint s�n for�a importants i els hauries de llegir quan sigui possible. Igual com amb els anuncis l'administrador del f�rum decideix quins permisos es necessiten per publicar temes permanents a cada f�rum.");
$faq[] = array("Qu� s�n els Temes Tancats?", "Els temes tancats o bloquejats estan aix� perqu� un moderador o administrador del f�rum ho ha decidit. No pots enviar respostes als temes tancats i qualsevol enquesta que continguessin s'acaba autom�ticament. Els temes poden ser tancats per moltes raons.");


$faq[] = array("--","Nivells d'usuari i Grups");
$faq[] = array("Qu� s�n els Administradors?", "Els administradors s�n persones a les quals se'ls ha assignat el nivell de control m�s alt sobre el f�rum sencer. Poden controlar totes les facetes del f�rum com ara permisos, excloure usuaris, crear grups d'usuaris o moderadors, etc. Tamb� tenen permisos de moderador a tot el f�rum.");
$faq[] = array("Qu� s�n els Moderadors?", "Els moderadors s�n persones (o grups de persones) el treball dels quals �s vigilar la marxa dels f�rums regularment. Poden editar o esborrar missatges i tancar, desbloquejar, moure, esborrar i dividir temes al f�rum que moderen. Normalment els moderadors hi s�n per evitar que la gent es desvi� dels temes o que envi�n missatges ofensius o insultants.");
$faq[] = array("Qu� s�n els Grups d'Usuaris?", "Els grups d'usuaris s�n un m�tode per que l'administrador pugui agrupar usuaris. Cada usuari pot pert�nyer a diversos grups (aix� �s diferent de molts altres f�rums) i a cada grup se li poden assignar drets d'acc�s individuals. Aix� facilita a l'administrador fer moderadors d'un f�rum a un grup d'usuaris o donar-los acc�s a un f�rum privat.");
$faq[] = array("Com puc unir-me a un Grup d'Usuaris?", "Per unir-te a un grup d'usuaris clica l'enlla� de Grups d'Usuaris situat a la cap�alera de la p�gina (depenent del disseny de la plantilla) i podr�s veure tots els grups d'usuaris. No tots els grups son <i>oberts</i>, alguns estan tancats i d'altres fins i tot poden estar ocults. Si el grup �s obert pots demanar unir-t'hi clicant el bot� corresponent. El moderador del grup d'usuaris haur� d'acceptar la teva demanda, potser se't demanar� per qu� vols unir-te al grup. Si us plau no critiquis el moderador d'un grup en el cas de no ser acceptat,  segur que tindran les seves raons.");
$faq[] = array("Com em converteixo en Moderador d'un Grup d'Usuaris?", "Inicialment els grups d'usuaris els crea l'administrador del f�rum i tamb� assigna un moderador. Si est�s interessat en crear un grup d'usuaris hauries de contactar amb l'administrador, prova d'enviar-li un missatge privat.");


$faq[] = array("--","Missatgeria privada");
$faq[] = array("No puc enviar missatges privats!", "Hi ha tres possibles raons: no est�s registrat o no has iniciat una sessi�, l'administrador del f�rum ha deshabilitat la missatgeria privada a tot el f�rum o b� t'ha prohibit enviar missatges privats. Si es tracta del darrer cas prova de preguntar-li a l'administrador el perqu�.");
$faq[] = array("No paro de rebre missatges privats no desitjats!", "En un futur afegirem una llista per ignorar remitents al sistema de missatgeria privada. De moment, per�, si no pares de rebre missatges no desitjats d'alg� informa l'administrador del f�rum, ell pot prohibir a un usuari enviar missatges privats.");
$faq[] = array("He rebut spam o correu amb insults d'alg� d'aquest f�rum!", "Sentim molt sentir aix�. La caracter�stica d'enviar emails d'aquest f�rum inclou mecanismes de seguretat per localitzar els usuaris que envien aquests missatges. Li hauries d'enviar un email a l'administrador amb una c�pia completa de l'email que has rebut, �s molt important que inclogui les cap�aleres (cont� detalls de l'usuari que ha enviat l'email). Ell se'n pot ocupar.");

//
// Les seg�ents entrades haurien de romandre en tots els idiomes i per totes les modificacions
//
$faq[] = array("--","Sobre phpBB 2");
$faq[] = array("Qui ha programat aquest f�rum?", "Aquesta aplicaci� (en la seva forma original) est� produ�da, llan�ada i amb drets d'autor de  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Est� disponible mitjan�ant la GNU General Public Licence i �s de lliure distribuci�, veure l'enlla� per m�s detalls.");
$faq[] = array("Per qu� la caracter�stica X no est� disponible?", "Aquesta aplicaci� est� escrita i sota llic�ncia a trav�s del phpBB Group. Si creus que s'ha d'incloure una caracter�stica visita la p�gina web phpbb.com i mira qu� hi tenen a dir. Si us plau no envi�s demandes de noves caracter�stiques als f�rums de phpbb.com, el Grup utilitza sourceforge per manejar les tasques per incloure noves caracter�stiques. Si us plau llegeix els f�rums i per veure quina �s la nostra posici�, si �s que en tenim, respecte una caracter�stica donada i llavors segueix el procediment descrit.");
$faq[] = array("Amb qui he de contactar sobre abusos i/o problemes legals relacionats amb aquest f�rum?", "Hauries de contactar amb l'administrador del f�rum. Si no pots esbrinar qui �s, primer hauries de contactar amb un dels moderadors del f�rum i preguntar-li amb qui t'hauries de posar en contacte. Si fins i tot aix� no obtens cap resposta hauries de contactar amb el propietari del domini (fes una cerca whois) o si el f�rum �s en un servei gratu�t (e.g. yahoo, free.fr, f2s.com, etc.), l'administraci� o departament d'ab�s d'aquest servei. Si us plau tingues en compte que el phpBB Group no en t� cap control i no pot ser de cap manera responsable de com, on o per qui aquest f�rum �s utilitzat. �s absolutament in�til contactar amb el phpBB Group en relaci� amb qualsevol problema legal (comentaris difamatoris, etc.) que no estigui relacionat directament amb la p�gina web phpbb.com o l'aplicaci� de phpBB mateixa. Si envies un email al phpBB Group sobre un �s ali� d'aquesta aplicaci� hauries d'esperar una resposta tibant o cap resposta en absolut.");

//
// Aix� finalitza les entrades del FAQ
//

?>