<?php
$lang['friendlyname'] = 'Archive Manager';
$lang['postinstall'] = 'Na installatie: U dient het &quot;Use Archive&quot; recht te hebben alvorens u deze module kunt gebruiken.';
$lang['postuninstall'] = 'Module verwijderd';
$lang['uninstalled'] = 'Module gedeinstalleerd.';
$lang['installed'] = 'Moduleversie %s ge&iuml;nstalleerd.';
$lang['prefsupdated'] = 'Modulevookeuren bijgewerkt.';
$lang['accessdenied'] = 'Toegang geweigerd. Bekijk uw rechten.';
$lang['error'] = 'Fout!';
$lang['upgraded'] = 'Module bijgewerkt tot versie %s.';
$lang['title_mod_prefs'] = 'Modulevoorkeuren';
$lang['content'] = 'Inhoudsobject';
$lang['htmlblob'] = 'HTML Blob ';
$lang['stylesheet'] = 'Stylesheet ';
$lang['template'] = 'Sjabloon';
$lang['prev'] = '< Vorige Pagina';
$lang['next'] = 'Volgende Pagina >';
$lang['column_type'] = 'Type ';
$lang['column_name'] = 'Naam';
$lang['column_revision'] = 'Revisie';
$lang['column_date'] = 'Datum';
$lang['column_action'] = 'Handeling';
$lang['title_admin_panel'] = 'Archievenbeheer';
$lang['title_admin_prefs'] = 'Archiefvoorkeuren';
$lang['title_admin_snaps'] = 'Snapshotbeheer';
$lang['listitems'] = 'Bekijk uitgebreid archief';
$lang['simplelist'] = 'Bekijk eenvoudig archief';
$lang['listsnapshots'] = 'Snapshots ';
$lang['adminprefs'] = 'Archiefvoorkeuren';
$lang['welcome_text'] = 'Selecteer de actie die u wilt uitvoeren';
$lang['restore'] = 'Herstel naar huidig';
$lang['preview'] = 'Voorbeeld';
$lang['title_preview'] = 'Voorbeeld van revisie %s';
$lang['title_save_snapshot'] = 'Bewaar een snapshot van uw site';
$lang['title_snapshot_name'] = 'Naam snapshot';
$lang['title_snapshot_not_yet'] = 'Snapshots zijn nog niet ge&iuml;mplementeerd';
$lang['title_filter_type'] = 'Bekijk';
$lang['title_filter_none'] = 'Alle archieftypes';
$lang['title_filter_content'] = 'Alleen inhoud';
$lang['title_filter_htmlblob'] = 'Alleen HTML Blobs';
$lang['title_filter_stylesheet'] = 'Alleen stylesheets';
$lang['title_filter_template'] = 'Alleen sjablonen';
$lang['sort_desc'] = 'Aflopend sorteren';
$lang['sort_asc'] = 'Oplopend sorteren';
$lang['surerestore'] = 'Weet u zeker dat u wilt herstellen naar revisie %s?';
$lang['title_purge_count'] = 'Hoeveel revisies van elke pagina wenst u te behouden?';
$lang['title_purge_unlimited'] = 'Behoud alle revisies van elke pagina';
$lang['title_purge_5_revisions'] = 'Behoud laatste vijf revisies van elke pagina';
$lang['title_purge_10_revisions'] = 'Behoud laatste tien revisies van elke pagina';
$lang['title_purge_20_revisions'] = 'Behoud laatste twintig revisies van elke pagina';
$lang['title_purge_50_revisions'] = 'Behoud laatste vijftig revisies van elke pagina';
$lang['title_purge_time'] = 'Hoe lang wilt u de revisies bewaren?';
$lang['title_purge_forever'] = 'Revisies altijd behouden';
$lang['title_purge_1_days'] = 'Revisies van de laatste dag behouden';
$lang['title_purge_7_days'] = 'Revisies van de laatste 7 dagen behouden';
$lang['title_purge_14_days'] = 'Revisies van de laatste 14 dagen behouden';
$lang['title_purge_30_days'] = 'Revisies van de laatste 30 dagen behouden';
$lang['title_purge_90_days'] = 'Revisies van de laatste 90 dagen behouden';
$lang['title_purge_180_days'] = 'Revisies van de laatste 180 dagen behouden';
$lang['title_purge_365_days'] = 'Revisies van de laatste 365 dagen behouden';
$lang['title_date_format'] = 'Datumformaat';
$lang['date_format_help'] = 'Datumformaten zijn opgebouwd volgens de standaard PHP &quot;date&quot; opmaakcodes. Voor een referentie kunt u <a href=&quot;http://nl3.php.net/manual/en/function.date.php&quot;>http://nl3.php.net/manual/en/function.date.php</a> bekijken. Bedenk dat u alle karakters die u niet als datum wilt interpreteren escaped met een backslash! (\)<br />';
$lang['error_invalid_info'] = 'Er is een fout opgetreden. Er wordt geprobeerd een object te herstellen van een onbekend type.';
$lang['restored_template'] = 'Sjabloon %s hersteld naar revisie %s';
$lang['restored_content'] = 'Pagina %s hersteld naar revisie %s';
$lang['restored_stylesheet'] = 'Stylesheet %s hersteld naar revisie %s';
$lang['restored_htmlblob'] = 'HTML Blob %s hersteld naar revisie %s';
$lang['title_purge_warning'] = 'Waarschuwing! Als u een revisienummer en een revisietijd selecteert, wordt de KLEINSTE waarde van deze twee bewaard door het systeem. ';
$lang['title_purge_warning2'] = 'Waarschuwing! Uw selectie treedt pas in werking de eerstvolgende keer als u een pagina bewerkt. Dit betreft enkel de archieven wanneer de corresponderende pagina wordt bewerkt. Dus als u eerst &quot;Revisies altijd behouden&quot; heeft geselecteerd en dit wijzigt naar &quot;Behoud laatste vijf revisies van elke pagina&quot;, zal de database alle historische kopie&euml;n van alle pagina&#039;s behouden totdat u een pagina bewerkt. Na het bewerken van de pagina, zal de database enkel nog de laatste vijf revisies bewaren.';
$lang['moddescription'] = 'Archiveer en herstel inhoud, stylesheets, HTML Blobs en sjablonen.';
$lang['changelog'] = '<ul><li>Versie 0.1 - 29 December 2005. Eerste release.</li>';
$lang['help'] = '<h3>Wat doet dit?</h3>
<p>Na installatie, behoud deze module een kopie van elke pagina, HTML Blob of sjabloon die u bewerkt. Tevens wordt er een pagina aangemaakt waar de beheerder(s) alle objecten in het archief kunnen herstellen naar de huidige staat.</p>

<p>Dit houdt in dat u verscheidene aspecten van de site kunt bewerken en op een later tijdstip eventueel weer kunt herstellen.</p>

<p>U kunt automatisch archieven laten verwijderen op revisienummer (U behoudt bijvoorbeeld enkel een pagina of HTML Blob van een bepaald revisienummer) of op datum (bijvoorbeeld u behoudt enkel de revisies vanaf een bepaalde datum). U hoeft archieven niet te verwijderen. U kunt deze ook bewaren totdat uw database vol is.</p>

<h3>Wat doet dit NIET?</h3>
<p>Dit is geen volledig Revisie Beheer Systeem (RBS). Mede door de datastructuur van CMS Made Simple, is het implementeren van een volledige RBS iets te hoog gegrepen voor de auteur.</p>

<ul>
<li>Stylesheets worden momenteel nog niet ondersteund. Hier worden de wijzigingen in het systeem voor doorgevoerd.</li>

<li>Niet alle metadata wordt gearchiveerd. Attributen voor pagina&#039;s, zoals hi&euml;rarchische posities, eigenaren, documentactiviteit, In menu weergeven en dergelijke worden NIET gearchiveerd. Eveneens worden Stylesheets en Template associaties niet opgeslagen.</li>

<li>Snapshots (bijvoorbeeld een archief van de exacte staat van de huidige, volledige website, op een gegeven datum en tijd) zijn nog niet ge&iuml;mplementeerd, maar dit wordt alsnog spoedig gedaan.</li>

<li>Dit systeem behoudt geen wijzigingen, maar volledige kopie&euml;n van elk archief. Dit kost meer ruimte in de database, maar is veel makkelijker te implementeren.</li>
</ul>

<h3>Hoe gebruikt u het?</h3>
<h4>Algemeen</h4>
<p>Na installatie, behoudt het systeem een kopie van alle wijzigingen in het archief. U hoeft hiervoor geen speciale handelingen te verrichten</p>

<h4>Aflopen van archieven</h4>
<p>Een beheerder met  &quot;Manage Archives&quot; recht mag in de &quot;Archief Voorkeuren&quot; pagina vervaldata plaatsen, met verschillende opties daarbij gevoegd. Onthoud dat indien u bijvoorbeeld instelt dat u de archieven voor altijd wilt bewaren, maar ook instelt dat u maar 5 archieven wenst te behouden, slechts de laatste 5 revisies bewaard zullen blijven!</p>

<h4>Herstellen van archieven</h4>
<p>Iedere beheerder met &quot;Manage Archives&quot; recht kan de revisiegeschiedenis bekijken. Er zijn twee verschillende manieren om deze revisies te bekijken: Simpel en Geavanceerd. In Simpele modus kunt u de archieven bekijken en eventueel sorteren op naam of datum. De Geavanceerde modus laat alle revisies van alle objecten in het archief zien; u kunt sorteren op naam, datum, type of revisienummer.</p>

<p>U vindt in principe het gezochte object in Simpele modus. Als u gebruik maakt van het keuzelijstmenu, kunt u de archieven filteren zodat u maar &eacute;&eacute;n type object ziet (Inhoud, sjabloon, HTML Blob, of Stylesheet) als u klikt op de naam van het object, wordt u doorgestuurd naar de geschiedenis van het geselecteerde object. U kunt een preview van het geselecteerde object bekijken (in het geval van Inhoud) door op de Preview knop te klikken.</p>

<p>Herstel alle objecten door op het &quot;Restore&quot; icoon te klikken. Deze staat het meest rechts. Dat is alles!</p>

<h3>Geplande verbeteringen</h3>
<ul>
<li>Stijldocumentarchieven implementeren.</li>
<li>Preview van Templates?</li>
<li>Preview van HTML Blobs?</li>
<li>Snapshots (Bijv. een archief van de exacte staat van de gehele website op een geselecteerd moment).</li>
<li>Betere/effici&euml;ntere opslag? Delta&#039;s opslaan?</li>
</ul>
<h3>Onderdelen die foutief als bug kunnen worden aangezien</h3>
<ul>
<li>Inhoud herstellen cre&euml;ert een extra revisie. Als u bijvoorbeeld versies 1 t/m 4 heeft, en u hersteld tot versie 1, wordt er een extra revisie genaamd &quot;Revisie 5&quot; bij uw archieven geplaatst.</li>
<li>Indien u een paginanaam heeft gewijzigd, ziet u in Simpele modus beide namen van de documenten terug. Ongeacht welke naam u aanklikt, u wordt doorgestuurd naar hetzelfde document, met alle bijbehorende revisies.</li>
</ul>

<h3>Ondersteuning</h3>
<p>Voor deze module is geen commerci&euml;le ondersteuning. Er zijn toch een aantal middelen beschikbaar die u op weg kunnen helpen:</p>
<ul>
<li>Voor de laatste versie van deze module, FAQs, het rapporteren van fouten of voor het kopen van commerci&euml;le ondersteuning, wordt u verzocht de homepage van SjG&#039;s modules te bezoeken via <a href=&quot;http://www.cmsmodules.com&quot;>CMSModules.com</a>.</li>
<li>Additionele discussies over deze module kunnen gevonden worden op de <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple Forums</a>.</li>
<li>De auteur, SjG, is vaak te vinden op het  <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a>.</li>
<li>Eveneens kunt u de autheur van deze module mailen.</li>  
</ul>
<p>Deze software is uitgebracht &quot;as is&quot; onder GPL. U wordt verzocht de volledige tekst van de licentie te lezen om de volledige disclaimer te bekijken.</p>

<h3>Copyright en Licentie</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href=&quot;mailto:sjg@cmsmodules.com&quot;><sjg@cmsmodules.com></a>. Alle rechten voorbehouden</p>
<p>Deze module is uitgebracht onder de <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. Voordat u deze module kunt gebruiken, dient u met deze bepalingen akkoord te gaan. Deze module is vertaald door <a href=&quot;http://amygdela.net&quot;>Jasper van der Meer</a>.</p>
';
$lang['utmz'] = '156861353.1192354719.171.8.utmccn=(referral)|utmcsr=wiki.cmsmadesimple.org|utmcct=/index.php/Special:Recentchanges|utmcmd=referral';
$lang['utma'] = '156861353.1581043522.1185108659.1193562970.1193580476.231';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>