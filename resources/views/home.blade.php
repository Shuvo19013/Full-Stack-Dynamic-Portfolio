@extends('layouts.app')

@section('title', 'Shuvo Portfolio')

@section('content')

<header>
    <div class="logo"><i>Shuvo</i></div>
    <div class="hamburger" id="menu-toggle">
        <span></span><span></span><span></span>
    </div>
    <nav id="navbar">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#About">About Me</a></li>
            <li><a href="#portfolio">My Works</a></li>
            <li><a href="#Skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ asset('assets/Shuvo_Resume.pdf') }}" download class="resume-btn">Resume</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
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

<hr>

<!-- Rest of the sections: About, Portfolio, Skills, Contact -->

  <!-- About Me -->
  <section id="About" class="section">
    <div class="section-header">
      <h2 class="head">About Me</h2>
    </div>
    <div class="about-container">
      <div class="about-image">
        <img src="{{ asset('assets/profile1.jpg') }}" alt="Shuvo">
      </div>
      <div class="about-text">
        <p>I am a passionate developer focused on crafting quality user experiences across web and mobile platforms. Currently pursuing BSc in Computer Science.</p><br><br>
        <h3>Education :</h3>
        <div class="education-box">
          <ul class="education-list">
            <li><strong>2022 - Ongoing:</strong> BSc in Computer Science & Engineering<br>Daffodil International University</li>
            <li><strong>2019:</strong> HSC, alamgir monsur mintu memorial college</li>
            <li><strong>2017:</strong> SSC, Dhala High School and College</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  

{{-- Portfolio --}}
<section id="portfolio" class="section">
    <div class="section-header">
        <h2 class="head">My Works</h2>
        <p>Visit my portfolio and keep your feedback</p>
    </div>
    <div class="cards-container portfolio-grid">
        @foreach (['E-com Project', 'Lost & Found', 'Portfolio Website', 'Task Manager App'] as $project)
            <div class="card">
                <img src="{{ asset('assets/p.png') }}" alt="Shuvo">
                <h3>{{ $project }}</h3>
                <div class="github-btn-wrapper">
                    <a href="https://github.com/yourusername/{{ strtolower(str_replace(' ', '-', $project)) }}" class="github-btn" target="_blank">View on GitHub</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- Skills --}}
<section id="Skills" class="section">
    <div class="section-header">
        <h2 class="head">Skills</h2>
    </div>
    <div class="cards-container">
        <div class="card skill-card"><h3>Web Development</h3><p>HTML, CSS, JS, Laravel, Blade</p></div>
        <div class="card skill-card"><h3>Python | C++ | C</h3><p>Competitive programming and software development</p></div>
        <div class="card skill-card"><h3>ML & DL</h3><p>Working with TensorFlow, sklearn, and research projects</p></div>
        <div class="card skill-card"><h3>Artificial Intelligence</h3><p>AI concepts, game playing agents, logic-based agents</p></div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="section">
    <div class="section-header">
        <h2 class="head">Contact With Me</h2>
    </div>
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-box">
                <p><strong>Email:</strong><br>shuvo@example.com</p>
            </div>
            <div class="contact-box">
                <p><strong>Phone:</strong><br>+880 1737611605</p>
            </div>
            <div class="contact-box">
                <p><strong>Location:</strong><br>YKSG2, Daffodil International University</p>
            </div>
        </div>
        <form class="contact-form">
        <input type="text" placeholder="Your Name" value="shuvo" required />
        <input type="text" placeholder="Phone Number" required />
        <input type="email" placeholder="Email" required />
        <input type="text" placeholder="Subject" required />
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
</section>

<footer class="footer">
    <p>© 2025. All rights reserved by Shuvo.</p>
</footer>

@endsection
