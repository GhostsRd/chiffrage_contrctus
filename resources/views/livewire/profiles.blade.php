<div>
    <div class="container   ">
      <h3  id="titre-prof">Page Profiles</h3>
      <p id="text-prof">Page Paramétrage / profiles</p>   
  </div>  

    
  <div class="container bg-white rounded-2 shadow-sm">

    {{-- menu icons --}}
    <div class="row">
       
        <div class="col-6 offset-6 p-2">
            <ul>
    
                <li style="list-style: none;" >
                    <a class="nav-link collapsed " data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                     
                        <i class="bi bi-chevron-down ms-auto">
    
                            <svg class="offset-11" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                            </svg>
                        </i>
                    </a>
                    <ul id="menu-nav"  class=" collapse ">
                        <li class="p-2 col-3  rounded-2 offset-8 text-center shadow-sm  text-bold " style="list-style: none">
                            
                             <span class="rounded-1 p-2 fw-bold modif " wire:click="active">nouveau</span>
                             <hr>
                             <span class="rounded-5 p-2 fw-bold modif " wire:click="active2">Modifier</span>
                             <hr>
                      
                            
                        </li>
                            
                    </ul>
                </li>
            </ul>
        </div>
         {{-- menu header --}}
        <hr>
        <h3 class="fw-bold text-muted"># Liste des employers</h3>
        <div class="col-lg-4 offset-8" >
           
            <input type="text" class="form-control shadow-sm rounded-5" wire:model="recherche" id="form-hovered" placeholder="Recherche ici">
            <br>
        </div>
        
    
        {{-- container table list --}}
        <div>
            <table id="user-list-table" class="table text-center table-light  rounded-1  display p-2 " role="grid" data-bs-toggle="data-table">
    
                <thead >
                    <th class="shadow-sm">{{__("image")}} </th>
                    <th>{{ __('Id prof')}}</th>
                    <th>{{ __('Profiles')}}</th>
                    <th>{{__('Tarif')}}</th>
                    <th>{{__('Supprimer')}}</th>
                  
                  
                </thead>
                <tbody>
                    @foreach ($profs as $prof )
                    <tr>
                      <td><img src="{{url('images/1.png')}}" alt="" class="w-10"></td>
                        <td><span class="badge bg-primary">{{ $prof->id }}</span></td>  
                        <td>{{ $prof->profile }}</td>
                        <td>{{ $prof->tarif }}</td>
                        <td wire:click="active2">
                          <i>
                              <svg class="icon-32 rounded-1 modif" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>            
                              </svg>                            
                          </i>
                          
                       </td>
                       <td>
                        <a href="{{url('/profiles',$prof->id)}}">
                            <svg class="hover  icon-32 rounded-1" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                        </a>
                    </td>

                    </tr>
                    @endforeach
                </tbody>
            
             </table>

             {{-- <div id="form-module1" class="form {{$form}}" method="POST">
        
               
                  
                <div>
                  <div class="col-12 offset-1">
                        <h3 class="fw-bold mt-2 title-form" >Ajouter un employer</h3><br>
        
                            <ul id="top-tab-list" class="p-0 row list-inline">
                        
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
                                <a href="#nom"  class="nav-link">
                                    <div class="iq-icon me-3  fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="dark-wizard ">Employer</span>
                                        </div>
                                </a>
                            </li>
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                                <a href="#Items" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="dark-wizard">Profiles</span>
                                    </div>
                                </a>
                            </li>
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                                <a href="#comment" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="dark-wizard ">Tarif</span>
                                    </div>
                                </a>
                            </li>
                            </ul>
                 
                <form  wire:submit.prevent="store">
                    @csrf
                    
                    <div class="coloumn">
                      <div class="row">
                        <div class="col-lg-5">
                          <label for="nom" class="text-muted m-2">{{_('Nom *')}}</label>
                          <input type="text" id="nom" wire:model.lazy="nom" name="name" class="card-title form-control m-2" placeholder="Nom">          
                          <label for="profile" class="text-muted m-2">{{_('Profiles *')}}</label>             
                          <input type="select" name="profiles" wire:model="profiles"  id="profile" class="card-title form-control m-2" placeholder="Profiles" required>        

                        </div>
                        <div class="col-lg-5">
                          <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                          <input type="text" name="contact" wire:model.lazy="contact"  class="card-title form-control m-2" placeholder="contact" required> 
                          <label for="#tarif" class="text-muted m-2" >{{_('Tarif *')}}</label>              
                          <input type="text" name="tarif" id="tarif" wire:model="tarifs"  class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                          <label for="#image" class="text-muted m-2" >{{_('Image *')}}</label>
                          <input type="file" name="file" id="image" wire:model="file"  class="card-title form-control m-2" required>
                          
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn  btn-primary fw-bold offset-9 m rounded-5 " wire:click.prevent="store">ajouter</button>
                    
                    
                  </form>
                
                </div>
            </div> --}}
            
            
             </div>
        </div>
</div>
<div id="form-module1" class="form {{$form2}}" method="POST">
        
               
                  
    <div>
      <div class="col-12 offset-1">
            <h3 class="fw-bold mt-2 title-form" >Modifier un employer</h3><br>

                <ul id="top-tab-list" class="p-0 row list-inline">
            
                <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
                    <a href="#nom"  class="nav-link">
                        <div class="iq-icon me-3  fw-bold">
                            <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="dark-wizard ">Employer</span>
                            </div>
                    </a>
                </li>
                <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                    <a href="#Items" class="nav-link">
                        <div class="iq-icon me-3 text-center fw-bold">
                            <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="dark-wizard">Profiles</span>
                        </div>
                    </a>
                </li>
                <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                    <a href="#comment" class="nav-link">
                        <div class="iq-icon me-3 text-center fw-bold">
                            <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="dark-wizard ">Tarif</span>
                        </div>
                    </a>
                </li>
                </ul>
     @foreach ($modifier as  $mod)
         
  
    <form  method="POST" action="{{url('/profiles/update')}}">
        @csrf
        
        <div class="coloumn">
          <div class="row">
            <div class="col-lg-5">
              <label for="nom" class="text-muted m-2">{{_('N° employer *')}}</label>
              <select name="id" wire:model="val" id="" class="form-control m-2">

                @foreach ($profs as $pro)
                    <option value="{{$pro->id}}">{{$pro->id}} </option>
                @endforeach
              </select>                  
              <label for="nom" class="text-muted m-2">{{_('Nom *')}}</label>
              <input type="text" id="nom" value="{{$mod->nom}}" name="nom" class="card-title form-control m-2 rounded-5" placeholder="Nom">          

              <label for="profile" class="text-muted m-2">{{_('Profiles *')}}</label>             
              <input type="select" name="profile" value="{{$mod->profile}}"  id="profile" class="card-title form-control m-2 rounded-5" placeholder="Profiles" required>        

            </div>
            <div class="col-lg-5">
              <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
              <input type="text" name="contact" value="{{$mod->contact}}"  class="card-title form-control m-2 rounded-5" placeholder="contact" required> 
             
              <label for="#tarif" class="text-muted m-2" >{{_('Tarif *')}}</label>              
              <input type="text" name="tarif" id="tarif" value="{{$mod->tarif}}"  class="card-title form-control m-2 rounded-5" placeholder="tarif par jour" required>                         
              
              <label for="#image" class="text-muted m-2" >{{_('Image *')}}</label>
              <input type="file" name="file" id="image" value="{{$mod->image}}"  class="card-title form-control m-2 rounded-5" required>
              
            </div>
          </div>
        </div>
        <button type="submit" class="btn  btn-primary fw-bold offset-9 m rounded-5 " >valider</button>

        
      </form>
      @endforeach
    </div>
</div>
    

</div>










 {{-- formulaire modification --}}
    
 <div id="form-module1" class="form {{$form2}}" method="POST">
        
               
        
    <div>
      <div class="col-12 offset-1">
        <h3 class="fw-bold mt-2 title-form" >Modifier un client</h3><br>

        <ul id="top-tab-list" class="p-0 row list-inline">
       
          <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
              <a href="#nom"  class="nav-link">
                  <div class="iq-icon me-3  fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="dark-wizard ">Personnel</span>
                </div>
            </a>
          </li>
          <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
              <a href="#Items" class="nav-link">
                  <div class="iq-icon me-3 text-center fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="dark-wizard">Items</span>
                    </div>
                </a>
          </li>
          <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
              <a href="#comment" class="nav-link">
                  <div class="iq-icon me-3 text-center fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="dark-wizard ">Finish</span>
                </div>
            </a>
        </li>
    </ul>
    @foreach ($modele as $mod )
          <form method="POST" action="{{url('/gererClient/update')}}">
              @csrf
              
              <div class="coloumn">
                  <div class="row">
                  <div class="col-lg-5">
                     
                    <label for="projet" class="text-muted m-2">{{_('N° client *')}}</label>
                    {{-- <input type="text" id="nom"  value="{{ $mod->nom }}" class="card-title form-control m-2" placeholder="Nom du client">    --}}
                    <select name="id" wire:model="val" id="" class="form-control">
                        
                      @foreach ($data as $dat)
                          <option value="{{$dat->id}}">{{$dat->id}} </option>
                      @endforeach
                    </select>

                      <label for="projet" class="text-muted m-2">{{_('Nom du client *')}}</label>
                      <input type="text" name="nom"  value="{{ $mod->nom }}" class="card-title form-control m-2" placeholder="Nom du client">   
                    

                    <label for="prerequis"  class="text-muted m-2">{{_('Prerequis du client *')}}</label>             
                    <input type="text" name="prerequis" value="{{$mod->prerequis}}"  class="card-title form-control m-2" placeholder="Prerequis du client" required>        

                </div>
                <div class="col-lg-5" >
                    <label for="desc" class="text-muted m-2">{{_('Description de la demande *')}}</label>
                    <textarea name="description" id="desc" cols="25" rows="5" class="form-control" placeholder="description du projet" >{{$mod->description_demande}}</textarea>

                    {{--                         
                    <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                    <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
 --}}
                    

                    <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                    <input type="text" name="contact" value="{{$mod->contact}}" id="contact"  class="card-title form-control m-2" placeholder="Contact du client" required>
                    {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                    <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                     --}}
                    
                  </div>
                </div>
              </div>
              <button type="submit" class="rounded-5 btn  btn-primary text-white fw-bold offset-9 mt-2">Enregistrer</button>
              
              
            </form>
        </div>
    </div>
    
</div>
@endforeach
{{-- formulaire ajouter --}}

<div id="form-module1" class="form {{$form}}" method="POST">
    
           
              
    <div>
      <div class="col-12 offset-1">
        <h3 class="fw-bold mt-2 title-form" >Ajouter un client</h3><br>

        <ul id="top-tab-list" class="p-0 row list-inline">
       
          <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
              <a href="#nom"  class="nav-link">
                  <div class="iq-icon me-3  fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span class="dark-wizard ">Personnel</span>
                    </div>
              </a>
          </li>
          <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
              <a href="#Items" class="nav-link">
                  <div class="iq-icon me-3 text-center fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <span class="dark-wizard">Items</span>
                  </div>
              </a>
          </li>
          <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
              <a href="#comment" class="nav-link">
                  <div class="iq-icon me-3 text-center fw-bold">
                      <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      <span class="dark-wizard ">Finish</span>
                  </div>
              </a>
          </li>
      </ul>
          <form wire:submit.prevent="create">
              @csrf
              
              <div class="coloumn">
                <div class="row">
                  <div class="col-lg-5">
                     
                    
                    <label for="projet" class="text-muted m-2">{{_('Nom du client *')}}</label>
                    <input type="text" id="nom" wire:model='nom' class="card-title form-control m-2" placeholder="Nom du client">   

                    <label for="prerequis"  class="text-muted m-2">{{_('Prerequis du client *')}}</label>             
                    <input type="text" wire:model="prerequis"  class="card-title form-control m-2" placeholder="Prerequis du client" required>        

                </div>
                <div class="col-lg-5" >
                    <label for="desc" class="text-muted m-2">{{_('Description de la demande *')}}</label>
                    <textarea name="commmentaire" wire:model="description" id="desc" cols="25" rows="5" class="form-control" placeholder="description du projet" ></textarea>

                    {{--                         
                    <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                    <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
 --}}
                    

                    <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                    <input type="text" wire:model="contact" id="contact"  class="card-title form-control m-2" placeholder="Contact du client" required>
                    {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                    <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                     --}}
                    
                  </div>
                </div>
              </div>
              <button type="submit" class="btn  btn-info offset-9 mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
              
              
            </form>
        </div>
    </div>
    
</div>