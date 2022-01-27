<?php use Fakhry\Informatika\Karyawan\TernateAwesome\Helper\Helper; ?>

<div class="d-flex flex-row bd-highlight mb-3 flex-wrap">

    <div>
        <h2>Gallery</h2>
    </div>

    <?php if ($posts == null) {


        echo "<h2><p>Nothing to post yet.</p></h2>";
        exit();
    } ?>

    <?php foreach ($posts as $post) { ?>
        <div class="card border-info mb-3 m-lg-3" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <a href="<?= Helper::baseUrl() ?>/upload/<?= $post['image'] ?>"><img
                            src="<?= Helper::baseUrl() ?>/upload/<?= $post['image'] ?>"
                            style="width:240px;height: 240px" alt="<?= $post['title'] ?>"></a>
                <p class="card-text"><?= $post['caption'] ?></p>
                <div class="d-grid gap-2 d-md-block">

                    <?php if ($_SESSION['login'] == true) { ?>
                        <form action="delete" method="post">
                            <input type="hidden" name="id" value="<?= $post['id']; ?>">
                            <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        <a href="edit/<?= $post['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                    <?php } ?>

                </div>
            </div>
        </div>

    <?php } ?>

</div>