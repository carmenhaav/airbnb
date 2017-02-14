<h3><?= __("Rentals") ?></h3>
<ul class="list-group">
    <?php foreach ($rentals as $rental): ?>
        <li class="list-group-item">
            <a href="rentals/<?= $rental['rental_id'] ?>/<?= $rental['rental_name'] ?>"><?= $rental['rental_name'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3><?= __("Add new rental") ?></h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th><?= __("Name") ?></th>
                <td><input type="text" name="data[rental_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit"><?= __("Add") ?></button>
    </form>
    <?php endif; ?>
