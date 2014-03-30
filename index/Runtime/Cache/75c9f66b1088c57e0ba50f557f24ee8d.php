<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"><title><?php echo ($seo["seo_title"]); ?></title><meta name="keywords" content="<?php echo ($seo["seo_keys"]); ?>" /><meta name="description" content="<?php echo ($seo["seo_desc"]); ?>" /><link rel="stylesheet" type="text/css" href="__TMPL__public/css/style.css" /><script type="text/javascript">var def=<?php echo ($def); ?>;
</script><script type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.masonry.js"></script><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.infinitescroll.js"></script><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.cookie.js"></script><link rel="stylesheet" type="text/css" href="__ROOT__/statics/js/artDialog5.0/skins/mogujie.css" /><script type="text/javascript" src="__ROOT__/statics/js/artDialog5.0/source/artDialog.js"></script><script type="text/javascript" src="__ROOT__/statics/js/artDialog5.0/artDialog.plugins.min.js"></script><script type="text/javascript" src="__TMPL__public/js/loadjs.js"></script><!--[if IE]><link rel="stylesheet" type="text/css" href="__TMPL__public/css/ie.css" /><![endif]--><!--[if lte IE 8]><script type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/jquery.corner.js"></script><script type="text/javascript">$(function(){ 
	$('.jq_corner').corner();
});
</script><![endif]--></head><body><div class="head"><div class="header"><h1><a title="<?php echo ($site_name); ?>" href="<?php echo ($site_domain); ?>"><img id="logoimg" alt="<?php echo ($site_name); ?>" src="__ROOT__/<?php echo ($site_logo); ?>" style="max-height:90px;"></a></h1><div id="search"><!--
			<form method="post" action="<?php echo u('bsearch/index');?>" onsubmit="return check_search(this);">			--><form method="get" action="index.php" name="searchForm" target="_blank"><div class="slt"><span><?php if(MODULE_NAME == 'search'): ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');" class="on">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');">查淘宝</a><?php elseif(MODULE_NAME == 'rebate'): ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');" class="on">查淘宝</a><?php else: ?><a id="ish_1" onclick="SearchSelect(1,'300家B2C网站商城商品，轻松搜索，一键分享！','bsearch');" class="on">分享宝贝</a><a id="ish_2" onclick="SearchSelect(2,'衣服，包包等热门分享内容，轻松查找！','search');">找商品</a><a id="ish_3" onclick="SearchSelect(3,'千万淘宝数据一键查找','tsearch');">查淘宝</a><?php endif; ?></span></div><?php if(MODULE_NAME == 'search'): ?><input id="m" type="hidden" name="m" value="search"/><?php else: ?><input id="m" type="hidden" name="m" value="bsearch"/><?php endif; ?><input id="a" type="hidden" name="a" value="index"/><div class="input_submit"><input type="text" value="<?php if($keywords != ''): echo ($keywords); else: ?>300家B2C网站商城商品，轻松搜索，一键分享！<?php endif; ?>" autocomplete="off" name="keywords" id="search_hd" /><button type="submit" class="search" title="搜索" onclick="return checkSearch();">搜 索</button></div></form></div><div class="login_top"><?php if(isset($user)): ?><ul><li class="l1"><div class="user_relation"><p><span class="l"><?php echo ($user["name"]); ?></span><span class="r"></span></p><ul style="display:none;"><li><a href="<?php echo u('uc/like');?>">我的主页</a></li><li><a href="<?php echo u('uc/account_face');?>">头像设置</a></li><li><a href="<?php echo u('uc/account_basic');?>">账号设置</a></li><?php if($is_cashback == 1): ?><li><a href="<?php echo u('uc/account_commission');?>">返利管理</a></li><?php endif; ?><li><a href="<?php echo u('uc/account_message');?>">短消息</a></li></ul></div></li><li><div id="share_goods" class="left top_share"><div class="button"><a href="javascript:void(0)">分享宝贝</a></div></div></li><li><a href="<?php echo u('uc/account_get_cash');?>">提现 </a></li><li class="last"><a href="<?php echo u('uc/logout');?>">退出</a></li></ul><?php else: ?><ul><li><a href="<?php echo u('uc/tao_login');?>"><img src="__TMPL__/public/images/taobao.png" /></a></li><li><a href="<?php echo u('uc/sina_login');?>"><img src="__TMPL__/public/images/sina.png" /></a></li><li><a href="<?php echo u('uc/qq_login');?>"><img src="__TMPL__/public/images/qq.png" /></a></li><li><a href="<?php echo u('uc/login');?>">登录</a></li><li class="last"><a href="<?php echo u('uc/register');?>">注册</a></li></ul><?php endif; ?></div></div></div><div class="nav"><div class="naver"><ul><li style="border-left:none;" class="dangqian"><a href="<?php echo ($site_domain); ?>" <?php if(MODULE_NAME == 'index'): ?>class="hover"<?php endif; ?>>首 页</a></li><?php if(is_array($nav_list['main'])): $i = 0; $__LIST__ = $nav_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><?php if($val['system'] == 1): ?><!--系统默认导航--><a href="<?php echo u(''.$val['alias'].'/index');?>" title="<?php echo ($val["name"]); ?>" <?php if(MODULE_NAME == $val['alias']): ?>class="hover"<?php endif; ?>><?php else: if($val['in_site'] == '0'): ?><!--站外链接--><a href="<?php echo ($val["url"]); ?>" title="<?php echo ($val["name"]); ?>" target="_blank" <?php if($val['system'] == 0): ?>class="f12 fnormal"<?php endif; ?>><?php else: ?><a href="<?php echo u('cate/index', array('cid'=>$val['items_cate_id']));?>" title="<?php echo ($val["name"]); ?>" <?php if((MODULE_NAME == 'cate') AND ($val['items_cate_id'] == $select_pid)): ?>class="hover"<?php endif; ?>><?php endif; endif; echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div></div><script type="text/javascript">$(function(){
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

</script><div class="wrapper clearfix"><link rel="stylesheet" type="text/css" href="__TMPL__public/css/ucindex.css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><link rel="stylesheet" type="text/css" href="__TMPL__public/css/account.css" /><link href="__ROOT__/statics/css/formvalidator.css" rel="stylesheet" type="text/css" /><!--全局样式--><link rel="stylesheet" type="text/css" href="__TMPL__public/css/uc/common.css" /><!--样式--><link rel="stylesheet" type="text/css" href="__TMPL__public/css/uc/css_b.css" /><script type="text/javascript" src="__ROOT__/statics/js/dateselect.js"></script><script type="text/javascript" src="__ROOT__/statics/js/area.js"></script><script type="text/javascript" src="__ROOT__/statics/js/zeroclipboard.js"></script><div class="ucleft"><!--用户--><!--用户--><div class="ucenter"><div class="ucface"><?php if($u['id'] != $user['id']): ?><img src="<?php echo getUserFace($u['id'],'m');?>"/><?php else: ?><a href="<?php echo u('uc/account_face');?>" title="修改头像"><img src="<?php echo getUserFace($u['id'],'m');?>"/></a><?php endif; ?></div><div class="ucenter_right"><?php if($u['id'] != $user['id']): ?><span class="ucenter_name"><?php echo ($u["name"]); ?></span><?php else: ?><span class="ucenter_name"><a href="<?php echo u('uc/account_basic');?>" title="修改资料"><?php echo ($u["name"]); ?></a></span><?php endif; ?><ul><?php if($u['id'] != $user['id']): ?><li><a class="add_follow <?php if($u["is_follow"] == 1): ?>yet<?php endif; ?>" fans_id="<?php echo ($u["id"]); ?>" href="javascript:void(0)"></a></li><?php else: ?><p>站内积分：<?php echo ($u["integral"]); ?>分</p><p>可用余额：<?php echo ($u["money"]); ?>元</p><p>可用<?php if($cashback_type == '1'): ?>集分宝
					  <?php else: echo ($tb_fanxian_name); endif; ?>：
			 <?php echo ($u["jifenbao"]); echo ($tb_fanxian_unit); ?></p><?php endif; ?></ul></div><div class="ucenter_content"><span id="user_info_span"><?php echo ($u["info"]); ?></span><?php if($u['id'] == $user['id']): ?><a href="javascript:void(0)" class="uc_home_link" id="user_info" uid="<?php echo ($user['id']); ?>">[编辑]</a><?php endif; ?></div><div class="ucenter_tl"><ul><li><span>分享</span><br/><?php echo ($u["share_num"]); ?></li><li class="solid"><span>专辑</span><br/><?php echo ($u["album_num"]); ?></li><li><span>喜欢</span><br/><?php echo ($u["like_num"]); ?></li></ul></div><div class="ucenter-list"><ul><?php if($u['id'] != $user['id']): ?><li><span class="li1"></span><a href="<?php echo uc('uc/index');?>"><?php if($u['sex']==0){ ?>他<?php }elseif($u['sex']==1){ ?>她<?php }else{ ?>ta<?php } ?>的专辑</a></li><li><span class="li2"></span><a href="<?php echo uc('uc/like');?>"><?php if($u['sex']==0){ ?>他<?php }elseif($u['sex']==1){ ?>她<?php }else{ ?>ta<?php } ?>的喜欢</a></li><li><span class="li3"></span><a href="<?php echo uc('uc/share');?>"><?php if($u['sex']==0){ ?>他<?php }elseif($u['sex']==1){ ?>她<?php }else{ ?>ta<?php } ?>的分享</a></li><li><span class="li4"></span><a href="<?php echo uc('uc/follow');?>"><?php if($u['sex']==0){ ?>他<?php }elseif($u['sex']==1){ ?>她<?php }else{ ?>ta<?php } ?>的关注</a></li><li><span class="li5"></span><a href="<?php echo uc('uc/fans');?>"><?php if($u['sex']==0){ ?>他<?php }elseif($u['sex']==1){ ?>她<?php }else{ ?>ta<?php } ?>的粉丝</a></li><?php else: ?><li><span class="li1"></span><a href="<?php echo u('uc/index');?>">我的专辑</a><a id="create_album" href="javascript:void(0)" class="red">创建专辑</a></li><li><span class="li2"></span><a href="<?php echo u('uc/like');?>">我的喜欢</a></li><li><span class="li3"></span><a href="<?php echo u('uc/share');?>">我的分享</a></li><li><span class="li4"></span><a href="<?php echo u('uc/follow');?>">我的关注</a></li><li><span class="li5"></span><a href="<?php echo u('uc/fans');?>">我的粉丝</a></li><li><span class="li6"></span><a href="<?php echo u('uc/account_basic');?>">账号设置</a></li><?php if($is_cashback == 1): ?><!--是否开启返现--><li><span class="li7"></span><a href="<?php echo u('uc/account_commission');?>">返利管理</a></li><?php endif; ?><li><span class="li8"></span><a href="<?php echo u('uc/account_invitation');?>">邀请好友</a></li><li><span class="li9"></span><a href="<?php echo u('uc/account_message');?>">短信息</a></li><li><span class="li10"></span><a href="<?php echo u('uc/account_exchange');?>">兑换商品</a></li><?php endif; ?></ul></div></div><!--用户--><br clear="all"/></div><div class="ucright"><div class="uccontent"><div class="uc_account clearfix"><!--右侧--><div class="right_region exchange"><div class="right_region account"><p>方式一、这是您的专用邀请链接，请通过QQ或MSN发送给好友：</p><textarea style="width:600px;height:60px; margin:10px 0;" id="uc_url" readonly="readonly">女人天生爱逛街，和我们一起来逛吧！~<?php echo ($site_domain); ?></textarea><p><input type="button" class="submit" id="copy_url" value="复制" name="dosubmit"/></p><p class="clearfix">方式二、通过SNS网站分享邀请好友：</p><div class="share"><a class="renren" href="javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent('<?php echo ($site_domain); ?>')+'&title='+encodeURIComponent('<?php echo ($share["info"]); ?>'));void(0)">人人网</a><a class="kaixin" href="javascript:window.open('http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('<?php echo ($share["info"]); ?>')+'&rurl='+encodeURIComponent('<?php echo ($site_domain); ?>'));void(0)">开心网</a><a class="sina" href="javascript:window.open('http://service.t.sina.com.cn/share/share.php?title='+encodeURIComponent('<?php echo ($share["info"]); ?>'));void(0)">新浪微博</a><a class="sohu" href="javascript:window.open('http://t.sohu.com/third/post.jsp?title='+encodeURIComponent('<?php echo ($share["info"]); ?>')+'&url='+encodeURIComponent('<?php echo ($site_domain); ?>')+'&content=utf-8');void(0)">搜狐微博</a><a class="qzone" href="javascript:window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title='+encodeURIComponent('<?php echo ($share["info"]); ?>')+'&url='+encodeURIComponent('<?php echo ($site_domain); ?>')+'&content=utf-8');void(0)">QQ空间</a><a class="tqq" href="javascript:window.open('http://share.v.t.qq.com/index.php?c=share&a=index&url='+encodeURIComponent('<?php echo ($site_domain); ?>')+'&content='+encodeURIComponent('<?php echo ($share["info"]); ?>')+'');void(0)">腾讯微博</a></div></div></div><div style="clear:both;"></div></div><script type="text/javascript">//var sex=$.trim("<?php echo (($user["sex"])?($user["sex"]):'0'); ?>");
//var brithday=$.trim("<?php echo ($user["brithday"]); ?>");
//var address=$.trim("<?php echo ($user["address"]); ?>");
//
//$(function(){ 	  
//	$.formValidator.initConfig({formid:"myform",autotip:true,
//		onerror:function(msg,obj){
//			art.dialog({content:msg,lock:true,width:'200',height:'50'}, 
//					   function(){this.close();$(obj).focus();})
//			}
//	});		
//	$("#name").formValidator({onshow:"填写昵称",onfocus:"6个字符以上"})
//		.inputValidator({min:6,onerror:"6个字符以上"});
//		
//	$("input[name='sex'][value='"+sex+"']").attr("checked","checked");
//	//出生日期
//	var year = 1985;
//	var month = 1;
//	var day = 1;	
//	if(brithday != null){
//	  	var bths = brithday.split("|");
//	  	year = bths[0];
//	  	month = bths[1];
//	  	day = bths[2];
//	}
//	var ds = new DateSelector("J_Year", "J_Month", "J_Day", 
//		{Year: year, Month: month, Day: day, MinYear: new Date().getFullYear() -100, MaxYear: new Date().getFullYear() });	
//	//所在地
//	var pro = "请选择";
//	var city = "请选择";
//	if(address != null){
//	  var adds = address.split("|");
//	  pro = adds[0];
//	  city = adds[1];
//	}
//	setup(pro,city);	
//	
//});
$(function(){ 
  
    	var clip = new ZeroClipboard.Client();
    	clip.setHandCursor( true );
    	clip.addEventListener('mouseOver', function (client) {
    		clip.setText($('#uc_url').val());
    	});
        clip.addEventListener('complete', function () {
				messagebox('复制成功!');
        });
    	clip.glue('copy_url');
    	document.getElementById("copy_url").onmouseover = function(){
    		clip.reposition(this);
    	}
    
   
});
</script></div></div></div><div class="foot"><div class="footer"><div class="footlj"><div class="logo2"><a href="./"><img src="__TMPL__public/images/logo2.png" /></a></div><div class="footlj_a"><h6>逛宝贝</h6><ul><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>548));?>">衣服</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>2));?>">鞋子</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>3));?>">包包</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>4));?>">配饰</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>5));?>">美妆</a></li><li><a target="_blank" href="<?php echo U('cate/index',array('cid'=>6));?>">家居</a></li></ul></div><div class="footlj_a"><h6>关于我们</h6><ul><?php if(is_array($fabout)): $i = 0; $__LIST__ = $fabout;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php if(($vo["url"]) == ""): echo u('article/index',array('id'=>$vo['id'])); else: echo ($vo["url"]); endif; ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a"><h6>合作伙伴</h6><ul><?php if(is_array($huoban_list)): $i = 0; $__LIST__ = $huoban_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_b"><h6>友情链接</h6><ul><?php if(is_array($flink_list)): $i = 0; $__LIST__ = $flink_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($val["url"]); ?>" class="f_links fl"><?php echo ($val["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="footlj_a footlj_c"><h6>关注我们</h6><ul><?php if(($follow_us["weibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["weibo_url"]); ?>">新浪微博</a></li><?php endif; if(($follow_us["qqweibo_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqweibo_url"]); ?>" style="background:url(__TMPL__public/images/guanz5.png) no-repeat;">腾讯微博</a></li><?php endif; if(($follow_us["163_url"]) != ""): ?><li><a href="<?php echo ($follow_us["163_url"]); ?>" style="background:url(__TMPL__public/images/guanz6.png) no-repeat;">网易微博</a></li><?php endif; if(($follow_us["qqzone_url"]) != ""): ?><li><a href="<?php echo ($follow_us["qqzone_url"]); ?>" style="background:url(__TMPL__public/images/guanz2.png) no-repeat;">QQ空间</a></li><?php endif; if(($follow_us["douban_url"]) != ""): ?><li><a href="<?php echo ($follow_us["douban_url"]); ?>" style="background:url(__TMPL__public/images/guanz3.png) no-repeat;">豆瓣</a></li><?php endif; if(($follow_us["renren_url"]) != ""): ?><li><a href="<?php echo ($follow_us["renren_url"]); ?>" style="background:url(__TMPL__public/images/guanz4.png) no-repeat;">人人网</a></li><?php endif; ?></ul></div></div><div class="banquan">Powered by <a href="<?php echo ($site_domain); ?>"><?php echo ($site_name); ?></a>&nbsp;&nbsp;<?php echo ($site_icp); ?></div><div  class="banquan"><?php echo ($statistics_code); ?></div><div class="banquan"><?php echo ($site_share); ?></div><div class="browse none_f"><a class="close_z"></a>        	温馨提示：你正在使用的<b>IE6浏览器</b>，网购支付不安全，<?php echo ($site_name); ?>推荐 
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