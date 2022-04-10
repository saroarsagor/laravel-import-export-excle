@extends('layouts.app')
@section('title')
Excle Import
@endsection
<style type="text/css">
.lftLogo img{width: 88%}
.lftLogo{margin-top: 60px;}
.topHdr{margin-top: 60px;}
.cardHder{font-size: 22px}
@media screen and (max-width: 766px){
.lftLogo{margin-top: 20px;}

.topHdr{margin-top: 40px;}
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div class="card topHdr" style="">
                <div class="card-header cardHder">
                    <h4>Excle Import Referrals Table</h4>
                    
                    
                </div>
                <div class="card-body" style="padding: 60px 15px">
                    <form method="POST" action="{{ route('import-data') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Import Single Referrals Table') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control-file" name="file">
                                
                            </div>
                        </div>
                        <div class="form-group row mb-0" style="margin-top: 14px">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('Import') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12">
            <table class="table table-bordered">
                <thead style="background-color: #9d9a9a">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Introducer Id</th>
                        <th scope="col">Referral Id</th>
                        <th scope="col">Position</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    
                    @foreach($referrals as $referral)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <td>{{$referral->introducer_id}}</td>
                        <td>{{$referral->referral_id}}</td>
                        <td>{{$referral->position}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $referrals->links() !!}
        </div>
    </div>
</div>
@endsection