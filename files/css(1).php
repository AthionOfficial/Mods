@charset "UTF-8";

/* --- EWRporta2_Global.css --- */

.leftContainer { float: right; margin-left: -260px; width: 100%; }
.leftContent { margin-left: 260px; }
.leftSidebar { float: left; }

.splitWidgets .section:first-child,
.splitWidgets .sectionMain:first-child { margin-top: 0; }

.sidebar.noFloats { float: none; width: auto; margin-bottom: 10px; }
.sidebar.b-rightWidgets { margin-left: 260px; }
.sidebar.b-leftWidgets { float: left; }
.sidebar.footerWidgets { clear: both; }
/* clearfix */ .splitWidgets { zoom: 1; } .splitWidgets:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.copyright { text-align: center; font-size: 11px; margin: 10px; }


	@media (max-width:800px)
	{
		.Responsive .leftContainer { float: none; margin: 0 auto; }
		.Responsive .leftContent { margin-left: 0; }
	}
	@media (max-width:610px)
	{
		.Responsive .sidebar.b-leftWidgets { float: none; margin: 0 auto; }
		.Responsive .sidebar.b-rightWidgets { margin-left: 0px; }
	}


/* --- moderator_bar.css --- */

#moderatorBar
{
	background-color: rgb(45, 45, 45);
	border-bottom: 1px solid rgb(187, 187, 187);	
	font-size: 11px;
}

/*#moderatorBar
{
	-webkit-box-shadow: 0 0 5px #aaa; -moz-box-shadow: 0 0 5px #aaa; -khtml-box-shadow: 0 0 5px #aaa; box-shadow: 0 0 5px #aaa;
	width: 100%;
	position: fixed;
	top: 0px;
	z-index: 100;
}

body
{
	padding-top: 25px;
}*/

/* clearfix */ #moderatorBar { zoom: 1; } #moderatorBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#moderatorBar .pageContent
{
	padding: 2px 0;
	overflow: auto;
}

#moderatorBar a
{
	display: inline-block;
	padding: 2px 10px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

#moderatorBar a,
#moderatorBar .itemCount
{
	color: #f4f5f5;
}

	#moderatorBar a:hover
	{
		text-decoration: none;
		background-color: rgb(83, 83, 83);
		color: #f9fbfc;
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#moderatorBar .itemLabel,
#moderatorBar .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#moderatorBar .itemCount
{	
	background: rgb(83, 83, 83);
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
	text-shadow: none;
}

	#moderatorBar .itemCount.alert
	{
		background: #e03030;
		color: white;
		-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	}
	
#moderatorBar .adminLink
{
	float: right;
}

#moderatorBar .permissionTest,
#moderatorBar .permissionTest:hover
{
	background: #e03030;
	color: white;
	-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	font-weight: bold;
}

/* --- node_link.css --- */

/* tbd */

/* --- node_list.css --- */

.nodeList { zoom: 1; }
.nodeList .node {
	zoom: 1;
	vertical-align: bottom;
}

.nodeList .node.level_1
{
	margin-bottom: 20px;
}

.nodeList .node.level_1:last-child
{
	margin-bottom: 0;
}

.nodeList .node.groupNoChildren + .node.groupNoChildren
{
	margin-top: -20px;
}

.node .nodeInfo
{
	overflow: hidden; zoom: 1;
	position: relative;
}

	.node .nodeInfo.primaryContent,
	.node .nodeInfo.secondaryContent
	{
		padding: 0;
	}

.node .nodeIcon
{
	margin: 10px;
float: left;
width: 78px;
height: 32px;
	
}

	.node .forumNodeInfo .nodeIcon,
	.node .categoryForumNodeInfo .nodeIcon
	{
		
	}

	.node .forumNodeInfo.unread .nodeIcon,
	.node .categoryForumNodeInfo.unread .nodeIcon
	{
		background-color: rgb(45, 45, 45);

	}

	.node .pageNodeInfo .nodeIcon
	{
		
	}

	.node .linkNodeInfo .nodeIcon
	{
		
	}

.node .nodeText
{
	margin: 10px 270px 10px 56px;
min-height: 32px;

}

	.node .nodeText .nodeTitle
	{	
		font-size: 18px;
font-family: 'Ubuntu', Arial, sans-serif;
color: #e98019;
line-height: 32px;

	}
	
		.node .unread .nodeText .nodeTitle
		{
			font-weight: bold;
color: rgb(45, 45, 45);

		}

	.node .nodeDescription
	{
		font-size: 11px;

	}
	
	.hasJs .node .nodeDescriptionTooltip
	{
		/* will be shown as a tooltip */
		display: none;
	}
	
	.Touch .node .nodeDescriptionTooltip
	{
		/* touch browsers don't see description tooltips */
		display: block;
	}

	.node .nodeStats
	{
		font-size: 14px;
margin-top: 2px;
line-height: 20px;

	}
	
	.node .nodeExtraNote
	{
		text-align: right;
		font-size: 11px;
		color: rgb(127, 127, 127);
	}
	
	.node .subForumList
	{
		overflow: hidden; *zoom: 1;
		margin: -5px 0 10px;
		margin-left: 56px;
	}
	
		.node .subForumList li
		{
			float: left;
			width: 31%;
			margin: 2px 0 2px 2%;
		}
		
			.node .subForumList li .nodeTitle
			{
				font-size: 11px;
				overflow: hidden;
				white-space: nowrap;
				word-wrap: normal;
				text-overflow: ellipsis;
			}
			
			.node .subForumList .unread .nodeTitle
			{
				font-weight: bold;
color: rgb(45, 45, 45);

			}
		
			.node .subForumList li ol,
			.node .subForumList li ul
			{
				display: none;
			}

.node .nodeLastPost
{
	background-color: #FFFFFF;
padding: 15px;

	
	font-size: 14px;
background-color: #FFF;
padding: 15px;
border-top: 1px solid #f0f0f2;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
white-space: nowrap;
word-wrap: normal;
position: relative;

}

.node .nodeLastPost .lastThreadTitle
{
	text-overflow: ellipsis;
	max-width: 100%;
	display: block;
	overflow: hidden;
}

	.node .nodeLastPost .lastThreadMeta
	{
		display: block;
	}

	.node .nodeLastPost .noMessages
	{
		line-height: 28px;
	}

.node .nodeControls
{
	position: absolute;
	top: 0;
	right: 30px;
	margin: 20px 0;
}

	.node .tinyIcon
	{
		font-size: 16px;
background-color: transparent;
background-repeat: no-repeat;
background-position: 0 -448px;
margin: 1px 4px;
display: block;
white-space: nowrap;
overflow: hidden;
opacity: 0.25;
text-align: center;
width: 16px;

	}

	.node .nodeInfo:hover .tinyIcon[href],
	.Touch .node .tinyIcon
	{
		opacity: 1;

	}

		/*.node .feedIcon
		{
			background: transparent url('styles/intrinsic/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
		}*/

/* description tooltip */

.nodeDescriptionTip
{
	padding: 4px 10px;
margin-top: -22px;
line-height: 1.5;
width: 350px;
height: auto;

}

	.nodeDescriptionTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(94, 94, 94); border-right-color:  rgba(94, 94, 94, 0.9); _border-right-color:  rgb(94, 94, 94);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;

	}
	
	.nodeDescriptionTip.arrowBottom .arrow
	{
		top: auto;
		left: 10px;
		bottom: -6px;
		border: 6px solid transparent;
		border-top-color:  rgb(94, 94, 94); border-top-color:  rgba(94, 94, 94, 0.9); _border-top-color:  rgb(94, 94, 94);
		border-bottom: 1px none black;
	}
	
/* main area - used for L2 categories and most other nodes */

.nodeList .categoryForumNodeInfo,
.nodeList .forumNodeInfo,
.nodeList .pageNodeInfo,
.nodeList .linkNodeInfo
{
	background-color: #FFFFFF;
padding: 15px;

	
	padding: 0;
}

/* category strip - used for L1 categories and group headers */

.nodeList .categoryStrip
{
	font-size: 14px;
color: #f9fbfc;
text-decoration: none;
background-color: rgb(45, 45, 45);
padding: 15px;
margin: 3px auto 0;

	
	color: #e98019;
background-color: transparent;
padding-right: 0;
padding-left: 0;
margin: 0;
border-width: 0;
border-bottom: 1px solid #f0f0f2;
-webkit-border-radius: 1px; -moz-border-radius: 1px; -khtml-border-radius: 1px; border-radius: 1px;
min-height: 6px;
position: relative;
height: 60px;

}

	.nodeList .categoryStrip .nodeTitle
	{
		font-size: 24px;
font-family: quicksandregular, Helvetica, sans-serif;
color: rgb(45, 45, 45);
text-transform: uppercase;

	}
	
		.nodeList .categoryStrip .nodeTitle a
		{
			color: rgb(45, 45, 45);
		}

	.nodeList .categoryStrip .nodeDescription
	{
		font-size: 12px;
color: #e98019;

	}
	
		.nodeList .categoryStrip .nodeDescription a
		{
			color: #e98019;
		}

.nodeList .node.groupNoChildren + .node.groupNoChildren .categoryStrip
{
	display: none;
}

/* node stats area */

.nodeStats
{
	overflow: hidden; zoom: 1;
}

.nodeStats dl,
.subForumsPopup
{
	float: left;
	display: block;
	margin-right: 3px;
}

.subForumsPopup.Popup .PopupControl.PopupOpen
{
	background-image: none;
}

.subForumsPopup a.PopupControl
{
	padding-left: 5px;
	padding-right: 5px;
}

.subForumsPopup .dt
{
	color: rgb(127, 127, 127);
}

.subForumsPopup .PopupOpen .dt
{
	color: rgb(45, 45, 45);
}

.subForumsMenu .node .node /* for depths 2+ */
{
	padding-left: 10px;
}

	.subForumsMenu .node .nodeTitle
	{
		font-size: 11px;
	}
	
	.subForumsMenu .node .unread .nodeTitle
	{
		font-weight: bold;
color: rgb(45, 45, 45);

	}
	
/** new discussion button below nodelist **/

.nodeListNewDiscussionButton
{
	margin-top: 10px;
	text-align: right;
}


@media (max-width:610px)
{
	.Responsive .node .nodeText
	{
		margin-right: 0;
	}
	
	.Responsive.Touch .node .nodeDescriptionTooltip,
	.Responsive .node .nodeDescription
	{
		display: none;
	}

	
		.Responsive .node .nodeLastPost .noMessages 
		{
			display: none;
		}
		
		.Responsive .node .nodeLastPost .lastThreadTitle,
		.Responsive .node .nodeLastPost .lastThreadUser
		{
			display: none;
		}
				
		.Responsive .node .nodeLastPost .lastThreadDate:before
		{
			content: attr(data-latest);
		}

	.Responsive .node .nodeControls
	{
		display: none;
	}
		
	.Responsive .node .subForumList
	{
		display: none;
	}
	
	.Responsive .nodeDescriptionTip
	{
		width: auto;
		max-width: 350px;
	}
}

@media (max-width:480px)
{
	.Responsive .subForumsPopup
	{
		display: none;
	}
}


/* --- sidebar_share_page.css --- */

.sidebar .sharePage .shareControl
{
	margin-top: 10px;
	min-height: 23px;
}

.sidebar .sharePage iframe
{
	width: 200px;
	height: 20px;
}

.sidebar .sharePage iframe.fb_ltr
{
	_width: 200px !important;
}

.sidebar .sharePage .facebookLike iframe
{
	z-index: 52;
}

.mast .sharePage .secondaryContent
{
	overflow: visible !important;
}




@media (max-width:480px)
{
	.Responsive .sidebar .sharePage
	{
		display: none;
	}
}


/* --- wf_default.css --- */



.section.sectionMain.widget-container.widget-tabs {
	border: 0;
	margin: 0;
	padding: 0;
}
	.section.sectionMain.widget-container.widget-tabs .widget-panes {
		padding: 15px;;
		border-right: 1px solid #f4f5f5;
		border-bottom: 1px solid #f4f5f5;
		border-left: 1px solid #f4f5f5;

		
		-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
		-webkit-border-bottom-right-radius: 10px; -moz-border-radius-bottomright: 10px; -khtml-border-bottom-right-radius: 10px; border-bottom-right-radius: 10px;
	}

.widget-tabs .tabs {
	background: none;
}

.widget-tabs .tabs li a {
	font-weight: bold;
}

.widget-tabs .primaryContent {
	padding: 0;
	background: none;
	border: 0;
}

.widget-poll .pollBlock .pollContent {
	padding-left: 0;
	width: auto;
}

.widget-poll .pollBlock .pollOptions,
.widget-poll .pollBlock .pollResults {
	border: 0;
}

.widget-poll .pollBlock .pollResult h3.optionText {
	border: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}

.widget-poll .pollBlock .pollResult .count {
	padding: 0;
}

.avatarList .WidgetFramework_nextToAvatar {
	margin-left: 41px;
}
	.avatarList .WidgetFramework_nextToAvatar .username {
		margin-top: 0;
	}

.widget .statusPoster textarea {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

.WidgetFramework_WidgetRenderer_ShareThisPage .sharePage .shareControl {
    float: none;
}

.WidgetFramework_WidgetRenderer_FeedReader_Entries {
}
	.WidgetFramework_WidgetRenderer_FeedReader_Entries .limitedHeight {
		max-height: 54px; 
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry {
		text-align: justify;
		display: block;
		overflow: hidden;
		margin-bottom: 3px;
	}

	.WidgetFramework_WidgetRenderer_FeedReader_Entries img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail {
		width: auto;
		float: right;
		margin-left: 3px;
	}
		.WidgetFramework_WidgetRenderer_FeedReader_Entries .WidgetFramework_WidgetRenderer_FeedReader_Entry:nth-child(2n) img.WidgetFramework_WidgetRenderer_FeedReader_Thumbnail { float: left; margin-right: 3px; }

.WidgetFramework_WidgetRenderer_XFRM_Resources .Hint {
	float: right;
}

.WidgetFramework_WidgetRenderer_Threads .unread > a { font-weight: bold; }
.sidebar .WidgetFramework_WidgetRenderer_Threads .avatarList .username { display: inline; font-size: inherit; margin: 0; }

.WidgetFramework_WidgetRenderer_Threads_FullThreadList {
}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .subHeading {
		font-size: 1.3em;
	}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .info {
		padding: 5px 10px;

		
			border-top: 1px dashed #f9fbfc;
		
	}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .counters {
			float: right;
		}
	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message {
		margin-bottom: 10px;
	}
	/* clearfix */ .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message { zoom: 1; } .WidgetFramework_WidgetRenderer_Threads_FullThreadList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageInfo {
			padding: 5px 10px;
		}
		.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator
		{
			font-weight: bold;
font-size: 14px;
color: #f9fbfc;
background-color: rgb(45, 45, 45);
background-repeat: repeat-x;
background-position: top;
padding: 3px 6px;
margin: 10px -21px !important 5px 5px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
display: block;
float: right;
position: relative;


			margin-right: -45px;
		}
			.WidgetFramework_WidgetRenderer_Threads_FullThreadList .message .newIndicator span
			{
				border: 4px solid rgb(83, 83, 83);
border-top-width: 0;
border-right: 8px solid transparent;
border-left-width: 0;
position: absolute;
right: 0;
top: -4px;

			}

	.WidgetFramework_WidgetRenderer_Threads_FullThreadList .messageText .readMoreLink {
		display: block;
		text-align: right;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem
{
	overflow: hidden; zoom: 1;

	margin: 5px 0;
	padding-top: 5px;
	border-top: 1px solid #f9fbfc;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem:first-child
{
	border-top: none;
	padding-top: 0;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar
{
	float: left;
	font-size: 0;
}

	.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .avatar img
	{
		width: 24px;
		height: 24px;
	}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageInfo
{
	margin-left: 34px;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent article,
.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageContent blockquote
{
	display: inline;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .poster
{
	font-weight: bold;
}

.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostItem .messageMeta
{
	overflow: hidden; zoom: 1;
	font-size: 11px;
	line-height: 14px;
	padding-top: 4px;
}

.widget .avatarHeap {
	
	margin-right: -10px;
}



/* list of users with 32px avatars, username and user title */
.non-sidebar-widget .avatarList li {
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.non-sidebar-widget .avatarList .avatar {
		margin-right: 5px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.non-sidebar-widget .avatarList .avatar img {
		width: 32px;
		height: 32px;
	}
	
	.non-sidebar-widget .avatarList .username {
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.non-sidebar-widget .avatarList .userTitle {
		color: rgb(127, 127, 127);

	}


/* list of users */

.non-sidebar-widget .userList {
}

	.non-sidebar-widget .userList .username {
		font-size: 13px;

	}

	.non-sidebar-widget .userList .username.invisible {
		color: rgb(187, 187, 187);

	}
	
	.non-sidebar-widget .userList .username.followed {
		
	}

	.non-sidebar-widget .userList .moreLink {
		display: block;
	}


.Tinhte_XenTag_WidgetRenderer_Cloud h3 { display: none }


