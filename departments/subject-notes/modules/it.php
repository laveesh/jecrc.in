<?php
include 'function.php';
?>
<section class="section container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="sectionHeading">Subject List</div>
      <div class="h-section card sectionContent container">
        <div class="card-body">
          <ul class="list-group list-group-flush text-primary">
            <?php
            $departmentId = 3;
            getSubjectList($departmentId);
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="sectionHeading">Subject Notes</div>
      <div class="section container sectionContent" id="notes">
      </div>
    </div>
  </div>
</section>