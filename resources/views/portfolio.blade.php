@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════
     HERO
═══════════════════════════════════════ --}}
<section id="hero">
  <div class="hero-left">

    <div class="hero-tag">
      @if($available)
        <span class="avail-dot"></span> Available for work
      @else
        Currently unavailable
      @endif
    </div>

    <h1>Full Stack<br><em>Web Dev</em><br>— Based in<br>Dhaka.</h1>

    <p class="hero-desc">{{ $summary }}</p>

    <div class="hero-cta">
      <a href="#projects" class="btn-primary">
        View Work
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="#contact" class="btn-secondary">
        Get in touch
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>

  </div>

  <div class="hero-right">
    <div class="photo-wrap">
      <div class="photo-glow"></div>
      <img src="{{ asset('images/profile.jpg') }}" alt="{{ $name }}" />
    </div>
    <div class="photo-badge">
      <div class="photo-badge-title">
        <span class="avail-dot"></span> {{ $name }}
      </div>
      <div class="photo-badge-sub">{{ $role }} · Dhaka</div>
    </div>
  </div>
</section>

<div class="divider"></div>

{{-- ═══════════════════════════════════════
     SKILLS
═══════════════════════════════════════ --}}
<section id="skills">
  <div class="section-label reveal">Technical Expertise</div>
  <h2 class="reveal reveal-delay-1">Built with the<br><em>right tools.</em></h2>

  <div class="skills-grid">
    @foreach($skills as $i => $skill)
    <div class="skill-card reveal" style="transition-delay: {{ $i * 0.08 }}s">
      <span class="skill-icon">{{ $skill['icon'] }}</span>
      <div class="skill-category">{{ $skill['category'] }}</div>
      <div class="skill-items">
        @foreach($skill['items'] as $item)
          {{ $item }}<br>
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</section>

<div class="divider"></div>

{{-- ═══════════════════════════════════════
     PROJECTS
═══════════════════════════════════════ --}}
<section id="projects">
  <div class="section-label reveal">Selected Work</div>
  <h2 class="reveal reveal-delay-1">Things I've<br><em>built.</em></h2>

  <div class="projects-grid">
    @foreach($projects as $i => $project)
      @if($project['featured'])
      <div class="project-card featured reveal">
        <div class="project-info">
          <div class="project-number">{{ $project['number'] }} — Featured</div>
          <h3 class="project-title">{{ $project['title'] }}</h3>
          <p class="project-desc">{{ $project['desc'] }}</p>
          <div class="project-tags">
            @foreach($project['tags'] as $tag)
              <span class="tag">{{ $tag }}</span>
            @endforeach
          </div>
        </div>
        <div class="project-visual {{ $project['color'] }}">{{ $project['emoji'] }}</div>
      </div>
      @else
      <div class="project-card reveal" style="transition-delay: {{ ($i - 1) * 0.1 }}s">
        <div class="project-visual {{ $project['color'] }}">{{ $project['emoji'] }}</div>
        <div class="project-number" style="margin-top:24px;">{{ $project['number'] }}</div>
        <h3 class="project-title">{{ $project['title'] }}</h3>
        <p class="project-desc">{{ $project['desc'] }}</p>
        <div class="project-tags">
          @foreach($project['tags'] as $tag)
            <span class="tag">{{ $tag }}</span>
          @endforeach
        </div>
      </div>
      @endif
    @endforeach
  </div>
</section>

{{-- ═══════════════════════════════════════
     ABOUT (dark)
═══════════════════════════════════════ --}}
<section id="about">
  <div class="section-label reveal">About Me</div>
  <div class="about-grid">

    <div class="about-text">
      <h2 class="reveal">Crafting the web,<br><em>one layer at a time.</em></h2>
      <p class="reveal reveal-delay-1">
        I'm {{ $name }} — a Full Stack Web Developer with a B.Sc. in Computer Science
        from {{ $education['university'] }}, graduated {{ $education['year'] }}.
      </p>
      <p class="reveal reveal-delay-2">
        I work across the full stack — from designing clean interfaces with Vue.js and Tailwind
        to building robust backends with Laravel and MySQL. I care deeply about both the
        experience a user feels and the code quality underneath.
      </p>
      <p class="reveal reveal-delay-2">
        Based in {{ $location }}. Open to freelance, full-time, and remote opportunities.
      </p>
    </div>

    <div class="about-stats reveal reveal-delay-1">
      @foreach($stats as $stat)
      <div class="stat-box">
        <div class="stat-num">{{ $stat['num'] }}</div>
        <div class="stat-label">{{ $stat['label'] }}</div>
      </div>
      @endforeach
    </div>

  </div>
</section>

{{-- ═══════════════════════════════════════
     CONTACT
═══════════════════════════════════════ --}}
<section id="contact">

  <div class="contact-eyebrow reveal">Let's talk</div>
  <h2 class="reveal reveal-delay-1">Got a project<br>in <em>mind?</em></h2>
  <p class="contact-sub reveal reveal-delay-2">
    Whether it's a new web app, a WordPress site, or a collaboration — I'm open to interesting work.
  </p>

  {{-- Email Card --}}
  <div class="contact-email-card reveal reveal-delay-2">
    <div class="contact-email-label">Drop me an email</div>
    <a href="mailto:{{ $email }}" class="contact-email-address">{{ $email }}</a>
  </div>

  <div class="contact-links">
    <a href="{{ $github }}" target="_blank" rel="noopener" class="contact-link outline">GitHub</a>
    <a href="{{ $linkedin }}" target="_blank" rel="noopener" class="contact-link outline">LinkedIn</a>
    <a href="tel:{{ $phone }}" class="contact-link outline">{{ $phone }}</a>
  </div>
</section>

@endsection
