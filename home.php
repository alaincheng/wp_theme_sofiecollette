<?php
/*
 Template Name: Archives with Content
 */
?>

<?php get_header(); ?>
Instituut Sofie Collette is er speciaal voor u. Sofie neemt U met haar
uitgebreide kennis graag volledig onder handen. Na ruim 10 jaar ervaring
in de Wellness / Beauty sector was het tijd om mijn droom te realiseren.
Een persoonlijke en professionele aanpak is hierbij heel belangerijk.
Het esthetische koppelen aan resultaat gerichte behandelingen. Ik zou
zeggen kom het zelf eens ervaren, geniet en herbron uzelf!


<?php if (have_posts()) : 
?>
<h2>Acties</h2>
<hr>
<?php 

while (have_posts()) : the_post();?>
<div class="t"><div class="b"><div class="l"><div class="r"><div class="bl"><div class="br"><div class="tl"><div class="tr">         
<center>
<h2 id="post-<?php the_ID(); ?>">
	<?php the_title();?>
	</h2>
<div class="entrytext">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	</div>
</div></div></div></div></div></div></div></div> <br />
	<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<table width="100%">
	<tr>
		<td colspan="2"><hr></td>
	</tr>
	<tr>
		<td valign="top">
			<h2>Producten</h2>
			<ul>

				<li><a href="http://www.ahava.be/producten.php" target="new">AHAVA -
						productlijn</a></li>
				<li><a href="http://www.schrammek.de/" target="new">Dr.Schrammek</a>
				</li>
				<li><a href="http://www.ahava.be/productsoorten.php?id=5"
					target="new">Mannen</a></LI>
				<li><a href="http://www.fakebake.com" target="new">Fake Bake</a></LI>
			</ul>
		</td>
		<td valign="top">
			<h2>Links</h2>
			<ul>
				<li><a href="http://www.ahava.be/" target="new">ahava.be</a></li>
				<li><a href="http://www.probleemhuid.be/" target="new">probleemhuid</a>
				</li>

				<li><a href="http://www.chi.be/" target="new">aromatherapie</a></li>
				<li><a href="http://www.anthemis.nl/antdex.htm" target="new">etherische
						oliÃ«n</a></LI>
				<li><a href="http://www.alexami.be" target="new">Alexami</a></li>
			</ul>
		</td>
	</tr>
</table>
	<?php get_footer(); ?>