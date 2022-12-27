<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div>
    <div class="mb-3">
        <h1 class="text-center">Item</h1>

        <!-- Button Modal Create -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
        Create Item
        </button>
    </div>

    <table class="table text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Item</th>
          <th scope="col">Created At</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($items as $data) {  ?>
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['item_name']; ?></td>
            <td><?= $data['created_at']; ?></td>
            <td>
                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalUpdate">Update</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Delete</button>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>

<!-- Modal Create-->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCreateLabel">Create Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="item_name" class="form-label">Nama Item</label>
            <input type="text" class="form-control" id="item_name" placeholder="Item Pertama">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>