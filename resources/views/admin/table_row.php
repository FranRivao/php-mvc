<tr>
    <th><?php echo $r['id']; ?></th>
    <th><?php echo $r['username']; ?></th>
    <th><?php echo $r['name']; ?></th>
    <th><?php echo $r['surname']; ?></th>
    <th><?php echo $r['password']; ?></th>
    <th><?php echo $r['email']; ?></th>
    <th><?php echo $r['role'] == 2 ? "User(" . $r['role'] .")" : "Admin(" . $r['role'] .")"; ?></th>
    <th><?php echo "accion" ?></th>
</tr>
