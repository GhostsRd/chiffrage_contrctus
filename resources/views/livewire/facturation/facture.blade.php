<div>
   <div class="hide">

      <div class="container   ">
         <h3  id="titre-prof"> Facturation</h3>
         <p id="text-prof">Page  / Facture</p>   
     </div>  
         <div class="container col-lg-2 offset-lg-10">
            <a href="javascript:window.print()">
               
               <button class="btn  btn-outline-secondary rounded-3 border-secondary mb-2   " wire:click="updateFacture" style="position:sticky;">
                  <svg class="icon-32 text-warning anim" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M2 7.916V16.084C2 19.623 4.276 22 7.665 22H16.335C19.724 22 22 19.623 22 16.084V7.916C22 4.378 19.723 2 16.334 2H7.665C4.276 2 2 4.378 2 7.916Z" fill="currentColor"></path>                                <path d="M7.72033 12.8555L11.4683 16.6205C11.7503 16.9035 12.2493 16.9035 12.5323 16.6205L16.2803 12.8555C16.5723 12.5615 16.5713 12.0865 16.2773 11.7945C15.9833 11.5025 15.5093 11.5025 15.2163 11.7965L12.7493 14.2735V7.91846C12.7493 7.50346 12.4133 7.16846 11.9993 7.16846C11.5853 7.16846 11.2493 7.50346 11.2493 7.91846V14.2735L8.78333 11.7965C8.63633 11.6495 8.44433 11.5765 8.25133 11.5765C8.06033 11.5765 7.86833 11.6495 7.72233 11.7945C7.42933 12.0865 7.42833 12.5615 7.72033 12.8555Z" fill="currentColor"></path>                                </svg>                            
                  Télècharger</button>
            </a> 
         </div>
   </div>
   
   <div id="printer">
      <div class="container  bg-white p-2 rounded-3 ">
         <div class="container" id="printing">
            <div class="row">
               <div class="col-lg-5 col-5 ">

                  <h1 class="fw-bold pt-2">CONTRACTUS </h1>
               </div>
               <div class="col-lg-7 col-7">
                  @foreach ($factures as $fact)
                      
                  <h4 class="offset-lg-7 offset-7 p-0">Facture: {{$fact->id}}</h4> 
                  <h5 class="offset-lg-7 offset-7 p-0">Date: {{$rr = date(" d M Y ",strtotime($fact->date_envoi));}}</h5>
                  @endforeach

               </div>
            </div>
            
            <hr>
         </div>
            <div class="row " >
               <div class="col-lg-2 offset-lg-1 offset-1">
                  <h5 class="fw-bold p-2 text-secondary " style="font-family:'Trebuchet MS', sans-serif;font-size:1.2rem">DEVIS</h5>
                  <hr class=" col-2 text-warning">
               </div>
               
            </div>
            <div class="row  rounded-3  p-2 offset-lg-1 offset-1 col-10 col-lg-9 border border-secondary" style="background:rgba(209, 221, 225, 0.097);font-size:0.8rem">
               <div class="col-lg-5 col-md-5 col-5 text-capitalize   ">
                  @foreach ($alls as $devis )
                  <label  >N° Devis :</label> <span class="text-dark fw-bold" style="font-size: 1.1rem"> {{$devis->id}}</span><br>
                  <label class="mt-2">Chef de projet  :</label> 
                     
                        @foreach ($projets as $projet )
                        @if ($projet->id == $devis->id_projet)
                           @foreach ($chefs as $chef)
                           @if ($chef->id == $projet->id_employer)
                          <span class="text-dark fw-bold"> {{$chef->nom}} {{$chef->prenom}}</span>
                           @endif
                           @endforeach
                        @endif
                        @endforeach
                  
                   <br>
                  <label class="mt-2">Client  :</label> 
                  @foreach ($clients as $client )
                     @if($client->id == $devis->id_client)
                      <span class="text-dark fw-bold">  {{$client->nom}} {{$client->prenom}}</span>
                     @endif
                  @endforeach   
                  <br>
                  
                   {{-- <label class="fw-bold" > :</label> <br> --}}
          
                   <label class=" text-capitalize mt-2" >Projet : </label> 
                   @foreach ($projets as $projet )
                      @if ($projet->id == $devis->id_projet)
                     <span class="text-dark fw-bold text-capitalize">
                      {{$projet->titre}}
                     </span>
                      <br>
                      
               
         
               </div>
         
               {{-- <div class="col-lg-4 "> --}}
                
                 
                <div class="col-lg-5 col-md-5 col-5">
                  <label class="" >Objet :</label> 
                  <span class="text-dark fw-bold text-uppercase ">    {{$devis->objet_chiffrage}}</span>
                    <br>
                  
                   
                  <label class="" >Date de création :</label> 
                  <span class="fw-bold text-dark">{{
                    $ee = strftime(" %d %b %Y",$devis->created_at->getTimestamp());
                  }}</span>
                  <br>
                  <label class="text-capitalize mt-2" >Contexte : </label>
                   <span class="fw-bold text-dark text-capitalize">{{$projet->contexte}}</span> <br>
         
                  {{-- <label class="fw-bold" >Client :</label> <br> --}}
                  @endif
                  @endforeach  
                  @endforeach
         
                </div>
               
         
            </div>
         
         
         
         
         
         
         
         
         
            <div class="container  mt-4 rounded-3 text-capitalize" style="font-size: 0.7rem">
               
               <div class="col-lg-10 col-10 offset-1 offset-lg-0  border-0 shadow-none bg-white">
                  <div class="card-body">
                     <div class="card-title">
                     
                        <p for="" class="fw-bold offset-lg-1  text-secondary " style="font-size: 0.9rem ">Apperçu du devis</p>
                         <hr class="offset-lg-1 col-2 text-warning">
                     </div>
         
                     <table class=" border offset-lg-1 table table-striped-white table-sm " >
                        <thead class="">
                           <tr class="border">
                              
                              <th  scope="col" class=" border-0 p-2" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem">Profil</th>
                              <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem" >Item</th>
                              <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem" >Durée ( jours )</th>
                              <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem">Tarif ( Ar/ j )</th>
                              <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem">Montant (Ar)</th>
                           
                           </tr>
                        </thead>
                        <tbody>
                          
                           @foreach ($taches as $tache)
                        
                           <tr>
                             
            
                              <td class="text-capitalize border-0 bg-white ">
                                 @foreach ($profiles as $profile)
                                     @if ($profile->id == $tache->id_profile)
                                        {{$profile->profile}}
                                     @endif
                                 @endforeach
                              
                              </td>
                              <td class="text-capitalize border-0 bg-white ">
                              @foreach ($secTests as $sec)
                                 @if ($tache->id_items == $sec->id)
                                   {{$sec->designation}}
                                 @endif
                             @endforeach
                              </td>
                              <td class="border-0 bg-white">
                                 @foreach ($profiles as $profile)
                                 @if ($profile->id == $tache->id_profile)
                                    {{$tache->tarif / $profile->tarif}}
                                 @endif
                             @endforeach
            
                              </td>
                              <td class="border-0  bg-white">
                                 @foreach ($profiles as $profile)
                                 @if ($profile->id == $tache->id_profile)
                                    {{$profile->tarif}}
                                 @endif
                             @endforeach
                              </td>
                              <td class="border-0 bg-white">
                                 @foreach ($profiles as $profile)
                                     @if ($profile->id == $tache->id_profile)
                                        {{$tache->tarif}}
                                     @endif
                                 @endforeach
                              </td>
                  
                           </tr>
                     @endforeach
                   
                        </tbody>
                       
                       <tr class="border ">
                        <td class="bg-white border-0" ></td>
                        <td class="bg-white border-0" ></td>
                        <td class="bg-white border-0" ></td>
                        <td class=" border-0 fw-bold p-2 shadow-sm"  style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem">Total</td>
                        <td class=" text-dark shadow-sm  border-0 rounded-2 fw-bold p-2"  style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem"> 
                           @foreach ($montant_total as $prix )
                              {{$prix->montant}}
                           @endforeach
                           Ar 
                           </td>
                       </tr>
                 
                     </table>
                  </div>
         
         </div>
         
                 
         
         </div>
         
           </div>
         
         {{-- affichage des items --}}
         
           <div class="container bg-white mt-2 rounded-2 p-2" style="font-size: 0.7rem">
            <div class="col-lg-10 col-10 offset-1 offset-lg-0  card border-0 shadow-none bg-white">
               <div class="card-body">
                  <div class="card-title">
                  
                     {{-- <p for="" class="fw-bold offset-lg-1 " style="font-size: 0.9rem ">Apperçu du devis</p> --}}
                     <h5 class="offset-lg-1 fw-bold text-lg text-secondary">List d'item</h5>
                     <hr class="offset-lg-1 col-2 text-warning">
                  </div>
      
            <br>
            <div class="pl-2">
               <table class=" border offset-lg-1 table  table-sm " >
                  <thead class="">
                     <tr class="border">
                        <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem" >Section</th>
                        <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem" >Item</th>
                        <th scope="col" class=" border-0" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem" >Durée ( jours )</th>
                        <th  scope="col" class=" border-0 p-2" style="background:rgba(209, 221, 225, 0.097);font-size:0.9rem">Profil</th>
                   
                     
                     </tr>
                  </thead>
                  <tbody>
                    
                     @foreach ($taches as $tache)
                  
                     <tr>
                       
                        <td class="text-capitalize border-0 bg-white ">
                        @foreach ($secTests as $sec)
                           @if ($tache->id_items == $sec->id)
                           @foreach ($sections as $section)
                               @if($section->id == $sec->id_section)

                               {{$section->designation}}
                               @endif
                           @endforeach
                           @endif
                       @endforeach
                        </td>
                      
                        <td class="text-capitalize border-0 bg-white ">
                        @foreach ($secTests as $sec)
                           @if ($tache->id_items == $sec->id)
                             {{$sec->designation}}
                           @endif
                       @endforeach
                        </td>
                        <td class="border-0  bg-white">
                           @foreach ($profiles as $profile)
                           @if ($profile->id == $tache->id_profile)
                              {{$tache->tarif / $profile->tarif}}
                           @endif
                       @endforeach
      
                        </td>
                        <td class="text-capitalize border-0 bg-white ">
                           @foreach ($profiles as $profile)
                               @if ($profile->id == $tache->id_profile)
                                  {{$profile->profile}}
                               @endif
                           @endforeach
                        
                        </td>
                       
            
                     </tr>
               @endforeach
             
                  </tbody>
                 
                
           
               </table>
            </div>
               </div>
               </div>
        </div>
         
           {{-- planning afficahege --}}
         
         @foreach ($alls as $all)
            @if ($all->choix_planification != "")
            <div class="container  bg-white mt-2 rounded-2 p-2 ">
               <div class="col-lg-4 offset-1 offset-lg-1 offset-lg-0 col-4 p-2 me-2  rounded-3 mb-2">
                 
                  <h5 class="fw-bold text-lg text-secondary ">Planning</h5>
                  <hr class=" col-2 text-warning">
              </div>
               <div class="offset-lg-1 offset-0 col-12 col-lg-11" style="font-size:0.7rem">
                  <div class="col-lg-4 offset-1 offset-lg-0 col-4 p-2 me-2 border rounded-3 mb-2">
                     @foreach ($planns as $plan)
                     <b>Déscription</b> {{$plan->description}} <br>
                     <b>Date debut : </b>{{ $plan->date_debut}} <br>
                         
                     <b>Delai de mise en Oeuvre :</b> {{ $plan->delai}} jours
                     <br>
                     <b> Date Fin : </b> {{ $plan->date_fin}}
                     @endforeach
                 </div>
                 <br>   
                 <h5 class="offset-lg-0 offset-1 fw-bold text-lg text-secondary ">Tableau de planning</h5>
                 <hr class="  offset-1 offset-lg-0  col-2 text-warning">
                 @foreach ($planns as $item)
                 
                     @if ($item->choix_planning==true)
                           <table style="background: white;cursor: pointer;overflow:scrool" id="user-list-table" class="table text-sm  text-capitalize border rounded-1  display table-responsive "  data-bs-toggle="data-table">
                                          
               
                              @foreach ( $sections as $sec )  
                              
                              @foreach ( $secTests as $item )
                              @foreach ($avoirs as $it )
                              
                              
                              
                              @if ($sec->id == $item->id_section)
                              @if ($it->id_items == $item->id)
                           
                              <tr>          
                                    <th rowspan="" class="border w-100 fw-bold" style="background:rgba(209, 221, 225, 0.097); font-size:0.6rem">{{$item->designation}} : {{$it->date_debut + 1}} au {{$it->date_debut + $it->duree }} jours </th>
                        
                           
                                       @if ($it->date_debut > 0)
                                          <td class="border-0 bg-white"></td>
                                       <td  colspan="{{ceil($it->date_debut /5)}}" class="border-0 bg-white"></td>
                                       <td  title="{{$item->designation}}" colspan="{{ceil($it->duree / 5)}}" class=" border-0 bg-white " style="font-size: 0.8rem;height:0.7px;padding-left:0;"  >
                                          <div    class=" progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm  {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:50%; transition: width 2s ease 0s;"></div>
                                       </td>

                                       @else
                                       <td  class="border-0 bg-white"></td>
                                       <td title="{{$item->designation}}"  colspan="{{ceil($it->duree / 5)}}" class=" border-0 bg-white " style="font-size: 0.8rem;padding-left:0;height:0.7px" >
                                          <div  class=" pl-0 progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm   {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:50%; transiti2on: width s ease 0s;"></div>
                                       </td>
                                       @endif
                              </tr>
                              

                              @endif
                              @endif
                              @endforeach
                              @endforeach
                              @endforeach
                        
                        
                              <tr>
                                 
                              </tr>
                              <tr>
                              
                                    
                                    <th class="border  text-center" style="background:rgba(51, 52, 53, 0.097);font-size:0.9rem;color:black;">Etape</th>
                                    
                                    
                                    <td class="border-0 bg-white"></td>

                                    @if ((($total_colonne)) <= 80 )
                                    @for ($i = 1;$i<(18);$i++)
                                    <td title="{{$i}}e semaine" wire:click="submited('{{$i}}')" id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Semaine {{$i}}</td>
                                    @endfor
                                @else
    
                                @for ($i = 1;$i<($total_colonne)/3;$i++)
                                    <td title="{{$i}}e semaine" wire:click="submited('{{$i}}')" id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Semaine {{$i}}</td>
                                @endfor
                                @endif
                              
                                    {{-- @for ($i = 1;$i<($total_colonne/3)+1;$i++)
                                       <td title="{{$i}}e semaine"  id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Semaine {{$i}}</td>
                                    @endfor --}}
                                    {{-- @for ($i = 1;$i<$total_colonne+1;$i++)
                                    <th   class=" bg-white border-top-0 " style="box-shadow:0 0 1px black;padding:10px;font-size:0.7rem">J{{$i}}</th>
                              @endfor --}}
                                    
                                    </tr>
                              
                              
                  
                        </table>
                     @else
                           <table style="background: white;cursor: pointer;overflow:scrool" id="user-list-table" class="table text-sm  text-capitalize border rounded-1  display table-responsive "  data-bs-toggle="data-table">
                                                
                  
                              @foreach ( $sections as $sec )  
                           
                              @foreach ( $secTests as $item )
                              @foreach ($avoirs as $it )
                              
                              
                              
                              @if ($sec->id == $item->id_section)
                              @if ($it->id_items == $item->id)
                              
                                    <tr>          
                                       <th rowspan="" class="border fw-bold w-100" style="background:rgba(91, 125, 137, 0.293); font-size:0.6rem">{{$item->designation}} : {{$it->date_debut + 1}} au {{$it->date_debut + $it->duree }} jours </th>
                           
                              
                                          @if ($it->date_debut > 0)
                                                <td class="border-0 bg-white"></td>
                                          <td  colspan="{{$it->date_debut}}" class="border-0 bg-white"></td>
                                          <td  title="{{$item->designation}}" colspan="{{$it->duree}}" class=" border-0 bg-white " style="font-size: 0.8rem;height:0.7px;padding-left:0;" >
                                                <div    class=" progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm  {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:100%; transition: width 2s ease 0s;"></div>
                                          </td>

                                          @else
                                          <td  class="border-0 bg-white"></td>
                                          <td title="{{$item->designation}}"  colspan="{{$it->duree}}" class=" border-0 bg-white " style="font-size: 0.8rem;padding-left:0;height:0.7px" >
                                                <div  class=" pl-0 progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm  {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:100%; transiti2on: width s ease 0s;"></div>
                                          </td>
                                          @endif
                                    </tr>
                                          {{-- <th class="bg-white rounded-3"></th> --}}

                                    @endif
                                    @endif
                                    @endforeach
                                    @endforeach
                              @endforeach
                           
                           
                                    <tr>
                                       {{-- <td class="border-0 bg-white"></td> --}}
                                    </tr>
                                    <tr>
                                    
                                       
                                       <th class="border bg-dark text-white text-center" style="background:rgba(51, 52, 53, 0.097);font-size:0.9rem;color:black;">Etape</th>
                                       
                                       
                                       <td class="border-0 bg-white"></td>
                                       @if ($total_colonne <= 25)
                                       @for ($i = 1;$i<28;$i++)
                                       <td title="{{$i}}e jour" wire:click="submited('{{$i}}')" id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Jour {{$i}}</td>
                                       @endfor
                                   @else
   
                                       @for ($i = 1;$i<$total_colonne+2;$i++)
                                           <td title="{{$i}}e jour" wire:click="submited('{{$i}}')" id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Jour {{$i}}</td>
                                       @endfor
                                   @endif
                                       {{-- @for ($i = 1;$i<$total_colonne+1;$i++)
                                          <td title="{{$i}}e jour" id="debut" class=" bg-white border-top-0 border " style="box-shadow:0 0 1px black;padding:5px;font-size:0.7rem">Jour {{$i}}</td>
                                       @endfor --}}
                                       {{-- @for ($i = 1;$i<$total_colonne+1;$i++)
                                       <th   class=" bg-white border-top-0 " style="box-shadow:0 0 1px black;padding:10px;font-size:0.7rem">J{{$i}}</th>
                                    @endfor --}}
                                       
                                       </tr>
                                    
                                    
                        
                           </table>
                     @endif
                 @endforeach
                </div>
            </div>
            @endif
         @endforeach
         
         
         
         
         
      </div>



</div>
