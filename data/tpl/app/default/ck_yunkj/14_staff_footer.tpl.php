<?php defined('IN_IA') or exit('Access Denied');?><div class="footer clearFix">
<ul>
	<li class="on">
	  <a href="<?php  echo $this->createMobileUrl('staff_index')?>">
	  <i class="home"></i>
	  <p>首页</p>
	  </a>
	 </li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('staff_userlist')?>">
	    <i class="staff"></i>
		<p>所属客户</p>
	  </a>
	</li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('staff_ywlist')?>">
	    <i class="kehu"></i>
		<p>业务请求</p>
	  </a>
	  </li>
	<li>
	  <a href="<?php  echo $this->createMobileUrl('staff_notice')?>">
	  <i class="manager"></i>
	  <p>通知管理</p>
	  </a>
	</li>
</ul>	
</div>
<!--footer end-->
<script type="text/javascript" src="<?php  echo $templateurl;?>/js/jquery.min.js"></script>
<script type="text/javascript">
    $('.footer').on('click','li',function(){
    	$('.footer li').removeClass('on');
    	$(this).addClass('on');
    })
</script>
