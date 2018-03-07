<?php

/**
 * @param \App\Models\Myrow   $myrow
 * @param \App\Models\RowUser $user
 */
function anketa_usr_row(App\Models\Myrow $myrow, App\Models\RowUser $user)
{?>
<table class="border-box" border="0" width="100%" style="margin:5px 0;background:<?php echo $user->getBackground();?>"><tr><td width="70"><a href="/id<?php echo $user->id;?>"><div class="border-box avatar" style="background-image:url(<?php echo avatar($myrow,$user->pic1,$user->photo_visibility);?>)"></div></a></td><td align="left" valign="top" style="padding-left:5px;"><div style="padding:2px;<?php if(!$user->isVip()):?>background:#e1eaff<?php endif; ?>"><?php if($user->isNewbe()):?><img src="/img/newred.gif" width="34" height="15" alt="Newbe"><?php endif;?><?php if($user->isVip()):?><a href="/viewdiary_132"><img src="<?php echo \App\Arrays\VipSmiles::$array[$user->vipsmile];?>"></a><?php endif;?><?php if ($user->isBirthday()):?><img src="/img/dr.gif" width="19" height="23" alt="birthday"> <?php endif;?><?php if ($user->isReal()):?><img src="/img/real.gif" width="20" height="20" alt="real"><?php endif;?><?php if ($user->isOnline()):?><span style="padding:0 2px;background-color:#F00;color:#FFF;">В сети</span><?php else:?><?php echo \App\Arrays\Genders::$old[$user->gender]; ?> на сайте: <b><?php echo $user->last_view->getHumansPerson();?></b><?php endif;?></div><div><a href="/id<?php echo $user->id;?>"><span style="font-weight:700" class="m-<?php echo $user->moderator; ?> a-<?php echo $user->admin; ?>"><?php echo html($user->login);?></span></a> &bull; <?php echo html($user->fname); ?> &bull; <?php echo $user->birthday->getHumansShort(); ?> &bull; <b><?php echo \App\Arrays\Genders::$gender[$user->gender];?></b> &bull; <span class="u-city-<?php echo (int)(mb_strtolower($myrow->city) === mb_strtolower($user->city)); ?>"><?php echo html($user->city);?></span></div><div style="margin:5px 0"><?php echo html(subText($user->about, 160, ' ...'));?></div><?php if($user->isHot()):?><div class="border-box" style="background:#fff;font-size:16px;padding:5px;"><span style="color:#f00;">Срочно познакомимся:</span> <?php echo html(subText($user->hot_text, 250, ' ...'));?></div><?php elseif ($user->isNowStatus()):?><div><b>Настроение</b>: <?php echo html(subText($user->now_status, 250, ' ...'));?></div><?php endif;?></td></tr></table>
<?php }
