<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{if helper_access::check_module('follow')}-->
<div class="nex_Home_User_Scores">
    <div class="nex_Gr_fs_box">
        <div class="nex_Home_Gr_xulie">
            <ul>
                <li>
                    <div class="nex_Gr_fenshu Gr_broadcast">
                        <p>$space['feeds']</p>
                        <span>{lang follow}</span>
                    </div>
                </li>
                <li>
                    <div class="nex_Gr_fenshu Gr_received">
                        <p>$space['following']</p>
                        <span>{lang follow_add}</span>
                    </div>        			
                </li>
                <li>
                    <div class="nex_Gr_fenshu Gr_followers">
                        <p>$space['follower']</p>
                        <span>{lang follow_follower}</span>
                    </div>
                </li>
                <li>
                    <div class="nex_Gr_fenshu Gr_scores">
                        <p>$space[credits]</p>
                        <span>{lang credits}</span>
                    </div>
                </li>
                <div class="clear"></div>
            </ul>   
                  
        </div>
    </div>
</div>
<!--{/if}-->
