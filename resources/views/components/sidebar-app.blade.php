 <aside id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 bg-primary text-white d-none d-md-block">
     <h5 class="d-none d-md-block">Menú</h5>
     <hr class="d-none d-md-block">
     <ul class="nav nav-pills flex-column mb-auto">
         @auth
             <li class="nav-item">
                 <a href="home" class="nav-link text-white active" aria-current="page">
                     <i class="bi bi-house-door"></i> Dashboard
                 </a>
             </li>
             <li>
                 <a href="bids" class="nav-link text-white">
                     <i class="bi bi-file-earmark-text"></i> Bids
                 </a>
             </li>
             <li>
                 <a href="evaluations" class="nav-link text-white">
                     <i class="bi bi-clipboard-check"></i> Evaluations
                 </a>
             </li>
             <li>
                 <a href="awards" class="nav-link text-white">
                     <i class="bi bi-award"></i> Awards
                 </a>
             </li>
             <li>
                 <a href="users" class="nav-link text-white">
                     <i class="bi bi-people"></i> Users
                 </a>
             </li>
             <li>
                 <a href="settings" class="nav-link text-white">
                     <i class="bi bi-gear"></i> Settings
                 </a>
             </li>
         @endauth
     </ul>
 </aside>
