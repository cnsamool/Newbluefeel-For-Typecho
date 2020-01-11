<?php include('header.php'); ?>

<DIV id=content_wrapper>
<DIV class=clearfix id=contents>
  <DIV class=clearfix id=content_entries>
  <div style="clear:both;"></div>
			<DIV class="entry clearfix">
			<DIV class=entry_meta id="ignore">
			<span class="count">猫</span><br />
			<?php $this->category(','); ?></a><br />
			<a href="<?php $this->permalink() ?>">日志评论：<?php $this->commentsNum('0', '1', '%d'); ?></a><br />
			<?php _e('浏览次数：'); ?><?php $this->views(); ?><br /><br /><br />
			</DIV>
			<DIV class=entry_main>
				<h3 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
				<p id="ignore">该日志由 <strong><?php $this->author(); ?></strong> 发表于 <?php $this->date('Y-m-d H:i:s'); ?></p>
				<div id="contentmain">
					<p class="spread">

					</p>
					
					<div style="float:right;margin:4px;padding:4px;">

					</div>

					<?php $this->content('阅读剩余部分...'); ?>

				</div>

			<p id="ignore"><strong>该日志标签:</strong> <?php $this->tags(', ', true, 'none'); ?></p>
			<p id="article-another"> 上一篇： <strong><?php $this->thePrev(); ?> </strong></br>
			 下一篇： <strong><?php $this->theNext(); ?> </strong></p>
			<div style="clear:both;"></div>

			<?php include('comments.php'); ?>
			</DIV>
			</div>
			
	</div>
			<?php include('sidebar.php'); ?>
			<?php include('footer.php'); ?>