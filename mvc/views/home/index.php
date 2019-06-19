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
                        <input type="text" class="form-control" id = "searchInput" " placeholder="Zoeken...">
                    </div>
                </div>
            </form>
            <table class="table" id="mainTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">achternaam</th>
                        <th scope="col">voornaam</th>
                        <th scope="col">telnr</th>
                        <th scope="col">gsmnr</th>
                        <th scope="col">email</th>
                        <th scope="col">bedrijf</th>
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
                                <td><?php echo $row['naam']; ?></td>
                                <td><a href="index.php?page=updateContact&id=<?php echo $row['contact_id']; ?>" class="btn btn-success" type="button">Aanpassen</a></td>
                                <td><a href="index.php?page=delete&table=contacten&id=<?php echo $row['contact_id']; ?>" class="btn btn-danger" type="button">Verwijderen</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="index.php?page=createContact&table=contacten" class="btn btn-success" type="button">Voeg een nieuwe klant toe</a>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="searchInputB" placeholder="Zoeken...">
                    </div>
                </div>
            </form>
            <table class="table" id="mainTableB">
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
            <a href="index.php?page=createBedrijf&table=bedrijven" class="btn btn-success" type="button">Voeg een nieuw bedrijf toe</a>
        </div>
    </div>

    <script>
        function filterTable(event) {
            var filter = event.target.value.toUpperCase();
            var rows = document.querySelector("#mainTable tbody").rows;

            for (var i = 0; i < rows.length; i++) {
                var firstCol = rows[i].cells[0].textContent.toUpperCase();
                var secondCol = rows[i].cells[1].textContent.toUpperCase();
                var thirdCol = rows[i].cells[2].textContent.toUpperCase();
                var fourthCol = rows[i].cells[3].textContent.toUpperCase();
                var fifthCol = rows[i].cells[4].textContent.toUpperCase();
                var sixthCol = rows[i].cells[5].textContent.toUpperCase();
                var seventhCol = rows[i].cells[6].textContent.toUpperCase();
                if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1 || fourthCol.indexOf(filter) > -1 || fifthCol.indexOf(filter) > -1 || sixthCol.indexOf(filter) > -1 || seventhCol.indexOf(filter) > -1) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        document.querySelector('#searchInput').addEventListener('keyup', filterTable, false);
    </script>

    <script>
        function filterTableB(event) {
            var filter = event.target.value.toUpperCase();
            var rows = document.querySelector("#mainTableB tbody").rows;

            for (var i = 0; i < rows.length; i++) {
                var firstCol = rows[i].cells[0].textContent.toUpperCase();
                var secondCol = rows[i].cells[1].textContent.toUpperCase();
                var thirdCol = rows[i].cells[1].textContent.toUpperCase();
                if (firstCol.indexOf(filter) > -1 || secondCol.indexOf(filter) > -1 || thirdCol.indexOf(filter) > -1) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
        document.querySelector('#searchInputB').addEventListener('keyup', filterTable, false);
    </script>

<?php include("views/templates/footer.php");?>