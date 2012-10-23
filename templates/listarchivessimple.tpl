{$admin_nav}
<h3>{$title_section}</h3>
{if $message != ""}<p>{$message}</p>{/if}
{if $itemcount > 0}
{if $page_no !=''}<table cellspacing="0" class="pagetable"><tr><td>{$prev_page}</td><td>{$page_no}</td><td>{$next_page}</td></tr></table>{/if}
<table cellspacing="0" class="pagetable"><tr><td>{$startform}{$title_filter_type}{$input_filter_type}{$submit}{$hidden}{$endform}</td></tr></table>
<table cellspacing="0" class="pagetable">
	<thead>
		<tr>
			<th{$name_sort}>{$column_name}</th>
			<th{$type_sort}>{$column_type}</th>
		</tr>
	</thead>
	<tbody>
	{foreach from=$items item=entry}
		<tr class="{$entry->rowclass}" onmouseover="this.className='{$entry->rowclass}hover';" onmouseout="this.className='{$entry->rowclass}';">
            <td><a href="{$entry->namelink}">{$entry->name}</a></td>
            <td>{$entry->type}</td>
		</tr>
	{/foreach}
	</tbody>
</table>
{if $page_no !=''}<table cellspacing="0" class="pagetable"><tr><td>{$prev_page}</td><td>Page {$page_links}</td><td>{$next_page}</td></tr></table>{/if}
{else}
<p>No revisions are in the database.</p>
{/if}
