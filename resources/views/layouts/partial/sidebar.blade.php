<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
      <img
        alt="Rubick Tailwind HTML Admin Template"
        class="w-6"
        src="http://rubick-laravel.left4code.com/dist/images/logo.svg"
      />
      <span class="hidden xl:block text-white text-lg ml-3">
        Ru<span class="font-medium">bick</span>
      </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
      <li>
        <a href="{{ route('dashboard') }}" class="side-menu {{ request()->routeIs('dashboard') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="home"></i>
          </div>
          <div class="side-menu__title">
            Dashboard
          </div>
        </a>
      </li>
      <li>
        <a
          href="{{ route('articles.index') }}"
          class="side-menu {{ request()->routeIs('articles.index') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="file-text"></i>
          </div>
          <div class="side-menu__title">Post</div>
        </a>
      </li>
      <li>
        <a
          href="{{ route('calendar') }}"
          class="side-menu {{ request()->routeIs('calendar') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="calendar"></i>
          </div>
          <div class="side-menu__title">Calendar</div>
        </a>
      </li>
      <li class="side-nav__devider my-6"></li>
      <li>
        <a href="{{ route('personalization') }}" class="side-menu {{ request()->routeIs('personalization') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="edit"></i>
          </div>
          <div class="side-menu__title">
            Personalization
          </div>
        </a>
      </li>
      <li>
        <a href="{{ route('users') }}" class="side-menu {{ request()->routeIs('users') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="users"></i>
          </div>
          <div class="side-menu__title">
            Users
          </div>
        </a>
      </li>
      <li>
        <a href="{{ route('profile') }}" class="side-menu {{ request()->routeIs('profile') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="trello"></i>
          </div>
          <div class="side-menu__title">
            Profile
          </div>
        </a>
      </li>
      <li class="side-nav__devider my-6"></li>
      <li>
        <a href="{{ route('chat') }}" class="side-menu {{ request()->routeIs('chat') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="message-square"></i>
          </div>
          <div class="side-menu__title">
            Chat
          </div>
        </a>
      </li>
      <li>
        <a href="/" class="side-menu">
          <div class="side-menu__icon">
            <i data-feather="box"></i>
          </div>
          <div class="side-menu__title">
            Go To Main Page
          </div>
        </a>
      </li>
      {{-- <li>
        <a
          href="{{ route('chat') }}"
          class="menu menu--active {{ request()->routeIs('chat') ? 'side-menu--active' : '' }}"
        >
          <div class="menu__icon">
            <i data-feather="message-square"></i>
          </div>
          <div class="menu__title">Chat</div>
        </a>
      </li> --}}
      {{-- <li>
        <a
        href="{{ route('chat') }}"
        class="menu menu--active {{ request()->routeIs('chat') ? 'side-menu--active' : '' }}
        >
          <div class="side-menu__icon">
            <i data-feather="message-square"></i>
          </div>
          <div class="side-menu__title">Chat</div>
        </a>
      </li> --}}
    </ul>
  </nav>
