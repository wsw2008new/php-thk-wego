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

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><form action="<?php echo u('items/batch_add');?>" method="post" name="myform" id="myform"  enctype="multipart/form-data" style="margin-top:10px;"><div class="pad-10"><div class="col-tab"><ul class="tabBut cu-li"><li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">基本信息</li></ul><div id="div_setting_1" class="contentList pad-10"><div style="padding:10px; overflow:hidden;"><div class="main_top" style="clear:both;"><h4>温馨提示：</h4><p class="green">设置采集评论的马甲，请到 （<a href="<?php echo u('user/index');?>" style="color:blue">会员管理->会员列表</a>） 里面设置</p></div></div><table width="100%" cellspacing="0" class="table_form"><tr><th width="120">采集分类 :</th><td style="padding-bottom:10px;"><select id="parent_cate" onchange="get_child_cates(this)"><option value="0">--请选择分类--</option><?php if(is_array($cate_list['parent'])): $i = 0; $__LIST__ = $cate_list['parent'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><optgroup label="<?php echo ($val["name"]); ?>"></optgroup><?php if(is_array($cate_list['sub'][$val['id']])): $i = 0; $__LIST__ = $cate_list['sub'][$val['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sval): $mod = ($i % 2 );++$i;?><option value="<?php echo ($sval["id"]); ?>" <?php if($item_pid == $sval['id']): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($sval["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?></select><select id="second_cate" name="cid" style="display:none;"></select></td></tr><tr><th>优先级 :</th><td><select name="priority" id="priority"><option value="add_time">发布时间</option><option value="likes">喜欢数</option><option value="hits">访问量</option><option value="price">价格</option></select></td></tr><tr><th>每批商品数量 :</th><td><input type="text" id="pagesize" name="pagesize" size="4" class="input-text" value="10" /></td></tr><tr><th>每个商品评论数量 :</th><td><input type="text" id="cmt_num" name="cmt_num" size="4" class="input-text" value="10" /></td></tr><tr><th>评论马甲 :</th><td><textarea cols="40" rows="10" name="majia" id="majia"><?php echo ($majia); ?></textarea><span>  说明：评论的马甲用户请到 （<a href="<?php echo u('user/index');?>" style="color:blue">会员管理->会员列表</a>）里面设置</span></td></tr></table></div><div class="btn"><input type="button" value="采集" class="button" onclick="collect();"></div></div></div></form><script type="text/javascript">function collect(){
	if($('#parent_cate').val()=='0'){		
		alert('请选择分类');
		return false;
	}
	if($.trim($('#majia').val())==''){
		alert('请到#会员管理#里面设置采集马甲');
		return false;
	}	
	var cid=$('#second_cate').val();
	var priority=$('#priority').val();
	var pagesize=$('#pagesize').val();	
	var cmt_num=$('#cmt_num').val();	
	window.top.art.dialog({id:'collect'}).close();
	window.top.art.dialog({
		title:'淘宝评论采集',
		id:'collect',
		iframe:'?m=items_collect&a=collect_comments&cid='+cid+'&priority='+priority+'&pagesize='+pagesize+'&cmt_num='+cmt_num+'',
		width:'430',
		height:'160'
	});
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