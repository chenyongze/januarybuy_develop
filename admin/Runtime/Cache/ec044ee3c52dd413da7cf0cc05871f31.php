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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; if($code == 'taobao'): ?><form action="" method="get" name="myform" id="myform"  enctype="multipart/form-data" style="margin-top:10px;"><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">分类采集</li></ul><div id="div_setting_1" class="contentList pad-10"><div style="padding:10px; overflow:hidden;"><div class="main_top" style="clear:both;"><h4>温馨提示：</h4><p class="green">1.点击筛选可以对淘宝同步的数据筛选入库，筛选自己喜欢的商品入库</p><p class="green">2.点击直接入库，则把淘宝同步的数据直接同步到自己的数据库</p></div></div><table width="100%" cellspacing="0" class="table_form"><tbody><tr><th width="150">淘宝分类：</th><td><select name="cid" id="cid"><option value="0">--所有分类--</option><?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate["cid"]); ?>"><?php echo ($cate["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><span class="gray ml10"> 淘宝标准商品后台类目</span></td></tr><tr><th>商品价格：</th><td><input type="text" name="start_price" id="start_price" size="8" class="input-text" /> - 
			                    <input type="text" name="end_price" id="end_price" size="8" class="input-text" /> 元 
			                    <span class="gray ml10">起始价格和最高价格一起设置才有效</span></td></tr><tr><th>佣金比率：</th><td><input type="text" name="start_commissionRate" id="start_commissionRate" size="5" class="input-text" /> % - 
			                    <input type="text" name="end_commissionRate" id="end_commissionRate" size="5" class="input-text" /> % 
			                    <span class="gray ml10">输入数值（100 = 1%）的意思 设定范围（100 - 5000） （最低 < 最高） 建议不要设置太高，避免个别分类无法调用到商品！建议默认:（200-5000）</span></td></tr><tr><th>30天推广量：</th><td><input type="text" name="start_commissionNum" id="start_commissionNum" size="8" class="input-text" /> - 
			                    <input type="text" name="end_commissionNum" id="end_commissionNum" size="8" class="input-text" /><span class="gray ml10">最低推广量和最高推广量一起设置才有效</span></td></tr><tr><th>30天成交量：</th><td><input type="text" name="start_totalnum" size="8" id="start_totalnum" class="input-text" /> - 
			                    <input type="text" name="end_totalnum" size="8" id="end_totalnum" class="input-text" /><span class="gray ml10">最低销量和最高销量一起设置才有效</span></td></tr><tr><th>卖家信用：</th><td><select name="levelstart" id="levelstart"><option value="5goldencrown" label="5金冠">5金冠</option><option value="4goldencrown" label="4金冠">4金冠</option><option value="3goldencrown" label="3金冠">3金冠</option><option value="2goldencrown" label="2金冠">2金冠</option><option value="1goldencrown" label="1金冠">1金冠</option><option value="5crown" label="5冠">5冠</option><option value="4crown" label="4冠">4冠</option><option value="3crown" label="3冠">3冠</option><option value="2crown" label="2冠">2冠</option><option value="1crown" label="1冠">1冠</option><option value="5diamond" label="5钻">5钻</option><option value="4diamond" label="4钻">4钻</option><option value="3diamond" label="3钻">3钻</option><option value="2diamond" label="2钻">2钻</option><option value="1diamond" label="1钻" selected="selected">1钻</option><option value="5heart" label="5星">5星</option><option value="4heart" label="4星">4星</option><option value="3heart" label="3星">3星</option><option value="2heart" label="2星">2星</option><option value="1heart" label="1星">1星</option></select> - 
									<select name="levelend" id="levelend"><option value="5goldencrown" label="5金冠">5金冠</option><option value="4goldencrown" label="4金冠">4金冠</option><option value="3goldencrown" label="3金冠">3金冠</option><option value="2goldencrown" label="2金冠">2金冠</option><option value="1goldencrown" label="1金冠">1金冠</option><option value="5crown" label="5冠">5冠</option><option value="4crown" label="4冠">4冠</option><option value="3crown" label="3冠">3冠</option><option value="2crown" label="2冠">2冠</option><option value="1crown" label="1冠">1冠</option><option value="5diamond" label="5钻">5钻</option><option value="4diamond" label="4钻">4钻</option><option value="3diamond" label="3钻">3钻</option><option value="2diamond" label="2钻">2钻</option><option value="1diamond" label="1钻">1钻</option><option value="5heart" label="5星">5星</option><option value="4heart" label="4星">4星</option><option value="3heart" label="3星">3星</option><option value="2heart" label="2星">2星</option><option value="1heart" label="1星">1星</option></select><span>设置全站商品卖家信用过滤,不在设定范围内的卖家以及商品将会被过滤。建议（1钻 - 5金冠）</span></td></tr><tr><th>采集关键字：</th><td><input name="keyword" id="keyword" type="text" class="input-text" size="40" /><span class="gray ml10">多个关键词以空格隔开</span></td></tr><tr><th></th><td><input type="hidden" name="m" value="items_collect" /><input type="hidden" name="a" value="search_tao" /><input type="submit" name="search" class="btn btn_submit mr10" value="搜索筛选" />								&nbsp;&nbsp;&nbsp;
			                    <input type="button" name="import" class="J_showdialog btn" data-tdtype="import" value="直接入库" /></td></tr></tbody></table></div></div></div></form><script type="text/javascript">//获取子分类
function get_child_cates(obj){
	$('#second_cate').css("display","");
	var parent_id = $(obj).val();
	if( parent_id ){
		$.get('?m=items&a=get_child_cates&parent_id='+parent_id,function(data){				
			$('#second_cate').html(data);
	    });		
    }
}
$('input[data-tdtype="import"]').live('click',function(){
	
	var taocid=$.trim($('#cid').val());
	var start_price=$.trim($('#start_price').val());	
	var end_price=$.trim($('#end_price').val());	
	var start_commissionRate=$.trim($('#start_commissionRate').val());	
	var end_commissionRate=$.trim($('#end_commissionRate').val());	
	var start_commissionNum=$.trim($('#start_commissionNum').val());	
	var end_commissionNum=$.trim($('#end_commissionNum').val());	
	var start_totalnum=$.trim($('#start_totalnum').val());		
	var end_totalnum=$.trim($('#end_totalnum').val());	
	var levelstart=$.trim($('#levelstart').val());	
	var levelend=$.trim($('#levelend').val());	
	var keyword=$.trim($('#keyword').val());	
	window.top.art.dialog({
		title:'淘宝数据采集',
		id:'collect',
		iframe:'?m=items_collect&a=catetaobao_collect&taocid='+
			taocid+'&start_price='+
			start_price+'&end_price='+
			end_price+'&start_commissionRate='+
			start_commissionRate+'&end_commissionRate='+
			end_commissionRate+'&start_commissionNum='+start_commissionNum+'&end_commissionNum='+
			end_commissionNum+'&start_totalnum='+
			start_totalnum+'&end_totalnum='+end_totalnum+'&levelstart='+
			levelstart+'&levelend='+levelend+'&keyword='+keyword+'',
		width:'450',
		height:'200'
	});	
	
})
</script><?php elseif($code == 'miao'): ?><form action="" method="get" name="myform" id="myform"  enctype="multipart/form-data" style="margin-top:10px;"><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">分类采集</li></ul><div id="div_setting_1" class="contentList pad-10"><div style="padding:10px; overflow:hidden;"><div class="main_top" style="clear:both;"><h4>温馨提示：</h4><p class="green">1.点击筛选可以对B2C同步的数据筛选入库，筛选自己喜欢的商品入库</p><p class="green">2.点击直接入库，则把B2C同步的数据直接同步到自己的数据库</p></div></div><table width="100%" cellspacing="0" class="table_form"><tbody><tr><th width="150">59秒分类：</th><td><select name="cid" id="cid"><option value="0">--所有分类--</option><?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><option value="<?php echo ($cate["cid"]); ?>"><?php echo ($cate["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select><span class="gray ml10"> 59秒标准商品后台类目</span></td></tr><tr><th>商品价格：</th><td><input type="text" name="start_price" id="start_price" size="8" class="input-text" /> - 
			                    <input type="text" name="end_price" id="end_price" size="8" class="input-text" /> 元 
			                    <span class="gray ml10">起始价格和最高价格一起设置才有效</span></td></tr><tr><th>所属商家：</th><td><input name="seller_name" id="seller_name" type="text" class="input-text" size="40" /><span class="gray ml10">请填写商家名称，以后台商家列表的商家名称为准，不填写则默认为所有商家,<span style="color:red;">提示:请查看后台商家列表是否有商家，没有的话设置此项不起作用</span></span></td></tr><tr><th>采集关键字：</th><td><input name="keyword" id="keyword" type="text" class="input-text" size="40" /><span class="gray ml10">多个关键词以空格隔开</span></td></tr><tr><th></th><td><input type="hidden" name="m" value="items_collect" /><input type="hidden" name="a" value="search_miao" /><input type="submit" name="search" class="btn btn_submit mr10" value="搜索筛选" />								&nbsp;&nbsp;&nbsp;
			                    <input type="button" name="import" class="J_showdialog btn" data-tdtype="import" value="直接入库" /></td></tr></tbody></table></div></div></div></form><script type="text/javascript">//获取子分类
$('input[data-tdtype="import"]').live('click',function(){	
	var miaocid=$.trim($('#cid').val());
	var start_price=$.trim($('#start_price').val());	
	var end_price=$.trim($('#end_price').val());
	var seller_name=$.trim($('#seller_name').val());
	var keyword=$.trim($('#keyword').val());		
	window.top.art.dialog({
		title:'59秒数据采集',
		id:'collect',
		iframe:'?m=items_collect&a=catemiao_collect&miaocid='+
			miaocid+'&start_price='+
			start_price+'&end_price='+
			end_price+'&keyword='+keyword+'&seller_name='+seller_name+'',
		width:'450',
		height:'200'
	});	
})
</script><?php endif; ?></body></html>