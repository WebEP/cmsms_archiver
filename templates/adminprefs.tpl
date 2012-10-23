<h3>{$title_section}</h3>
<p>{$admin_nav}</p>
{if $message!=''}<p>{$message}</p>{/if}
{$startform}
	<div class="pageoverflow">
		<p class="pagetext">{$title_date_format}:</p>
		<p class="pageinput">{$input_date_format}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$date_format_help}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput"><strong>{$title_purge_warning}</strong></p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$title_purge_count}:</p>
		<p class="pageinput">{$input_purge_count}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">{$title_purge_time}:</p>
		<p class="pageinput">{$input_purge_time}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$title_purge_warning2}</p>
	</div>
	<div class="pageoverflow">
		<p class="pagetext">&nbsp;</p>
		<p class="pageinput">{$submit}</p>
	</div>
{$endform}
