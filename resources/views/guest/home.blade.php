@extends('layout.master')
@section('content')
<!-- home page  -->
    <div class="home-container">
        @if(Auth::id())
        <div>
            <input type="text">
        </div>
        <div>
            <button>Discover</button>
            <button>following</button>
        </div>
        @else
        <div>
            <button>Relevant</button>
            <button>latest</button>
            <button>top</button>
        </div>
        @endif
        <div class="post">
            <img src="" alt="post-img">
            <div>
                <img src="" alt="user-image">
                <div>
                    <p>name</p>
                    <p>post date</p>
                </div>
            </div>
            <h1>post title</h1>
            <ul>
                <li>#tags</li>
                <li>#tags</li>
                <li>#tags</li>
                <li>#tags</li>
            </ul>
            <div>
                <ul>
                    <li></li>
                    <li></li>
                </ul>
                <ul>
                    <li>read time</li>
                    <li><button>save</button></li>
                </ul>
            </div>
        </div>
        
    </div>
    

@endsection