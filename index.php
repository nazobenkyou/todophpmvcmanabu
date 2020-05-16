<h1>TODOリスト</h1>
<table border='1'>
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>title</th>
        <th>todo</th>
        <th>due_date</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>deleted_at</th>
    </tr>
    <?php
    foreach ($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['todo']; ?></td>
            <td><?php echo $row['due_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td><?php echo $row['deleted_at']; ?></td>
        </tr>
        ​
        <?php
    }
    ?>
</table>
</body>
