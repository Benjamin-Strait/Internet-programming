<?php
include_once 'connectionClass.php';
include_once 'class/Category.php';
include_once 'class/Topic.php';
include_once 'class/Post.php';
$database = new Database();
$db = $database->connect_db();
$topics = new Topic($db);

require_once 'pageFormatSession.php';
$categories = new Category($db);
  if(!isset($_SESSION["name"])){	
	header("Location: loginForm.php");	
}


$pageTitle = "Summary";
$logo="./images/admin1.png";
pageHeaderSession($pageTitle,$logo);
$categories->category_id = $_GET['category_id'];
$categoryDetails = $categories->getCategory();
if(!empty($_POST['saveTopic']) && $_POST['saveTopic'] && $_POST['message']) {
	$topics->save();	
}

?>
<title>Discussion Forum with PHP and MySQL</title> 
<div class="container">		
	<div class="row">
		<h2>Discussion Forum with PHP and MySQL</h2>
		<span style="font-size:20px;"><a href="category.php"><< <?php echo $categoryDetails['name']; ?></a></span>
		<div id="createNewtopic">	
			<form id="topicForm" action="/project1/composeHandler.php" name="topicForm" method="post">
				<div class="form-group">
					<label for="email">Topic Name:</label>
					<input type="text" name="topicName" id="topicName" class="form-control">
				</div>	
				<div class="form-group">
					<label for="email">Message:</label>
					<textarea name="message" id="message"></textarea>
				</div>
				<input type="hidden" name="categoryId" value="<?php echo $_GET['category_id']; ?>">
				<button type="submit" id="saveTopic" name="saveTopic" class="btn btn-info">Create Topic</button>
			</form>	
		</div>		
	</div>	
</div>