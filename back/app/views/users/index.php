<?php
/**
 * @var array $users
 * ./app/vues/categories/index.php
 * 
 * Variables disponible :
 * $users : ARRAY(id, login, pwd, firstname, lastname, status, created_at))
 */
?>

<div class="col-md-12">
        <div class="page-header">
          <h1>LISTE DES UTILISATEURS</h1>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id</th>
              <th>Login</th>
              <th>Password</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Status</th>
              <th>Created_at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user):; ?>
            <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['login']; ?></td>
              <td>*********</td>
              <td><?php echo $user['firstname']; ?></td>
              <td><?php echo $user['lastname']; ?></td>
              <td><?php echo $user['status']; ?></td>
              <td><?php echo $user['created_at']; ?></td>
              <td>

                <form action="<?php echo htmlspecialchars(ADMIN_BASE_URL ?? '', ENT_QUOTES, 'UTF-8'); ?>users/edit/form/<?php echo (int) $user['id']; ?>" method="post" style="display:inline;">
                            <input type="hidden" name="name" value="<?php echo (int) $user['id']; ?>">

                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                        </form>

                        <form action="<?php echo htmlspecialchars(ADMIN_BASE_URL ?? '', ENT_QUOTES, 'UTF-8'); ?>categories/delete/<?php echo (int) $user['id']; ?>" method="post" class="delete-form" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo (int) $user['id']; ?>">

                            <button type="submit" class="btn btn-secondary delete-btn">
                                Supprimer
                            </button>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>