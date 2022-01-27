<form action="postAdd" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <label for="title" class="col-sm-1 col-form-label">Title</label>
        <input type="text" class="form-control" placeholder="Title" aria-label="Title" id="title" name="title">
    </div>

    <div class="input-group mb-3">
        <label for="caption" class="col-sm-1 col-form-label">Caption</label>
        <textarea class="form-control" placeholder="Caption" id="caption" name="caption"></textarea>
    </div>

    <div class="input-group mb-3">
        <label for="title" class="col-sm-1 col-form-label">Image</label>
        <input type="file" class="form-control" name="image_upload">
    </div>

    <button type="submit" class="btn btn-primary mb-3" value="post">Submit</button>

</form>