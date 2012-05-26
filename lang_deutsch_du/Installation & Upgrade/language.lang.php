<?php
#########################################################
# Deutsches Sprachpaket (Informell)                     #
# Version x.x.x                                         #
# Datum: xx.xx.xxxx                                     #
# MyBB-Version x.x.x                                    #
# Autor: MyBBoard.de | Webseite: http://www.mybboard.de #
# (c) 2005-2012 MyBBoard.de | Alle Rechte vorbehalten!  #
#                                                       #
# Die Lizenz/Nutzungsbedingungen finden Sie in der      #
# beiliegenden Readme.                                  #
#########################################################

$l['none'] = 'Kein';
$l['not_installed'] = 'Nicht installiert';
$l['installed'] = 'Installiert';
$l['not_writable'] = 'Nicht beschreibbar';
$l['writable'] = 'Beschreibbar';
$l['done'] = 'Fertig';
$l['next'] = 'Weiter';
$l['error'] = 'Fehler';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'Erneut prüfen';

$l['title'] = "MyBB Installationsroutine";
$l['welcome'] = 'Willkommen';
$l['license_agreement'] = 'Lizenzvereinbarung';
$l['req_check'] = 'Überprüfung der Voraussetzungen';
$l['db_config'] = 'Konfiguration der Datenbank';
$l['table_creation'] = 'Tabellenerstellung';
$l['data_insertion'] = 'Einfügen der Daten';
$l['theme_install'] = 'Einfügen des Themes';
$l['board_config'] = 'Konfiguration des Forums';
$l['admin_user'] = 'Administrator';
$l['finish_setup'] = 'Installation beenden';

$l['table_population'] = 'Einfügen der Daten';
$l['theme_installation'] = 'Einfügen des Themes';
$l['create_admin'] = 'Administrator-Account erstellen';

$l['already_installed'] = "MyBB ist bereits installiert";
$l['mybb_already_installed'] = "<p>Willkommen bei der Installationsroutine für MyBB {1}. MyBB hat festgestellt, dass es bereits in diesem Ordner eingerichtet wurde.</p>
<p>Bitte wähle eine passende Aktion:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Aktualisiere deine aktuelle Version auf MyBB {1} <span style=\"font-size: 80%; color: maroon;\">(Empfohlen)</span></h3>
	<p>Über diese Option aktualisierst du dein MyBB auf MyBB {1}.</p>
	<p>Du solltest diese Option wählen, wenn du die Themen, Beiträge und alle anderen Informationen behalten möchtest.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aktualisiere auf MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Installiere eine neue Kopie des MyBB</h3>
	<p>Diese Option <span style=\"color: red;\">löscht ein bereits bestehendes Forum</span> und installiert eine neue Kopie des MyBB.</p>
	<p>Du solltest diese Option wählen, wenn du dein Forum löschen und neu starten willst.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Bist du sicher, dass du eine neue Kopie des MyBB installieren willst?\\n\\nDabei wird dein vorhandenes Forum gelöscht. DIESER PROZESS KANN NICHT RÜCKGÄNGIG GEMACHT WERDEN.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Installiere MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB hat festgestellt, dass es vom  \"Upload\" Ordner aus ausgeführt wird.</h3>
	<p><p>Auch wenn kein Fehler vorliegt wird empfohlen, dass die Dateien aus dem Ordner \"Upload\" auf den Server übertragen werden und nicht der Ordner selbst.<br /><br />Für mehr Informationen siehe auch <a href=\"http://www.mybboard.de/doku/installationaktualisierung/installation.html\" target=\"_blank\">Installation</a>.</p>
</div>";

$l['welcome_step'] = '<p>Willkommen zur Installationsroutine für MyBB {1}. Diese Routine installiert und konfiguriert eine Kopie des MyBB auf deinem Server.</p>
<p>Nachdem du bereits die Dateien auf den Server übertragen hast, müssen die Datenbanktabellen erstellt und die Daten eingefügt werden. Unten findest du eine Auflistung der Schritte, die im Folgenden durchlaufen werden.</p>
<ul>
	<li>Überprüfung der Systemvoraussetzungen</li>
	<li>Konfiguration der Datenbank-Engine</li>
	<li>Erstellung der Datenbanktabellen</li>
	<li>Einfügen der Standard-Daten</li>
	<li>Einfügen der Standard-Templates und des -Themes</li>
	<li>Erstellung eines Administrator-Accounts zur Verwaltung des Forums</li>
	<li>Allgemeine Foreneinstellungen</li>
</ul>
<p>Nachdem ein Schritt erfolgreich abgeschlossen wurde, klicke auf "Weiter", um die Installation fortzusetzen.</p>
<p>Klicke auf "Weiter", um die Lizenzvereinbarung anzeigen zu lassen.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Anonyme Statistik über Serverspezifikationen an die MyBB Group schicken</label> (<a href="http://wiki.mybboard.net/index.php/Anonymous_Statistics" style="color: #555;" target="_blank"><small>Welche Informationen werden gesendet?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Indem du auf "Weiter" klickst, stimmst du der oben stehenden Lizenzvereinbarung zu.</strong></p>';


$l['req_step_top'] = '<p>Bevor du MyBB installieren kannst, wird überprüft, ob die minimalen Systemvoraussetzungen gegeben sind.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Überprüfung der Systemvoraussetzungen</div>
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
			<td class="first">Unterstützte DB-Erweiterungen:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Unterstützte Übersetzungs-Erweiterungen:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
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
			<td class="first">Ordner für Cache beschreibbar:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Ordner für Uploads beschreibbar:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Ordner für Avatare beschreibbar:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Herzlichen Glückwunsch, alle Voraussetzungen für den Betrieb des Forums sind erfüllt.</strong></p>
<p>Klicke auf "Weiter", um die Installation fortzusetzen.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB benötigt PHP 5.1.0 oder höher. Du hast zur Zeit {1} installiert.';
$l['req_step_error_dboptions'] = 'MyBB benötigt mindestens eine installierte kompatible Datenbankerweiterung. Der Server gab zurück, dass keine zur Verfügung steht.';
$l['req_step_error_xmlsupport'] = 'MyBB benötigt PHP mit der Unterstützung für die Verarbeitung von XML. Bitte gehe auf <a href="http://www.php.net/xml" target="_blank">PHP.net</a> für weitere Informationen.';
$l['req_step_error_configdefaultfile'] = 'Die Konfigurationsdatei (inc/config.default.php) konnte nicht umbenannt werden. Bitte benenne die <u>config.default.php</u> manuell um in <u>config.php</u>, damit sie beschrieben werden kann. Bei Problemen kontaktiere bitte den <a href="http://www.mybboard.de/support.html" targert="_blank">MyBB Support</a>.';
$l['req_step_error_configfile'] = 'Die Konfigurationsdatei (inc/config.php) ist nicht beschreibbar. Bitte korrigiere die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_settingsfile'] = 'Die Einstellungsdatei (inc/settings.php) ist nicht beschreibbar. Bitte korrigiere die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_cachedir'] = 'Der Ordner für den Zwischenspeicher (cache/) ist nicht beschreibbar. Bitte korrigiere  die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_uploaddir'] = 'Der Ordner für Uploads (uploads/) ist nicht beschreibbar. Bitte korrigiere die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_avatardir'] = 'Der Ordner für Avatare (uploads/avatars/) ist nicht beschreibbar. Bitte korrigiere die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_cssddir'] = 'Der Ordner für CSS (css/) ist nicht beschreibbar. Bitte korrigiere die Berechtigungen (<a href="http://www.mybboard.de/doku/installationaktualisierung/installation.html" target="_blank">Dateirechte </a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Fehler</h3>
<p>Bei der Überprüfung der Voraussetzungen des MyBB wurden die unten aufgeführten Probleme festgestellt. Die Installation kann nicht fortgesetzt werden, da die minimalen Voraussetzungen nicht erfüllt werden. Bitte behebe folgende Probleme und versuche es erneut:</p>
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
<p>Sind alle Angaben korrekt, klicke auf "Weiter".</p>';

$l['database_settings'] = "Datenbankeinstellungen";
$l['database_path'] = "Datenbank-Pfad:";
$l['database_host'] = "Datenbank-Host:";
$l['database_user'] = "Datenbank-Benutzername:";
$l['database_pass'] = "Datenbank-Passwort:";
$l['database_name'] = "Datenbank-Name:";
$l['table_settings'] = "Tabelleneinstellungen";
$l['table_prefix'] = "Tabellenpräfix:";
$l['table_encoding'] = "Tabellenkodierung:";

$l['db_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den Daten, die du eingegeben hast:</p>
{1}
<p>Sind die oben aufgeführten Probleme behoben, kannst du mit der Installation fortfahren.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Du hast eine ungültige Datenbank-Engine gewählt. Bitte wähle eine Engine aus der folgenden Liste.';
$l['db_step_error_noconnect'] = 'Die Verbindung zum Datenbankserver unter \'{1}\' konnte mit dem angegebenen Benutzernamen und Passwort nicht hergestellt werden. Sind Host und Benutzerdaten korrekt?';
$l['db_step_error_nodbname'] = 'Konnte die Datenbank \'{1}\' nicht auswählen. Existiert diese Datenbank und hat der angegebene Benutzer mit dem angegebenen Passwort Zugang zu dieser Datenbank?';
$l['db_step_error_missingencoding'] = 'Du hast keine Tabellenkodierung ausgewählt. Bitte wähle eine Kodierung (wähle "UTF-8 Unicode", wenn du dir nicht sicher bist).';
$l['db_step_error_sqlite_invalid_dbname'] = 'Du kannst keine relativen URLs für die SQLite-Datenbank verwenden. Bitte verwende einen kompletten Dateisystempfad (z.B.: /home/user/database.db) für deine SQLite-Datenbank.';
$l['db_step_error_invalid_tableprefix'] = 'Du kannst nur Unterstriche (_) und alphanumerische Zeichen als Tabellenpräfix verwenden. Bitte gebe ein gültiges Tabellenpräfix ein.';
$l['db_step_error_tableprefix_too_long'] = 'Du kannst nur ein Tabellenpräfix mit 40 Zeichen oder weniger verwenden. Bitte gebe ein kürzeres Tabellenpräfix ein.';

$l['tablecreate_step_connected'] = '<p>Die Verbindung zur angegebenen Datenbank konnte mit den angegebenen Benutzerdaten erfolgreich hergestellt werden.</p>
<p>Datenbank-Engine: {1} {2}</p>
<p>Im Folgenden werden die Datenbanktabellen erstellt.</p>';
$l['tablecreate_step_created'] = 'Erstelle Tabelle {1}...';
$l['tablecreate_step_done'] = '<p>Alle Tabellen wurden erfolgreich erstellt. Klicke auf "Weiter", um die Standarddaten einzufügen.</p>';

$l['populate_step_insert'] = '<p>Nachdem die Datenbanktabellen erstellt wurden, können jetzt die Daten eingefügt werden.</p>';
$l['populate_step_inserted'] = '<p>Die Standarddaten wurden erfolgreich in die Datenbank eingefügt. Klicke auf "Weiter", um die Standard-Templates und das -Theme einzufügen.</p>';


$l['theme_step_importing'] = '<p>Lade und importiere Datei mit Standard-Theme und -Templates...</p>';
$l['theme_step_imported'] = '<p>Das Standard-Theme und die Templates wurden erfolgreich eingefügt. Klicke auf "Weiter", um die Basiseinstellungen des Forums vorzunehmen.</p>';


$l['config_step_table'] = '<p>Du musst nun die Basiseinstellungen deines Forums vornehmen, wie z.B. den Namen des Forums, die URL, die Details zu deiner Webseite und Cookie-Domain und -Pfad. Diese Einstellungen können später einfach im Admin Control Panel geändert werden.</p>
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
					<td class="first"><label for="bburl">URL zum Forum (ohne abschließenden Slash):</label></td>
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

	<p>Wenn Du alle Daten eingegeben hast, klicke auf "Weiter".</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den angegebenen Daten:</p>
{1}
<p>Sind alle Probleme behoben, kannst du mit der Installation fortfahren.</p>
</div>';
$l['config_step_error_url'] = 'Du hast die URL zum Forum nicht angegeben.';
$l['config_step_error_name'] = 'Du hast keinen Namen für dein Forum angegeben.';


$l['admin_step_setupsettings'] = '<p>Einfügen der Basiseinstellungen...</p>';
$l['admin_step_insertesettings'] = '<p>{1} Einstellungen in {2} Gruppen eingefügt.</p>
<p>Aktualisiere Einstellungen mit den eingegebenen Daten.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} geplante Aufgaben eingefügt.</p>';
$l['admin_step_insertedviews'] = '<p>{1} Admin-Ansichten eingefügt.</p>';
$l['admin_step_createadmin'] ='<p>Du musst erst einen Benutzer-Account erstellen, über den du deine Kopie des MyBB verwalten kannst. Bitte gib unten die erforderlichen Daten ein, um den Account zu erstellen.</p>';
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

	<p>Hast du alle Angaben gemacht, klicke auf "Weiter".</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den gemachten Angaben:</p>
{1}
<p>Sind alle Probleme behoben, kannst du mit der Installation fortfahren.</p>
</div>';
$l['admin_step_error_nouser'] = 'Du hast keinen Benutzernamen für den Administrator-Account angegeben.';
$l['admin_step_error_nopassword'] = 'Du hast kein Passwort für den Administrator-Account angegeben.';
$l['admin_step_error_nomatch'] = 'Die eingegebenen Passwörter stimmen nicht überein.';
$l['admin_step_error_noemail'] = 'Du hast keine E-Mail-Adresse für den Administrator-Account angegeben.';

$l['done_step_usergroupsinserted'] = "<p>Benutzergruppen importieren...";
$l['done_step_admincreated'] = '<p>Erstelle Administrator-Account...';
$l['done_step_adminoptions'] = '<p>Erstelle Administrator-Rechte...';
$l['done_step_cachebuilding'] = '<p>Lese Daten in Cache ein...';
$l['done_step_success'] = '<p class="success">Deine Kopie des MyBB wurde erfolgreich installiert und konfiguriert.</p>
<p>Die MyBB Group bedankt sich für die Unterstützung durch die Installation der Software und wir hoffen, dich in der Community begrüßen zu können, wenn du Fragen hast oder einfach Teil der MyBB Community werden möchtest.</p>';
$l['done_step_locked'] = '<p>Die Installation ist gesperrt. Bitte entferne die Datei \'lock\' aus dem Installationsverzeichnis, um die Installationsroutine erneut ausführen zu können.</p><p>Du kannst nun ins <a href="../index.php">Forum</a> oder ins <a href="../admin/index.php">Admin Control Panel</a> gehen.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">Bitte entferne das Installationsverzeichnis vom Server, bevor du fortfährst.</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>Melde dich für unseren Newsletter an!</strong></p><p>Wir verschicken jedesmal einen Newsletter, wenn eine neue Version (neue Features, Sicherheitsupdate) des MyBB erschienen ist.</p><p>Dadurch wirst du schnell informiert, so dass du immer auf dem neuesten Stand bist!</p><p><a href="http://www.mybboard.de/support/newsletter.html">Jetzt für den Newsletter anmelden!</a></p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Upgraderoutine";
$l['upgrade_welcome'] = "<p>Wilkommen zur Upgraderoutine für MyBB {1}.</p><p>Bitte vergewissere dich, welche Version des MyBB zur Zeit installiert ist, da du diese unten auswählen musst.</p><p><strong>Wir empfehlen dringend, vor dem Upgrade ein vollständiges Backup des Forums durchzuführen (Datenbank und Dateien)</strong>, so dass das Forum im Notfall wiederhergestellt werden kann.</p><p>Klicke bei jedem Schritt des Upgradeprozesses nur einmal auf den \"Weiter\"-Button. Je nach Größe des Forums können die einzelnen Schritte einige Zeit in Anspruch nehmen.</p><p>Sind alle Vorbereitungen getroffen, wähle deine installierte Version des MyBB und klicke auf \"Weiter\".</p>";
$l['upgrade_templates_reverted'] = 'Templates zurückgesetzt';
$l['upgrade_templates_reverted_success'] = "<p>Alle Templates wurden erfolgreich zurückgesetzt und aktualisiert. Bitte klicke auf \"Weiter\", um mit dem Upgrade fortzufahren.</p>";
$l['upgrade_settings_sync'] = 'Synchronisierung der Einstellungen';
$l['upgrade_settings_sync_success'] = "<p>Die Einstellungen wurden erfolgreich mit den aktuellen Einstellungen synchronisiert.</p><p>{1} neue Einstellungen wurden in {2} Einstellungsgruppen eingefügt.</p><p>Bitte klicke auf \"Weiter\".</p>";
$l['upgrade_datacache_building'] = 'Erstellung der Caches';
$l['upgrade_building_datacache'] = '<p>Erstelle Caches...';
$l['upgrade_continue'] = 'Bitte klicke auf "Weiter", um fortzufahren.';
$l['upgrade_locked'] = "<p>Die Installations-/Upgradeskripte sind geschützt. Um die Skripte aufrufen zu können, musst du die Datei \"lock\" aus dem Ordner \"install\" löschen.</p><p>Du kannst nun dein aktualisiertes <a href=\"../index.php\">Forum</a> oder das <a href=\"../{1}/index.php\">Admin-CP</a> aufrufen.</p>";
$l['upgrade_removedir'] = 'Bitte lösche den Ordner \"install\", bevor du dein Forum betrittst.';
$l['upgrade_congrats'] = "<p>Herzlichen Glückwunsch! Dein Forum wurde erfolgreich auf MyBB {1} aktualisiert.</p>{2}<p><strong>Wie geht es weiter?</strong></p><ul><li>Benutze das Tool im Admin-CP, um eigene Templates zu finden, die während des Upgrades aktualisiert wurden. Du kannst diese entsprechend anpassen oder zurücksetzen.</li><li>Stelle sicher, dass das Forum wie erwartet funktioniert.</li></ul>";
$l['upgrade_template_reversion'] = "Warnung: Templates werden zurückgesetzt";
$l['upgrade_template_reversion_success'] = "<p>Alle erforderlichen Änderungen in der Datenbank wurden erfolgreich abgeschlossen.</p><p>Das Upgrade wird alle vorhandenen Templates zurücksetzen und aktualisieren. Bitte mache eine Sicherung eigener Templates, bevor du fortfährst.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Anonyme Statistik über Serverspezifikationen an die MyBB Group schicken</label> (<a href=\"http://wiki.mybboard.net/index.php/Anonymous_Statistics\" style=\"color: #555;\" target=\"_blank\"><small>Welche Informationen werden gesendet?</small></a>)</p>";

/* Error messages */
$l['locked'] = 'Die Installation ist zur Zeit gesperrt. Bitte entferne die Datei \'lock\' aus dem Installationsverzeichnis, um fortfahren zu können.';
?>