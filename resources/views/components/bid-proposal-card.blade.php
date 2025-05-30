 <div class="card shadow-sm mt-3">
     <div class="card-body">
         <div class="d-flex justify-content-between align-items-center">
             <h5 class="card-title mb-0 fw-bold">{{ $company }}</h5>
             @if ($statusColor)
                 <div class="badge border bg-{{ $statusColor }} bg-{{ $statusColor }}-subtle rounded-pill">
                     <span class=" text-{{ $statusTextColor ? $statusTextColor : 'dark' }}">{{ $statusText }}</span>
                 </div>
             @endif
             <div class="badge border rounded-pill">
                 <span class=" text-{{ $statusTextColor ? $statusTextColor : 'dark' }}">{{ $statusText }}</span>
             </div>
         </div>
         <p class="card-subtitle mt-2 mb-2 text-body-secondary">Enviada el {{ $date }}</p>
         <div class="d-flex  justify-content-between align-items-center">
             <p class="card-subtitle mt-1 text-body-secondary">Precio:</p>
             <p class="card-subtitle mt-1 text-body-secondary fw-bold">${{ $price }}</p>
         </div>

         <div class="d-flex  justify-content-between align-items-center">
             <p class="card-subtitle mt-1 text-body-secondary">Evaluación:</p>
             <p class="card-subtitle mt-1 text-body-secondary fw-bold">
                 <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                 {{ $score }}
             </p>
         </div>
         <p class="card-subtitle mt-2  text-body-secondary">{{ $description }}</p>
         {{-- <p class="card-subtitle  text-body-secondary">"Completar el equipo de Ti excelente"
                        </p> --}}
         <div class="col-12 d-flex justify-content-between text-center">
             <div class="p-2">
                 <x-action-button title="Modificar evaluación" class="btn-secondary" data-bs-toggle="modal"
                     data-bs-target="#proposalModal"></x-action-button>
             </div>
             <div class="p-2">
                 <x-action-button title="Adjudicar" class="btn-primary" icon="bi bi-award"></x-action-button>
             </div>
         </div>
     </div>
 </div>


 <x-modal id="proposalModal" dialogClass="modal-dialog-centered">
     <div class="d-flex justify-content-between align-items-center">
         <h1 class="modal-title fs-5">Evaluar Propuesta</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
     </div>
     <p>Califique la propuesta de Company One</p>
     <div class="mb-3">
         <label for="scoreProposal" class="form-label fw-semibold">Puntaje (1-100)</label>
         <input type="number" class="form-control" id="scoreProposal" name="scoreProposal"
             aria-describedby="scoreProposal" name="score" min="0" max="100" placeholder="Ingrese puntaje"
             oninput="if(this.value.length > 3) this.value = this.value.slice(0,3);">
     </div>
     <div class="mb-3">
         <label for="commentProposal" class="form-label fw-semibold">Comentarios</label>
         <textarea class="form-control" placeholder="Descripción detallada de la licitación" id="commentProposal"
             name="commentProposal" style="min-height: 100px"></textarea>
     </div>
     <div class="text-end">
         {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> --}}
         <button type="submit" class="btn btn-primary">Guardar</button>
     </div>
 </x-modal>
