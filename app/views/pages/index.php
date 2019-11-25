<?php require_once APPROOT."/views/inc/header.php"?>

<div class="jumbotron text-center">
    <h1 class="display-3"><?php echo $data['title'];?></h1>
    <p class="lead"><?php echo $data['description']; ?></p>
</div>

<?php if(isset($_SESSION['user_id'])):?>
<div class="row">
    <div class="col-md-6 mt-4 mx-auto">
        <div class="card text-center">
          <div class="card-body">
            <h4 class="card-title">WEL-COME <<?php echo $_SESSION['user_name']?></h4>
            <p class="card-text">Email: <?php echo $_SESSION['user_email']?></p>
          </div>
          
        <div class="card-footer text-muted">
            Thank's <?php echo $_SESSION['user_name']?> 
        </div>
          
        </div>
    </div>
</div>
<?php endif;?>

<?php require_once APPROOT."/views/inc/footer.php"?>