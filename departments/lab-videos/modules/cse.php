<?php
include 'function.php';
?>
<section class="section container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="sectionHeading">Laboratories List</div>
      <div class="h-section card sectionContent container">
        <div class="card-body">
          <ul class="list-group list-group-flush text-primary">
            <?php
            $departmentId = 2;
            getLabList($departmentId);
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="sectionHeading">Laboratories Videos</div>
      <div class="section container sectionContent" id="videos">
      </div>
    </div>
  </div>
</section>