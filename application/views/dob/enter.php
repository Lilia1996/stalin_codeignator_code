<div class="col-sm-8 text-left">
<h1 align="center">Success Page</h1>
<?php if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
    <?php } ?>

</div>