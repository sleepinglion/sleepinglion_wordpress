

	<!-- close main -->
	</div>
	<!-- close mom -->
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<address><?php echo __('Address', 'sleepinglion') ?></address><br class="hidden-xs hidden-sm" />
				CopyLeft. 2012, SL. All wrongs reserved.
			</div>
			<div class="col-sm-12 col-md-6">
				<ul class="social_link col-xs-12 col-sm-12 col-md-6">
					<li class="col-xs-4"><a href="" class="blog_link" title="" target="_blank"><span class="point">B</span><span>log</span></a></li>
					<li class="col-xs-4"><a href="" class="twitter_link" title="" target="_blank"><span class="point">T</span><span>witter</span></a></li>
					<li class="col-xs-4"><a href="" class="facebook_link" title="" target="_blank"><span class="point">F</span><span>ace Book</span></a></li>
				</ul>
				<ul id="home_sitemap_link" class="hidden-xs hidden-sm col-md-6 ">
					<li><a href="/sitemap" title="<?php echo __('Sitemap', 'sleepinglion') ?>"><?php echo __('Sitemap', 'sleepinglion') ?></a></li>
					<li><a href="/" title="<?php echo __('Home', 'sleepinglion') ?>"><?php echo __('Home', 'sleepinglion') ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" style="margin:20px 0 0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><?php echo __('Search', 'sleepinglion') ?></h4>
      </div>
      <div class="modal-body">
        	<form action="/">
      		<div class="input-group form-group-lg">
      <input type="search" name="s" <?php if (isset($_GET['s'])): ?>value="<?php echo $_GET['s'] ?>"<?php endif ?> class="form-control" placeholder="검색어를 넣어주세요">
      <span class="input-group-btn">
      				<button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      			</span>
      			</div>
      		</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
