  <x-card title="Preferencias de Notificación" subtitle="Configure cómo y cuándo desea recibir notificaciones"
      slot2-class="mt-4">
      <x-slot name="slot2">
          <x-toggle-row title="Notificaciones por Email" description="Recibir Notificaciones via correo" id="switchEmail"
              class="mb-4"></x-toggle-row>

          <hr>

          <h5 class="mb-4">
              Tipos de notificaciones
          </h5>

          <x-toggle-row title="Nuevas Licitaciones" description="Notificaciones sobre nuevas licitaciones publicadas"
              id="switchBids" class="mb-3"></x-toggle-row>

          <x-toggle-row title="Propuestas"
              description="Notificaciones sobre propuestas recibidas o
                      actualizadas"
              id="switchProposal" class="mb-3"></x-toggle-row>

          <x-toggle-row title="Evaluaciones" description="Notificaciones sobre evaluaciones de propuestas"
              id="switchEvaluations" class="mb-3"></x-toggle-row>

          <x-toggle-row title="Adjudicaciones" description="Notificaciones sobre adjudicaciones de licitaciones"
              id="switchAwards" class="mb-3"></x-toggle-row>

          <x-action-button id="savePreferences" class="btn-primary" icon="bi bi-floppy" title="Guardar Preferencias">
          </x-action-button>
      </x-slot>
  </x-card>

  @push('scripts')
      <script></script>
  @endpush
