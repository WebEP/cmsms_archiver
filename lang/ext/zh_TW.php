<?php
$lang['friendlyname'] = '模組存檔管理';
$lang['postinstall'] = '公佈安裝消息，例如，務必設定「使用檔案」許可使用本模組！';
$lang['postuninstall'] = '移除模組';
$lang['uninstalled'] = '模組解除安裝.';
$lang['installed'] = '模組版本 %s 己安裝.';
$lang['prefsupdated'] = '模組設定更新.';
$lang['accessdenied'] = '無使用權。請檢查你的權限。';
$lang['error'] = '錯誤!';
$lang['upgraded'] = '模組升級至版本 %s.';
$lang['title_mod_prefs'] = '模組設定';
$lang['content'] = '內容 Object';
$lang['htmlblob'] = 'HTML Blob';
$lang['stylesheet'] = '樣式表';
$lang['template'] = '模板';
$lang['prev'] = '< 上一頁';
$lang['next'] = '下一頁 >';
$lang['column_type'] = '類型';
$lang['column_name'] = '名稱';
$lang['column_revision'] = '版本';
$lang['column_date'] = '日期';
$lang['column_action'] = '操作';
$lang['title_admin_panel'] = '存檔管理';
$lang['title_admin_prefs'] = '存檔設定';
$lang['title_admin_snaps'] = '快照管理';
$lang['listitems'] = '顯示展開存檔';
$lang['simplelist'] = '顯示簡單的存檔';
$lang['listsnapshots'] = '快照';
$lang['adminprefs'] = '存檔設定';
$lang['welcome_text'] = '請在存檔中選擇操作。';
$lang['restore'] = '恢復到現有';
$lang['preview'] = '預覽';
$lang['title_preview'] = 'Preview of revision %s';
$lang['title_save_snapshot'] = '保存快照你的網站';
$lang['title_snapshot_name'] = '快照名稱';
$lang['title_snapshot_not_yet'] = '快照還沒有被執行。';
$lang['title_filter_type'] = '顯示';
$lang['title_filter_none'] = '存檔所有類型';
$lang['title_filter_content'] = '只有內容';
$lang['title_filter_htmlblob'] = 'Only HTML Blobs';
$lang['title_filter_stylesheet'] = '只有樣式表';
$lang['title_filter_template'] = '只有模板';
$lang['sort_desc'] = 'Sort Descending';
$lang['sort_asc'] = 'Sort Ascending';
$lang['surerestore'] = 'Are you sure you want to restore to revision %s?';
$lang['title_purge_count'] = 'How many revisions of each page should be kept?';
$lang['title_purge_unlimited'] = 'Keep unlimited revisions of each page';
$lang['title_purge_5_revisions'] = 'Keep most recent five revisions of each page';
$lang['title_purge_10_revisions'] = 'Keep most recent ten revisions of each page';
$lang['title_purge_20_revisions'] = 'Keep most recent twenty revisions of each page';
$lang['title_purge_50_revisions'] = 'Keep most recent fifty revisions of each page';
$lang['title_purge_time'] = 'How long should revisions be kept?';
$lang['title_purge_forever'] = 'Keep revisions forever';
$lang['title_purge_1_days'] = 'Keep revisions only from the last day';
$lang['title_purge_7_days'] = 'Keep revisions only from the last 7 days';
$lang['title_purge_14_days'] = 'Keep revisions only from the last 14 days';
$lang['title_purge_30_days'] = 'Keep revisions only from the last 30 days';
$lang['title_purge_90_days'] = 'Keep revisions only from the last 90 days';
$lang['title_purge_180_days'] = 'Keep revisions only from the last 180 days';
$lang['title_purge_365_days'] = 'Keep revisions only from the last 365 days';
$lang['title_date_format'] = 'Date Format';
$lang['date_format_help'] = 'Date Formats are built using standard PHP "date" format codes. For a reference, please view <a href="http://us4.php.net/manual/en/function.date.php">http://us4.php.net/manual/en/function.date.php</a>. Remember to escape any characters you don\'t want interpreted as date format codes!<br />';
$lang['error_invalid_info'] = 'Something went wrong. Trying to restore object of unknown type.';
$lang['restored_template'] = 'Restored template %s to revision %s';
$lang['restored_content'] = 'Restored page %s to revision %s';
$lang['restored_stylesheet'] = 'Restored stylesheet %s to revision %s';
$lang['restored_htmlblob'] = 'Restored HTML Blob %s to revision %s';
$lang['title_purge_warning'] = 'Warning! If you select both a revision count and a revision time, the LESSER of those two values will win when the system decides whether or not to keep a revision.';
$lang['title_purge_warning2'] = 'Warning! Your selection takes effect the next time you edit a page. It only affects archives when their corresponding page is edited (so if you previously has selected "Keep archives forever" and then changed it to "Keep most recent five revisions", your database will have all historical copies of every page until you edit a page; after editing the page, the database will only have five previous revisions.';
$lang['moddescription'] = 'Archive and restore Content, Style Sheets, HTML Blobs, and Templates.';
$lang['changelog'] = '<ul><li>Version 0.1 - 29 December 2005. Initial Release.</li>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module, once it\'s installed, keeps around a copy of every Content Page, HTML Blob, or Template as you edit it (stylesheets will soon be added to this list). It also provides an interface so that an administrator can restore anything in the archive to be the current state.</p>
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
<p>After installation, the system will automatically start saving changes into the archives. You don\'t have to do anything special.</p>
<h4>Expiration of Archives</h4>
<p>Any admin who has "Manage Archives" permission may go into the archive admin, and set Archive expiration parameters. in the "Archive Preferences" page. This should be self-explanatory. Keep in mind that the <strong>shorter</strong> of the expiration parameters you set will be used -- if you set "Keep Revisions Forever" in the time-based expiration, but only "keep the most recent 5 revisions" from the revision count expiration, you will only keep the five most recent.</p>
<h4>Restoring from Archives</h4>
<p>Any admin who has "Manage Archives" permissions can view the revision histories. There are two interfaces, simple and advanced. Simple lists each extant object in the archive, which you can sort by name or type. The advanced interface shows all revisions of all objects in the archive; you can sort this list by name, type, date, or revision number.</p>
<p>Typically, you\'ll find the object in the archive via the simple interface. Using the pulldown menu, you can filter to show only one type of archive object (Content, Template, HTML Blob, or Stylesheet). Clicking on the item\'s name will take you to that object\'s history page. You can then preview the object (in the case of Content) by clicking on the preview icon.</p>
<P>Restore an item by clicking on the "restore" icon on the far right. That\'s all there is to it!</p>
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
<li>Restoring Content creates an additional revision. So if you have versions 1 - 4, and you restore to version 1, you\'ll get an additional copy of revision 1 called "revision 5" thrown in to your archive.</li>
<li>If you have changed the name of a Page, it will show up under both names in the Simple Archive View. Clicking on either name will show you all revisions of that page, without regard to the name.</li>
</ul>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit SjG\'s
module homepage at <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright © 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com"><sjg@cmsmodules.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
?>