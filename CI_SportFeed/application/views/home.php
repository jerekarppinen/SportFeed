<?php include("header.html"); ?>
<div id="news-container" class="js-masonry">

<?php foreach($entries as $entry) : ?>
	<div class="item"><?php echo $entry['title']; ?></div>
<?php endforeach; ?>

</div>

<?php include("footer.html"); ?>