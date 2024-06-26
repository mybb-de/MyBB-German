<?php
/**
 * German language pack for MyBB 1.8 (formal)
 * Deutsches Sprachpaket für MyBB 1.8 "formell" (Sie)
 * (c) 2005-2014 MyBBoard.de
 * 
 * Author/Autor: http://www.mybboard.de/
 * License/Lizenz: GNU Lesser General Public License, Version 3
 */

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
$l['upgrade_complete'] = 'Aktualisierung abgeschlossen';

$l['table_population'] = 'Einfügen der Daten';
$l['theme_installation'] = 'Einfügen des Themes';
$l['create_admin'] = 'Administrator-Account erstellen';

$l['already_installed'] = "MyBB ist bereits installiert";
$l['mybb_already_installed'] = "<p>Willkommen bei der Installationsroutine für MyBB {1}. MyBB hat festgestellt, dass es bereits in diesem Ordner eingerichtet wurde.</p>
<p>Bitte wählen Sie eine passende Aktion:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Aktualisieren Sie Ihre aktuelle Version auf MyBB {1} <span style=\"font-size: 80%; color: maroon;\">(Empfohlen)</span></h3>
	<p>Über diese Option aktualisieren Sie Ihr MyBB auf MyBB {1}.</p>
	<p>Sie sollten diese Option wählen, wenn Sie die Themen, Beiträge und alle anderen Informationen behalten möchten.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Aktualisiere auf MyBB {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Installiere eine neue Kopie des MyBB</h3>
	<p>Diese Option <span style=\"color: red;\">löscht ein bereits bestehendes Forum</span> und installiert eine neue Kopie des MyBB.</p>
	<p>Sie sollten diese Option wählen, wenn Sie Ihre Forum löschen und neu starten wollen.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Sind Sie sicher, dass Sie eine neue Kopie des MyBB installieren wollen?\\n\\nDabei wird Ihr vorhandenes Forum gelöscht. DIESER PROZESS KANN NICHT RÜCKGÄNGIG GEMACHT WERDEN.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Installiere MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB hat festgestellt, dass es vom \"Upload\" Ordner aus ausgeführt wird.</h3>
	<p>Auch wenn kein Fehler vorliegt wird empfohlen, dass die Dateien aus dem Ordner \"Upload\" auf den Server übertragen werden und nicht der Ordner selbst.<br /><br />Für mehr Informationen siehe auch <a href=\"https://www.mybb.de/doku/installationaktualisierung/installation/\" target=\"_blank\" rel=\"noopener\">Installation</a>.</p>
</div>";

$l['welcome_step'] = '<p>Willkommen zur Installationsroutine für MyBB {1}. Diese Routine installiert und konfiguriert eine Kopie des MyBB auf Ihrem Server.</p>
<p>Nachdem Sie bereits die Dateien auf den Server übertragen haben, müssen die Datenbanktabellen erstellt und die Daten eingefügt werden. Unten finden Sie eine Auflistung der Schritte, die im Folgenden durchlaufen werden.</p>
<ul>
	<li>Überprüfung der Systemvoraussetzungen</li>
	<li>Konfiguration der Datenbank-Engine</li>
	<li>Erstellung der Datenbanktabellen</li>
	<li>Einfügen der Standard-Daten</li>
	<li>Einfügen der Standard-Templates und des -Themes</li>
	<li>Erstellung eines Administrator-Accounts zur Verwaltung des Forums</li>
	<li>Allgemeine Foreneinstellungen</li>
</ul>
<p>Nachdem ein Schritt erfolgreich abgeschlossen wurde, klicken Sie auf "Weiter", um die Installation fortzusetzen.</p>
<p>Klicken Sie auf "Weiter", um die Lizenzvereinbarung anzeigen zu lassen.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> Anonyme Statistik über Serverspezifikationen an die MyBB Group schicken</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank" rel=\"noopener\"><small>Welche Informationen werden gesendet?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Indem Sie auf "Weiter" klicken, stimmen Sie der oben stehenden Lizenzvereinbarung zu.</strong></p>';


$l['req_step_top'] = '<p>Bevor Sie MyBB installieren können, wird überprüft, ob die minimalen Systemvoraussetzungen gegeben sind.</p>';
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
<p>Klicken Sie auf "Weiter", um die Installation fortzusetzen.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB benötigt PHP 5.2.0 oder höher. Sie haben zur Zeit {1} installiert.';
$l['req_step_error_dboptions'] = 'MyBB benötigt mindestens eine installierte kompatible Datenbankerweiterung. Der Server gab zurück, dass keine zur Verfügung steht.';
$l['req_step_error_xmlsupport'] = 'MyBB benötigt PHP mit der Unterstützung für die Verarbeitung von XML. Bitte gehen Sie auf <a href="http://www.php.net/xml" target="_blank" rel=\"noopener\">PHP.net</a> fü;r weitere Informationen.';
$l['req_step_error_configdefaultfile'] = 'Die Konfigurationsdatei (inc/config.default.php) konnte nicht umbenannt werden. Bitte benennen Sie die <u>config.default.php</u> manuell um in <u>config.php</u>, damit sie beschrieben werden kann. Bei Problemen kontaktieren Sie bitte den <a href="https://www.mybb.de/support/" targert="_blank" rel=\"noopener\">MyBB Support</a>.';
$l['req_step_error_configfile'] = 'Die Konfigurationsdatei (inc/config.php) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_settingsfile'] = 'Die Einstellungsdatei (inc/settings.php) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass die Datei beschrieben werden kann.';
$l['req_step_error_cachedir'] = 'Der Ordner für den Zwischenspeicher (cache/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_uploaddir'] = 'Der Ordner für Uploads (uploads/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_avatardir'] = 'Der Ordner für Avatare (uploads/avatars/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_cssddir'] = 'Der Ordner für CSS (css/) ist nicht beschreibbar. Bitte korrigieren Sie die Berechtigungen (<a href="https://www.mybb.de/doku/installationaktualisierung/installation/" target="_blank" rel=\"noopener\">Dateirechte</a>), so dass der Ordner beschrieben werden kann.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Fehler</h3>
<p>Bei der Überprüfung der Voraussetzungen des MyBB wurden die unten aufgeführten Probleme festgestellt. Die Installation kann nicht fortgesetzt werden, da die minimalen Voraussetzungen nicht erfüllt werden. Bitte beheben Sie folgende Probleme und versuchen es erneut:</p>
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
$l['table_prefix'] = "Tabellenpräfix:";
$l['table_encoding'] = "Tabellenkodierung:";

$l['db_step_error_config'] = '<div class="error">
<h3>Fehler</h3>
<p>Es gibt ein oder mehrere Probleme mit den Daten, die Sie eingegeben haben:</p>
{1}
<p>Sind die oben aufgeführten Probleme behoben, können Sie mit der Installation fortfahren.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Sie haben eine ungültige Datenbank-Engine gewählt. Bitte wähle Sie eine Engine aus der folgenden Liste.';
$l['db_step_error_noconnect'] = 'Die Verbindung zum Datenbankserver unter \'{1}\' konnte mit dem angegebenen Benutzernamen und Passwort nicht hergestellt werden. Sind Host und Benutzerdaten korrekt?';
$l['db_step_error_nodbname'] = 'Konnte die Datenbank \'{1}\' nicht auswählen. Existiert diese Datenbank und hat der angegebene Benutzer mit dem angegebenen Passwort Zugang zu dieser Datenbank?';
$l['db_step_error_missingencoding'] = 'Sie haben keine Tabellenkodierung ausgewählt. Bitte wählen Sie eine Kodierung (wählen Sie "UTF-8 Unicode", wenn Sie sich nicht sicher sind).';
$l['db_step_error_sqlite_invalid_dbname'] = 'Sie können keine relativen URLs für die SQLite-Datenbank verwenden. Bitte verwenden Sie einen kompletten Dateisystempfad (z.B.: /home/user/database.db) für Ihre SQLite-Datenbank.';
$l['db_step_error_invalid_tableprefix'] = 'Sie können nur Unterstriche (_) und alphanumerische Zeichen als Tabellenpräfix verwenden. Bitte geben Sie ein gültiges Tabellenpräfix ein.';
$l['db_step_error_tableprefix_too_long'] = 'Sie können nur ein Tabellenpräfix mit 40 Zeichen oder weniger verwenden. Bitte geben Sie ein kürzeres Tabellenpräfix ein.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' benötigt MySQL 5.5.3 oder höher. Bitte wählen Sie eine Kodierung, die mit der eingesetzten MySQL-Version kompatibel ist.';

$l['tablecreate_step_connected'] = '<p>Die Verbindung zur angegebenen Datenbank konnte mit den angegebenen Benutzerdaten erfolgreich hergestellt werden.</p>
<p>Datenbank-Engine: {1} {2}</p>
<p>Im Folgenden werden die Datenbanktabellen erstellt.</p>';
$l['tablecreate_step_created'] = 'Erstelle Tabelle {1}...';
$l['tablecreate_step_done'] = '<p>Alle Tabellen wurden erfolgreich erstellt. Klicken Sie auf "Weiter", um die Standarddaten einzufügen.</p>';

$l['populate_step_insert'] = '<p>Nachdem die Datenbanktabellen erstellt wurden, können jetzt die Daten eingefügt werden.</p>';
$l['populate_step_inserted'] = '<p>Die Standarddaten wurden erfolgreich in die Datenbank eingefügt. Klicken Sie auf "Weiter", um die Standard-Templates und das -Theme einzufügen.</p>';


$l['theme_step_importing'] = '<p>Lade und importiere Datei mit Standard-Theme und -Templates...</p>';
$l['theme_step_imported'] = '<p>Das Standard-Theme und die Templates wurden erfolgreich eingefügt. Klicken Sie auf "Weiter", um die Basiseinstellungen des Forums vorzunehmen.</p>';


$l['config_step_table'] = '<p>Sie müssen nun die Basiseinstellungen Ihres Forums vornehmen, wie z.B. den Namen des Forums, die URL, die Details zu Ihrer Webseite und Cookie-Domain und -Pfad. Diese Einstellungen können später einfach im Admin Control Panel geändert werden.</p>
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
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnten die Links innerhalb Ihres Forums defekt sein.\')" onchange="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnten die Links innerhalb Ihres Forums defekt sein.\')" /></td>
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
					<th colspan="2" class="first last">Cookie-Einstellungen <a title="Was ist das?" target="_blank" href="https://www.mybb.de/doku/haeufig-gestellte-fragen/warum-kann-ich-mich-nicht-im-forum-anmelden/" rel=\"noopener\">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie-Domain:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnte es beim An- und Abmelden in Ihrem Forum zu Probleme führen.\')" onchange="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnte es beim An- und Abmelden in Ihrem Forum zu Probleme führen.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Cookie-Pfad:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnte es beim An- und Abmelden in Ihrem Forum zu Probleme führen.\')" onchange="warnUser(this, \'Diese Einstellung wurde automatisch erkannt. Ändern Sie sie nicht, wenn Sie sich unsicher sind, ansonsten könnte es beim An- und Abmelden in Ihrem Forum zu Probleme führen.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Kontakt-Details</th>
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
<p>Sind alle Probleme behoben, können Sie mit der Installation fortfahren.</p>
</div>';
$l['config_step_error_url'] = 'Sie haben die URL zum Forum nicht angegeben.';
$l['config_step_error_name'] = 'Sie haben keinen Namen für Ihr Forum angegeben.';
$l['config_step_revert'] = 'Klicken Sie hier um diese Einstellung auf ihren ursprünglichen Wert zurückzusetzen.';

$l['admin_step_setupsettings'] = '<p>Einfügen der Basiseinstellungen...</p>';
$l['admin_step_insertesettings'] = '<p>{1} Einstellungen in {2} Gruppen eingefügt.</p>
<p>Aktualisiere Einstellungen mit den eingegebenen Daten.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} geplante Aufgaben eingefügt.</p>';
$l['admin_step_insertedviews'] = '<p>{1} Admin-Ansichten eingefügt.</p>';
$l['admin_step_createadmin'] ='<p>Sie müssen zuerst einen Benutzer-Account erstellen, über den Sie Ihre Kopie des MyBB verwalten können. Bitte geben Sie unten die erforderlichen Daten ein, um den Account zu erstellen.</p>';
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
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Passwort:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Passwort erneut eingeben:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()" /></td>
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
<p>Sind alle Probleme behoben, können Sie mit der Installation fortfahren.</p>
</div>';
$l['admin_step_error_nouser'] = 'Sie haben keinen Benutzernamen für den Administrator-Account angegeben.';
$l['admin_step_error_nopassword'] = 'Sie haben kein Passwort für den Administrator-Account angegeben.';
$l['admin_step_error_nomatch'] = 'Die eingegebenen Passwörter stimmen nicht überein.';
$l['admin_step_error_noemail'] = 'Sie haben keine E-Mail-Adresse für den Administrator-Account angegeben.';
$l['admin_step_nomatch'] = 'Das erneut eingegebene Passwort stimmt nicht mit dem Passwort überein. Bitte überprüfen Sie dieses, bevor Sie fortfahren.';

$l['done_step_usergroupsinserted'] = "<p>Benutzergruppen importieren...";
$l['done_step_admincreated'] = '<p>Erstelle Administrator-Account...';
$l['done_step_adminoptions'] = '<p>Erstelle Administrator-Rechte...';
$l['done_step_cachebuilding'] = '<p>Lese Daten in Cache ein...';
$l['done_step_success'] = '<p class="success">Ihre Kopie des MyBB wurde erfolgreich installiert und konfiguriert.</p>
<p>Die MyBB Group bedankt sich für die Unterstützung durch die Installation der Software und wir hoffen, Sie in der Community begrüßen zu können, wenn Sie Fragen haben oder einfach Teil der MyBB Community werden möchten.</p>';
$l['done_step_locked'] = '<p>Die Installation ist gesperrt. Bitte entfernen Sie die Datei \'lock\' aus dem Installationsverzeichnis, um die Installationsroutine erneut ausführen zu können.</p><p>Sie können nun ins <a href="../index.php">Forum</a> oder ins <a href="../admin/index.php">Admin Control Panel</a> gehen.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">Bitte entfernen Sie das Installationsverzeichnis vom Server, bevor Sie fortfahren.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Von einer anderen Forensoftware wechseln?</strong></p><p>MyBB bietet ein Merge System zum einfachen Zusammenfügen mehrerer Foren für verschiedene beliebte Foren-Systeme an, das einen leichten Wechsel zum MyBB erlaubt. Falls Sie gerne zum MyBB wechseln möchten, sind Sie auf dem richtigen Weg. Erfahren Sie mehr über das <a target="_blank" href="https://www.mybb.de/doku/merge-system/" rel=\"noopener\">Merge System</a>.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "Upgraderoutine";
$l['upgrade_not_needed'] = '<p>Die Upgraderoutine muss für diese Version nicht ausgeführt werden.</p><p>Falls Sie dies für einen Fehler halten, können Sie <a href="upgrade.php?force=1">das Upgrade erzwingen</a>. Klicken Sie ansonsten auf \"Weiter\" um die Routine zu sperren.</p>';
$l['upgrade_welcome'] = "<p>Willkommen zur Upgraderoutine für MyBB {1}.</p><p>Bitte vergewissern Sie sich, welche Version des MyBB zur Zeit installiert ist, da Sie diese unten auswählen müssen.</p><p><strong>Wir empfehlen dringend, vor dem Upgrade ein vollständiges Backup des Forums durchzuführen (Datenbank und Dateien)</strong>, so dass das Forum im Notfall wiederhergestellt werden kann.</p><p>Klicken Sie bei jedem Schritt des Upgradeprozesses nur einmal auf den \"Weiter\"-Button. Je nach Größe des Forums können die einzelnen Schritte einige Zeit in Anspruch nehmen.</p><p>Sind alle Vorbereitungen getroffen, wählen Sie Ihre installierte Version des MyBB und klicken Sie auf \"Weiter\".</p>";
$l['upgrade_templates_reverted'] = 'Templates zurückgesetzt';
$l['upgrade_templates_reverted_success'] = "<p>Alle Templates wurden erfolgreich zurückgesetzt und aktualisiert. Bitte klicken Sie auf \"Weiter\", um mit dem Upgrade fortzufahren.</p>";
$l['upgrade_settings_sync'] = 'Synchronisierung der Einstellungen';
$l['upgrade_settings_sync_success'] = "<p>Die Einstellungen wurden erfolgreich mit den aktuellen Einstellungen synchronisiert.</p><p>{1} neue Einstellungen wurden in {2} Einstellungsgruppen eingefügt.</p><p>Bitte klicken Sie auf \"Weiter\".</p>";
$l['upgrade_datacache_building'] = 'Erstellung der Caches';
$l['upgrade_building_datacache'] = '<p>Erstelle Caches...';
$l['upgrade_continue'] = 'Bitte klicken Sie auf "Weiter", um fortzufahren.';
$l['upgrade_locked'] = "<p>Die Installations-/Upgradeskripte sind geschützt. Um die Skripte aufrufen zu können, müssen Sie die Datei \"lock\" aus dem Ordner \"install\" löschen.</p><p>Sie können nun Ihr aktualisiertes <a href=\"../index.php\">Forum</a> oder das <a href=\"../{1}/index.php\">Admin-CP</a> aufrufen.</p>";
$l['upgrade_removedir'] = 'Bitte löschen Sie den Ordner \"install\", bevor Sie Ihr Forum betreten.';
$l['upgrade_congrats'] = "<p>Herzlichen Glückwunsch! Ihr Forum wurde erfolgreich auf MyBB {1} aktualisiert.</p>{2}<p><strong>Wie geht es weiter?</strong></p><ul><li>Benutzen Sie das Tool im Admin-CP, um eigene Templates zu finden, die während des Upgrades aktualisiert wurden. Sie können diese entsprechend anpassen oder zurücksetzen.</li><li>Stellen Sie sicher, dass das Forum wie erwartet funktioniert.</li></ul>";
$l['upgrade_template_reversion'] = "Warnung: Templates werden zurückgesetzt";
$l['upgrade_template_reversion_success'] = "<p>Alle erforderlichen Änderungen in der Datenbank wurden erfolgreich abgeschlossen.</p><p>Das Upgrade wird alle vorhandenen Templates zurücksetzen und aktualisieren. Bitte machen Sie eine Sicherung eigener Templates, bevor Sie fortfahren.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> Anonyme Statistik über Serverspezifikationen an die MyBB Group schicken</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\" rel=\"noopener\"><small>Welche Informationen werden gesendet?</small></a>)</p>";

$l['please_login'] = "Bitte melden Sie sich an";
$l['login'] = "Anmeldung";
$l['login_desc'] = "Bitte geben Sie Ihren Benutzername und Ihr Passwort ein um die Upgraderoutine zu starten. Sie müssen ein Administrator des Forums sein um das Upgrade zu durchführen zu können.";
$l['login_username'] = "Benutzername";
$l['login_password'] = "Passwort";
$l['login_password_desc'] = "Bitte beachten Sie Groß- und Kleinschreibung.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Warnung</h2><p>Diese MyBB-Version ist eine Entwicklerversion und ist nur für Tests gedacht.</p><p>Es gibt für diese Version keinen offiziellen Support außer für die Plugin- und Themeentwicklung. Eine Installation bzw. ein Upgrade geschieht auf eigene Gefahr.</p></div>";
$l['locked'] = 'Die Installation ist zur Zeit gesperrt. Bitte entfernen Sie die Datei \'lock\' aus dem Installationsverzeichnis, um fortfahren zu können.';
$l['no_permision'] = "Sie haben keine Berechtigung diesen Vorgang auszuführen. Sie benötigen Administrations-Rechte um das Upgrade durchzuführen.<br /><br />Falls Sie sich abmelden möchten, klicken Sie <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">hier</a>. Danach können Sie sich mit einem Administrator-Account anmelden.";
$l['no_theme_functions_file'] = "Es wurde keine Datei mit Theme-Funktionen gefunden. Bitte stellen Sie sicher, dass alle Dateien ordnungsgemäß hochgeladen wurden.";

$l['task_versioncheck_ran'] = "Der Versions-Check wurde erfolgreich ausgeführt.";
$l['task_versioncheck_ran_errors'] = "Es konnte keine Verbindung zum Versions-Check aufgebaut werden.";