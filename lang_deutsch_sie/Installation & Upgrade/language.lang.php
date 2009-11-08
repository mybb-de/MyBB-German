<?php
#########################################################
# Deutsches Sprachpaket (Formell)                       #
# Version x.x.x                                         #
# Datum: xx.xx.xxxx                                     #
# MyBB-Version x.x.x                                    #
# Autor: MyBBoard.de | Webseite: http://www.mybboard.de #
# (c) 2005-2009 MyBBoard.de | Alle Rechte vorbehalten!  #
#                                                       #
# Die Lizenz/Nutzungsbedingungen finden Sie in der      #
# beiliegenden Readme.                                  #
#########################################################

$l['none'] = 'Kein';
$l['not_installed'] = 'Nicht installiert';
$l['not_writable'] = 'Nicht beschreibbar';
$l['writable'] = 'Beschreibbar';
$l['done'] = 'Fertig';
$l['next'] = 'Weiter';
$l['error'] = 'Fehler';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Erneut pr&uuml;fen';

$l['title'] = "MyBB Installationsroutine";
$l['welcome'] = 'Willkommen';
$l['license_agreement'] = 'Lizenzvereinbarung';
$l['req_check'] = '&Uuml;berpr&uuml;fung der Voraussetzungen';
$l['db_config'] = 'Konfiguration der Datenbank';
$l['table_creation'] = 'Tabellenerstellung';
$l['data_insertion'] = 'Einf&uuml;gen der Daten';
$l['theme_install'] = 'Einf&uuml;gen des Themes';
$l['board_config'] = 'Konfiguration des Forums';
$l['admin_user'] = 'Administrator';
$l['finish_setup'] = 'Installation beenden';

$l['table_population'] = 'Einf&uuml;gen der Daten';
$l['theme_installation'] = 'Einf&uuml;gen des Themes';
$l['create_admin'] = 'Administrator-Account erstellen';

$l['already_installed'] = "MyBB ist bereits installiert";
$l['mybb_already_installed'] = "<p>Willkommen bei der Installationsroutine f&uuml;r MyBB {1}. MyBB hat festgestellt, dass es bereits in diesem Ordner eingerichtet wurde.</p>
<p>Bitte w&auml;hlen Sie eine passende Aktion:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Aktualisiere deine aktuelle Version auf MyBB {1} <span style=\"font-size: 80%; color: maroon;\">(Empfohlen)</span></h3>
	<p>&Uuml;ber diese Option aktualisieren Sie Ihr MyBB auf MyBB {1}.</p>
	<p>Sie sollten diese Option w&auml;hlen, wenn Sie die Themen, Beitr&auml;ge und alle anderen Informationen behalten m&ouml;chten.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aktualisiere auf MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Installiere eine neue Kopie des MyBB</h3>
	<p>Diese Option <span style=\"color: red;\">l&ouml;scht ein bereits bestehendes Forum</span> und installiert eine neue Kopie des MyBB.</p>
	<p>Sie sollten diese Option w&auml;hlen, wenn Sie Ihre Forum l&ouml;schen und neu starten wollen.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Sind Sie sicher, dass Sie eine neue Kopie des MyBB installieren wollen?\\n\\nDabei wird Ihr vorhandenes Forum gel&ouml;scht. DIESER PROZESS KANN NICHT R&Uuml;CKG&Auml;NGIG GEMACHT WERDEN.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Installiere MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB hat festgestellt, dass es vom \"Upload\" Ordner aus ausgef&uuml;hrt wird.</h3>
	<p>Auch wenn kein Fehler vorliegt wird empfohlen, dass die Dateien aus dem Ordner \"Upload\" auf den Server &uuml;bertragen werden und nicht der Ordner selbst.<br /><br />F&uuml;r mehr Informationen siehe auch <a href=\"http://www.mybboard.de/doku/installationaktualisierung/installation.html\" target=\"_blank\">Installation</a>.</p>
</div>";

$l['welcome_step'] = '<p>Willkommen zur Installationsroutine f&uuml;r MyBB {1}. Diese Routine installiert und konfiguriert eine Kopie des MyBB auf Ihrem Server.</p>
<p>Nachdem Sie bereits die Dateien auf den Server &uuml;bertragen haben, m&uuml;ssen die Datenbanktabellen erstellt und die Daten eingef&uuml;gt werden. Unten finden Sie eine Auflistung der Schritte, die im Folgenden durchlaufen werden.</p>
<ul>
	<li>&Uuml;berpr&uuml;fung der Systemvoraussetzungen</li>
	<li>Konfiguration der Datenbank-Engine</li>
	<li>Erstellung der Datenbanktabellen</li>
	<li>Einf&uuml;gen der Standard-Daten</li>
	<li>Einf&uuml;gen der Standard-Templates und des -Themes</li>
	<li>Erstellung eines Administrator-Accounts zur Verwaltung des Forums</li>
	<li>Allgemeine Foreneinstellungen</li>
</ul>
<p>Nachdem ein Schritt erfolgreich abgeschlossen wurde, klicken Sie auf "Weiter", um die Installation fortzusetzen.</p>
<p>Klicken Sie auf "Weiter", um die Lizenzvereinbarung anzeigen zu lassen.</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Indem Sie auf "Weiter" klicken, stimmen Sie der oben stehenden Lizenzvereinbarung zu.</strong></p>';


$l['req_step_top'] = '<p>Bevor Sie MyBB installieren k&ouml;nnen, wird &uuml;berpr&uuml;ft, ob die minimalen Systemvoraussetzungen gegeben sind.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">&Uuml;berpr&uuml;fung der Systemvoraussetzungen</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Voraussetzungen</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">PHP Version:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Unterst&uuml;tzte DB-Erweiterungen:</td>
			<td class="last alt_col">{2}</td>
		<tr>
		<tr class="alt_row">
			<td class="first">Unterst&uuml;tzte &Uuml;bersetzungs-Erweiterungen:</td>
			<td class="last alt_col">{3}</td>
		<tr>
			<td class="first">PHP XML-Erweiterungen:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Konfigurationsdatei beschreibbar:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Einstellungsdatei beschreibbar:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Ordner f&uuml;r Cache beschreibbar:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Ordner f&uuml;r Uploads beschreibbar:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Ordner f&uuml;r Avatare beschreibbar:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Herzlichen Gl&uuml;ckwunsch, alle Voraussetzungen f&uuml;r den Betrieb des Forums sind erf&uuml;llt.</strong></p>
<p>Klicken Sie auf "Weiter", um die Installation fortzusetzen.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB ben&ouml;tigt PHP 5.0.0 oder h&ouml;her. Sie haben zur Zeit {1} installiert.';
$l['req_step_error_dboptions'] = 'MyBB ben&ouml;tigt mindestens eine installierte kompatible Datenbankerweiterung. Der Server gab zur&uuml;ck, dass keine zur Verf&uuml;gung steht.';
$l['req_step_error_xmlsupport'] = 'MyBB ben&ouml;tigt PHP mit der Unterst&uuml;tzung f&uuml;r die Verarbeitung von XML. Bitte gehen Sie auf <a href="http://www.php.net/xml" target="_blank">PHP.net</a> f&uuml;;r weitere Informationen.';
$l['req_step_error_configdefaultfile'] = 'Die Konfigurationsdatei (inc/config.default.php) konnte nicht umbenannt werden. Bitte benennen Sie die <u>config.default.php</u> manuell um in <u>config.php</u>, damit sie beschrieben werden kann. Bei Problemen kontaktieren Sie bitte den <a href="http://www.mybboard.de/support.html" targert="_blank">MyBB Support</a>.';
$l['req_step_error_configfile'] = 'Die Konfigurationsdatei (inc/config.php) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_settingsfile'] = 'Die Einstellungsdatei (inc/settings.php) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_cachedir'] = 'Der Ordner f&uuml;r den Zwischenspeicher (cache/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_uploaddir'] = 'Der Ordner f&uuml;r Uploads (uploads/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_avatardir'] = 'Der Ordner f&uuml;r Avatare (uploads/avatars/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_cssddir'] = 'Der Ordner f&uuml;r CSS (css/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte </a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Fehler</h3>
<p>Bei der &Uuml;berpr&uuml;fung der Voraussetzungen des MyBB wurden die unten aufgef&uuml;hrten Probleme festgestellt. Die Installation kann nicht fortgesetzt werden, da die minimalen Voraussetzungen nicht erf&uuml;llt werden. Bitte beheben Sie folgende Probleme und versuchen es erneut:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Jetzt ist es an der Zeit die Datenbank zu konfigurieren, sowie die Verbindungsdaten zu dieser zu speichern. Diese Daten werden normalerweise vom Hoster bereitgestellt.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Datenbankkonfiguration</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Datenbankeinstellungen</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Datenbank-Engine:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Sind alle Angaben korrekt, klicken Sie auf "Weiter".</p>';

$l['database_settings'] = "Datenbankeinstellungen";
$l['database_path'] = "Datenbank-Pfad:";
$l['database_host'] = "Datenbank-Host:";
$l['database_user'] = "Datenbank-Benutzername:";
$l['database_pass'] = "Datenbank-Passwort:";
$l['database_name'] = "Datenbank-Name:";
$l['table_settings'] = "Tabelleneinstellungen";
$l['table_prefix'] = "Tabellenpr&auml;fix:";
$l['table_encoding'] = "Tabellenkodierung:";

$l['db_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den Daten, die Sie eingegeben haben:</p>
{1}
<p>Sind die oben aufgef&uuml;hrten Probleme behoben, k&ouml;nnen Sie mit der Installation fortfahren.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Sie haben eine ung&uuml;ltige Datenbank-Engine gew&auml;hlt. Bitte w&auml;hle Sie eine Engine aus der folgenden Liste.';
$l['db_step_error_noconnect'] = 'Die Verbindung zum Datenbankserver unter \'{1}\' konnte mit dem angegebenen Benutzernamen und Passwort nicht hergestellt werden. Sind Host und Benutzerdaten korrekt?';
$l['db_step_error_nodbname'] = 'Konnte die Datenbank \'{1}\' nicht ausw&auml;hlen. Existiert diese Datenbank und hat der angegebene Benutzer mit dem angegebenen Passwort Zugang zu dieser Datenbank?';
$l['db_step_error_missingencoding'] = 'Sie haben keine Tabellenkodierung ausgew&auml;hlt. Bitte w&auml;hlen Sie eine Kodierung (w&auml;hlen Sie "UTF-8 Unicode", wenn Sie sich nicht sicher sind).';
$l['db_step_error_sqlite_invalid_dbname'] = 'Sie k&ouml;nnen keine relativen URLs f&uuml;r die SQLite-Datenbank verwenden. Bitte verwenden Sie einen kompletten Dateisystempfad (z.B.: /home/user/database.db) f&uuml;r Ihre SQLite-Datenbank.';

$l['tablecreate_step_connected'] = '<p>Die Verbindung zur angegebenen Datenbank konnte mit den angegebenen Benutzerdaten erfolgreich hergestellt werden.</p>
<p>Datenbank-Engine: {1} {2}</p>
<p>Im Folgenden werden die Datenbanktabellen erstellt.</p>';
$l['tablecreate_step_created'] = 'Erstelle Tabelle {1}...';
$l['tablecreate_step_done'] = '<p>Alle Tabellen wurden erfolgreich erstellt. Klicken Sie auf "Weiter", um die Standarddaten einzuf&uuml;gen.</p>';

$l['populate_step_insert'] = '<p>Nachdem die Datenbanktabellen erstellt wurden, k&ouml;nnen jetzt die Daten eingef&uuml;gt werden.</p>';
$l['populate_step_inserted'] = '<p>Die Standarddaten wurden erfolgreich in die Datenbank eingef&uuml;gt. Klicken Sie auf "Weiter", um die Standard-Templates und das -Theme einzuf&uuml;gen.</p>';


$l['theme_step_importing'] = '<p>Lade und importiere Datei mit Standard-Theme und -Templates...</p>';
$l['theme_step_imported'] = '<p>Das Standard-Theme und die Templates wurden erfolgreich eingef&uuml;gt. Klicken Sie auf "Weiter", um die Basiseinstellungen des Forums vorzunehmen.</p>';


$l['config_step_table'] = '<p>Sie m&uuml;ssen nun die Basiseinstellungen Ihres Forums vornehmen, wie z.B. den Namen des Forums, die URL, die Details zu Ihrer Webseite und Cookie-Domain und -Pfad. Diese Einstellungen k&ouml;nnen sp&auml;ter einfach im Admin Control Panel ge&auml;ndert werden.</p>
		<div class="border_wrapper">
			<div class="title">Konfiguration des Forums</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Details zum Forum</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Name des Forums:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">URL zum Forum (ohne abschlie&szlig;enden Slash):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Details zur Webseite</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Name der Webseite:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">URL zur Webseite:</td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Cookie-Einstellungen <a title="Was ist das?" target="_blank" href="http://www.mybboard.de/doku/haeufig-gestellte-fragen/warum-kann-ich-mich-nicht-im-forum-anmelden.html">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie-Domain:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Cookie-Pfad:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Kontakt-Details (werden im Footer gezeigt)</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Kontakt-E-Mail:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Wenn Sie alle Daten eingegeben haben, klicken Sie auf "Weiter".</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den angegebenen Daten:</p>
{1}
<p>Sind alle Probleme behoben, k&ouml;nnen Sie mit der Installation fortfahren.</p>
</div>';
$l['config_step_error_url'] = 'Sie haben die URL zum Forum nicht angegeben.';
$l['config_step_error_name'] = 'Sie haben keinen Namen f&uuml;r Ihr Forum angegeben.';


$l['admin_step_setupsettings'] = '<p>Einf&uuml;gen der Basiseinstellungen...</p>';
$l['admin_step_insertesettings'] = '<p>{1} Einstellungen in {2} Gruppen eingef&uuml;gt.</p>
<p>Aktualisiere Einstellungen mit den eingegebenen Daten.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} geplante Aufgaben eingef&uuml;gt.</p>';
$l['admin_step_insertedviews'] = '<p>{1} Admin-Ansichten eingef&uuml;gt.</p>';
$l['admin_step_createadmin'] ='<p>Sie m&uuml;ssen ersten einen Benutzer-Account erstellen, &uuml;ber den Sie Ihre Kopie des MyBB verwalten k&ouml;nnen. Bitte geben Sie unten die erforderlichen Daten ein, um den Account zu erstellen.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Administrator-Account Details</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Account-Details</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Benutzername:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" autocomplete="off" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Passwort:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off"  /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Passwort erneut eingeben:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">Kontakt-Details</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">E-Mail-Adresse:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Haben Sie alle Angaben gemacht, klicken Sie auf "Weiter".</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den gemachten Angaben:</p>
{1}
<p>Sind alle Probleme behoben, k&ouml;nnen Sie mit der Installation fortfahren.</p>
</div>';
$l['admin_step_error_nouser'] = 'Sie haben keinen Benutzernamen f&uuml;r den Administrator-Account angegeben.';
$l['admin_step_error_nopassword'] = 'Sie haben kein Passwort f&uuml;r den Administrator-Account angegeben.';
$l['admin_step_error_nomatch'] = 'Die eingegebenen Passw&ouml;rter stimmen nicht &uuml;berein.';
$l['admin_step_error_noemail'] = 'Sie haben keine E-Mail-Adresse f&uuml;r den Administrator-Account angegeben.';

$l['done_step_usergroupsinserted'] = "<p>Benutzergruppen importieren...";
$l['done_step_admincreated'] = '<p>Erstelle Administrator-Account...';
$l['done_step_adminoptions'] = '<p>Erstelle Administrator-Rechte...';
$l['done_step_cachebuilding'] = '<p>Lese Daten in Cache ein...';
$l['done_step_success'] = '<p class="success">Ihre Kopie des MyBB wurde erfolgreich installiert und konfiguriert.</p>
<p>Die MyBB Group bedankt sich f&uuml;r die Unterst&uuml;tzung durch die Installation der Software und wir hoffen, Sie in der Community begr&uuml;&szlig;en zu k&ouml;nnen, wenn Sie Fragen haben oder einfach Teil der MyBB Community werden m&ouml;chten.</p>';
$l['done_step_locked'] = '<p>Die Installation ist gesperrt. Bitte entfernen Sie die Datei \'lock\' aus dem Installationsverzeichnis, um die Installationsroutine erneut ausf&uuml;hren zu k&ouml;nnen.</p><p>Sie k&ouml;nnen nun ins <a href="../index.php">Forum</a> oder ins <a href="../admin/index.php">Admin Control Panel</a> gehen.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">Bitte entfernen Sie das Installationsverzeichnis vom Server, bevor Sie fortfahren.</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>Melden Sie sich f&uuml;r unseren Newsletter an!</strong></p><p>Wir verschicken jedesmal einen Newsletter, wenn eine neue Version (neue Features, Sicherheitsupdate) des MyBB erschienen ist.</p><p>Dadurch werden Sie schnell informiert, so dass Sie immer auf dem neuesten Stand sind!</p><p><a href="http://www.mybboard.de/support/newsletter.html">Jetzt f&uuml;r den Newsletter anmelden!</a></p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Upgraderoutine";
$l['upgrade_welcome'] = "<p>Wilkommen zur Upgraderoutine f&uuml;r MyBB {1}.</p><p>Bitte vergewissern Sie sich, welche Version des MyBB zur Zeit installiert ist, da Sie diese unten ausw&auml;hlen m&uuml;ssen.</p><p><strong>Wir empfehlen dringend, vor dem Upgrade ein vollst&auml;ndiges Backup des Forums durchzuf&uuml;hren (Datenbank und Dateien)</strong>, so dass das Forum im Notfall wiederhergestellt werden kann.</p><p>Klicken Sie bei jedem Schritt des Upgradeprozesses nur einmal auf den \"Weiter\"-Button. Je nach Gr&ouml;&szlig;e des Forums k&ouml;nnen die einzelnen Schritte einige Zeit in Anspruch nehmen.</p><p>Sind alle Vorbereitungen getroffen, w&auml;hlen Sie Ihre installierte Version des MyBB und klicken Sie auf \"Weiter\".</p>";
$l['upgrade_templates_reverted'] = 'Templates zur&uuml;ckgesetzt';
$l['upgrade_templates_reverted_success'] = "<p>Alle Templates wurden erfolgreich zur&uuml;ckgesetzt und aktualisiert. Bitte klicken Sie auf \"Weiter\", um mit dem Upgrade fortzufahren.</p>";
$l['upgrade_settings_sync'] = 'Synchronisierung der Einstellungen';
$l['upgrade_settings_sync_success'] = "<p>Die Einstellungen wurden erfolgreich mit den aktuellen Einstellungen synchronisiert.</p><p>{1} neue Einstellungen wurden in {2} Einstellungsgruppen eingef&uuml;gt.</p><p>Bitte klicken Sie auf \"Weiter\".</p>";
$l['upgrade_datacache_building'] = 'Erstellung der Caches';
$l['upgrade_building_datacache'] = '<p>Erstelle Caches...';
$l['upgrade_continue'] = 'Bitte klicken Sie auf "Weiter", um fortzufahren.';
$l['upgrade_locked'] = "<p>Die Installations-/Upgradeskripte sind gesch&uuml;tzt. Um die Skripte aufrufen zu k&ouml;nnen, m&uuml;ssen Sie die Datei \"lock\" aus dem Ordner \"install\" l&ouml;schen.</p><p>Sie k&ouml;nnen nun Ihr aktualisiertes <a href=\"../index.php\">Forum</a> oder das <a href=\"../{1}/index.php\">Admin-CP</a> aufrufen.</p>";
$l['upgrade_removedir'] = 'Bitte l&ouml;schen Sie den Ordner \"install\", bevor Sie Ihr Forum betreten.';
$l['upgrade_congrats'] = "<p>Herzlichen Gl&uuml;ckwunsch! Ihr Forum wurde erfolgreich auf MyBB {1} aktualisiert.</p>{2}<p><strong>Wie geht es weiter?</strong></p><ul><li>Benutzen Sie das Tool im Admin-CP, um eigene Templates zu finden, die w&auml;hrend des Upgrades aktualisiert wurden. Sie k&ouml;nnen diese entsprechend anpassen oder zur&uuml;cksetzen.</li><li>Stellen Sie sicher, dass das Forum wie erwartet funktioniert.</li></ul>";
$l['upgrade_template_reversion'] = "Warnung: Templates werden zur&uuml;ckgesetzt";
$l['upgrade_template_reversion_success'] = "<p>Alle erforderlichen &Auml;nderungen in der Datenbank wurden erfolgreich abgeschlossen.</p><p>Das Upgrade wird alle vorhandenen Templates zur&uuml;cksetzen und aktualisieren. Bitte machen Sie eine Sicherung eigener Templates, bevor Sie fortfahren.";

/* Error messages */
$l['locked'] = 'Die Installation ist zur Zeit gesperrt. Bitte entfernen Sie die Datei \'lock\' aus dem Installationsverzeichnis, um fortfahren zu k&ouml;nnen.';
?>