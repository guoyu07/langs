<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'dk',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Notices
'Bad request'						=>	'Dårlig anmodning. Det link, du fulgte, er forkert eller forældet.',
'No view'							=>	'Du har ikke rettigheder til at se disse forummer.',
'No permission'						=>	'Du har ikke rettigheder nok til at se denne side.',
'Bad referrer'						=>	'Dårlig HTTP_REFERER. Du blev henvist til denne side fra en uautoriseret kilde. Hvis problemet fortsætter, kan du sørge for, at \'Base-URL\' er indstillet korrekt i admin / Indstillinger, og at du besøger dette forum ved at navigere til den pågældende webadresse. Yderligere oplysninger om henvisende check kan findes i FluxBB dokumentationen.',
'No cookie'							=>	'Det ser ud til at du har logget ind succesfuldt, men en cookie er ikke blevet indstillet. Tjek venligst dine indstillinger og eventuelt aktivere cookies for denne hjemmeside.',
'Pun include error'					=>	'Kunne ikke behandle bruger omfatter %s fra skabelon %s. Der er ingen sådan fil i hverken skabelon bibliotek eller i brugerens bibliotek.',

// Miscellaneous
'Announcement'						=>	'Meddelelse',
'Options'							=>	'Indstillinger',
'Submit'							=>	'Send', // "Name" of submit buttons
'Ban message'						=>	'Du er banlyst fra dette forum.',
'Ban message 2'						=>	'banlysningen udløber ved udgangen af',
'Ban message 3'						=>	'Administratoren eller moderatoren der banlyste dig efterlod følgende besked:',
'Ban message 4'						=>	'Eventuelle henvendelser bedes rettes til forum administrator på:',
'Never'								=>	'Aldrig',
'Today'								=>	'I dag',
'Yesterday'							=>	'I går',
'Info'								=>	'Info', // A common table header
'Go back'							=>	'Gå tilbage',
'Maintenance'						=>	'Vedligeholdelse',
'Redirecting'						=>	'Omdirigerer',
'Click redirect'					=>	'Klik her, hvis du ikke ønsker at vente længere (eller hvis din browser ikke automatisk sende dig)',
'on'								=>	'Aktiveret', // As in "BBCode is on"
'off'								=>	'Deaktiveret',
'Invalid email'						=>	'E-mail adressen du har indtastet er ugyldig.',
'Required'							=>	'(Påkrævet)',
'required field'					=>	'er et obligatorisk felt i denne form.', // For javascript form validation
'Last post'							=>	'Sidste indlæg',
'by'								=>	'af', // As in last post by someuser
'New posts'							=>	'Nye indlæg', // The link that leads to the first new post
'New posts info'					=>	'Gå til første nye indlæg i dette emne.', // The popup text for new posts links
'Username'							=>	'Brugernavn',
'Password'							=>	'Kodeord',
'Email'								=>	'E-mail',
'Send email'						=>	'Send e-mail',
'Moderated by'						=>	'Modereret af',
'Registered'						=>	'Registreret',
'Subject'							=>	'Emne',
'Message'							=>	'Besked',
'Topic'								=>	'Emne',
'Forum'								=>	'Forum',
'Posts'								=>	'Indlæg',
'Replies'							=>	'Svar',
'Pages'								=>	'Sider:',
'Page'								=>	'Side %s',
'BBCode'							=>	'BBKode:', // You probably shouldn't change this
'url tag'							=>	'[url] tags:',
'img tag'							=>	'[img] tags:',
'Smilies'							=>	'Smilier:',
'and'								=>	'og',
'Image link'						=>	'billede', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'skrev:', // For [quote]'s
'Mailer'							=>	'%s Mail', // As in "MyForums Mailer" in the signature of outgoing emails
'Important information'				=>	'Vigtige oplysninger',
'Write message legend'				=>	'Skriv din besked og send',
'Previous'							=>	'Forrige',
'Next'								=>	'Næste',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Titel',
'Member'							=>	'Medlem', // Default title
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Banlyst',
'Guest'								=>	'Gæst',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] blev fundet uden en matchende [%1$s]',
'BBCode error invalid nesting'		=>	'[%1$s] blev åbnet i [%2$s], dette er ikke tilladt',
'BBCode error invalid self-nesting'	=>	'[%s] blev åbnet i sig selv, er dette ikke tilladt',
'BBCode error no closing tag'		=>	'[%1$s] blev fundet uden et matchende [/%1$s]',
'BBCode error empty attribute'		=>	'[%s] tag havde en tom attribut sektion',
'BBCode error tag not allowed'		=>	'Du har ikke rettigheder til at bruge [%s] tags',
'BBCode error tag url not allowed'	=>	'Du har ikke rettigheder til at bruge links i indlæg',
'BBCode code problem'				=>	'Der er et problem med din [code] tags',
'BBCode list size error'			=>	'Din liste var for lang til at parse, skal du gøre det mindre!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Indeks',
'User list'							=>	'Brugerliste',
'Rules'								=>	'Regler',
'Search'							=>	'Søg',
'Register'							=>	'Registrer',
'Login'								=>	'Log ind',
'Not logged in'						=>	'Du er ikke logget ind.',
'Profile'							=>	'Profil',
'Logout'							=>	'Log ud',
'Logged in as'						=>	'Logget ind som',
'Admin'								=>	'Administration',
'Last visit'						=>	'Sidste besøg: %s',
'Topic searches'					=>	'Hurtige links:',
'New posts header'					=>	'Nye indlæg',
'Active topics'						=>	'Aktive emner',
'Unanswered topics'					=>	'Ubesvarede emner',
'Posted topics'						=>	'Dine indlæg',
'Show new posts'					=>	'Find emner med nye indlæg siden dit sidste besøg.',
'Show active topics'				=>	'Find emner med seneste indlæg.',
'Show unanswered topics'			=>	'Find emner uden nogen svar.',
'Show posted topics'				=>	'Find emner, som du har indlæg i.',
'Mark all as read'					=>	'Marker alle emner som læst',
'Mark forum read'					=>	'Marker dette forum som læst',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Sidefod',
'Jump to'							=>	'Gå til',
'Go'								=>	' Gå ', // Submit button in forum jump
'Moderate topic'					=>	'Moderer emne',
'Move topic'						=>	'Flyt emne',
'Open topic'						=>	'Åben emne',
'Close topic'						=>	'luk emne',
'Unstick topic'						=>	'Fjern fremhævning',
'Stick topic'						=>	'Fremhæv emne',
'Moderate forum'					=>	'Moderer forum',
'Powered by'						=>	'Drevet af %s',

// Debug information
'Debug table'						=>	'Fejlfindingsinformation',
'Querytime'							=>	'Genereret på %1$s sekunder, %2$s afviklede forespørgsler',
'Memory usage'						=>	'RAM forbrug: %1$s',
'Peak usage'						=>	'(Højest: %1$s)',
'Query times'						=>	'Tid (s)',
'Query'								=>	'Forespørgsel',
'Total query time'					=>	'Total forespørgelsestid: %s',

// For extern.php RSS feed
'RSS description'					=>	'De seneste emner på %s.',
'RSS description topic'				=>	'De seneste stillinger i %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS aktiv emne-feed',
'Atom active topics feed'			=>	'Atom aktiv emne-feed',
'RSS forum feed'					=>	'RSS forum feed',
'Atom forum feed'					=>	'Atom forum feed',
'RSS topic feed'					=>	'RSS emne feed',
'Atom topic feed'					=>	'Atom emne feed',

// Admin related stuff in the header
'New reports'						=>	'Der er nye rapporter',
'Maintenance mode enabled'			=>	'Vedligeholdelsestilstand er aktiveret!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
