<?php
	$v = isset($_GET['v'])?$_GET['v']:'home';

	$view['home'] = '../views/home.php';
	$view_title['home'] = _('eClasses');

	$view['classes'] = '../views/classes.php';
	$view_title['classes'] = _('Classes');

	$view['class'] = '../views/class.php';
	$view_title['class'] = _('Class');

	$view['edit_class'] = '../views/edit_class.php';
	$view_title['edit_class'] = _('Edit Class');

	$view['new_class'] = '../views/new_class.php';
	$view_title['new_class'] = _('New Class');

	$view['profile'] = '../views/profile.php';
	$view_title['profile'] = _('Profile');

	$view['class_association_types'] = '../views/class_association_types.php';
	$view_title['class_association_types'] = _('Class Associations Types');

	$view['edit_class_association_types'] = '../views/edit_class_association_types.php';
	$view_title['edit_class_association_types'] = _('Edit Class Association Types');

	$view['announcements'] = '../views/announcements.php';
	$view_title['announcements'] = _('Announcements');

	$view['edit_announcement'] = '../views/edit_announcement.php';
	$view_title['edit_announcement'] = _('Edit Announcement');

	$view['class_files'] = '../views/class_files.php';
	$view_title['class_files'] = _('Class Files');

	$view['files'] = '../views/files.php';
	$view_title['files'] = _('Folder contents');

	$view['edit_profile'] = '../views/edit_profile.php';
	$view_title['edit_profile'] = _('Edit Profile');

	$view['register'] = '../views/register.php';
	$view_title['register'] = _('Register Application');

	/* if v is one of the above (so $view[$v] evaluates to true)
	we will include $view[$v] else we include by default home view*/	
	$VIEW = isset($view[$v])?$view[$v]:$view['home'];
	$TITLE = isset($view_title[$v])?$view_title[$v]:$view_title['home'];
?>
