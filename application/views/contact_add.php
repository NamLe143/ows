<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo  base_url(); ?>public/css/bootstrap.css">
    <script src="<?php echo  base_url(); ?>public/js/bootstrap.js"></script>
</head>
<body>
    <div class="add-user  w-50 m-auto">
        <h1>Thêm Sinh Viên</h1>
        <form method="post" action="<?php echo  base_url(); ?>/index.php/contact/save">
            <div class="input form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="input form-group">
                <label for="">Số điện thoại 1</label>
                <input type="number" name="phone1" class="form-control" required>
            </div>
            <div class="input form-group">
                <label for="">Số điện thoại 2</label>
                <input type="number" name="phone2" class="form-control">
            </div>
            <div class="input form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="input form-group">
                <label for="">Facebook</label>
                <input type="text" name="fb" class="form-control">
            </div>
            <div class="input form-group">
                <label for="">Company</label>
                <input type="text" name="company" class="form-control" required>
            </div>
            <button class="btn btn-info btn-block">Thêm mới</button>
        </form>
    </div>
</body>
</html>
