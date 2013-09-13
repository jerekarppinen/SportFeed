<?php include("header.php"); ?>

<div id="news-container clearfix" class="js-masonry">

<?php if(isset($entries)) {
							 foreach($entries as $entry) : ?>
							<div class="item">
								<p>
									<b>
										<a href="<?php echo $entry['link']; ?>"><?php echo $entry['title']; ?></a>
									</b>
								</p>
								<p><?php echo $entry['description']; ?></p>
								<p><i><?php echo $entry['pubDate']; ?></i></p>
							</div>
<?php endforeach; } ?>

</div>



<?php include("footer.php"); ?>
