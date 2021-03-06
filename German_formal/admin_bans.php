<?php

// Sprachdefinitionen, die in admin_bans.php verwendet werden
$lang_admin_bans = array(

'No user message'			=>	'Es ist kein Mitglied mit diesem Namen registriert. Wenn Sie eine Mitgliedssperre hinzufügen möchten, die nicht mit einem bestimmten Mitgliedsnamen verbunden ist, lassen Sie das Namensfeld einfach leer.',
'No user ID message'		=>	'Es ist kein Mitglied mit dieser ID registriert.',
'User is admin message'		=>	'Das Mitglied %s ist ein Administrator und kann nicht gesperrt werden. Wenn Sie einen Administrator sperren möchten, müssen Sie diesen zunächst auf die Berechtigungen eines einfachen Mitglieds zurückstufen.',
'User is mod message'		=>	'Das Mitglied %s ist ein Moderator und kann nicht gesperrt werden. Wenn Sie einen Moderator sperren möchten, müssen Sie diesen zunächst auf die Berechtigungen eines einfachen Mitglieds zurückstufen.',
'Must enter message'		=>	'Sie müssen mindestens einen Mitgliedsnamen, eine IP-Adresse oder eine E-Mail-Adresse eingeben.',
'Cannot ban guest message'	=>	'Gäste können nicht gesperrt werden.',
'Invalid IP message'		=>	'Sie haben eine ungültige IP-Adresse bzw. einen ungültigen IP-Bereich eingegeben.',
'Invalid e-mail message'	=>	'Die eingegebene E-Mail-Adresse (z.B. mitglied@domain.de) oder ein Teil der E-Mail-Domain (z.B. domain.de) ist ungültig.',
'Invalid date message'		=>	'Sie haben ein ungültiges Ablaufdatum eingegeben.',
'Invalid date reasons'		=>	'Das Datum muss im Format JJJJ-MM-TT angegeben werden und mindestens einen Tag in der Zukunft liegen.',
'Ban added redirect'		=>	'Mitgliedssperre hinzugefügt. Leite weiter …' ,
'Ban edited redirect'		=>	'Mitgliedssperre aktualisiert. Leite weiter …',
'Ban removed redirect'		=>	'Mitgliedssperre entfernt. Leite weiter …',

'New ban head'				=>	'Neue Mitgliedssperre',
'Add ban subhead'			=>	'Eine Mitgliedssperre hinzufügen',
'Username label'			=>	'Mitgliedsname',
'Username help'				=>	'Der Name des zu sperrenden Mitglieds (Groß-/Kleinschreibung wird nicht berücksichtigt).',
'Username advanced help'	=>	'Der zu sperrende Mitgliedsname (Groß-/Kleinschreibung wird berücksichtigt). Auf der nächsten Seite können Sie eine IP sowie eine E-Mail-Adresse festlegen. Wenn Sie nur eine bestimmte IP bzw. einen IP-Bereich oder eine bestimmte E-Mail-Adresse sperren wollen, lassen Sie die anderen Felder leer.',

'Ban search head'			=>	'Suche nach Mitgliedssperren',
'Ban search subhead'		=>	'Bitte geben Sie die Suchkriterien ein',
'Ban search info'			=>	'Suche nach Mitgliedssperren in der Datenbank. Für die Suche können ein oder mehrere Begriffe eingegeben werden. Platzhalter in Form von Sternchen (*) sind möglich.',
'Date help'					=>	'(JJJJ-MM-TT)',
'Message label'				=>	'Nachricht',
'Expire after label'		=>	'Ablauf nach',
'Expire before label'		=>	'Ablauf vor',
'Order by label'			=>	'Sortieren nach',
'Order by username'			=>	'Mitgliedsname',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'E-Mail',
'Order by expire'			=>	'Ablaufdatum',
'Ascending'					=>	'Aufsteigend',
'Descending'				=>	'Absteigend',
'Submit search'				=>	'Suche starten',

'E-mail label'				=>	'E-Mail-Adresse',
'E-mail help'				=>	'Die E-Mail-Adresse oder die E-Mail-Domain, die gesperrt werden soll (z.B. irgendjemand@domain.de oder domain.de). Weitere Informationen dazu finden Sie in den Berechtigungen unter "E-Mail-Adresssperre erlauben".',
'IP label'					=>	'IP-Adresse/IP-Bereich',
'IP help'					=>	'Die IP-Adresse oder der IP-Bereich, der gesperrt werden soll (z.B. 150.11.110.1 oder 150.11.110). Mehrere IP-Adressen können mit einem Leerzeichen getrennt eingegeben werden. Wenn in diesem Feld bereits eine IP-Adresse vorhanden ist, dann ist dies die letzte, in der Datenbank gespeicherte IP-Adresse des Mitglieds.',
'IP help link'				=>	'Klicken Sie %s, um die IP-Statistik für dieses Mitglied anzuzeigen.',
'Ban advanced head'			=>	'Erweiterte Mitgliedssperren-Einstellungen',
'Ban advanced subhead'		=>	'Kombinierte Mitgliedssperre mit IP und E-Mail-Adresse',
'Ban message label'			=>	'Sperr-Nachricht an das Mitglied',
'Ban message help'			=>	'Die Nachricht, die dem Mitglied angezeigt wird, wenn es die Foren besucht.',
'Message expiry subhead'	=>	'Sperr-Nachricht und Ablaufdatum',
'Ban IP range info'			=>	'Sie sollten vorsichtig sein, wenn Sie einen IP-Bereich sperren, da andere Mitglieder möglicherweise den gleichen IP-Bereich verwenden.',
'Expire date label'			=>	'Ablaufdatum',
'Expire date help'			=>	'Das Datum, nachdem die Mitgliedssperre automatisch entfernt wird (Format: JJJJ-MM-TT). Lassen Sie dieses Feld leer, wenn die Mitgliedssperre manuell entfernt werden soll.',

'Results head'				=>	'Suchergebnisse',
'Results username head'		=>	'Mitgliedsname',
'Results e-mail head'		=>	'E-Mail',
'Results IP address head'	=>	'IP/IP-Bereich',
'Results expire head'		=>	'Ablaufdatum',
'Results message head'		=>	'Nachricht',
'Results banned by head'	=>	'Gesperrt durch',
'Results actions head'		=>	'Aktionen',
'No match'					=>	'Keinen Eintrag gefunden',
'Unknown'					=>	'Unbekannt',

);
