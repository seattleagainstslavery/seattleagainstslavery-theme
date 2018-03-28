<?php $books = get_field( 'books' );
if ( $books ): ?>
	<section class="flexible flexible--books">
		<?php if ( $books['title'] ): ?>
			<h2><?= $books['title']; ?></h2>
		<?php endif; ?>
		<?php if ( $books['subtitle'] ): ?>
			<h3><?= $books['subtitle']; ?></h3>
		<?php endif; ?>
		<div class="flexible--books--container">
			<?php foreach ( $books['books'] as $book ): ?>
				<div class="flexible--books--single">
					<a href="<?= $book['url']; ?>">
						<span>
							<?= $book['title']; ?>
							<small><?= __('By', 'foundationpress'); ?> <?= $book['author']; ?></small>
						</span>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>