<?php
$post = isset($_GET['votefor']) ? $_GET['votefor'] : '';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($post && $id) {
    include('../Components/config.php');
    $stmt = $conn->prepare("SELECT * FROM candidate WHERE post = ? AND id = ?");
    $stmt->bind_param("si", $category, $id);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<?php include('./Components/header.php') ?>
<section class="container mt-5 pb-5">
    <center>
        <div class="row mt-3">
            <div class="col-md-12">
                <h1 class="text-white mb-3">Count your Vote for me</h1>
                <div class="card bg-white d-flex justify-content-center border-0" style="max-width: 25rem;">
                    <div class="card-body">
                        <img src="../images/nominee.png" class="img-fluid">
                        <h3 class="fs-6 fw-bold text-info mb-2">
                            Joshua Akinwale
                        </h3>
                        <h5 class="card-title fw-bold secondaryC fs-5 mb-3">
                            Governor
                        </h5>
                        <p class="card-text fs-6 fw-semibold mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quibusdam fuga voluptates minus aliquid vitae enim dolorum, vel quo autem ipsa dolores voluptatum error, nesciunt iure nihil excepturi cupiditate? Dolore!
                        </p>
                        <button class="btn btn-info fw-semibold w-50">Vote for me</button>
                    </div>
                </div>
            </div>
        </div>
    </center>
</section>
<?php include('./Components/footer.php') ?>