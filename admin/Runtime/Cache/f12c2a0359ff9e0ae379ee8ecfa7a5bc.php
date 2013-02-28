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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><div class="pad-lr-10" ><form id="myform" name="myform" action="<?php echo u('items_collect/delete');?>" method="post" onsubmit="return check();"><div class="table-list"><table width="100%" cellspacing="0"><thead><tr><th width="4%"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th><th>来源网站</th><th>唯一标识</th><th>地址</th><th>最后采集时间</th><th>操作</th></tr></thead><tbody><?php if(is_array($sites_list)): $i = 0; $__LIST__ = $sites_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr><td align="center"><input type="checkbox" value="<?php echo ($val["id"]); ?>" name="id[]"></td><td align="center"><?php echo ($val["name"]); ?></td><td align="center"><?php echo ($val["alias"]); ?></td><td align="center"><?php echo ($val["site_domain"]); ?></td><td align="center"><?php echo ($val["collect_time"]); ?></td><td align="center"><a href="<?php echo u('items_collect/cate_collect',array('code'=>$val['alias']));?>" class="blue">自定义采集</a> |
            	<a href="<?php echo u('items_collect/collect',array('code'=>$val['alias']));?>" class="blue">一键采集</a> | 
                <a class="blue" href="javascript:edit(<?php echo ($val["id"]); ?>,'<?php echo ($val["name"]); ?>')">编辑</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div class="btn"><label for="check_box">全选/取消</label><input type="submit" class="button" name="dosubmit" value="<?php echo (L("delete")); ?>" onclick="return confirm('<?php echo (L("sure_delete")); ?>')"/></div></div></form></div><script language="javascript">function edit(id, name) {
	var lang_edit = "<?php echo (L("edit")); ?>";
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:lang_edit+'--'+name,id:'edit',iframe:'?m=items_collect&a=edit&id='+id,width:'500',height:'250'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script></body></html>