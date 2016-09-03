@if(isset($comments->comments))
<li>
    <div class='direct-chat-msg left'>
        <div class='direct-chat-text comments'>
            {{ $comments->comments }}
            <span style='float:right;'>
                {{ $comments->likes }} <a href='#' data-commentid='{{ $comments->id }}' class='likeComments' style='z-index:-9999;'><i class='fa fa-thumbs-up '></i></a>
            </span>
        </div>
    </div>
</li>

@else
<li><div class='direct-chat-msg left'><div class='direct-chat-text comments'>{{$comments }}<span style='float:right;'>0 <i class='fa fa-thumbs-up '></i></span></div></div></li>@endif