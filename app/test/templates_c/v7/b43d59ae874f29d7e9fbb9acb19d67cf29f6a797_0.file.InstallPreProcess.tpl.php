<?php
/* Smarty version 4.3.2, created on 2024-11-02 09:45:10
  from 'C:\xampp\htdocs\vtigercrm80\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6725f4a61979a9_24305375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b43d59ae874f29d7e9fbb9acb19d67cf29f6a797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm80\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6725f4a61979a9_24305375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
