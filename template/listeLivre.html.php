<div class="d-flex flex-wrap ">
    <?php
        $livres = $db->query("select * from livre")->fetchAll();
        foreach($livres as $livre):
    ?> 
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top" src="ressources/images/UNC.png" alt="Card image cap">
            <div class="card-text p-1 d-flex align-items-center">
                <strong><?= $livre->titre ?> </strong>
            </div>
            <div class="card-footer d-flex justify-content-center  p-1 bg-white border-0">
                <button class="btn btn-primary " style="width: 15rem;">Emprunter</button>
            </div>
        </div>
    
    <?php endforeach; ?>
</div>