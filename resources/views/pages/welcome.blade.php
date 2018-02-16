@extends('main')

@section('title', '| homepage')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Square Space blogs</h1>
            <p class="lead">thankyou for visiting my blogs</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            <img src="{{ asset('/images/home/blogs.jpg') }}" height="200" width="400" style="float: right;margin-top: -203px;"/>
            <br><br>
            <iframe width="320" height="150"  
                src="https://www.youtube.com/embed/mcixldqDIEQ?autoplay=1">
            </iframe>
            
            <iframe width="320" height="150" class="videos"
                src="https://www.youtube.com/embed/Ce4tYw6IE70?autoplay=1">
            </iframe>
            
            <iframe width="320" height="150" class="videos"
                src="https://www.youtube.com/embed/3rHXrA80NH4?autoplay=1">
            </iframe>

        </div>

    </div>
</div><!-- end of header row -->

<div class="row">
    <div class="col-md-8">

        @foreach($posts as $post)

        <div class="col-md-9 post">

            <h3>{{ $post->title }}</h3>
            <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}x</p>

            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary lazy1">Read More</a>

        </div>
        <div class="col-md-3">

            <img src="{{ asset('/images/' . $post->image) }}" height="100" width="100" class="lazy1" style="margin-top: 40px "/>
        </div>
        <hr>


        @endforeach

    </div>


    <div class="col-md-4 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                        </span>Blog Categories</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        @foreach($categories as $category)

                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-file text-primary"></span><a href="{{ url('blog/'.$category->id) }}">{{ $category->name }}</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="wysija-4" class="vlog-highlight widget widget_wysija">
            <h4 class="widget-title h5"><span>Newsletter</span></h4>
            <div class="widget_wysija_cont"><div id="msg-form-wysija-4" class="wysija-msg ajax"></div>
                <!--<form id="form-wysija-4" method="post" action="#wysija" class="widget_wysija">-->

                Stay ahead of the game. Subscribe to our FREE newsletter now!
                <p class="wysija-paragraph">

                    <input type="text" class="" title="Your email address" placeholder="Your email address" value="" style="background-color: black;">
                </p>
                <input class="wysija-submit wysija-submit-field" type="submit" value="Subscribe!">
                <!--</form>-->
            </div>
        </div>
        <!--image type for blogs-->
        <a href="http://127.0.0.1:8000/posts"><img src="{{ asset('/images/home/images_logo.png') }}"  style="width:360px; height:250px;;border: 1px solid;" width="300" height="250"></a><br><br>

        <!--submit post-->

        <div id="text-4" class="widget widget_text"><h1 class="widget-title h5"><span>Submit your posts</span></h1>			
            <div class="textwidget"><p>Would you like to share your creativity with the world? Submit your posts by clicking on the button below.</p>
                <p><a class="mks_button mks_button_small squared" href="http://127.0.0.1:8000/posts/create" target="_self" style="color: #FFFFFF; background-color: #9b59b6">Submit your Post</a></p>
            </div>
        </div>



    </div>
</div>


<style>
    .videos{margin-left: 18px;}
    .h5{ font-size: 24px;}
    .glyphicon { margin-right:10px; }
    .panel-body { padding:0px; }
    .panel-body table tr td { padding-left: 15px }
    .panel-body .table { margin-bottom: 0px; }



    .vlog-highlight {
        background: #34495e;
        color: #ffffff;
        border: none;
    }

    .widget_wysija_cont .wysija-submit {
        display: block;
        margin-top: 20px;
        box-shadow: 0 3px 8px 0 rgba(0,0,0,.3);

    }



    element.style {
    }
    /*b199f97….css:25*/
    input[type=number], input[type=text], input[type=email], input[type=url], input[type=tel], input[type=date], input[type=password], select, textarea, .widget, .vlog-comments, .comment-list, .comment .comment-respond, .widget .vlog-search-form input[type=text], .vlog-content .vlog-prev-next-nav, .vlog-wl-action, .vlog-mod-desc .vlog-search-form, .entry-content table, .entry-content td, .entry-content th, .entry-content-single table, .entry-content-single td, .entry-content-single th, .vlog-comments table, .vlog-comments td, .vlog-comments th {
        border-color: rgba(17,17,17,0.1);
    }
    /*b199f97….css:25*/
    .vlog-highlight {
        background: #34495e;
        color: #ffffff;
        border: none;
    }

    /*b199f97….css:25*/
    .widget {
        border: 1px solid rgba(17,17,17,.1);
        margin-bottom: 36px;
        padding: 25px 30px 30px;
    }
    /*b199f97….css:25*/
    *, :after, :before {
        box-sizing: border-box;
    }
    /*b199f97….css:25*/
    *, .mfp-container, :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    user agent stylesheet
    div {
        display: block;
    }
    Inherited from div.vlog-sidebar.vlog-sidebar-right
    /*b199f97….css:25*/
    .vlog-sidebar {
        font-size: 14px;
        line-height: 22px;
    }
    Inherited from body.home.page-template.page-template-template-modules.page-template-template-modules-php.page.page-id-4.chrome.vlog-sticky-header-on
    /*b199f97….css:25*/
    body, #cancel-comment-reply-link, .vlog-wl-action .vlog-button {
        color: #111111;
        font-family: 'Lato';
        font-weight: 400;
    }
    /*b199f97….css:25*/
    body {
        font-size: 16px;
        line-height: 26px;
        -ms-word-wrap: break-word;
        word-wrap: break-word;
    }
    /*b199f97….css:25*/
    body, html {
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }
    Inherited from html.js.no-touch.cssanimations.csstransitions
    /*b199f97….css:25*/
    body, html {
        height: 100%;
        -webkit-font-smoothing: antialiased;
    }
    /*b199f97….css:25*/
    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    /*b199f97….css:25*/
    .mfp-arrow, .owl-carousel, .owl-carousel .owl-item, html {
        -webkit-tap-highlight-color: transparent;
    }
    Pseudo ::before element
    /*b199f97….css:25*/
    *, :after, :before {
        box-sizing: border-box;
    }
    /*b199f97….css:25*/
    *, .mfp-container, :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    Pseudo ::after element
    /*b199f97….css:25*/
    *, :after, :before {
        box-sizing: border-box;
    }
    /*b199f97….css:25*/
    *, .mfp-container, :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }


    .vlog-button, input[type="submit"], .wpcf7-submit, input[type="button"] {
        background-color: #9b59b6;
    }
    /*b199f97….css:25*/
    .mks_author_link, .mks_read_more a, .vlog-button, .vlog-load-more a, .vlog-pagination .vlog-next a, .vlog-pagination .vlog-prev a, .wpcf7-submit, a.mks_button, input[type=button], input[type=submit] {
        font-size: 12px;
        padding: 14px 27px;
        text-align: center;
        display: inline-block;
        text-transform: uppercase;
        color: #fff;
        border: none;
        line-height: 1;
    }



</style>
@endsection
