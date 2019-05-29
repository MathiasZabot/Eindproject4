<?php include("views/templates/header.php");?>

    <form method="post" action="http://localhost:63342/htdocs/repository/personal/Eindproject4/mvc/index.php?page=loggedin">
        <div class="form-group">
            <label for="exampleInputEmail1">Gebruikersnaam</label>
            <input type="text" class="form-control" id="gebruikersnaam" name="gebruikersnaam" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Paswoord</label>
            <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include("views/templates/footer.php");?>