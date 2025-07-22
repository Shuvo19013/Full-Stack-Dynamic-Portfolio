<header>
    <div class="logo"><i>Shuvo</i></div>
    <div class="hamburger" id="menu-toggle">
        <span></span><span></span><span></span>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#About">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#Skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ asset('assets/Shuvo_Resume.pdf') }}" download class="resume-btn">Resume</a></li>

            <li>
                <button id="darkModeToggle" class="dark-toggle">🌙</button>
            </li>

        </ul>
    </nav>
</header>

<section id="hero" class="section hero">
    <div class="hero-container">
        <div class="hero-text">
            <h5>WELCOME TO MY PORTFOLIO</h5>
            <h1>Hi, I'm <span class="highlight">Hossain Mohammad Shuvo</span><br><span class="typed-text"></span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, provident.</p><br>
            <h2>Find Me</h2>
            <div class="social-buttons">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://github.com/Shuvo19013" target="_blank">GitHub</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/profile.jpg') }}" alt="Shuvo">
        </div>
    </div>
</section>
