<pre>
<?php

use Fakhry\Informatika\Karyawan\TernateAwesome\Helper\Helper;

print_r($posts);
echo "hello";

?>
</pre>

<form action="<?php Helper::baseUrl() ?>/postEdit" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <label for="title" class="col-sm-1 col-form-label">Title</label>
        <input type="text" class="form-control" placeholder="Title" aria-label="Title"
               aria-describedby="basic-addon1" id="title" name="title" value="<?= $posts['title'] ?>">
    </div>

    <div class="input-group mb-3">
        <label for="caption" class="col-sm-1 col-form-label">Caption</label>
        <textarea class="form-control" placeholder="Caption" id="caption"
                  name="caption"><?= $posts['caption'] ?></textarea>
    </div>

    <div class="input-group mb-3">
        <label for="title" class="col-sm-1 col-form-label">Image</label>
        <input type="file" class="form-control" name="image_upload">
    </div>

    <input type="hidden" name="id" value="<?= $posts['id'] ?>">
    <button type="submit" class="btn btn-primary mb-3" value="post">Submit</button>

</form>