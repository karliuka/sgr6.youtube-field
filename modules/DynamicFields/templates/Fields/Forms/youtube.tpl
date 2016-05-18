{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_YOUTUBE_WIDTH"}:</td>
	<td>
		<input id ="width" type="text" name="width" 
		{if !$vardef.width && !$vardef.height}
			value="425"
		{else}
			value="{$vardef.width}"
		{/if}
		>
	</td>
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_YOUTUBE_HEIGHT"}:</td>
	<td>
		<input id ="height" type="text" name="height" 
		{if !$vardef.width && !$vardef.height}
			value="350"
		{else}
			value="{$vardef.height}"
		{/if}
		>
	</td>
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_YOUTUBE_LIST_WIDTH"}:</td>
	<td>
		<input id ="list_width" type="text" name="list_width" 
		{if !$vardef.list_width && !$vardef.list_width}
			value="100"
		{else}
			value="{$vardef.list_width}"
		{/if}
		>
	</td>
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_YOUTUBE_LIST_HEIGHT"}:</td>
	<td>
		<input id ="list_height" type="text" name="list_height" 
		{if !$vardef.list_height && !$vardef.list_height}
			value="75"
		{else}
			value="{$vardef.list_height}"
		{/if}
		>
	</td>
</tr>
{include file="modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl"}