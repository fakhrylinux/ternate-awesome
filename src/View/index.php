<?php use Ary\TernateAwesome\Helper\Helper; ?>

<div class="nav justify-content-end"><a href="add">Add Post</a></div>
<div>
    <h2>Gallery</h2>
</div>

<pre>
    <?php
        print_r($posts);

    ?>
</pre>

<div class="d-flex flex-row bd-highlight mb-3 flex-wrap">

    <?php foreach ($posts as $post) { ?>
        <div class="card border-info mb-3 m-lg-3" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <a href="<?= Helper::baseUrl() ?>/upload/<?= $post['image'] ?>"><img
                            src="<?= Helper::baseUrl() ?>/upload/<?= $post['image'] ?>"
                            style="width:240px;height: 240px"></a>
                <p class="card-text"><?= $post['caption'] ?></p>
                <div class="d-grid gap-2 d-md-block">
                    <!--                    <form action='delete.php?name="-->
                    <?php //echo $contact['name']; ?><!--"' method="post">-->
                    <!--                        <input type="hidden" name="name" value="-->
                    <?php //echo $contact['name']; ?><!--">-->
                    <!--                        <input type="submit" name="submit" value="Delete">-->
                    <!--                    </form>-->
                    <form action="delete" method="post">
                        <input type="hidden" name="id" value="<?= $post['id']; ?>">
                        <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger">
                    </form>
                    <a href="edit/<?= $post['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                </div>
            </div>
        </div>

    <?php } ?>

</div>