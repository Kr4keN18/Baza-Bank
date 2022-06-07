
@foreach ($konta as $konto)
@if(Auth()->user()->id == $konto->id)


<div class="col-xl-6">
              <div class="row">
                <div class="col-md-6 col-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                      <i class="material-icons opacity-10">account_balance_wallet</i>  
                      
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">Saldo konta</h6>
                      <hr class="horizontal dark my-3">
                    <h5 class="mb-0">{{$konto->saldo}} zł</h5>
                    

                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                      <i class="material-icons opacity-10">account_balance</i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">Numer Konta</h6>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">Numer: {{$konto->numer}}</h5>
                      <h5 class="mb-0">IBAN: {{$konto->iban}}</h5>
                      <h5 class="mb-0">SWIFT: {{$konto->swift}}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endif
            @endforeach
           