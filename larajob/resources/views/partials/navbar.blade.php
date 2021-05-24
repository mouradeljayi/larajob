<header class="flex justify-between items-center py-5 mb-8">
  <div>
    <a href="/">LOGO</a>
  </div>
  <nav>
    <livewire:search />
    <a href="{{ route('jobs.index') }}" class="hover:text-green-500">No missions</a>
    @guest
    <a href="{{ route('login') }}" class="ml-4 hover:text-green-500">Se connectez</a>
    <a href="{{ route('register') }}" class="ml-4 hover:text-green-500">S'enregistrer</a>
    @else
    <a href="{{ route('conversations.index') }}" class="ml-4 hover:text-green-500">Mes Conversations</a>
    <a href="{{ route('home') }}" class="ml-4 hover:text-green-500">Tableau de bord</a>
    <a href="{{ route('logout') }}" class="ml-4 hover:text-green-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnectez</a>
    <form style="display:none" id="logout-form" action="{{ route('logout') }}" method="post">@csrf</form>
    @endguest
  </nav>
</header>
