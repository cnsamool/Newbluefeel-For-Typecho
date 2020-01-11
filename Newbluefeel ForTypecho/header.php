<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9183699483332543",
    enable_page_level_ads: true
  });
</script>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('plus.css'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('code.css'); ?>" />
<link rel="shortcut icon" href="favicon.ico" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head>

<body>
<div id="statusmsg"></div>
<div id="wrapper">
<DIV id=header_wrapper>
	<DIV class=clearfix id=header>
	<div id=logo><A href="<?php $this->options->siteUrl(); ?>"><IMG alt="<?php $this->options->title() ?>" src="<?php $this->options->themeUrl('images/tree.gif'); ?>"></A></div>
	<div id=info>
	<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
	<p class="description"><?php $this->options->description() ?></p>
	</div>


	<DIV class=clearfix id=nav>
		<DIV class=clearfix id=nav_secondary>
		<h1>傻猫网络日志,用网络日志记录并分享生活点滴</h1>
		<UL class=clearfix>
			
				<?php if($this->user->hasLogin()): ?>
					欢迎您，<?php $this->user->screenName(); ?> <a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> </a>
                    <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
                <?php else: ?>
                    <a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
                <?php endif; ?>


		</UL>
		</DIV>

	<UL class=clearfix id=nav_primary>
		<ul>
			<li <?php if($this->is('index')){echo 'class="current_page_item"';}?>><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
	    	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>
			<li <?php if($this->is('page', $pages->slug)): ?> class="current_page_item" <?php endif; ?>><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>

			<li><div class="rss"><a href="<?php $this->options->feedUrl(); ?>"><img src="<?php $this->options->themeUrl('images\rss.gif'); ?>">订阅</a></div></li> 
		</ul>
	

</UL></DIV>
</DIV>
</DIV>	

<div id="quicksummary"></div>