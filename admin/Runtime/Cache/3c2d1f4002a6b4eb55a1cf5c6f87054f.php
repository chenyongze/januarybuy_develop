<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script><script language="javascript">var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var lang_please_select = "<?php echo (L("please_select")); ?>";
var def=<?php echo ($def); ?>;
$(function($){
	$("#ajax_loading").ajaxStart(function(){
		$(this).show();
	}).ajaxSuccess(function(){
		$(this).hide();
	});
});

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><div class="pad_10"><form action="<?php echo u('items_collect/edit');?>" method="post" name="myform" id="myform" enctype="multipart/form-data"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="80">来源名称 :</th><td><input type="text" name="name" id="name" value="<?php echo ($site_info["name"]); ?>" class="input-text"></td></tr><tr><th>唯一标识 :</th><td><input type="text" name="alias" id="alias" value="<?php echo ($site_info["alias"]); ?>" class="input-text"></td></tr><tr><th>网站域名 :</th><td><input type="text" name="site_domain" id="site_domain" value="<?php echo ($site_info["site_domain"]); ?>" class="input-text" size="50"></td></tr><tr><th>网站LOGO :</th><td><img src="./data/author/32_<?php echo ($site_info["site_logo"]); ?>" width="16" height="16" style="border:1px #CCC solid; padding:1px;" /><input name="site_logo" type="file" /></td></tr><tr><th>采集地址 :</th><td><input type="text" name="collect_url" id="collect_url" value="<?php echo ($site_info["collect_url"]); ?>" class="input-text" size="50"></td></tr><tr><th>采集类型 :</th><td><input type="radio" name="type" class="radio_style" value="0" <?php if($site_info["type"] == 0): ?>checked="checked"<?php endif; ?> > &nbsp;系统采集&nbsp;&nbsp;&nbsp;
        <input type="radio" name="type" class="radio_style" value="1" <?php if($site_info["type"] == 1): ?>checked="checked"<?php endif; ?>> &nbsp;API采集
      </td></tr></table><input type="hidden" name="id" value="<?php echo ($site_info["id"]); ?>" /><input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" "></form></div></body></html>