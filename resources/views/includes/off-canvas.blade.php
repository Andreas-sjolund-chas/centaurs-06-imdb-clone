<!-- USER MENU/SETTINGS -->
<div id="offcanvas-full-screen" class="offcanvas-full-screen" data-off-canvas="off-canvas-content" data-transition="overlap" data-content-overlay="false">
    <div class="offcanvas-full-screen-inner">
        <!-- Content off Mobile-menu -->
        <div id="menu" class="row menu">
            <div class="small-12 flex-align-c-c">
                <img src="{{ asset('img/Logo.svg') }}" alt="IMDb Logo" class="logo">
            </div>            
            <!-- Sign in -->
            <div class="small-12 flex-align-fd-c">
                <form class="small-12" id="sign-in-f" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <div class="small-12 btn">
                        <button type="submit" class="submit">Sign in</button>
                    </div>
                    <!-- Forgot password -->
                    <div class="col-md-8 col-md-offset-4">
                        <p id="forgot-pwd" data-toggle="password-form">Forgot Your Password?</p>
                    </div>
                </form>
                <!-- Reset password link by email -->
                <form id="password-form" class="small-12" method="POST" action="{{ route('password.email') }}" data-toggler=".visible" data-animate="fade-in fade-out">
                    {{ csrf_field() }}    
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    <div class="small-12 btn reset-pwd-btn">
                        <button type="submit" class="reset-pwd">Send Password Reset Link</button>        
                    </div>               
                </form>
                <!-- Register new user -->
                <form class="small-12" id="sign-up-f" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    <div class="small-12 btn">
                        <button type="submit" class="submit">Create Account</button>
                    </div>
                </form>
            </div>
            <div id="mobile-btn-wrap" class="mobile-btn-wrap">
                <h2 id="sign-in">Sign In</h2>
                <h2 id="sign-up">Create your account</h2>
            </div>
            <div id="mobile-btn-back" class="mobile-btn-back">
                <i class="fa fa-undo" aria-hidden="true"></i>
            </div>
        </div>
        <div id="mobile-btn-quit" class="mobile-btn-quit" data-close>
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    </div>
</div>

<!-- ABOUT DEVS -->
<div id="offcanvas-full-members" class="offcanvas-full-members" data-off-canvas data-transition="overlap" data-content-overlay="false">
    <div class="fullscreen-container">
        <!-- Head of About Devs -->
        <div class="small-12 head">
            <h1>Developers</h1>
            <p>Click the name for more information</p>
        </div>
        <!-- The list of Devs -->
        <div class="small-12 list">
            <ul>
                <li><a href="#victor">Victor Ciavarella</a></li>
                <li><a href="#andreas">Andreas Sjölund</a></li>
                <li><a href="#patryk">Patryk Rybaczek</a></li>
                <li><a href="#ida">Ida Englund</a></li>
                <li><a href="#laya">Laya Sadegh</a></li>
                <li><a href="#pontus">Pontus Sarland</a></li>
                <li><a href="#eleonor">Eleonor Bergqvist</a></li>
            </ul>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="victor">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Victor Ciavarella</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Godfather</p>
            <h2>Favorite Quote</h2>
            <p>First make it work, then make it pretty</p>
            <h2>Favorite Short Command</h2>
            <p>CMD + Z</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/Ciavarella">Ciavarella</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="andreas">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Andreas Sjölund</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Pulp Fiction</p>
            <h2>Favorite Quote</h2>
            <p>"No man, they got the metric system. They wouldn't know what the fuck a Quarter Pounder is"</p>
            <h2>Favorite Short Command</h2>
            <p>CMD + A DEL</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/Andreas-sjolund-chas">Andreas-sjolund-chas</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="patryk">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Patryk Rybaczek</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Menace II Society</p>
            <h2>Favorite Quote</h2>
            <p>"I don't care, let's use jQuery"</p>
            <h2>Favorite Short Command</h2>
            <p>ALT + TAB</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/patryk7rybaczek">patryk7rybaczek</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="ida">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Ida Englund</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Remember the titans</p>
            <h2>Favorite Quote</h2>
            <p>"The question is not, can they reason?, nor can they talk? but, can they suffer?"</p>
            <h2>Favorite Short Command</h2>
            <p>CMD + Z</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/idaenglund">idaenglund</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="laya">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Laya Sadegh</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Le fabuleux destin d’Amélie Poulain</p>
            <h2>Favorite Quote</h2>
            <p>"Insanity: doing the same thing over and over again and expecting different results."</p>
            <h2>Favorite Short Command</h2>
            <p>CMD + Z</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/lalaya">lalaya</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="pontus">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Pontus Sarland</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Inception</p>
            <h2>Favorite Quote</h2>
            <p>"Don't you want to take a leap of faith? Or become an old man, filled with regret, waiting to die alone!"</p>
            <h2>Favorite Short Command</h2>
            <p>CTRL + V</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/PontusSarland88">PontusSarland88</a>
        </div>
    </div>

    <!-- About the Dev -->
    <div class="small-12 about-container" id="eleonor">
        <div class="small-12 head">
            <i class="fa fa-user-circle-o personal" aria-hidden="true"></i>
            <h2>Eleonor Bergqvist</h2>
            <p>Web Developer</p>
        </div>
        <div class="small-12 info">
            <h2>Favorite Movie</h2>
            <p>Forrest Gump</p>
            <h2>Favorite Quote</h2>
            <p>"Life isn't about finding yourself. Life is about creating yourself"</p>
            <h2>Favorite Short Command</h2>
            <p>CMD + S</p>
        </div>
        <div class="small-12 git">
            <i class="fa fa-github" aria-hidden="true"></i>
            <a href="https://github.com/eleonorbergvist">eleonorbergvist</a>
        </div>
    </div>
    <div class="mobile-btn-quit" data-close>
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
</div>