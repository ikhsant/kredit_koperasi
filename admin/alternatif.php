<?php

/**
 * @Author: Ikhsan
 * @Date:   2018-09-20 21:04:35
 * @Last Modified by:   Ikhsan
 * @Last Modified time: 2018-10-08 21:01:58
 */
$title = 'Alternatif';
include "../include/header.php";
?>

<div class="row">
	<div class="col-md-6">
		<?php
$xcrud->table('alternatif');
$xcrud->table_name('Data Alternatif');
$xcrud->unset_view();
$xcrud->unset_csv();
$xcrud->unset_print();
$xcrud->unset_limitlist();
$xcrud->unset_numbers();
$xcrud->unset_pagination();
$xcrud->unset_search();
$xcrud->unset_sortable();
echo $xcrud->render();
?>
	</div>
	
</div>



<?php 
include "../include/footer.php";
?>