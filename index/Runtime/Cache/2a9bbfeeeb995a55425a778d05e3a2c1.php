<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"><title><?php echo ($seo["seo_title"]); ?></title><meta name="keywords" content="<?php echo ($seo["seo_keys"]); ?>" /><meta name="description" content="<?php echo ($seo["seo_desc"]); ?>" /><script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21211383"></script><link rel="stylesheet" type="text/css" href="__TMPL__public/css/style.css" /><script type="text/javascript">var def=<?php echo ($def); ?>;
</script><script type="text/javascript" src="__ROOT__/statics/js/loadindex.js"></script><link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/artDialog5.0/skins/mogujie.css" /><!--[if IE]><link rel="stylesheet" type="text/css" href="__TMPL__public/css/ie.css" /><![endif]--><!--[if lte IE 8]><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.corner.js"></script><script type="text/javascript">$(function(){ 
	$('.jq_corner').corner();
});
</script><![endif]--></head><body><div class="head"><div class="header"><h1><a title="<?php echo ($site_name); ?>" href="<?php echo ($site_domain); ?>"><img id="logoimg" alt="<?php echo ($site_name); ?>" src="__ROOT__/<?php echo ($site_logo); ?>" style="max-height:90px;"></a></h1><div id="search"><!--
			<form method="post" action="<?php echo u('bsearch/index');?>" onsubmit="return check_search(this);">			--><form method="get" action="index.php" name="searchForm" target="_blank"><div class="slt"><span><?php if(MODULE_NAME == 'search'): ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');" class="on">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');">查淘宝</a><?php elseif(MODULE_NAME == 'rebate'): ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');" class="on">查淘宝</a><?php else: ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');" class="on">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');">查淘宝</a><?php endif; ?></span></div><?php if(MODULE_NAME == 'search'): ?><input id="m" type="hidden" name="m" value="search"/><?php elseif(MODULE_NAME == 'rebate'): ?><input id="m" type="hidden" name="m" value="tsearch"/><?php else: ?><input id="m" type="hidden" name="m" value="bsearch"/><?php endif; ?><input id="a" type="hidden" name="a" value="index"/><div class="input_submit"><input type="text" value="<?php if($keywords != ''): echo ($keywords); else: ?>300家B2C网站商城商品，轻松搜索，一键分享！<?php endif; ?>" autocomplete="off" name="keywords" id="search_hd" /><button type="submit" class="search" title="搜索" onclick="return checkSearch();">搜 索</button></div></form></div><div class="login_top"><?php if(isset($user)): ?><ul><li class="l1"><div class="user_relation"><p><span class="l"><?php echo ($user["name"]); ?></span><span class="r"></span></p><ul style="display:none;"><li><a href="<?php echo u('uc/like');?>">我的主页</a></li><li><a href="<?php echo u('uc/account_face');?>">头像设置</a></li><li><a href="<?php echo u('uc/account_basic');?>">账号设置</a></li><?php if($is_cashback == 1): ?><li><a href="<?php echo u('uc/account_commission');?>">返利管理</a></li><?php endif; ?><li><a href="<?php echo u('uc/account_message');?>">短消息</a></li></ul></div></li><li><div id="share_goods" class="left top_share"><div class="button"><a href="javascript:void(0)">分享宝贝</a></div></div></li><?php if($is_cashback == 1): ?><li><a href="<?php echo u('uc/account_get_cash');?>">提现 </a></li><?php endif; ?><li class="last"><a href="<?php echo u('uc/logout');?>">退出</a></li></ul><?php else: ?><ul><li><a href="<?php echo u('uc/tao_login');?>"><img src="__TMPL__/public/images/taobao.png" /></a></li><li><a href="<?php echo u('uc/sina_login');?>"><img src="__TMPL__/public/images/sina.png" /></a></li><li><a href="<?php echo u('uc/qq_login');?>"><img src="__TMPL__/public/images/qq.png" /></a></li><li><a href="<?php echo u('uc/login');?>">登录</a></li><li class="last"><a href="<?php echo u('uc/register');?>">注册</a></li></ul><?php endif; ?></div></div></div><div class="nav"><div class="naver"><ul><li style="border-left:none;" class="dangqian"><a href="<?php echo ($site_domain); ?>" <?php if(MODULE_NAME == 'index'): ?>class="hover"<?php endif; ?>>首 页</a></li><?php if(is_array($nav_list['main'])): $i = 0; $__LIST__ = $nav_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><?php if($val['system'] == 1): ?><!--系统默认导航--><a href="<?php echo u(''.$val['alias'].'/index');?>" title="<?php echo ($val["name"]); ?>" <?php if(MODULE_NAME == $val['alias']): ?>class="hover"<?php endif; ?>><?php else: if($val['in_site'] == '0'): ?><!--站外链接--><a href="<?php echo ($val["url"]); ?>" title="<?php echo ($val["name"]); ?>" target="_blank" <?php if($val['system'] == 0): ?>class="f12 fnormal"<?php endif; ?>><?php else: ?><a href="<?php echo u('cate/index', array('cid'=>$val['items_cate_id']));?>" title="<?php echo ($val["name"]); ?>" <?php if((MODULE_NAME == 'cate') AND ($val['items_cate_id'] == $select_pid)): ?>class="hover"<?php endif; ?>><?php endif; endif; echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div><script type="text/javascript">$(function(){
	$("#search_hd").focus(function(){	
		if($(this).val()=='300家B2C网站商城商品，轻松搜索，一键分享！' || $(this).val()=='衣服，包包等热门分享内容，轻松查找！' || $(this).val()=='千万淘宝数据一键查找'){
			$(this).val('');
		}
		else{
			$(this).val();
		}		
	}).blur(function(){
		if($(this).val()=='300家B2C网站商城商品，轻松搜索，一键分享！' || $(this).val()=='衣服，包包等热门分享内容，轻松查找！' || $(this).val()=='千万淘宝数据一键查找'){
			$(this).val('');
		}
		else{
			$(this).val();
		}
	});
});
function checkSearch(){
	var fm = document.searchForm;	
	if (fm.keywords.value == '300家B2C网站商城商品，轻松搜索，一键分享！' || fm.keywords.value=='衣服，包包等热门分享内容，轻松查找！'  || fm.keywords.value=='千万淘宝数据一键查找') {
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
	if (fm.keywords.value == '300家B2C网站商城商品，轻松搜索，一键分享！' || fm.keywords.value=='衣服，包包等热门分享内容，轻松查找！' || fm.keywords.value=='千万淘宝数据一键查找') {
		$id('search_hd').value = val;
	}
	$id('m').value = m;
	for(var i=1;i<4;i++){
		$id('ish_' + i).className = '';
	}
	$id('ish_' + n).className = 'on';
}
function $id(val){
	return document.getElementById(val);
}

</script><div class="wrapper clearfix"><link rel="stylesheet" type="text/css" href="__TMPL__public/css/uc_v1.css" /><script type="text/javascript" src="__TMPL__/public/js/uc.js"></script><link rel="stylesheet" type="text/css" href="__ROOT__/statics/css/formvalidator.css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><div class="middle"><div class="uc clearfix account"><div class="register"><div id="reg_left"><h2>新会员注册</h2><div class="hint">加入<?php echo ($site_name); ?>，发现时尚，分享购物乐趣。</div><form action="" method="post" id="myform"><?php if(isset($err)): ?><div class="err" style="width:150px;"><div class="icon_<?php echo ($err["err"]); ?>"><?php echo ($err["msg"]); ?></div></div><?php endif; ?><table style="margin:40px 0px 0px 30px;"><tr><th><em class="red">*&nbsp;</em>登录帐号：</th><td><input type="text" class="input_text" id="name" name="name" value="<?php echo ($data["name"]); ?>"/></td></tr><tr><th><em class="red">*&nbsp;</em>电子邮箱：</th><td><input type="text" class="input_text" id="email" name="email" value="<?php echo ($data["email"]); ?>"/></td></tr><tr><th><em class="red">*&nbsp;</em>登录密码：</th><td><input type="password" class="input_text" name="passwd" id="passwd" value="<?php echo ($data["passwd"]); ?>"/></td></tr><tr><th><em class="red">*&nbsp;</em>确认密码：</th><td><input type="password" class="input_text" id="confirm_passwd"/></td></tr><tr><th>性别：</th><td><input type="radio" name="sex" value="0"/>男&nbsp;&nbsp;
                            	<input type="radio" name="sex" value="1"/>女&nbsp;&nbsp;
                                <input type="radio" name="sex" value="2" checked="checked"/>保密
                            </td></tr><tr><th><em class="red">*&nbsp;</em>验证码：</th><td><input type="text" name="verify" id="verify" class="input_text left" maxlength=4 style="width:100px;"/><img src="<?php echo u('public/verify');?>" class="verify_img" class="left"                              
								onclick="javascript:this.src='./?a=verify&m=public&tm='+Math.random()"
                                style="margin:5px 0px 0px 10px;"/></td></tr><tr><th></th><td><input name="dosubmit" type="submit" value=" " class="reg_btn"/></td></tr></table></form></div><div id="reg_right" class="login">            	已有账号?请直接登录
                <a class="login_btn" href="<?php echo u('uc/login');?>"></a><?php if($seo["sina_app_key"] && $seo.qq_app_key): ?><p>您也可以用以下方式登录</p><div class="login_list clearfix"><?php if(($seo["sina_app_key"]) != ""): ?><a href="<?php echo u('uc/sina_login');?>" class="sina" target="_blank"></a><?php endif; if(($seo["qq_app_key"]) != ""): ?><a href="<?php echo u('uc/qq_login');?>" class="qq" target="_blank"></a><?php endif; ?></div><?php endif; ?></div></div></div></div><script type="text/javascript">$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true});
	
	$("#name").formValidator({
		onshow:"用户帐号不能为空",
		onfocus:"用户帐号不能为空",
		oncorrect:'此用户可以使用'
		}).inputValidator({
			min:2,max:50,onerror:"用户帐号长度不合法"
			}).ajaxValidator({
					datatype : "html",
					async : true,
					url : def.root+"index.php?m=uc&a=check_user",
					success : function(data){
						if(data==0){
							return true;
						}else if(data==1){
							return false;
						}
						else{
							return false;
						}
					},
		buttons: $("#button"),
		error: function(XMLHttpRequest, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onerror : "用户已存在，请更换用户名",
		onwait : "正在验证，请稍候..."
	});

	
	
	$("#email").formValidator({onshow:"请填写邮箱",onfocus:"邮箱不能为空",oncorrect:'此邮箱可以使用'}).inputValidator({min:1,onerror:"请填写邮箱"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮件格式错误"}).ajaxValidator({
		datatype : "html",
		async : true,
		url : def.root+"index.php?m=uc&a=check_email",
		success : function(data){
			if(data==0){
				return true;
			}else if(data==1){
				return false;
			}
			else{
				return false;
			}
		},		
		error: function(XMLHttpRequest, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onerror : "邮箱已存在，请更换邮箱",
		onwait : "正在验证，请稍候..."
	});
	
	$("#passwd").formValidator({onshow:"填写密码",onfocus:"填写6位以上密码"}).inputValidator({min:6,onerror:"请填写6位以上密码"});
	$("#confirm_passwd").formValidator({onshow:"确认密码",onfocus:"确认密码",oncorrect:"填写正确"}).inputValidator({min:6,onerror:"请填写确认密码"}).compareValidator({desid:"passwd",operateor:"=",onerror:"两次输入密码不一致"});
	/*
    $("#verify").formValidator({onshow:"请填写验证码",onfocus:"请填写验证码",oncorrect:'验证码正确'}).inputValidator({min:1,onerror:"请填写验证码"}).ajaxValidator({
		datatype : "html",
		async : true,
		url : def.root+"index.php?m=uc&a=check_code",
		success : function(data){
			if(data==0){
				return true;
			}else if(data==1){
				return false;
			}
			else{
				return false;
			}
		},	
		error: function(XMLHttpRequest, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onerror : "验证码不正确",
		onwait : "正在验证，请稍候..."
	});	*/
});
</script></div><div class="foot"><div class="footer"><div class="footlj"><div class="logo2"><a href="./"><img src="__TMPL__public/images/logo2.png" /></a></div><div class="footlj_a"><h6>逛宝贝</h6><ul><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>548));?>">衣服</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>2));?>">鞋子</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>3));?>">包包</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>4));?>">配饰</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>5));?>">美妆</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>6));?>">家居</a></li></ul></div><div class="footlj_a"><h6>关于我们</h6><ul><?php if(is_array($fabout)): $i = 0; $__LIST__ = $fabout;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php if(($vo["url"]) == ""): echo u('article/index',array('id'=>$vo['id'])); else: echo ($vo["url"]); endif; ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a"><h6>合作伙伴</h6><ul><?php if(is_array($huoban_list)): $i = 0; $__LIST__ = $huoban_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_b"><h6>友情链接</h6><ul><?php if(is_array($flink_list)): $i = 0; $__LIST__ = $flink_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>" class="f_links fl"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_c"><h6>关注我们</h6><ul><?php if(($follow_us["weibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["weibo_url"]); ?>">新浪微博</a></li><?php endif; if(($follow_us["qqweibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqweibo_url"]); ?>" style="background:url(__TMPL__public/images/guanz5.png) no-repeat;">腾讯微博</a></li><?php endif; if(($follow_us["163_url"]) != ""): ?><li><a href="<?php echo ($follow_us["163_url"]); ?>" style="background:url(__TMPL__public/images/guanz6.png) no-repeat;">网易微博</a></li><?php endif; if(($follow_us["qqzone_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqzone_url"]); ?>" style="background:url(__TMPL__public/images/guanz2.png) no-repeat;">QQ空间</a></li><?php endif; if(($follow_us["douban_url"]) != ""): ?><li><a href="<?php echo ($follow_us["douban_url"]); ?>" style="background:url(__TMPL__public/images/guanz3.png) no-repeat;">豆瓣</a></li><?php endif; if(($follow_us["renren_url"]) != ""): ?><li><a href="<?php echo ($follow_us["renren_url"]); ?>" style="background:url(__TMPL__public/images/guanz4.png) no-repeat;">人人网</a></li><?php endif; ?></ul></div></div><div class="banquan">Powered by <a href="<?php echo ($site_domain); ?>"><?php echo ($site_name); ?></a>&nbsp;&nbsp;<?php echo ($site_icp); ?></div><div  class="banquan"><?php echo ($statistics_code); ?></div><div class="banquan"><?php echo ($site_share); ?></div><div class="browse none_f"><a class="close_z"></a>        	温馨提示：你正在使用的<b>IE6浏览器</b>，网购支付不安全，<?php echo ($site_name); ?>推荐 
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