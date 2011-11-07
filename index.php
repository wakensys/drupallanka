<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();


<<<<<<< HEAD
//dudmfsif sdfk
=======
// new codes

if ($_REQUEST['id']) {
	$id=safe($_REQUEST['id']);
	$varmi = getSqlNumber("SELECT id FROM rests WHERE id=".$id."");
	if ($varmi==0) {
		echo "<script>document.location.href='rests.php'</script>";
		exit;
	}
	$rs=getSqlRow("SELECT * FROM rests WHERE id=".$id."");
	$rsd=getSqlRow("select * from delivery_areas where id=".$rs['da_id']."");
}
if (!$id) {
	$rs['servicetime']="30";
}
?>
>>>>>>> fb75243946f1c6412631267d1da97ed1a28ea7a6
