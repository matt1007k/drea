@if($announcement->estado == 'en proceso')
<span class="rounded px-3 py-2 bg-green-600 text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'finalizado')
<span class="rounded px-3 py-2 bg-teal-600 text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'desierto')
<span class="rounded px-3 py-2 bg-orange-600 text-white text-capitalize">{{ $announcement->estado }}</span>
@else
<span class="rounded px-3 py-2 bg-red-600 text-white text-capitalize">{{ $announcement->estado }}</span>
@endif