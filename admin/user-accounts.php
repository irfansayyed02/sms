<?php include('../includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<!-- Content Header (Page header) -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst ($_REQUEST['user'])?> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="table responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
               $count = 1;
                $user_query = 'SELECT * FROM accounts WHERE type = "'.$_REQUEST['user'].'"';
                $user_result = mysqli_query($db_conn, $user_query);   
                while ($users = mysqli_fetch_object($user_result)) 
                {
                ?>
              <tr>
                <td><?= $count++; ?></td>
                <td><?= $users->name; ?></td>
                <td><?= $users->email; ?></td>
                <td></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
            
        </div>
</section>
    <!-- /.content -->


</div> <!-- Content Wrapper. Contains page content -->
<!-- Main content -->

    <?php include('footer.php') ?>
