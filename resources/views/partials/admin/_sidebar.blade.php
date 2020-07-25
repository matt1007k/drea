<!-- #Begin# Sidebar -->
<aside class="bg-linear-sidebar shadow-lg min-h-screen pb-4">

  <!-- Head -->
  <a href="{{ route('admin.index') }}" class="px-6 py-2 flex items-center">
      <img src="{{ asset('img/drea/logo.png') }}" class="h-12" alt="Logo DREA">
      <div class="font-rubik font-medium text-gray-400 uppercase">Administración</div>
  </a>

  <!-- #Begin# Menu -->
    <ul class="nav-list mt-3">
      
      {{-- <li class="py-3 px-10 w-full hover:bg-white active:bg-white rounded-tr-xl rounded-bl-xl hover:shadow-sm mr-2 {{ setActive('admin.index') }}">
          <a href="{{ route('admin.index') }}" class="text-gray-400 text-sm font-medium flex items-center hover:text-blue-700">
            <i class="eva eva-2x {{ setActiveIcon('admin.index', 'eva-grid', 'eva-grid-outline')}}"></i>
            <span class="ml-2">Tablero de resumen</span>
          </a>
      </li> --}}


      @foreach ($menus as $menu)
        @can($menu['permission_slug'])
          <li class="py-3 px-10 w-full rounded-tr-xl rounded-bl-xl mr-2 {{ setActive($menu['route_name']) }}">
            <a href="{{ route($menu['route_name']) }}" class="text-gray-400 text-sm font-medium flex items-center hover:text-white">
              <i class="eva eva-2x {{ setActiveIcon($menu['route_name'], $menu['icon_active'], $menu['icon_default'])}}"></i>
              <span class="ml-2">{{ $menu['name'] }}</span> 
            </a>
          </li>
        @endcan
      @endforeach
    </ul>
  <!-- #End# Menu -->

</aside>
<!-- #End# Sidebar -->
