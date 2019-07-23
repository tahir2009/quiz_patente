@extends('layouts.admin.app')
@section('chat_nav', 'active')

@section('title', 'School | Chat')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="recent_chat_log js-tabs">
                            <div class="userdata1">
                                <figure>
                                    <img src=" {{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                    <span class="online"></span>
                                </figure>
                                <div class="user_name1">
                                    <h5>jhone doe</h5>
                                    <span>available</span>
                                </div>
                            </div>
                            <form class="widget-search1 mb30" >
                                <div class="widget-search">
                                    <input type="text" placeholder="search for peoples">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </form>
                            <div class="tabs-section">
                                <div class="js-tabs-nav mb30">
                                    <ul class="tab-button tabs">
                                        <li class="tabs-item current"><a href="#tab-1">new message</a></li>
                                        <li class="tabs-item"><a href="#tab-2">recent chat</a></li>
                                    </ul>
                                </div>
                                <div class="tab-column js-tabs-wrap tabs-content">
                                    <div class="tab js-tabs-content active" id="tab-1">
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="tpl">6</span>
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">3 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="tpl">6</span>
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">3 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="tpl">6</span>
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">3 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="tpl">6</span>
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">3 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab js-tabs-content" id="tab-2">
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="offline"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">2 hour</span>
                                                <p>Uploading products and related detailsCreating Uploading products and related detailsCreating</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">1 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">2 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                        <div class="userdata1">
                                            <figure>
                                                <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                <span class="online"></span>
                                            </figure>
                                            <div class="user_name1">
                                                <h5>jhone doe</h5><span class="active-time">3 hour</span>
                                                <p>Uploading products and related details products and related</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="chat-box">
                            <div class="userdata1 chat-user">
                                <figure>
                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                    <span class="online"></span>
                                </figure>
                                <div class="user_name1">
                                    <h5>jhone doe</h5>
                                    <span>Active Now<sup>|</sup><span>House NYC,United state</span></span>
                                </div>
                            </div>
                            <div class="js-tabs-wrap tabs-content">
                                <div class="chating-blog">
                                    <ul class="scroll1">
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 rtl">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="userdata1 ">
                                                <figure>
                                                    <img src="{{ url(env('ASSET_URL') . 'theme/images/img-user.png') }}" alt="img here">
                                                    <span class="online"></span>
                                                </figure>
                                                <div class="user_name1 boxed1">
                                                    <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p><span class="msg-time">10:33 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="chat-form">
                                <form>
                                    <div class="comment-box">
                                        <div class="upload-btn">
                                            <input id="fileupload" type="file" name="files[]" multiple>
                                            <label for="fileupload" class="btn-at"><i class="fa fa-paperclip" aria-hidden="true"></i></label>
                                        </div>
                                        <div class="write-box">
                                            <input type="text" placeholder="Type Here">
                                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="floating-chat">
        <i class="fa fa-comments" aria-hidden="true"></i>
        <div class="chat">
            <div class="header">
                <span class="title">
                    what's on your mind?
                </span>
                <button>
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <ul class="messages">
                <li class="other">Lorem Ipsum, giving</li>
                <li class="other">as well as a random Lipsum ?</li>
                <li class="self">generator Reference site about</li>
                <li class="other">are you sure???</li>
                <li class="self">yes</li>
                <li class="other">giving information</li>
                <li class="self">Reference site</li>
                <li class="other">Lipsum generator Reference site about</li>
            </ul>
            <div class="footer">
                <div class="text-box" contenteditable="true" disabled="true"></div>
                <button id="sendMessage">send</button>
            </div>
        </div>
    </div>
    @endsection