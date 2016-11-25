<table border="1">
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>

    <?php while ($row = $result->fetch_object()) { ?>
        <tr>
            <td><?= $row->category_id ?></td>
            <td><?= $row->category_name ?></td>
        </tr>
    <?php }
    ?>
</table>

