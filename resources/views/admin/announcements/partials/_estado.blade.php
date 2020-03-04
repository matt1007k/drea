@if($announcement->estado == 'en proceso')
<span class="rounded px-3 py-1 bg-success text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'finalizado')
<span class="rounded px-3 py-1 bg-info text-white text-capitalize">{{ $announcement->estado }}</span>
@elseif($announcement->estado == 'desierto')
<span class="rounded px-3 py-1 bg-warning text-white text-capitalize">{{ $announcement->estado }}</span>
@else
<span class="rounded px-3 py-1 bg-danger text-white text-capitalize">{{ $announcement->estado }}</span>
@endif