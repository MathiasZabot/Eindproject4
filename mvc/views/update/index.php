<?php include("views/templates/header.php");?>
    <form method="post" action="index.php?page=update_done">
        <input type="hidden" value="<?php $_GET['id'] ?>" name="contact_id">

        <input type="text" class="form-control" id="exampleFormControlInput1" name="Achternaam" placeholder="<?php echo($result[0]['achternaam'])?>">

        <input type="text" class="form-control" id="exampleFormControlInput1" name="Voornaam" placeholder="<?php echo($result[0]['voornaam'])?>">

        <input type="tel" pattern="[0-9]{3}-[0-9]{6}" class="form-control" id="exampleFormControlInput1" name="Telnr" placeholder="<?php echo($result[0]['telnr'])?>.">

        <input type="tel" pattern="[0-9]{4}-[0-9]{6}" class="form-control" id="exampleFormControlInput1" name="GSM" placeholder="<?php echo($result[0]['gsmnr'])?>">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="Email" placeholder="<?php echo($result[0]['email'])?>">

        <select class="form-control" id="exampleFormControlSelect1" >
        <?php foreach($result2 as $row) : ?>

            <option
                <?php if($result[0]['bedrijf_id'] === $row['bedrijf_id']) :?>
                    selected="selected"
                <?php endif;?>
            ><?php echo $row['naam']; ?>
            </option>

        <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
<?php include("views/templates/footer.php");?>