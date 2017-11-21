{extends file="@app/views/layouts/main.tpl"}

{block name=content}
    <div class="site-error">
        <h1>Whoops, something wrong...</h1>
        <div class="alert alert-danger">
            {nl2br(Html::encode($message))}
        </div>

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>

    </div>
{/block}
