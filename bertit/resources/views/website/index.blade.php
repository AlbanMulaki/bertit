@extends('layouts.default')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class='col-md-offset-1 col-md-9'>
            <div class="row">
                @for($i=0;$i<4;$i++)
                <?php 
                $chunkedComments = $comments->random(4);
                ?>
                <div class="col-md-3">
                    @foreach($chunkedComments as $oneComments)
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-text">
                            {{ $oneComments->first()->comments }}
                            <span style="float:right;" class="text-green">
                               <i class="fa fa-thumbs-up "></i>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endfor
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline" id='latestComments'>
                        <li>
                            <form action="{{ action('WebsiteController@postComments') }}" method="POST">
                                <div class="direct-chat-msg left">
                                    <div class="direct-chat-text">
                                        <div class="input-group input-group-lg">
                                            <input class="form-control" type="text" name="comments" id="comments" placeholder="Bertit qka dush ti, thuj qka dush ti..."></input>
                                            <span class="input-group-btn">
                                                <button type="button" id="postComments" class="btn btn-teal btn-flat">Posto!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </li>

                        @foreach($comments as $oneComments)
                        @include('website.partials.comments',['comments'=>$oneComments])
                        @endforeach



                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <div class='col-md-2'>
            <br><br> 
            <img src='/assets/img/right-side-banner_en.jpg' class='img-responsive' />
        </div>
    </div>
</div>
@stop

@section('scripts')

<script>
    $('#postComments').click(function () {
        var comments = $('#comments').val();
        var structure = $('#latestComments li:nth-child(2)');
        var commentsTemplate = "<li><div class='direct-chat-msg left'><div class='direct-chat-text comments'>" + comments + "<span style='float:right;'>0 <i class='fa fa-thumbs-up '></i></span></div></div></li>";
        structure.before(commentsTemplate);

        $.ajax({
            url: '{{ action('WebsiteController@postComments')}}',
            method: 'POST',
            data: {comments: comments}
        }).done(function (data) {
            console.log(data);
        });
    });
    $('.likeComments').click(function () {
        var comments = $(this).data('commentid');
        var like = $(this);
        $.ajax({
        url: '{{ action('WebsiteController@postUpLikes')}}',
                method: 'POST',
                data: {
                    commentId: comments
                }
    }).done(function (data) {
        like.addClass('text-green');
        like.find('i').animate({
                opacity: 0.25,
                fontSize: "24px",
                left: "+=50",
                height: "toggle"
        }, 1000, function () {
            // Animation complete.
        });
    });
    });
</script>
@stop