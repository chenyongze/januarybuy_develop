<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"><title><?php echo ($seo["seo_title"]); ?></title><meta name="keywords" content="<?php echo ($seo["seo_keys"]); ?>" /><meta name="description" content="<?php echo ($seo["seo_desc"]); ?>" /><link rel="stylesheet" type="text/css" href="__TMPL__public/css/style.css" /><script type="text/javascript">var def=<?php echo ($def); ?>;
</script><script type="text/javascript" src="__ROOT__/statics/js/loadindex.js"></script><link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/artDialog5.0/skins/mogujie.css" /><!--[if IE]><link rel="stylesheet" type="text/css" href="__TMPL__public/css/ie.css" /><![endif]--><!--[if lte IE 8]><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.corner.js"></script><script type="text/javascript">$(function(){ 
	$('.jq_corner').corner();
});
</script><![endif]--></head><body><div class="head"><div class="header"><h1><a title="<?php echo ($site_name); ?>" href="<?php echo ($site_domain); ?>"><img id="logoimg" alt="<?php echo ($site_name); ?>" src="__ROOT__/<?php echo ($site_logo); ?>" style="max-height:90px;"></a></h1><div id="search"><!--
			<form method="post" action="<?php echo u('bsearch/index');?>" onsubmit="return check_search(this);">			--><form method="get" action="index.php" name="searchForm"><div class="slt"><span><?php if(MODULE_NAME == 'search'): ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');" class="on">找商品</a><?php else: ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');" class="on">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');">找商品</a><?php endif; ?></span></div><?php if(MODULE_NAME == 'search'): ?><input id="m" type="hidden" name="m" value="search"/><?php else: ?><input id="m" type="hidden" name="m" value="bsearch"/><?php endif; ?><input id="a" type="hidden" name="a" value="index"/><div class="input_submit"><input type="text" value="<?php if($keywords != ''): echo ($keywords); else: ?>300家B2C网站商城商品，轻松搜索，一键分享！<?php endif; ?>" autocomplete="off" name="keywords" id="search_hd" /><button type="submit" class="search" title="搜索" onclick="return checkSearch();">搜 索</button></div></form></div><div class="login_top"><?php if(isset($user)): ?><ul><li class="l1"><div class="user_relation"><p><span class="l"><?php echo ($user["name"]); ?></span><span class="r"></span></p><ul style="display:none;"><li><a href="<?php echo u('uc/like');?>">我的主页</a></li><li><a href="<?php echo u('uc/account_face');?>">头像设置</a></li><li><a href="<?php echo u('uc/account_basic');?>">账号设置</a></li><?php if($is_cashback == 1): ?><li><a href="<?php echo u('uc/account_commission');?>">返利管理</a></li><?php endif; ?><li><a href="<?php echo u('uc/account_message');?>">短消息</a></li></ul></div></li><li><div id="share_goods" class="left top_share"><div class="button"><a href="javascript:void(0)">分享宝贝</a></div></div></li><?php if($is_cashback == 1): ?><li><a href="<?php echo u('uc/account_get_cash');?>">提现 </a></li><?php endif; ?><li class="last"><a href="<?php echo u('uc/logout');?>">退出</a></li></ul><?php else: ?><ul><li><a href="<?php echo u('uc/sina_login');?>"><img src="__TMPL__/public/images/sina.png" /></a></li><li><a href="<?php echo u('uc/qq_login');?>"><img src="__TMPL__/public/images/qq.png" /></a></li><li><a href="<?php echo u('uc/login');?>">登录</a></li><li class="last"><a href="<?php echo u('uc/register');?>">注册</a></li></ul><?php endif; ?></div></div></div><div class="nav"><div class="naver"><ul><li style="border-left:none;" class="dangqian"><a href="<?php echo ($site_domain); ?>" <?php if(MODULE_NAME == 'index'): ?>class="hover"<?php endif; ?>>首 页</a></li><?php if(is_array($nav_list['main'])): $i = 0; $__LIST__ = $nav_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><?php if($val['system'] == 1): ?><!--系统默认导航--><a href="<?php echo u(''.$val['alias'].'/index');?>" title="<?php echo ($val["name"]); ?>" <?php if(MODULE_NAME == $val['alias']): ?>class="hover"<?php endif; ?>><?php else: if($val['in_site'] == '0'): ?><!--站外链接--><a href="<?php echo ($val["url"]); ?>" title="<?php echo ($val["name"]); ?>" target="_blank" <?php if($val['system'] == 0): ?>class="f12 fnormal"<?php endif; ?>><?php else: ?><a href="<?php echo u('cate/index', array('cid'=>$val['items_cate_id']));?>" title="<?php echo ($val["name"]); ?>" <?php if((MODULE_NAME == 'cate') AND ($val['items_cate_id'] == $select_pid)): ?>class="hover"<?php endif; ?>><?php endif; endif; echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div><script type="text/javascript">$(function(){
	$("#search_hd").focus(function(){	
		if($(this).val()=='300家B2C网站商城商品，轻松搜索，一键分享！' || $(this).val()=='衣服，包包等热门分享内容，轻松查找！'){
			$(this).val('');
		}
		else{
			$(this).val();
		}		
	}).blur(function(){
		if($(this).val()=='300家B2C网站商城商品，轻松搜索，一键分享！' || $(this).val()=='衣服，包包等热门分享内容，轻松查找！'){
			$(this).val('');
		}
		else{
			$(this).val();
		}
	});
});
function checkSearch(){
	var fm = document.searchForm;	
	if (fm.keywords.value == '300家B2C网站商城商品，轻松搜索，一键分享！' || fm.keywords.value=='衣服，包包等热门分享内容，轻松查找！') {
		fm.keywords.value='';
		fm.keywords.focus();
		return false;
	}
	else if(fm.keywords.value ==''){
		fm.keywords.value='';
		fm.keywords.focus();
		return false;
	}
}
function SearchSelect(n,val,m){	
	var fm = document.searchForm;	
	if (fm.keywords.value == '300家B2C网站商城商品，轻松搜索，一键分享！' || fm.keywords.value=='衣服，包包等热门分享内容，轻松查找！') {
		$id('search_hd').value = val;
	}
	$id('m').value = m;
	for(var i=1;i<3;i++){
		$id('ish_' + i).className = '';
	}
	$id('ish_' + n).className = 'on';
}
function $id(val){
	return document.getElementById(val);
}

</script><div class="wrapper clearfix"><script type="text/javascript" src="__TMPL__public/js/album.js"></script><link rel="stylesheet" type="text/css" href="__TMPL__public/css/album_index.css" /><?php if($display_b2c_ad == 1): ?><!--B2C随机广告--><div class="mt15"><?php if(is_array($ad_rel)): $key = 0; $__LIST__ = $ad_rel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key; if($key == 1): ?><a href="javascript:void(0)" style="border:none; margin-right:20px;" onclick="window.open('<?php echo ($val['click_url']); ?>')"><img src="<?php echo ($val["pic_url"]); ?>" /></a><?php else: ?><a href="javascript:void(0)" style="border:none;" onclick="window.open('<?php echo ($val['click_url']); ?>')"><img src="<?php echo ($val["pic_url"]); ?>" /></a><?php endif; endforeach; endif; else: echo "" ;endif; ?></div><!--B2C随机广告结束--><?php endif; ?><div class="content"><div id="group_nav" class="clearfix"><ul><li><a href="<?php echo u('album/index');?>" <?php if($cid == -1): ?>class="on"<?php endif; ?>>推荐</a></li><?php if(is_array($album_cate)): $i = 0; $__LIST__ = array_slice($album_cate,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a href="<?php echo u('album/index',array('cid'=>$val['id']));?>" <?php if($val["id"] == $cid): ?>class="on"<?php endif; ?>><?php echo ($val["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; if(!is_null($uid)): ?><li><a href="<?php echo uc('uc/index');?>" target="_blank">我的专辑</a></li><?php endif; ?></ul></div><div class="album_index infinite_scroll clearfix" style="min-height:200px;"><ul><?php if(is_array($album_list)): $key = 0; $__LIST__ = $album_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key; if($val["items_num"] != 0): ?><li class="album_list" style="<?php if(($key+1)%4 == 1): ?>margin-right:0px;<?php endif; ?>"><div class="clearfix title"><a class="left" href="<?php echo u('album/details',array('id'=>$val['id'],'uid'=>$val['uid']));?>"><?php echo ($val["title"]); ?></a></div><div class="groupbg"><ul><?php if(is_array($val['items'])): $k = 0; $__LIST__ = $val['items'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ival): $mod = ($k % 2 );++$k;?><li <?php if($k == 1): ?>class="first"<?php endif; if(($k == 2) or ($k == 3) or ($k == 6)): ?>style="margin-right: 0;"<?php endif; ?>><a href="<?php echo u('album/details',array('id'=>$val['id'],'uid'=>$val['uid']));?>" title="<?php echo ($val["title"]); ?>" target="_blank"><img <?php if($k == 1): ?>style="height:130px; max-width:130px;"<?php endif; ?> src="<?php echo ($ival); ?>" alt="<?php echo ($val["title"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="group_desc mt10"><span class="follow_red_btn tc cursor fr"><a class="white" target="_blank" href="<?php echo u('album/details',array('id'=>$val['id'],'uid'=>$val['uid']));?>">去看看</a></span><span class="share_nums gray"><?php echo ($val["items_num"]); ?>个宝贝</span></div></li><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul></div><div id="page" class="page mt20 clearfix" style="display: block;"><span class="page_num"><?php echo ($page); ?></span></div></div></div><div class="foot"><div class="footer"><div class="footlj"><div class="logo2"><a href="./"><img src="__TMPL__public/images/logo2.png" /></a></div><div class="footlj_a"><h6>逛宝贝</h6><ul><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>548));?>">衣服</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>2));?>">鞋子</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>3));?>">包包</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>4));?>">配饰</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>5));?>">美妆</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>6));?>">家居</a></li></ul></div><div class="footlj_a"><h6>关于我们</h6><ul><?php if(is_array($fabout)): $i = 0; $__LIST__ = $fabout;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php if(($vo["url"]) == ""): echo u('article/index',array('id'=>$vo['id'])); else: echo ($vo["url"]); endif; ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a"><h6>合作伙伴</h6><ul><?php if(is_array($huoban_list)): $i = 0; $__LIST__ = $huoban_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_b"><h6>友情链接</h6><ul><?php if(is_array($flink_list)): $i = 0; $__LIST__ = $flink_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>" class="f_links fl"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_c"><h6>关注我们</h6><ul><?php if(($follow_us["weibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["weibo_url"]); ?>">新浪微博</a></li><?php endif; if(($follow_us["qqweibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqweibo_url"]); ?>" style="background:url(__TMPL__public/images/guanz5.png) no-repeat;">腾讯微博</a></li><?php endif; if(($follow_us["163_url"]) != ""): ?><li><a href="<?php echo ($follow_us["163_url"]); ?>" style="background:url(__TMPL__public/images/guanz6.png) no-repeat;">网易微博</a></li><?php endif; if(($follow_us["qqzone_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqzone_url"]); ?>" style="background:url(__TMPL__public/images/guanz2.png) no-repeat;">QQ空间</a></li><?php endif; if(($follow_us["douban_url"]) != ""): ?><li><a href="<?php echo ($follow_us["douban_url"]); ?>" style="background:url(__TMPL__public/images/guanz3.png) no-repeat;">豆瓣</a></li><?php endif; if(($follow_us["renren_url"]) != ""): ?><li><a href="<?php echo ($follow_us["renren_url"]); ?>" style="background:url(__TMPL__public/images/guanz4.png) no-repeat;">人人网</a></li><?php endif; ?></ul></div></div><div class="banquan">Powered by <a href="<?php echo ($site_domain); ?>"><?php echo ($site_name); ?></a>&nbsp;&nbsp;<?php echo ($site_icp); ?></div><div  class="banquan"><?php echo ($statistics_code); ?></div><div class="banquan"><?php echo ($site_share); ?></div><div class="browse none_f"><a class="close_z"></a>        	温馨提示：你正在使用的<b>IE6浏览器</b>，网购支付不安全，<?php echo ($site_name); ?>推荐 
            <a class="jisuie" href="http://download.microsoft.com/download/1/6/1/16174D37-73C1-4F76-A305-902E9D32BAC9/IE8-WindowsXP-x86-CHS.exe" target="_blank">IE8浏览器</a>，
            <a class="jisugg" href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank">Chrome浏览器</a>，
            <a class="jisuff" href="http://download.firefox.com.cn/releases/partners/baidu/webins3.0/zh-CN/Firefox-setup.exe" target="_blank">firefox浏览器</a>，
            网速更快更安全。
        </div></div></div><div style="display:none;" id="gotopbtn" class="to_top"></div><div id="user_info_tip" style="display:none;"><div class="tip_info"><img src="__ROOT__/statics/images/loading_60.gif" /></div></div><script type="text/javascript">    //IE6提示
    var isIE6= /msie 6/i.test(navigator.userAgent);
    if(isIE6){
        $(".none_f").css("display","block");
        $(".close_z").click(function(){
            $(".none_f").css("display","none")
        })
    }
</script><script>        $(function(){
            var classname;
            $(".ucenter-list ul li").each(function(){
                $(this).mousemove(function(){
                    $(this).css("background","#FFF3F3");
                    classname = $(this).find("span").attr('class');
                    $(this).find("span").addClass('n'+classname);
                    
                }).mouseout(function(){
                    $(this).css("background","#F9F7F8");
                    $(this).find("span").removeClass('n'+classname);                    
                })
            })
        })
</script></body></html>