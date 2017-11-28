{extends file="@app/views/layouts/main.tpl"}

{block name=scripts}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{$baseUrl}/static/js/site/index.js"></script>
{/block}

{block name=content}
<div id="site-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        {foreach from=$sliders name=slider item=val}
            <li data-target="#site-carousel" data-slide-to="{$smarty.foreach.slider.index}" {if $smarty.foreach.slider.first}class="active"{/if}></li>
        {/foreach}
    </ol>
    <div class="carousel-inner">
        {foreach from=$sliders name=slider item=val}
            <div class="carousel-item {if $smarty.foreach.slider.first}active{/if}">
                <div class="carousel-img cover" style="background-image: url({$baseUrl}/static/data/sliders/{$val['image_url']});"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3>{$val['title']}</h3>
                    <p>{$val['content']}</p>
                </div>
            </div>
        {/foreach}
    </div>
    <a class="carousel-control-prev" href="#site-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#site-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{/block}