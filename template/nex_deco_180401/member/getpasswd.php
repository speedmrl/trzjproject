<?php echo 'Copyright@Neoconex星点互联';exit;?>
<!--{template common/header}-->
<style>
body{background:#f2f5f7!important;}
</style>
<div id="ct" class="wp w cl">
	<div class="mn mw">
		<div class="blr">
			<h3 class="flb" style="padding-left:0">
				<em>{lang getpassword}</em>
			</h3>
			<form method="post" autocomplete="off" action="member.php?mod=getpasswd&uid=$uid&id=$hashid&sign=$_GET[sign]">
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<div class="c cl">
					<div class="lgfm">
						<label><em>{lang username}:</em>$member[username]</label>
						<label><em>{lang new_password}:</em><input type="password" id="newpasswd1" name="newpasswd1" size="25" class="px" /></label>
						<p style="height:22px;">
							
							<i class="d" id="chk_newpasswd1">{lang register_password_tips}<!--{if $_G['setting']['pwlength']}-->, {lang register_password_length_tips1} $_G['setting']['pwlength'] {lang register_password_length_tips2}<!--{/if}--></i>
						</p>
						<label><em>{lang new_password_confirm}:</em><input type="password" id="newpasswd2" name="newpasswd2" size="25" class="px" /></label>
						<p style="height:22px;"><i class="d" id="chk_newpasswd2"></i></p>
					</div><em><i id="tip_newpasswd1" class="p_tip"></i><em><em><i id="tip_newpasswd2" class="p_tip"></i><em>
					<div class="lgf minf">
						<h4>{lang login_guest}</h4>
					</div>
				</div>
				<p class="fsb pns cl">
					<em>&nbsp;</em>
					<button class="pn pnc" type="submit" name="getpwsubmit" value="true"><span>{lang submit}</span></button>
				</p>
			</form>
			<script type="text/javascript" src="{$_G[setting][jspath]}register.js?{VERHASH}"></script>
			<script type="text/javascript">
				var strongpw = new Array();
				<!--{if $_G['setting']['strongpw']}-->
					<!--{loop $_G['setting']['strongpw'] $key $val}-->
					strongpw[$key] = $val;
					<!--{/loop}-->
				<!--{/if}-->
				var pwlength = <!--{if $_G['setting']['pwlength']}-->$_G['setting']['pwlength']<!--{else}-->0<!--{/if}-->;
				checkPwdComplexity($('newpasswd1'), $('newpasswd2'));
			</script>
		</div>
	</div>
</div>
<!--{template common/footer}-->