<?php
if(isset($_SESSION['message'])){
    ?>
<div class="alert alert-success alert-dismissible fade show text-white" style="background-color: green;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $_SESSION['message']; ?>
</div>
<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong><?= $_SESSION['message']; ?></div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->
<?php
    unset($_SESSION['message']);

}
if(isset($_SESSION['error'])){
    ?>
<div class="alert alert-danger alert-dismissible fade show text-white" style="background-color: red;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?= $_SESSION['error']; ?>
</div>
<!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hey!</strong><?= $_SESSION['error']; ?></div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->
<?php
    unset($_SESSION['error']);
};
?>