<div class="col-sm-8 text-left">
<h1 align="center">Error Page</h1>
<?php if ($this->session->flashdata('category_error')) { ?>
    <div class="alert alert-danger"> <?= $this->session->flashdata('category_error') ?> </div>
<?php } ?>
</div>