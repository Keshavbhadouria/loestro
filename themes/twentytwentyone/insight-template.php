<?php /*Template Name:Insights */?>
<?php get_header()?>

<script>
fetch('https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@loestroadvisors')
   .then((res) => res.json())
   .then((data) => {
      // Filter for acctual posts. Comments don't have categories, therefore can filter for items with categories bigger than 0
      const res = data.items //This is an array with the content. No feed, no info about author etc..
      const posts = res.filter(item => item.categories.length > 0) // That's the main trick* !
    console.log( posts);
      // Functions to create a short text out of whole blog's content
      function toText(node) {
         let tag = document.createElement('div')
         tag.innerHTML = node
         node = tag.innerText
         return node
      }
      function shortenText(text,startingPoint ,maxLength) {
         return text.length > maxLength?
         text.slice(startingPoint, maxLength):
         text
      }

      // Put things in right spots of markup
      let output = '';
      posts.forEach((item) => {
         output += '<div  class="col-md-3 blog__post">\
            <a class="main-a" href="'+item.link+'">\
               <img src="'+item.thumbnail+'" class="blog__topImg"></img>\
				<p class="blog__date">'+shortenText(item.pubDate,0 ,10)+'</p>\
			    <h2 class="blog__title">'+shortenText(item.title, 0, 15000)+ '...'+'</h2>\
				 <p class="blog__intro">'+ shortenText(toText(item.content),0, 300)+ '...'+'</p>\
				  <p class="blog__author">'+item.author+'</p>\
              <a/>\
         </div>';

      })
      document.querySelector('.blog__slider').innerHTML = output;
})




</script>

<section id="blog" class="blog">
  <div class="blog__header">
    <p class="blog__header1">Insights</p>
    <h2 class="blog__header2">Medium
      <span class="blog__header2Span">posts</span>
    </h2>
  </div>
  
  <div class="container">
      <div class="row blog__slider justify-content-center">
        
        </div>
    <div class="text-center">
        <a href="https://medium.com/loestro-advisors" target="_blank" class="rmore_btn">View More</a>
    </div>
  </div>
</section>


<?php get_footer();?>