 <div {{ $attributes->merge(['class' => 'd-flex justify-content-between align-items-center ']) }}>
     {{ $slot }}
     <div class="badge rounded-pill bg-{{ $statusColor }} bg-{{ $statusColor }}-subtle">
         <span class="text-{{ $statusColor }}">
             {{ $statusText }}
         </span>
     </div>

 </div>
