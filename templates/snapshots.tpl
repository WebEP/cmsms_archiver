<h3>{$title_section}</h3>
<p>{$admin_nav}</p>
{if $message!=''}<p>{$message}</p>{/if}
{$startform}
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><strong>{$title_snapshot_not_yet}</strong></p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$title_snapshot_name}:</p>
		<p class="pageinput">{$input_snapshot_name}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$submit}</p>
	</div>
{$endform}
