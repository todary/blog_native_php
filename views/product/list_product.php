<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
    </tr>

    <?php while ($row = $result->fetch_object()) { ?>
        <tr>
            <td><?= $row->product_id ?></td>
            <td><?= $row->product_name ?></td>
        </tr>
    <?php }
    ?>
</table>

