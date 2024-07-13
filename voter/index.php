<?php include("../Components/header.php"); ?>
<style>
  a{
    text-decoration: none;
  }
</style>
<section class="container-fluid mt-3 px-5 pb-5 ">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-4 offset-md-1">
      <h4 class=" secondaryC fw-bold fs-2">Welcome Joshua</h4>
      <p class="text-white fw-semibold mt-3 ">We're so happy to see you again, get to know the nominees profiles and make an informed decision</p>
    </div>
    <div class="col-md-6 position-relative">
      <img src="../images/electionD.jpg" alt="Election day is here" class="img-fluid rounded-2 shadow">
      <div class="position-absolute" style="bottom: 5px; left:25px;">

        <p class="text-white fs-6 fw-semibold mt-4">The Election Day is here already. Stay tuned for more information.</p>

      </div>
    </div>
  </div>
</section>
<section class="container-fluid mt-5">
  <div class="container">
    <h4 class="text-center secondaryC fw-semibold mb-4"> All Nominees</h4>
    <div class="row g-5">
      <div class="col-md-4">
      <a href="nominee.php?votefor=governor&id=123">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <img src="../images/nominee.png" alt="nomionee" class="w-50">
            <div>
              <h5 class="card-title fw-semibold -ms-5">Candidate 1</h5>
              <p class="card-text text-gray">Governor</p>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-4">
      <a href="nominee.php?votefor=governor&id=123">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <img src="../images/nominee.png" alt="nomionee" class="w-50">
            <div>
              <h5 class="card-title fw-semibold -ms-5">Candidate 1</h5>
              <p class="card-text text-gray">Governor</p>
            </div>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-4">
        <a href="nominee.php?votefor=governor&id=123">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <img src="../images/nominee.png" alt="nomionee" class="w-50">
            <div>
              <h5 class="card-title fw-semibold -ms-5">Candidate 1</h5>
              <p class="card-text text-gray">Governor</p>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4">
      <a href="nominee.php?votefor=governor&id=123">
        <div class="card">
          <div class="card-body d-flex align-items-center">
            <img src="../images/nominee.png" alt="nomionee" class="w-50">
            <div>
              <h5 class="card-title fw-semibold -ms-5">Candidate 1</h5>
              <p class="card-text text-gray">Governor</p>
            </div>
          </div>
        </div>
      </a>
      </div>

    </div>
  </div>
  </div>
</section>



<?php include("../Components/footer.php"); ?>