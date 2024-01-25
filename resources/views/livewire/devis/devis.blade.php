<div>
    {{-- <div class="container ">
        <h3  id="titre-prof"> Devis</h3>
        <p id="text-prof">Page  / Devis</p>   
    </div>   --}}
    <div id="modal" class="form shadow w-25  {{ $formCLient}}" method="POST">
          
        <div class="col-lg-12">
          <h5 class="fw-bold title-form text-center" >Ajouter un client</h5>
           <hr>
            <form wire:submit.prevent="createClient">
                @csrf

                      <label for="projet" class="text-muted m-2 " >{{_('Nom  *')}}</label>
                      <input type="text" id="nom" wire:model='nom' class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Nom du client" required>   
  
                      <label for="prerequis"  class="text-muted m-2">{{_('Prénom *')}}</label>             
                      <input type="text" wire:model="prenom"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Prénom du client" required>        
  
            
                      <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                      <input type="text" wire:model="contact" id="contact"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Contact du client" required>
                     <hr>
            
               <div class="text-center">
                <button type="submit" class="btn btn-sm  btn-primary mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                <button  wire:click="form1"   class="btn btn-sm  btn-warning mt-2 rounded-5 text-white fw-bold">
                    Annuler

                </button>
               </div>
                
              </form>
          </div>

      
  </div>
    {{-- <div id="modal" class="form {{ $formCLient}} shadow rounded-start-5 p-4 rounded-top-0 rounded-end-top-0"  method="POST">
    
           
              
        <div>
          <div class="col-12 ">
            <h3 class="fw-bold mt-2 title-form" >Ajouter un client</h3><br>
            <hr>
            
              <form wire:submit.prevent="createClient">
                  @csrf
                  
                  <div class="col-9 col-lg-12">
                    
                         
                        
                        <label for="projet" class="text-muted m-2">{{_('Nom du client ')}} <span class="text-danger">*</span></label>
                        <input type="text" id="nom" wire:model='nom' class="form-control rounded-3 shadow-sm m-2" placeholder="Nom du client" required>   
    
                        <label for="prerequis"  class="text-muted m-2">{{_('Prénom du client ')}} <span class="text-danger">*</span></label>             
                        <input type="text" wire:model="prenom"  class="rounded-3 shadow-sm form-control m-2" placeholder="Prénom du client" required>        
    
                   
    
                        <label for="contact" class="text-muted m-2">{{_('Contact ')}} <span class="text-danger">*</span></label>
                        <input type="text" wire:model="contact" id="contact"  class="rounded-3 shadow-sm form-control m-2" placeholder="Contact du client" required>
                       
                        
                    
                  </div>
                  <button type="submit" class="btn  btn-primary fw-bold btn-sm offset-4 mt-3 rounded-5 text-white fw-bold">Enregistrer</button>
                  <button type="button" wire:click="form1" class="btn  btn-secondary btn-sm mt-3 rounded-5 text-white fw-bold">Annuler</button>

                  
                </form>
            </div>
        </div>
        
    </div> --}}
   
   
    <div class="container   ">
        <div id="form-module1 active"  method="POST">
        
               
               {{-- <div class="row"> --}}
                {{-- <div class="col-lg-4 bg-white rounded-2  shadow-sm">
                 <h5 class="text-center titre-prof">Facture</h5>
                </div>     --}}
                <div class="p-2 rounded-2  ">
                  <div class="col-lg-12 offset-lg-1 p-2">
                    <div class="col-lg-9 offset-lg-1">
                        
                        
                        <ul id="top-tab-list" class="p-0 row list-inline">
            
                            <li id="personnel" data-aos="fade-up" data-aos-delay="700" class="mb-2 col-lg-3 col-md-6 text-center  shadow-sm  active">
                                <a href="#devis"  class="nav-link">
                                    <div class="iq-icon me-3  fw-bold">
                                        <svg data-aos="fade-down" data-aos-delay="1900" class="svg-icon icon-20  rounded-4 text-white fw-bold " xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="dark-wizard text-white ">Devis</span>
                                        </div>
                                </a>
                            </li>
                            <li id="personnel" data-aos="fade-up" data-aos-delay="800" class="mb-2 col-lg-2 bg-white col-md-6 text-start shadow-sm ">
                                <a href="#devis" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg data-aos="fade-down" data-aos-delay="2000" class="icon-32 text-warning fw-bold" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M15.7729 9.30504V6.27304C15.7729 4.18904 14.0839 2.50004 12.0009 2.50004C9.91694 2.49104 8.21994 4.17204 8.21094 6.25604V6.27304V9.30504" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7422 21.0004H7.25778C4.90569 21.0004 3 19.0954 3 16.7454V11.2294C3 8.87937 4.90569 6.97437 7.25778 6.97437H16.7422C19.0943 6.97437 21 8.87937 21 11.2294V16.7454C21 19.0954 19.0943 21.0004 16.7422 21.0004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                                        <span class="dark-wizard">Projet</span>
                                    </div>
                                </a>
                            </li>
                            <li id="personnel" data-aos="fade-up" data-aos-delay="900" class="mb-2 col-lg-2  bg-white col-md-6 text-start shadow-sm rounded-5">
                                <a href="{{url('/chiffrage')}}" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="icon-32  fw-bold" data-aos="fade-down" style="color: color:violet" data-aos-delay="2100" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M10.33 16.5928H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M13.1406 6.90042H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>   

                                        <span class="dark-wizard ">Chiffrage</span>
                                    </div>
                                </a>
                            </li>
                            <li id="personnel" data-aos="fade-up" data-aos-delay="1000" class="mb-2 bg-white col-lg-2 col-md-6 text-start shadow-sm rounded-5">
                                <a href="{{url('/planification')}}" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        
                                        
                                        <svg class="icon-32 fw-bold" style="color: #C6FF00" data-aos="fade-down" data-aos-delay="2200" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                                                                                  
                                        <span class="dark-wizard ">Planning</span>
                                    </div>
                                </a>
                            </li>
                            <li id="personnel" data-aos="fade-up" data-aos-delay="1200" class="mb-2 col-lg-2 bg-white col-md-6 text-start shadow-sm rounded-5">
                                <a href="{{url('/facture')}}" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-danger fw-bold" data-aos="fade-down" data-aos-delay="2200" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        
                                        <span class="dark-wizard ">Facture</span>
                                    </div>
                                </a>
                            </li>
                            </ul>
                    </div>
                
                </div>
                @if (session('status') )
                {{-- <hr class="col-lg-5 offset-3"> --}}
                 @foreach ($devis as $devi)      
                        @if ($devi->id == session('status'))
                                   
                        <div class="row">
                            <div class="col-lg-6">
                                <x-devi>
                                </x-devi>
                            </div>
                           
                            <div class="col-lg-6 ">
                                <form method="POST" action="{{url('/devis/update')}}" class="bg-white rounded-3 shadow-sm">
                                    <h4 class="fw-bold p-2">Modifier un devis</h4>
                                    <hr>
                               
                                   @csrf
                                   
                                   <div class="coloumn ">
                                     <div class="row">
                                       
                                           <div class="col-lg-10 offset-lg-1   ">
                                           
                                               <input type="hidden" name="id" value="{{$devi->id}}">
                                       <label for="#tarif" class="text-muted m-2 fw-bold" >{{_('Objet du chiffrage ')}} <span class="text-danger fw-bold">*</span></label>             
                                       <textarea name="objet" id="" cols="20" rows="3"   class="form-control rounded-3 shadow-sm m-2" >
                                        {{$devi->objet_chiffrage}}
                                    </textarea>
                                       
                                       <label for="nom" class="text-muted m-2 fw-bold">{{_('Clients ')}}<span class="text-danger fw-bold">*</span></label>                               
                                        
                                      
                                         <div class="input-group mb-3">
                                            
                                         <select  id="" class="form-control m-2 mr-0 text-muted shadow-sm rounded-3 " name="id_client" placeholder="select le client" >
                                             @foreach ($clients as $client)
                                             
                                             @if ($client->id == $devi->id_client)
                                           <option value="{{$client->id}}">
                                               {{$client->nom}} {{$client->prenom}}
                                            </option>
                                        @endif

                                            <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                                            @endforeach
                                                
                                        </select>
                                           
                                           {{-- <div class="input-group-append ">
                                               <svg  wire:click="form" class="icon-32 mt-2 text-secondary   rounded-2" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>                                <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>                                <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>                                </svg>                            
                                           </div> --}}
                                         </div>
                                       
               
                                           <label for="nom"     class="text-muted m-2 fw-bold">{{_('Choix de plannification ')}}</label>
                                           <input type="checkbox" name="choix" 
                                           @if (is_null($devi->choix_planification))
                                           value="OK"
                                            @else
                                            checked="checked"
                                            value="{{$devi->choix_planification}}"
                                           @endif
                                            class="offset-lg-6 "> <br>
                                           
                                           <label for="nom" class="text-muted m-2 fw-bold" >{{_('Chefs de projet ')}}<span class="text-danger fw-bold">*</span></label>
                                           <select id="" name="id_employer" class=" form-control m-2 text-muted  p-2 shadow-sm rounded-3"  >
                                              
                                            
                                            @foreach ($projets as $projet)
                                             
                                                    @if ($devi->id_projet == $projet->id)
                                                    @foreach ($employers as $employer)
                                                        @if($employer->id == $projet->id_employer)   
                                                            <option value="{{$employer->id}}">{{$employer->nom}} {{$employer->prenom}}</option>
                                                        @endif
                                                    @endforeach
                                                    @endif
                                                  
                                                @endforeach
                                            
                                            @foreach ($employers as $employer)
                                           <option value="{{$employer->id}}">{{$employer->nom}} {{$employer->prenom}}</option>
                                           @endforeach
                   
                                           </select>
                               
                                   <label for="nom" class="text-muted m-2 fw-bold">{{_('Projet ')}} <span class="text-danger fw-bold">*</span></label>
                                    
                                       <div class="input-group mb-3">
                                            
                                           <select  id="" class="form-control m-2 text-muted   shadow-sm rounded-3" name="id_projet">
                                               {{-- <option value="">selectionner ici</option> --}}
                                          
                                               @foreach ($projets as $projet)
                                             
                                                    @if ($devi->id_projet == $projet->id)
                                                       <option value="{{$projet->id}}">{{$projet->titre}}</option>
                                                    @endif
                                                   <option value="{{$projet->id}}">{{$projet->titre}}</option>
                                                @endforeach
                                    
                                        </select>

                                           </div>

                                                           </div>
                                                       </div>

                                           <div>
                                                           
                                              
                                                <button type="submit" class="btn  btn-primary fw-bold btn-sm mb-2  fw-bold offset-8 mt-2 m rounded-5 shadow-sm" >
                                            next
                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M7.916 22H16.084C19.623 22 22 19.724 22 16.335V7.665C22 4.276 19.623 2 16.084 2H7.916C4.378 2 2 4.277 2 7.666L2 16.335C2 19.724 4.378 22 7.916 22Z" fill="currentColor"></path>                                <path d="M12.8555 16.2792L16.6205 12.5312C16.9035 12.2492 16.9035 11.7502 16.6205 11.4672L12.8555 7.71918C12.5615 7.42718 12.0865 7.42818 11.7945 7.72218C11.5025 8.01618 11.5025 8.49018 11.7965 8.78318L14.2735 11.2502H7.91846C7.50346 11.2502 7.16846 11.5862 7.16846 12.0002C7.16846 12.4142 7.50346 12.7502 7.91846 12.7502H14.2735L11.7965 15.2162C11.6495 15.3632 11.5765 15.5552 11.5765 15.7482C11.5765 15.9392 11.6495 16.1312 11.7945 16.2772C12.0865 16.5702 12.5615 16.5712 12.8555 16.2792Z" fill="currentColor"></path>                                </svg>                            
                                              
                                        
                                        </button>
                                            
                                   
                                           </div>
                               </form>
                            </div>
                                       
                         </div>
                        @endif
                 @endforeach

                 @else
            
                 {{-- <hr class="col-lg-5 offset-3"> --}}
 
                    <div class="row">
                        <div class="col-lg-6">
                            <x-devi>
                            </x-devi>
                        </div>
                        <div class="col-lg-6 ">
                            
                            <form wire:submit.prevent="createDevis" class="bg-white rounded-3 shadow-sm">
                                <h4 class="fw-bold pt-2 ps-2">Création devis</h4>
                                    <hr>
                                @csrf
                                
                                <div class="coloumn">
                                <div class="row">
                                    
                                    <div class="col-lg-10 offset-lg-1    ">
                                
            
                                    <label for="#tarif" class="text-muted m-2 fw-bold" >{{_('Objet du chiffrage ')}} <span class="text-danger fw-bold">*</span></label>             
                                    <textarea  id="" cols="20" rows="3" wire:model="objet" class="form-control rounded-3 shadow-sm m-2"  ></textarea>
                                    @error('objet') <span class="error text-danger">{{ $message }} <br> </span> @enderror

                                    <label for="nom" class="text-muted m-2 fw-bold">{{_('Clients ')}}<span class="text-danger fw-bold">*</span></label>                               
                                    
                                
                                    <div class="input-group mb-3">
                                        
                                    <select name="" id="" class="form-control m-2 mr-0 text-muted shadow-sm rounded-3 " wire:model="num_client" placeholder="selext le client" >
                                        <option value="">selectionner ici</option>
                                        @foreach ($clients as $client)
                                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                                        @endforeach
                                            
                                    </select>
                                    <div class="input-group-append ">
                                        <svg  wire:click="form" class="icon-32 mt-2 text-secondary   rounded-2" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M21.101 9.58786H19.8979V8.41162C19.8979 7.90945 19.4952 7.5 18.999 7.5C18.5038 7.5 18.1 7.90945 18.1 8.41162V9.58786H16.899C16.4027 9.58786 16 9.99731 16 10.4995C16 11.0016 16.4027 11.4111 16.899 11.4111H18.1V12.5884C18.1 13.0906 18.5038 13.5 18.999 13.5C19.4952 13.5 19.8979 13.0906 19.8979 12.5884V11.4111H21.101C21.5962 11.4111 22 11.0016 22 10.4995C22 9.99731 21.5962 9.58786 21.101 9.58786Z" fill="currentColor"></path>                                <path d="M9.5 15.0156C5.45422 15.0156 2 15.6625 2 18.2467C2 20.83 5.4332 21.5001 9.5 21.5001C13.5448 21.5001 17 20.8533 17 18.269C17 15.6848 13.5668 15.0156 9.5 15.0156Z" fill="currentColor"></path>                                <path opacity="0.4" d="M9.50023 12.5542C12.2548 12.5542 14.4629 10.3177 14.4629 7.52761C14.4629 4.73754 12.2548 2.5 9.50023 2.5C6.74566 2.5 4.5376 4.73754 4.5376 7.52761C4.5376 10.3177 6.74566 12.5542 9.50023 12.5542Z" fill="currentColor"></path>                                </svg>                            
                                    </div>
                                </div>
                                @error('num_client') <span class="error text-danger">{{ $message }} <br> </span> @enderror
                                    
            
                                        <label for="nom" class="text-muted m-2 fw-bold">{{_('Choix de plannification ')}}</label>
                                        <input type="checkbox" name="" id="" value="OK" wire:model="choix" class="offset-lg-6 "> <br>
                                        
                                        <label for="nom" class="text-muted m-2 fw-bold" >{{_('Chefs de projet ')}}<span class="text-danger fw-bold">*</span></label>
                                        <select name="" id="" class=" form-control m-2 text-muted  p-2 shadow-sm rounded-3" wire:model="num_employer" >
                                            <option value="">selectionner ici</option>
                                            @foreach ($employers as $employer)
                                                
                                        <option value="{{$employer->id}}">{{$employer->nom}} {{$employer->prenom}}</option>
                                        @endforeach
                
                                        </select>
                                        @error('num_employer') <span class="error text-danger">{{ $message }} <br> </span> @enderror
                                <label for="nom" class="text-muted m-2 fw-bold">{{_('Projet ')}} <span class="text-danger fw-bold">*</span></label>
                                
                                    <div class="input-group mb-3">
                                        
                                        <select name="" id="" class="form-control m-2 text-muted   shadow-sm rounded-3" wire:model="num_projet">
                                            <option value="">selectionner ici</option>
                                            @foreach ($projets as $projet)
                                                
                                                <option value="{{$projet->id}}">{{$projet->titre}}</option>
                                            @endforeach
                                    </select>
                                        
                                        <div class="input-group-append ">
                                            
                                            <svg   wire:click="createProjetChangeDevis" class="icon-32 mt-2 nav-link  text-secondary " width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>                                <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>                                </svg>                            
                                        </div>
                                        </div>
                                    
                                        
                                        
            
            
                                                        </div>
                                                    </div>
                                                    
                                                    {{-- <hr class="offset-lg-3 col-lg-5"> --}}
                                                    
                                                    
                                                    
                                        <div>
                                                        
                                         <button type="submit" class="btn  btn-primary fw-bold btn-sm  fw-bold offset-8 offset-lg-9 mt-2 mb-2 rounded-5 shadow-sm" >
                                            next
                                                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M7.916 22H16.084C19.623 22 22 19.724 22 16.335V7.665C22 4.276 19.623 2 16.084 2H7.916C4.378 2 2 4.277 2 7.666L2 16.335C2 19.724 4.378 22 7.916 22Z" fill="currentColor"></path>                                <path d="M12.8555 16.2792L16.6205 12.5312C16.9035 12.2492 16.9035 11.7502 16.6205 11.4672L12.8555 7.71918C12.5615 7.42718 12.0865 7.42818 11.7945 7.72218C11.5025 8.01618 11.5025 8.49018 11.7965 8.78318L14.2735 11.2502H7.91846C7.50346 11.2502 7.16846 11.5862 7.16846 12.0002C7.16846 12.4142 7.50346 12.7502 7.91846 12.7502H14.2735L11.7965 15.2162C11.6495 15.3632 11.5765 15.5552 11.5765 15.7482C11.5765 15.9392 11.6495 16.1312 11.7945 16.2772C12.0865 16.5702 12.5615 16.5712 12.8555 16.2792Z" fill="currentColor"></path>                                </svg>                            
                                                            
                                              </button>
                                
                                        </div>
                            </form>
                        </div>
                                    
                    </div>
            
                 @endif


             
                
                        
                
                
           
        </div>
    </div>
   
   
</div>
