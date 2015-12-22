<h1>Настройки плагина <?=VKPB_PLUGIN_NAME;?></h1>

<?php if(isset($_POST[VKPB_USER_ID_OPTIONS]) && isset($_POST[VKPB_CLIENT_ID_OPTIONS]) && isset($_POST[VKPB_ACCESS_TOKEN_OPTIONS])){
  update_option(VKPB_USER_ID_OPTIONS, $_POST[VKPB_USER_ID_OPTIONS]);
  update_option(VKPB_CLIENT_ID_OPTIONS, $_POST[VKPB_CLIENT_ID_OPTIONS]);
  update_option(VKPB_ACCESS_TOKEN_OPTIONS, $_POST[VKPB_ACCESS_TOKEN_OPTIONS]);
  echo '<div class="updated">Настройки сохранены</div>';
}; ?>

<form method="POST" action="">
  <table class="form-table">
    <tr>
	  <th>
	    <label for="vk_user_id">ID пользователя ВКонтакте:</label>
	  </th>
	  <td>
	    <input type="text" id="vk_user_id" required="true" value="<?=get_option(VKPB_USER_ID_OPTIONS)?>" name="<?=VKPB_USER_ID_OPTIONS;?>">
	  </td>
	</tr>
    <tr>
	  <th>
	    <label for="vk_client_id">ID приложения ВКонтакте:</label>
	  </th>
	  <td>
	    <input type="text" id="vk_client_id" required="true" value="<?=get_option(VKPB_CLIENT_ID_OPTIONS)?>" name="<?=VKPB_CLIENT_ID_OPTIONS;?>">
	  </td>
	</tr>
    <tr>
	  <th>
	    <label for="vk_access_token">Ключ приложения:</label>
	  </th>
	  <td>
	    <input type="text" id="vk_access_token" required="true" value="<?=get_option(VKPB_ACCESS_TOKEN_OPTIONS)?>" name="<?=VKPB_ACCESS_TOKEN_OPTIONS;?>">
	  </td>
	</tr>
  </table>
  <p><input type="submit" value="Сохранить настройки" class="button-primary"></p>
</form>

<?php
$get_access_token_url = 'https://oauth.vk.com/authorize?' . http_build_query([
  'client_id' => get_option(VKPB_CLIENT_ID_OPTIONS),
  'scope' => implode(',',['wall','offline']),
  'redirect_uri' => 'https://oauth.vk.com/blank.html',
  'response_type' => 'token',
]);

$test_posting_url = 'https://api.vk.com/method/wall.post?' . http_build_query([
  'owner_id' => get_option(VKPB_USER_ID_OPTIONS),
  'message' => 'Привет!',
  'access_token' => get_option(VKPB_ACCESS_TOKEN_OPTIONS),
]);
?>
<p>
  <a target="_blank" href="<?=$get_access_token_url ?>">Получить ключ доступа (access token)</a>
</p>

<p>
  <a target="_blank" href="<?=$test_posting_url ?>">Запостить пробную запись</a>
</p>

