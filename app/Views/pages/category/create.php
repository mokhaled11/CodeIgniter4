<div class="row">
       <?php 
        $session = \Config\Services::session();
        ?>
        <?php if(isset($session->failure)): ?>
            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert"> <?= $session->failure ?></div>
        <?php endif; ?>
  <div class="col-lg-8">
    <strong>Category Name:</strong>
    <input type="text" name="category" class="form-control" placeholder="Category Name">
  </div>
  <div class="col-lg-8">
    <strong>Parent:</strong>
    <select class="form-control" name="parent_id">
    <?php if($categories): ?>
                <option value="0">Select Category Name</option>
                <?php foreach ($categories as $cat ): ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option disabled>No Options</option>
            <?php endif; ?>
    </select>
  </div>
  <div class="col-lg">
    <br/>
    <button class="btn btn-success" id='save'>Save</button>
  </div>
</div>
