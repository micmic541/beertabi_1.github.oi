<!DOCTYPE html>
<html>
    <head>
        <!--required-meta-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--optional-meta-->
        <meta name="description" content="ビア旅の商品管理画面です">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <!--link-->
        <link rel="stylesheet" href="css/style.css">
        <!--favicon-->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
        <link rel="manifest" href="img/favicon.png">
        <!--fontawsome-->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!--google_fonts-->
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
        <title>ビア旅｜トップページ</title>
    </head>
    <body>
        
        <div class="top_bg overlay">
            <div class="d-flex justify-content-between col-12">
                <img class="img-fluid py-2 px-0 col-5 col-xl-2 col-lg-3 col-md-4" src="img/logo.png">
                <div id="mobile-head">
    				<div id="ham" class="ham float-right">
    					<span class="ham_line ham_line1"></span>
    					<span class="ham_line ham_line2"></span>
    					<span class="ham_line ham_line3"></span>
    				</div>
    				<div id="menu_wrapper">
    					<nav class="menu d-none">
    						<ul class="text-center d-flex flex-column">
    							<li><a href="login.php">ログイン</li></a>
    							<li><a href="register_user.php">新規登録</a></li>
    							<li><a href="search_beer.php">商品一覧</a></li>
    						</ul>
    					</nav>
    				</div>
			    </div>
            </div>
            <div class="button_box d-flex">
                <div class="m-3">
                    <a id="button" href="login.php">ログイン</a>
                </div>
                <div class="m-3">
                    <a id="button" href="register_user.php">新規登録</a>
                </div>
                <div class="m-3">
                    <a id="button" href="search_beer.php">商品一覧</a>
                </div>
            </div>
        </div>
            
        </div>
        
        <!--jquery-->
    	<script src="jquery-3.5.1.min.js"></script>
    	<script type="text/javacsript" src="animation.js"></script>
        <!--jQuery for Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>