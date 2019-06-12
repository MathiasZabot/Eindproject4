<?php include("views/templates/header.php");?>

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
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">achternaam</th>
                    <th scope="col">voornaam</th>
                    <th scope="col">telnr</th>
                    <th scope="col">gsmnr</th>
                    <th scope="col">email</th>
                    </tr>
                </thead>
                <tbody>

                    <?php echo $numOfRows; if($numOfRows > 0): ?>

                        <?php foreach($result as $row) : ?>
                            <tr>
                                <th scope="row"><?php echo $row['contact_id']; ?></th>
                                <td><?php echo $row['achternaam']; ?></td>
                                <td><?php echo $row['voornaam']; ?></td>
                                <td><?php echo $row['telnr']; ?></td>
                                <td><?php echo $row['gsmnr']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="index.php?page=updateContact&id=<?php echo $row['contact_id']; ?>" class="btn btn-success" type="button">Aanpassen</a></td>
                                <td><a href="index.php?page=delete&table=contacten&id=<?php echo $row['contact_id']; ?>" class="btn btn-danger" type="button">Verwijderen</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="index.php?page=create&table=contacten" class="btn btn-success" type="button">Voeg een nieuwe klant toe</a>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Zoeken...">
                    </div>
                </div>
            </form>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">bedrijfsnaam</th>
                </tr>
                </thead>
                <tbody>

                <?php echo $numOfRows; if($numOfRows > 0): ?>

                    <?php foreach($resultBedrijven as $row) : ?>
                        <tr>
                            <th scope="row"><?php echo $row['bedrijf_id']; ?></th>
                            <td><?php echo $row['naam']; ?></td>
                            <td><a href="index.php?page=updateBedrijf&id=<?php echo $row['bedrijf_id']; ?>" class="btn btn-success" type="button">Aanpassen</a></td>
                            <td><a href="index.php?page=delete&table=bedrijven&id=<?php echo $row['bedrijf_id']; ?>" class="btn btn-danger" type="button">Verwijderen</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
            <a href="index.php?page=create&table=bedrijven" class="btn btn-success" type="button">Voeg een nieuw bedrijf toe</a>
        </div>
    </div>

<?php include("views/templates/footer.php");?>