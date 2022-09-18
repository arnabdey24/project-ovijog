<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require_once APPROOT . '/views/inc/navbar.php'; ?>
<?php require_once APPROOT . '/views/inc/sidebar.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/sidebar.css">
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin.css">
<style>
    .tableDataWrap {
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<div class="main py-5" style="margin-left:173px;">
    <?php flash('admin'); ?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6">
                    <i class="fas fa-table me-1"></i>
                    <span class="table-head">Manage post</span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table my-4 cell-border pt-3" style="width: 100%; white-space: nowrap; table-layout: fixed;">
                <thead>
                    <tr>
                        <th class="text-center" style="width:10%;">Post ID</th>
                        <th class="text-center" style="width:10%;">User Id</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Category</th>
                        <th class="text-center">Body</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['posts'] as $post) : ?>
                        <tr class="text-center">
                            <td class="tableDataWrap"><?php echo $post->post_id; ?></td>
                            <td class="tableDataWrap"><?php echo $post->user_id; ?></td>
                            <td class="tableDataWrap"><?php echo $post->title; ?></td>
                            <td class="tableDataWrap"><?php echo $post->category; ?></td>
                            <td class="tableDataWrap"><?php echo $post->body; ?></td>
                            <td class="d-flex justify-content-around tableDataWrap">
                                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->post_id; ?>" title="See Post" class="btn btn-sm text-primary me-1" style="font-size: 15px;">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="<?php echo URLROOT; ?>/admins/deletePost/<?php echo $post->post_id; ?>" title="Delete Post" class="btn btn-sm text-danger" style="font-size: 15px;">
                                    <b>X</b>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>