<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Allan — Portfolio</title>
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
        <div class="kicker">Final-year CS • AI, Backend & Mobile</div>
        <h1 class="hero-name">Allan B Prince</h1>
        <p class="hero-intro">
          I’m a final-year Computer Science student who enjoys building practical AI systems,
          backend services, and mobile apps. I’ve worked on encrypted communication tools,
          AI-powered resume screening, agentic teaching assistants, and image-understanding chatbots.
        </p>
        <div class="cta-row">
          <a class="btn" href="#projects">See projects</a>
          <a class="btn ghost" href="#contact">Contact me</a>
        </div>
      </div>

      <div class="hero-right">
        {{-- replace avatar with your photo --}}
        <img
          src="{{ asset('assets/images/photo.jpeg') }}"
          alt="Allan B Prince"
          class="hero-photo"
        >
        <div class="small-muted">Open to AI, backend & mobile roles</div>
      </div>

      <div class="deco" aria-hidden="true"></div>
    </header>

    <section id="about" class="fade-up">
      <div class="section-title">
        <h2>About</h2>
        <div class="line"></div>
      </div>
      <p style="color:var(--muted);margin-top:12px">
        I’m a Computer Science undergraduate who likes turning ideas into working prototypes.
        My recent work includes building an encrypted TCP chat application, an AI-powered image
        recognition chatbot, an AI-driven resume screening and ranking system, and an agentic
        teaching assistant that uses multi-step reasoning and RAG.
      </p>
      <p style="color:var(--muted);margin-top:8px">
        I’ve interned in AI and software roles, where I worked on LLM/RAG pipelines, local model
        fine-tuning, and mobile app development. I enjoy clean, readable code, and I’m comfortable
        across the stack – from Python and NLP to PHP/Laravel and Flutter.
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
              <span class="tag">Project</span>
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

      <div class="contact-extra">
        <p>You can also reach me here:</p>
        <ul>
          <li><strong>Phone:</strong> +91 78993 05572</li>
          <li><strong>Email:</strong> prince4allan@gmail.com</li>
          <li><strong>GitHub:</strong> <a href="https://github.com/TheAllanB" target="_blank" rel="noreferrer">github.com/TheAllanB</a></li>
          <li><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/theallanb" target="_blank" rel="noreferrer">linkedin.com/in/theallanb</a></li>
        </ul>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; {{ date('Y') }} Allan B Prince — <a href="https://github.com/TheAllanB" style="color:inherit;opacity:.8">GitHub</a></p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
