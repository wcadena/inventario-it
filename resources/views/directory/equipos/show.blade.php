@extends('layouts.master')@section('content')    <!-- Hero -->    <div class="bg-body-light">        <div class="content content-full">            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">@lang('form.kijhuu7y')</h1>                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">                    <ol class="breadcrumb">                        <li class="breadcrumb-item">Equipos</li>                        <li class="breadcrumb-item active" aria-current="page">Create</li>                    </ol>                </nav>            </div>        </div>    </div>    <!-- END Hero -->    <!--ini Mensajes-->    <?php if(Session::has('flash_message_show1')): ?>    <div class="alert alert-success alert-dismissable fade in">        <strong>Mensaje: </strong> <?php echo e(Session::get('flash_message_show1')); ?>    </div>    <?php endif; ?>    <?php if(Session::has('flash_message_show1error')): ?>    <div class="alert alert-danger alert-dismissable fade in">        <strong>Mensaje: </strong> <?php echo e(Session::get('flash_message_show1error')); ?>    </div>    <?php endif; ?>    <!--fin mensajes-->    <!-- Page Content -->    <div class="content">        <!-- Elements -->        <div class="row row-deck">            <div class="col-lg-6 js-appear-enabled animated fadeIn" data-toggle="appear">                <div class="block block-bordered">                    <div class="block-header border-bottom">                        <h3 class="block-title">Equipos</h3>                    </div>                    <div class="block-content block-content-full block-content-sm">                        <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">                            <thead class="thead-light">                            <tr class="text-uppercase">                                <th class="font-w700">Campo</th>                                <th class="d-none d-sm-table-cell font-w700">Valor</th>                            </tr>                            </thead>                            <tbody>                            <tr >                                <td><span class="font-w600">@lang('form.odci1')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->orden_de_compraxc['ordenCompra'] }}&nbsp;- {{ $equipo->orden_de_compraxc['fecha_compra'] }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.modeloid') </span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->modelo_equipoxc['modelo'] }}</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.asadd2')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->custodioxc['nombre_responsable'] }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.eid3')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->estacionxc['estacion'] }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.ai3e')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->areaxc['area'] }}</span></td>&nbsp;                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.clid32')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->check_listxc['id_check_lists'] }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.ncs234')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->num_cajas }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.sxs3')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->sociedad }}&nbsp;</span></td>                            </tr>                            <tr >                                <td><span class="font-w600">@lang('form.empresa_procede1')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->empresa_procede1 }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.noserie') </span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">                                    <a target="_blank" href="https://support.hp.com{{$equipo->hp_warrantyResultRedirectUrl}}">                                        {{--<a target="_blank" href="http://h20565.www2.hp.com/hpsc/wc/public/find?rows%5B0%5D.item.countryCode=EC&submitButton=Enviar&rows%5B0%5D.item.serialNumber={{ $equipo->no_serie }}&lang=es-es&cc=es">--}}                                        {{ $equipo->no_serie }}                                    </a>                                </span></td>                            </tr>                            {{--<tr>                                {!! Form::label('codigo_barras', 'Codigo Barras: ', ['class' => 'control-label']) !!}                                    {{ $equipo->codigo_barras }}&nbsp;                            </tr>--}}                            <tr>                                <td><span class="font-w600">@lang('form.aviancacode') </span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->codigo_avianca }}&nbsp;</span></td>                            </tr>                            {{--                            <tr>                                {!! Form::label('codigo_otro', 'Codigo Otro: ', ['class' => 'control-label']) !!}                                    {{ $equipo->codigo_otro }}&nbsp;                            </tr>                            --}}                            <tr>                                <td><span class="font-w600">@lang('form.descrip')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->descripcion }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.iip')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->ip }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.estad2w')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->estado }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.statyhs')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->estatus }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.garantia')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->garantia }}&nbsp;</span></td>                            </tr>                            <tr>                                <td><span class="font-w600">@lang('form.obs123')</span></td>                                <td class="d-none d-sm-table-cell"><span class="font-size-sm text-muted">{{ $equipo->observaciones }}&nbsp;</span></td>                            </tr>                            </tbody>                        </table>                    </div>                </div>            </div>            <div class="col-lg-6 js-appear-enabled animated fadeIn" data-toggle="appear">                <div class="block block-bordered">                    <div class="block-header border-bottom">                        <h3 class="block-title">@lang('form.checklist') </h3>                        <div class="block-options">                            <a href="{{ url('checklist/' . $equipo->check_list_id ) }}" class="btn-block-option" >                                <i class="fa fa-clipboard-list"></i>                                {{$equipo->check_list_id}}                            </a>                        </div>                    </div>                    <div class="block-content block-content-full block-content-sm">                        @php $x=0; @endphp                        <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">                            <thead class="thead-light">                            <tr class="text-uppercase">                                <th class="font-w700" style="width: 80px;">@lang('form.sno')</th>                                <th class="d-none d-sm-table-cell font-w700 text-center">@lang('form.nombre')</th>                                <th>@lang('form.atributo')</th>                                <th>@lang('form.valor_es')</th>                            </tr>                            </thead>                            <tbody>                            @foreach($checklist_opcionescheck as $item)                                @php $x++;@endphp                                <tr class="actu0jkw34" data-id="{{$item->id}}">                                    <td>{{ $x }}</td>                                    <td class="font-w600" ><a href="{{ url('checklist_opcionescheck', $item->id) }}">{{ $item->atributo }}</a>                                    </td>                                    <td>{{ $item->tipo }}                                        <input type="hidden" name="_token" id="{{'token-'.$item->id}}" value="<?php echo csrf_token(); ?>">                                    </td>                                    <!-- 'si-no', 'text','equipo_id','fecha','si-no&version','ip','equipo_id&texto' -->                                    @if($item->tipo=='si-no')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='text'||$item->tipo=='equipo_id'||$item->tipo=='serial')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='equipo_id-olll')                                        <td>{{ $item->valor1 }}                                        </td>                                    @elseif($item->tipo=='equipo_id')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='fecha')                                        <td><time>{{ $item->valor1 }}</time></td>                                    @elseif($item->tipo=='si-no&version')                                        <td>{{ $item->valor1 }}                                            <p>{{ $item->valor2 }}</p>                                        </td>                                    @elseif($item->tipo=='ip')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='equipo_id&texto')                                        <td>{{ $item->valor1 }}                                            <p>{{ $item->valor2 }}</p>                                        </td>                                    @elseif($item->tipo=='CM')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='FM')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='SAPE')                                        <td>{{ $item->valor1 }}</td>                                    @elseif($item->tipo=='CM TA')                                        <td>                                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{ $item->valor4 }}</div>                                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{ $item->valor5 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{ $item->valor6 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{ $item->valor7 }}</div>                                        </td>                                    @elseif($item->tipo=='SAPE TA')                                        <td>                                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{ $item->valor4 }}</div>                                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{ $item->valor5 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{ $item->valor6 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{ $item->valor7 }}</div>                                        </td>                                    @elseif($item->tipo=='CM AV')                                        <td>                                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{ $item->valor4 }}</div>                                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{ $item->valor5 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{ $item->valor6 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{ $item->valor7 }}</div>                                        </td>                                    @elseif($item->tipo=='SAPE AV')                                        <td>                                            <div class="input-group"><div class="input-group-addon">WID (WorkStation ID)</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -CRT</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BPP</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID -BTP</div>{{ $item->valor4 }}</div>                                            <div class="input-group"><div class="input-group-addon">No de Asociación</div>{{ $item->valor5 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID DGR</div>{{ $item->valor6 }}</div>                                            <div class="input-group"><div class="input-group-addon">TID - PRT</div>{{ $item->valor7 }}</div>                                        </td>                                    @elseif($item->tipo=='ARD')                                        <td>                                            <div class="input-group"><div class="input-group-addon">Cid</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">Office</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">Atid</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">Atid Proprinter asociado</div>{{ $item->valor4 }}</div>                                        </td>                                    @elseif($item->tipo=='OBSERVACIONES')                                        <td>                                            <div class="input-group"><div class="input-group-addon">Cid</div>{{ $item->valor1 }}</div>                                            <div class="input-group"><div class="input-group-addon">Office</div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">Atid</div>{{ $item->valor3 }}</div>                                            <div class="input-group"><div class="input-group-addon">Atid Proprinter asociado</div>{{ $item->valor4 }}</div>                                        </td>                                    @elseif($item->tipo=='bateria')                                        <td>                                            <div class="input-group"><div class="input-group-addon">Valor Batería: </div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">Dato: </div>{{ $item->valor1 }}</div>                                        </td>                                    @elseif($item->tipo=='sistemas_op')                                        <td>                                            <div class="input-group"><div class="input-group-addon">Valor SO: </div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">Dato: </div>{{ $item->valor1 }}</div>                                        </td>                                    @elseif($item->tipo=='cpu')                                        <td>                                            <div class="input-group"><div class="input-group-addon">Valor CPU: </div>{{ $item->valor2 }}</div>                                            <div class="input-group"><div class="input-group-addon">Dato: </div>{{ $item->valor1 }}</div>                                        </td>                                    @else                                        <td>ERR:7YH-IO: No esta programado este tipo de respuesta, <br />                                            los validos son:<br/>                                            <code>'si-no','text','equipo_id','fecha','si-no&version','ip','equipo_id&texto','CM','FM','SAPE','CM TA','SAPE TA','CM AV','SAPE AV','OBSERVACIONES','ARD'</code>                                            <pre>{{$item}}</pre>                                        </td>                                    @endif                                </tr>                            @endforeach                            </tbody>                        </table>                        <div class="pagination"> {!! $checklist_opcionescheck->render() !!} </div>                    </div>                </div>            </div>        </div>        <div class="block block-rounded block-bordered">            <div class="block-header block-header-default">                <h3 class="block-title">@lang('form.bitacora')</h3>                <div class="block-options">                    <button type="button" class="btn-block-option">                        <a href="{{ url('bitacora/create') }}" class="btn btn-hero-primary js-click-ripple-enabled"><i class="si si-plus"></i> @lang('form.bitacora')</a>                    </button>                </div>            </div>            <div class="block-content">                <h1> </h1>                <div class="table">                    <table class="table table-bordered table-striped table-hover">                        <thead>                        <tr>                            <th>@lang('form.sno')</th><th>@lang('form.titulobitacora')</th><th>@lang('form.fecha_ingreso')</th><th>@lang('form.actions')</th>                        </tr>                        </thead>                        <tbody>                        @php $x=0; @endphp                        @foreach($bitacora as $item)                            @php $x++;@endphp                            <tr>                                <td>{{ $x }}</td>                                <td><a href="{{ url('bitacora', $item->id) }}">{{ $item->titulo }}</a></td><td>{{ $item->fecha_ingreso }}</td>                                <td>                                    <a href="{{ url('bitacora/' . $item->id . '/edit') }}">                                        <button type="submit" class="btn btn-sm btn-light m-1">@lang('form.update')</button>                                    </a>                                    {!! Form::open([                                        'method'=>'DELETE',                                        'url' => ['bitacora', $item->id],                                        'style' => 'display:inline'                                    ]) !!}                                    {!! Form::button(__('form.deletee'), ['class' => 'btn btn-sm btn-light m-1','type' => 'submit']) !!}                                    {!! Form::close() !!}                                </td>                            </tr>                        @endforeach                        </tbody>                    </table>                    <div class="pagination"> {!! $bitacora->render() !!} </div>                </div>            </div>        </div>    </div>@endsection