<?php include("views/templates/header.php");?>
    <form method="post" action="index.php?page=update_done">
        <input type="hidden" value="<?php $_GET['id'] ?>" name="contact_id">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="Achternaam" placeholder="<?php echo($result[0]['achternaam'])?>">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="Voornaam" placeholder="Voornaam">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="Telnr" placeholder="Telnr.">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="GSM" placeholder="GSM">

        <input type="email" class="form-control" id="exampleFormControlInput1" name="Email" placeholder="Email">

        <select class="form-control" id="exampleFormControlSelect1" >
            <option>Bedrijf</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
<?php include("views/templates/footer.php");?>