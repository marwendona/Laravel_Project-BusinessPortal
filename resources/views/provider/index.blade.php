@extends("layouts.template")

@section('contenu')

<div class="container">
        
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
               
                <div>

   
@if(Session::has('success'))
<div class="alert alert-success">
    <p>{{Session::get('success')}}</p>
</div>
@endif

<div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
    <h1>votre profil</h1>

</div>

<br />

@foreach ($providers as $Provider)

  @if( Auth::user()->id ===$Provider->User_id  )

        <section class="bg-light">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 mb-4 mb-sm-5">
                      <div class="card card-style1 border-0">
                          <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                              <div class="row align-items-center">
                                  <div class="col-lg-6 mb-4 mb-lg-0">
                                      <img src="{{asset('images/'.$Provider->photo)}}" width="400"
                                      height="341">
                                  </div>
                                  <div class="col-lg-6 px-xl-10">
                                      <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                          <h3 class="h2 text-white mb-0">   Bienvenue   </h3>
                                      </div>
                                      <br>
                                      <ul class="list-unstyled mb-1-9">
                                          <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Nome:</span> {{$Provider->nom_provider}} </li>
                                          <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Prenome:</span> {{$Provider->prenom_provider}}</li>
                                          <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{ Auth::user()->email  }}</li>
                                          <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">téléphone:</span>{{$Provider->phone_number}}</li>
                                      </ul>
                                      <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                          <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                          <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                          <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                          <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 mb-4 mb-sm-5">
                      <div>
                          <span class="section-title text-primary mb-3 mb-sm-4">Description</span>
                          <p> {{$Provider->description}} </p>
                       </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-12 mb-4 mb-sm-5">
                             
                              <div>
                                 <!-- <span class="section-title text-primary mb-3 mb-sm-4">Education</span>
                                  <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                  <p class="mb-1-9">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                 -->
                                 <br />     <br />
                                 <a href="{{route('Provider.edit', $Provider->id)}}"><button class="btn btn-outline-info" type="button">Modifier</button></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        
    
   
  @endif

@endforeach


</tbody>



</div>
</div>
</div>
</div>
</div>
</div>
</section>



@endsection