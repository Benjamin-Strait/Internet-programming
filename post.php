<?php
include_once 'connectionClass.php';
include_once 'class/Category.php';
include_once 'class/Topic.php';
include_once 'class/Post.php';
$database = new Database();
$db = $database->connect_db();
$categories = new Category($db);
$topics = new Topic($db);
require_once './phpfunctions/format.php';
$pageTitle="POSTS";
$logo="./img/comiclogo.png";
pageHeader($pageTitle,$logo);
?>
<title>Discussion Forum</title> 
<?php include('inc/container.php'); ?>
<div class="container">		
	<div class="row">
		<h2>Discussion Forum</h2>
		<br>
		<?php if(!empty($_GET['topic_id'])) { ?>	   
				<?php 
				$topics->topic_id = $_GET['topic_id'];
				$topicDetails = $topics->getTopic();
				?>
				<span style="font-size:20px;"><a href="category.php?category_id=<?php echo $topicDetails['category_id']; ?>"><< <?php echo $topicDetails['subject']; ?></a></span>
				</div>
				<br><br>
				<?php				
				$result = $topics->getPosts();
				while ($post = $result->fetch_assoc()) {
					$date = date_create($post['created']);
					$posterName = $post['name'];
					if($posterName == '') {
						$posterName = $post['name'];
					}
				?>
				
				<article class="row" id="postRow_<?php echo $post['post_id']; ?>">
					<div class="col-md-2 col-sm-2 hidden-xs">
					  <figure class="thumbnail">
						<img class="img-responsive" width="100%" src="img/user-avatar.png" />
						<figcaption class="text-center"><?php echo ucwords($posterName); ?></figcaption>
					  </figure>
					</div>
					<div class="col-md-10 col-sm-10">
					  <div class="panel panel-default arrow left">
						<div class="panel-body">
						  <header class="text-left">
							<div class="comment-user"><i class="fa fa-user"></i> By: <?php echo $posterName; ?></div>
							<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo date_format($date, 'd M Y H:i:s'); ?></time>
						  </header>
						  <br>					  
						  <div class="comment-post"  id="post_message_<?php echo $post['post_id']; ?>">
							
							<?php echo $post['message']; ?>
							
						  </div>
						  
						  <textarea name="message" data-topic-id="<?php echo $post['topic_id']; ?>" id="<?php echo $post['post_id']; ?>" style="visibility: hidden;"></textarea><br>
						  
						  
						
							
										
						</div>					
				
					  </div>
					</div>
				</article>	
				<?php } ?>
				
		   </div>	   
	   <?php } ?>
		
	
			
		
	</div>
	
	<?php if(isset($_SESSION["name"])) { ?>
		<form id="topicForm" action="reply.php" name="topicForm" method="post">
			<textarea name="message" id="message"></textarea><br>	
			<input type="hidden" name="action" id="action" value="save" />
			<input type="hidden" name="topic_id" value="<?php echo $_GET['topic_id']; ?>">
			<button type="submit" id="save" name="save" class="btn btn-info saveButton">Post</button>
		</form>
	<?php } else { ?>
	<a href="login.php">Login to reply</a>
	<?php } ?>
	
	
		
	
</div>
<?php pageFooter() ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>