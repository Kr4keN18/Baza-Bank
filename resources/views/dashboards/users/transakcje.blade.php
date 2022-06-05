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
                            <form method="post" action="{{route('user.transakcje')}}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Tytuł przelewu</label>
                                    <input type="text" name="deposit" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp2">
                                    <input type="hidden" name="type" value="1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Typ przelewu</label>
                                    <input type="text" name="withdraw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <input type="hidden" name="type" value="0" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Kwota</label>
                                    <input type="text" name="deposit" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp2">
                                    <input type="hidden" name="type" value="1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Odbiorca</label>
                                    <input type="text" name="withdraw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <input type="hidden" name="type" value="0" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Numer Konta</label>
                                    <input type="text" name="withdraw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <input type="hidden" name="type" value="0" />
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