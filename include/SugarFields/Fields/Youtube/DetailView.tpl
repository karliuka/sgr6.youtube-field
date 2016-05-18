{if !empty({{sugarvar key='value' string=true}})}
    <object width="{{sugarvar key='width'}}" height="{{sugarvar key='height'}}">
        <param name="movie" value="http://www.youtube.com/v/{{sugarvar key='value'}}></param>
        <param name="wmode" value="transparent"></param>
        <embed src="http://www.youtube.com/v/{{sugarvar key='value'}}" type="application/x-shockwave-flash" wmode="transparent" width="{{sugarvar key='width'}}" height="{{sugarvar key='height'}}"></embed>
    </object>
{/if}