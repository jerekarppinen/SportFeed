<?php include("header.php"); ?>


<?php if(isset($entries)) {
							 foreach($entries as $entry) : ?>
							<div class="item">
								<p>
									
										<a class="itemtitle" href="<?php echo $entry->link; ?>"><?php echo $entry->title; ?></a>
									
								</p>
								<p class="itemdescr"><a href="<?php echo $entry->link; ?>"><?php echo $entry->description; ?></a></p>
								<p class="itemdate"><i><?php echo $entry->pubdate; ?></i></p>
							</div>
<?php endforeach; } ?>




<?php include("footer.php"); ?>