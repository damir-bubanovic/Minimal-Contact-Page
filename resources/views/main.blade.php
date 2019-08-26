{{-- Container --}}
<div class="container-fluid">

    {{-- Flexbox-Enabled --}}
    <div class="d-flex p-2 bd-highlight">

        {{-- Header --}}
        <header class="fixed-top">
            <p class="text-right"><i>Powered by</i>: <strong><a href="https://www.sublimetext.com/" target="_blank">Sublime Text</a></strong></p>
        </header>

        {{-- Content --}}
        <div class="row d-flex align-content-center flex-wrap flex-fill">
            <div class="col-lg-6 col-md-6 col-sm-6">
                {{-- Profile --}}
                <ul class="list-unstyled profile-name-surname text-right">
                    <li><a href="/"><img class="profile-mug" src="{{ asset('img/profile.jpg') }}" alt="Profile Photo"></a></li>
                    <li><h1>Name</h1></li>
                    <li><h1>Surname</h1></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                {{-- Important Link List --}}
                <ul class="list-unstyled content-top">
                    <li><img src="{{ asset('img/check.svg') }}" alt="check" align="left" class="icons-feather"><h4>Something</h3></li>
                    <li><img src="{{ asset('img/check.svg') }}" alt="check" align="left" class="icons-feather"><h4>Something</h3></li>
                    <li><img src="{{ asset('img/check.svg') }}" alt="check" align="left" class="icons-feather"><h4>Something</h3></li>
                    <hr>
                    <li class="logo-link"><img src="{{ asset('img/mail.svg') }}" alt="email" align="left" class="icons-feather"><a href="mailto:email@gmail.com"><img src="{{ asset('img/yahoo-logo.svg') }}" alt="Yahoo Link"></a></li>
                    <li class="logo-link"><img src="{{ asset('img/database.svg') }}" alt="email" align="left" class="icons-feather"><a href="https://github.com" target="_blank"><img src="{{ asset('img/github-logo.svg') }}" alt="Github Link"></a></li>
                    <li class="logo-link"><img src="{{ asset('img/database.svg') }}" alt="database" align="left" class="icons-feather"><a href="https://stackoverflow.com" target="_blank"><img src="{{ asset('img/so-logo.svg') }}" alt="Stack Overflow Link"></a></li>
                </ul>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="fixed-bottom">
            <p class="text-left">&copy; Copyright 2019 <strong><a href="mailto:email@gmail.com">email@gmail.com</a></strong></p>
        </footer>
        
    </div> {{-- End-Flexbox --}}

</div> {{-- End-Container --}}
