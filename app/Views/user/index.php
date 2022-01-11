<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="container">
	<h3 class="pt-3">User</h3>
	<table class="table">
		<thead>
			<th>Id</th>
			<th>Username</th>

			<th>Created Date</th>
		</thead>
		<tbody>
			<?php foreach ($data as $index => $user) : ?>
				<tr>
					<td><?= $user->id ?></td>
					<td><?= $user->username ?></td>

					<td><?= $user->created_date ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<div style="float:right">

	</div> <br><br><br>
</div>
<?= $this->endSection() ?>