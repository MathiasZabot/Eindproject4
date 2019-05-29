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
                    <th scope="col">Achternaam</th>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Tel nr</th>
                    <th scope="col">GSM nr</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <th scope="row"><?php echo $row['contact_id']; ?></th>
                                <td><?php echo $row['achternaam']; ?></td>
                                <td><?php echo $row['voornaam']; ?></td>
                                <td><?php echo $row['telnr']; ?></td>
                                <td><?php echo $row['gsmnr']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a href="index.php?id=<?php echo $row['contact_id']; ?>" class="btn btn-success" type="button">Update</a></td>
                                <td><a href="index.php?id=<?php echo $row['contact_id']; ?>" class="btn btn-danger" type="button">Delete</a></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
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

<?php include("views/templates/footer.php");?>