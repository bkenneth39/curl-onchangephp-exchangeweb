<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-mb-12">
            <div class="content">
                <table class="table tabel" id="example">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CodeName</th>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                        foreach ($hasil as $h) : ?>
                            <tr>
                                <th scope="row"><?= $count; ?></th>
                                <th scope="row"><?= $h['unit']; ?></th>
                                <th scope="row"><?= $h['name']; ?></th>
                                <th scope="row"><?= $h['value']; ?></th>

                            </tr>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>