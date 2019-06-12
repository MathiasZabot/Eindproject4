<?php include("views/templates/header.php");
    
    if ($_GET['table'] === 'contacten'){?>
    <form method="post" action="index.php?page=create_done_contact&table=contacten">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Achternaam">

        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Voornaam">

        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Telnr.">

        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="GSM">

        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">

        <select class="form-control" id="exampleFormControlSelect1" >
            <option>Bedrijf</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <input type="submit">
    </form>
   
    
    <?php }elseif ($_GET['table'] === 'bedrijven') { ?>
        <form method="post" action="index.php?page=create_done_bedrijf&table=bedrijven">
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bedrijfsnaam">
        <input type="submit">
        </form>
    <?php }?>

    <?php include("views/templates/footer.php");?>

    