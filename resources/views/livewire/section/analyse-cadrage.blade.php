<div>
    <div>
        <div class="container   ">
            <h3  id="titre-prof"> Section </h3>
            <p id="text-prof">Page  /  analyse et cadrage</p>  
        </div>  
      
        <div class="container rounded-2 p-4">
            
            
                   
                      
                <div>
                  <div class="col-12 ">
                      <div class="row">
                          <div class="col-lg-4 bg-white p-2 rounded-3 ">
                            <hr>
                              @foreach ($tests as $dev )
                              <h5 class="fw-bold title-form text-center " style="text-transform: uppercase"> {{$dev->objet_chiffrage}} </h5>
                              <hr class="col-lg-5 ">
                                  
                              <p class="fw-bold offset-1">* Devis N° {{$dev->id}} </p>
                            <input type="hidden" name="" wire:model.loading="id_projet" value="{{$dev->id_projet}}">
                              <p class="fw-bold offset-1">* projet N° {{$dev->id_projet}} </p>
                              @endforeach

                            </div>
                            <div class="col-lg-7 mt-4 offset-lg-1 bg-white rounded-3 p-2">
                                <h5 class="fw-bold mt-2 title-form" > Analyse et cadrage</h5>
                                <hr class="col-lg-5">
               
                                <form wire:submit.prevent="create">
                           @csrf
                           {{-- <h1> hehehe{{$id_projet}}   </h1> --}}
                           <div class="coloumn">
                             <div class="col-lg-6 offset-lg-2">
                             
                                 
                                 <label for="#tarif" class="text-muted m-2"  >{{_("Désignation de l'item *")}}</label>              
                                   <input type="text" name="tarif" id="tarif" wire:model="designation"   class="card-title form-control m-2 col-4 col-lg-4" placeholder="Designation de l'item" required>                         
                                   
                                
                                   <label for="#tarif" class="text-muted m-2" >{{_('Duré *')}}</label>              
                                   <input type="number" name="tarif" id="tarif" wire:model="temps_passe"   class="card-title form-control m-2 col-4 col-lg-4" placeholder="duré" required>                         
                                   
                                   <label for="contact" class="text-muted m-2">{{_('Date de création *')}}</label>
                                   <input type="date" name="contact" wire:model="date"  class="card-title form-control m-2 col-4 col-lg-4" placeholder="temps passé" required> 
                            
                             </div>
                           </div>
                           <button type="submit" class="btn  btn-primary btn-sm text-white border-0  fw-bold offset-lg-8 offset-4 mt-4 m rounded-5 shadow-sm" >
                               <a href="{{url('/devis')}}" class="nav-link">
                                   Précedent
                                   {{-- <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M7.916 22H16.084C19.623 22 22 19.724 22 16.335V7.665C22 4.276 19.623 2 16.084 2H7.916C4.378 2 2 4.277 2 7.666L2 16.335C2 19.724 4.378 22 7.916 22Z" fill="currentColor"></path>                                <path d="M12.8555 16.2792L16.6205 12.5312C16.9035 12.2492 16.9035 11.7502 16.6205 11.4672L12.8555 7.71918C12.5615 7.42718 12.0865 7.42818 11.7945 7.72218C11.5025 8.01618 11.5025 8.49018 11.7965 8.78318L14.2735 11.2502H7.91846C7.50346 11.2502 7.16846 11.5862 7.16846 12.0002C7.16846 12.4142 7.50346 12.7502 7.91846 12.7502H14.2735L11.7965 15.2162C11.6495 15.3632 11.5765 15.5552 11.5765 15.7482C11.5765 15.9392 11.6495 16.1312 11.7945 16.2772C12.0865 16.5702 12.5615 16.5712 12.8555 16.2792Z" fill="currentColor"></path>                                </svg>                             --}}
                               </a>
                           </button>
                          
                           <button type="submit" class="btn btn-sm   btn-outline-light border-0 text-warning fw-bold mt-4 m rounded-5 shadow-sm me-4" wire:click="section">
                               <a href="#" class="nav-link">   
                                   suivant
                                   <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M7.916 22H16.084C19.623 22 22 19.724 22 16.335V7.665C22 4.276 19.623 2 16.084 2H7.916C4.378 2 2 4.277 2 7.666L2 16.335C2 19.724 4.378 22 7.916 22Z" fill="currentColor"></path>                                <path d="M12.8555 16.2792L16.6205 12.5312C16.9035 12.2492 16.9035 11.7502 16.6205 11.4672L12.8555 7.71918C12.5615 7.42718 12.0865 7.42818 11.7945 7.72218C11.5025 8.01618 11.5025 8.49018 11.7965 8.78318L14.2735 11.2502H7.91846C7.50346 11.2502 7.16846 11.5862 7.16846 12.0002C7.16846 12.4142 7.50346 12.7502 7.91846 12.7502H14.2735L11.7965 15.2162C11.6495 15.3632 11.5765 15.5552 11.5765 15.7482C11.5765 15.9392 11.6495 16.1312 11.7945 16.2772C12.0865 16.5702 12.5615 16.5712 12.8555 16.2792Z" fill="currentColor"></path>                                </svg>                            
                               </a>
                           </button>
                            </div>
                        </div>
                         
                    
                </div>
          
        </div>
    </div>
    
    <div id="modal" class="form {{$form}}" method="POST">
        <h4>Confirmation</h4>
        voulez-vous valider la formulaire ?
        <hr>
        <button type="submit" class="btn btn-sm btn-outline-dark shadow-sm text-warning m-2 rounded-5">
            Oui
        </button>
        <button class="btn btn-sm btn-dark shadow-sm text-warning m-2 rounded-5"><a class="nav-link" href="">Non</a></button>
    </div>
    
</form>
    
    
    
</div>
