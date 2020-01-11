		</div>
	</div>
		
			</DIV>
		</DIV>


<DIV id=footer_wrapper>
<DIV id=footer>

<p>Powered by <a href="http://typecho.org/" target="_blank">Typecho)))</a> &nbsp;&nbsp;ICP:蜀ICP备05009250号
</p> 

</div>
</div>                
</div>

		<div style="display:none">
			<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-462868-1', 'auto');
				  ga('send', 'pageview');

				</script>
		</div>


<?php $this->footer(); ?>
<?php
if ($this->is('single')) {
    Helper::threadedCommentsScript();
}
?>

</body>
</html>