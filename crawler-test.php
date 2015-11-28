<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
  <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
	$(document).ready(function(){
		$("#ready").text("ready");

		var url = "http://www.travelocity.com/inspire/five-international-beach-escapes-heat-winter";
		

		$.embedly.extract('http://www.travelocity.com/inspire/five-international-beach-escapes-heat-winter', {key: '88ec090b983745d98f594820afdbb393'} ).progress(function(obj){
		      // Reset the loading.
		      $("#result").text('loading');
		      $('#result').prop('disabled', false);
		      // If the obj does not have an article, kill in with an aleart.
		      if (! obj.content){
		        $('.article-result').html(['<div class="alert-box alert">',
		          '<p>No Article Found for this URL</p></div>'].join(''));
		        return true;
		      }
			 // Limit the number of keywords, authors and entities
			      obj.keywords = obj.keywords.slice(0,5)
			      obj.authors = obj.authors.slice(0,5)

			 $("#result").text("done");
			 $("#title").text(obj.title);
			 if(!obj.authors){$("#author").text(obj.authors);}
			 $("#content").html(obj.content);
			 if(!obj.keywords){$("#keyword").text(obj.keywords);}


			});


	});
</script>
</head>





<body>
<h1>hello </h1>
<div id="ready">not ready</div>
<div id="result">no result</div>
<div id="title">no result</div>
<div id="author">no result</div>
<div id="content">no result</div>
<div id="keyword">no result</div>

</body>

</html>


