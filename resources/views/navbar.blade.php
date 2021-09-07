<div class="title">
    <div class="left">
        <a href="{{ url('/') }}"><img
                src="https://cdn4.iconfinder.com/data/icons/childhood-objects-2/128/_leaf_plant_hand_drawn_abstract-117-2-256.png"
                width="70" height="70" /></a>
    </div>
    <div class="right">
        <ul class="menu">
            <li class="item"><a href="{{ url('/') }}">HOME</a></li>
            <li class="item"><a href="{{ url('/about') }}">ABOUT</a></li>
            <li class="item"><a href="#">ACCESSORIES</a>
                <ul>
                    @foreach ($menu_category as $menu)
                    <li><a href="{{ url('/product/category').'/'.$menu->id }}">{{$menu->title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="item" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><a
                    href="#">CONTACT</a></li>
            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h2" id="exampleModalLabel">Contact Us</h5>
                            {{--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>  --}}
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" name="name" class="form-control" id="recipient-name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email:</label>
                                    <input type="text" name="email" class="form-control" id="recipient-email"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" name="message" id="message-text"
                                        required=""></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="close" data-dismiss="menu">&times;</a>
            <li class="item login">
                @if (Route::has('login'))
                <div>
                    @auth
                    <x-app-layout>
                    </x-app-layout>
                    @else
            <li class="item"><a href="{{ route('login') }}" class="text-base text-gray-500"><i class="fa fa-user"
                        aria-hidden="true"></i></a></li>
            @if (Route::has('register'))
            <li class="item"><a href="{{ route('register') }}" class="ml-4 text-base text-gray-500"><i
                        class="fa fa-user-plus" aria-hidden="true"></i></a></li>
            @endif
            @endauth
            @endif
            </li>
        </ul>
        <div class="showburger" onclick="show()"><i class="fa fa-bars fa-3x"></i></div>
    </div>
</div>
