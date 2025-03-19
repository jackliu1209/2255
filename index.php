<?php include ('./data/beipy.inc.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo $aik['title'];?>
		</title>
		<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
		<meta name="description" content="<?php echo $aik['description'];?>" />
		<meta name=viewport content="width=device-width,anicital-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/base64.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<!--微博引入关注插件-->
		<link rel="stylesheet" href="css/style.css" />
		<!--浏览器标签ico-->
		<link rel="shortcut icon" href="img/favicon.ico" />
		<!--书签标签-->
		<link rel="bookmark" href="img/tvico.png" />
		<!--苹果桌面标题-->
		<meta name="apple-mobile-web-app-title" content="全网VIP解析">
		<!--苹果桌面图标-->
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/tvlogo.png">
	</head>
	<body>
		<header class="navbar-fixed-top">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- 手机自适应样式 -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">导航切换</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<!--logo图标-->
							<a class="navbar-brand logo" href="./"></a>
						</div>
						<!-- pc导航样式 -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li>
									<a href="http://qxkkk.bid" target="_blank">七星影院</a>
								</li>
								<li>
									<a href="http://qxkkk.bid/yy/" target="_blank"> <span class="badge" style="background: red;margin-right:5px ;">NEW</span>成人影院<span class="sr-only">(current)</span></a>
								</li>
								<li>
									<a href="http://qxkkk.bid/music/">七星音乐</a>
								</li>
								<?php echo $aik['topnav'];?>
							</ul>
							<!--导航 右侧-->
							<ul class="nav navbar-nav navbar-right">
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge" style="background: red;">1</span>  旗下网站 <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="http://qxkkk.bid" target="_blank" title="海量高清VIP影视免费看">七星影院</a>
										</li>
										<li>
											<a href="<?php echo $aik['weibourl'];?>" target="_blank" title="成人资源">成人影院</a>
										</li>
										<li role="separator" class="divider"></li>
										<li>
											<a href="http://qxkkk.bid/music/" target="_blank" title="免费音乐平台">七星音乐</a>
										</li>
										<li>
											<a href="http://qxkkk.f3322.net:8081" target="_blank">影视主站</a>
										</li>
										
										<li>
											<a href="http://qxkkk.f3322.net:8081/4/" target="_blank">备用成人</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="http://qxkkk.f3322.net:8081/2/" target="_blank">备用影视</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<!--视频box区域-->
		<div class="container-fluid video-box">
			<div class="container ">
				<div class="tit-name">
					<span>正在播放:</span>
					<h1 id="tittext">感谢您使用七星影院视频解析服务,正在播放音乐MV视频！</h1>
				</div>
				<iframe id="palybox" src="<?php echo $aik['jiekou1'];?><?php echo $aik['maurl'];?>" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen="true" allowtransparency="true"></iframe>

				<div class="url-box">
					<div class="input-group">
						<input type="text" id="url" class="form-control url-text" aria-label="Text input with segmented button dropdown" placeholder="请粘贴视频网址>ㅂ<ﾉ ☆" title="请复制你想要看的视频网址，粘贴到此处点击播放即可！">
						<div class="input-group-addon">
							<select class="url-c url-text" title="如发现视频无法正常播放请尝试更换视频线路！" id="jk">
								<option value="<?php echo $aik['jiekou1'];?>" selected>
									<?php echo $aik['jiekou1name'];?>
								</option>
								<option value="<?php echo $aik['jiekou2'];?>">
									<?php echo $aik['jiekou2name'];?>
								</option>
								<option value="<?php echo $aik['jiekou3'];?>">
									<?php echo $aik['jiekou3name'];?>
								</option>
								<option value="<?php echo $aik['jiekou4'];?>">
									<?php echo $aik['jiekou4name'];?>
								</option>
								<option value="<?php echo $aik['jiekou5'];?>">
									<?php echo $aik['jiekou5name'];?>
								</option>
								<option value="<?php echo $aik['jiekou6'];?>">
									<?php echo $aik['jiekou6name'];?>
								</option>
								<option value="<?php echo $aik['jiekou7'];?>">
									<?php echo $aik['jiekou7name'];?>
								</option>
								<option value="<?php echo $aik['jiekou8'];?>">
									<?php echo $aik['jiekou8name'];?>
								</option>
								<option value="<?php echo $aik['jiekou9'];?>">
									<?php echo $aik['jiekou9name'];?>
								</option>
								<option value="<?php echo $aik['jiekou10'];?>">
									<?php echo $aik['jiekou10name'];?>
								</option>
								<option value="<?php echo $aik['jiekou11'];?>">
									<?php echo $aik['jiekou11name'];?>
								</option>
								<option value="<?php echo $aik['jiekou12'];?>">
									<?php echo $aik['jiekou12name'];?>
								</option>
								<option value="<?php echo $aik['jiekou13'];?>">
									<?php echo $aik['jiekou13name'];?>
								</option>
								<option value="<?php echo $aik['jiekou14'];?>">
									<?php echo $aik['jiekou14name'];?>
								</option>
								<option value="<?php echo $aik['jiekou15'];?>">
									<?php echo $aik['jiekou15name'];?>
								</option>
								<option value="<?php echo $aik['jiekou16'];?>">
									<?php echo $aik['jiekou16name'];?>
								</option>
								<option value="<?php echo $aik['jiekou17'];?>">
									<?php echo $aik['jiekou17name'];?>
								</option>
								<option value="<?php echo $aik['jiekou18'];?>">
									<?php echo $aik['jiekou18name'];?>
								</option>
								<option value="<?php echo $aik['jiekou19'];?>">
									<?php echo $aik['jiekou19name'];?>
								</option>
								<option value="<?php echo $aik['jiekou20'];?>">
									<?php echo $aik['jiekou20name'];?>
								</option>
							</select>
						</div>
						<div class="input-group-btn">

							<button type="button" class="btn btn-default btn-play" title="点击开始解析并开始播放" onclick="play()">解析播放</button>
						</div>
					</div>

				</div>
				<div class="tit-gg">
					<span><?php echo $aik['gonggao'];?></span>
				</div>
			</div>
		</div>
		<!--平台logo	-->
		<div class="container-fluid logo-box">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-tit">
							<h4>支持以下网站视频</h4>
							<p>使用方法：进入各大视频网站，找到想要观看的VIP视频，然后复制链接（浏览器上的视频地址），粘贴到视频的输入框，并点击“解析播放”即可！</p>
						</div>
					</div>
				</div>
				<!--第一行-->
				<div class="row">
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://vip.iqiyi.com/" target="_blank" title="爱奇艺会员">
								<img class="img-responsive" src="img/iqiyilogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://film.qq.com/" target="_blank" title="腾讯会员中心">
								<img class="img-responsive" src="img/qqlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.youku.com/" target="_blank" title="优酷会员中心">
								<img class="img-responsive" src="img/youkulogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.mgtv.com/vip/" target="_blank" title="芒果会员中心">
								<img class="img-responsive" src="img/hunantvlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://yuanxian.le.com/" target="_blank" title="乐视会员中心">
								<img class="img-responsive" src="img/letvlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://vip.tudou.com" target="_blank" title="土豆会员中心">
								<img class="img-responsive" src="img/tudoulogo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第一行结束-->

				<!--第二行开始-->
				<div class="row">
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.baofeng.com/" target="_blank" title="暴风会员">
								<img class="img-responsive" src="img/baofeng.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.1905.com/" target="_blank" title="1905电影网视频">
								<img class="img-responsive" src="img/1905logo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.kankan.com/" target="_blank" title="天天看看">
								<img class="img-responsive" src="img/kankan.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.pptv.com/" target="_blank" title="PPTV聚力">
								<img class="img-responsive" src="img/pptv.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.yinyuetai.com/" target="_blank" title="音悦台MV">
								<img class="img-responsive" src="img/yinyuetailogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.56.com/" target="_blank" title="56视频">
								<img class="img-responsive" src="img/56logo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第二行结束-->

				<!--第三行开始-->
				<div class="row">

					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.fun.vip" target="_blank" title="风行视频">
								<img class="img-responsive" src="img/fengxing.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://movie.ku6.com/" target="_blank" title="酷6视频">
								<img class="img-responsive" src="img/ku6logo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://vip.wasu.cn/" target="_blank" title="WASU华数视频">
								<img class="img-responsive" src="img/wasulogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://video.sina.com.cn/" target="_blank" title="新浪视频">
								<img class="img-responsive" src="img/sinalogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="https://film.sohu.com/" target="_blank" title="搜狐视频">
								<img class="img-responsive" src="img/sohulogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.baomihua.com/" target="_blank" title="爆米花">
								<img class="img-responsive" src="img/baomihualogo.png" />
							</a>
						</div>
					</div>
				</div>
				<!--第三行结束-->
				<div class="row">

					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a target="_blank" title="看看新闻网视频">
								<img class="img-responsive" src="img/kankannewslogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a target="_blank" title="糖豆视频">
								<img class="img-responsive" src="img/tangdoulogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://tv.cctv.com/" target="_blank" title="央视网">
								<img class="img-responsive" src="img/cntvlogo.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2 ">
						<div class="logo-lie">
							<a href="http://www.acfun.cn/" target="_blank" title="Ac弹幕网">
								<img class="img-responsive" src="img/acfun.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.bilibili.com/" target="_blank" title="哔哩哔哩">
								<img class="img-responsive" src="img/bilibili.png" />
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-sm-2">
						<div class="logo-lie">
							<a href="http://www.aipai.com/" target="_blank" title="爱拍原创">
								<img class="img-responsive" src="img/aipai.png" />
							</a>
						</div>
					</div>
				</div>
				<!---->
			</div>
		</div>
			<?php  include 'footer.php';?>
		    <script type="text/javascript" src="js/tv-beipy.js" /></script>
	</body>
</html>
