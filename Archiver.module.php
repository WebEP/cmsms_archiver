<?php
#-------------------------------------------------------------------------
# Module: Archiver - keep/roll-back historical versions of Content
# Version: 0.2, Ted Kulp, SjG
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2004-6 by Ted Kulp (ted@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------

class Archiver extends CMSModule
{
	var $TYPE_CONTENT = 1;
	var $TYPE_HTMLBLOB = 2;
	var $TYPE_STYLESHEET = 3;
	var $TYPE_TEMPLATE = 4;

	var $TYPE_NAMES;

	function GetName()
	{
		return 'Archiver';
	}

	function GetFriendlyName()
	{
		return $this->Lang('friendlyname');
	}

	function GetVersion()
	{
		return '0.2.4';
	}

	function GetHelp()
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'SjG';
	}

	function GetAuthorEmail()
	{
		return 'sjg@cmsmodules.com';
	}

	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}

	function IsPluginModule()
	{
		return false;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetAdminSection()
	{
		return 'content';
	}

	function MinimumCMSVersion()
	{
		return '1.9';
	}

	function GetAdminDescription()
	{
		return $this->Lang('moddescription');
	}

	function VisibleToAdminUser()
	{
		return $this->CheckPermission('Manage Archives');
	}

	function GetDependencies()
	{
		return array();
	}

	function InstallPostMessage()
	{
		return $this->Lang('postinstall');
	}

	function UninstallPostMessage()
	{
		return $this->Lang('postuninstall');
	}

	function DoAction($action, $id, &$params, $return_id=-1)
	{
		$this->DisplayAdminNav($id, $params, $return_id);
		$this->TYPE_NAMES=array($this->TYPE_CONTENT=>$this->Lang('content'),
		$this->TYPE_HTMLBLOB => $this->Lang('htmlblob'),
		$this->TYPE_STYLESHEET => $this->Lang('stylesheet'),
		$this->TYPE_TEMPLATE =>$this->Lang('template'));

		switch ($action)
		{
			case 'defaultadmin':
			case 'simplelist':
			{
				if ($this->CheckAccess())
				{
					$this->DisplayArchivesSimple($id, $params, $return_id);
				}
				break;
			}
			case 'adminprefs':
			{
				// only let people access module preferences if they have permission
				if ($this->CheckAccess())
				{
					$this->DisplayAdminPrefs($id, $params, $return_id);
				}
				break;
			}
			case 'listsnapshots':
			{
				if ($this->CheckAccess())
				{
					$this->DisplaySnapshots($id, $params, $return_id);
				}
				break;
			}
			case 'preview':
			case 'listitems':
			{
				if ($this->CheckAccess())
				{
					$this->DisplayArchives($id, $params, $return_id);
				}
				break;
			}
			case 'save_admin_prefs':
			{
				// only let people save module preferences if they have permission
				if ($this->CheckAccess())
				{
					$this->SaveAdminPrefs($id, $params, $return_id);
				}
				break;
			}
			case 'restore':
			{
				if ($this->CheckAccess())
				{
					$this->RestoreObject($id, $params, $return_id);
				}
				break;
			}            
			default:
			{
				if ($this->CheckAccess())
				{
					$this->DisplayAdminPanel($id, $params, $return_id);
				}
				break;
			}
		}
	}

	function CheckAccess($perm = 'Manage Archives')
	{
		if (! $this->CheckPermission($perm))
		{
			$this->DisplayErrorPage($id, $params, $returnid, $this->Lang('accessdenied'));
			return false;
		}
		return true;
	}

	function RegisterEvents()
	{
		$this->AddEventHandler( 'Core', 'ContentEditPost', false );
		$this->AddEventHandler( 'Core', 'ContentEditPre', false );
		$this->AddEventHandler( 'Core', 'AddTemplatePost', false );
		$this->AddEventHandler( 'Core', 'EditTemplatePre', false );
		$this->AddEventHandler( 'Core', 'EditStylesheetPre', false );
		$this->AddEventHandler( 'Core', 'AddStylesheetPost', false );
		$this->AddEventHandler( 'Core', 'EditGlobalContentPre', false );
		$this->AddEventHandler( 'Core', 'AddGlobalContentPost', false );
	}
	
	function DoEvent( $originator, $eventname, &$params )
	{
		if ($originator == 'Core')
		{
			switch ($eventname)
			{
				case 'ContentEditPost':
					$content =& $params['content'];
					$this->ArchiveObject($content, $this->TYPE_CONTENT, true);
					break;
				case 'ContentEditPre':
					$content =& $params['content'];
					if ($content->Id() != -1)
					{
						$this->ArchiveObject($content,$this->TYPE_CONTENT);
					}
					break;
				case 'AddTemplatePost':
					$template =& $params['template'];
					$this->ArchiveObject($template, $this->TYPE_TEMPLATE);
					break;
				case 'EditTemplatePre':
					$template =& $params['template'];
					$this->ArchiveObject($template, $this->TYPE_TEMPLATE);
					break;
				case 'EditStylesheetPre':
					$stylesheet =& $params['stylesheet'];
					$this->ArchiveObject($stylesheet, $this->TYPE_STYLESHEET);
					break;
				case 'AddStylesheetPost':
					$stylesheet =& $params['stylesheet'];
					$this->ArchiveObject($stylesheet, $this->TYPE_STYLESHEET);
					break;
				case 'EditGlobalContentPre':
					$global_content =& $params['global_content'];
					$this->ArchiveObject($global_content,$this->TYPE_HTMLBLOB);
					break;
				case 'AddGlobalContentPost':
					$global_content =& $params['global_content'];
					$this->ArchiveObject($global_content,$this->TYPE_HTMLBLOB);
					break;
			}
		}
	}

	function ArchiveObject(&$object, $objectType, $onlyIfNew=false)
	{
		$gCms = cmsms();
		$db = $this->GetDb();
		$changed = false;
		$revision_number = 1;
		$objectId = $object->Id();
		if ($objectId == -1)
		{
			return;
		}
		$objectName = $object->Name();
		$query = "SELECT item_hash, revision_number FROM " . cms_db_prefix() .
			"module_archiver_item_info where item_id=? and item_type=? ORDER BY archive_date DESC";
		$rs = $db->SelectLimit($query, 1, 0, array($objectId, $objectType));
		$hash = md5(SerializeObject($object));
		if($rs->RecordCount() == 0)
		{
			// no record exists yet, so we'll store one.
			$changed = true;
		}
		else if (!$onlyIfNew)
		{
			$result = $rs->FetchRow();
			if ($result['item_hash'] != $hash)
			{
				$changed = true;
				$revision_number = $result['revision_number'] + 1;
			}
		}
		if ($changed)
		{
			$subtype = '';
			if ($objectType == $this->TYPE_CONTENT)
			{
				$subtype = $object->Type();
			}
			$archive_id = $db->GenID(cms_db_prefix() . 'module_archive_item_info_seq');
			$query = "INSERT INTO " . cms_db_prefix() . "module_archiver_item_info (archive_id, item_id, item_hash, item_type, item_subtype, item_name, revision_number, archive_date) VALUES (?,?,?,?,?,?,?,".$db->DBTimeStamp(time()).")";

			$db->Execute($query, array($archive_id, $objectId, $hash, $objectType, $subtype, $objectName, $revision_number));
			$query = "INSERT INTO ".cms_db_prefix()."module_archiver_item (archive_id, serialized_item) VALUES (?,?)";
			$db->Execute($query, array($archive_id, SerializeObject($object)));
		}

		$this->PurgeArchive($objectId, $objectType);
	}

	function PurgeArchive($objectID, $objectType)
	{
		$gCms = cmsms();
		$db = $this->GetDb();
		$pc = $this->GetPreference('purge_count', '-1');
		$pt = $this->GetPreference('purge_time', '-1');
		$purge_ids = array();
		if ($pc != -1)
		{
			// purge old archives by count
			$query = 'SELECT max(revision_number) as toprev FROM ' . cms_db_prefix() .
				'module_archiver_item_info where item_id=? and item_type=?';
			$dbresult = $db->GetOne($query, array($objectID, $objectType));
			if ($dbresult !== false)
			{
				$revs_to_purge = $dbresult - $pc + 1;
				$purgequery = 'SELECT archive_id FROM ' . cms_db_prefix() .
					'module_archiver_item_info WHERE revision_number < ? AND item_id=? AND item_type=?';
				$subresult = $db->Execute($purgequery, array($revs_to_purge, $objectID, $objectType));
				while ($subresult !== false && $thisOne = $subresult->FetchRow())
				{
					// weird push, because we're using ADODB's bulk execute
					array_push($purge_ids, array($thisOne['archive_id']));
				}
			}
		}
		if ($pt != -1)
		{
			// purge old archives by time
			$cutoff = mktime(0, 0, 0, date("m"), date("d")-$pt, date("Y"));
			$query = 'SELECT archive_id FROM ' . cms_db_prefix() .
				'module_archiver_item_info where item_id=? and item_type=? and archive_date<' .
				$db->DBTimeStamp($cutoff);

			$dbresult = $db->Execute($query, array($objectID, $objectType));
			while ($dbresult !== false && $thisOne = $dbresult->FetchRow())
			{
				array_push($purge_ids, array($thisOne['archive_id']));
			}
		}
		if (count($purge_ids) > 0)
		{
			$delquery = "DELETE FROM " . cms_db_prefix() . "module_archiver_item_info where archive_id=?";
			$dbresult = $db->Execute($delquery, $purge_ids);
			$delquery = "DELETE FROM " . cms_db_prefix() . "module_archiver_item where archive_id=?";
			$dbresult = $db->Execute($delquery, $purge_ids);
		}
	}

	function &retrieveSerializedObject($archive_id)
	{
		$gCms = cmsms();
		$db = $this->GetDb();

		$query = 'SELECT info.item_type, info.item_subtype, i.serialized_item FROM ' . cms_db_prefix() .
			'module_archiver_item i INNER JOIN ' . cms_db_prefix() .
			'module_archiver_item_info info ON info.archive_id = i.archive_id WHERE i.archive_id=?';
		$row = $db->GetRow($query, array($archive_id));
		if ($row['item_type'] == $this->TYPE_CONTENT)
		{
			$contentops = $gCms->GetContentOperations();
			$contentops->LoadContentType($row['item_subtype']);
		}
		else if ($row['item_type'] == $this->TYPE_STYLESHEET)
		{
			$cssOps = $gCms->GetStylesheetOperations();
		}
		else if ($row['item_type'] == $this->TYPE_TEMPLATE)
		{
			$cssOps = $gCms->GetTemplateOperations();
		}
		$restore = UnserializeObject($row['serialized_item']);
		return $restore;
	}

	function RestoreObject($id, &$params, $returnid, $message='')
	{
		$gCms=cmsms();
		$restore = $this->retrieveSerializedObject($params['archive_id']);
		// get the current object, and update select attributes. That way, we don't screw up hierarchy, etc.
		if ($params['type_id'] == $this->TYPE_CONTENT)
		{
			$cm = $gCms->GetContentOperations();
			$current = $cm->LoadContentFromId($params['item_id'], true);
			$current->SetName($restore->Name());
			$current->SetTemplateId($restore->TemplateId());
			$current->SetMenuText($restore->MenuText());
			$tmp = $restore->Properties();
			foreach ($tmp as $key=>$val) //old: foreach ($tmp->mPropertyValues as $key=>$val)
			{
				$current->SetPropertyValue($key, $val);
			}
			$current->Save();
			$msg = $this->Lang('restored_content', array($current->Name(), $params['revision_number']));
		}	
		elseif ($params['type_id'] == $this->TYPE_STYLESHEET)
		{
			$cssOps = $gCms->GetStylesheetOperations();
			$current = $cssOps->LoadStylesheetByID($params['item_id'], true);
			$current->name = $restore->name;
			$current->value = $restore->value;
			$current->media_type = $restore->media_type;
			$current->Save();
			$this->ArchiveObject($current,$this->TYPE_STYLESHEET);
			$msg = $this->Lang('restored_stylesheet', array($current->name, $params['revision_number']));
		}
		elseif ($params['type_id'] == $this->TYPE_HTMLBLOB)
		{
			$gcbops = $gCms->GetGlobalContentOperations();
			$current = $gcbops->LoadHtmlBlobByID($params['item_id']);
			$current->name = $restore->name;
			$current->content = $restore->content;
			$current->Save();
			$this->ArchiveObject($current,$this->TYPE_HTMLBLOB);
			$msg = $this->Lang('restored_htmlblob', array($current->name, $params['revision_number']));
		}
		elseif ($params['type_id'] == $this->TYPE_TEMPLATE)
		{
			$templateOps = $gCms->GetTemplateOperations();
			$current = $templateOps->LoadTemplateByID($params['item_id']);
			$current->content = $restore->content;
			$current->name = $restore->name;
			$current->stylesheet = $restore->stylesheet;
			$current->encoding = $restore->encoding;
			$current->Save();
			$this->ArchiveObject($current,$this->TYPE_TEMPLATE);
			$msg = $this->Lang('restored_template', array($current->name, $params['revision_number']));
		}
		if ($current === false)
		{
			return $this->DisplayErrorPage($id, $params, $returnid, $this->Lang('error_invalid_info'));
		}
		$this->Audit( 0, $this->Lang('friendlyname'), $msg);
		return $this->DisplayArchives($id, $params, $returnid, $msg);
	}

	function DisplayArchives($id, &$params, $returnid, $message='')
	{
		$gCms = cmsms();
		$db = $this->GetDb();
		$config = $gCms->GetConfig();

		$entryarray = array();
		$total = 0;
		$step = 25;
		if  (!isset($params['start']) || empty($params['start']))
		{
			$params['start'] = 0;
		}
		if (!isset($params['item_id']))
		{
			$params['item_id'] = -1;
		}
		if (!isset($params['preview']))
		{
			$params['preview'] = false;
			$this->smarty->assign('preview',0);
		}
		else
		{
			$params['preview'] = true;
			$this->smarty->assign('preview',1);
		}
		if (!isset($params['sort_order']))
		{
			if ($params['item_id'] == -1)
			{
				$params['sort_order'] = 'name';
			}
			else
			{
				$params['sort_order'] = 'date';
			}
		}

		if (!isset($params['sort_dir']))
		{
			$params['sort_dir'] = 'ASC';
		}
		$query = "SELECT count(archive_id) as total FROM " . cms_db_prefix() . "module_archiver_item_info";
		$restriction = array();
		$whereClause = '';
		if (isset($params['type_filter']) && $params['type_filter'] != -1)
		{
			if ($whereClause == '')
			{
				$whereClause = ' WHERE';
			}
			$query .= " item_type=?";
			array_push($restriction, $params['type_filter']);
		}
		else
		{
			$params['type_filter'] = -1;
		}
		if ($params['item_id'] != -1)
		{
			if ($whereClause == '' )
			{
				$whereClause = ' WHERE';
			}
			$query .= " item_id=?";
			array_push($restriction,$params['item_id']);
		}
		$query .= $whereClause;
		$dbresult = $db->GetOne($query, $restriction);
		if ($dbresult !== false)
		{
			$total=$dbresult;
		}
		else
		{
			$total= 0;
		}

		$query = 'SELECT archive_id, item_name, item_id, item_type, revision_number, archive_date FROM ' .
			cms_db_prefix() . 'module_archiver_item_info';
		$restriction = array();
		$whereclause = false;
		if ($params['type_filter'] != -1)
		{
			if (! $whereclause)
			{
				$query .= " WHERE";
				$whereclause = true;
			}
			else
			{
				$query .= " AND";
			}
			$query .= " item_type=?";
			array_push($restriction, $params['type_filter']);
		}
		if ($params['item_id'] != -1)
		{
			if (! $whereclause)
			{
				$query .= " WHERE";
				$whereclause = true;
			}
			else
			{
				$query .= " AND";
			}
			// showing a specific item history
			$query .= " item_id=?";
			array_push($restriction, $params['item_id']);
			$this->smarty->assign('hide_filters', 1);        	
		}
		else
		{
			$this->smarty->assign('hide_filters', 0);
		}

		$dateIcon = '<img src="' . $config['root_url'] . '/modules/Archiver/images/sort_asc.gif" class="systemicon" alt="' .
			$this->Lang('sort_asc') . '" title="' . $this->Lang('sort_asc') . '"/>';
		$nameIcon = $dateIcon;
		$revIcon = $dateIcon;
		$typeIcon = $dateIcon;
		$dateSortDir = 'ASC';
		$typeSortDir = 'ASC';
		$nameSortDir = 'ASC';
		$revSortDir = 'ASC';
		$this->smarty->assign('name_sort', '');
		$this->smarty->assign('type_sort', '');
		$this->smarty->assign('date_sort', '');
		$this->smarty->assign('rev_sort', '');

		if ($params['sort_order'] == 'date' )
		{
			$this->smarty->assign('date_sort',' class="active"');
			$query .= ' ORDER by archive_date ' . $params['sort_dir'] . ', item_type, item_name';
			if ($params['sort_dir'] == 'DESC')
			{
				$dateIcon = '<img src="' . $config['root_url'] . 
					'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="' . $this->Lang('sort_desc') .
					'" title="' . $this->Lang('sort_desc') . '"/>';
				$dateSortDir = 'ASC';
			}
			else
			{
				$dateSortDir = 'DESC';
			}
		}
		else if ($params['sort_order'] == 'name')
		{
			$this->smarty->assign('name_sort',' class="active"');
			$query .= ' ORDER by lower(item_name) ' . $params['sort_dir'] . ', item_type, archive_date';
			if ($params['sort_dir'] == 'DESC')
			{
				$nameIcon = '<img src="' . $config['root_url'] .
					'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="' . $this->Lang('sort_desc') .
					'" title="' . $this->Lang('sort_desc') . '"/>';
				$nameSortDir = 'ASC';
			}
			else
			{
				$nameSortDir = 'DESC';
			}
		}
		else if ($params['sort_order'] == 'revision')
		{
			$this->smarty->assign('rev_sort',' class="active"');
			$query .= ' ORDER by revision_number '.$params['sort_dir'].', lower(item_name), item_type';
			if ($params['sort_dir'] == 'DESC')
			{
				$revIcon = '<img src="'.$config['root_url'].
					'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="'.
					$this->Lang('sort_desc').'" title="'.$this->Lang('sort_desc').'"/>';
				$revSortDir = 'ASC';
			}
			else
			{
				$revSortDir = 'DESC';
			}
		}
		else if ($params['sort_order'] == 'type')
		{
			$this->smarty->assign('type_sort',' class="active"');
			$query .= ' ORDER by item_type '.$params['sort_dir'].', lower(item_name), archive_date';
			if ($params['sort_dir'] == 'DESC')
			{
				$typeIcon = '<img src="'.$config['root_url'].
					'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="'.
					$this->Lang('sort_desc').'" title="'.$this->Lang('sort_desc').'"/>';
				$typeSortDir = 'ASC';
			}
			else
			{
				$typeSortDir = 'DESC';
			}
		}			

		$dbresult = $db->SelectLimit($query,$step,$params['start'],$restriction);

		$rowclass = 'row1';
		$dateFmt = $this->GetPreference('date_format','l, j F Y H:i');

		while ($dbresult !== false && $row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$onerow->id = $row['archive_id'];
			$onerow->item_id = $row['item_id'];
			$onerow->name = $row['item_name'];

			$onerow->type = $this->TYPE_NAMES[$row['item_type']];
			$onerow->rowclass = $rowclass;
			$onerow->revision = $row['revision_number'];
			$onerow->date = date($dateFmt, $db->UnixTimeStamp($row['archive_date']));

			$onerow->restlink = $this->CreateLink($id, 'restore', $returnid,'<img src="' .
				$config['root_url'] . '/modules/Archiver/images/restore.gif" class="systemicon" alt="' .
				$this->Lang('restore') . '" title="' . $this->Lang('restore') . '"/>',
				array('archive_id'=>$row['archive_id'], 'start'=>$params['start'],
				'type_filter'=>$params['type_filter'], 'type_id'=>$row['item_type'], 'sort_order'=>$params['sort_order'],
				'item_id'=>$row['item_id'], 'revision_number'=>$row['revision_number']),
				$this->Lang('surerestore', $row['revision_number']));
			if ($row['item_type'] == $this->TYPE_CONTENT)
			{
				$onerow->viewlink = $this->CreateLink($id, 'preview', $returnid,
					$gCms->variables['admintheme']->DisplayImage('icons/system/view.gif',
					$this->Lang('preview'), '', '', 'systemicon'),
					array('archive_id'=>$row['archive_id'], 'start'=>$params['start'], 'type_filter'=>$params['type_filter'],
					'type_id'=>$row['item_type'], 'sort_order'=>$params['sort_order'], 'item_id'=>$row['item_id'],
					'preview'=>true, 'revision_number'=>$row['revision_number']));
			}
			else
			{
				$onerow->viewlink = '';
			}
			array_push($entryarray, $onerow);

			($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
		}

		if ($params['start'] >= $step)
		{
			$this->smarty->assign('prev_page', $this->CreateLink($id, 'listitems', $returnid, $this->Lang('prev'), array('start'=>($params['start'] - $step),'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order'],'item_id'=>$params['item_id'])));
		}
		else
		{
			$this->smarty->assign('prev_page','');
		}
		if ($params['start'] + $step < $total)
		{
			$this->smarty->assign('next_page', $this->CreateLink($id, 'listitems', $returnid, $this->Lang('next'), array('start'=>($params['start'] + $step),'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order'],'item_id'=>$params['item_id'])));
		}
		else
		{
			$this->smarty->assign('next_page','');
		}

		if (ceil($total/$step) > 1)
		{
			$curpg = floor($params['start']/$step) + 1;
			$linkstr = '';
			$first = 1;
			for ($i=0;$i<$total;$i+=$step)
			{
				$thisPg = floor($i/$step) + 1;
				if ($first)
				{
					$first = 0;
				}
				else
				{
					$linkstr .= ' : ';
				}
				if ($i == $params['start'])
				{
					$linkstr .= '['.$thisPg.']';
				}
				else
				{
					$linkstr .= $this->CreateLink($id, 'listitems', $returnid, $thisPg, array('start'=>$i,'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order'],'item_id'=>$params['item_id']));
				}
			}
			$this->smarty->assign('page_no', 'Page '.$curpg.' of '.ceil($total/$step));
			$this->smarty->assign_by_ref('page_links', $linkstr);
		}
		else
		{
			$this->smarty->assign('page_no', '');
		}
		$this->smarty->assign('column_name', $this->CreateLink($id, 'listitems',$returnid,$this->Lang('column_name').$nameIcon,array('sort_order'=>'name','start'=>$params['start'],'type_filter'=>$params['type_filter'],'item_id'=>$params['item_id'],'sort_dir'=>$nameSortDir)));
		$this->smarty->assign('column_type', $this->CreateLink($id, 'listitems',$returnid,$this->Lang('column_type').$typeIcon,array('sort_order'=>'type','start'=>$params['start'],'type_filter'=>$params['type_filter'],'item_id'=>$params['item_id'],'sort_dir'=>$typeSortDir)));
		$this->smarty->assign('column_revision', $this->CreateLink($id, 'listitems',$returnid,$this->Lang('column_revision').$revIcon,array('sort_order'=>'revision','start'=>$params['start'],'type_filter'=>$params['type_filter'],'item_id'=>$params['item_id'],'sort_dir'=>$revSortDir)));
		$this->smarty->assign('column_date', $this->CreateLink($id, 'listitems',$returnid,$this->Lang('column_date').$dateIcon,array('sort_order'=>'date','start'=>$params['start'],'type_filter'=>$params['type_filter'],'item_id'=>$params['item_id'],'sort_dir'=>$dateSortDir)));
		$this->smarty->assign('column_action', $this->Lang('column_action'));

		$this->smarty->assign('title_filter_type',$this->Lang('title_filter_type'));

		$filters = array($this->Lang('title_filter_none')=>-1,
		$this->Lang('title_filter_content')=>$this->TYPE_CONTENT,
		$this->Lang('title_filter_htmlblob')=>$this->TYPE_HTMLBLOB,
		$this->Lang('title_filter_stylesheet')=>$this->TYPE_STYLESHEET,
		$this->Lang('title_filter_template')=>$this->TYPE_TEMPLATE);
		$this->smarty->assign('input_filter_type',
		$this->CreateInputDropdown($id, 'type_filter', $filters,
		-1, $params['type_filter'],"onchange='this.form.submit()'"));
		$this->smarty->assign('startform',
		$this->CreateFormStart($id, 'listitems', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());
		$this->smarty->assign('submit',
		$this->CreateInputSubmit($id, 'submit', 'Filter'));
		$this->smarty->assign('hidden',
		$this->CreateInputHidden($id, 'start',$params['start']).
		$this->CreateInputHidden($id, 'sort_order',$params['sort_order']).
		$this->CreateInputHidden($id,'item_id',$params['item_id']));


		$this->smarty->assign_by_ref('items', $entryarray);
		$this->smarty->assign('itemcount', count($entryarray));

		$this->smarty->assign_by_ref('message', $message);
		if ($params['preview'] && $params['type_id'] == $this->TYPE_CONTENT)
		{
			$restore = $this->retrieveSerializedObject($params['archive_id']);

			$tmpfname = $this->createtmpfname($restore);
			$_SESSION['cms_preview'] = str_replace('\\','/',$tmpfname);			
			$this->smarty->assign('preview_file',
			$config["root_url"] .'/index.php?'.$config['query_var'].'=__CMS_PREVIEW_PAGE__');

			$this->smarty->assign('title_preview', $this->Lang('title_preview',$params['revision_number']));

		}

		$this->smarty->assign('title_section', $this->Lang('listitems'));
		echo $this->ProcessTemplate('listarchives.tpl');

	}

	function createtmpfname(&$contentobj)
	{
		$gCms = cmsms();
		$config = $gCms->GetConfig();
		$templateops = $gCms->GetTemplateOperations();
		$stylesheetops = $gCms->GetStyleSheetOperations();

		$data["content_id"] = $contentobj->Id();
		$data['content_type'] = $contentobj->Type();
		$data["title"] = $contentobj->Name();
		$data["menutext"] = $contentobj->MenuText();
		$data["content"] = $contentobj->Show();
		$data["template_id"] = $contentobj->TemplateId();
		$data["hierarchy"] = $contentobj->Hierarchy();

		$templateobj = $templateops->LoadTemplateById($contentobj->TemplateId());
		$data['template'] = $templateobj->content;

		//$stylesheetobj = get_stylesheet($contentobj->TemplateId());
		$stylesheetobj = $stylesheetops->LoadStylesheetByID($contentobj->TemplateId());
		$data['encoding'] = $stylesheetobj['encoding'];
		$data['serialized_content'] = serialize($contentobj);

		$tmpfname = '';
		if (is_writable($config["previews_path"]))
		{
			$tmpfname = tempnam($config["previews_path"], "cmspreview");
		}
		else
		{
			$tmpfname = tempnam(TMP_CACHE_LOCATION, "cmspreview");
		}
		$handle = fopen($tmpfname, "w");
		fwrite($handle, serialize($data));
		fclose($handle);

		return $tmpfname;
	}


	function DisplayArchivesSimple($id, &$params, $returnid, $message='')
	{
		$gCms = cmsms();
		$db = $this->GetDb();
		$config = $gCms->GetConfig();
		$entryarray = array();
		$total = 0;
		$step = 25;
		if  (!isset($params['start']) || empty($params['start']))
		{
			$params['start'] = 0;
		}
		if (!isset($params['sort_order']) || empty($params['sort_order']))
		{
			$params['sort_order'] = 'name';
		}
		if (!isset($params['sort_dir']))
		{
			$params['sort_dir'] = 'ASC';
		}

		$query = "SELECT count(distinct item_id) as total FROM " . cms_db_prefix() . "module_archiver_item_info";
		$restriction = array();
		if (isset($params['type_filter']) && $params['type_filter'] != -1)
		{
			$query .= " WHERE item_type=?";
			$restriction[0] = $params['type_filter'];
		}
		else
		{
			$params['type_filter'] = -1;
		}
		$dbresult = $db->GetOne($query, $restriction);
		if ($dbresult !== false)
		{
			$total=$dbresult;
		}
		else
		{
			$total= 0;
		}

		$query = "select distinct item_name, item_id, item_type, lower(item_name) FROM ".cms_db_prefix()."module_archiver_item_info";
		$restriction = array();
		if ($params['type_filter'] != -1)
		{
			$query .= " WHERE item_type=?";
			array_push($restriction,$params['type_filter']);
		}

		$nameIcon = '<img src="'.$config["root_url"].'/modules/Archiver/images/sort_asc.gif" class="systemicon" alt="'.$this->Lang('sort_asc').'" title="'.$this->Lang('sort_asc').'"/>';
		$typeIcon = $nameIcon;
		$typeSortDir = 'ASC';
		$nameSortDir = 'ASC';
		$this->smarty->assign('name_sort','');
		$this->smarty->assign('type_sort','');

		if ($params['sort_order'] == 'name')
		{
			$this->smarty->assign('name_sort',' class="active"');
			$query .= ' ORDER by lower(item_name) '.$params['sort_dir'].', item_type';
			if ($params['sort_dir'] == 'DESC')
			{
				$nameIcon = '<img src="'.$config["root_url"].'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="'.$this->Lang('sort_desc').'" title="'.$this->Lang('sort_desc').'"/>';
				$nameSortDir = 'ASC';
			}
			else
			{
				$nameSortDir = 'DESC';
			}
		}
		else if ($params['sort_order'] == 'type')
		{
			$this->smarty->assign('type_sort',' class="active"');
			$query .= ' ORDER by item_type '.$params['sort_dir'].', lower(item_name)';
			if ($params['sort_dir'] == 'DESC')
			{
				$typeIcon = '<img src="'.$config["root_url"].'/modules/Archiver/images/sort_desc.gif" class="systemicon" alt="'.$this->Lang('sort_desc').'" title="'.$this->Lang('sort_desc').'"/>';
				$typeSortDir = 'ASC';
			}
			else
			{
				$typeSortDir = 'DESC';
			}
		}			

		$dbresult = $db->SelectLimit($query,$step,$params['start'],$restriction);

		$rowclass = 'row1';

		while ($dbresult !== false && $row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$onerow->id = $row['item_id'];
			$onerow->name = $row['item_name'];
			$onerow->namelink = $this->CreateLink($id, 'listitems', $returnid,'',array('item_id'=>$row['item_id'], 'start'=>$params['start'],'sort_order'=>'date','sort_dir'=>'DESC','type_filter'=>$params['type_filter']),'',true);

			$onerow->type = $this->TYPE_NAMES[$row['item_type']];
			$onerow->rowclass = $rowclass;

			array_push($entryarray, $onerow);

			($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
		}

		if ($params['start'] >= $step)
		{
			$this->smarty->assign('prev_page', $this->CreateLink($id, 'simplelist', $returnid, $this->Lang('prev'), array('start'=>($params['start'] - $step),'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order'])));
		}
		else
		{
			$this->smarty->assign('prev_page','');
		}

		if ($params['start'] + $step < $total)
		{
			$this->smarty->assign('next_page', $this->CreateLink($id, 'simplelist', $returnid, $this->Lang('next'), array('start'=>($params['start'] + $step),'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order'])));
		}
		else
		{
			$this->smarty->assign('next_page','');
		}
		if (ceil($total/$step) > 1)
		{
			$curpg = floor($params['start']/$step) + 1;
			$linkstr = '';
			$first = 1;
			for ($i=0;$i<$total;$i+=$step)
			{
				$thisPg = floor($i/$step) + 1;
				if ($first)
				{
					$first = 0;
				}
				else
				{
					$linkstr .= ' : ';
				}
				if ($i == $params['start'])
				{
					$linkstr .= '['.$thisPg.']';
				}
				else
				{
					$linkstr .= $this->CreateLink($id, 'simplelist', $returnid, $thisPg, array('start'=>$i,'type_filter'=>$params['type_filter'],'sort_order'=>$params['sort_order']));
				}
			}
			$this->smarty->assign('page_no', 'Page '.$curpg.' of '.ceil($total/$step));
			$this->smarty->assign_by_ref('page_links', $linkstr);
		}
		else
		{
			$this->smarty->assign('page_no', '');
		}
		$this->smarty->assign('column_name', $this->CreateLink($id, 'simplelist',$returnid,$this->Lang('column_name').$nameIcon,array('sort_order'=>'name','start'=>$params['start'],'type_filter'=>$params['type_filter'],'sort_dir'=>$nameSortDir)));
		$this->smarty->assign('column_type', $this->CreateLink($id, 'simplelist',$returnid,$this->Lang('column_type').$typeIcon,array('sort_order'=>'type','start'=>$params['start'],'type_filter'=>$params['type_filter'],'sort_dir'=>$typeSortDir)));

		$this->smarty->assign('title_filter_type',$this->Lang('title_filter_type'));

		$filters = array($this->Lang('title_filter_none')=>-1,
		$this->Lang('title_filter_content')=>$this->TYPE_CONTENT,
		$this->Lang('title_filter_htmlblob')=>$this->TYPE_HTMLBLOB,
		$this->Lang('title_filter_stylesheet')=>$this->TYPE_STYLESHEET,
		$this->Lang('title_filter_template')=>$this->TYPE_TEMPLATE);
		$this->smarty->assign('input_filter_type',
		$this->CreateInputDropdown($id, 'type_filter', $filters,
		-1, $params['type_filter'],"onchange='this.form.submit()'"));
		$this->smarty->assign('startform',
		$this->CreateFormStart($id, 'simplelist', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());
		$this->smarty->assign('submit',
		$this->CreateInputSubmit($id, 'submit', 'Filter'));
		$this->smarty->assign('hidden',
		$this->CreateInputHidden($id, 'start',$params['start']).
		$this->CreateInputHidden($id, 'sort_order',$params['sort_order']));


		$this->smarty->assign_by_ref('items', $entryarray);
		$this->smarty->assign('itemcount', count($entryarray));

		$this->smarty->assign_by_ref('message', $message);
		$this->smarty->assign('title_section', $this->Lang('simplelist'));
		echo $this->ProcessTemplate('listarchivessimple.tpl');

	}


	function DisplayAdminPrefs($id, &$params, $returnid, $message='')
	{
		$this->smarty->assign('title_section', $this->Lang('title_admin_prefs'));

		$this->smarty->assign('startform',
		$this->CreateFormStart($id, 'save_admin_prefs', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());
		$this->smarty->assign('submit',
		$this->CreateInputSubmit($id, 'submit', 'Submit'));

		$this->smarty->assign('title_purge_count', $this->Lang('title_purge_count'));
		$this->smarty->assign('title_purge_time', $this->Lang('title_purge_time'));
		$this->smarty->assign('title_purge_warning', $this->Lang('title_purge_warning'));
		$this->smarty->assign('title_purge_warning2', $this->Lang('title_purge_warning2'));
		$this->smarty->assign('title_date_format', $this->Lang('title_date_format'));
		$this->smarty->assign('date_format_help', $this->Lang('date_format_help'));
		$this->smarty->assign_by_ref('message', $message);

		$purgecount = array($this->Lang('title_purge_unlimited')=>-1, 
		$this->Lang('title_purge_5_revisions')=>5,
		$this->Lang('title_purge_10_revisions')=>10,
		$this->Lang('title_purge_20_revisions')=>20,
		$this->Lang('title_purge_50_revisions')=>50);

		$purgetime = array($this->Lang('title_purge_forever')=>-1, 
		$this->Lang('title_purge_1_days')=>1,
		$this->Lang('title_purge_7_days')=>7,
		$this->Lang('title_purge_14_days')=>14,
		$this->Lang('title_purge_30_days')=>30,
		$this->Lang('title_purge_90_days')=>90,
		$this->Lang('title_purge_180_days')=>180,
		$this->Lang('title_purge_365_days')=>365);

		$this->smarty->assign('input_purge_count',
		$this->CreateInputDropdown($id, 'input_purge_count', $purgecount,
		-1, $this->GetPreference('purge_count','-1')));

		$this->smarty->assign('input_date_format',
		$this->CreateInputText($id,'input_date_format',
		$this->GetPreference('date_format','l, j F Y H:i')));

		$this->smarty->assign('input_purge_time',
		$this->CreateInputDropdown($id, 'input_purge_time', $purgetime,
		-1, $this->GetPreference('purge_time','-1')));

		// Display the populated template
		echo $this->ProcessTemplate('adminprefs.tpl');
	}

	function DisplaySnapshots($id, &$params, $returnid, $message='')
	{
		$this->smarty->assign('title_section', $this->Lang('title_admin_snaps'));

		$this->smarty->assign('startform',
		$this->CreateFormStart($id, '', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());
		$this->smarty->assign('submit',
		$this->CreateInputSubmit($id, 'submit', 'Submit'));

		$this->smarty->assign('title_snapshot_name', $this->Lang('title_snapshot_name'));
		$this->smarty->assign('title_snapshot_not_yet', $this->Lang('title_snapshot_not_yet'));
		$this->smarty->assign_by_ref('message', $message);

		$this->smarty->assign('input_snapshot_name',
		$this->CreateInputText($id, 'snapshot_name', '', ''));

		echo $this->ProcessTemplate('snapshots.tpl');
	}


	function SaveAdminPrefs($id, &$params, $returnid)
	{
		$this->SetPreference('purge_count', isset($params['input_purge_count'])?$params['input_purge_count']:'-1');
		$this->SetPreference('purge_time', isset($params['input_purge_time'])?$params['input_purge_time']:'-1');
		$this->SetPreference('date_format',isset($params['input_date_format'])?$params['input_date_format']:'l, j F Y H:i');


		return $this->DisplayAdminPrefs($id, $params, $returnid, $this->Lang('prefsupdated'));
	}

	function DisplayErrorPage($id, &$params, $returnid, $message='')
	{
		$this->smarty->assign('title_error', $this->Lang('error'));
		if ($message != '')
		{
			$this->smarty->assign_by_ref('message', $message);
		}

		// Display the populated template
		echo $this->ProcessTemplate('error.tpl');
	}

	function DisplayAdminPanel($id, &$params, $returnid, $message='')
	{
		$this->smarty->assign('title_section', $this->Lang('title_admin_panel'));
		$this->smarty->assign('welcome_text', $this->Lang('welcome_text'));

		// Display the populated template
		echo $this->ProcessTemplate('adminpanel.tpl');
	}

	function DisplayAdminNav($id, &$params, $returnid)
	{
		$gCms=cmsms();
		$config = $gCms->GetConfig();
		$this->smarty->assign('admin_nav',
		$this->CreateLink($id, 'simplelist', $returnid,
			'<img src="'.$config["root_url"].'/modules/Archiver/images/simplelist.gif" class="systemicon" alt="'.
			$this->Lang('simplelist').'" title="'.$this->Lang('simplelist').'"/>', array()) .
			$this->CreateLink($id, 'simplelist', $returnid, $this->Lang('simplelist'), array()) .
			' : ' .$this->CreateLink($id, 'listitems', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/topfiles/content.gif',
			$this->Lang('listitems'),'','','systemicon'), array()) .
			$this->CreateLink($id, 'listitems', $returnid, $this->Lang('listitems'), array()) .
			' : ' . $this->CreateLink($id, 'listsnapshots', $returnid,
			'<img src="'.$config["root_url"].'/modules/Archiver/images/snapshot.gif" class="systemicon" alt="'.
			$this->Lang('listsnapshots').'" title="'.$this->Lang('listsnapshots').'"/>', array()) .
			$this->CreateLink($id, 'listsnapshots', $returnid, $this->Lang('listsnapshots'), array()) .' : ' .
			$this->CreateLink($id, 'adminprefs', $returnid,$gCms->variables['admintheme']->DisplayImage('icons/topfiles/siteprefs.gif',
				$this->Lang('adminprefs'),'','','systemicon'), array()) .$this->CreateLink($id, 'adminprefs', $returnid, $this->Lang('adminprefs'), array()));
	}
}

?>