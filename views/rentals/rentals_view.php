<h1><?= __("Rental") ?> '<?= $rental['rental_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th><?= __("Rental") ?> ID</th>
        <td><?= $rental['rental_id'] ?></td>
    </tr>

    <tr>
        <th><?= __("Rental") ?><?= __("name") ?></th>
        <td><?= $rental['rental_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<?php if ($auth->is_admin): ?>
    <form action="rentals/edit/<?= $rental['rental_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                <?= __("Edit") ?>
            </button>
        </div>
    </form>
<?php endif; ?>