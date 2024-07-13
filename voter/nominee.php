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
<?php include('../Components/header.php') ?>
<section class="container mt-5 pb-5">
    <div class="row mt-3">
        <div class="col-md-12">
            <h1 class="text-white">Vote for a Candidate</h1>
        </div>
        </div>
</section>
<?php include('../Components/footer.php') ?>

