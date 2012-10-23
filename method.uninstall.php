<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();

$dict = NewDataDictionary( $db );
$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_archiver_item" );
$dict->ExecuteSQLArray($sqlarray);
$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_archiver_item_info" );
$dict->ExecuteSQLArray($sqlarray);

$db->DropSequence( cms_db_prefix()."module_archiver_item_info_seq" );

$this->RemovePermission('Manage Archives');

$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));

?>