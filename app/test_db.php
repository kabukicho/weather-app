<?php
$link = mysqli_connect('localhost', 'root', '', 'weather_app') or die('Error : ' . mysql_error($link));
$result = $link->query('SELECT * FROM users');
?>

<h2>データベースにアクセスするテスト</h2>

<table data-role="table" data-mode="colmuntoggle">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
      <th><?php echo $row[ 'id'       ]; ?></th>
      <td><?php echo $row[ 'email'    ]; ?></td>
      <td><?php echo $row[ 'password' ]; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php
mysqli_free_result($result);
mysqli_close($link);
?>
