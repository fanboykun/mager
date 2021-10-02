<nav class="side-nav">
    <a href="{{ route('dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
      <img
        alt="Rubick Tailwind HTML Admin Template"
        class="w-6"
        src="http://rubick-laravel.left4code.com/dist/images/logo.svg"
      />
      <span class="hidden xl:block text-white text-lg ml-3">
        Ma<span class="font-medium">ger</span>
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
        <a href="{{ route('timeline') }}" class="side-menu {{ request()->routeIs('timeline') ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon">
            <i data-feather="trello"></i>
            </div>
            <div class="side-menu__title">
            Timeline
            </div>
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
        <a href="{{ route('divisions') }}" class="side-menu {{ request()->routeIs('divisions') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="layers"></i>
          </div>
          <div class="side-menu__title">
            Divisions
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
      <li class="side-nav__devider my-6"></li>
      <li>
        <a href="{{ route('announcements') }}" class="side-menu {{ request()->routeIs('announcements') ? 'side-menu--active' : '' }}">
          <div class="side-menu__icon">
            <i data-feather="wind"></i>
          </div>
          <div class="side-menu__title">
            Annoucements
          </div>
        </a>
      </li>
      <li>
        <a
          href="{{ route('schedules') }}"
          class="side-menu {{ request()->routeIs('schedules') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="calendar"></i>
          </div>
          <div class="side-menu__title">Schedules</div>
        </a>
      </li>
      <li>
        <a
          href="{{ route('projects') }}"
          class="side-menu {{ request()->routeIs('projects') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="target"></i>
          </div>
          <div class="side-menu__title">Projects</div>
        </a>
      </li>
      <li class="side-nav__devider my-6"></li>
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
          href="{{ route('categories') }}"
          class="side-menu {{ request()->routeIs('categories') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="align-left"></i>
          </div>
          <div class="side-menu__title">Categories</div>
        </a>
      </li>
      <li>
        <a
          href="{{ route('tags') }}"
          class="side-menu {{ request()->routeIs('tags') ? 'side-menu--active' : '' }}"
        >
          <div class="side-menu__icon">
            <i data-feather="align-center"></i>
          </div>
          <div class="side-menu__title">Tags</div>
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
      </li>
      <li>
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
