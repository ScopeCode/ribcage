<?php get_header(); ?>
<div id="container">
	<div id="content">
		<div id="post-17" class="hentry p1 page publish author-alex category-uncategorized tag- y2007 m07 d19 h23">
			<h2 class="entry-title">Downloading <a href="<?php get_option('siteurl')?>/artists/<?php artist_slug(); ?>"><?php artist_name(); ?> - <a href="<?php get_option('siteurl')?>/artists/<?php artist_slug() ?>/<?php release_slug(); ?>"><?php release_title(); ?></a> - Thanks!</h2></a>
			<div class="entry-content">
	<p>Thanks for kind donation! Don't those downloads just sound so much better! We'd hug you if it wasn't for the restraining order!</p>
		<p><a href="#">Download Artwork ( MB)</a></p>
		<p>
		<a href="<?php release_download_link_mp3 (); ?>">Download</a> Zipped <a href="<?php get_option('siteurl')?>/help/formats/mp3">High Quality MP3</a> Files (<?php release_download_size_mp3() ?>).<br />
		<a href="<?php release_download_link_flac (); ?>">Download</a> Zipped <a href="<?php get_option('siteurl')?>/help/formats/ogg">Ogg</a> Files (<?php release_download_size_ogg() ?>).<br />
		<a href="<?php release_download_link_flac (); ?>">Download</a> Zipped <a href="<?php get_option('siteurl')?>/help/formats/flac">Flac</a> Files (<?php release_download_size_flac() ?>).
		</p>
	</div><!-- .entry-content-->
</div><!-- .post -->
</div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer();?>