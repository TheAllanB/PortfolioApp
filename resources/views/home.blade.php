<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Allan's — Portfolio</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
  <div class="topbar">
    <nav class="topnav container">
      <a href="#about">About</a>
      <a href="#experience">Experience</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>

  <main class="site container">
    <header class="hero-card fade-up">
      <div class="hero-left">
        <div class="kicker">Final-year CS • Web & Backend</div>
        <h1 class="hero-name">Allan B Prince</h1>
        <p class="hero-intro">
          I build full-stack web apps, simple ML tools and elegant UIs. I love clean code and practical projects.
        </p>
        <div class="cta-row">
          <a class="btn" href="#projects">See projects</a>
          <a class="btn ghost" href="#contact">Contact me</a>
        </div>
      </div>

      <div class="hero-right">
        <div class="avatar">YN</div>
        <div class="small-muted">Available for internships & freelance</div>
      </div>

      <div class="deco" aria-hidden="true"></div>
    </header>

    <section id="about" class="fade-up">
      <div class="section-title">
        <h2>About</h2>
        <div class="line"></div>
      </div>
      <p style="color:var(--muted);margin-top:12px">
        Short intro about yourself — skills, technologies, what you’re looking for.
      </p>
    </section>

    <section id="experience" class="fade-up">
      <div class="section-title">
        <h2>Experience</h2>
        <div class="line"></div>
      </div>

      <div class="experience-list">
        @foreach($experience as $exp)
          <article class="exp-item">
            <div class="exp-header">
              <h3>{{ $exp['role'] }}</h3>
              <span class="exp-period">{{ $exp['period'] }}</span>
            </div>
            <div class="exp-sub">
              <span class="exp-company">{{ $exp['company'] }}</span>
              @if(!empty($exp['location']))
                <span class="exp-dot">•</span>
                <span class="exp-location">{{ $exp['location'] }}</span>
              @endif
            </div>
            <p class="exp-desc">
              {{ $exp['desc'] }}
            </p>
          </article>
        @endforeach
      </div>
    </section>

    <section id="projects" class="fade-up">
      <div class="section-title">
        <h2>Projects</h2>
        <div class="line"></div>
      </div>

      <div class="grid projects-grid">
        @foreach($projects as $p)
          <article class="card fade-up">
            <h3>{{ $p['title'] }}</h3>
            <p>{{ $p['desc'] }}</p>
            <div class="meta">
              <span class="tag">Web</span>
              <a class="btn small" href="{{ $p['link'] }}">View</a>
            </div>
          </article>
        @endforeach
      </div>
    </section>

    <section id="contact" class="fade-up" style="margin-bottom:40px">
      <div class="section-title">
        <h2>Contact</h2>
        <div class="line"></div>
      </div>

      <div class="form" style="margin-top:12px">
        <form method="post" action="#">
          @csrf
          <label>Name<input name="name" required /></label>
          <label>Email<input name="email" type="email" required /></label>
          <label>Message<textarea name="message" rows="5" required></textarea></label>
          <button type="submit">Send</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} Your Name — <a href="https://github.com/yourusername" style="color:inherit;opacity:.8">GitHub</a></p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>