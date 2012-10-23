<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();

$current_version = $oldversion;
switch($current_version)
{
	case "0.1":
	$dict = NewDataDictionary( $db );
	$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_archiver_item_types" );
	$dict->ExecuteSQLArray($sqlarray);
	break;
}
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded', $this->GetVersion()));

?>