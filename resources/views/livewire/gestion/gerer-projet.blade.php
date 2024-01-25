<div>
    <div class="container   ">
        <div class="row ">
            <div class="col-lg-4">

                <h3  id="titre-prof"> Projet</h3>
                <p id="text-prof">Paramétre  / Projet</p>   
            </div>
            <div class="col-lg-2 offset-lg-3"></div>
            <div class="col-lg-3 mt-5 ">
                <button wire:click="formAjout" 
                class="btn btn-sm btn-primary offset-lg-8  fw-bold border-0 rounded-4 shadow-sm" 
                data-aos="flip-left" duration="800">
                    <a  class="nav-link">
                    Nouveau 
                    <svg class="icon-32 " width="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                                </svg>                            

                    </a></button>
            </div>
        </div>
    </div>  

    <div class="container   p-2 rounded-2" style="font-size: 0.75rem">
        <form wire:submit.prevent="deleteSelected">
            <div class="bg-white rounded-3 shadow-sm">
    
                <table class="  table  card-body  rounded-3 shadow-sm border-0 text-capitalize  " style="border:0;overflow:hidden" >
            <div class="row  p-2">
                <div class="col-lg-2">
                    <h5 id="titre-prof" class="m-1 fw-bold">Liste de projet</h5>
                </div>
                <div class="col-lg-4 offset-lg-5">
                    <input type="text" wire:model.debounce.500="recherche"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Recherche par profile ...">
                </div>
                <div class="col-lg-1  ">
                
                    <button   
                {{$disabled}}
                    class=" btn btn-outline-danger border-0 btn-sm ms-4  rounded-5 anim">
                        <svg class="icon-32    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
        
                        <sub class="text-primary fw-bold  rounded-5 "> {{$total}}</sub>
                        </button>
                </div>
            </div>
        
            <thead class="">
                <th class="border-0"><input type="checkbox" ></th>
                <th class="fw-bold p-2 border-0" >titre</th>
                <th class="fw-bold p-2 border-0" >Description</th>
                <th class="fw-bold p-2 border-0" >Prerequis</th>
                <th class="fw-bold p-2 border-0" >Contexte</th>
                <th class="fw-bold p-2 border-0" >Commentaire</th>
                <th class="fw-bold p-2 border-0" >Date de création</th>
                <th class="fw-bold p-2 border-0" >Action</th>
                
            </thead>
        <tbody class="p-2 border-0">
            

            @foreach ($projets as $dat )                           
            <tr>
                <td class="bg-white p-2 border-0" >
                    <input type="checkbox" wire:model="checkData" value="{{$dat->id}}"  class="border-0">
                </td>
                <td  class="text-dark bg-white p-1 border-0 fw-bold" id="tdanim" >
                    {{$dat->titre}}
                </td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim2">{{$dat->description}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim1">{{$dat->prerequis}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim2">{{$dat->contexte}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim1">{{$dat->commentaire}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim">{{
                        $ee = strftime(" %d %b %Y %Hh:%m",$dat->created_at->getTimestamp());
                }}</td>
               
                  <td class="bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">
                       
                        <svg  class="icon-32 text-warning" 
                        wire:click="formModifier('{{$dat->id}}','{{$dat->titre}}','{{$dat->description}}','{{$dat->prerequis}}','{{$dat->contexte}}','{{$dat->commentaire}}')" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>                                </svg>                            

                    </td>
            </tr>
          @endforeach
                    
                    
                    
                    
                    
                    
                </tbody>
                
            </table>
        </form>
        
    </div>
    {{$projets->links()}}
  
    {{-- form ajouter projet --}}
    <div id="modal" class="form shadow w-25  {{$form}}" method="POST">
          
        <div class="col-lg-12">
          <h5 class="fw-bold title-form text-center" >Ajouter un projet</h5>
           <hr>
            <form wire:submit.prevent="create">
                @csrf

                      <label for="projet" class="text-muted m-2 fw-bold" >{{_('Titre  *')}}</label>
                      <input type="text" id="nom" wire:model='titre'
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                       placeholder="Titre du projet" required>   
  
                      <label for="prerequis"  class="text-muted m-2">{{_('Déscription ')}}</label>             
                      <input type="text" wire:model="description"
                        class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                         placeholder="Déscription du projet" required>        
  
            
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Prérequis *')}}</label>
                      <input type="text" wire:model="prerequis" 
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                        placeholder="Prerequis du client" required>
                    
                    
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Contexte ')}}</label>
                      <input type="text" wire:model="contexte" id="contact" 
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                        placeholder="Contexte du projet" required>
                     
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Commentaire ')}}</label>
                      <input type="text" wire:model="commentaire" id="contact" 
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                       placeholder="Commentaire " required>
                       
                      <hr>
            

               <div class="text-center">
                <button type="submit" class="btn btn-sm  btn-primary mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                <button  class="btn btn-sm  btn-warning mt-2 rounded-5 text-white fw-bold"><a href="" class="nav-link">
                  Annuler  
                </a></button>

               </div>
                
              </form>
          </div>

      
  </div>
  {{-- modifier un projet --}}
  <div id="modal" class="form shadow w-25  {{$form1}}" method="POST">
  
    <div class="col-lg-12">
      <h5 class="fw-bold title-form text-center" >Modifier un projet</h5>
       <hr>
       
       
       <form method="POST" action="{{url('/gererProjet/update')}}">
          
              {{-- {{dd($data)}} --}}
                @csrf
                      <input type="hidden" name="id" value="{{$id_projet}}">
                      <label for="projet" class="text-muted m-2 fw-bold" >{{_('Titre  *')}}</label>
                      <input type="text" id="nom" value="{{$titre}}"
                      name="titre"
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                       placeholder="Nom du client" required>   
  
                      <label for="prerequis"  class="text-muted m-2 fw-bold">{{_('Déscription ')}}</label>             
                      <input type="text" value="{{$description}}" 
                      name="description"
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                        placeholder="Prénom du client" required>        
  
            
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Prérequis *')}}</label>
                      <input type="text" value="{{$prerequis}}"  
                      name="prerequis"
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                       placeholder="Contact du client" required>
                    
                    
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Contexte ')}}</label>
                      <input type="text" value="{{$contexte}}" id="contact" 
                      name="contexte"
                       class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                        placeholder="Contact du client" required>
                     
                      <label for="contact" class="text-muted m-2 fw-bold">{{_('Commentaire ')}}</label>
                      <input type="text" value="{{$commentaire}}"  id="contact"  
                      name="commentaire"
                      class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                      placeholder="Contact du client" required>
                       
                      <hr>
            
            
             <div class="text-center">
              <button type="submit" class="btn btn-sm  btn-primary mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
              <button  class="btn btn-sm  btn-warning mt-2 rounded-5 text-white fw-bold"><a href="" class="nav-link">
                Annuler  
              </a></button>
             </div>

              </form>
      </div>

  
</div>
  {{-- notification --}}
   {{-- notification --}}
   @if (session('notif'))

   <div id="notification" class="rounded-3 p-2 active shadow  ">
   
         
         <svg class="icon-32 text-success" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" fill="currentColor"></path>                            </svg>                        
         <a href="" class="nav-link ms-1">
             <span class="fw-bold">Success</span><br>
            {{-- RAKTOnirina rado leonce RAKTOnirina LEONCERARAKOROIN --}}
             {{session('notif')}} <span class="text-danger fw-bold">! </span>
            
            </a>
   
    </div>
   </div>
 @endif
   
</div>
