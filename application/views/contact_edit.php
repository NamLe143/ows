<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo  base_url(); ?>public/css/bootstrap.css">
    <script src="<?php echo  base_url(); ?>public/js/bootstrap.js"></script>
</head>
<body>
<div id="container" class="w-25 m-auto">
    <h1 class="text-center">Cập nhật Danh bạ</h1>
    <div id="body">
        <form method="post" action="<?php echo  base_url(); ?>/index.php/contact/save/<?= $contact_item->id?>">
            <div class="input form-group mb-5>
                <label for="">Tên</label>
                <input type="text"  class="form-control"  name="name" value="<?= $contact_item->name ?>">
                <label for="">SDT1</label>
                <input type="text" class="form-control"  name="phone1" value="<?= $contact_item->phone1 ?>">
                <label for="">SDT2</label>
                <input type="text" class="form-control"  name="phone2" value="<?= $contact_item->phone2 ?>">
                <label for="">Email</label>
                <input type="text" class="form-control"  name="email" value="<?= $contact_item->email ?>">
                <label for="">Facebook</label>
                <input type="text" class="form-control"  name="fb" value="<?= $contact_item->fb ?>">
                <label for="">Company</label>
                <input type="text" class="form-control"  name="company" value="<?= $contact_item->company ?>">
            </div>
            <button class="btn btn-info">Cập nhật</button>
            <input type="button" onclick="remove(<?= $contact_item->id?>)" value="Xóa" class="btn btn-info" />
            <button onclick="javascript: history.back()" class="btn btn-info">Quay lại</button>
        </form>
    </div>
    <p class="footer text-right mt-4">Website được thiết kế bởi OWS Việt Nam</p>
</div>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script>
    function remove(id) {
        var isConfirm = confirm("Bạn có chắc muốn xóa không?");
        if (isConfirm) {
            $.get('<?php echo  base_url(); ?>/index.php/contact/del/'+id).then(function(data) {
                if (data == "success")
                    window.location = "<?php echo  base_url(); ?>";
                else
                    alert('Có lỗi xảy ra.');
            })
        }
    }
</script>
</body>
