<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo ($page["title"]); ?></title><link href="__TMPL__public/css/install.css" rel="stylesheet" type="text/css" charset="utf-8" /></head><body><div class="wrap"><div class="header"><h1 class="logo">logo</h1><div class="icon_install"><?php echo (L("step_eula_desc")); ?></div><div class="version">9.0</div></div><section class="section"><form action="<?php echo u('index/finish');?>" method="POST" id="post_form"><div class="step"><ul><li class="on"><em>1</em><?php echo (L("step_check")); ?></li><li class="on"><em>2</em><?php echo (L("step_setconf")); ?></li><li class="current"><em>3</em><?php echo (L("step_finish_desc")); ?></li></ul></div><div class="server"><iframe name="show_process" id="show_process" src="?a=show_process" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none;" width="100%" height="420px" allowtransparency="true"></iframe></div><div class="bottom tac"><input type="submit" name="dosubmit" id="submit_button"  value="<?php echo (L("next")); ?>" class="btn" /></div></form></section></div></body></html>