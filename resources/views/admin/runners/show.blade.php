@extends('adminlte::page')

@section('title', 'Show Runner')

@section('content_header')
    <h1>Show Runner</h1>
@stop

@section('css')

@stop

@section('js')

@stop

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="float-left">

                <h2> Show Runner</h2>

            </div>

            <div class="float-right">

                <a class="btn btn-primary" href="{{ route('runners.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                    <div class="box-header panel-header card-header with-brunner">
                        <i class="fa fa-text-width"></i>
                
                        <h3 class="box-title panel-title card-title">Customer</h3>
                      </div>
                      <!-- /.box-header panel-header card-header -->
                      <div class="box-body panel-body card-body">
                        <blockquote>
                
                                <a href="{{ route('customers.show', $runner->customer->id)}}">{{$runner->customer->name}}</a> </blockquote>
                      </div>
                      <!-- /.box-body panel-body card-body --></div>
                    </div>
            <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                    <div class="box-header panel-header card-header with-brunner">
                        <i class="fa fa-text-width"></i>
                
                        <h3 class="box-title panel-title card-title">Credit Card</h3>
                      </div>
                      <!-- /.box-header panel-header card-header -->
                      <div class="box-body panel-body card-body">
                        <blockquote>
                
                                <a href="{{ route('creditCards.show', $runner->creditCard->id)}}">{{$runner->creditCard->card_number}}</a> </blockquote>
                            </div>
                            <!-- /.box-body panel-body card-body --></div>
                          </div>
                    <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                        <div class="box-header panel-header card-header with-brunner">
                            <i class="fa fa-text-width"></i>
                    
                            <h3 class="box-title panel-title card-title">customer_info</h3>
                      </div>
                      <!-- /.box-header panel-header card-header -->
                      <div class="box-body panel-body card-body">
                        <blockquote>
                        
                                        {!! print_r($runner->customer_info) !!} </blockquote>
                                    </div>
                                    <!-- /.box-body panel-body card-body --></div>
                                  </div>

<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">Runner Origin</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->site !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">card_description</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->card_description !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">reference</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->reference !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">description</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->description !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">payment_type_id</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->payment_type_id !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">money_id</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->money_id !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">user_token</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->user_token !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">company_token</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->company_token !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">total</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->total !!}
            </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">installments</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->installments !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">is_active</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->is_active !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">status</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->status !!}

</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">device_token</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->device_token !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">device</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->device !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">gateway</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {{ empty($runner->gateway)?'Sem Gateway':$runner->gateway->name }} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
        <div class="box-header panel-header card-header with-brunner">
            <i class="fa fa-text-width"></i>
    
            <h3 class="box-title panel-title card-title">gateway_mundipagg_public</h3>
          </div>
          <!-- /.box-header panel-header card-header -->
          <div class="box-body panel-body card-body">
            <blockquote>
    
                    {!! $runner->gateway_mundipagg_public !!} </blockquote>
                </div>
                <!-- /.box-body panel-body card-body --></div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                  <div class="box-header panel-header card-header with-brunner">
                      <i class="fa fa-text-width"></i>
              
                      <h3 class="box-title panel-title card-title">gateway_mundipagg_secret</h3>
                    </div>
                    <!-- /.box-header panel-header card-header -->
                    <div class="box-body panel-body card-body">
                      <blockquote>
              
                              {!! $runner->gateway_mundipagg_secret !!} </blockquote>
                          </div>
                          <!-- /.box-body panel-body card-body --></div>
                        </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">gateway_pagseguro_public</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

                {!! $runner->gateway_pagseguro_public !!} </blockquote>
            </div>
            <!-- /.box-body panel-body card-body --></div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
              <div class="box-header panel-header card-header with-brunner">
                  <i class="fa fa-text-width"></i>
          
                  <h3 class="box-title panel-title card-title">gateway_pagseguro_secret</h3>
                </div>
                <!-- /.box-header panel-header card-header -->
                <div class="box-body panel-body card-body">
                  <blockquote>
          
                          {!! $runner->gateway_pagseguro_secret !!} </blockquote>
                      </div>
                      <!-- /.box-body panel-body card-body --></div>
                    </div>
          <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
              <div class="box-header panel-header card-header with-brunner">
                  <i class="fa fa-text-width"></i>
          
                  <h3 class="box-title panel-title card-title">gateway_rede_public</h3>
                </div>
                <!-- /.box-header panel-header card-header -->
                <div class="box-body panel-body card-body">
                  <blockquote>
          
                          {!! $runner->gateway_rede_public !!} </blockquote>
                      </div>
                      <!-- /.box-body panel-body card-body --></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                        <div class="box-header panel-header card-header with-brunner">
                            <i class="fa fa-text-width"></i>
                    
                            <h3 class="box-title panel-title card-title">gateway_rede_secret</h3>
                          </div>
                          <!-- /.box-header panel-header card-header -->
                          <div class="box-body panel-body card-body">
                            <blockquote>
                    
                                    {!! $runner->gateway_rede_secret !!} </blockquote>
                                </div>
                                <!-- /.box-body panel-body card-body --></div>
                              </div>
                    <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                        <div class="box-header panel-header card-header with-brunner">
                            <i class="fa fa-text-width"></i>
                    
                            <h3 class="box-title panel-title card-title">gateway_cielo_public</h3>
                          </div>
                          <!-- /.box-header panel-header card-header -->
                          <div class="box-body panel-body card-body">
                            <blockquote>
                    
                                    {!! $runner->gateway_cielo_public !!} </blockquote>
                                </div>
                                <!-- /.box-body panel-body card-body --></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                                  <div class="box-header panel-header card-header with-brunner">
                                      <i class="fa fa-text-width"></i>
                              
                                      <h3 class="box-title panel-title card-title">gateway_cielo_secret</h3>
                                    </div>
                                    <!-- /.box-header panel-header card-header -->
                                    <div class="box-body panel-body card-body">
                                      <blockquote>
                              
                                              {!! $runner->gateway_cielo_secret !!} </blockquote>
                                          </div>
                                          <!-- /.box-body panel-body card-body --></div>
                                        </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">Payment Service Token</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->tid !!} </blockquote>
</div>
<!-- /.box-body panel-body card-body --></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">Bank Slip Id</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->bank_slip_id !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
        <div class="box-header panel-header card-header with-brunner">
            <i class="fa fa-text-width"></i>
    
            <h3 class="box-title panel-title card-title">Fraud Analysis Integration</h3>
          </div>
          <!-- /.box-header panel-header card-header -->
          <div class="box-body panel-body card-body">
            <blockquote>
    
                {{ empty($runner->fraudAnalysi)?'Sem anti Fraude':$runner->fraudAnalysi->name }} </blockquote>
          </div>
          <!-- /.box-body panel-body card-body --></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
            <div class="box-header panel-header card-header with-brunner">
                <i class="fa fa-text-width"></i>
        
                <h3 class="box-title panel-title card-title">Fraud Analysis Information</h3>
              </div>
              <!-- /.box-header panel-header card-header -->
              <div class="box-body panel-body card-body">
                <blockquote>
        
                    {{ print_r($runner->fraud_analysis) }} </blockquote>
              </div>
              <!-- /.box-body panel-body card-body --></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                <div class="box-header panel-header card-header with-brunner">
                    <i class="fa fa-text-width"></i>
            
                    <h3 class="box-title panel-title card-title">Konduto Token</h3>
                  </div>
                  <!-- /.box-header panel-header card-header -->
                  <div class="box-body panel-body card-body">
                    <blockquote>
            
            {!! $runner->frauds_konduto_secret !!} </blockquote>
                  </div>
                  <!-- /.box-body panel-body card-body --></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
                    <div class="box-header panel-header card-header with-brunner">
                        <i class="fa fa-text-width"></i>
                
                        <h3 class="box-title panel-title card-title">Clearsale Token</h3>
                      </div>
                      <!-- /.box-header panel-header card-header -->
                      <div class="box-body panel-body card-body">
                        <blockquote>
                
                {!! $runner->frauds_clearsale_secret !!} </blockquote>
                      </div>
                      <!-- /.box-body panel-body card-body --></div>
                    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">tax_id</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->tax_id !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_name</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_name !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_address</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_address !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_complement</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_complement !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_city</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_city !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_state</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_state !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_zip</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_zip !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">billing_country</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->billing_country !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">created_at</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->created_at !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">updated_at</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->updated_at !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12"><div class="box panel card box-solid">
    <div class="box-header panel-header card-header with-brunner">
        <i class="fa fa-text-width"></i>

        <h3 class="box-title panel-title card-title">user_id</h3>
      </div>
      <!-- /.box-header panel-header card-header -->
      <div class="box-body panel-body card-body">
        <blockquote>

{!! $runner->user_id !!} </blockquote>
      </div>
      <!-- /.box-body panel-body card-body --></div>
    </div>
    </div>

@endsection