{$admin_nav}
<h3>{$title_section}</h3>

{if $message != ""}<p>{$message}</p>{/if}
{if $preview != ""}
<p class="pageheader">{$title_preview}</p>
<iframe name="previewframe" class="preview" src="{$preview_file}"></iframe>{/if}
{if $itemcount > 0}
{if $page_no !=''}<table cellspacing="0" class="pagetable"><tr><td>{$prev_page}</td><td>{$page_no}</td><td>{$next_page}</td></tr></table>{/if}
{if $hide_filters == 0}<table cellspacing="0" class="pagetable"><tr><td>{$startform}{$title_filter_type}{$input_filter_type}{$submit}{$hidden}{$endform}</td></tr></table>{/if}
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th{$name_sort}>{$column_name}</th>
			<th{$type_sort}>{$column_type}</th>
			<th{$rev_sort}>{$column_revision}</th>
			<th{$date_sort}>{$column_date}</th>
			<th class="pageicon" colspan="2">{$column_action}</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$items item=entry}
		<tr class="{$entry->rowclass}" onmouseover="this.className='{$entry->rowclass}hover';" onmouseout="this.className='{$entry->rowclass}';">
            <td>{$entry->name}</td>
            <td>{$entry->type}</td>
            <td>{$entry->revision}</td>
            <td>{$entry->date}</td>
			<td>{$entry->viewlink}</td>
			<td>{$entry->restlink}</td>
		</tr>
	{/foreach}
	</tbody>
</table>
{if $page_no !=''}<table cellspacing="0" class="pagetable"><tr><td>{$prev_page}</td><td>Page {$page_links}</td><td>{$next_page}</td></tr></table>{/if}
{else}
<p>No revisions are in the database.</p>
{/if}
