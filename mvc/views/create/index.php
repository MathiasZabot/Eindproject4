<?php include("views/templates/header.php");
    
    if ($_GET['table'] === 'contacten'){?>
    <form method="post" action="index.php?page=create_done_contact&table=contacten">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Achternaam" name="Achternaam">

        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Voornaam" name="Voornaam">

        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Telnr." name="Telnr">

        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="GSM" name="GSM">

        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" name="Email">

        <select class="form-control" id="exampleFormControlSelect1" name="Bedrijf_id">
            <?php foreach($result2 as $row) : ?>

                <option
                    <?php if($result2[0]['bedrijf_id'] === $row['bedrijf_id']) :?>
                        selected="selected"
                    <?php endif;?>
                        value="<?php echo $row['bedrijf_id'];?>"><?php echo $row['naam']; ?>
                </option>

            <?php endforeach; ?>
        </select>
        <input type="submit" class="btn btn-primary">
    </form>
   
    
    <?php }elseif ($_GET['table'] === 'bedrijven') { ?>
        <form method="post" action="index.php?page=create_done_bedrijf&table=bedrijven">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bedrijfsnaam">
        <input type="submit">
        </form>
    <?php }?>

    <?php include("views/templates/footer.php");?>

    