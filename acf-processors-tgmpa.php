<?php

function afprocs_tgmpa_register_required_plugins()
{	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = 
		array
		(	array
			(	'name'      => 'Advanced Forms',
				'slug'      => 'advanced-forms',
				'required'  => true,
			)

		);
	
	
	$config = 
		array
		(	'id'           => 'advanced-forms-processors',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'plugins.php',            // Parent menu slug.
			'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => __( 'Install Required Plugins', 'afprocs' ),
				'menu_title'                      => __( 'Install Plugins', 'afprocs' ),
				/* translators: %s: plugin name. */
				'installing'                      => __( 'Installing Plugin: %s', 'afprocs' ),
				/* translators: %s: plugin name. */
				'updating'                        => __( 'Updating Plugin: %s', 'afprocs' ),
				'oops'                            => __( 'Something went wrong with the plugin API.', 'afprocs' ),
				'notice_can_install_required'     => _n_noop(
					/* translators: 1: plugin name(s). */
					'This plugin requires the following plugin: %1$s.',
					'This plugin requires the following plugins: %1$s.',
					'afprocs'
				),
				'notice_can_install_recommended'  => _n_noop(
					/* translators: 1: plugin name(s). */
					'This plugin recommends the following plugin: %1$s.',
					'This plugin recommends the following plugins: %1$s.',
					'afprocs'
				),
				'notice_ask_to_update'            => _n_noop(
					/* translators: 1: plugin name(s). */
					'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
					'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
					'afprocs'
				),
				'notice_ask_to_update_maybe'      => _n_noop(
					/* translators: 1: plugin name(s). */
					'There is an update available for: %1$s.',
					'There are updates available for the following plugins: %1$s.',
					'afprocs'
				),
				'notice_can_activate_required'    => _n_noop(
					/* translators: 1: plugin name(s). */
					'The following required plugin is currently inactive: %1$s.',
					'The following required plugins are currently inactive: %1$s.',
					'afprocs'
				),
				'notice_can_activate_recommended' => _n_noop(
					/* translators: 1: plugin name(s). */
					'The following recommended plugin is currently inactive: %1$s.',
					'The following recommended plugins are currently inactive: %1$s.',
					'afprocs'
				),
				'install_link'                    => _n_noop(
					'Begin installing plugin',
					'Begin installing plugins',
					'afprocs'
				),
				'update_link' 					  => _n_noop(
					'Begin updating plugin',
					'Begin updating plugins',
					'afprocs'
				),
				'activate_link'                   => _n_noop(
					'Begin activating plugin',
					'Begin activating plugins',
					'afprocs'
				),
				'return'                          => __( 'Return to Required Plugins Installer', 'afprocs' ),
				'plugin_activated'                => __( 'Plugin activated successfully.', 'afprocs' ),
				'activated_successfully'          => __( 'The following plugin was activated successfully:', 'afprocs' ),
				/* translators: 1: plugin name. */
				'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'afprocs' ),
				/* translators: 1: plugin name. */
				'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'afprocs' ),
				/* translators: 1: dashboard link. */
				'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'afprocs' ),
				'dismiss'                         => __( 'Dismiss this notice', 'afprocs' ),
				'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'afprocs' ),
				'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'afprocs' ),
	
				'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
			)
		);

	
	tgmpa($plugins, $config);
	
}

?>
