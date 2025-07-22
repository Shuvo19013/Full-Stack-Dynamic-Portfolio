<section id="projects" class="section">

    <div class="section-header">
        <h2 class="head">Projects</h2>
        <p>Visit my Projects and keep your feedback</p>
    </div>
    <div class="cards-container projects-grid">
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
