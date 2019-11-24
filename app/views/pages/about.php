<?php require_once APPROOT."/views/inc/header.php"?>


<div class="card text-center">
  <div class="card-body">
    <h1><?php echo $data['title'];?></h1>
    <p class="card-text"><?php echo $data['description'];?></p>
    <p>Version: <strong><?php echo APPVERSION;?>
    </strong></p>
  </div>
</div>
<?php require_once APPROOT."/views/inc/footer.php"?>