<?php defined('IN_IA') or exit('Access Denied');?><div class="editisShow">
    <input type="button" onclick="editShow()" value="修改">
</div>
<?php  if($frommyworks) { ?>
<div class="bottom">
   <div class="bottom_left">
       <img src="<?php echo RES;?>images/mb_p2.png" height="48" width="48" alt="">
       <p >模板</p>
   </div>
   <input type="button" id="save" value="保存">
   <div class="bottom_right">
       <a href="<?php  echo $this->createMobileUrl('myworks',array('op'=>'edit','wid'=>base64_encode($id)));?>">
           <img src="<?php echo RES;?>images/editChu.png" height="48" width="48" alt="">
           <p>编辑</p>
       </a>
   </div>
</div>
<?php  } ?>

	<?php  if($iswx) { ?>
		<style type="text/css">
		   .show-jbBtn{
		       position: relative;
		       right: 5%;
		       bottom: 5.8rem;
		       margin-left: 90%;
		       width: 1.4rem;
		       height: 0.7rem;
		       font: 12px '微软雅黑';
		       text-align: center;
		       color: #ffffff;
		       margin-top: -0.5rem;
		   }
			 .show-jbBtn img{
			   width:100%;
			     height:100%;
			 }
	        a{
	            text-decoration: none;
	        }
	
	        .jb_infoContainer{
	            width: 77%;
	            height: 57.53%;
	            position: fixed;
	            top: 17.4%;
	            left: 50%;
	            margin-left: -38.5%;
	            background-color: white;
	            z-index: 9999;
	            display: none;
	        }
	        @media screen and (min-width: 600px) { /*当屏幕尺寸大于600px时，应用下面的CSS样式*/
	            .jb_infoContainer{
	                width: 50%;
	                height: 57.53%;
	                position: fixed;
	                top: 17.4%;
	                left: 50%;
	                margin-left: -25%;
	                background-color: white;
	                z-index: 9999;
	                display: none;
	            }
	        }
	
	        .jb_title{
	            width: 100%;
	            height: 10.71%;
	            font:15px '微软雅黑';
	            color: white;
	            background-color: #d02c2c;
	            text-align: center;
	            display: -webkit-box;
	            -webkit-box-align: center;
	            -webkit-box-pack: center;
	
	        }
	        .jb_infoDiv{
	            width: 100%;
	            height: 100%;
	            overflow: hidden;
	        }
	        .jb_content{
	            margin-left: 30px;
	            float: left;
	        }
	        .jb_chose{
	            width: 22px;
	            height: 22px;
	            float: right;
	            margin-right: 23px;
	            display: none;
	            margin-top: -2px;
	        }
	        .jb_chose img{
	            width: 22px;
	            height: 22px;
	        }
	        .jb_info{
	            height: 22px;
	            font:14px "微软雅黑";
	            color: #1d1d1d;
	            margin-top: 12.5px;
	            line-height: 22px;
	        }
	        #jb_qxBtn,#jb_tjBtn{
	            width: 75px;
	            height: 20px;
	            border-radius: 2px;
	            font:14px '微软雅黑';
	            text-align: center;
	            position: absolute;
	            bottom: 25px;
	        }
	        #jb_qxBtn{
	            color: white;
	            background-color: #bdbdbd;
	            float: left;
	            left: 30px;
	            line-height: 20px;
	        }
	        #jb_tjBtn{
	            color: white;
	            background-color: #d02c2c;
	            float: right;
	            right: 30px;
	            line-height: 20px;
	        }
	    </style>
	<?php  } ?>
	<style type="text/css">
			.rewardbg {
			    text-align: center;
		        padding-bottom: 50px;
			    width: 100%;
			    z-index: 20;
			}
			.rewardbg .button {
			    display: inline-block;
			    padding: 5px 15px 6px;
			    color: #fff !important;
			}
			.reward {
			    line-height: 50px;
			    font-size: 30px;
			    width: 60px;
			    height: 60px;
			    -webkit-animation: guangzhu_ani 0.8s linear infinite alternate;
			    border-radius: 50%;
			}
			@-webkit-keyframes redPulse {
			  from {background-color: #bc330d;-webkit-box-shadow: 0 0 9px #333;}
			  50% {background-color: #e33100;-webkit-box-shadow: 0 0 18px #e33100;}
			  to {background-color: #bc330d;-webkit-box-shadow: 0 0 9px #333;}
			}
			
			.red.button {background-color: #e33100; -webkit-animation-name: redPulse; -webkit-animation-duration: 1s; }
			#reward-bg{
				position: fixed;
				margin: 0 auto;
				top:0;
				width: 100%;
				height: 100%;
				z-index: 99999;
				display: none;
				background: rgba(0,0,0,.7);
				font-size: 12px;
			}
			#reward-submit{
			    position: relative;
			    width: 80%;
			    height: 45px;
			    left: 10%;
			    border-radius: 5px;
			    font-size: 20px;
			    line-height: 45px;
			    text-align: center;
			    margin-top: 20px;
			    margin-bottom: 20px;
				background-color: #6151b6;
				color: #fff;
			}
			.reward-detail input{
			    width: 50%;
			    height: 60px;
			    font-size: 18px;
			    margin-left: 15px;
			    border: none;
			    background: #eee;
			    border-radius: 10px;
			}
			#reward-content{
			    position: absolute;
			    width: 80%;
			    top: 5%;
			    left: 10%;
			    z-index: 15000;
			    background: white;
			    border-radius: 5px;
				padding-top: 30px;
			}
			#reward-content ul li {
			    width: 25%;
			    text-align: center;
	            margin: 10px 5px 0 5px;
			    border: 1px solid orangered;
			    border-radius: 5px;
			    padding: 15px 0;
			    font-size: 12px;
			    color: rgb(250,97,65);
			    font-weight: bold;
			    display: inline-block;
			}
			
			ul li{list-style:none;}
			.close_reward{
			    position: absolute;
			    top: 0;
			    right: 0;
			    color: red;
			    font-size: 35px;
			    border-radius: 50%;
			    width: 45px;
			    height: 45px;
			    line-height: 45px;
			    text-align: center;
			}
			.dashed{
				width: 100%;
				border: 1px dashed #ccc;
				position: relative;
				margin-top: 30px;
			}
			.reward_list{
				height:45px;
				text-align:center;
				font-size:22px;
				line-height:45px;
				background-color: #6151b6;
				color: #fff;
			}
			
			.reward_qrcode{
			    position: fixed;
			    background: rgba(0,0,0,.7);
			    width: 100%;
			    height: 100%;
			    top: 0;
			    margin: 0 auto;
			    text-align: center;
			    z-index: 9999;	
			    display: none;
			}
			.reward_qrcode img{
			    width: 50%;
			    margin-top: 30%;
			}
			.reward_qrcode p{
			    font-size: 25px;
			    color: white;
			    margin-top: 20px;	
			}
			.reward_qrcode span{
			    position: absolute;
			    font-size: 40px;
			    color: white;
			    right: 30px;
			    top: 10%;
			    border: 1px solid white;
			    border-radius: 50%;
			    width: 50px;
			    height: 50px;
			    line-height: 50px;   	
			}
			.forbidden {
			    width: 2.73rem;
			    height: 2.73rem;
			    position: fixed;
			    bottom: 3%;
			    right: 5%;
			    z-index: 999;
			}
			.forbidden input {
			    width: 100%;
			    height: 100%;
			    border-radius: 50%;
			    background-color: #F44336;
			    line-height: 2.73rem;
			    font-size: 0.75rem;
			    text-align: center;
			    border: none;
			    color: #fff;
			}
			.jun_adv{
				text-align: center;
				padding: 0 15px 0;
			}
			.comment_list  .jun_adv_line, .jun_adv .jun_adv_line{
				text-align: center;
			    color: grey;
		        position: relative;
			}
			.comment_list .jun_adv_line hr, .jun_adv .jun_adv_line hr{
			    display: inline-block;
			    width: 100%;
			    vertical-align: middle;
			    border: 1px dotted;
			}
			.comment_list .jun_adv_line font{
				display: block;
			    font-size: 15px;
			    position: absolute;
			    width: 80px;
			    top: 5px;
			    left: 50%;
			    margin-left: -40px;
			    background-color: white;
			}
			.jun_adv .jun_adv_line font{
				display: block;
			    font-size: 15px;
			    position: absolute;
			    width: 40px;
			    top: 5px;
			    left: 50%;
			    margin-left: -20px;
			    background-color: white;
			}
			.jun_adv_content img {
			    max-width: 100%;
			}
	</style>
	<?php  if(!$addread) { ?>	
		<div class="forbidden">
		    <a id="forbidden1" href="javascript: forbidden(1);" onclick="return confirm('确定禁用该简记吗?');" <?php  if($works['status']==1) { ?>style="display: none;"<?php  } ?>>
		    	<input type="button" value="禁用">
		    </a>
		    <a id="forbidden2" href="javascript: forbidden(0);" onclick="return confirm('确定恢复该简记吗?');" <?php  if($works['status']!=1) { ?>style="display: none;"<?php  } ?>>
		    	<input type="button" value="已禁用" style="background-color: #2DC8DA;">
		    </a>
		</div>
	<?php  } ?>
	<script>
		var fstatus = false;
		function forbidden(status){
			if (fstatus) return false;
			fstatus = true;
			$.ajax({
                type:'post',
                dateType:'json',
                url:"<?php  echo $this->createMobileUrl('forbidden')?>",
                data:{wid:"<?php  echo $id;?>",status:status},
                success:function(data){
                	fstatus = false;
                	if (data=='1'){
                		alert("禁用成功。");
                        $('#forbidden2').show();
                        $('#forbidden1').hide();
                	}else if (data=='2'){
                		alert("恢复成功。");
                        $('#forbidden1').show();
                        $('#forbidden2').hide();
                	}
                }
            });
		}
	</script>
<div class="botttom">
	<?php  if(!$frommyworks && $iswx) { ?>
	<div class="reward_qrcode">
		<span onclick="$('.reward_qrcode').hide()">×</span>
		<img>
		<p>长按二维码即可打赏啦</p>
	</div>
	<div id="reward-bg">
		<div id="reward-content">
			<span class="close_reward" onclick="$('#reward-bg').fadeToggle()">×</span>
			<div class="remain_info" style="margin-top: 10px;text-align: center;    font-size: 20px;">打赏收入归作品主人</div>
					<ul style="width: 100%;padding: 20px;text-align: center;">
						<?php  if(is_array($reward_money)) { foreach($reward_money as $reward) { ?>
						<li onclick="onPay(<?php  echo $reward;?>)"><span style="font-size:22px;"><?php  echo $reward;?></span> 元</li>
						<?php  } } ?>
					</ul>
					<div class="reward-detail" style="text-align: center;color: orangered;">
		 		<label>任性赞赏</label><input style="text-align: center;" id="reward-money" type="tel" placeholder="1-20000"> 元
		 	</div>
		 	<div class="dashed"></div>
			<div id="reward-submit" onclick="onPay($('#reward-money').val())">支付</div>
		</div>
	</div>
	<div class="rewardbg"><a id="reward" class="red button reward" onclick="$('#reward-bg').fadeToggle()">赏</a></div>
	<?php  } ?>
	<?php  if($order) { ?>
		<style>
		.marquee{
		    width: 280px;
	        height: 100px;
		    display: block;
	        margin: 0px auto 30px auto;
		}
		.marquee img{
			width: 30px;
		    height: 30px;
	        border-radius: 15px;
            display: inline-block;
    		float: left;
    		margin-right: 5px
		}
		</style>
		<div style="display: block;width: 100%;text-align: center;font-size: 20px;"><?php  echo $ordernum;?>人打赏</div>
		<div class="marquee">
				<?php  if(is_array($order)) { foreach($order as $item) { ?>
					<img alt="" src="<?php  echo $item['avatar'];?>">
				<?php  } } ?>
		</div>
		<?php  } ?>
	<div class="rich_media_tool" id="js_toobar3">
	    <div id="js_read_area3" class="media_tool_meta tips_global meta_primary">阅读 <span id="readNum3"><?php  echo $works['read'];?></span></div>
	    <span class="media_tool_meta meta_primary tips_global meta_praise" id="like3">
	        <i class="icon_praise_gray"></i><span class="praise_num" id="likeNum3"><?php  echo $works['good'];?></span>
	    </span>
	    <div id="js_reward" class="media_tool_meta tips_global meta_primary">总赏金 <span id="totalreward"><?php  echo $works['reward'];?></span></div>
	</div>
	<div class="chu_bottom">
	    <input type="button" value="制作我的<?php  echo $cfg['UI']['title'];?>">
	</div>
	<?php  if($iswx) { ?>
	<div class="show-jbBtn">
	   <img src="<?php echo RES;?>images/jbBtb1.png">
	   <!-- <span>举报</span> -->
	</div>
	<?php  } ?>
	<div style="background-color: white;text-shadow: none;">
		<?php  if($cfg['adv_content'] && !$frommyworks) { ?>
		<div class="jun_adv">
			<div class="jun_adv_line">
				<hr><font>广告</font>
			</div>
			<div class="jun_adv_content">
				<?php  echo $cfg['adv_content'];?>
			</div>
		</div>
		<?php  } ?>
		<!-- 评论 -->
		<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('comment', TEMPLATE_INCLUDEPATH)) : (include template('comment', TEMPLATE_INCLUDEPATH));?>
	</div>
</div>
<?php  if($iswx) { ?>
    <div class="jb_infoContainer">
        <div class="jb_title">选择举报内容</div>
        <div class="jb_infoDiv">
        	<?php  if(is_array($report)) { foreach($report as $item) { ?>
            <div class="jb_info">
                <div class="jb_content"><?php  echo $item['content'];?></div>
                <div class="jb_chose">
                    <img src="<?php echo RES;?>images/chose_02.png">
                </div>
            </div>
            <?php  } } ?>
        </div>
        <div style="clear:both"></div>
        <div id="jb_qxBtn">取消</div>
        <div id="jb_tjBtn">提交举报</div>
    </div>
    <script type="text/javascript">

        $('.jb_info').click(function(){
            $('.jb_info').css({'color':'#1d1d1d'});
            if($(this).children('.jb_chose').css("display") == "none"){
                $('.jb_chose').hide();
                $(this).css({'color':'red'});
                $(this).children('.jb_chose').show();
            }else{
                $(this).css({'color':'red'});
            }
        });

        var date_times = new Date();
        var is_firstClick = "<?php  echo $is_firstClick;?>";
        var jbNumber = undefined;
        $('#jb_tjBtn').click(function(){
            if (is_firstClick == true) {
                $('.jb_chose').each(function(){
                    if ($(this).css("display") != "none") {
                        jbNumber = $(this).prev().text();
                        is_firstClick = false;
                        $.ajax({
                            type:'post',
                            dateType:'json',
                            url:"<?php  echo $this->createMobileUrl('report')?>",
                            data:{wid:"<?php  echo $id;?>",content:jbNumber},
                            success:function(data){
                                alert("举报成功，感谢您的反馈，我们会及时处理的。");
                                $('.jb_infoContainer').hide();
                            }
                        })
                    };
                });
            }else{
                alert('您已经举报过了！');
                return false;
            };
            if (jbNumber == undefined) {
                alert('请选择一项举报内容再提交！');
                return false;
            };
        });

        $('.show-jbBtn').click(function(){
            if (is_firstClick == false) {
            	$('#jb_tjBtn').css({'background-color':'#bdbdbd'});
                alert('您已经举报过了！');
                $('.jb_infoContainer').hide();
            }else{
            	$('.jb_infoContainer').show();
            }
        });

        $('#jb_qxBtn').click(function(){
            $('.jb_infoContainer').hide();
        });
    </script>
<?php  } ?>
<script type="text/javascript">
		var orderid = 0;
		var container_width = $(".chuchuang_container").width();
		$('#reward-bg').css({width:container_width});
		$('.reward_qrcode').css({width:container_width});
	    function onPay(fee){
	    	if(fee < 1){
	    		alert('亲，不可低于1元哦');
	    		return false;
	    	}
	    	$.ajax({
				 type:'POST',
				 data:{fee:fee},
				 url:"<?php  echo $this->createMobileUrl('GetPrepayid',array('wid'=>base64_encode($id)))?>",
				 success:function(data){
					  var json = eval("("+data+")");
					  if(json.errcode == 0){
						  orderid = json.orderid;
						  if(json.auth == 0){
							  WeixinJSBridge.invoke('getBrandWCPayRequest', json, function (res) {
		                          if (res.err_msg === "get_brand_wcpay_request:ok") {
		                        		checkorder();
		                          } else {
		                        	  alert(res.err_msg);
		                          }
		                      });
						  }else{
							  $('.reward_qrcode img').attr('src',json.code_url)
							  $('#reward-bg').hide();
							  $('.reward_qrcode').show();
							  checkorder();
						  }
					  }else{	 
						alert(json.errmsg);
					  }
				 }
				 
			 });
	    }

		function checkorder(){
			if(orderid > 0){
				$.ajax({
					 type:'POST',
					 data:{orderid:orderid},
					 url:"<?php  echo $this->createMobileUrl('checkPay')?>",
					 success:function(data){
						  if(data == 1){
							  alert('打赏成功！');
							  $('.reward_qrcode').hide();
							  $('#reward-bg').hide();
						  }else{	 
							  setTimeout(function(){
								  checkorder();
							  },2000);
						  }
					 }
				 });
			}
		}
	</script>
