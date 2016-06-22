





/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
//GUIDE FUNCTIONS
/////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
function searchindex(){
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET'});
	$("#searchmenu").show();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#menu1").hide();
    $("#homeimg").hide();
    $("#homeimg2").show();
    $("#searchimg").hide();
	$("#submitimg").hide();
	$("#vieweditimg").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	}
	
function myguides(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").show();
	$("#menu1").hide();
    $("#homeimg").hide();
    $("#homeimg2").show();
    $("#searchimg").hide();
	$("#vieweditimg").hide();
	$("#submitimg").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").show();
	$("#submitguide").hide();
	}

function submitguide(){
    $("#searchmenu").hide();
    $("#submitmenu").show();
    $("#vieweditmenu").hide();
	$("#menu1").hide();
    $("#homeimg").hide();
    $("#homeimg2").show();
    $("#searchimg").hide();
	$("#submitimg").hide();
	$("#vieweditimg").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").show();
	}
	
function home(){
	$("#overlay").show();
	$("#loading3").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#searchmenu").load('tools/searchMenu.php',function(){
	$("#returnsearch").load('tools/returnSearch.php',function(){
	$("#submitmenu").load('tools/submitMenu.php',function(){
	$("#submitguide").load('tools/submitGuide.php',function(){
	$("#vieweditmenu").load('tools/vieweditMenu.php',function(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#menu1").show();
    $("#homeimg").hide();
    $("#homeimg2").hide();
	$("#searchimg").hide();
	$("#submitimg").hide();
	$("#vieweditimg").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading3").hide();
});});});});});}});}
	
function home2(){
	$("#overlay").show();
	$("#loading3").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#menu1").show();
    $("#homeimg").hide();
    $("#homeimg2").hide();
	$("#searchimg").hide();
	$("#submitimg").hide();
	$("#vieweditimg").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading3").hide();
}});}
	
function searchimg(){
	$("#overlay").show();
	$("#loading2").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#searchmenu").load('tools/searchMenu.php',function(){
	$("#returnsearch").load('tools/returnSearch.php',function(){
    $("#searchmenu").show();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#menu1").hide();
    $("#homeimg").hide();
    $("#homeimg2").show();
    $("#searchimg").hide();
	$("#vieweditimg").hide();
	$("#submitimg").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading2").hide();
	});});}});}
	
function submitimg(){
	$("#overlay").show();
	$("#loading2").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#submitmenu").load('tools/submitMenu.php',function(){
	$("#submitguide").load('tools/submitGuide.php',function(){
    $("#searchmenu").hide();
    $("#submitmenu").show();
    $("#vieweditmenu").hide();
	$("#menu1").hide();
    $("#homeimg").hide();
    $("#homeimg2").show();
    $("#searchimg").hide();
	$("#submitimg").hide();
	$("#vieweditimg").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").show();
	$("#overlay").hide();
	$("#loading2").hide();
	});});}});}

function openGuide(ii){
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
	$("#openguide").load("tools/openGuide.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#openguide").focus();
});}});}

function openEdit(){
	$("#openguide").load("tools/openEdit.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#openEdit").hide();
	$("#deleteGuide").hide();
	$("#openguide").focus();
});}


function vieweditGuide(ii){
	$('body').addClass('loading');
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
	$("#openguide").load("tools/vieweditGuide.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#submitguide").hide();
    $("#openEdit").show();
    $("#deleteGuide").show();
	$("#vieweditimg").show();
	$("#openguide").focus();
	$('body').removeClass('loading');
});}});}

function hideGuide(){
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	}

function hideGuide2(){
	$("#openguide").hide();
	$("#myguides").show();
	$("#submitguide").hide();
    $("#openEdit").hide();
	$("#deleteGuide").hide();
	}
	
function upvote(ii){
	$('body').addClass('loading');
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
		$.ajax({
		url:'tools/upvoteGuide.php',
		type:'GET',
		success: function(){
			$("#guidescore").load("tools/guideScoreUpdate.php",function(){
			$('body').removeClass('loading');});}
		});
		}
	});
	}
	
function downvote(ii){
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
		$.ajax({
		url:'tools/downvoteGuide.php',
		type:'GET',
		success: function(){
			$("#guidescore").load("tools/guideScoreUpdate.php",function(){
			$('body').removeClass('loading');});}
		});
		}
	});
}

function postGuide(e){
	$.ajax({
	url:'tools/submitPost.php',
	type:'POST',
	data: $('#frmMain').serialize(),
	success: function(){
		alert('Your guide has been submitted. Community Guides will reload momentarily.');
		window.location.replace('index.php');
		}
	});
	e.preventDefault(); 
 }
 
 function postUpdate(e){
	$.ajax({
	url:'tools/updatePost.php',
	type:'POST',
	data: $('#frmMain2').serialize(),
	success: function(){
		alert('Your guide has been updated. Community Guides will reload momentarily.');
		window.location.replace('index.php');
		}
	});
	e.preventDefault(); 
 }

function deleteGuide(){
	var r = confirm("Are you sure you want to permanently delete this guide?");
	if (r==true){
		$.get("tools/deleteGuide.php");
		alert('You guide has been deleted. Community Guides will reload momentarily.');
		window.location.replace('index.php');
	}
}