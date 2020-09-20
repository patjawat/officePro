@extends('layouts.blank')

@section('content')
<div class="row justify-content-center h-50" style="margin-top:15%">
<div class="col-6">
            <div class="card text-white bg-dark shadow-lg rounded wrapper-box">
                <div class="card-header"><i class="fas fa-fingerprint"></i> {{ __('Authentication') }}</div>
                <div id="app" class="card-body">
                    <login-form></login-form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
