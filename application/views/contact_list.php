<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo  base_url(); ?>public/css/bootstrap.css">
    <script src="<?php echo  base_url(); ?>public/js/bootstrap.js"></script>
</head>
<body>
<div id="container" class="w-75 m-auto">
    <h1 class="text-center">Danh bạ</h1>
    <div id="body">
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th colspan="2">Số điện thoại</th>
                <th>Email</th>
                <th>FB</th>
                <th>Company</th>
                <th></th>
            </tr>
            <?php foreach ($contacts as $idx => $item): ?>
            <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
                <td class="center"><?= $idx+1 ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->phone1 ?></td>
                <td><?= $item->phone2 ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->fb ?></td>
                <td><?= $item->company ?></td>
                <td class="center"><a href="<?php echo  base_url(); ?>/index.php/contact/edit/<?= $item->id ?>">Chi tiết</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <a href="<?php echo  base_url(); ?>index.php/contact/add" class="btn btn-info">Thêm mới</a>
    </div>

    <p class="footer text-right">Website được thiết kế bởi OWS Việt Nam</p>
</div>
</body>
</html>
