@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(255, 255, 255);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-size: 14px;
font-family: 'Ubuntu', Arial, sans-serif;
color: rgb(45, 45, 45);
background-color: rgb(255, 255, 255);
word-wrap: break-word;
line-height: 1.28;
min-width: 300px;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: #e98019;
text-decoration: none;

}

	a[href]:hover
	{
		color: rgb(45, 45, 45);

	}
	
	a:hover
	{
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			-webkit-box-shadow: 5px 5px 7px #CCCCCC; -moz-box-shadow: 5px 5px 7px #CCCCCC; -khtml-box-shadow: 5px 5px 7px #CCCCCC; box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				-webkit-box-shadow: 2px 2px 7px #CCCCCC; -moz-box-shadow: 2px 2px 7px #CCCCCC; -khtml-box-shadow: 2px 2px 7px #CCCCCC; box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		color: #e98019;
padding: 0 3px;
margin: 0 -3px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			background: url(rgba.php?r=255&g=255&b=255&a=51); background: rgba(255,255,255,.2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33FFFFFF,endColorstr=#33FFFFFF);
;
-webkit-box-shadow: 0 1px 0 rgb(45, 45, 45); -moz-box-shadow: 0 1px 0 rgb(45, 45, 45); -khtml-box-shadow: 0 1px 0 rgb(45, 45, 45); box-shadow: 0 1px 0 rgb(45, 45, 45);

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
zoom: 1;

}

	.titleBar h1 em
	{
		color: rgb(102, 102, 102);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 14px;
color: rgb(127, 127, 127);
margin-top: 2px;
line-height: 20px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(45, 45, 45);
background-position: 0 0 !important;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 0;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(102, 102, 102); }
body .muted, body a.muted, body .muted a { color: rgb(127, 127, 127); }
body .faint, body a.faint, body .faint a { color: rgb(187, 187, 187); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=94&g=94&b=94&a=229); background: rgba(94, 94, 94, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E55E5E5E,endColorstr=#E55E5E5E);
padding: 5px 10px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(94, 94, 94); border-top:  6px solid rgba(94, 94, 94, 0.9); _border-top:  6px solid rgb(94, 94, 94);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(94, 94, 94); border-right-color:  rgba(94, 94, 94, 0.9); _border-right-color:  rgb(94, 94, 94);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 1px solid #e98019;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;
position: relative;
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(233, 128, 25); border-color:  rgba(233, 128, 25, 0.5); _border-color:  rgb(233, 128, 25);
}

	.xenPreviewTooltip .arrow
	{
		border-top:  15px solid rgb(3,42,70); border-top:  15px solid rgba(3,42,70, 0.25); _border-top:  15px solid rgb(3,42,70);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid #FFFFFF;
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: #6d3f03;
	background-color: rgb(255, 243, 232);
	text-align: center;
	padding: 5px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: solid 1px rgb(255, 221, 187);
}

.importantMessage a
{
	font-weight: bold;
	color: #6d3f03;
}



/* ***************************** */

.section
{
	margin: 40px auto;

}

.sectionMain
{
	background-color: #f9fbfc;
padding: 15px;
margin: 40px auto;
border: 1px solid #f0f0f2;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;

}

.heading,
.xenForm .formHeader
{
	font-weight: bold;
font-size: 18px;
color: #FFF;
background-color: rgb(45, 45, 45);
padding: 15px;
margin-bottom: 3px;
-webkit-border-top-left-radius: 1px; -moz-border-radius-topleft: 1px; -khtml-border-top-left-radius: 1px; border-top-left-radius: 1px;
-webkit-border-top-right-radius: 1px; -moz-border-radius-topright: 1px; -khtml-border-top-right-radius: 1px; border-top-right-radius: 1px;

}

	.heading a { color: #FFF; }

.subHeading
{
	font-size: 14px;
color: #f9fbfc;
text-decoration: none;
background-color: rgb(45, 45, 45);
padding: 15px;
margin: 3px auto 0;

}

	.subHeading a { color: #f9fbfc; }

.textHeading,
.xenForm .sectionHeader
{
	font-weight: bold;
color: rgb(45, 45, 45);
padding-bottom: 2px;
margin: 15px auto;
border-bottom: 1px solid #f9fbfc;

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: #f4f5f5;
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: #f4f5f5;
	}

.primaryContent
{
	background-color: #FFFFFF;
padding: 15px;

}

	.primaryContent a
	{
		color: rgb(45, 45, 45);

	}

.secondaryContent
{
	background-color: #FFFFFF;
padding: 15px;

}

	.secondaryContent a
	{
		color: #aaa;

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 14px;
color: rgb(45, 45, 45);
background-color: #f4f5f5;
padding: 15px;
border-bottom: 1px solid #f0f0f2;
line-height: 16px;

}

	.sectionFooter a { color: rgb(45, 45, 45); }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 14px;
background-repeat: repeat-x;
background-position: top;
padding: 0 15px;
border-bottom: 1px solid #f0f0f2;
word-wrap: normal;
min-height: 30px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(45, 45, 45);
text-decoration: none;
background-color: #f9fbfc;
background-repeat: repeat-x;
background-position: top;
padding: 0 15px;
margin-right: -1px;
margin-bottom: -1px;
border: 1px solid #f0f0f2;
-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
display: inline-block;
line-height: 28px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 28px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	text-decoration: none;
background-color: #f4f5f5;
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	background-color: #FFFFFF;
padding-bottom: 1px;
border-bottom: 1px none black;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/intrinsic/uix/sprite.png') no-repeat -32px 0;
margin-top: -2px;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
background-size: 160px 48px;

/*REMOVE BELOW RULES FOR DEFAULT IMAGE*/
background-image: none;
margin-top: 0;
height: auto !important;
width: 12px !important;
text-align: center;
width: 16px;
height: 16px;

}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	background-position: -48px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(45, 45, 45);
text-decoration: none;
background-color: #f4f5f5;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: #FFF;
background-color: rgb(45, 45, 45);
background-repeat: repeat-x;
background-position: top;
-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;
		-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: #FFFFFF;*/
	
	font-size: 14px;
border: 1px solid #f0f0f2;
border-top: 2px solid rgb(45, 45, 45);
overflow: hidden;
-webkit-box-shadow: 0px 3px 0 rgba(0,0,0, 0.2); -moz-box-shadow: 0px 3px 0 rgba(0,0,0, 0.2); -khtml-box-shadow: 0px 3px 0 rgba(0,0,0, 0.2); box-shadow: 0px 3px 0 rgba(0,0,0, 0.2);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	-webkit-box-shadow: 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px transparent; box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 15pt;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgba(244, 245, 245, 0.9);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 250px;
	background-color: #FFFFFF;
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			background: #f9fbfc url('styles/intrinsic/xenforo/gradients/category-23px-light.png') repeat-x top;
			-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid #f9fbfc;
		background: #FFFFFF url('styles/intrinsic/xenforo/gradients/category-23px-light.png') repeat-x top;
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: #f9fbfc;
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: #f4f5f5;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
position: absolute;
right: 8px;
top: 8px;
cursor: pointer;

/* NOW USING ICON TEXT */
text-align: center;
width: 32px;
height: 32px;

	}
	
.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: #6d3f03;
background-color: rgb(255, 243, 232);
padding: 15px;
border: 1px solid #8f6c3f;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(255, 243, 232);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(127, 127, 127);
	}

	.xenOverlay .formOverlay .heading
	{
		font-weight: bold;
font-size: 12pt;
color: #FFFFFF;
background-color: rgb(45, 45, 45);
padding: 15px;
margin: -15px -15px 15px;
border-style: none;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-weight: bold;
font-size: 11px;
color: #8f6c3f;
padding: 5px 15px;
margin-bottom: 15px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: rgb(45, 45, 45);

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 15px;
		padding-right: 15px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		
	}

	.xenOverlay .formOverlay .textCtrl option
	{
		
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background-image: none;
-webkit-box-shadow: 0 0 3px rgb(45, 45, 45); -moz-box-shadow: 0 0 3px rgb(45, 45, 45); -khtml-box-shadow: 0 0 3px rgb(45, 45, 45); box-shadow: 0 0 3px rgb(45, 45, 45);

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background-image: none;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #8f6c3f;

	}

		.xenOverlay .formOverlay a.button
		{
			
		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: #f4f5f5;

	}

		.xenOverlay .formOverlay .tabs a
		{
			background: transparent none;
border-color: #f4f5f5;

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				background-color: black;

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/intrinsic/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid #f4f5f5;

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	padding: 0px;
border: 1px solid rgb(45, 45, 45);
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;

	
	border-color:  rgb(45, 45, 45); border-color:  rgba(45, 45, 45, 0.5); _border-color:  rgb(45, 45, 45);
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: rgb(45, 45, 45);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/intrinsic/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/intrinsic/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/intrinsic/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid #f0f0f2;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		-webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -moz-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -khtml-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
			border: solid 2px #f9fbfc;
			background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-weight: bold;
font-size: 18px;
color: #FFF;
background-color: rgb(45, 45, 45);
padding: 15px;
margin-bottom: 3px;
-webkit-border-top-left-radius: 1px; -moz-border-radius-topleft: 1px; -khtml-border-top-left-radius: 1px; border-top-left-radius: 1px;
-webkit-border-top-right-radius: 1px; -moz-border-radius-topright: 1px; -khtml-border-top-right-radius: 1px; border-top-right-radius: 1px;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid #f9fbfc;
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: #FFFFFF url("styles/intrinsic/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: rgb(255, 233, 211) url("styles/intrinsic/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid rgb(255, 221, 187);
	border-top: 1px solid rgb(255, 233, 211);
	color: #6d3f03;
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid #f9fbfc;
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: #f9fbfc;
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid #f9fbfc;
		background-color: #FFFFFF;
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/intrinsic/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;
padding-left: 10px;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 12px;
float: right;
margin-right: 15px;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(127, 127, 127);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 12px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 14px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 18px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: #8f6c3f;
text-decoration: none;
background-color: rgb(255, 243, 232);
border: 1px solid rgb(255, 221, 187);
-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
text-align: center;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

		
		
		width: 32px;
	}
	
	/*
		@property "pageNavPage";

		@property "/pageNavPage";
		*/
	
		.PageNav a[rel=start]
		{
			width: 32px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
	
		.PageNav a
		{
		}
		
		.PageNav a.currentPage
		{
			color: #FFF;
background-color: rgb(45, 45, 45);
border-color: rgb(45, 45, 45);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(83, 83, 83);
background-color: transparent;
padding: 1px;
border: 1px none #f4f5f5;
cursor: pointer;

			
			width: 32px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: rgb(45, 45, 45);
text-decoration: none;
background-color: rgb(255, 233, 211);
border-color: rgb(255, 200, 145);

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 182px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(127, 127, 127);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 11pt;
font-family: Georgia, "Times New Roman", Times, serif;
line-height: 1.4;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid #f9fbfc;
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 12px;
padding: 2px;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: #aaa;
padding: 5px 10px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			text-decoration: none;
background-color: #f9fbfc;

		}
		
		.blockLinksList a:active,
		.blockLinksList a.selected,
		.blockLinksList label:active,
		.blockLinksList label.selected
		{
			color: rgb(45, 45, 45);
background-color: #f4f5f5;

		}
		
		.blockLinksList a.selected,
		.blockLinksList label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(45, 45, 45);
padding: 0 2px;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/intrinsic/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: white;
	padding: 25px;
	-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: rgb(180,0,0);
		color: white;
		margin-bottom: 10px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid rgb(100,0,0);
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(127, 127, 127);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	-webkit-box-shadow: 2px 2px 10px #999; -moz-box-shadow: 2px 2px 10px #999; -khtml-box-shadow: 2px 2px 10px #999; box-shadow: 2px 2px 10px #999;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: #FFFFFF;
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
}

@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid #f9fbfc;
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid #f9fbfc;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 14px;
color: #404040;
background-color: #FFFFFF;
padding: 5px 3px;
margin-bottom: 2px;
border:  1px solid rgb(0,0,0); border:  1px solid rgba(0,0,0, .2); _border:  1px solid rgb(0,0,0);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
outline: 0;

-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,.15); -moz-box-shadow: inset 0 1px 3px rgba(0,0,0,.15); -khtml-box-shadow: inset 0 1px 3px rgba(0,0,0,.15); box-shadow: inset 0 1px 3px rgba(0,0,0,.15);

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		border-color: rgb(45, 45, 45);

	}	

	textarea.textCtrl:focus
	{
		
	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		color: rgb(187, 187, 187);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(187, 187, 187);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(187, 187, 187);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(187, 187, 187);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(187, 187, 187);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top:  1px solid rgb(0,0,0) !important; border-top:  1px solid rgba(0,0,0, .2) !important; _border-top:  1px solid rgb(0,0,0) !important;
	margin-top: 4px !important;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-weight: bold;
font-size: 14px;
color: rgb(83, 83, 83);
background-color: #f0f0f2;
padding: 0px 6px;
border-width: 0;
border-top-color: rgb(255, 255, 255);
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
text-align: center;
outline: none;
line-height: 30px;
display: inline-block;
cursor: pointer;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
-webkit-box-shadow: inset 0 -2px 0 rgba(0,0,0,.1); -moz-box-shadow: inset 0 -2px 0 rgba(0,0,0,.1); -khtml-box-shadow: inset 0 -2px 0 rgba(0,0,0,.1); box-shadow: inset 0 -2px 0 rgba(0,0,0,.1);
-webkit-appearance:none;

transition: background .4s ease;
height: 30px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}

.button.primary
{
	color: #FFF;
background-color: rgb(45, 45, 45);

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: rgb(226, 226, 226);
background-color: rgb(154, 154, 154);
-webkit-box-shadow: 0 0 0 transparent; -moz-box-shadow: 0 0 0 transparent; -khtml-box-shadow: 0 0 0 transparent; box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: rgb(83, 83, 83);
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: #FFF;
text-decoration: none;
background-color: #e98019;
border-top-color: white;

	}

	.button:focus
	{
		border-color: #f0f0f2;

	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: #f4f5f5;
background-color: #404040;
border-bottom-color: white;
-webkit-box-shadow: 0px 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px 0px transparent; box-shadow: 0px 0px 0px 0px transparent;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: ;
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(127, 127, 127);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(102, 102, 102);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/intrinsic/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 12px;
color: rgb(127, 127, 127);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(102, 102, 102);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid #f9fbfc;
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(127, 127, 127);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Ubuntu', Arial, sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: #FFFFFF;
	font-size: 11px;
	border: 1px solid rgb(187, 187, 187);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	-webkit-box-shadow: 0 0 15px #666; -moz-box-shadow: 0 0 15px #666; -khtml-box-shadow: 0 0 15px #666; box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(187, 187, 187);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(187, 187, 187);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(187, 187, 187);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: #FFFFFF;
		}

a.caloff {
	color: rgb(127, 127, 127);		
}

a.caloff:hover {
	background-color: #FFFFFF;		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(187, 187, 187);
	color: #FFFFFF;
}
ul.autoCompleteList
{
	background-color: #FFFFFF;
	
	border: 1px solid #f0f0f2;
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: #f9fbfc;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(45, 45, 45);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	-webkit-column-gap : 0; -moz-column-gap : 0;column-gap: 0;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 30px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 30px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	background-color: rgb(25, 25, 25);

}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 84px;
		*line-height: 88px;
		height: 88px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: #f4f5f5;
		padding: 5px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		margin: 10px 0;
		border: 1px solid rgb(45, 45, 45);
		color: rgb(45, 45, 45);
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(187, 187, 187);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 0 0 0 transparent, 1px 1px 10px white;
			color: rgb(45, 45, 45);
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: rgb(45, 45, 45);
			}

.footer .pageContent
{
	font-size: 14px;
background-color: #0c0d0e;
padding-right: 15px;
padding-left: 15px;
margin-bottom: 40px;
border: 1px solid #f0f0f2;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;
zoom: 1;
line-height: 76px;
min-height: 20px;
height: 76px;

}
	
	.footer a,
	.footer a:visited
	{
		display: block;

	}
	
		.footer a:hover,
		.footer a:active
		{
			color: #e98019;

		}

	.footer .choosers
	{
		padding-left: 5px;
float: left;
overflow: hidden;
zoom: 1;
text-align: left;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		padding-right: 5px;
float: right;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
				padding: 0;
				margin: 5px;
			}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: center;
	background-color:#0c0d0e;
	color:#fff;
}
	
	#copyright
	{
		color:#fff;
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}


.breadBoxTop,
.breadBoxBottom
{
	background-color: #f0f0f2;
padding: 0;
margin-bottom: 40px;
overflow: hidden;
zoom: 1;
clear: both;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 15px;
float: right;
line-height: 24px;

}

.breadcrumb
{
	font-size: 14px;
overflow: hidden;
zoom: 1;
max-width: 100%;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 40px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	color: #e98019;
text-decoration: none;
padding: 0 10px;
margin-bottom: -1px;
border-bottom: 1px solid #f0f0f2;
outline: 0 none;
-moz-outline-style: 0 none;
display: block;
_border-bottom: none;
line-height: 42px;

text-transform: uppercase;

}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 10px;
border-top-left-radius: ;
border-bottom-left-radius: ;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		color: rgb(45, 45, 45);

	}

.breadcrumb .crust .arrow
{
	color: rgb(187, 187, 187);
border-color: transparent;
-moz-border-right-colors: #f0f0f2;
display: block;
position: absolute;
right: -10px;
top: 0px;
z-index: 50;

line-height: 42px;

}

.breadcrumb .crust .arrow span
{
	border-color: transparent;
-moz-border-right-colors: ;
display: block;
position: absolute;
left: -9px;
top: -20px;
z-index: 51;
white-space: nowrap;
overflow: hidden;

}

.breadcrumb .crust:hover a.crumb
{
	color: rgb(45, 45, 45);

}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: ;
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	font-size: 24px;
color: #e98019;
background-color: transparent;
padding-right: 10px;
padding-left: 10px;
display: inline-block;
float: right;
white-space: nowrap;
overflow: hidden;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


#navigation .pageContent
{
	height: 154px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 1.9em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 18px;
border-color: #f0f0f2;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
background-clip: content-box;

		
		height: 76px;
	}
	
		.navTabs .publicTabs
		{
			float: left;
		}
		
		.navTabs .visitorTabs
		{
			float: right;
		}
	
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
				
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	font-family: quicksandregular, Helvetica, sans-serif;
color: rgb(187, 187, 187);
padding-right: 12px;
padding-left: 12px;
display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;
text-transform: uppercase;

	
	
	
	height: 76px;
	line-height: 76px;
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 15px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
	
	.navTabs .navTab.PopupClosed .navLink
	{
		color: #f4f5f5;
	}
	
		.navTabs .navTab.PopupClosed:hover
		{
			background-color: #aaa;
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #FFFFFF;
			}
		
	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			/* nav_menu_gadget, height: 17px */
			background: transparent url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -128px 30.5px;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		position: relative;
		color: rgb(45, 45, 45);
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

	}
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}
	
		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink
	{
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	.navTabs .navTab.selected.PopupOpen .navLink
	{
		color: #FFF;
background-color: rgb(45, 45, 45);
background-repeat: repeat-x;
background-position: top;
-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;

	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: 78px;
	height: 76px;
	background-position: 0px -76px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		margin-left: 8px;
	}

	.withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 275px;
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			font-weight: bold;
font-size: 12px;
color: #aaa;
padding-right: 15px;
padding-left: 15px;
border-style: none;
display: block;

			
			line-height: 70px;
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				color: rgb(45, 45, 45);
text-decoration: none;
background-color: transparent;
outline: 0;

			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(45, 45, 45);
padding: 0 2px;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: rgb(45, 45, 45);
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: #aaa;
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(204, 241, 252);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid #f9fbfc;
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	background-color: #f9fbfc;
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}


@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: -46px;
		display: none;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: 20px;
		top: -18px;
		
		margin: 0;
		
		background-color: #FFFFFF;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		padding-top: 5px;
		_padding-top: 3px;
		z-index: 7500;
	}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			-webkit-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}


@media (max-width:610px)
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		display: none;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		background-color: rgb(25, 25, 25);
		height: 242px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	margin-right: auto;
margin-left: auto;
_width: 976px;
_margin: 0 auto;
max-width: 1170px;

}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	background-color: #FFFFFF;
padding: 40px;
margin-bottom: 40px;
border: 1px solid #f0f0f2;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -260px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 260px;
	}

.sidebar
{
	float: right;
	font-size: 11px;
width: 250px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 15px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
		}
	
	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;
color: rgb(45, 45, 45);

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 18px;
font-family: quicksandregular, Helvetica, sans-serif;
color: #e98019;
padding: 0 0 5px;
margin-bottom: 15px;
text-transform: uppercase;

}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 18px;
font-family: quicksandregular, Helvetica, sans-serif;
color: #e98019;
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(127, 127, 127);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(127, 127, 127);
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		color: rgb(127, 127, 127);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 13px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(187, 187, 187);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	margin: 10px 30px;
text-align: center;
line-height: 42px;
display: block;
cursor: pointer;
height: 42px;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 18px;
color: #FFF;
background-color: rgb(45, 45, 45);
-webkit-border-radius: 100px; -moz-border-radius: 100px; -khtml-border-radius: 100px; border-radius: 100px;
display: block;
transition: background .4s ease;

	}
	
	#SignupButton:hover .inner
	{
		text-decoration: none;
background-color: #e98019;

	}
	
	#SignupButton:active
	{
		-webkit-box-shadow: 0 0 3px rgba(0,0,0, 0.2); -moz-box-shadow: 0 0 3px rgba(0,0,0, 0.2); -khtml-box-shadow: 0 0 3px rgba(0,0,0, 0.2); box-shadow: 0 0 3px rgba(0,0,0, 0.2);
/*position: relative;
		top: 2px;*/

	}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/** Text used in message bodies **/

.messageText
{
	font-size: 11pt;
font-family: Georgia, "Times New Roman", Times, serif;
line-height: 1.4;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	
	font-size: 14px;
margin: 15px 0;
line-height: 18px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	display: inline-block;
line-height: 42px;
outline: 0 none;
height: 42px;

	
}

	a.callToAction span
	{
		font-weight: bold;
font-size: 14px;
color: #FFF;
background-color: rgb(45, 45, 45);
padding: 0 40px;
-webkit-border-radius: 100px; -moz-border-radius: 100px; -khtml-border-radius: 100px; border-radius: 100px;
display: block;

transition: background .4s ease;

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			background-color: #e98019;

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			background-color: #aaa;

		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
		.avatarHeap li .avatar
		{
			display: block;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/* User name classes */


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background-color: transparent;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: #aaa;
text-decoration: none;
background-color: #FFFFFF;
padding: 0 6px;
border: 1px solid #f4f5f5;

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: #aaa; background-color: #f9fbfc; border-color: #f9fbfc; }
.prefix.prefixSecondary  { color: #8f6c3f; background-color: rgb(255, 233, 211); border-color: rgb(255, 233, 211); }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent url('styles/intrinsic/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: #aaa; background-color: #f9fbfc; border-color: #f4f5f5; }
.userBanner.bannerStaff.wrapped span { background-color: #f4f5f5; }

.userBanner.bannerPrimary { color: #aaa; background-color: #f9fbfc; border-color: #f4f5f5; }
.userBanner.bannerPrimary.wrapped span { background-color: #f4f5f5; }

.userBanner.bannerSecondary { color: #8f6c3f; background-color: rgb(255, 233, 211); border-color: rgb(255, 233, 211); }
.userBanner.bannerSecondary.wrapped span { background-color: rgb(255, 233, 211); }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }


@media (max-width:800px)
{
	.Responsive .pageWidth
	{
		margin-right: 15px;
margin-left: 15px;

	}

	.Responsive #content .pageContent
	{
		padding-left: 20px;
		padding-right: 20px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		padding-right: 0;
padding-left: 0;
margin-right: 0;
margin-left: 0;

	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


@charset "utf-8";
/* CSS Document */

/* Main Site CSS */
#mainwrap{
	background:url(../img/bg_loop.jpg) repeat;
	color:#666;
	position: relative;
	padding-top:50px;
	z-index: 22222;
	border-top-width:5px;
	border-top-style: solid;
}
/* Colours */

a, .portfolio .row .span8 .plove a:hover, .span3 .plove a:hover, .icons-block i:hover,
 .similar-projects ul li h3, footer ul li a:hover, .bgpattern:hover > h2,
 .member h3, .member span, .member:hover > .member-social a, .main-colour, .dropdown-menu li > a:hover,
  .dropdown-menu li > a:focus, .dropdown-submenu:hover > a,  .pagination ul > li > a:hover, .pagination ul > li > a:focus,
  .comment-body .comment-author {
	color:#e98019;
}

.button-medium, .button-small, .button-big, .tagcloud a:hover, footer .copyright .social a, .bgpattern:hover > .icon, .progress-striped .bar, .member:hover > .bline, .blog-date span.date, .accordion-group .active a,
 .splitter li[class*="selected"] > a, .pbg, .pbg:hover, .pimage:hover > .pbg, .splitter li a:hover, .nav-tabs > li > a:hover, .nav-tabs > li.active > a, ul.social-media li a:hover,
 .pagination ul > .active > a, .pagination ul > .active > span, .list_carousel a.prev:hover, .list_carousel a.next:hover, .pricetable .pricetable-col.featured .pt-price, #layerslider .ls-nav-prev, #layerslider .ls-nav-next  {
	background-color:#e98019;
}

.button-medium:hover, .button-small:hover, .button-big:hover, .blog-date span.date:hover,  .pricetable .pricetable-col.featured .pt-top{
	background-color:#e98019;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus,
#mainwrap{
	border-color:#e98019;
}


/*
 *
 *  General
 *
 */


/* Header */

.navbar-inner{
	height:85px;
	background:#191919;

}

.nav-collapse{
	float:right;
}

.spacing{
	height:85px;
	background-color: #191919;
}

/* menu */

.navbar .nav li.active, .navbar .nav li.active:hover{
	background:#e98019;

}
.navbar .nav li:hover{
	background:transparent;
}
.navbar .nav li.active a{
	border-right:1px solid #000;
	border-left:1px solid #000;
	background:#222222;
}
.navbar-inverse .nav > li > a{
	border-right:1px solid #191919;
	border-left:1px solid #191919;
	padding:30px 20px 29px 20px;
	display:block;
	margin-top:6px;
	font-size:13px;
	text-transform: uppercase;
	font-family: 'Open Sans', arial;
	font-weight: bold;
}

.navbar-inner{
  width: 100%;
  height: 85px;
  position: fixed;
  -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;

}

.conres {
  height: 60px;
  -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;
}
.slires {
 margin-top: -27px;
  -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;
}
.logores {
  height: 40px !important;
  margin-top: -5px !important;
  -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;
}
.navres .nav > li > a{
margin-top: 3px !important;
    padding-bottom: 18px !important;
    padding-top: 19px !important;
 -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;

}
.navres .nav > li{
	height: 59px !important;
	-webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;


}
.navbar-inner img{
height: 54px;
 -webkit-transition: linear .3s;
     -moz-transition: linear .3s;
      -ms-transition: linear .3s;
       -o-transition: linear .3s;
          transition: linear .3s;
}

/* Custom Theme Edits */
#headerMover #header {
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  margin-top: -40px;
}

.navTabs .navTab {
  float: left;
  white-space: nowrap;
  word-wrap: normal;
  color: #ccc;
  border-top: 5px solid transparent;
}

.navTabs .navTab.PopupClosed:selected {
  background: url(rgba.php?r=33&g=33&b=33&a=127);
  background: url(rgba.php?r=33&g=33&b=33&a=127); background: rgba(33, 33, 33, 0.5); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7F212121,endColorstr=#7F212121);
  _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#7F212121,endColorstr=#7F212121);
  border-top: 5px solid #e98019;
}

.bt {
background-color: #FF00FF;
border: 1px solid #B200B2 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.bt:before {
content: "\f1b3";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.exaowners {
background-color: #e98019;
border: 1px solid #BA6614 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.exaowners:before {
content: "\f0a3";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}

.aowners {
background-color: #e98019;
border: 1px solid #BA6614 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.aowners:before {
content: "\f0a3";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.aadmin {
background-color: #FFC266;
border: 1px solid #CC9B52 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.aadmin:before {
content: "\f06e";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.astaff {
background-color: #FFCC66;
border: 1px solid #E6B85C !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.astaff:before {
content: "\f06e";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.abt {
background-color: #CC66FF;
border: 1px solid #CC33FF !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.abt:before {
content: "\f1b3";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.popular {
background-color: #CC66FF;
border: 1px solid #CC33FF !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.popular:before {
content: "\f005";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.lolz {
background-color: #FF3399;
border: 1px solid #CC297A !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.lolz:before {
content: "\f11a";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}

.bug {
background-color: #CC3300;
border: 1px solid #A32900 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.bug:before {
content: "\f188";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}

.questions {
background-color: #3399FF;
border: 1px solid #297ACC !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #FFFFFF;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.questions:before {
content: "\f128";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.info {
background-color: #FFFF66;
border: 1px solid #E6E65C !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #5C5C5C;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.info:before {
content: "\f129";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.importantinfo {
background-color: #FF3300;
border: 1px solid #CC2900 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.importantinfo:before {
content: "\f129";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.athionofficial {
background-color: #e98019;
border: 1px solid #BA6614 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.athionofficial:before {
content: "\f0a1";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.poll {
background-color: #E6FFFF;
border: 1px solid #CFE6E6 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #5C5C5C;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.poll:before {
content: "\f080";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.tutorial {
background-color: #66CCFF;
border: 1px solid #52A3CC !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.tutorial:before {
content: "\f046";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.update {
background-color: #66FF33;
border: 1px solid #52CC29 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #5C5C5C;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.update:before {
content: "\f0e7";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.ban {
background-color: #FF3300;
border: 1px solid #CC2900 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.ban:before {
content: "\f0e7";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.unban {
background-color: #333333;
border: 1px solid #000000 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.unban:before {
content: "\f0e7";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.deny {
background-color: #FF3300;
border: 1px solid #CC2900 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.deny:before {
content: "\f00d";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.approved {
background-color: #33CC33;
border: 1px solid #29A329 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.approved:before {
content: "\f00c";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.guide {
background-color: #0066FF;
border: 1px solid #0052CC !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.guide:before {
content: "\f044";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.request {
background-color: #9999FF;
border: 1px solid #7A7ACC !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.request:before {
content: "\f0e5";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.hi {
background-color: #99CC00;
border: 1px solid #7AA300 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.hi:before {
content: "\f007";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.art {
background-color: #E1C99A;
border: 1px solid #CCA352 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.art:before {
content: "\f1fc";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.videos {
background-color: #e52d27;
border: 1px solid #b31217 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.videos:before {
content: "\f16a";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.videos2 {
background-color: #6666ff;
border: 1px solid #3232ff !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.videos2:before {
content: "\f16a";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.design {
background-color: #E1C99A;
border: 1px solid #CCA352 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.design:before {
content: "\f040";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.spam {
background-color: #B2B2B2;
border: 1px solid #8E8E8E !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.spam:before {
content: "\f1f8";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.stream {
background-color: #A319D1;
border: 1px solid #721292 !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #ffffff;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.stream:before {
content: "\f1e8";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}
.temp {
background-color: #FFFF66;
border: 1px solid #E6E65C !important;
-webkit-border-radius: 3px !important; -moz-border-radius: 3px !important; -khtml-border-radius: 3px !important; border-radius: 3px !important;
-webkit-box-shadow: 0 0 1px #F9F9F9 inset; -moz-box-shadow: 0 0 1px #F9F9F9 inset; -khtml-box-shadow: 0 0 1px #F9F9F9 inset; box-shadow: 0 0 1px #F9F9F9 inset;
color: #5C5C5C;
display: inline-block;
font-size: 12px;
font-weight: bold;
line-height: 18px;
padding: 0 4px;
vertical-align: middle;
}

.temp:before {
content: "\f017";
font-family: FontAwesome;
margin-right: 5px;
font-weight: normal;
}

