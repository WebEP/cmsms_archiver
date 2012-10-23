<?php
$lang['friendlyname'] = 'Archive Manager Modul';
$lang['postinstall'] = 'Post Install Message, e.g., Be sure to set &quot;Use Archive&quot; permissions to use this module!';
$lang['postuninstall'] = 'Modulen har tagits bort.';
$lang['uninstalled'] = 'Modulen har avinstallerats.';
$lang['installed'] = 'Modulversion %s &auml;r installerad.';
$lang['prefsupdated'] = 'Modulinst&auml;llningarna &auml;r uppdaterade.';
$lang['accessdenied'] = 'Ingen &aring;tkomst. Var god kolla din &aring;tkomst.';
$lang['error'] = 'Fel!';
$lang['upgraded'] = 'Modulen &auml;r uppgraderad till version %s.';
$lang['title_mod_prefs'] = 'Modulinst&auml;llningar';
$lang['content'] = 'Inneh&aring;llsobjekt';
$lang['htmlblob'] = 'HTML Blob';
$lang['stylesheet'] = 'Stilmall';
$lang['template'] = 'Mall';
$lang['prev'] = '< F&ouml;reg&aring;ende sida';
$lang['next'] = 'N&auml;sta sida >';
$lang['column_type'] = 'Typ';
$lang['column_name'] = 'Namn';
$lang['column_revision'] = 'Revision';
$lang['column_date'] = 'Datum';
$lang['column_action'] = 'Operation';
$lang['title_admin_panel'] = 'Archives Manager';
$lang['title_admin_prefs'] = 'Archive inst&auml;llningar';
$lang['title_admin_snaps'] = 'Snapshot Management';
$lang['listitems'] = 'Utvidgad Archive Vy';
$lang['simplelist'] = 'Enkel Archive Vy';
$lang['listsnapshots'] = '&Ouml;gonblicksbilder';
$lang['adminprefs'] = 'Archive inst&auml;llningar';
$lang['welcome_text'] = 'Please select an operation in the Archives.';
$lang['restore'] = '&Aring;terst&auml;ll till aktuellt';
$lang['preview'] = 'F&ouml;rhandsgrandska';
$lang['title_preview'] = 'F&ouml;rhandsgranskning av version %s';
$lang['title_save_snapshot'] = 'Spara en &ouml;gonblicksbild av din webbsida';
$lang['title_snapshot_name'] = '&Ouml;gonblicksbild namn';
$lang['title_snapshot_not_yet'] = '&Ouml;gonblicksbilder &auml;r inte implementerade &auml;n.';
$lang['title_filter_type'] = 'Visa';
$lang['title_filter_none'] = 'Alla Archive typer';
$lang['title_filter_content'] = 'Endast inneh&aring;ll';
$lang['title_filter_htmlblob'] = 'Only HTML Blobs';
$lang['title_filter_stylesheet'] = 'Endast stilmallar';
$lang['title_filter_template'] = 'Endast mall';
$lang['sort_desc'] = 'Sortera fallande';
$lang['sort_asc'] = 'Sortera stigande';
$lang['surerestore'] = '&Auml;r du s&auml;ker p&aring; att du vill &aring;terst&auml;lla till version %s?';
$lang['title_purge_count'] = 'Hur m&aring;nga versioner av varje sida ska beh&aring;llas?';
$lang['title_purge_unlimited'] = 'Beh&aring;ll obegr&auml;nsat antal versioner av varje sida';
$lang['title_purge_5_revisions'] = 'Beh&aring;ll de fem senaste versionerna av varje sida';
$lang['title_purge_10_revisions'] = 'Beh&aring;ll de tio senaste versionerna av varje sida';
$lang['title_purge_20_revisions'] = 'Beh&aring;ll de tjugo senaste versionerna av varje sida';
$lang['title_purge_50_revisions'] = 'Beh&aring;ll de femti senaste versionerna av varje sida';
$lang['title_purge_time'] = 'Hur l&auml;nge ska versioner beh&aring;llas?';
$lang['title_purge_forever'] = 'Beh&aring;ll versioner f&ouml;r alltid';
$lang['title_purge_1_days'] = 'Beh&aring;ll endast versioner fr&aring;n senaste dagen';
$lang['title_purge_7_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 7 senaste dagarna';
$lang['title_purge_14_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 14 senaste dagarna';
$lang['title_purge_30_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 30 senaste dagarna';
$lang['title_purge_90_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 90 senaste dagarna';
$lang['title_purge_180_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 180 senaste dagarna';
$lang['title_purge_365_days'] = 'Beh&aring;ll versioner endast fr&aring;n de 365 senaste dagarna';
$lang['title_date_format'] = 'Datumformat';
$lang['date_format_help'] = 'Date Formats are built using standard PHP &quot;date&quot; format codes. For a reference, please view <a href="http://us4.php.net/manual/en/function.date.php">http://us4.php.net/manual/en/function.date.php</a>. Remember to escape any characters you don&#039;t want interpreted as date format codes!<br />';
$lang['error_invalid_info'] = 'N&aring;got gick fel. F&ouml;rs&ouml;ker &aring;terst&auml;lla objekt av ok&auml;nd typ.';
$lang['restored_template'] = '&Aring;terst&auml;llde mall %s till version %s';
$lang['restored_content'] = '&Aring;terst&auml;llde sida %s till version %s';
$lang['restored_stylesheet'] = '&Aring;terst&auml;llde stilmall %s till version %s';
$lang['restored_htmlblob'] = 'Restored HTML Blob %s to revision %s';
$lang['title_purge_warning'] = 'Warning! If you select both a revision count and a revision time, the LESSER of those two values will win when the system decides whether or not to keep a revision.';
$lang['title_purge_warning2'] = 'Warning! Your selection takes effect the next time you edit a page. It only affects archives when their corresponding page is edited (so if you previously has selected &quot;Keep archives forever&quot; and then changed it to &quot;Keep most recent five revisions&quot;, your database will have all historical copies of every page until you edit a page; after editing the page, the database will only have five previous revisions.';
$lang['moddescription'] = 'Archive and restore Content, Style Sheets, HTML Blobs, and Templates.';
$lang['changelog'] = '<ul><li>Version 0.1 - 29 December 2005. Initial Release.</li>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module, once it&#039;s installed, keeps around a copy of every Content Page, HTML Blob, or Template as you edit it (stylesheets will soon be added to this list). It also provides an interface so that an administrator can restore anything in the archive to be the current state.</p>
<p>What this means is that you can edit various aspects of the site and then reverse those changes at a later date.</p>
<p>You can automatically purge archives either by revision count (i.e., keep only a set number of revisions of each page, HTML Blob, and Template) or by date (i.e., keep only revisions from the last n days). You do not have to purge archives, though, and can keep accumulating them until your database overflows.</p>
<h3>What Does this NOT do?</h3>
<p>This is not a true revision control system. Due to the data structures of CMS Made Simple, implementing a true RCS proved too much of a challenge for my puny intellect. This was the next best solution.</P>
<ul>
<li>Stylesheets are not yet supported, pending some changes to the core.</li>
<li>Not all metadata is archived. Attributes for content pages, such as hierarchy position, owner, active, show in menu, etc, are not archived. Similarly, stylesheet and template associations are not archived.</li>
<li>Snapshots (e.g., an archive of the exact state of the entire website at some instant in time) are not yet implemented, but probably will be eventually.</li>
<li>The system does not store deltas, but entire copies of each archive. This is wasteful of database space, but much easier to implement.</li>
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
module homepage at <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com"><sjg@cmsmodules.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['qca'] = 'P0-245748072-1251504180990';
$lang['utmz'] = '156861353.1269352899.20.14.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
$lang['utma'] = '156861353.2917280715391859000.1251504181.1269540149.1269891113.22';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>