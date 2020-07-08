<div id="wrapper">

  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->


      <h2 class="text-center">Videos list</h2>
      <hr>

      <div class="container mt-5">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Topic</th>
              <th scope="col">Laboratory Name</th>
              <th scope="col">Department Name</th>
              <th scope="col">Link</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            getVideosList($_SESSION['user_id']);
            ?>
          </tbody>
        </table>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->