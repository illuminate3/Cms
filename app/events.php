<?php

/**
 * Model hooks
 */
Event::subscribe('Illuminate3\Model\Subscriber\GenerateModelAndRepository');
Event::subscribe('Illuminate3\Model\Subscriber\SyncWithDatabase');

/**
 * Crud hooks
 */
Event::subscribe('Illuminate3\Crud\Subscriber\BuildModelWhenFormIsReady');

/**
 * Admin hooks
 */
Event::subscribe('Illuminate3\Admin\Subscriber\AddControllerAndPathsToResource');
Event::subscribe('Illuminate3\Admin\Subscriber\AddGenerateAdminHookToResource');
Event::subscribe('Illuminate3\Admin\Subscriber\AddGenerateFrontHookToResource');
Event::subscribe('Illuminate3\Admin\Subscriber\AddDashboardNavigationForResource');
Event::subscribe('Illuminate3\Admin\Subscriber\RedirectToResource');
Event::subscribe('Illuminate3\Admin\Subscriber\ShowHelpPageWhenResourceHasNoFormElements');
Event::subscribe('Illuminate3\Admin\Subscriber\AddUniqueRuleToResource');

/**
 * Content hooks
 */
Event::subscribe('Illuminate3\Content\Subscriber\AddContentOnResourcePage');
Event::subscribe('Illuminate3\Content\Subscriber\AddContentOnPage');
Event::subscribe('Illuminate3\Content\Subscriber\HandleRedirectResponse');
Event::subscribe('Illuminate3\Content\Subscriber\ChangeCrudTitle');
Event::subscribe('Illuminate3\Content\Subscriber\ReorderBlocksInSection');

/**
 * Navigation hooks
 */
Event::subscribe('Illuminate3\Navigation\Subscriber\AddResourceLeftRightNavigation');

/**
 * Pages hooks
 */
Event::subscribe('Illuminate3\Pages\Subscriber\SetPermissionsForViewingPage');

/**
 * Form hooks
 */
Event::subscribe('Illuminate3\Form\Subscriber\FillFormWithErrorsFromSession');
Event::subscribe('Illuminate3\Form\Subscriber\SaveFormStateInSession');

/**
 * Overview hooks
 */
Event::subscribe('Illuminate3\Overview\Subscriber\ConvertChoiceElementToString');
Event::subscribe('Illuminate3\Overview\Subscriber\ConvertImageElementToImage');

/**
 * Text hooks
 */
Event::subscribe('Illuminate3\Text\Subscriber\AddTextDirectlyFromSection');

/**
 * User hooks
 */
//Event::subscribe('Illuminate3\User\Subscriber\CheckPermissionsForFormElements');

/**
 * Uploads hooks
 */
Event::subscribe('Illuminate3\Uploads\Subscriber\EnableFormFileUploads');
Event::subscribe('Illuminate3\Uploads\Subscriber\SaveFileToDisk');



Event::listen('user.permissions', function(Illuminate3\User\PermissionRepository $repository) {

	$repository->setPermissions('Users', array(
		'edit.user' => 'Can edit user profile',
	));

	$repository->setPermissions('Resource form', array(
		'view.form.Illuminate3\Admin\Controller\ResourceController.element.title' => 'Can view title element',
	));

});
