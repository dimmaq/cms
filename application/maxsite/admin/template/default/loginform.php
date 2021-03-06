<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MaxSite CMS
 * (c) http://max-3000.com/
 */
 
?><!DOCTYPE HTML>
<html><head>
<meta charset="UTF-8">
<meta name="generator" content="MaxSite CMS">
<title><?= 'MaxSite CMS &ndash; ' . t('Вход в админ-панель') ?></title>
<link rel="shortcut icon" href="<?= getinfo('template_url') . 'images/favicons/' . mso_get_option('default_favicon', 'templates', 'favicon1.png') ?>" type="image/x-icon">
<link rel="stylesheet" href="<?=  getinfo('admin_url') . 'template/' . mso_get_option('admin_template', 'general', 'default') . '/loginform.css'; ?>">
</head>

<body>
<div class="all"><div class="wrap">

	<div class="logo"><a href="http://max-3000.com/" target="_blank"><img src="<?=  getinfo('admin_url') . 'template/' . mso_get_option('admin_template', 'general', 'default') . '/images/logo.png'; ?>" width="206" height="38" alt="<?= t('Система управления сайтом MaxSite CMS') ?>" title="<?= t('Система управления сайтом MaxSite CMS') ?>"></a></div>
	
	<div class="welcome"><?= t('Вход в админ-панель') ?></div>
	
	<?php 
	if (!is_login())
	{
		$redirect_url = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : getinfo('siteurl') . mso_current_url();
		
		mso_remove_hook('login_form_auth'); # удалим все хуки для авторизации
				
		mso_login_form(array( 
				'login' => '', 
				'password' => '', 
				'submit' => '', 
				'submit_value' => t('Войти'),
				'login_add' => ' placeholder="' . t('логин') . '"',
				'password_add' => ' placeholder="' . t('пароль') . '"',
			),
			$redirect_url);
	}
	
	
	?>
	
	<div class="goto-site"><a href="<?= getinfo('siteurl') ?>"><?= t('Вернуться к сайту') ?></a></div>
	
</div></div>

</body>
</html>