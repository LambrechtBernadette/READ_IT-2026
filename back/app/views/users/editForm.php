<?php
/**
 * @var array $user
 */

?>
<div class="col-md-6">
    <div class="page-header">
        <h1>Modification d'un utilisateur</h1>
        <h4><a href="<?php echo htmlspecialchars(ADMIN_BASE_URL ?? '', ENT_QUOTES, 'UTF-8'); ?>users">Retour aux utilisateurs</a></h4>
    </div>
    <h4>Utilisateur :</h4>
    <form action="<?php echo htmlspecialchars(ADMIN_BASE_URL ?? '', ENT_QUOTES, 'UTF-8'); ?>users/update/<?php echo (int) $user['id']; ?>"  method="post">
        <div>
            <label for="login">Login : </label>
            <input type="text" id="login" name="login" value="<?php echo $user['login']; ?>" />
        </div>
        <div>
            <label for="pwd">Pwd : </label>
            <input type="text" id="pwd" name="pwd" placeholder = "laisser vide pour conserver le mot de passe actuel" />
        </div>
        <div>
            <label for="firstname">Firstname : </label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>" />
        </div>
        <div>
            <label for="lastname">Lastname : </label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>" />
        </div>
        <div>
            <label for="status">Status : </label>
            <input type="text" id="status" name="status" value="<?php echo $user['status']; ?>" />
        </div>
        <div>
            <input type="submit" class="btn btn-lg btn-primary" value="Modifier" />
        </div>
    </form>
</div>