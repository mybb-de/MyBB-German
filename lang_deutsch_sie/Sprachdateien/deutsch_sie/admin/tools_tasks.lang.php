<?php
#########################################################
# Deutsches Sprachpaket (Formell)                       #
# Version x.x.x                                         #
# Datum: xx.xx.xxxx                                     #
# MyBB-Version x.x.x                                    #
# Autor: MyBBoard.de | Webseite: http://www.mybboard.de #
# (c) 2005-2014 MyBBoard.de | Alle Rechte vorbehalten!  #
#                                                       #
# Die Lizenz-/Nutzungsbedingungen finden Sie in der     #
# beiliegenden Readme.                                  #
#########################################################

$l['task_manager'] = "Aufgaben-Manager";
$l['add_new_task'] = "Neue Aufgabe hinzufügen";
$l['add_new_task_desc'] = "Hier können Sie neue geplante Aufgaben erstellen, die automatisch in Ihrem Forum ausgeführt werden.";
$l['edit_task'] = "Aufgabe bearbeiten";
$l['edit_task_desc'] = "Hier können Sie die verschiedenen Einstellungen dieser geplanten Aufgabe bearbeiten.";
$l['task_logs'] = "Log-Daten der Aufgaben";
$l['view_task_logs'] = "Log-Daten der Aufgaben anschauen";
$l['view_task_logs_desc'] = "Wenn eine Aufgabe ausgeführt wird und die Protokollierung aktiviert ist, wird jedes Ergebnis und jeder Fehler unten aufgelistet. Einträge älter als 30 Tage werden automatisch gelöscht.";
$l['scheduled_tasks'] = "Geplante Aufgaben";
$l['scheduled_tasks_desc'] = "Hier können Sie Aufgaben verwalten, die automatisch in Ihrem Forum ausgeführt werden. Um eine Aufgabe jetzt auszuführen, klicken Sie auf das Icon rechts von der Aufgabe.";

$l['title'] = "Titel";
$l['short_description'] = "Kurze Beschreibung";
$l['task_file'] = "Datei";
$l['task_file_desc'] = "Wählen Sie die Datei aus, die bei dieser Aufgabe ausgeführt werden soll.";
$l['time_minutes'] = "Zeit: Minuten";
$l['time_minutes_desc'] = "Trennen Sie die Liste der Minuten (0-59), in denen die Aufgabe ausgeführt werden soll, mit Kommas. Geben Sie '*' ein, wenn die Aufgabe jede Minute ausgeführt werden soll.";
$l['time_hours'] = "Zeit: Stunden";
$l['time_hours_desc'] = "Trennen Sie die Liste der Stunden (0-23), in denen die Aufgabe ausgeführt werden soll, mit Kommas. Geben Sie '*' ein, wenn die Aufgabe jede Stunde ausgeführt werden soll.";
$l['time_days_of_month'] = "Zeit: Tage im Monat";
$l['time_days_of_month_desc'] = "Trennen Sie die Liste der Tage (0-31), in denen die Aufgabe ausgeführt werden soll, mit Kommas. Geben Sie '*' ein, wenn die Aufgabe jeden Tag ausgeführt werden soll oder wählen Sie die Wochentage unten aus.";
$l['every_weekday'] = "Jeden Wochentag";
$l['sunday'] = "Sonntag";
$l['monday'] = "Montag";
$l['tuesday'] = "Dienstag";
$l['wednesday'] = "Mittwoch";
$l['thursday'] = "Donnerstag";
$l['friday'] = "Freitag";
$l['saturday'] = "Samstag";
$l['time_weekdays'] = "Zeit: Wochentage";
$l['time_weekdays_desc'] = "Wählen Sie die Wochentage aus, in denen die Aufgabe ausgeführt werden soll. Halten Sie STRG gedrückt, um mehrere Tage auszuwählen. Wählen Sie \"Jeden Wochentag\", wenn die Aufgabe jeden Tag ausgeführt werden soll.";
$l['every_month'] = "Jeden Monat";
$l['time_months'] = "Zeit: Monate";
$l['time_months_desc'] = "Wählen Sie die Monate aus, in denen die Aufgabe ausgeführt werden soll. Halten Sie STRG gedrückt, um mehrere Monate auszuwählen. Wählen Sie \"Jeden Monat\", wenn die Aufgabe jeden Monat ausgeführt werden soll.";
$l['enabled'] = "Aufgabe aktivieren?";
$l['enable_logging'] = "Protokollierung aktivieren?";
$l['save_task'] = "Aufgabe speichern";
$l['task'] = "Aufgabe";
$l['date'] = "Datum";
$l['data'] = "Daten";
$l['no_task_logs'] = "Es gibt im Moment keine Log-Einträge für die geplanten Aufgaben.";
$l['next_run'] = "Nächste Ausführung";
$l['run_task_now'] = "Diese Aufgabe jetzt ausführen";
$l['run_task'] = "Aufgabe ausführen";
$l['disable_task'] = "Aufgabe deaktivieren";
$l['enable_task'] = "Aufgabe aktivieren";
$l['delete_task'] = "Aufgabe löschen";
$l['alt_enabled'] = "Aktiviert";
$l['alt_disabled'] = "Deaktiviert";

$l['error_invalid_task'] = "Die ausgewählte Aufgabe existiert nicht.";
$l['error_missing_title'] = "Sie haben keinen Titel für diese geplante Aufgabe eingegeben";
$l['error_missing_description'] = "Sie haben keine Beschreibung für diese geplante Aufgabe eingegeben";
$l['error_invalid_task_file'] = "Die ausgewählte Datei existiert nicht.";
$l['error_invalid_minute'] = "Die eingegebene Minute ist ungültig.";
$l['error_invalid_hour'] = "Die eingegebene Stunde ist ungültig.";
$l['error_invalid_day'] = "Der eingegebene Tag ist ungültig.";
$l['error_invalid_weekday'] = "Der eingegebene Wochentag ist ungültig.";
$l['error_invalid_month'] = "Der eingegebene Monat ist ungültig.";

$l['success_task_created'] = "Die Aufgabe wurde erfolgreich erstellt.";
$l['success_task_updated'] = "Die Aufgabe wurde erfolgreich bearbeitet.";
$l['success_task_deleted'] = "Die ausgewählte Aufgabe wurde gelöscht.";
$l['success_task_enabled'] = "Die ausgewählte Aufgabe wurde aktiviert.";
$l['success_task_disabled'] = "Die ausgewählte Aufgabe wurde deaktiviert.";
$l['success_task_run'] = "Die ausgewählte Aufgabe wurde ausgeführt.";

$l['confirm_task_deletion'] = "Wollen Sie die geplante Aufgabe wirklich löschen?";
$l['confirm_task_enable'] = "<strong>WARNUNG:</strong> Sie sind gerade dabei, eine Aufgabe zu aktivieren, die nur von einem Cron-Job ausgeführt werden sollte (Bitte schauen Sie in die <a href=\"http://www.mybboard.de/doku.html\" target=\"_blank\">MyBB Doku</a> für weitere Informationen). Fortsetzen?";
$l['no_tasks'] = "Es wurden bisher keine Aufgaben angelegt.";

?>
