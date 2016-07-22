@extends('layouts.default')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class='col-md-offset-1 col-md-9'>
            <div class="row">
                @for($i=0;$i<4;$i++)
                <?php $chunkedComments = $comments->chunk(4); ?>
                <div class="col-md-3">
                    @foreach($chunkedComments[$i] as $oneComments)
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-text">
                            {{ $oneComments->comments }}
                            <span style="float:right;" class="text-green">
                                {{ $oneComments->likes }} <i class="fa fa-thumbs-up "></i>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endfor
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    <div class="input-group input-group-lg">
                                        <input class="form-control" type="text" placeholder="Bertit qka dush ti, thuj qka dush ti..."></input>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-teal btn-flat">Posto!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @foreach($comments as $oneComments)
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    {{ $oneComments->comments }}
                                    <span style="float:right;">

                                        {{ $oneComments->likes }} <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;" class="text-green">
                                        31 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="direct-chat-msg left">
                                <div class="direct-chat-text">
                                    Ballotelli Benteke Sturridge
                                    Mane Firmino Coutinho Wijnaldum
                                    Lovren Sakho Matip
                                    Karius
                                    <span style="float:right;">
                                        5555 <i class="fa fa-thumbs-up "></i>
                                    </span>
                                </div>
                            </div>
                        </li>


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