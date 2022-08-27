var viewpr = document.getElementById('view-products');
var postdesc = document.getElementsByClassName('recent-posts')[0];
var numer = 4;

//get info me JSON
function ShowMore(){
fetch('http://localhost/wordpress/wp-json/wp/v2/posts?per_page='+ numer +'&_embed')
.then(data => {
return data.json();
})
.then(post => {
	//call function me output data in html
makeHTML(post);
});
}






//displaying data nfrontend
function makeHTML(post){
var HTMLString = '';
for (i=0; i < post.length; i++){
	HTMLString += '<div class="post"><div id="thumbnail"> <img width="320" height="400" style="object-fit: cover;" src="' + post[i]._embedded['wp:featuredmedia']['0'].source_url + '"></div>';
	HTMLString += '<div id="title"><a href="' + post[i].link +'">' + post[i].title.rendered + '</a></div></div>';
	
}
postdesc.innerHTML = HTMLString;
}






viewpr.addEventListener('click', function(){
	numer += 4;
	ShowMore();
});

