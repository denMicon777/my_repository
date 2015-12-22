<?php
/*
Plugin Name: VKPB
Plugin URI: http://wordpress/
Description: Постит на стену.
Version: 1.0
Author: Micon
Author URI: http://obivka-nsk/
*/

add_action('admin_menu','vkpb_settings_menu');

const VKPB_PLUGIN_ID = 'vkpb';
const VKPB_PLUGIN_NAME = 'VKPB';
const VKPB_USER_ID_OPTIONS = 'vkpb_user_id';
const VKPB_CLIENT_ID_OPTIONS = 'vkpb_client_id';
const VKPB_ACCESS_TOKEN_OPTIONS = 'vkpb_access_token_id';


function vkpb_settings_menu(){
    add_options_page(
        'Настройки плагина ' .VKPB_PLUGIN_NAME,
        VKPB_PLUGIN_NAME,
        8,
        VKPB_PLUGIN_ID,
        'render_vkpb_settings_page'
    );
}
function render_vkpb_settings_page(){
    include 'settings.php';
}

add_action('publish_post', 'post_pablished_vk', 10, 2);

function post_pablished_vk($ID,$post)
{
  $title = $post->post_title;
  $permalink = get_permalink($ID);

  if(!is_posted($ID))
  {
    vk_wall_publisher($title,$permalink);
	writted_to_posted($ID);
  }
  
}

function vk_wall_publisher($message, $attachments = '')
{
  $posting_url = 'https://api.vk.com/method/wall.post?' . http_build_query([
  'owner_id' => get_option(VKPB_USER_ID_OPTIONS),
  'message' => $message,
  'access_token' => get_option(VKPB_ACCESS_TOKEN_OPTIONS),
  'attachments' => $attachments,
  ]);
  
  return file_get_contents($posting_url);
}

function writted_to_posted($ID)
{
  return file_put_contents(__Dir__ . '/posted.csv',"$ID\r\n", FILE_APPEND);
}

function is_posted($ID)
{
  return in_array($ID, file(__Dir__ . '/posted.csv'));
}