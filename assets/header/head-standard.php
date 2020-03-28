<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	* {
		box-sizing : border-box;
	}
	body {
		margin      : 0;
		font-family : monospace;
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
	.row {
		display   : flex;
		flex-wrap : wrap;
	}
	.row .sidebar {
		padding          : 20px;
		flex-basis       : 25%;
		background-color : #eeeeee;
	}
	.row .content {
		padding    : 20px;
		flex-basis : 75%;
	}
	.image_holder {
		display    : inline-block;
		width      : 100%;
		padding    : 20px;
		height     : 300px;
		text-align : center;
	}
	#my_photo {
		width      : 100%;
		max-width  : 329px;
		max-height : 329px;
	}
	#gustavo_photo {
		width      : 100%;
		max-width  : 756px;
		max-height : 400px;
	}
	#electronic_photo {
		object-fit : contain;
		width      : 100%;
		max-width  : 756px;
		max-height : 400px;
	}
	.footer {
		padding          : 20px;
		text-align       : center;
		background-color : darkseagreen;
		margin           : 0;
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