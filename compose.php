<?php
include_once 'connectionClass.php';
include_once 'class/Category.php';
include_once 'class/Topic.php';
include_once 'class/Post.php';
$database = new Database();
$db = $database->connect_db();
$topics = new Topic($db);

require_once './phpfunctions/format.php';


$categories = new Category($db);
  if(!isset($_SESSION["name"])){	
	header("Location: login.php");	
}

$pageTitle="FORUM";
$logo="./img/comiclogo.png";
pageHeader($pageTitle,$logo);

$categories->category_id = $_GET['category_id'];
$categoryDetails = $categories->getCategory();
if(!empty($_POST['saveTopic']) && $_POST['saveTopic'] && $_POST['message']) {
	$topics->save();	
}

?>
<title>Discussion Forum</title> 
<div class="container">		
	<div class="row">
		<h2>Discussion Forum</h2>
		<span style="font-size:20px;"><a href="category.php"><< <?php echo $categoryDetails['name']; ?></a></span>
		</div>
			
			<form id="topicForm" action="composeHandler.php" name="topicForm" method="post">
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
<?php pageFooter() ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>