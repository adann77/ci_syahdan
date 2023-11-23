<div class = "container-fluid">
    <h1 class = "h3 mb-4 text-gray-800"> </h1>
    <div class="row no-gutters">
        <div class = "col-md-4">
            <img src="<?php echo base_url('assets/assets/img/profile/') . $user['gambar']; ?>" width= "300px" height= "300px">
        </div>
        <div class = "col-md-8">
            <div class = "card-body"> 
                <h5 class = "card-title"><?= $user['nama'] ?></h5>
                <p class = "card-text"><?= $user['email'] ?></p>
                <p class = "card-text"><small class="text_muted">Anggota Sejak<?= date('d F Y', $user['date_created']);  ?></small></p>
            </div>
        </div>
    </div>