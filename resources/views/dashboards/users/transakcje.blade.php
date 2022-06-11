@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
        <div class="panel-heading">Nowa Transakcja</div>

            <div class="panel panel-default">

                <div class="panel-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <div class="col-md-12">
                        <div class="col-md-6" style="padding-left: 0;">
                            <form method="post" action="/user/przelewlista">
                            {{ csrf_field() }}
                                <!--<div class="form-group">
                                    <label for="exampleInputEmail2">Tytuł przelewu</label>
                                    <input type="text" name="deposit" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp2">
                                    <input type="hidden" name="type" value="1" />
                                </div>-->
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail2">tytul</label>
                                    <input type="text" name="tytul" class="form-control" id="tytul" aria-describedby="emailHelp2">
                                    
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail2">kwota</label>
                                    <input type="number" name="kwota" class="form-control" id="kwota" aria-describedby="emailHelp2">
                                    
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail2">nadawca</label>
                                    @foreach($klients as $klient)
                                        @if(Auth()->user()->id == $klient->klient_id)
                                            <input type="text" name="nad" class="form-control" id="nad" aria-describedby="emailHelp2" value="{{$klient->imie}} {{$klient->nazwisko}}" disabled>
                                        @endif
                                    @endforeach
                                </div>

                                @foreach($klients as $klient)
                                        @if(Auth()->user()->id == $klient->klient_id)
                                            <input type="text" name="nadawca" class="form-control" id="nadawca" aria-describedby="emailHelp2" value="{{$klient->id}}" hidden>
                                        @endif
                                @endforeach
                                
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail2">odbiorca</label>
                                    <select id="odbiorca" name="odbiorca" class="form-control" aria-describedby="emailHelp2" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                        @foreach($klients as $klient)
                                            @if(Auth()->user()->id != $klient->klient_id)
                                                <option value="{{ $klient->id }}">{{ $klient->imie }} {{ $klient->nazwisko }}</option>
                                            @endif
                                        @endforeach
                                     </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">data wykonania</label>
                                    <input type="datetime-local" name="data_wykonania" class="form-control" id="data_wykonania" aria-describedby="emailHelp">
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Potwierdź</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection