<div id="sidebar">
  <DIV class=sidebar_top>
	<DIV class=sidebar_bottom>
		<h2><?php _e('站内搜索'); ?></h2>
		<ul>
			<form method="post" action="">
            	<div><input type="text" name="s" class="formfield" style="width: 140px;" /> <input type="submit" class="submit" value="搜索" /></div>
	        </form>		
		</ul>	

		<?php if ($this->is('index')): ?> 
			<ul>

			</ul>
		<?php endif; ?> 

		<h2><?php _e('日志分类'); ?></h2>
		<ul>
			<?php $this->widget('Widget_Metas_Category_List')
			->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
		</ul>
		

		<?php if ($this->is('post')): ?> 
		<h2><?php _e('相关文章'); ?></h2>
		<ul>
			  <?php $this->related(8)->to($relatedPosts); ?>
			  <?php if ($relatedPosts->have()): ?>
			  <?php while ($relatedPosts->next()): ?>
					<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
			  <?php endwhile; ?>
			  <?php else : ?>
			  <li>无相关文章</li>
			  <?php endif; ?>
		</ul>
		<?php endif; ?> 

		<h2><?php _e('最近回复'); ?></h2>
		<ul>
			<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
			<?php while($comments->next()): ?>
				<li><a href="<?php $comments->permalink(); ?>"><strong><?php $comments->author(false); ?></strong></a>: <?php $comments->excerpt(30, '...'); ?></li>
			<?php endwhile; ?>
		</ul>

		<?php if ($this->is('index')): ?> 
			<?php if (empty($this->options->sidebarBlock) || in_array('ShowArchive', $this->options->sidebarBlock)): ?>
			<h2><?php _e('日志归档'); ?></h2>
			<ul>
					<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
					->parse('<li><a href="{permalink}">{date}</a>({count})</li>'); ?>
			</ul>
			<?php endif; ?>
		<?php endif; ?> 

		<?php if ($this->is('index')): ?> 
		<h2><?php _e('友情链接'); ?></h2>
		<ul>
				<li><a href="http://www.dongchuanmin.com" target="_blank">董川民</a></li>
				<li><a href="http://www.gengbing.com/blog/" target="_blank">老鬼</a></li>
				<li><a href="http://www.lihongye.net/" target="_blank">LHY随笔</a></li>
				<li><a href="http://www.lostway.org/" target="_blank">Lostway</a></li>
				<li><a href="http://www.boy110.com/" target="_blank">主角博客</a></li>
				<li><a href="http://www.samoolsoft.com/" target="_blank">傻猫软件</a></li>
				<!-- <li><a href="http://www.piaoyis.com/" target="_blank">老嫖</a></li> -->
				<li><a href="http://www.zfnn.com/" target="_blank">荆棘鸟</a></li>
				<li><a href="http://hill.51.net/blog/" target="_blank">追日之旅</a></li>
				<li><a href="http://www.clecal.com/" target="_blank">黑鸦</a></li>
				<!-- <li><a href="http://www.xx2hh.cn" target="_blank">星仔的博客</a></li> -->
				<li><a href="http://www.6ird.com" target="_blank">怪鸟博客</a></li>
				<li><a href="http://typecho.me/" target="_blank">Typecho主题模板站</a></li>
				<li><a href="http://www.liumangahui.com" target="_blank">流芒阿辉</a></li>
				<li><a href="http://www.blueidea.com/" target="_blank">蓝色理想</a></li>
				<!-- <li><a href="http://hjin.me/" target="_blank">HJin.me </a></li> -->
				<li><a href="http://www.saywhy.cn/" target="_blank">记忆片断</a></li>
				<!-- <li><a href="http://www.i5blog.net" target="_blank">i5blog</a></li> -->
				<!-- <li><a href="http://www.sheyu.net" target="_blank">舍予之间的网志</a></li> -->
				<li><a href="http://www.udpwork.com/" target="_blank">IT牛人博客聚合</a></li>
				<li><a href="http://verte.cn/" target="_blank">A君</a></li>
		</ul>
		<?php endif; ?> 	

		<h2><?php _e('其它'); ?></h2>
		<ul>			
			<li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章'); ?> RSS</a> </li>
			<li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论'); ?> RSS</a></li>
			<li><a href="http://www.samool.com/dream/Index.asp.html" target="_blank"><font color=red>周公解梦</font></a></li>
			<li><a href="http://www.samool.com/miniblog/" target="_blank"><font color=red>小段子</font></a></li>
			<li><a href="http://validator.w3.org/check/referer">Valid XHTML</a></li>
			<li><a href="http://www.typecho.org">Typecho</a></li>
		</ul>