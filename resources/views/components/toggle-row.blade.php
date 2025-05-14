 <div {{ $attributes->merge(['class' => 'row align-items-center']) }}>
     <div class="col">
         <h6 class="mb-0">{{ $title }}</h6>
         <p class="card-subtitle text-body-secondary mt-0">{{ $description }}
         </p>
     </div>
     <div class="col-auto">
         <div class="form-check form-switch fs-4">
             <input class="form-check-input" type="checkbox" role="switch" id="{{ $id }}"
                 {{ $checked ? 'checked' : '' }}>
         </div>
     </div>
 </div>
