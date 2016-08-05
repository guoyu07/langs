<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Forum vedligeholdelse',
'Rebuild index subhead'			=>	'Genopbyg søgeindeks',
'Rebuild index info'			=>	'Hvis du har tilføjet, redigeret eller slettet indlæg manuelt i databasen, eller hvis du har problemer med at søge, skal du genopbygge søgeindekset. For det bedste resultat, bør du sætte forum %s i vedligeholdelsestilstand. <strong> Genopbygning af søgeindekset kan tage lang tid og vil øge server-belastning under genopbygningsprocessen! </ strong>',
'Posts per cycle label'			=>	'Indlæg per cyklus',
'Posts per cycle help'			=>	'Antallet af indlæg til at behandle per sidevisning. F.eks hvis du skulle indtaste 300, ville tre hundrede stillinger behandles og derefter ville siden opdatere. Dette er for at forhindre, at scriptet fra at timeout i løbet af genopbygningsprocessen.',
'Starting post label'			=>	'Start med indlæg ID',
'Starting post help'			=>	'Væg Indlæg ID at begynde at genopbygge fra. Standardværdien er det første tilgængelige ID i databasen. Normalt ville du ikke ønsker at ændre dette.',
'Empty index label'				=>	'Tøm indeks',
'Empty index help'				=>	'Vælg dette, hvis du ønsker at søgeindekset skal tømmes, før genopbygningen (se nedenfor).',
'Rebuild completed info'		=>	'Når processen er færdig, vil du blive sendt tilbage til denne side. Det anbefales stærkt at JavaScript er aktiveret i din browser under ombygning (til automatisk omdirigering, når en cyklus er afsluttet). Hvis du er tvunget til at afbryde genopbygningsprocessen, gøre et notat af det sidste forarbejdede indlæg ID og angive dette ID +1 i "Start med indlæg ID", når / hvis du ønsker at fortsætte ("Tøm indeks" skal ikke vælges).',
'Rebuild index'					=>	'Genopbyg indeks',
'Rebuilding search index'		=>	'Genopbygger søgeindeks',
'Rebuilding index info'			=>	'Genopbygger indeks. Dette kan godt tage et stykke tid, så sæt noget kaffe på :-)',
'Processing post'				=>	'Behandler indlæg <strong>%s</strong> …',
'Click here'					=>	'Klik her',
'Javascript redirect failed'	=>	'JavaScript omdiregering mislykkede. %s for at fortsætte …',
'Posts must be integer message'	=>	'Indlæg pr cyklus skal være et positivt heltal.',
'Days must be integer message'	=>	'Dage at beskære skal være et positivt heltal.',
'No old topics message'			=>	'Der er ingen emner, der er %s dage gammel. Du kan mindske værdien af ​​"Dage gamle" og prøv igen.',
'Posts pruned redirect'			=>	'Indlæg beskæres. Omdirigerer …',
'Prune head'					=>	'beskær',
'Prune subhead'					=>	'beskær gamle indlæg',
'Days old label'				=>	'Dage gamle',
'Days old help'					=>	'Antallet af dage "gamle" et emne må være for at blive beskåret. F.eks hvis du skulle indtaste 30, ville hvert emne, der ikke indeholder et indlæg dateret mindre end 30 dage gamle blive slettet.',
'Prune sticky label'			=>	'beskær sticky emner',
'Prune sticky help'				=>	'Når den er aktiveret, vil et sticky opslag også blive beskåret.',
'Prune from label'				=>	'Beskær fra forum',
'All forums'					=>	'Alle forummer',
'Prune from help'				=>	'Forummet, som du ønsker at beskære opslag.',
'Prune info'					=>	'Brug denne funktion med forsigtighed. <strong> beskæring af indlæg kan aldrig fortrydes. </ strong> For det bedste resultat, bør du sætte forummet i %s under beskæring.',
'Confirm prune subhead'			=>	'Bekræft Beskæring af indlæg',
'Confirm prune info'			=>	'Er du sikker på at du vil beskære alle emner ældre end %s dage fra %s (%s emner).',
'Confirm prune warn'			=>	'ADVARSEL! Beskæring af indlæg sletter dem permanent.',

);
