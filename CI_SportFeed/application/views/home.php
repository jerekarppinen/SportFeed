<?php include("header.php"); ?>

<div id="news-container clearfix" class="js-masonry">

<?php if(isset($entries)) {
							 foreach($entries as $entry) : ?>
							<div class="item"><p><b><?php echo $entry['title']; ?></b></p> <p><?php echo $entry['description']; ?></p> <p><?php echo $entry['pubDate']; ?></p></div>
<?php endforeach; } ?>

</div>



<?php include("footer.php"); ?>
