<?php
return [


    "GET site/index" => "site/index",

    # --- Ad Video --- #

    # GET

    "GET api/ad-video" => "ad-video/get-all",
    "GET api/ad-video/populars" => "ad-video/get-populars",
    "GET api/ad-video/category/<category_id>" => "ad-video/get-all-by-category",
    "GET api/ad-video/search/<string>" => "ad-video/get-all-by-string",
    "GET api/ad-video/<ad_video_id>" => "ad-video/get-one",
    "GET api/ad-video/<ad_video_id>/comments" => "ad-video/get-comments",
    "GET api/ad-video/<ad_video_id>/likes" => "ad-video/get-likes",
    "GET api/ad-video/<ad_video_id>/relateds" => "ad-video/get-relateds",

    # POST

    "POST api/ad-video/<ad_video_id>/comment" => "ad-video/post-comment",
    "POST api/ad-video/<ad_video_id>/like" => "ad-video/post-like",
    "POST api/ad-video/<ad_video_id>/unlike" => "ad-video/post-unlike",

    # PUT

    "PUT api/ad-video/<ad_video_id>/play-count" => "ad-video/put-play-count",

    # --- Ad Video Category --- #

    # GET

    "GET api/ad-video-category" => "ad-video-category/get-all",
    "GET api/ad-video-category/<ad_video_category>" => "ad-video-category/get-one",

    # POST

    "POST api/ad-video-category" => "ad-video-category/post-new",

    # PUT

    "PUT api/ad-video-category/<ad_video_category>" => "ad-video-category/put-update",
    
    # DELETE

    "DELETE api/ad-video-category/<ad_video_category>" => "ad-video-category/delete-record",
    
    # --- Doku --- #

    # POST

    "POST api/doku/notify" => "doku/post-notify",

    # --- Duitku --- #

    # POST
    
    "POST api/duitku/handle" => "duitku/post-handle",
    "POST API/DUITKU/HANDLE" => "duitku/post-handle",

    "GET api/duitku/handle" => "duitku/post-handle",
    "GET API/DUITKU/HANDLE" => "duitku/post-handle",
    
    # --- Edutainment --- #

    # GET

    "GET api/edutainment" => "edutainment/get-all",
    "GET api/edutainment/category-previews" => "edutainment/get-category-previews",
    "GET api/edutainment/frees" => "edutainment/get-all",
    "GET api/edutainment/latests" => "edutainment/get-latests",
    "GET api/edutainment/option" => "edutainment/get-option",
    "GET api/edutainment/populars" => "edutainment/get-populars",
    "GET api/edutainment/category/<category_id>" => "edutainment/get-all-by-category",
    "GET api/edutainment/search/<string>" => "edutainment/get-all-by-string",
    "GET api/edutainment/<edutainment_id>" => "edutainment/get-one",
    "GET api/edutainment/<edutainment_id>/comments" => "edutainment/get-comments",
    "GET api/edutainment/<edutainment_id>/likes" => "edutainment/get-likes",
    "GET api/edutainment/<edutainment_id>/relateds" => "edutainment/get-relateds",

    # POST

    "POST api/edutainment" => "edutainment/post-new",
    "POST api/edutainment/<edutainment_id>/comment" => "edutainment/post-comment",
    "POST api/edutainment/<edutainment_id>/like" => "edutainment/post-like",
    "POST api/edutainment/<edutainment_id>/unlike" => "edutainment/post-unlike",

    # PUT

    "PUT api/edutainment/<edutainment_id>" => "edutainment/put-update",
    "PUT api/edutainment/<edutainment_id>/play-count" => "edutainment/put-play-count",

    # DELETE
    
    "DELETE api/edutainment/<edutainment_id>" => "edutainment/delete-record",

    # --- Edutainment Category --- #

    # GET

    "GET api/edutainment-category" => "edutainment-category/get-all",
    "GET api/edutainment-category/<edutaiment_category_id>" => "edutainment-category/get-one",

    # POST

    "POST api/edutainment-category" => "edutainment-category/post-new",

    # PUT

    "PUT api/edutainment-category/<edutaiment_category_id>" => "edutainment-category/put-update",
    
    # DELETE

    "DELETE api/edutainment-category/<edutaiment_category_id>" => "edutainment-category/delete-record",

    # --- Event --- #

    # GET

    "GET api/event" => "event/get-all",
    "GET api/event/category-previews" => "event/get-category-previews",
    "GET api/event/frees" => "event/get-all",
    "GET api/event/latests" => "event/get-latests",
    "GET api/event/option" => "event/get-option",
    "GET api/event/populars" => "event/get-populars",
    "GET api/event/upcomings" => "event/get-upcomings",
    "GET api/event/category/<category_id>" => "event/get-all-by-category",
    "GET api/event/search/<string>" => "event/get-all-by-string",
    "GET api/event/generate-all-slug-url" => "event/generate-all-slug-url",
    "GET api/event/<event_id>" => "event/get-one",
    "GET api/event/<event_id>/comments" => "event/get-comments",
    "GET api/event/<event_id>/likes" => "event/get-likes",
    "GET api/event/<event_id>/relateds" => "event/get-relateds",

    # POST

    "POST api/event" => "event/post-new",
    "POST api/event/<event_id>/comment" => "event/post-comment",
    "POST api/event/<event_id>/like" => "event/post-like",
    "POST api/event/<event_id>/unlike" => "event/post-unlike",

    # PUT

    "PUT api/event/<event_id>" => "event/put-update",
    "PUT api/event/<event_id>/play-count" => "event/put-play-count",

    # DELETE
    
    "DELETE api/event/<event_id>" => "event/delete-record",

    # --- Event Category --- #

    # GET

    "GET api/event-category" => "event-category/get-all",
    "GET api/event-category/<edutaiment_category_id>" => "event-category/get-one",

    # POST

    "POST api/event-category" => "event-category/post-new",

    # PUT

    "PUT api/event-category/<edutaiment_category_id>" => "event-category/put-update",
    
    # DELETE

    "DELETE api/event-category/<edutaiment_category_id>" => "event-category/delete-record",

    # --- Free Point --- #

    # GET

    "GET api/free-point" => "free-point/get-all",

    # --- Google Cloud Messaging --- #
    
    # POST
    # handling for old version android apps
    "POST api/gcm" => "push-notification/post-new-old-version",

    # --- Intro --- #

    # GET
    
    "GET api/intro" => "intro/get-all",

    # --- Live Channel --- #

    # GET

    "GET api/live-channel" => "live-channel/get-all",
    "GET api/live-channel/populars" => "live-channel/get-populars",
    "GET api/live-channel/frees" => "live-channel/get-all",
    "GET api/live-channel/category/<category_id>" => "live-channel/get-all-by-category",
    "GET api/live-channel/search/<string>" => "live-channel/get-all-by-string",
    "GET api/live-channel/<live_channel_id>" => "live-channel/get-one",
    "GET api/live-channel/<live_channel_id>/comments" => "live-channel/get-comments",
    "GET api/live-channel/<live_channel_id>/likes" => "live-channel/get-likes",
    "GET api/live-channel/<live_channel_id>/relateds" => "live-channel/get-relateds",

    # POST

    "POST api/live-channel/<live_channel_id>/comment" => "live-channel/post-comment",
    "POST api/live-channel/<live_channel_id>/like" => "live-channel/post-like",
    "POST api/live-channel/<live_channel_id>/unlike" => "live-channel/post-unlike",

    # PUT

    "PUT api/live-channel/<live_channel_id>/play-count" => "live-channel/put-play-count",

    # --- Live Channel Category --- #

    # GET

    "GET api/live-channel-category" => "live-channel-category/get-all",
    "GET api/live-channel-category/<ad_video_category>" => "live-channel-category/get-one",

    # POST

    "POST api/live-channel-category" => "live-channel-category/post-new",

    # PUT

    "PUT api/live-channel-category/<ad_video_category>" => "live-channel-category/put-update",
    
    # DELETE

    "DELETE api/live-channel-category/<ad_video_category>" => "live-channel-category/delete-record",

    # --- Movie --- #

    # GET

    "GET api/movie" => "movie/get-all",
    "GET api/movie/frees" => "movie/get-frees",
    "GET api/movie/genre-previews" => "movie/get-genre-previews",
    "GET api/movie/latests" => "movie/get-latests",
    "GET api/movie/option" => "movie/get-option",
    "GET api/movie/paids" => "movie/get-paids",
    "GET api/movie/populars" => "movie/get-populars",
    "GET api/movie/upcomings" => "movie/get-upcomings",
    "GET api/movie/genre/<genre_id>" => "movie/get-all-by-genre",
    "GET api/movie/search/<string>" => "movie/get-all-by-string",
    "GET api/movie/generate-all-slug-url" => "movie/generate-all-slug-url",
    "GET api/movie/<movie_id>" => "movie/get-one",
    "GET api/movie/<movie_id>/comments" => "movie/get-comments",
    "GET api/movie/<movie_id>/clips" => "movie/get-clips",
    "GET api/movie/<movie_id>/likes" => "movie/get-likes",
    "GET api/movie/<movie_id>/relateds" => "movie/get-relateds",
    
    # POST

    "POST api/movie" => "movie/post-new",
    "POST api/movie/<movie_id>/clip" => "movie/post-clip",
    "POST api/movie/<movie_id>/comment" => "movie/post-comment",
    "POST api/movie/<movie_id>/like" => "movie/post-like",
    "POST api/movie/<movie_id>/unlike" => "movie/post-unlike",

    # PUT

    "PUT api/movie/<movie_id>" => "movie/put-update",
    "PUT api/movie/<movie_id>/play-count" => "movie/put-play-count",
    "PUT api/movie/<movie_id>/view-count" => "movie/put-view-count",

    # DELETE
    
    "DELETE api/movie/<movie_id>" => "movie/delete-record",

    # --- Movie Clip --- #

    # GET

    "GET api/movie-clip" => "movie-clip/get-all",
    "GET api/movie-clip/<movie_clip_id>" => "movie-clip/get-one",

    # POST

    "POST api/movie-clip" => "movie-clip/post-new",

    # PUT

    "PUT api/movie-clip/<movie_clip_id>" => "movie-clip/put-update",
    
    # DELETE

    "DELETE api/movie-clip/<movie_clip_id>" => "movie-clip/delete-record",

    # --- Movie Comment --- #

    # GET

    "GET api/movie-comment" => "movie-comment/get-all",
    "GET api/movie-comment/<movie_comment_id>" => "movie-comment/get-one",

    # POST

    "POST api/movie-comment" => "movie-comment/post-new",

    # PUT

    "PUT api/movie-comment/<movie_comment_id>" => "movie-comment/put-update",
    
    # DELETE

    "DELETE api/movie-comment/<movie_comment_id>" => "movie-comment/delete-record",

    # --- Movie Genre --- #

    # GET

    "GET api/movie-genre" => "movie-genre/get-all",
    "GET api/movie-genre/<movie_genre_id>" => "movie-genre/get-one",

    # POST

    "POST api/movie-genre" => "movie-genre/post-new",

    # PUT

    "PUT api/movie-genre/<movie_genre_id>" => "movie-genre/put-update",
    
    # DELETE

    "DELETE api/movie-genre/<movie_genre_id>" => "movie-genre/delete-record",

    # --- Member --- #

    # GET

    "GET api/member" => "member/get-members",
    "GET api/member/mail-confirm/<unique_id>/<mail_token>" => "member/get-mail-confirm",
    "GET api/member/resend-email-all" => "member/get-resend-email-all",
    "GET api/member/rename-all-username" => "member/rename-all-username",
    "GET api/member/<member_id>" => "member/get-member",
    "GET api/member/<member_id>/messages" => "member/get-messages",
    "GET api/member/<member_id>/purchases" => "member/get-purchases",
    "GET api/member/<member_id>/watchlists" => "member/get-watchlists",
    "GET api/member/<member_id>/recalculate-points" => "member/recalculate-points",

    

    # POST

    "POST api/member" => "member/post-new",
    "POST api/member/forgot-password" => "member/forgot-password",
    "POST api/member/log-in" => "member/log-in",
    "POST api/member/fb-log-in" => "member/fb-log-in",
    "POST api/member/log-out" => "member/log-out",
    "POST api/member/log" => "member/log",
    "POST api/member/<member_id>/point" => "member/post-point",
    "POST api/member/<member_id>/resend-email" => "member/post-resend-email",

    # PUT

    "PUT api/member/<member_id>" => "member/put-update",

    # --- Member --- #

    # GET

    "GET api/system/menus" => "system/get-menus",


    # --- Opem --- #

    "GET api/open/video/arteta" => "open/get-all",

    # --- Paid Point --- #

    # GET

    "GET api/paid-point" => "paid-point/get-all",

    # POST
    
    "POST api/paid-point/buy" => "paid-point/post-buy",
    "POST api/paid-point/doku-purchase" => "paid-point/post-doku-purchase",

    # --- Point Category --- #

    # GET

    "GET api/point-category" => "point-category/get-all",

    # --- Push Notification --- #

    # GET
    "GET api/push-notification" => "push-notification/get-all",
    "GET api/push-notification/<device_token>" => "push-notification/get-one",
    
    # POST
    "POST api/push-notification" => "push-notification/post-new",
    "POST api/push-notification/send" => "push-notification/send-notification",
    "POST api/push-notification/send-one" => "push-notification/send-one-notification",

    # --- Serial --- #

    # GET

    "GET api/serial" => "serial/get-all",

    "GET api/serial/episode/populars" => "serial/get-popular-episodes",
    "GET api/serial/episode/frees" => "serial/get-popular-episodes",
    "GET api/serial/episode/search/<string>" => "serial/get-all-by-string",
    "GET api/serial/generate-all-slug-url" => "serial-episode/generate-all-slug-url",
    "GET api/serial/episode/<serial_episode_id>" => "serial/get-episode",
    "GET api/serial/episode/<serial_episode_id>/comments" => "serial/get-episode-comments",
    "GET api/serial/episode/<serial_episode_id>/likes" => "serial/get-episode-likes",

    "GET api/serial/category/<category_id>" => "serial/get-all-by-category",
    "GET api/serial/<serial_id>/relateds" => "serial/get-relateds",

    # POST

    "POST api/serial/episode/<serial_episode_id>/comment" => "serial/post-episode-comment",
    "POST api/serial/episode/<serial_episode_id>/like" => "serial/post-episode-like",
    "POST api/serial/episode/<serial_episode_id>/unlike" => "serial/post-episode-unlike",

    # PUT

    "PUT api/serial/episode/<serial_episode_id>/play-count" => "serial/put-episode-play-count",

    # --- Tv Show Episode Category --- #

    # GET

    "GET api/serial-category" => "serial-category/get-all",
    "GET api/serial-category/<serial_category_id>" => "serial-category/get-one",

    # POST

    "POST api/serial-category" => "tv-video-category/post-new",

    # PUT

    "PUT api/serial-category/<serial_category_id>" => "tv-video-category/put-update",
    
    # DELETE

    "DELETE api/serial-category/<serial_category_id>" => "tv-video-category/delete-record",

    # --- Sliders --- #

    # GET

    "GET api/slider" => "slider/get-sliders",


    # --- TV Show --- #

    # GET

    "GET api/tv-show" => "tv-show/get-all",

    "GET api/tv-show/episode/populars" => "tv-show/get-popular-episodes",
    "GET api/tv-show/episode/frees" => "tv-show/get-popular-episodes",
    "GET api/tv-show/episode/search/<string>" => "tv-show/get-all-by-string",
    "GET api/tv-show/episode/<tv_show_episode_id>" => "tv-show/get-episode",
    "GET api/tv-show/episode/<tv_show_episode_id>/comments" => "tv-show/get-episode-comments",
    "GET api/tv-show/episode/<tv_show_episode_id>/likes" => "tv-show/get-episode-likes",

    "GET api/tv-show/category/<category_id>" => "tv-show/get-all-by-category",
    "GET api/tv-show/<tv_show_id>/relateds" => "tv-show/get-relateds",

    # POST

    "POST api/tv-show/episode/<tv_show_episode_id>/comment" => "tv-show/post-episode-comment",
    "POST api/tv-show/episode/<tv_show_episode_id>/like" => "tv-show/post-episode-like",
    "POST api/tv-show/episode/<tv_show_episode_id>/unlike" => "tv-show/post-episode-unlike",

    # PUT

    "PUT api/tv-show/episode/<tv_show_episode_id>/play-count" => "tv-show/put-episode-play-count",

    # --- Tv Show Episode Category --- #

    # GET

    "GET api/tv-show-category" => "tv-show-category/get-all",
    "GET api/tv-show-category/<tv_show_category_id>" => "tv-show-category/get-one",

    # POST

    "POST api/tv-show-category" => "tv-video-category/post-new",

    # PUT

    "PUT api/tv-show-category/<tv_show_category_id>" => "tv-video-category/put-update",
    
    # DELETE

    "DELETE api/tv-show-category/<tv_show_category_id>" => "tv-video-category/delete-record",

    # --- Video --- #

    # GET

    "GET api/video/category-previews" => "video/get-video-category-previews",
    "GET api/video/<video_id>" => "video/get-one",

    # POST
    "POST api/video/buy" => "video/post-buy",
    "POST api/video/doku-purchase" => "video/post-doku-purchase",
    "POST api/video/buy/status" => "video/post-get-purchase-status",

    "POST api/video/<video_id>/purchase" => "video/post-purchase",
    "POST api/video/<video_id>/watchlist" => "video/post-watchlist",
    "POST api/video/<video_id>/unwatchlist" => "video/post-unwatchlist",

];