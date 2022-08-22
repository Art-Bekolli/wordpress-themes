var viewpr = document.getElementById('view-products');
var postdesc = document.getElementsByClassName('recent-posts')[0];
var numer = 4;


function ShowMore(){
var myRequest = new XMLHttpRequest();
myRequest.open('GET', 'http://localhost/wordpress/wp-json/wp/v2/posts?per_page='+ numer +'&_embed');
myRequest.onload = function(){
	if (myRequest.status >= 200 && myRequest.status < 400){
		var data = JSON.parse(myRequest.responseText);
		makeHTML(data);
	} else{
		console.log("nifar errori");
	}
};

myRequest.onerror = function(){
	console.log("connection error");
};

myRequest.send();

}

function makeHTML(postsData){
var HTMLString = '';
for (i=0; i < postsData.length; i++){
	HTMLString += '<div class="post"><div id="thumbnail"> <img width="320" height="400" style="object-fit: cover;" src="' + postsData[i]._embedded['wp:featuredmedia']['0'].source_url + '"></div>';
	HTMLString += '<div id="title"><a href="' + postsData[i].link +'">' + postsData[i].title.rendered + '</a></div></div>';
	
}
postdesc.innerHTML = HTMLString;
}

viewpr.addEventListener('click', function(){
	numer += 4;
	ShowMore();
});