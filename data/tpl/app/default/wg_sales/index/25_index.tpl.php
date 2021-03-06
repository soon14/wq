<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<div id="refresh-block" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);"><img src="<?php echo STATIC_ROOT;?>/images/refresh-down.png"><p>下拉刷新</p></div>
<div id="scorll-news" style="opacity: -0.02;"></div>
<!--滑动包裹-->
<div id="wrapper" style="margin-bottom: 2rem;">

    <!--轮播图-->
    <?php 
    $flag = false;
    foreach($slider as $value){
        if($value['start']<time() && $value['end']>time()) {
        $flag = true;
        }
    }?>

    <div id="carousel" class="swiper-container swiper-container-horizontal" style="display: <?php  if(!$flag){echo 'none';}?>">
        <div class="swiper-wrapper" id="slider_inner" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

        </div>
        <!--<div id="swiper-pagination-bullet" class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">-->
        <!--</div>-->
    </div>
    <!--头条-->
    <?php  if($top_news){?>
    <div id="top-news" class="swiper-container swiper-container-horizontal" style="display: block;    position: relative;background-color: #fff;font-size: 0.27rem;">
        <div class="caption" style="float: left;width: 1rem;line-height: .7rem;position: absolute;">
            <div class="title" style="width: 1rem;">
                <img style="line-height: .6rem;height: .6rem;padding: .1rem 0 .1rem 0;    width: .6rem;
}" src="<?php echo STATIC_ROOT;?>/images/hot.png">
            </div>
        </div>
        <div class="swiper-wrapper" style="float: left;padding-left:.3rem;height: .8rem;">
            <?php foreach($top_news as $value){
            $url_q = $value['jump'] ? $value['url'] : $this->createMobileUrl('detail',['category_id' => $value['category_id'],'id'=>$value['article_id']]);
?>
            <a class="statistic swiper-slide" href="<?php  echo $url_q;?>">
                <span><?php  echo $value['title'];?></span>
            </a>
            <?php  }?>
            </div>

    </div>
    <?php  }?>
    <div class="gap"></div>
    <!--内容-->
    <div id="main">
    </div>

</div>

<!--加载更多-->
<div id="loadmore"><img src="<?php echo STATIC_ROOT;?>/images/refresh.png"><p>正在加载更多</p></div>

<!--底部-->
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('public/share', TEMPLATE_INCLUDEPATH)) : (include template('public/share', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('public/bottom_nav', TEMPLATE_INCLUDEPATH)) : (include template('public/bottom_nav', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('public/footer', TEMPLATE_INCLUDEPATH)) : (include template('public/footer', TEMPLATE_INCLUDEPATH));?>