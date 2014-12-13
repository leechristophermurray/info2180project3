<?php require('redirect.php'); ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="css/inbox.css">    
    <link rel="import" href="components/paper-fab/paper-fab.html">
    <link rel="stylesheet" href="css/admin.css">    
    
	<title>Cheapo-Mail</title>
</head>
<body>

    
<header>
	<h1>Cheapo-Mail</h1>
</header>
    
            
<div id="main">

<ul id="navigationMenu">
    <li>
	    <a class="dash" href="#">
            <span>dashboard</span>
        </a>
    </li>
    
    <li>
    	<a class="logout" href="Index.php">
            <span>logout</span>
        </a>
    </li>
</ul>
    
</div>
    
    
    
<div class="cd-tabs">

	<ul class="cd-tabs-content">
		<li data-content="inbox" class="selected">
			<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>

			<p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
		</li>

		<li data-content="sent">
			<p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
		</li>

		<li data-content="store">
			<form class="composeform">
				<textarea name = "content">Enter Message here</textarea>
				<input name = "recipients" type="text">
			</form>
		</li>


		<li data-content="bucket">
			<p>Trash Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque a iure nostrum animi praesentium, numquam quidem, nemo, voluptatem, aspernatur incidunt. Fugiat aspernatur excepturi fugit aut, dicta reprehenderit temporibus, nobis harum consequuntur quo sed, illum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima doloremque optio tenetur, natus voluptatum error vel dolorem atque perspiciatis aliquam nemo id libero dicta est saepe laudantium provident tempore ipsa, accusamus similique laborum, consequatur quia, aut non maiores. Consectetur minus ipsum aliquam pariatur dolorem rerum laudantium minima perferendis in vero voluptatem suscipit cum labore nemo explicabo, itaque nobis debitis molestias officiis? Impedit corporis voluptates reiciendis deleniti, magnam, fuga eveniet! Velit ipsa <a href="mail.html">mail link here</a> quo labore molestias mollitia, quidem, alias nisi architecto dolor aliquid qui commodi tempore deleniti animi repellat delectus hic. Alias obcaecati fuga assumenda nihil aliquid sed vero, modi, voluptatem? Vitae voluptas aperiam nostrum quo harum numquam earum facilis sequi. Labore maxime laboriosam omnis delectus odit harum recusandae sint incidunt, totam iure commodi ducimus similique doloremque! Odio quaerat dolorum, alias nihil quam iure delectus repellendus modi cupiditate dolore atque quasi obcaecati quis magni excepturi vel, non nemo consequatur, mollitia rerum amet in. Nesciunt placeat magni, provident tempora possimus ut doloribus ullam!</p>
		</li>
	</ul> <!-- cd-tabs-content -->
    
    	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="inbox" class="selected" href="#0">Inbox</a></li>
			<li><a data-content="sent" href="#0">Sent</a></li>
			<li><a data-content="store" href="#0">Compose</a></li>
			<li><a data-content="bucket" href="#0">Bucket</a></li>
		</ul> <!-- cd-tabs-navigation -->
	</nav>
    
               
</div> <!-- cd-tabs -->
    
     <div id="wrap">
                  <form action="" autocomplete="on">
                  <input id="search" name="search" type="text" placeholder="What're we looking for?"><input id="search_submit" value="search" type="submit">
                  </form>
                </div>
    <!--categorized email check-->
    
    
    	<ul class="cd-items cd-container">
		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->

		<li class="cd-item">
			<img src="img/item-1.jpg" alt="Item Preview">
			<a href="#0" class="cd-trigger">Contact Threads</a>
		</li> <!-- cd-item -->
	</ul> <!-- cd-items -->

	<div class="cd-quick-view">
		<div class="cd-slider-wrapper">
			<ul class="cd-slider">
				<li class="selected"><img src="img/item-1.jpg" alt="Product 1"></li>
				<li><img src="img/item-2.jpg" alt="Product 2"></li>
				<li><img src="img/item-3.jpg" alt="Product 3"></li>
			</ul> <!-- cd-slider -->

			<ul class="cd-slider-navigation">
				<li><a class="cd-next" href="#0">Prev</a></li>
				<li><a class="cd-prev" href="#0">Next</a></li>
			</ul> <!-- cd-slider-navigation -->
		</div> <!-- cd-slider-wrapper -->

		<div class="cd-item-info">
			<h2>Contact Name</h2>
			<p>[body/ summary of the thread]</p>

			<ul class="cd-item-action">
				<li><button class="add-to-cart">Respond</button></li>					
				<li><a href="#0">Open Thread</a></li>	
			</ul> <!-- cd-item-action -->
		</div> <!-- cd-item-info -->
		<a href="#0" class="cd-close">Close</a>
	</div> <!-- cd-quick-view -->
    
    <!--categorized email check-->
  
    <paper-fab icon="create" class="blue" title="create"></paper-fab>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    <script src="js/velocity.min.js "></script>
    <script src="js/inbox.js "></script>
    <script src="js/admin.js "></script>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
</body>
</html>