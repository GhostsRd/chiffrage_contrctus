<div>
 
    <div class="container   ">
        <h4  id="titre-prof">Page Profile</h4>
        <p id="text-prof">Page  / Profile</p>   
    </div>  
  
    <div class="container shadow-sm rounded-2 p-4">
    
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h3 class="fw-bold ">Liste des profiles</h3>
  
          </div>
          <div class="col-lg-5 col-8">
            <input type="text" name="" id="" placeholder="Recherche ..." class="form-hovered form-control  rounded-5  shadow-sm">
          </div>
          <div class="col-2 col-lg-2">
            <ul>
    
              <li style="list-style: none;" >
                  <a class="nav-link collapsed " data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                   
                      <i class="bi bi-chevron-down ms-auto">
  
                          <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                          </svg>
                      </i>
                  </a>
                  <ul id="menu-nav"  class=" collapse ">
                      <li class="p-2  bg-dark rounded-2  text-center shadow-sm  text-bold " style="list-style: none">
                          
                           <span class="rounded-1 p-2 fw-bold text-white " wire:click="active">nouveau</span>
                           <hr class="text-white fw-bold">
                           <span class="rounded-5 p-2 fw-bold text-warning " wire:click="active2">Modifier</span>
                           <hr>
                    
                          
                      </li>
                          
                  </ul>
              </li>
          </ul>
          </div>
        </div>
        <br>
          <table class="table table-hover text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Profil</th>
                  <th scope="col">Tarif</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
            
                  <td>1</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
     
                  <td>2</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
            
                  <td>3</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
              
      </div>
    </div>
    {{-- <div class="container mt-4 p-4">
      <h3> Statistique de Tarifs</h3>
      <hr>
      <br>
      <canvas style="height:50vh border " width="100vw" class="border bg-secondary">

      </canvas>
    </div> --}}
</div>
