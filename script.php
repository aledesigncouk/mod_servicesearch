<?php

defined('_JEXEC') or die;

class mod_NhsSearchInstallerScript {
	
	function install($parent) {
		echo '<p>The module has been installed.</p>';
	}

	function uninstall($parent) {
		echo '<p>The module has been uninstalled.</p>';
	}

	function update($parent) {
		echo '<p>The module has been updated to version' . $parent->get('manifest')->version . '.</p>';
	}

	function preflight($type, $parent) {
		echo '<p>Anything here happens before the installation/update/uninstallation of the module.</p>';
	}

	function postflight($type, $parent) {
		echo '<p>Anything here happens after the installation/update/uninstallation of the module.</p>';
	}
}