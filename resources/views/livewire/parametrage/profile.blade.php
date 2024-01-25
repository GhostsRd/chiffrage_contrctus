<div>
    <div class="container  ">
        <div class="row ">
            <div class="col-lg-4">

                <h3  id="titre-prof"> Profile</h3>
                <p id="text-prof">Paramétre  / Profile</p>   
            </div>
            <div class="col-lg-2 offset-lg-3"></div>
            <div class="col-lg-3 mt-5 ">
                <button wire:click="formAjout" 
                data-aos="flip-left" duration="800"
                class="btn btn-sm btn-primary offset-lg-8  fw-bold border-0 rounded-4 shadow-sm">
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
    
                <table class="  table  card-body  rounded-3 shadow-sm border-0 text-capitalize text-center   " style="border:0;overflow:hidden" >
            <div class="row  p-2">
                <div class="col-lg-2">
                    <h5 id="titre-prof" class="m-1 fw-bold">Liste de profile</h5>
                </div>
                <div class="col-lg-4 offset-lg-5">
                    <input type="text" wire:model.debounce.500="recherche"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Recherche par profile ...">
                </div>
                <div class="col-lg-1  ">
                
                    <button   
                
                    class="{{
                        $disabled
                    }} btn btn-outline-danger border-0 btn-sm ms-4  rounded-5 anim">
                        <svg class="icon-32    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
        
                        <sub class="text-primary fw-bold  rounded-5 "> {{$total}}</sub>
                        </button>
                </div>
            </div>
        
            <thead class="">
            <th class="border-0"><input type="checkbox" ></th>
                <th class="p-2 fw-bold p-2  border-0">N°</th>
                <th class="p-2 fw-bold border-0">profile</th>
                <th class="p-2 fw-bold border-0">tarif ( Ar/J )</th>
                <th class="p-2 fw-bold border-0" colspan="2">
                action
                </th>
                
            </thead>
        <tbody class="p-2 border-0">
            

            @foreach ($profiles as $profil)

                    
    
                    <tr class="border-0">
                            <td class="bg-white p-2 border-0" >
                            <input type="checkbox" wire:model="checkData" value="{{$profil->id}}" class="border-0">
                        </td>
                        <td class="bg-white p-2 border-0" id="tdanim">{{$profil->id}}</td>
                        <td class="bg-white  p-2 border-0" id="tdanim1">{{$profil->profile}}</td>
                        <td class="bg-white  p-2 border-0" id="tdanim2">
                        
                            {{$profil->tarif}}
                        
                        </td>
                        <td class="bg-white  p-2 border-0" data-aos="zoom-in" data-aos-delay="700">
                            <a class="text-warning" >
                                <svg class="icon-32 " wire:click="formModifier('{{$profil->id}}','{{$profil->profile}}','{{$profil->tarif}}')" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 2.96606 2.75049 8.04806V16.3621C2.75049 19.4441 2.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 2.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.1655 2.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                            </a>
                        </td>
                    </tr>
                
                    @endforeach
                    
                    
                    
                    
                    
                    
                </tbody>
                
            </table>
            
        </form>
    </div>
{{$profiles->links()}}
</div>
    
            <div id="modal" class="form shadow w-25  {{$form}}" method="POST">
                    
                <div class="col-lg-12">
                <h5 class="fw-bold title-form text-center" >Ajouter un profile</h5>
                <hr>
                    <form wire:submit.prevent="insert">
                        @csrf

                            <label for="projet" class="text-muted m-2 fw-bold" >{{_('profile  *')}}</label>
                            <input type="text" id="nom" wire:model='profile' class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Profile" >   
                            @error('profile') <span class="error text-danger">{{ $message }} <br> </span> @enderror

                            <label for="prerequis"  class="text-muted m-2 fw-bold">{{_('Tarif *')}}</label>             
                            <input type="number" wire:model="tarif"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Tarif en Ariary" >        
                            @error('tarif') <span class="error text-danger">{{ $message }} <br> </span> @enderror
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
            {{-- modification profile --}}
            <div id="modal" class="form shadow w-25  {{$form1}}" method="POST">
  
                <div class="col-lg-12">
                  <h5 class="fw-bold title-form text-center" >Modifier un profile</h5>
                   <hr>
                   
                   
                   <form method="POST" action="{{url('/profile/update')}}">
                      
                          {{-- {{dd($data)}} --}}
                            @csrf
                                  <input type="hidden" name="id" value="{{$id_profile}}">
  
                                  <label for="projet" class="text-muted m-2 fw-bold" >{{_('Profile  *')}}</label>
                                  <input type="text" name="profile" class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                                   value="{{$profile}}" required>   
              
                                  <label for="prerequis"  class="text-muted m-2 fw-bold">{{_('Tarif *')}}</label>             
                                  <input type="text" name="tarif" class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                                  value="{{$tarif}}" required>        
    
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
            @if (session('notif'))

            <div id="notification" class="rounded-3 p-2 active shadow  ">
            
                  
                  <svg class="icon-32 text-success" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" fill="currentColor"></path>                            </svg>                        
                  <a href="" class="nav-link ms-1">
                      <span class="fw-bold">Success</span><br>
                     {{-- RAKTOnirina rado leonce RAKTOnirina LEONCERARAKOROIN --}}
                      {{session('notif')}} <span class="text-danger fw-bold">:) </span>
                     
                     </a>
            
             </div>
            </div>
          @endif
</div>
