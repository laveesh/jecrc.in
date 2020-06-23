<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<div id="content-wrapper">

  <div class="container-fluid">
    <!-- Page Content -->


    <h2 class="text-center">Notes list by this Subject</h2>
    <hr>

    <div class="container mt-5">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Topic</th>
            <th scope="col">description</th>
            <th scope="col">notes</th>
            <th scope="col">link</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td><button type="button" class="btn btn-dark">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td><button type="button" class="btn btn-dark">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td><button type="button" class="btn btn-dark">Delete</button></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>