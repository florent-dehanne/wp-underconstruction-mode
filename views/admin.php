<?php
  $underconstruction = get_option('wp_underconstruction');
  $underconstruction = !empty($underconstruction) ? $underconstruction : ['enabled' => false];
?>

<h1>Under Construction</h1>
<div class="wrap">
  <p>
    Utilisez le formulaire ci-dessous pour activer le mode maintenance sur votre site.<br>
    Le mode maintenance vous permet de rediriger les utilisateurs vers une page temporaire ou afficher un message en cas de maintenance ou lorsque votre site est en construction.
  </p>
  <form action="<?php echo esc_url( admin_url('admin.php') ); ?>" method="post">
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row"><label for="wp_underconstruction">Activer le mode maintenance</label></th>
          <td><input name="wp_underconstruction[enabled]" type="checkbox" id="wp_underconstruction" value="1" <?php if (array_key_exists('enabled', $underconstruction) && $underconstruction['enabled']): ?>checked="checked"<?php endif; ?>></td>
        </tr>
      </tbody>
    </table>

    <div class="wp_underconstruction-form">
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="wp_underconstruction">Mode d'affichage</label></th>
            <td>
              <p><label><input name="wp_underconstruction[mode]" type="radio" id="wp_underconstruction_mode" value="1" <?php if ($underconstruction['mode'] == 1): ?>checked="checked"<?php endif; ?>> Afficher un message</label></p>
              <p><label><input name="wp_underconstruction[mode]" type="radio" id="wp_underconstruction_mode" value="2" <?php if ($underconstruction['mode'] == 2): ?>checked="checked"<?php endif; ?>> Rediriger vers une page web</label></p>
              <p><label><input name="wp_underconstruction[mode]" type="radio" id="wp_underconstruction_mode" value="3" <?php if ($underconstruction['mode'] == 3): ?>checked="checked"<?php endif; ?>> Afficher une page HTML</label></p>
            </td>
          </tr>
        </tbody>
      </table>

      <table class="form-table display-methods-fields">
        <tbody>
          <tr class="field-1">
            <th scope="row"><label for="wp_underconstruction_message">Message</label></th>
            <td><textarea name="wp_underconstruction[message]" id="wp_underconstruction_message" class="regular-text" style="width: 100%; height: 150px;"><?php echo $underconstruction['message']; ?></textarea></td>
          </tr>
          <tr class="field-2">
            <th scope="row"><label for="wp_underconstruction_url">URL de la page</label></th>
            <td><input name="wp_underconstruction[url]" type="text" id="wp_underconstruction_url" value="<?php echo $underconstruction['url']; ?>" class="regular-text" style="width: 100%;"></td>
          </tr>
          <tr class="field-3">
            <th scope="row"><label for="wp_underconstruction_message">HTML</label></th>
            <td><textarea name="wp_underconstruction[html]" id="wp_underconstruction_html" class="regular-text" style="width: 100%; height: 400px;"><?php echo $underconstruction['html']; ?></textarea></td>
          </tr>
        </tbody>
      </table>

      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="wp_underconstruction">Qui aura accès au site ?</label></th>
            <td>
              <p><label><input name="wp_underconstruction[access]" type="radio" id="wp_underconstruction_access" value="1" <?php if ($underconstruction['access'] == 1): ?>checked="checked"<?php endif; ?>> Administrateurs uniquement</label></p>
              <p><label><input name="wp_underconstruction[access]" type="radio" id="wp_underconstruction_access" value="2" <?php if ($underconstruction['access'] == 2): ?>checked="checked"<?php endif; ?>> Tous les membres connectés</label></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <p class="submit">
      <input type="hidden" name="action" value="wp_underconstruction_update">
      <input type="submit" name="submit" id="submit" class="button button-primary" value="Enregistrer les modifications">
    </p>
  </form>
</div>