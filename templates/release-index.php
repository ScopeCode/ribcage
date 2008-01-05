<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php
global $releases, $release;
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=320,height=140,left = 560,top = 410');");
}
// End -->
</script>
<div id="container">
	<h2><a href="releases/">Releases</a></h2>
	<?php while ( have_releases () ) : the_release() ; ?>
	<div>
	<img src="<?php release_cover_tiny ();?>" align="right" />
	<h3><?php echo get_artistname_by_id($release['release_artist']); ?> - <?php release_title(); ?></h3>
	<p><?php release_blurb_short(); ?></p>
	<p><a href="javascript:popUp('<?php release_player_link (); ?>')">Listen Now</a></p>
	</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>