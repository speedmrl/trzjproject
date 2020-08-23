<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if !empty($srchtype)}--><input type="hidden" name="srchtype" value="$srchtype" /><!--{/if}-->
<div class="nex_Search">
		
<input value="$keyword" autocomplete="off" class="nex_Search_input" name="srchtxt" id="scform_srchtxt" value="" placeholder="{lang searchthread}">

<div class="nex_Seachbtns"><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="{lang search}" class="nex_sbtns" id="scform_submit"></div>

<div id="scbar_hot">
<!--{if $_G['setting']['srchhotkeywords']}-->
    <span>{lang hot_search}: </span>
    <!--{loop $_G['setting']['srchhotkeywords'] $val}-->
        <!--{if $val=trim($val)}-->
            <!--{eval $valenc=rawurlencode($val);}-->
            <!--{block srchhotkeywords[]}-->
                <!--{if !empty($searchparams[url])}-->
                    <a href="$searchparams[url]?q=$valenc&source=hotsearch{$srchotquery}" class="xi2" sc="1">$val</a>
                <!--{else}-->
                    <a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch" class="xi2" sc="1">$val</a>
                <!--{/if}-->
            <!--{/block}-->
        <!--{/if}-->
    <!--{/loop}-->
    <!--{echo implode('', $srchhotkeywords);}-->
<!--{/if}-->
</div>
					
</div>

