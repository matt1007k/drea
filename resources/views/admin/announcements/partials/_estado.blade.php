@if($announcement->estado == 'en proceso')
<span
  class="rounded px-3 py-1 bg-success bg-green-500 text-sm text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'finalizado')
<span
  class="rounded px-3 py-1 bg-info bg-blue-500 text-lg text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'desierto')
<span
  class="rounded px-3 py-1 bg-warning bg-yellow-500 text-lg text-white text-capitalize">{{ $announcement->estado }}</span>
@else
<span
  class="rounded px-3 py-1 bg-danger bg-red-500 text-lg text-white text-capitalize">{{ $announcement->estado }}</span>
@endif