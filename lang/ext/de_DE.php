<?php
$lang['friendlyname'] = 'ArchivManager-Modul';
$lang['postinstall'] = 'Stellen Sie sicher, dass zur Verwendung dieses Moduls die Berechtigung &quot;Use Archive&quot; gesetzt wurde!';
$lang['postuninstall'] = 'Modul entfernt';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['prefsupdated'] = 'Moduleinstellungen aktualisiert.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['title_mod_prefs'] = 'Moduleinstellungen';
$lang['content'] = 'Inhalts-Objekt';
$lang['htmlblob'] = 'HTML-Abschnitt';
$lang['stylesheet'] = 'Stylesheet ';
$lang['template'] = 'Vorlage';
$lang['prev'] = '< vorherige Seite';
$lang['next'] = 'n&auml;chste Seite >';
$lang['column_type'] = 'Typ';
$lang['column_name'] = 'Name ';
$lang['column_revision'] = 'Revision ';
$lang['column_date'] = 'Datum';
$lang['column_action'] = 'Funktion';
$lang['title_admin_panel'] = 'Archiv-Verwaltung';
$lang['title_admin_prefs'] = 'Archiv-Einstellungen';
$lang['title_admin_snaps'] = 'Schnappschuss-Verwaltung';
$lang['listitems'] = 'Erweiterte Archivansicht';
$lang['simplelist'] = 'Einfache Archivansicht';
$lang['listsnapshots'] = 'Schnappsch&uuml;sse';
$lang['adminprefs'] = 'Archiv-Einstellungen';
$lang['welcome_text'] = 'Bitte w&auml;hlen Sie im Archiv eine Funktion.';
$lang['restore'] = 'Auf das aktuelle Archiv zur&uuml;cksetzen';
$lang['preview'] = 'Vorschau';
$lang['title_preview'] = 'Vorschau der Revision %s';
$lang['title_save_snapshot'] = 'Einen Schnappschuss Ihrer Seite speichern';
$lang['title_snapshot_name'] = 'Name des Schnappschuss';
$lang['title_snapshot_not_yet'] = 'Schnappsch&uuml;sse sind noch nicht implementiert.';
$lang['title_filter_type'] = 'Anzeigen';
$lang['title_filter_none'] = 'Alle Archivtypen';
$lang['title_filter_content'] = 'Nur Inhalte';
$lang['title_filter_htmlblob'] = 'Nur HTML-Blobs';
$lang['title_filter_stylesheet'] = 'Nur Stylesheets';
$lang['title_filter_template'] = 'Nur Templates';
$lang['sort_desc'] = 'Absteigend sortieren';
$lang['sort_asc'] = 'Aufsteigend sortieren';
$lang['surerestore'] = 'Sind Sie sicher, dass Sie Ihre Seite auf die Revision %s zur&uuml;cksetzen wollen?';
$lang['title_purge_count'] = 'Wieviele Revisionen sollen von jeder Seite behalten werden?';
$lang['title_purge_unlimited'] = 'Alle Revisionen jeder Seite behalten';
$lang['title_purge_5_revisions'] = 'Die letzten f&uuml;nf Revisionen jeder Seite behalten';
$lang['title_purge_10_revisions'] = 'Die letzten zehn Revisionen jeder Seite behalten';
$lang['title_purge_20_revisions'] = 'Die letzten zwanzig Revisionen jeder Seite behalten';
$lang['title_purge_50_revisions'] = 'Die letzten f&uuml;nfzig Revisionen jeder Seite behalten';
$lang['title_purge_time'] = 'Wie lange sollen die Revisionen behalten werden?';
$lang['title_purge_forever'] = 'Revisionen f&uuml;r immer behalten';
$lang['title_purge_1_days'] = 'Nur Revisionen vom letzten Tag behalten';
$lang['title_purge_7_days'] = 'Nur Revisionen der letzten 7 Tage behalten';
$lang['title_purge_14_days'] = 'Nur Revisionen der letzten 14 Tage behalten';
$lang['title_purge_30_days'] = 'Nur Revisionen der letzten 30 Tage behalten';
$lang['title_purge_90_days'] = 'Nur Revisionen der letzten 90 Tage behalten';
$lang['title_purge_180_days'] = 'Nur Revisionen der letzten 180 Tage behalten';
$lang['title_purge_365_days'] = 'Nur Revisionen der letzten 365 Tage behalten';
$lang['title_date_format'] = 'Datumsformat';
$lang['date_format_help'] = 'Das Datumsformat entspricht dem Standard-Datumsformat von PHP. F&uuml;r weitere Informationen finden Sie unter <a href="http://us4.php.net/manual/en/function.date.php">http://us4.php.net/manual/en/function.date.php</a>. Bitte denken Sie daran, dass jedes Zeichen, welches nicht als Code f&uuml;r das Datumsformat interpretiert werden soll,  entfernt werden muss!<br />';
$lang['error_invalid_info'] = 'Irgendwas ging schief. Es wurde versucht, ein Objekt von unbekanntem Typ wiederherzustellen.';
$lang['restored_template'] = 'Template %s auf Revision %s zur&uuml;ckgesetzt';
$lang['restored_content'] = 'Seite %s auf Revision %s zur&uuml;ckgesetzt';
$lang['restored_stylesheet'] = 'Stylesheet %s auf Revision %s zur&uuml;ckgesetzt';
$lang['restored_htmlblob'] = 'HTML-Abschnitt %s auf Revision %s zur&uuml;ckgesetzt';
$lang['title_purge_warning'] = 'Warnung! Wenn Sie sowohl einen Revisionsz&auml;hler als auch eine Revisionszeit gew&auml;hlt haben, wird der kleinere der beiden Werte gewinnen, wenn das System entscheiden muss, ob es eine Revision beh&auml;lt oder nicht.';
$lang['title_purge_warning2'] = 'Warnung! Ihre Auswahl wirkt erst beim n&auml;chsten Bearbeiten einer Seite, d.h. das Archiv wird erst ver&auml;ndert, wenn Sie die jeweilige Seite bearbeiten. Wenn Sie zum Beispiel zun&auml;chst &quot;Revisionen f&uuml;r immer behalten&quot; ausgew&auml;hlt hatten und dann auf &quot;Die letzten f&uuml;nf Revisionen jeder Seite behalten&quot; wechseln, enth&auml;lt Ihre Datenbank alle jemals erstellten Versionen von jeder Seite. Sobald Sie jedoch eine Seite bearbeitet haben, wird die Datenbank nur f&uuml;nf Revisionen enthalten.';
$lang['moddescription'] = 'Archivierung und Wiederherstellung von Inhalten, Stylesheets, HTML-Abschnitten und Templates';
$lang['changelog'] = '<ul>
<li>Version 0.2.3 - July 2009. Fixed preview of Content archives.</li>
<li>Version 0.2.2 - July 2009. Fix for restoring CSS and Templates. Now under 1.6.</li>
<li>Version 0.2.1 - March 2009. Bug fixes by Elijah, SjG, and Alby. Works under 1.5.3.</li>
<li>Version 0.2 - December 2006. Upgraded by Ted to work with CMSMS 1.x</li>
<li>Version 0.1 - 29 December 2005. Initial Release.</li>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Wenn das Modul einmal installiert ist, erstellt es von jeder Inhaltsseite, HTML-Abschnitt oder Templates, welches Sie bearbeiten, eine Kopie (Stylesheets werden bald folgen). Au&szlig;erdem kann der Administrator jeden Inhalt des Archivs als aktuell reaktivieren.</p>
<p>Das bedeutet, dass Sie verschiedene Seiten an Ihrer Seite &auml;ndern und diese zu einem sp&auml;teren Zeitpunkt wieder r&uuml;ckg&auml;ngig machen k&ouml;nnen.</p>
<p>You can automatically purge archives either by revision count (i.e., keep only a set number of revisions of each page, HTML Blob, and Template) or by date (i.e., keep only revisions from the last n days). You do not have to purge archives, though, and can keep accumulating them until your database overflows.</p>
<h3>Was macht dieses Modul NICHT?</h3>
<p>Es ist kein echtes Revision Control System. Aufgrund der Datenstrukturen von CMS made simple erwies sich die Implementierung eines echten RCS f&uuml;r meine F&auml;higkeiten als zu schwierig. Dies war die n&auml;chstbeste L&ouml;sung.</P>
<ul>
<li>Stylesheets werden derzeit noch nicht unterst&uuml;tzt. Dies ist von einigen &Auml;nderungen im System abh&auml;ngig.</li>
<li>Not all metadata is archived. Attributes for content pages, such as hierarchy position, owner, active, show in menu, etc, are not archived. Similarly, stylesheet and template associations are not archived.</li>
<li>Snapshots (e.g., an archive of the exact state of the entire website at some instant in time) are not yet implemented, but probably will be eventually.</li>
<li>Das System speichert nicht die Unterschiede, sondern vollst&auml;ndige Kopien eines jeden Archivs. Dies ben&ouml;tigt zwar mehr Speicher in der Datenbank, ist aber viel einfacher zu implementieren.</li>
</ul>
<h3>How Do I Use It</h3>
<h4>General</h4>
<p>After installation, the system will automatically start saving changes into the archives. You don&#039;t have to do anything special.</p>
<h4>Expiration of Archives</h4>
<p>Any admin who has &quot;Manage Archives&quot; permission may go into the archive admin, and set Archive expiration parameters. in the &quot;Archive Preferences&quot; page. This should be self-explanatory. Keep in mind that the <strong>shorter</strong> of the expiration parameters you set will be used -- if you set &quot;Keep Revisions Forever&quot; in the time-based expiration, but only &quot;keep the most recent 5 revisions&quot; from the revision count expiration, you will only keep the five most recent.</p>
<h4>Restoring from Archives</h4>
<p>Any admin who has &quot;Manage Archives&quot; permissions can view the revision histories. There are two interfaces, simple and advanced. Simple lists each extant object in the archive, which you can sort by name or type. The advanced interface shows all revisions of all objects in the archive; you can sort this list by name, type, date, or revision number.</p>
<p>Typically, you&#039;ll find the object in the archive via the simple interface. Using the pulldown menu, you can filter to show only one type of archive object (Content, Template, HTML Blob, or Stylesheet). Clicking on the item&#039;s name will take you to that object&#039;s history page. You can then preview the object (in the case of Content) by clicking on the preview icon.</p>
<P>Restore an item by clicking on the &quot;restore&quot; icon on the far right. That&#039;s all there is to it!</p>
<h3>Planned Improvements</h3>
<ul>
<li>Implementing Stylesheet archives.</li>
<li>Preview of Templates?</li>
<li>Preview of HTML Blobs?</li>
<li>Snapshots (e.g., an archive of the exact state of the entire website at some instant in time) .</li>
<li>Better/more efficient storage? Store deltas?</li>
</ul>
<h3>Features That Might Be Misinterpreted as Bugs</h3>
<ul>
<li>Restoring Content creates an additional revision. So if you have versions 1 - 4, and you restore to version 1, you&#039;ll get an additional copy of revision 1 called &quot;revision 5&quot; thrown in to your archive.</li>
<li>If you have changed the name of a Page, it will show up under both names in the Simple Archive View. Clicking on either name will show you all revisions of that page, without regard to the name.</li>
</ul>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit SjG&#039;s
module homepage at <a href=&amp;quot;http://www.cmsmodules.com&amp;quot;>CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=&amp;quot;http://forum.cmsmadesimple.org&amp;quot;>CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href=&amp;quot;irc://irc.freenode.net/#cms&amp;quot;>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href=&amp;quot;mailto:sjg@cmsmodules.com&amp;quot;><sjg@cmsmodules.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&amp;quot;http://www.gnu.org/licenses/licenses.html#GPL&amp;quot;>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['qca'] = 'P0-1909116003-1254132235568';
$lang['utma'] = '156861353.858097627.1254132339.1254132339.1254136190.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1254136190.2.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
?>