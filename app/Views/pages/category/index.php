<section>
     <div class='container'>
        <?php 
        $session = \Config\Services::session();
        ?>
        <?php if(isset($session->success)): ?>
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert"> <?= $session->success ?></div>
        <?php endif; ?>
       <div class="row">
        <div class="col-4">
                <p>
                    <a class="btn btn-primary btn-md m-1" href="<?= base_url();?>/category/create" role="button">Create Category</a>
                </p>
            </div>
            <div class="col-4">
                <p>
                    <a class="btn btn-primary btn-md m-1" href="<?= base_url();?>/category/select" role="button">Select Category</a>
                </p>
        </div>
      <div>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Parent</th>
            </tr>
        </thead>
        <tbody>
            <?php if($categories): ?>
                <?php foreach ($categories as $cat ): ?>
                    <tr>
                        <th scope="row"><?= $cat['id'] ?></th>
                        <th scope="row"><?= $cat['category'] ?></th>
                        <th scope="row"><?= $cat['parent_id'] ?></th>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                  <p class="text-center">No Categories have been found</p>
            <?php endif; ?>
        </tbody>
        </table>
     </div>
</section>
