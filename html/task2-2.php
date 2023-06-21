<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="discription" content="php-test">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <table>
    <?php
    $title = array('商品','価格','税込価格');
    $pencil = array('鉛筆','100円','110円');
    $erase = array('消しゴム','200円','220円');
    $ruler = array('鉛筆','300円','330円');
    ?>
    <tr>
      <th><?php echo $title[0] ?></th>
      <th><?php echo $title[1] ?></th>
      <th><?php echo $title[2] ?></th>
    </tr>
    <tr>
      <td><?php echo $pencil[0]?></td>
      <td><?php echo $pencil[1]?></td>
      <td><?php echo $pencil[2]?></td>
    </tr>
    <tr>
      <td><?php echo $erase[0]?></td>
      <td><?php echo $erase[1]?></td>
      <td><?php echo $erase[2]?></td>
    </tr>
    <tr>
      <td><?php echo $ruler[0]?></td>
      <td><?php echo $ruler[1]?></td>
      <td><?php echo $ruler[2]?></td>
    </tr>
  </table>
</body>
</html>