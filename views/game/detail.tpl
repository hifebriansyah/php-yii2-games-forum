{extends file="@app/views/layouts/main.tpl"}

{block name=styles}
<style type="text/css">
	#game-detail .head {
		overflow: hidden;
		color: #ffffff;
		text-shadow: 2px 1px #404040;
		height: 345px;
	}
	#game-detail .head{
		border-bottom: 7px solid #343A40;
	}
	#game-detail .head .container .cover {
		margin-right: 15px;
		width: 178px;
		margin-top: 34px;
	}
	#game-detail .head .container .cover:before {
    	padding-top: 120%;
	}
	#game-detail .head .info {
		width: calc(100% - 200px);
		margin-top: 42px;
	}

	#game-detail .head .info h3{
		font-size: 40px;
		line-height: 48px;
		margin-bottom: 3px;
	}

	#game-detail .head .info span{
		font-size: 18px;
		line-height: 22px;
		font-style: italic;
		font-weight: lighter;
		margin-bottom: 15px;
	}

	#game-detail .head .info p{
		font-size: 21px;
		line-height: 25px;
		max-height: 100px;
		overflow: hidden;
	}

	#game-detail .head .cover.blur,
	#game-detail .head .overlay {
		height: 415px;
		top: -10px;
		left: -20px;
		width: calc(100% + 40px);
		position: fixed;
		filter: blur(10px);
		z-index: -1;
	}

	#game-detail .head .overlay{
		background-color: #555555;
		opacity: 0.3;

	}

	.nav-tabs{
		margin-top: 35px;
		border:none;
	}

	.nav-tabs {
		margin-bottom: -2px;
		font-size: 21px;
		line-height: 25px;
	}

	.nav-tabs .nav-item .nav-link {
		padding: 18px 58px;
		color: #ffffff;
	    background-color: #343A40;
	    opacity: 0.3;
	    margin-right: 3px;
		border:none;
	    transition: opacity 1s;
	}

	.nav-tabs .nav-item .nav-link:hover {
		border:none;
	    opacity: 1;
	}

	.nav-tabs .nav-item.show .nav-link,
	.nav-tabs .nav-link.active {
	    color: #ffffff;
	    background-color: #343A40;
		border:none;
	    opacity: 0.8;
	}
</style>
{/block}

{block name=content}
<div id="game-detail">
	<div class="head">
		<div class="blur cover" style="background-image: url({$game['image_url']});"></div>
		<div class="overlay"></div>
		<div class="container">
			<div class="clearfix">
				<div class="cover float-left" style="background-image: url({$game['image_url']});"></div>
				<div class="info float-left">
					<h3 class="ellipsis">{$game['title']}</h3>
					<span class="ellipsis">{$game['title']} ({$game['platform']})</span>
					<p>{$game['content']}</p>
				</div>
			</div>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">Forums</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Relateds</a>
				</li>
			</ul>
		</div>
	</div>
</div>
{/block}