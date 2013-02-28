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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><form id="myform" name="myform" action="<?php echo u('items_collect/author_tao');?>" method="post"><div class="pad-10"><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="100">第一步 :</th><td><a target="_blank" style="color:#0364AE;" href="https://oauth.taobao.com/authorize?response_type=code&client_id=<?php echo ($taobao["taobao_appkey"]); ?>&redirect_uri=<?php echo ($taobao["site_domain"]); ?>/admin.php?m=taoOauth&state=1">点击获取淘宝授权</a><span class="gray">（说明：授权前请设置好您的淘宝appkey，appsecret，否则没法授权成功）</span></td></tr><tr><th >第二步 :</th><td>session：<input type="text" name="tao_session" size="40" value="<?php echo ($taobao["tao_session"]); ?>" id="tao_session"><span class="gray">必须填写,否则没法同步订单</span></td></tr><tr><th>第三步 :</th><td><input type="submit" value="保存" onclick="return submitFrom();" name="dosubmit" class="button" id="dosubmit"></td></tr><!--
		    <tr><th>第三步 :</th><td><a href="<?php echo u('taoOauth/refresh_token');?>">刷新令牌</a><span class="gray">(说明：不刷新令牌的话session只能保存一天，一天后将无效，刷新令牌后能延长session保存时间，默认为一年，刷新令牌需要主机支持openssl组件)</span></td></tr>		 --><tr></tr><tr><th width="120px">错误排查：</th><td><span class="gray">请访问淘宝开放平台文章排查错误</span><a style="color: #0364AE;" href="http://open.taobao.com/doc/detail.htm?spm=0.0.0.21.8xdyqD&id=118#s9" target="_blank">http://open.taobao.com/doc/detail.htm?spm=0.0.0.21.8xdyqD&id=118#s9</a></td></tr><tr><th></th><td><br><br><a href="<?php echo u('items_collect/taobaoapi');?>" style="color:#0364AE;">返回淘宝api设置</a></td></tr><tr></table></div></div></form><script type="text/javascript">function submitFrom(){	
   var tao_session=$('#tao_session').val();
   if(tao_session==''){
   		alert('session不能为空');
		return false;
   }		
   return true;
}
</script></body></html>