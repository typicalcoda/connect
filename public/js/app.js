
// Functions
function addNewStyle(newStyle) {
	var styleElement = document.getElementById('styles_js');
	if (!styleElement) {
		styleElement = document.createElement('style');
		styleElement.type = 'text/css';
		styleElement.id = 'styles_js';
		document.getElementsByTagName('head')[0].appendChild(styleElement);
	}
	styleElement.appendChild(document.createTextNode(newStyle));
}
function expandMenu(){

	$(".content").css({paddingLeft: '231px'});
	$("nav").width(231);
	$(".toggle-menu i").removeClass("fa-chevron-right").addClass("fa-chevron-left");
	$("nav ul li a").removeAttr('style');
	$(".toggle-menu").removeAttr('style');
	$("nav ul li a i.fa").removeAttr('style');

	setTimeout(function(){
		$("nav .menu-item").fadeIn();
	}, 300);
}
function minifyMenu(){
	$("nav").width(52);

	$(".content").css({
		paddingLeft: '52px'
	});
	$(".toggle-menu i").removeClass("fa-chevron-left").addClass("fa-chevron-right");
	$("nav ul li a").css({
		padding: '10px 0',
		textAlign: 'center',
		height: '52px',
	});
	$("nav ul li a i.fa").css({
		paddingRight: '0',
		fontSize: '19px',
		lineHeight: '1.7em'
	});
	$("nav .menu-item").hide();
	$(".toggle-menu").css({
		top: '69px'
	});
}
function showSmallMenu(){
	addNewStyle("nav {width:100% !important; z-index:9000; display:block;}");
	addNewStyle("nav .top-section { background:#212c31; }");
	addNewStyle("nav .top-section .logo {padding-bottom:13px; padding-top:66px;}");
	addNewStyle("nav .top-section .logo img { width: 53px; max-width: 100%;}");
	addNewStyle("nav ul li span { padding-left: 10px; display:inline !important;}");
	addNewStyle("nav ul li a { text-align:left; 10px; position:relative; left:5px;}");
}
function hideSmallMenu(){

	$("#styles_js").remove();
}
function showModal(siteID){
	$(".modal").fadeTo(400, 1);
	modalOpen = true;
	
	
}

$(document).ready(function(){

	var showingBurgerMenu = false;

	$(".toggle-menu").click(function(){

		$("nav").width() == 231 ?  minifyMenu() :  expandMenu();
	});
	$(".burger").click(function(){
		!showingBurgerMenu ? showSmallMenu() : hideSmallMenu();
		showingBurgerMenu = !showingBurgerMenu;
	});

	$("table").on('click', '[data-group=btn-view-site]', function(btn){
		var siteID = this.id;
		showModal(siteID);
	});
	$(".fa-close ").click(function(){
		$(".modal").fadeOut();
	});
});