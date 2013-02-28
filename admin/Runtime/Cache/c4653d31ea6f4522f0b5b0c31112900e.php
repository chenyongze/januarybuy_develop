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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><form action="<?php echo u('items/batch_add');?>" method="post" name="myform" id="myform"  enctype="multipart/form-data" style="margin-top:10px;"><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">基本信息</li></ul><div id="div_setting_1" class="contentList pad-10"><div style="padding:10px; overflow:hidden;"><div class="main_top" style="clear:both;"><h4>温馨提示：</h4><p class="green"><font color=red>注：一行一个“淘宝，天猫” <a href="<?php echo u('seller_list/index');?>" style="color:blue;">b2c商家</a>的URL</font></p><p class="green">建议每次批量获取的url小于20个</p><p class="green"> http://detail.tmall.com/item.htm?id=12903959631<br/>					http://item.vancl.com/0084067.html?ref=ch_dresses_hp_1|hp-hp-head-nav_7-n<br/>					http://www.360buy.com/product/1003364975.html<br/>					http://product.dangdang.com/product.aspx?product_id=1008144122#ref=www-0-H<br/></p></div></div><table><tr><th width="120">商品归类 :</th><td style="padding-bottom:10px;"><select id="parent_cate" onchange="get_child_cates(this)"><option value="0">--请选择分类--</option><?php if(is_array($cate_list['parent'])): $i = 0; $__LIST__ = $cate_list['parent'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><optgroup label="<?php echo ($val["name"]); ?>"></optgroup><?php if(is_array($cate_list['sub'][$val['id']])): $i = 0; $__LIST__ = $cate_list['sub'][$val['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sval): $mod = ($i % 2 );++$i;?><option value="<?php echo ($sval["id"]); ?>" <?php if($item_pid == $sval['id']): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($sval["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?></select><select id="second_cate" name="cid" style="display:none;"></select></td></tr><tr><th>网址URL：</th><td><textarea name="urls" id="urls" cols="100" rows="10"></textarea></td></tr><tr><th>抓取消息:</th><td id="cmd"></td></tr></table></div><div class="btn"><input type="button" value="抓取" class="button" onclick="collect();"></div></div></div></form><script type="text/javascript">function collect(){ 
	$('#cmd').show();	
	if($('#parent_cate').val()=='0'){	
		console.log($('#parent_cate').val());
		alert('请选择分类');
		return false;
	}	
	$.post("<?php echo u('items/batch_add');?>",{dosubmit:true,urls:$('#urls').val(),cid:$('#second_cate').val()},function(data){
		$('#cmd').html("");		
		if(data.data.code){
			alert(data.data.msg);
			return;
		}
		var html="<div><h4>成功更新列表:</h4><div style='color:blue;'>"+data.data.success_update_list+"</div></div><br/>\
		<div><h4>成功添加列表:</h4><div style='color:green;'>"+data.data.success_insert_list+"</div></div>\
		<div><h4>失败列表:</h4><div style='color:red;'>"+data.data.fail_list+"</div></div>";
		$('#cmd').append(html);					  			
		//console.log(data);
	},'json');	
}	
function get_child_cates(obj)
{
	$('#second_cate').css("display","");
	var parent_id = $(obj).val();
	if( parent_id ){
		$.get('?m=items&a=get_child_cates&parent_id='+parent_id,function(data){				
			$('#second_cate').html(data);
	    });		
    }
}
</script></body></html>