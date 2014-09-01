<?php
/**
 * German language pack for MyBB 1.8 (formal)
 * Deutsches Sprachpaket für MyBB 1.8 "formell" (Sie)
 * (c) 2005-2014 MyBBoard.de
 * 
 * Author/Autor: http://www.mybboard.de/
 * License/Lizenz: GNU Lesser General Public License, Version 3
 */

$l['system_health'] = "Systemstatus";
$l['system_health_desc'] = "Hier können Sie Informationen zum Systemstatus anschauen.";
$l['utf8_conversion'] = "UTF-8 Konvertierung";
$l['utf8_conversion_desc'] = "Sie konvertieren gerade eine Tabelle zu UTF-8. Seien Sie vorsichtig, denn dieser Prozess kann je nach Größe der Datenbank und der Tabellen bis zu mehreren Stunden dauern. Wenn der Prozess fertig ist, werden Sie zur UTF-8 Konvertierungs-Hauptseite zurückgeleitet.";
$l['utf8_conversion_desc2'] = "Diese Funktion überprüft, ob alle Tabellen UTF-8-kodiert sind und erlaubt Ihnen sie zu konvertieren, wenn sie es nicht sind.";

$l['convert_all'] = "Konvertiere alle";
$l['converting_to_utf8'] = "MyBB konvertiert gerade die Tabelle \"{1}\" in die Kodierung UTF-8 von der Kodierung {2}.";
$l['convert_to_utf8'] = "Sie sind dabei die Tabelle \"{1}\" in die Kodierung UTF-8 von der Kodierung {2} zu konvertieren.";
$l['convert_all_to_utf'] = "Sie sind dabei ALLE Tabellen in die Kodierung UTF-8 von der Kodierung {1} zu konvertieren.";
$l['please_wait'] = "Bitte warten...";
$l['convert_all_to_utf8mb4'] = "Sie sind dabei ALLE Tabellen in die Kodierung 4-Byte UTF-8 Unicode von der Kodierung {1} zu konvertieren.";
$l['converting_to_utf8mb4'] = "MyBB konvertiert gerade die Tabelle \"{1}\" in die Kodierung 4-Byte UTF-8 Unicode von der Kodierung {2}.";
$l['converting_table'] = "Konvertiere Tabelle:";
$l['convert_tables'] = "Konvertiere alle Tabellen";
$l['convert_table'] = "Konvertiere Tabelle:";
$l['convert_database_table'] = "Konvertiere Datenbanktabelle";
$l['convert_database_tables'] = "Konvertiere alle Datenbanktabellen";
$l['table'] = "Tabelle";
$l['status_utf8'] = "UTF-8 Status";
$l['status_utf8mb4'] = "4-Byte UTF-8 Unterstützung<br />(benötigt MySQL 5.5.3 oder höher)";
$l['not_available'] = "Nicht verfügbar";
$l['all_tables'] = "Alle Tabellen";
$l['convert_now'] = "Jetzt konvertieren";
$l['totals'] = "Summen";
$l['attachments'] = "Attachments";
$l['total_database_size'] = "Datenbank-Größe gesamt";
$l['attachment_space_used'] = "Attachmentspeicherplatz gesamt";
$l['total_cache_size'] = "Cache-Größe gesamt";
$l['estimated_attachment_bandwidth_usage'] = "Geschätzte Bandbreiten-Benutzung durch Attachments";
$l['max_upload_post_size'] = "Max. Upload / POST Limit";
$l['average_attachment_size'] = "durchschnittliche Attachment-Größe";
$l['stats'] = "Statistiken";
$l['task'] = "Aufgaben";
$l['run_time'] = "Ausführungszeit";
$l['next_3_tasks'] = "Nächste 3 Aufgaben";
$l['no_tasks'] = "Es werden keine Aufgaben ausgeführt.";
$l['backup_time'] = "Sicherungszeit";
$l['no_backups'] = "Es wurden bisher keine Sicherungen gemacht.";
$l['existing_db_backups'] = "Existierende Datenbank-Sicherungen";
$l['writable'] = "Beschreibbar";
$l['not_writable'] = "Nicht Beschreibbar";
$l['please_chmod_777'] = "Bitte setzen Sie CHMOD auf 777.";
$l['chmod_info'] = "Bitte ändern Sie die CHMOD-Einstellungen der unten aufgeführten Dateien. Für mehr Informationen über CHMOD, siehe";
$l['file'] = "Datei";
$l['location'] = "Ort";
$l['settings_file'] = "Einstellungs-Datei";
$l['config_file'] = "Konfigurations-Datei";
$l['file_upload_dir'] = "Attachment-Upload-Verzeichnis";
$l['avatar_upload_dir'] = "Avatar-Upload-Verzeichnis";
$l['language_files'] = "Sprachdateien";
$l['backup_dir'] = "Sicherungs-Verzeichnis";
$l['cache_dir'] = "Cache-Verzeichnis";
$l['themes_dir'] = "Theme-Verzeichnis";
$l['chmod_files_and_dirs'] = "CHMOD Dateien und Verzeichnisse";

$l['notice_proccess_long_time'] = "Dieser Prozess kann je nach Größe der Datenbank und der Tabellen bis zu mehreren Stunden dauern. <strong>Es wird dringend empfohlen ein Datenbank-Backup anzulegen, da dieser Prozess nicht rückgängig gemacht werden kann.</strong>";
$l['notice_mb4_warning'] = "4-Byte UTF-8 Unterstützung benötigt MySQL 5.5.3 oder höher. Es wird nicht möglich sein die Datenbank auf einem MySQL-Server mit einer anderen Version einzuspielen.";

$l['check_templates'] = "Templates überprüfen";
$l['check_templates_desc'] = "Prüft alle installierten Template auf bekannte Sicherheitsprobleme.";
$l['check_templates_title'] = "Überprüfe Template-Sicherheit";
$l['check_templates_info'] = "Dieser Prozess wird Ihre Template auf Sicherheitsprobleme, die Ihr Forum und den Server betreffen könnten, untersuchen. Dies kann eine Weile dauern, wenn Sie viele Themes installiert haben.
<br /><br />Um den Prozess zu starten, drücken Sie 'Fortfahren'.";
$l['check_templates_info_desc'] = "Die folgenden Template könnten Sicherheitsproblemen enthalten. Bitte überprüfen Sie sie.";
$l['full_edit'] = "Zum Editor";

$l['error_chmod'] = "Die benötigten Dateien und Verzeichnisse haben nicht die richtigen CHMOD-Einstellungen.";
$l['error_invalid_table'] = "Die ausgewählte Tabelle existiert nicht.";
$l['error_db_encoding_not_set'] = "Ihre MyBB-Installation ist derzeit nicht zur Verwendung dieses Tools konfiguriert. Klicken Sie <a href=\"http://www.mybboard.de/doku/sonstiges/utf-8-konvertierung/\">hier</a> f&uuml;r weitere Informationen.";
$l['error_not_supported'] = "Ihre aktuelle Datenbank-Engine wird nicht von der UTF-8 Konvertierung unterstützt.";
$l['error_invalid_input'] = "Es ist ein Problem beim Überprüfen der Templates aufgetreten. Bitte probieren Sie es erneut oder kontaktieren Sie den MyBB-Support.";
$l['error_master_templates_altered'] = "Die Master-Templates wurden verändert. Bitte kontaktieren Sie den MyBB-Support um Unterstützung beim Ändern zu erhalten.";
$l['error_utf8mb4_version'] = "Ihre MySQL-Version unterstützt die 4-Byte UTF-8 Kodierung nicht.";

$l['warning_multiple_encodings'] = "Es wird empfohlen eine einheitliche Kodierung in der Datenbank zu verwenden. Andernfalls kann es zu unerwarteten Problemen oder Fehlern kommen.";
$l['warning_utf8mb4_config'] = "Um 4-Byte UTF-8 vollständig nutzen zu können muss in der Datei inc/config.php <i>\$config['database']['encoding'] = 'utf8';</i> zu <i>\$config['database']['encoding'] = 'utf8mb4';</i> geändert werden.";

$l['success_templates_checked'] = "Die Templates wurden erfolgreich überprüft - Keine Sicherheitsprobleme gefunden!";
$l['success_all_tables_already_converted'] = "Alle Tabellen wurden bereits konvertiert oder sind bereits im UTF-8 Format.";
$l['success_table_converted'] = "Die Tabelle \"{1}\" wurde erfolgreich zu UTF-8 konvertiert.";
$l['success_chmod'] = "Alle benötigten Dateien und Verzeichnisse haben die richtigen CHMOD-Einstellungen.";
