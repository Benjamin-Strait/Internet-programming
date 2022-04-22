<?php
include_once 'connectionClass.php'; //not needed
include_once 'class/Category.php'; 
include_once 'class/Topic.php';

$database = new Database();
$db = $database->connect_db();
$categories = new Category($db);
$topics = new Topic($db);
require_once 'pageFormatSession.php';
$pageTitle="FORUM";
$logo="./images/logo1.png";
pageHeaderSession($pageTitle,$logo);
?>
<title>Discussion Forum with PHP and MySQL</title> 
<div class="container">		
		<h2>Discussion Forum with PHP and MySQL</h2>
		<div class="row">			
		<?php if(empty($_GET['category_id'])) { ?>
			<div class="single category">			
				<ul class="list-unstyled">
					<p></p>					
					<li><span style="font-size:25px;font-weight:bold;">Categories</span> <span class="pull-right"><span style="font-size:20px;font-weight:bold;">Topics / Posts</span></span></li>
					<?php
					$result = $categories->getCategoryList();
					while ($category = $result->fetch_assoc()) {
						$categories->category_id = $category['category_id'];
						$totalTopic = $categories->getCategoryTopicsCount();
						$totalPosts = $categories->getCategoryPostsCount();
					?>
						<li><a href="category.php?category_id=<?php echo $category['category_id'];?>" title=""><?php echo $category['name']; ?> <span class="pull-right"><?php echo $totalTopic; ?> / <?php echo $totalPosts; ?></span></a></li>			
					<?php } ?>
				</ul>
		   </div>
	   <?php } else if(!empty($_GET['category_id'])) { ?>	   
		   <div class="single category">
				<?php 
				$categories->category_id = $_GET['category_id'];
				$categoryDetails = $categories->getCategory();
				?>
				<span style="font-size:20px;"><a href="category.php"><< <?php echo $categoryDetails['name']; ?></a></span>
				<br>	<br>		
				<ul class="list-unstyled">
					<li class="text-right">
					<a type="button" class="btn btn-primary" href="compose.php?category_id=<?php echo $_GET['category_id'];?>"><span style="font-size:20px;font-weight:bold;color:white;">Create New Topic</span></a>
					</li><br>
					<li><span style="font-size:20px;font-weight:bold;">Topics</span> <span class="pull-right"><span style="font-size:15px;font-weight:bold;">Posts</span></span></li>
					<?php
					$topics->category_id = $_GET['category_id'];
					$result = $topics->getTopicList();
					while ($topic = $result->fetch_assoc()) {
						$topics->topic_id = $topic['topic_id'];
						$totalTopicPosts = $topics->getTopicPostCount();
					?>
						<li><a href="post.php?topic_id=<?php echo $topic['topic_id'];?>" title=""><?php echo $topic['subject']; ?> <span class="pull-right"><?php echo $totalTopicPosts; ?></span></a></li>			
					<?php } ?>
				</ul>
		   </div>	   
	   <?php } ?>
	</div>	
</div>
<?php include("inc/footer.php"); ?>