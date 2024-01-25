<div class="container  bg-white p-2 rounded-3 ">
    <div class="row" >
       <div  style="margin-left:10px">
          <h5  style="font-family:'Trebuchet MS', sans-serif;font-size:1.2rem">DEVIS</h5>
 
       </div>
       
    </div>
    <div  style="background: rgba(227, 243, 243, 0.371);font-size:0.8rem">
       <div  ">
          @foreach ($alls as $devis )
          <label  >N° Devis :</label> <span style="font-size: 1.1rem"> {{$devis->id}}</span><br>
          <label class="mt-2">Chef de projet  :</label> <br>
             
                @foreach ($projets as $projet )
                @if ($projet->id == $devis->id_projet)
                   @foreach ($chefs as $chef)
                   @if ($chef->id == $projet->id_employer)
                  <span class="text-primary"> {{$chef->nom}}</span>
                   @endif
                   @endforeach
                @endif
                @endforeach
          
           <br>
          <label class="mt-2">Client  :</label> <br>
          @foreach ($clients as $client )
             @if($client->id == $devis->id_client)
              <span class="text-primary">  {{$client->nom}} {{$client->prenom}}</span>
             @endif
          @endforeach   
          
 
       </div>
 
       <div class="col-lg-4 ">
          <label class="" >Objet :</label> <br>
         <span class="text-primary fw-bold text-uppercase ">    {{$devis->objet_chiffrage}}</span>
           <br>
          <label class=" text-capitalize mt-2" >Projet : </label> <br> 
          @foreach ($projets as $projet )
             @if ($projet->id == $devis->id_projet)
            <span class="text-primary fw-bold text-capitalize">
             {{$projet->titre}}
            </span>
             
          <br>
          {{-- <label class="fw-bold" > :</label> <br> --}}
 
 
        </div>
        <div class="col-lg-4">
             
          <label class="" >Date de création :</label> <br>
          <span class="fw-bold text-primary">{{$devis->created_at}}</span>
          <br>
          <label class="text-capitalize mt-2" >Contexte : </label><br>
           <span class="fw-bold text-primary text-capitalize">{{$projet->contexte}}</span> <br>
 
          {{-- <label class="fw-bold" >Client :</label> <br> --}}
          @endif
          @endforeach  
          @endforeach
 
        </div>
       
 
    </div>
 
 
 
 
 
 
 
 
 
    <div class="container bg-white mt-4 rounded-3 text-capitalize" style="font-size: 0.7rem">
       
       <div class="col-lg-10   card border-0 shadow-none bg-white">
          <div class="card-body">
             <div class="card-title">
             
                <p for="" class="fw-bold offset-lg-1 " style="font-size: 0.9rem ">Apperçu du devis</p>
             </div>
 
             <table style="border-collapse:collapse" >
                <thead class="">
                   <tr class="border">
                      
                      <th  scope="col" class=" border-0 p-2">Profil</th>
                      <th scope="col" class=" border-0" >Item</th>
                      <th scope="col" class=" border-0" >jour</th>
                      <th scope="col" class=" border-0">Tarif ( Ar/ j )</th>
                      <th scope="col" class=" border-0" >Montant (Ar)</th>
                   
                   </tr>
                </thead>
                <tbody>
                  
                   @foreach ($taches as $tache)
                
                   <tr>
                     
    
                      <td class="text-capitalize border-0 bg-white fw-bold">
                         @foreach ($profiles as $profile)
                             @if ($profile->id == $tache->id_profile)
                                {{$profile->profile}}
                             @endif
                         @endforeach
                      
                      </td>
                      <td class="text-capitalize border-0 bg-white fw-bold">
                      @foreach ($secTests as $sec)
                         @if ($tache->id_items == $sec->id)
                           {{$sec->designation}}
                         @endif
                     @endforeach
                      </td>
                      <td class="border-0 fw-bold bg-white">
                         @foreach ($profiles as $profile)
                         @if ($profile->id == $tache->id_profile)
                            {{$tache->tarif / $profile->tarif}}
                         @endif
                     @endforeach
    
                      </td>
                      <td class="border-0 fw-bold bg-white">
                         @foreach ($profiles as $profile)
                         @if ($profile->id == $tache->id_profile)
                            {{$profile->tarif}}
                         @endif
                     @endforeach
                      </td>
                      <td class="border-0 fw-bold bg-white">
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
                <td class="bg-white border-0 fw-bold p-2" >Total</td>
                <td class="bg-success text-white border-0 rounded-2 fw-bold p-2" > Ar 
                   @foreach ($montant_total as $prix )
                      {{$prix->montant}}
                   @endforeach
                   </td>
               </tr>
         
             </table>
          </div>
 
 </div>
 
         
 
 </div>
 
   </div>
 @foreach ($alls as $all)
    @if ($all->choix_planification != "")
    <div class="container bg-white mt-2 rounded-2 p-2  ">
       <h5 class="fw-bold text-lg text-info">Planning</h5>
       <br>
       <div class="" style="font-size:0.7rem">
    
          <div class="col-lg-4 p-2 me-2 border rounded-3 mb-2">
             @foreach ($planns as $plan)
             <b>Déscription</b> {{$plan->description}} <br>
             <b>Date debut : </b>{{ $plan->date_debut}} <br>
                 
             <b>Delai de mise en Oeuvre :</b> {{ $plan->delai}} jours
             <br>
             <b> Date Fin : </b> {{ $plan->date_fin}}
             @endforeach
         </div>
    
          <table style="background: white" id="user-list-table" class="table table-responsive text-sm  text-capitalize border rounded-1  display p-1 "  data-bs-toggle="data-table">
                              
    
             @foreach ( $sections as $sec )  
             @foreach ( $secTests as $item )
             @foreach ($avoirs as $it )
                 
          
    
                 @if ($sec->id == $item->id_section)
                 @if ($it->id_items == $item->id)
                         <tr>
                             <th class="border " style="background:white">{{$sec->designation}}</th>
                             @if ($it->date_debut > 0)
                                 <td class="border-0 bg-white"></td>
                             <td colspan="{{$it->date_debut}}" class="border-0 bg-white"></td>
                             <td data-aos="fade-right" data-aos-delay="800" colspan="{{$it->duree}}" class="{{$sec->couleur}} border-0 text-center fw-bold text-white rounded-end-4 shadow" style="font-size: 0.8rem">{{$item->designation}}</td>
    
                             @else
                             <td class="border-0 bg-white"></td>
                             <td data-aos="fade" data-aos-delay="200" colspan="{{$it->duree}}" class="{{$sec->couleur}} border-0 text-center fw-bold text-white rounded-end-4 shadow" style="font-size: 0.8rem">{{$item->designation}}</td>
                             @endif
                         </tr>
    
                 @endif
                 @endif
                 @endforeach
                 @endforeach
             @endforeach
         
           
                 <tr>
                     <td class="border-0 bg-white"></td>
                 </tr>
                 <tr>
                 
                     
                     <th class="border bg-dark text-white">Etape</th>
                     
                     
                     <td class="border-0 bg-white"></td>
                     @for ($i = 1;$i<$total_colonne+1;$i++)
                         <td class=" bg-white border-top-0 " style="box-shadow:0 0 1px black;padding:10px;font-size:0.6rem">J{{$i}}</td>
                     @endfor
                     
                     </tr>
                    
                 
       
         </table>
    
       </div>
    </div>
    @endif
 @endforeach
 
 
 
 
 
 
 