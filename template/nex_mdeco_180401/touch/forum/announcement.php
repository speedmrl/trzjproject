<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<div id="st-container" class="st-container">
	<div class="st-pusher">
		<!--{template common/headernav}-->
        <div class="nex_announcement">
            <ul>
            <!--{loop $announcelist $ann}-->
                
                <li>
                    <div class="nex_announcement_tops">
                        <h3>$ann[subject]<em>($ann[starttime])</em></h3>
                        
                    </div>
                    <div class="nex_announcement_btms">
                        <p>{lang author}: $ann[author]</p>
                        <h5>$ann[message]</h5>
                    </div>
                </li>
            <!--{/loop}-->
            </ul>
        </div>
	</div>
</div>
<!--{template common/footer}-->