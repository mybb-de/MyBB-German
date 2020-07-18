<?php
/**
 * German language pack for MyBB 1.8 (formal)
 * Deutsches Sprachpaket für MyBB 1.8 "formell" (Sie)
 * (c) 2005-2014 MyBBoard.de
 * 
 * Author/Autor: http://www.mybboard.de/
 * License/Lizenz: GNU Lesser General Public License, Version 3
 */

// Tabs
$l['attachments'] = "Attachments";
$l['stats'] = "Statistiken";
$l['find_attachments'] = "Attachments suchen";
$l['find_attachments_desc'] = "Über die Suche können Sie bestimmte Attachments finden, die im Forum an Beiträge angefügt wurden. Benutzen Sie dazu das folgende Formular. Alle Felder sind optional und werden nur in die Suche einbezogen, wenn sie ausgefüllt wurden.";
$l['find_orphans'] = "Suche verwaiste Attachments";
$l['find_orphans_desc'] = "Verwaiste Attachments sind Dateien, die aus irgendeinem Grund auf dem Server oder in der Datenbank fehlen. Über dieses Werkzeug können Sie solche Attachments finden und entfernen.";
$l['attachment_stats'] = "Attachment-Statistiken";
$l['attachment_stats_desc'] = "Hier finden Sie allgemeine Angaben zu den Attachments in Ihrem Forum.";

// Errors
$l['error_nothing_selected'] = "Sie haben keine Attachments zum Entfernen ausgewählt.";
$l['error_no_attachments'] = "In Ihrem Forum gibt es keine Attachments. Dieser Bereich ist erst verfügbar, nachdem ein Attachment an einen Beitrag angefügt wurde.";
$l['error_not_all_removed'] = "Die verwaisten Attachments wurden nur teilweise entfernt, da einige Dateien auf dem Server nicht gelöscht werden konnten.";
$l['error_count'] = '{1} Attachment(s) konnte(n) nicht gelöscht werden.';
$l['error_invalid_username'] = "Der angegebene Benutzername ist ungültig.";
$l['error_invalid_forums'] = "Ein Forum oder mehrere gewählte Foren sind ungültig.";
$l['error_no_results'] = "Nach den Suchkriterien wurden keine Ergebnisse gefunden.";
$l['error_not_found'] = "Die Attachmentdatei konnte im Ordner \"uploads\" nicht gefunden werden.";
$l['error_not_attached'] = "Das Attachment wurde vor über 24 Stunden hochgeladen, aber an keinen Beitrag angefügt.";
$l['error_does_not_exist'] = "Das Thema/der Beitrag zu diesem Attachment existiert nicht mehr.";

// Success
$l['success_deleted'] = "Die ausgewählten Attachments wurden erfolgreich gelöscht.";
$l['success_orphan_deleted'] = "Die ausgewählten verwaisten Attachments wurden erfolgreich gelöscht.";
$l['success_count'] = '{1} Attachment(s) erfolgreich gelöscht.';
$l['success_no_orphans'] = "In Ihrem Forum gibt es keine verwaisten Attachments.";

// Confirm
$l['confirm_delete'] = "Sollen die ausgewählten Attachments wirklich gelöscht werden?";

// == Pages
// = Stats
$l['general_stats'] = "Allgemeine Statistiken";
$l['stats_attachment_stats'] = "Attachments - Attachment-Statistiken";
$l['num_uploaded'] = "<strong>Anzahl hochgeladener Attachments</strong>";
$l['space_used'] = "<strong>Benutzter Speicherplatz</strong>";
$l['bandwidth_used'] = "<strong>Geschätzter Trafficverbrauch</strong>";
$l['average_size'] = "<strong>Durchschnittliche Dateigröße</strong>";
$l['size'] = "Größe";
$l['posted_by'] = "Hochgeladen von";
$l['thread'] = "Thema";
$l['downloads'] = "Downloads";
$l['date_uploaded'] = "Datum";
$l['popular_attachments'] = "Top 5 beliebteste Attachments";
$l['largest_attachments'] = "Top 5 größte Attachments";
$l['users_diskspace'] = "Top 5 Benutzer mit dem meist benötigten Speicherplatz";
$l['username'] = "Benutzername";
$l['total_size'] = "Gesamtgröße";

// = Orphans
$l['orphan_results'] = "Suche nach verwaisten Attachments - Ergebnisse";
$l['orphan_attachments_search'] = "Suche nach verwaisten Attachments";
$l['reason_orphaned'] = "Grund der Verwaisung";
$l['reason_not_in_table'] = "Nicht in Attachment-Datenbanktabelle";
$l['reason_file_missing'] = "Datei fehlt";
$l['reason_thread_deleted'] = "Thema wurde gelöscht";
$l['reason_post_never_made'] = "Beitrag wurde nie gespeichert";
$l['unknown'] = "Unbekannt";
$l['results'] = "Ergebnisse";
$l['step1'] = "Schritt 1";
$l['step2'] = "Schritt 2";
$l['step1of2'] = "Schritt 1 von 2 - Durchsuche Dateisystem";
$l['step2of2'] = "Schritt 2 von 2 - Durchsuche Datenbank";
$l['step1of2_line1'] = "Bitte warten, das Dateisystem wird gerade nach verwaisten Attachments durchsucht.";
$l['step2of2_line1'] = "Bitte warten, die Datenbank wird gerade nach verwaisten Attachments durchsucht.";
$l['step_line2'] = "Sie werden automatisch zum nächsten Schritt weitergeleitet, sobald dieser Prozess abgeschlossen ist.";
$l['scanning'] = 'Einlesen&hellip;';

// = Attachments / Index
$l['index_find_attachments'] = "Attachments - Suche Attachments";
$l['find_where'] = "Suche nach Attachments";
$l['name_contains'] = "Dateiname beinhaltet";
$l['name_contains_desc'] = "Suchen Sie nach Dateien, die die Eingabe im Dateinamen enthalten. Geben Sie z.B. .zip ein um Dateien mit der Dateiendung .zip zu finden.";
$l['type_contains'] = "Dateityp beinhaltet";
$l['forum_is'] = "Im Forum/in Foren";
$l['username_is'] = "Benutzername des Autors";
$l['poster_is'] = "Ersteller ist";
$l['poster_is_either'] = "Benutzer oder Gast";
$l['poster_is_user'] = "Nur Benutzer";
$l['poster_is_guest'] = "Nur Gäste";
$l['more_than'] = "Mehr als";
$l['greater_than'] = "Größer als";
$l['is_exactly'] = "Genau";
$l['less_than'] = "Weniger als";
$l['date_posted_is'] = "Datum";
$l['days_ago'] = "Tage her";
$l['file_size_is'] = "Dateigröße";
$l['kb'] = "KB";
$l['download_count_is'] = "Anzahl der Downloads";
$l['display_options'] = "Anzeigeoptionen";
$l['filename'] = "Dateiname";
$l['filesize'] = "Dateigröße";
$l['download_count'] = "Anzahl der Downloads";
$l['post_username'] = "Benutzername";
$l['asc'] = "aufsteigend";
$l['desc'] = "absteigend";
$l['sort_results_by'] = "Sortiere Ergebnisse nach";
$l['results_per_page'] = "Ergebnisse pro Seite";
$l['in'] = "in";

// Buttons
$l['button_delete_orphans'] = "Lösche ausgewählte Waisen";
$l['button_delete_attachments'] = "Lösche ausgewählte Attachments";
$l['button_find_attachments'] = "Suche Attachments";
