@extends('template')

@section('body')
<style>
    body {
        background-image: url('/img/Background-About.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: darken;
    }

    .text{
        margin-left: 7em;
        margin-top: 10em;
        margin-right: 60em;
    }

    .about-container {
        width: 100%;
        background-color: #0000005f;
        border-top: 10px solid white;
        font-size: 20px;
        justify-content: 
    }

    .about-us-img {
        max-width: 500px;
        height: auto;
    }

</style>
<div class="about-container vh-100">
    <div id="about" class="container justify-content-center d-flex flex-column mt-5 text-white">
        <h1>About</h1>
        <div>
            <div class="d-flex flex-row">
                <div>
                    <p>
                        In the beginning, we just wanted to create a web-based album to capture our favourite moment around the world, and one day some friends see our website and told us to share our website to the public, and there it goes!
                        You can see our favourite destination, review as your holiday reference to get you the best holiday experience you ever have!
                        We provide you with information and best review to discover places to travel, as well as their local services. You can also give your review and share your thoughts about the places you were traveling, giving other curious traveler your experience about your journey as well.
                        What are you waiting for? Book that trip and have your first last minute get-away with us. For all of your unique travel and stay, we got you covered.
                    </p>
                    <p>
                        Any collaboration, please contact us here: 
                        <ul>
                            <li>Mail us at email@email.com</li>
                            <li>Call us at 088888888888</li>
                        </ul> 
                    </p>
                </div>
                <img class="about-us-img" src="{{url('/img/logo_about_us.png')}}" alt="About us">
            </div>
        </div>
    </div>
</div>
@endsection