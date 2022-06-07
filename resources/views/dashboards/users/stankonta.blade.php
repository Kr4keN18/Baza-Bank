
@foreach ($kartas as $karta)
@foreach ($konta as $konto)
@if($karta->id == $konto->karta_id)
<div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl">
                  <img src="../assets/img/illustrations/pattern-tree.svg" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                  <span class="mask bg-gradient-dark opacity-10"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="material-icons text-white p-2">wifi</i>
                    <h5 class="text-white mt-4 mb-5 pb-2">{{$karta->numer}}</h5>
                    <!-- &nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852 -->
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Właściciel karty</p>
                          @foreach ($kliencis as $klient)
                          @if(Auth()->user()->id == $klient->klient_id)
                          <h6 class="text-white mb-0">{{$klient->imie}} {{$klient->nazwisko}}</h6>
                          @endif
                          @endforeach
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Ważna do:</p>
                          <h6 class="text-white mb-0">{{$karta->okres_waznosci}}</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
@endforeach
@endforeach




@foreach ($konta as $konto)
@if(Auth()->user()->id == $konto->id)


<div class="col-xl-6">
              <div class="row">
        <!--class="col-md-6 col-6"-->  
        <div>
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

            <!--class="col-md-6 col-6"-->
            <div>
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
           