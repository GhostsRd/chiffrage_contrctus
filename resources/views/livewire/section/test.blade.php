<div >
    <div>

    <div class="container col-lg-12 p-2 rounded-3">
        <div class="col-lg-10 offset-lg-1     p-2">
            <ul id="top-tab-list" class="p-0 row list-inline">

                <li id="personnel" data-aos="fade-right-left" data-aos-delay="800" class="mb-2 col-lg-2  col-md-6   shadow-sm rounded-5 past">
                    <a href="{{url('/devis')}}"  class="nav-link">
                        <div class="iq-icon me-3  fw-bold">
                            <svg data-aos="fade-down" data-aos-delay="1900" class="svg-icon icon-20 rounded-4 text-primary fw-bold " xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="dark-wizard text-white ">Devis</span>
                            </div>
                    </a>
                </li>
                <li id="personnel" data-aos="fade-right-left" data-aos-delay="900" class="mb-2 col-lg-2  col-md-6 text-start  shadow-sm rounded-5  past">
                    <a href="{{url('/devis')}}" class="nav-link">
                        <div class="iq-icon me-3 text-center fw-bold">
                            <svg data-aos="fade-down" data-aos-delay="2000" class="icon-32 text-warning  fw-bold" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M15.7729 9.30504V6.27304C15.7729 4.18904 14.0839 2.50004 12.0009 2.50004C9.91694 2.49104 8.21994 4.17204 8.21094 6.25604V6.27304V9.30504" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7422 21.0004H7.25778C4.90569 21.0004 3 19.0954 3 16.7454V11.2294C3 8.87937 4.90569 6.97437 7.25778 6.97437H16.7422C19.0943 6.97437 21 8.87937 21 11.2294V16.7454C21 19.0954 19.0943 21.0004 16.7422 21.0004Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                            <span class="dark-wizard text-white  ">Projet</span>
                        </div>
                    </a>
                </li>
                <li id="personnel" data-aos="zoom-in" data-aos-delay="1000" 
                    style="color: violet"
                class="mb-2 col-lg-3  col-md-6   shadow-sm   active">
                    <a href="#chiffrage" class="nav-link">
                        <div class="iq-icon me-3 text-center ">
                            <svg data-aos="fade-down" data-aos-delay="2100" class="icon-32 text-white " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M10.33 16.5928H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M13.1406 6.90042H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                            <span class="dark-wizard text-white fw-bold ">Chiffrage</span>
                        </div>
                    </a>
                </li>
                

                <li id="personnel" data-aos="fade-right-left" data-aos-delay="1100" wire:click="verificationPlanning" class="mb-2 col-lg-2 bg-white  m-2 col-md-6 text-start shadow-sm rounded-5" style="cursor: pointer">
                    {{-- <a href="{{url('/planification')}}" class="nav-link"> --}}
                        <div class="iq-icon me-3 text-center fw-bold">
            
                            <svg class="icon-32  fw-bold" 
                            style="color: #C6FF00"
                            data-aos="fade-down" data-aos-delay="2200" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                                                                                  
                            <span class="dark-wizard ">Planning</span>
                        </div>
                    {{-- </a> --}}
                </li>
                <li wire:click="verificationPlanning" id="personnel" data-aos="fade-right-left" data-aos-delay="1200" class="mb-2 col-lg-2 m-2 bg-white  col-md-6 text-start shadow-sm rounded-5" style="cursor: pointer">
                    
                        <div class="iq-icon me-3 text-center fw-bold">
                            <svg data-aos="fade-down" data-aos-delay="2300" class="svg-icon icon-20 rounded-4 text-danger fw-bold" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            
                            <span class="dark-wizard ">Facture</span>
                        </div>
                    
                </li>
                </ul>
        </div>
        {{-- <hr class="col-lg-5 offset-3"> --}}
    <br>


                  <div class="row ">
                   
                    <div class="col-lg-11 " data-aos="zoom-in-out" data-aos-delay="400">
                        <div class="col-2 col-lg-2 offset-lg-1 bg-white  shadow-sm  rounded-3">
                         
                                <b class="nav-item dropdown" style="list-style: none">
                                    <a id="navbarDropdown" class="fw-bold dropdown-toggle  bg-none text-dark  p-sm-2 rounded-3 text-center  nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{-- <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg> --}}
                                    Chiffrage
                                    </a>
             
                                   <div class="dropdown-menu dropdown-menu-end bg-white text-center border-0 shadow rounded-start-0 rounded-top-5" aria-labelledby="navbarDropdown" style="cursor: pointer">
        
                                    @foreach($sectionalls as $section)
                                    <span class="rounded-1 fw-bold  nav-link text-capitalize" wire:click="section('{{$section->designation}}')" >{{$section->designation}} </span>
        
                                       <hr  >
                                    @endforeach
                                   </div>
                                </b>
                    
                          
                          </div>   
                        @foreach($sections as $section)

         
                        <div id="{{$section->id}}"  class="col-lg-11 offset-lg-1 me-2 bg-white  p-2 mt-2 rounded-3 bg-none shadow-sm p-lg-2" data-aos="fade-up" data-aos-delay="600">
            
                            
                            <svg style="cursor: pointer" class="icon-20 text-danger   anim" wire:click="removeSection('{{$section->id}}')" width="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 20L20 4M20 20L4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                
                                </svg>
                            
                            <br><br>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 col-7">
                                                <h5 class="fw-bold    text-capitalize">
                                                    <svg class="icon-32 text-secondary " width="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                                                    {{$section->designation}}</h5>
                                            </div>
                                            <div class="col-lg-2 offset-lg-6 col-4">
                                                <button class="btn btn-success btn-sm rounded-5 shadow border-0 " wire:click.lazy="addTest( {{$section->id }} )">
                                                    <svg class="icon-32 " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                                </svg>                            
                                                    
                                                    Item</button>
                                            
                                            </div>
                                            <div class="col-lg-3">
                                            
                                            </div>
                                        </div>
                                        <br>
                                        
                        
                                    </div>
                                    <div class="coloumn">
                        
                                    
                            
                                @foreach ($secTests as $dev )
                                        
                                @if($dev->id_section == $section->id)
                                <form method="POST" action="{{url('/sectionTest/modifier')}}">
    
                                    @csrf
                                    <input type="hidden" name="id" value="{{$dev->id}}">
                                    <div class="row me-2 ms-2">                                    
                                        <div class="col-lg-5">
                                            <input  type="text"  name="designation" id="" class="form-control-plaintext  p-1 w-100  shadow-sm  rounded-3  text-muted mt-2"  placeholder="Designation de l'item" value="{{$dev->designation}}" required>
                                        </div>
                                        <div class="col-lg-2 "> <input   type="number" name="temps_passe" id="" class="shadow-sm  form-control-plaintext p-1   rounded-3  mt-2 text-muted " placeholder="duré en jours" value="{{$dev->temps_passe}}" required></div>
                                        <div class="col-lg-3  ">
                                            <select type="submit" name="profile" id="" class="form-control-plaintext p-1 rounded-3 shadow-sm text-capitalize      text-muted mt-2 " required>
                                                <option value="">select profile</option>
                                                @foreach ($profiles as $profile )
                                            
                                                <option value="{{$profile->id}}">{{$profile->profile}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-1 offset-lg-0 offset-4">
                                            
                                            <button type="submit" class="border  text-center btn btn-secondary  btn-sm mt-2  rounded-5 shadow " >
                                                @if (session('id') )
                                                    @if ($dev->id == session('id') )
                                                    <svg class="icon-20 text-white" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M23 7L6.44526 17.8042C5.85082 18.1921 5.0648 17.9848 2.72059 17.3493L1 10.4798" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                                     </svg>
                                                    @endif
                                           
                                                @endif
                                                Valider

                                            </button>
                                    </div>
                                </form>
                                        <div class="col-lg-1 col-1 offset-4 offset-lg-0  text-center" ><a  href="{{url("/sectionTest",$dev->id)}}" class="nav-link  mt-2" >
                                                <svg data-aos="fade-left" data-aos-delay="800"  class="icon-32  anim text-danger" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                                                    
                                                    </a>
                                        </div>   
                                </div>
                                
                            
                                @endif
                                
                                
                                
                                @endforeach
                                        <br>
                                        <br>
                        
                                    
                            </div>
                        
                        </div>  
    
                  
                    
                      @endforeach
                    </div>
                  </div>

                 
                  
      
                <hr class="offset-lg-5 col-lg-5">
                <div>
    
                    
                    <a href="{{url('/projet')}}" >
                        <svg class="icon-32 text-primary offset-lg-10 offset-5" width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M12 22.0002C6.485 22.0002 2 17.5142 2 12.0002C2 6.48624 6.485 2.00024 12 2.00024C17.514 2.00024 22 6.48624 22 12.0002C22 17.5142 17.514 22.0002 12 22.0002Z" fill="currentColor"></path>                                <path d="M13.4425 16.2208C13.2515 16.2208 13.0595 16.1478 12.9135 16.0018L9.42652 12.5318C9.28552 12.3908 9.20652 12.1998 9.20652 11.9998C9.20652 11.8008 9.28552 11.6098 9.42652 11.4688L12.9135 7.99683C13.2065 7.70483 13.6805 7.70483 13.9735 7.99883C14.2655 8.29283 14.2645 8.76783 13.9715 9.05983L11.0185 11.9998L13.9715 14.9398C14.2645 15.2318 14.2655 15.7058 13.9735 15.9998C13.8275 16.1478 13.6345 16.2208 13.4425 16.2208Z" fill="currentColor"></path>                                </svg>                            
    
                    </a>
                
                    <svg class="icon-32 text-info" width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" wire:click="verificationPlanning">                                <path opacity="0.4" d="M12 1.99976C17.515 1.99976 22 6.48576 22 11.9998C22 17.5138 17.515 21.9998 12 21.9998C6.486 21.9998 2 17.5138 2 11.9998C2 6.48576 6.486 1.99976 12 1.99976Z" fill="currentColor"></path>                                <path d="M10.5575 7.77917C10.7485 7.77917 10.9405 7.85217 11.0865 7.99817L14.5735 11.4682C14.7145 11.6092 14.7935 11.8002 14.7935 12.0002C14.7935 12.1992 14.7145 12.3902 14.5735 12.5312L11.0865 16.0032C10.7935 16.2952 10.3195 16.2952 10.0265 16.0012C9.73448 15.7072 9.73548 15.2322 10.0285 14.9402L12.9815 12.0002L10.0285 9.06017C9.73548 8.76817 9.73448 8.29417 10.0265 8.00017C10.1725 7.85217 10.3655 7.77917 10.5575 7.77917Z" fill="currentColor"></path>                                </svg>                           
                 {{-- </button> --}}
                </div>
    </div>
    <div>
       
    </div>

    {{-- notifcation --}}
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

@if (session('info'))

  <div id="notification" class="rounded-3 p-2 active shadow  ">
  
    <svg class="icon-32 text-primary" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 11.9993C2 6.48027 6.48 1.99927 12 1.99927C17.53 1.99927 22 6.48027 22 11.9993C22 17.5203 17.53 21.9993 12 21.9993C6.48 21.9993 2 17.5203 2 11.9993ZM11.12 8.20927C11.12 7.73027 11.52 7.32927 12 7.32927C12.48 7.32927 12.87 7.73027 12.87 8.20927V12.6293C12.87 13.1103 12.48 13.4993 12 13.4993C11.52 13.4993 11.12 13.1103 11.12 12.6293V8.20927ZM12.01 16.6803C11.52 16.6803 11.13 16.2803 11.13 15.8003C11.13 15.3203 11.52 14.9303 12 14.9303C12.49 14.9303 12.88 15.3203 12.88 15.8003C12.88 16.2803 12.49 16.6803 12.01 16.6803Z" fill="currentColor"></path>                            </svg>                        
        {{-- <svg class="icon-32 text-success" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" fill="currentColor"></path>                            </svg>                         --}}
        <a href="" class="nav-link ms-1">
            <span class="fw-bold">Info</span><br>
           {{-- RAKTOnirina rado leonce RAKTOnirina LEONCERARAKOROIN --}}
            {{session('info')}} <span class="text-danger fw-bold"> </span>
           
           </a>
  
   </div>
  </div>
@endif

@if(session('projet'))
  <div id="modal1" class="form shadow w-75 active" >
  
    <div class="col-lg-12">
      <h5 class="fw-bold title-form text-center" >Sélectionner les items pour le projet</h5>

       <hr>
    <form wire:submit.prevent="EnvoyerItems">

    
    @foreach($sections as $section)
       
       <div class="col-lg-4 col-7">
        <h5 class="fw-bold    text-capitalize">
            <svg class="icon-32 text-secondary " width="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
            {{$section->designation}}</h5>
    </div>
         
        <div id="{{$section->id}}"  class="col-lg-12  bg-white offset-lg-1  mt-2 bg-none  p-lg-2" >

        
                  
                    <div class="coloumn">
        
                    
            
                @foreach ($suggestion as $dev )     
                @if($dev->id_section == $section->id)
                <div class="row me-2 ms-2">
                    
                        <div class="col-lg-6">
                            <input  type="text" disabled name="designation" id="" class="form-control-plaintext  p-1 w-100  shadow-sm  rounded-3  text-muted mt-2"  placeholder="Designation de l'item"
                             value="{{$dev->designation}}" required>
                        </div>
                        <div class="col-lg-3 "> 
                            <input disabled  type="number" name="temps_passe" id=""
                             class="shadow-sm  form-control-plaintext p-1   rounded-3  mt-2 text-muted " placeholder="duré en jours"
                              value="{{$dev->temps_passe}}" required></div>
                        
                        <div class="col-lg-3">
                            <input type="checkbox" wire:model="tableItem" value="{{$dev->id}}" class=" mt-3">
                        </div>
                           
                </div>
                @endif
                @endforeach
                        <br>
                        <div class="row offset-lg-8">

                            <div class="col-lg-2 ">
                                <button class="btn btn-primary btn-sm rounded-3  border-0" wire:click.prevent="EnvoyerItems">Valider</button>
                                
                            </div>
                            <div class="col-lg-2 ms-2">
                                <button class="btn btn-outline-danger border border-danger btn-sm rounded-3 " >
                                    <a href="" class="nav-link">Annuler</a>
                                </button>
                                
                            </div>
                        </div>
                    
            </div>
        
        </div>  

  
    
      @endforeach
    </form>    
      </div>

  
  </div>

@endif
</div>
