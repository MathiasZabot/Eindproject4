<?php include("../templates/header.php");?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contacten</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bedrijven</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Zoeken...">
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Zoeken...">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include("../templates/footer.php");?>