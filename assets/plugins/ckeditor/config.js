/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
config.enterMode = CKEDITOR.ENTER_BR;
config.filebrowserBrowseUrl = 'assets/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = 'assets/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = 'assets/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = 'assets/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = 'assets/kcfinder/upload.php?type=images';	
config.filebrowserFlashUploadUrl = 'assets/kcfinder/upload.php?type=flash';
config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		//{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		//{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		
	];
	config.removeButtons = 'Underline,Subscript,Superscript';
  	config.fullPage = true;
	config.format_tags = 'p;h1;h2;h3;pre';
	config.removeDialogTabs = 'image:advanced;link:advanced';
	
	/*
	config.toolbar = 'MyToolbar';
    config.removePlugins = 'elementspath';
	config.entities = false;
	config.removeButtons = 'Underline,Subscript,Superscript';
 	config.fullPage = true;
	config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre;address;div';
	config.format_tags = 'p;h1;h2;pre;div';
	config.removeDialogTabs = 'image:advanced;link:advanced'; */
};
 CKEDITOR.replace( 'content' );
