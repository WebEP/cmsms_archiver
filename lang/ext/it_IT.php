<?php
$lang['friendlyname'] = 'Archive Manager';
$lang['postinstall'] = 'Modulo installato, accertatevi di impostare l&#039;autorizzazione &quot;Usa Archivio&quot; per utilizzare questo modulo!';
$lang['postuninstall'] = 'Modulo Rimosso';
$lang['uninstalled'] = 'Module Disinstallato';
$lang['installed'] = 'Versione %s del modulo installata.';
$lang['prefsupdated'] = 'Preferenze del modulo aggiornate.';
$lang['accessdenied'] = 'Accesso Negato. Verificate le vostre autorizzazioni.';
$lang['error'] = 'Errore!';
$lang['upgraded'] = 'Modulo aggiornato alla versione %s.';
$lang['title_mod_prefs'] = 'Preferenze del modulo';
$lang['content'] = 'Oggetto Contenuto';
$lang['htmlblob'] = 'Blocco HTML';
$lang['stylesheet'] = 'Foglio di stile';
$lang['template'] = 'Modello';
$lang['prev'] = '< Pagina Precedente';
$lang['next'] = 'Pagina Successiva >';
$lang['column_type'] = 'Tipo';
$lang['column_name'] = 'Nome';
$lang['column_revision'] = 'Revisione';
$lang['column_date'] = 'Data';
$lang['column_action'] = 'Operazione';
$lang['title_admin_panel'] = 'Gestione Archivi';
$lang['title_admin_prefs'] = 'Preferenze di archiviazione';
$lang['title_admin_snaps'] = 'Gestione Immagini di stato (Snapshot)';
$lang['listitems'] = 'Vista Archivio Estesa';
$lang['simplelist'] = 'Vista Archivio Semplice';
$lang['listsnapshots'] = 'Immagini di stato (Snapshots)';
$lang['adminprefs'] = 'Preferenze di archiviazione';
$lang['welcome_text'] = 'Selezionate un operazione negli archivi.';
$lang['restore'] = 'Ripristina al Corrente';
$lang['preview'] = 'Anteprima';
$lang['title_preview'] = 'Anteprima della revisione %s';
$lang['title_save_snapshot'] = 'Salva un&#039;immagine di stato (Snapshot) del sito';
$lang['title_snapshot_name'] = 'Nome Immagine di stato (Snapshot)';
$lang['title_snapshot_not_yet'] = 'Immagini di stato (Snapshot) non implementate.';
$lang['title_filter_type'] = 'Mostra';
$lang['title_filter_none'] = 'Tutti i tipi di Archivio';
$lang['title_filter_content'] = 'Solo il Contenuto';
$lang['title_filter_htmlblob'] = 'Solo Blocchi HTML';
$lang['title_filter_stylesheet'] = 'Solo Fogli di Stile';
$lang['title_filter_template'] = 'Solo Templates';
$lang['sort_desc'] = 'Ordine Discendente';
$lang['sort_asc'] = 'Ordine Ascendente';
$lang['surerestore'] = 'Siete sicuri di volere ripristinare la revisione %s?';
$lang['title_purge_count'] = 'Quante revisioni di ogni pagina devono essere conservate?';
$lang['title_purge_unlimited'] = 'Conserva revisioni illimitate di ogni pagina';
$lang['title_purge_5_revisions'] = 'Conserva le ultime cinque revisioni di ogni pagina';
$lang['title_purge_10_revisions'] = 'Conserva le ultime dieci revisioni di ogni pagina';
$lang['title_purge_20_revisions'] = 'Conserva le ultime venti revisioni di ogni pagina';
$lang['title_purge_50_revisions'] = 'Conserva le ultime cinquanta revisioni di ogni pagina';
$lang['title_purge_time'] = 'Per quanto tempo conservare le revisioni?';
$lang['title_purge_forever'] = 'Conserva le revisioni per sempre';
$lang['title_purge_1_days'] = 'Conserva solo le revisioni di ieri';
$lang['title_purge_7_days'] = 'Conserva solo revisioni degli ultimi 7 giorni';
$lang['title_purge_14_days'] = 'Conserva solo revisioni degli ultimi 14 giorni';
$lang['title_purge_30_days'] = 'Conserva solo revisioni degli ultimi 30 giorni';
$lang['title_purge_90_days'] = 'Conserva solo revisioni degli ultimi 90 giorni';
$lang['title_purge_180_days'] = 'Conserva solo revisioni degli ultimi 180 giorni';
$lang['title_purge_365_days'] = 'Conserva solo revisioni degli ultimi 365 giorni';
$lang['title_date_format'] = 'Formato della Data';
$lang['date_format_help'] = 'I Formati della Data vengono creati utilizzando la funzione PHP standard &quot;date&quot;. Per la guida fate riferimento a <a href="http://us4.php.net/manual/en/function.date.php">http://us4.php.net/manual/en/function.date.php</a>. Ricordatevi di utilizzare backslash prima di ogni carattere che non volete venga interpretato come codice del formato della data!<br />';
$lang['error_invalid_info'] = 'Qualcosa non &egrave; funzionato. Si &egrave; cercato di ripristinare un oggetto di tipo sconosciuto.';
$lang['restored_template'] = 'Ripristinato il template %s alla revisione %s';
$lang['restored_content'] = 'Ripristinata la pagina %s alla revisione %s';
$lang['restored_stylesheet'] = 'Ripristinato il foglio di stile %s alla revisione %s';
$lang['restored_htmlblob'] = 'Ripristinato il blocco HTML %s alla revisione %s';
$lang['title_purge_warning'] = 'Attenzione! Se selezionate contemporaneamente una revisione per numero o per tempo, vincer&agrave; il MINORE dei due valori quando il sistema decide se mantenere o meno una revisione.';
$lang['title_purge_warning2'] = 'Attenzione! La vostra selezione sar&agrave; effettiva la prossima volta che modificate una pagina. Ha effetto solo sugli archivi quando la corrispondente pagina &egrave; modificata (cos&igrave; se precedentemente era selezionato &quot;Conserva le revisioni per sempre&quot; e cambiate a &quot;Conserva le ultime cinque revisioni di ogni pagina&quot;, nel database avrete tutte le copie di ogni pagina fino alla modifica di una pagina; dopo la modifica, il database avr&agrave; solo le ultima cinque revisioni.';
$lang['moddescription'] = 'Archivia e ripristina Contenuto, Fogli di Stile, Blocchi HTML e Templates.';
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
$lang['utma'] = '156861353.568727937.1236340171.1239004875.1239006902.15';
$lang['utmz'] = '156861353.1239004875.14.14.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>