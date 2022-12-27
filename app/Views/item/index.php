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

    <table class="table text-center" id="items-table">
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

<!-- Adding Modals -->
<?= $this->include('item/modals/create') ?>

<!-- Script -->
<?= $this->section('script') ?>
    <script src="<?= base_url('js/items.js') ?>"></script>
<?= $this->endSection() ?>

<?= $this->endSection() ?>