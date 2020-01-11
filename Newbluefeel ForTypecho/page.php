<?php include('header.php'); ?>

<DIV id=content_wrapper>
<DIV class=clearfix id=contents>
  <DIV class=clearfix id=content_entries><div style="clear:both;"></div>
			<DIV class="entry clearfix">
			<DIV class=entry_meta id="ignore">
			<span class="blog">猫</span><br /><br /><br /><br />
			</DIV>
			<DIV class=entry_main>

			<h1 class="title"><?php $this->title() ?></h1>
			<p id="ignore">该日志由 <strong><?php $this->author(); ?></strong> 发表于 <?php $this->date('F j, Y'); ?></p>

			<div id="contentmain">
				<p class="spread">

				</p>		
			
				<?php $this->content(); ?>	
			</div>
						
			<div style="clear:both;"></div>
			<?php include('comments.php'); ?>
			</DIV>
			</div>
			
	</div>
			<?php include('sidebar.php'); ?>
			<?php include('footer.php'); ?>