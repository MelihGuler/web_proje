<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	* {
		box-sizing : border-box;
	}
	body {
		margin      : 0;
		font-family : monospace !important;
	}
	#show_menu {
		display : none;
	}
	.navbar {
		display          : flex;
		background-color : darkslategrey;
		margin           : 0;
		padding          : 0;
	}
	.layout {
		display        : flex;
		flex-direction : column;
	}
	.navbar a {
		color           : #ffffff;
		text-decoration : none;
		text-align      : center;
		padding         : 15px 15px;
	}
	.navbar a:hover {
		color            : #000000;
		background-color : #dddddd;
	}
	.layout {
		background-color : #1abc9c;
		align-items      : center;
		justify-content  : center;
	}
	.layout_item {
		color : #ffffff;
	}
	#layout_title {
		font-size : 4em;
	}
	#layout_description {
		font-size : 1.2em;
	}
	.footer {
		padding          : 20px;
		text-align       : center;
		background-color : darkseagreen;
		margin           : 0;
	}
	#mg_flex_main_article {
		display   : flex;
		flex-flow : row wrap;
	}
	#mg_flex_default_photo {
		width  : 50%;
		margin : 40px 25% 20px 25%;
	}
	#mg_flex_default_article {
		width  : 60%;
		margin : 20px 20% 0 20%;
	}
	@media screen and (max-width : 850px) {
		#mg_flex_default_photo {
			width  : 80%;
			margin : 20px 10% 20px 10%;
		}
	}
	@media screen and (max-width : 1024px) {
		#show_menu {
			display : block;
		}

		.navbar a:not(#show_menu) {
			display : none;
		}

		.row, .navbar {
			flex-direction : column;
		}

		#layout_title {
			font-size : 2.5em;
		}

		#layout_description {
			font-size : 1em;
		}
	}
	@media screen and (min-width : 1025px) {
		#show_menu {
			display : none !important;
		}

		.navbar a {
			display : block !important;
		}
	}

</style>
