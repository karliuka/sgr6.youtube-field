{capture name=getYoutube assign=youtube}{sugar_fetch object=$parentFieldArray key=$col}{/capture}
{if !empty($youtube)}
<object width="{$vardef.list_width}" height="{$vardef.list_height}">
	<param name="movie" value="http://www.youtube.com/v/{$youtube}></param>
	<param name="wmode" value="transparent"></param>
	<embed src="http://www.youtube.com/v/{$youtube}" type="application/x-shockwave-flash" wmode="transparent" width="{$vardef.list_width}" height="{$vardef.list_height}"></embed>
</object>
{/if}