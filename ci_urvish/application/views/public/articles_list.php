<?php include ('public_search_header.php'); ?>

	<div class="container">
		<h1>All Article</h1>
		<hr>
			<table class="table">
				<thead>
					<tr>
						<td>Sr. No</td>
						<td>Article</td>
						<td>Published On</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						// $i=1;
					if(count($articles)): 
						$count = $this->uri->segment(3, 0);
						foreach($articles as $article): ?>
						<tr>
							<td><?= ++$count ?></td>
							<td>
								<?= anchor("user/article/{$article->id}",$article->title,['class'=>'btn-link disabled']) ?> 
							</td>
							<td>
								<?= date('d M y H:i:s A',strtotime($article->created_at)); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan=3>
								No Record Found.
							</td>
						</tr>
					<?php  endif; ?>

				</tbody>
			</table>
		<?= $this->pagination->create_links() ?>	
	</div>

<?php include ('public_footer.php'); ?>