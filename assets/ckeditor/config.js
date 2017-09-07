/*
Copyright (c) 2003-2011, CKSource – Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.editorConfig = function( config )
{
config.filebrowserBrowseUrl = 'assets/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = 'assets/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = 'assets/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = 'assets/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = 'assets/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = 'assets/kcfinder/upload.php?type=flash';
// Define changes to default configuration here. For example:
// config.language = 'fr';
// config.uiColor = '#AADC6E';
config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		//{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		//{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		//{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		//{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		//{ name: 'colors' },
		//{ name: 'about' }
	];

	config.removeButtons = 'Underline,Subscript,Superscript';
  config.fullPage = true;

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};


CKEDITOR.replace( 'content', {
    fullPage: false,
    format_tags : 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
    extraPlugins: 'font,panelbutton,colorbutton,colordialog,justify,indentblock,aparat,buyLink',
    // You may want to disable content filtering because if you use full page mode, you probably
    // want to  freely enter any HTML content in source mode without any limitations.
    allowedContent: true,
    autoGrow_onStartup: true,
    enterMode: CKEDITOR.ENTER_BR
} );
