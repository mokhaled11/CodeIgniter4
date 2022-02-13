<div class="row" id='row'>
  <div class="col-lg-8">
    <strong>Selector:</strong>
    <select class="form-control" name="id">
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
    <div class="col-lg-8" id='select-container'>
        <br/>
        <button class="btn btn-success" id='select'>Select</button>
    </div>
</div>
