<?php
/**
 * German language pack for MyBB 1.8 (informal)
 * Deutsches Sprachpaket für MyBB 1.8 "informell" (Du)
 * (c) 2005-2014 MyBBoard.de
 * 
 * Author/Autor: http://www.mybboard.de/
 * License/Lizenz: GNU Lesser General Public License, Version 3
 */

// Tabs
$l['attachments'] = "Anhänge";
$l['stats'] = "Statistiken";
$l['find_attachments'] = "Anhänge suchen";
$l['find_attachments_desc'] = "Über die Suche kannst du bestimmte Anhänge finden, die im Forum an Beiträge angefügt wurden. Benutze dazu das folgende Formular. Alle Felder sind optional und werden nur in die Suche einbezogen, wenn sie ausgefüllt wurden.";
$l['find_orphans'] = "Suche verwaiste Anhänge";
$l['find_orphans_desc'] = "Verwaiste Anhänge sind Dateien, die aus irgendeinem Grund auf dem Server oder in der Datenbank fehlen. Über dieses Werkzeug kannst du solche Anhänge finden und entfernen.";
$l['attachment_stats'] = "Anhang-Statistiken";
$l['attachment_stats_desc'] = "Hier findest du allgemeine Angaben zu den Anhänge in deinem Forum.";

// Errors
$l['error_nothing_selected'] = "Du hast keine Anhänge zum Entfernen ausgewählt.";
$l['error_no_attachments'] = "In deinem Forum gibt es keine Anhänge. Dieser Bereich ist erst verfügbar, nachdem ein Anhang an einen Beitrag angefügt wurde.";
$l['error_not_all_removed'] = "Die verwaisten Anhänge wurden nur teilweise entfernt, da einige Dateien auf dem Server nicht gelöscht werden konnten.";
$l['error_count'] = '{1} Anhang/Anhänge konnte(n) nicht gelöscht werden.';
$l['error_invalid_username'] = "Der angegebene Benutzername ist ungültig.";
$l['error_invalid_forums'] = "Ein Forum oder mehrere gewählte Foren sind ungültig.";
$l['error_no_results'] = "Nach den Suchkriterien wurden keine Ergebnisse gefunden.";
$l['error_not_found'] = "Die Datei des Anhang konnte im Ordner \"uploads\" nicht gefunden werden.";
$l['error_not_attached'] = "Der Anhang wurde vor über 24 Stunden hochgeladen, aber an keinen Beitrag angefügt.";
$l['error_does_not_exist'] = "Das Thema/der Beitrag zu diesem Anhang existiert nicht mehr.";

// Success
$l['success_deleted'] = "Die ausgewählten Anhänge wurden erfolgreich gelöscht.";
$l['success_orphan_deleted'] = "Die ausgewählten verwaisten Anhänge wurden erfolgreich gelöscht.";
$l['success_count'] = '{1} Anhang/Anhänge erfolgreich gelöscht.';
$l['success_no_orphans'] = "In deinem Forum gibt es keine verwaisten Anhänge.";

// Confirm
$l['confirm_delete'] = "Sollen die ausgewählten Anhänge wirklich gelöscht werden?";

// == Pages
// = Stats
$l['general_stats'] = "Allgemeine Statistiken";
$l['stats_attachment_stats'] = "Anhänge - Anhang-Statistiken";
$l['num_uploaded'] = "<strong>Anzahl hochgeladener Anhänge</strong>";
$l['space_used'] = "<strong>Benutzter Speicherplatz</strong>";
$l['bandwidth_used'] = "<strong>Geschätzter Trafficverbrauch</strong>";
$l['average_size'] = "<strong>Durchschnittliche Dateigröße</strong>";
$l['size'] = "Größe";
$l['posted_by'] = "Hochgeladen von";
$l['thread'] = "Thema";
$l['downloads'] = "Downloads";
$l['date_uploaded'] = "Datum";
$l['popular_attachments'] = "Top 5 beliebteste Anhänge";
$l['largest_attachments'] = "Top 5 größte Anhänge";
$l['users_diskspace'] = "Top 5 Benutzer mit dem meist benötigten Speicherplatz";
$l['username'] = "Benutzername";
$l['total_size'] = "Gesamtgröße";

// = Orphans
$l['orphan_results'] = "Suche nach verwaisten Anhänge - Ergebnisse";
$l['orphan_attachments_search'] = "Suche nach verwaisten Anhänge";
$l['reason_orphaned'] = "Grund der Verwaisung";
$l['reason_not_in_table'] = "Nicht in Anhang-Datenbanktabelle";
$l['reason_file_missing'] = "Datei fehlt";
$l['reason_thread_deleted'] = "Thema wurde gelöscht";
$l['reason_post_never_made'] = "Beitrag wurde nie gespeichert";
$l['unknown'] = "Unbekannt";
$l['results'] = "Ergebnisse";
$l['step1'] = "Schritt 1";
$l['step2'] = "Schritt 2";
$l['step1of2'] = "Schritt 1 von 2 - Durchsuche Dateisystem";
$l['step2of2'] = "Schritt 2 von 2 - Durchsuche Datenbank";
$l['step1of2_line1'] = "Bitte warten, das Dateisystem wird gerade nach verwaisten Anhänge durchsucht.";
$l['step2of2_line1'] = "Bitte warten, die Datenbank wird gerade nach verwaisten Anhänge durchsucht.";
$l['step_line2'] = "Du wirst automatisch zum nächsten Schritt weitergeleitet, sobald dieser Prozess abgeschlossen ist.";
$l['scanning'] = 'Einlesen&hellip;';

// = Anhänge / Index
$l['index_find_attachments'] = "Anhänge - Suche Anhänge";
$l['find_where'] = "Suche nach Anhänge";
$l['name_contains'] = "Dateiname beinhaltet";
$l['name_contains_desc'] = "Suche nach Dateien, die die Eingabe im Dateinamen enthalten. Gib z.B. .zip ein um Dateien mit der Dateiendung .zip zu finden.";
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
$l['button_delete_attachments'] = "Lösche ausgewählte Anhänge";
$l['button_find_attachments'] = "Suche Anhänge";
