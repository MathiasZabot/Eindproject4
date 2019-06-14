<?php include("views/templates/header.php");?>
    <form method="post" action="index.php?page=update_done_bedrijf">
        <input type="hidden" value="<?php echo $_GET['id']; ?>" name="bedrijf_id">

        <input type="text" value="<?php echo($result[0]['naam'])?>" class="form-control" id="exampleFormControlInput1" name="naam" >

        <button type="submit" class="btn btn-primary">Aanpassen</button>
    </form>
<?php include("views/templates/footer.php");?>