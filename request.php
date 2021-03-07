<!-- API call to newsapi.org -->
<?php
$json = file_get_contents('https://newsapi.org/v2/top-headlines?sources=al-jazeera-english&apiKey= API KEY FROM newsAPI.org');
$news = json_decode($json, true);
// split out the returened array in to human speak //
foreach ($news["articles"] as $i => $article) {
echo '<br><a href="' . $article['url'] . '" target="_blank" style="color:#7c7c7d;"> <h3>' . $article['title'] . '</h3></a>';
echo '<img src="' . $article['urlToImage'] . '"style="width:400px;height:200px;"/>';
echo '<h5>' . $article['description'] . '</h5>';
echo '<a href="' . $article['url'] . '" target="_blank">Read The Full Article</a><br>';
}
?>
