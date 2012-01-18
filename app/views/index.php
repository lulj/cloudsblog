<?php include ('header.php'); ?>  
<?php include ('sidebar_left.php'); ?>	
<div id="container">
		<div id="content">
        <div class="featured-post">
            <div class="featured-title"></div>
        </div>
			<!-- Begin post -->
			<?php foreach($query as $row):?>
			<div id="post" class="post type-post status-publish format-standard sticky hentry category-live"> 
				<h2 class="entry-title"><a href="#" title="title" rel="bookmark"><?php echo $row->title?></a></h2>
				 <div class="entry-date"><?php echo date('Y-m-d H:i:s',$row->time);?></div> 
						<div class="entry-content">
					       <?php echo $row->body;?>
						</div>
						<div class="clear"></div>
						<div class="entry-meta">
                             <a rel="bookmark" title="title" href="#">链接地址</a> <span class="meta-sep">|</span> 
                             <span class="comments-link"><a title="title" href="#">4条评论</a></span>
                        </div>
						
			</div>
			<!-- End post -->
            <?php endforeach;?>
		</div><!-- #content -->
	</div><!-- #container -->
	
<?php include ('sidebar_right.php'); ?>  
<?php include ('footer.php'); ?> 