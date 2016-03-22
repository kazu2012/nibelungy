<article class="post page">
    <?php if (login()) { echo tab($p); } ?> 
    <header>
        <h1 class="post-title"><?php echo $p->title;?></h0>
    </header>
    <section class="post-content">
	<div style="text-align: justify">
        <?php echo $p->body; ?>
	</div>
    </section>
</article>
