<div style="margin-top: 13%">
<?php include 'models/model_login.php' ?>
<div class="container text-center">
    <div class="row justify-content-center">
       <div class="card text-white bg-secondary" style="width: 25rem;">
           <div class="card-body">
               <img class="" src="../images/admin.png" alt="Administrateur" width="130" height="130">
               <h1 class="h2">Veuillez vous indentifier</h1><br/><br/>
                   <form method="post">
                        <div>
                        <label for="email" class="sr-only">Adresse Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Adresse Email" autofocus><br/>

                        <label for="password" class="sr-only">Mot de Passe</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de Passe"><br/><br/>

                        <div>
                            <a href="../index.php" class="btn btn-danger btn-lg"><i class="fas fa-undo"></i> Retour</a>
                            <button type="submit" name="submit" class="btn btn-lg btn-primary"><i class="fas fa-user"></i> Connexion</button>
                        </div>
                        </div>
                    </form>
           </div>
       </div>
    </div><br/>
    <p class="text-muted">&copy; 2018-2019 | Jean Forteroche</p>
</div>
</div>