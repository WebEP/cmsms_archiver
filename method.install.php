<?php
if (!isset($gCms)) exit;

$db = $this->GetDb();

$taboptarray = array();

$dict = NewDataDictionary($db);

// table schema description
$flds = "
archive_id I KEY,
item_id I,
item_type I,
item_subtype C(32),
item_name C(32),
item_hash C(32),
revision_number I,
archive_date DT";

$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_archiver_item_info", $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);
$db->CreateSequence(cms_db_prefix()."module_archiver_item_info_seq");

$flds = "
archive_id I KEY,
serialized_item X";

$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_archiver_item", $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);

$this->CreatePermission('Manage Archives', 'Manage Archives');
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));

$this->RegisterEvents();

?>