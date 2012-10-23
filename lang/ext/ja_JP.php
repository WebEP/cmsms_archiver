<?php
$lang['friendlyname'] = 'アーカイブ管理モジュール';
$lang['postinstall'] = 'Post Install Message, e.g., Be sure to set "Use Archive" permissions to use this module!';
$lang['postuninstall'] = 'モジュールが削除されました。';
$lang['uninstalled'] = 'モジュールがアンインストールされました。';
$lang['installed'] = 'モジュールバージョン%sがインストールされました。';
$lang['prefsupdated'] = 'モジュールプレファレンスが更新されました。';
$lang['accessdenied'] = 'アクセスが拒否されました。パーミッションを確認してください。';
$lang['error'] = 'エラー!';
$lang['upgraded'] = 'モジュールがバージョン%sへアップグレードされました。';
$lang['title_mod_prefs'] = 'モジュールプレファレンス';
$lang['content'] = 'コンテンツオブジェクト';
$lang['htmlblob'] = 'HTMLブロブ';
$lang['stylesheet'] = 'スタイルシート';
$lang['template'] = 'テンプレート';
$lang['prev'] = '< 前ページ';
$lang['next'] = '次ページ >';
$lang['column_type'] = 'タイプ';
$lang['column_name'] = '名前';
$lang['column_revision'] = '更新';
$lang['column_date'] = '日付';
$lang['column_action'] = '操作';
$lang['title_admin_panel'] = 'アーカイブ管理';
$lang['title_admin_prefs'] = 'アーカイブプレファレンス';
$lang['title_admin_snaps'] = 'Snapshot Management';
$lang['listitems'] = '拡張アーカイブ表示';
$lang['simplelist'] = '簡易アーカイブ表示';
$lang['listsnapshots'] = 'Snapshots';
$lang['adminprefs'] = 'アーカイブプレファレンス';
$lang['welcome_text'] = 'アーカイブでの操作を選択してください。';
$lang['restore'] = 'Restore to Current';
$lang['preview'] = 'プレビュー';
$lang['title_preview'] = '更新%sをプレビュー';
$lang['title_save_snapshot'] = 'Save a snapshot of your site';
$lang['title_snapshot_name'] = 'Snapshot name';
$lang['title_snapshot_not_yet'] = 'Snapshots are not yet implemented.';
$lang['title_filter_type'] = '表示';
$lang['title_filter_none'] = '全アーカイブタイプ';
$lang['title_filter_content'] = 'コンテンツのみ';
$lang['title_filter_htmlblob'] = 'HTMLブロブのみ';
$lang['title_filter_stylesheet'] = 'スタイルシートのみ';
$lang['title_filter_template'] = 'テンプレートのみ';
$lang['sort_desc'] = '降順で並び替え';
$lang['sort_asc'] = '昇順で並び替え';
$lang['surerestore'] = 'Are you sure you want to restore to revision %s?';
$lang['title_purge_count'] = 'How many revisions of each page should be kept?';
$lang['title_purge_unlimited'] = 'Keep unlimited revisions of each page';
$lang['title_purge_5_revisions'] = '各ページの更新の最近5件を保存';
$lang['title_purge_10_revisions'] = '各ページの更新の最近10件を保存';
$lang['title_purge_20_revisions'] = '各ページの更新の最近20件を保存';
$lang['title_purge_50_revisions'] = '各ページの更新の最近50件を保存';
$lang['title_purge_time'] = 'How long should revisions be kept?';
$lang['title_purge_forever'] = 'Keep revisions forever';
$lang['title_purge_1_days'] = '最近1日間の更新を保存';
$lang['title_purge_7_days'] = '最近7日間の更新を保存';
$lang['title_purge_14_days'] = '最近14日間の更新を保存';
$lang['title_purge_30_days'] = '最近30日間の更新を保存';
$lang['title_purge_90_days'] = '最近90日間の更新を保存';
$lang['title_purge_180_days'] = '最近180日間の更新を保存';
$lang['title_purge_365_days'] = '最近365日間の更新を保存';
$lang['title_date_format'] = '日付フォーマット';
$lang['date_format_help'] = '日付フォーマットは標準PHP "日付"フォーマットコードを使用しています。　<a href="http://us4.php.net/manual/en/function.date.php">http://us4.php.net/manual/en/function.date.php</a>を参照してください。 日付フォーマットとしたくない文字は必ず避けてください!<br />';
$lang['error_invalid_info'] = 'Something went wrong. Trying to restore object of unknown type.';
$lang['restored_template'] = 'Restored template %s to revision %s';
$lang['restored_content'] = 'Restored page %s to revision %s';
$lang['restored_stylesheet'] = 'Restored stylesheet %s to revision %s';
$lang['restored_htmlblob'] = 'Restored HTML Blob %s to revision %s';
$lang['title_purge_warning'] = '警告!更新回数と更新時間の両方を選択すると、システムは値の小さいほうの間隔で更新を保存します。';
$lang['title_purge_warning2'] = 'Warning! Your selection takes effect the next time you edit a page. It only affects archives when their corresponding page is edited (so if you previously has selected "Keep archives forever" and then changed it to "Keep most recent five revisions", your database will have all historical copies of every page until you edit a page; after editing the page, the database will only have five previous revisions.';
$lang['moddescription'] = 'アーカイブ、修復コンテンツ、スタイルシート、HTMLブロブ、テンプレート。';
$lang['changelog'] = '<ul><li>バージョン0.1 - 29 December 2005. 初回リリース</li>';
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