@if (Session::get('nombres'))
@extends('Layout.app_index')
@section('css')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<style>
    .fc .fc-scrollgrid-liquid {
        height: 80vh !important;
    }

    .is-today {
        background: #9ac7ed;
    }

    .m-l1 {
        margin-left: 1em;
    }

    .r_obl {
        color: #F44336;
    }
</style>
@endsection

@section('content')
<div id="cont_preload">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-rounded placeholder"></div>
                                    </div>
                                    <div class="col">
                                        <div class="placeholder placeholder-xs col-9"></div>
                                        <div class="placeholder placeholder-xs col-7"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body py-5 text-center">
                                <div>
                                    <div class="avatar avatar-rounded avatar-lg placeholder mb-3"></div>
                                </div>
                                <div class="mt w-75 mx-auto">
                                    <div class="placeholder col-9 mb-3"></div>
                                    <div class="placeholder placeholder-xs col-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card placeholder-glow">
                            <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                            <div class="card-body">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="row g-0 align-items-center placeholder-glow">
                                <div class="col-3">
                                    <div class="ratio ratio-1x1 card-img-start placeholder"></div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="placeholder col-9 mb-3"></div>
                                        <div class="placeholder placeholder-xs col-10"></div>
                                        <div class="placeholder placeholder-xs col-11"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-end placeholder-glow">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-12"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="placeholder placeholder-xs col-8"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <ul class="list-group list-group-flush placeholder-glow">
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-rounded placeholder"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="placeholder placeholder-xs col-9"></div>
                                            <div class="placeholder placeholder-xs col-7"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="placeholder placeholder-xs col-8"></div>
                                            <div class="placeholder placeholder-xs col-10"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-rounded placeholder"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="placeholder placeholder-xs col-9"></div>
                                            <div class="placeholder placeholder-xs col-7"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="placeholder placeholder-xs col-8"></div>
                                            <div class="placeholder placeholder-xs col-10"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-rounded placeholder"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="placeholder placeholder-xs col-9"></div>
                                            <div class="placeholder placeholder-xs col-7"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="placeholder placeholder-xs col-8"></div>
                                            <div class="placeholder placeholder-xs col-10"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-rounded placeholder"></div>
                                        </div>
                                        <div class="col-7">
                                            <div class="placeholder placeholder-xs col-9"></div>
                                            <div class="placeholder placeholder-xs col-7"></div>
                                        </div>
                                        <div class="col-2 ms-auto text-end">
                                            <div class="placeholder placeholder-xs col-8"></div>
                                            <div class="placeholder placeholder-xs col-10"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="a_permisos" value="{{ $permisos }}">
<div id="cont_calendar" style="display: none; height: 80vh;
" class="container-xl">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="mb-3">
                <label class="form-label">Calendario</label>
                <div class="datepicker-inline" id="datepicker-inline"></div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span style="display: flex;    justify-content: center;">
                        <p class="reloj" id="reloj"></p>
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div id="user_connetion" class="row g-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div>
                            <h3>Solicitud de permiso</h3>
                            <input type="hidden" id="et_estado_documento">
                            <input type="hidden" id="et_estado_permisoxhora">
                            <input type="hidden" id="et_estado_enfermedad">
                            <div id="c_p_nota" style="display: none;" class="alert alert-warning" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">Nota:</h4>
                                        <div id="p_nota" class="text-secondary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Empleado:</label>
                            <div class="form-control-plaintext">{{ Session::get('nombres') }}
                                {{ Session::get('apellidos') }}
                            </div>
                            <input type="hidden" value="{{ Session::get('cedula') }}" id="et_cedula_s">
                            <input type="hidden" value="{{ $intervalMesesf }}" id="et_meses_servicio">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de permiso <span class="r_obl">(*)</span>:</label>
                            <select id="sel_tipo_permiso" onchange="conf_permiso(this)" class="form-select">
                                <option value="0">Seleccione un tipo de permiso</option>
                                @foreach ($permisos as $p)
                                <option value="{{ $p->id }}">{{ $p->tipo_permiso }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Desde<span class="r_obl">(*)</span>:</label>
                                    <input type="date" id="et_desde" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Hasta<span class="r_obl">(*)</span>:</label>
                                    <input type="date" id="et_hasta" class="form-control" onchange="validad_dias()">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3" id="c_p_hora" style="display: none;">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Hora inicio<span class="r_obl">(*)</span>:</label>
                                    <input type="time" id="et_h_inicio" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Hora fin:<span class="r_obl">(*)</span></label>
                                    <input type="time" id="et_h_final" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" id="c_p_entidad_enfermedad" style="display: none;">
                            <div class="form-label">Entidad que certifica: <span class="r_obl">(*)</span></div>
                            <select id="sel_entidad_enfermedad" class="form-select">
                                <option value="0">SELECCIONE UNA ENTIDAD</option>
                                <option value="1">IESS</option>
                                <option value="2">PARTICULAR</option>
                                <option value="3">MINISTERIO DE SALUD</option>
                            </select>
                            <span class="badge bg-danger" id="badge_sel_entidad_enfermedad" data-for="sel_entidad_enfermedad"></span>
                        </div>
                        <div class="mb-3" id="c_p_enfermedad" style="display: none;">
                            <div class="form-label">Diagnóstico: <span class="r_obl">(*)</span></div>
                            <input type="text" id="tipo_enfermedad" data-label='Diagnóstico' class="form-control" placeholder="DÍGITE EL CODIGO CIE10 O SU ENFERMEDAD">
                            <span class="badge bg-danger" id="badge_tipo_enfermedad" data-for="tipo_enfermedad"></span>
                        </div>
                        <div class="mb-3" id="c_p_documento" style="display: none;">
                            <div class="form-label">Subir un justificativo (documento pdf): <span class="r_obl">(*)</span></div>
                            <input type="file" id="document" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Observación: <span class="form-label-description"><span id="num">0</span>/100</span></label>
                            <textarea class="form-control" id="et_observacion" rows="6" onkeyup="contar_caracteres(this)" placeholder="detalle información de su permiso ().."></textarea>
                        </div>
                        <div id="span_documento_firmado" style="display: none;" class="alert alert-success" role="alert">
                            <div class="d-flex">
                                <div>
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                </div>
                                <div>
                                    El permiso está firmado <span id="permiso_doc"></span>

                                </div>
                                <input type="hidden" value="" id="ip_url_formulario">

                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="vistaprevia()" id="btn_vista_previa" class="btn btn-flickr w-100">
                                <i class="fa-solid fa-eye"></i>
                                <span class="m-l1">Vista Previa</span>
                            </button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="firmar_documento()" id="btn_firmar_permiso" class="btn btn-flickr w-100" disabled>
                                <i class="fa-solid fa-pencil"></i>
                                <span class="m-l1">Firmar Permiso</span>
                            </button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="enviar_permiso()" id="btn_enviar_permiso" class="btn btn-flickr w-100" disabled>
                                <i class="fa-regular fa-paper-plane"></i>
                                <span class="m-l1">Enviar solicitud</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-error" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                </svg>
                <h3>Error!</h3>
                <div class="text-secondary" id="sms"></div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                Intente nuevamente
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal_permiso_ok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M9 12l2 2l4 -4" />
                </svg>
                <h3>Su permiso se ha registrado!</h3>
                <div class="text-secondary">Su permiso se encuentra en la bandeja de su jefe <span id='aprobador'></span></div>

            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><a href="#" class="btn btn-success w-100" onclick="cerrar_modal_per()">
                                Aceptar
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal_vista_previa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">

                <iframe id="vistaPrevia" style=" width: 100%; height: 100vh; "></iframe>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><a href="#" class="btn btn-success w-100" onclick="cerrar_modal_per()">
                                Aceptar
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal_aprobar_code" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <div class="mb-3">
                    <label class="form-label">Codigo de autorización</label>
                    <p>Por favor revise su correo institucional el código de autorización</p>
                    <input type="text" class="form-control" id="ip_codigo_a" placeholder="Escriba su código de autorización">
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><button class="btn btn-success w-100" id="btn_ap_firma" onclick="aprobar_firma()">
                                Estampar código
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https: //cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/web-component@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js'></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('datepicker-inline'),
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M15 6l-6 6l6 6" />
</svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M9 6l6 6l-6 6" />
</svg>`,
            },
            inlineMode: true,
        }));
    });
    $(window).on("load", function() {


        "use strict";
        // view_calendar()

        // --------------------------------------------- //
        // Loader Start
        // --------------------------------------------- //
        /*setTimeout(function() {
        $(".loader-logo").removeClass('slideInDown').addClass('fadeOutUp');
        $(".loader-caption").removeClass('slideInUp').addClass('fadeOutDown');
        }, 1200);*/
        // --------------------------------------------- //
        // Loader End
        // --------------------------------------------- //

        // --------------------------------------------- //
        // Main Section Loading Animation Start
        // --------------------------------------------- //
        setTimeout(function() {
            //$(".loader").addClass('loaded');
            $("#cont_preload").hide();
            $("#cont_calendar").show();
        }, 1200);
        // --------------------------------------------- //
        // Main Section Loading Animation End
        // --------------------------------------------- //

        let ajaxPrevDiagnostico = null;
        custom_search_input('tipo_enfermedad', {
            formatResult: function (item) {
                return {
                    value: item.dm_id,
                    text: `${item.dm_cie10.trim() != "" ? `[${item.dm_cie10.trim()}]` : ''} ${item.dm_descripcion}`,
                    html: `${item.dm_cie10.trim() != "" ? `[${item.dm_cie10.trim()}]` : ''} ${item.dm_descripcion}`
                }
            },
            datasets: function (item) {
                return {
                    cie10: item.dm_cie10,
                    requierecie10: item.dm_requiere_cie10
                }
            },
            search: function (text, callback) {
                if (ajaxPrevDiagnostico != null)
                    ajaxPrevDiagnostico.abort();

                let ajax = $.ajax(
                    `/get_search_diagnostico_consulta_medica/1/300/${text}`
                ).done(function (res) {
                    callback(res.respuesta ? res.data : []);
                });

                ajaxPrevDiagnostico = ajax;
            }
        });

        setInputValidations('tipo_enfermedad', ['notEmpty'], [
            {
                function: function (item) {
                    return item.value.trim() != "" && (item.dataset.value == undefined || item.dataset.value.trim() == "");
                },
                message: "Debe buscar y seleccionar un diagnóstico médico"
            }
        ]);

        $('#badge_tipo_enfermedad').fadeOut();
        $('#badge_sel_entidad_enfermedad').fadeOut();
    });
    let file_name_, file_type_, file_size_, fileURL_;

    function enviar_permiso() {
        offload_send();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let tipo_solicitud = $("#sel_tipo_permiso").val();
        let fecha_inicial = $("#et_desde").val();
        let fecha_final = $("#et_hasta").val();
        let hora_inicial = 0;
        let hora_final = 0;
        let total_horas = '0';
        let observacion = $("#et_observacion").val();
        let fecha_solicitud = formatDate(new Date());
        let estado = 'INGRESADO'
        let token = $("#csrf-token").val();
        let url_formulario = $("#ip_url_formulario").val();
        if (tipo_solicitud == "") {
            alert("Por favor seleccione un tipo de archivo");
            onload_send();
            return;
        }

        if (estado_documento == 1) {
            if (fileURL_ == "" || fileURL_ === undefined) {
                alert("Por favor debe subir un archivo");
                onload_send();
                return;
            }

            //fileURL_ = fileURL_.substring(28);
            console.log(fileURL_);
            //return;
        }
        if (fecha_inicial == "") {
            alert("Por favor seleccione una fecha de inicio");
            onload_send();
            $("#et_desde").focus();
            return;
        }

        if (fecha_final == "") {
            alert("Por favor seleccione una fecha final ");
            onload_send();
            $("#et_hasta").focus();
            return;
        }

        if (estado_permxhora == 1) {
            hora_inicial = $("#et_h_inicio").val();
            hora_final = $("#et_h_final").val();
            if (hora_inicial == "" || hora_inicial === undefined) {
                alert("Por favor debe ingresar una hora inicial");
                onload_send();
                $("#et_h_inicio").focus();
                return;
            } else if (hora_final == "" || hora_final === undefined) {
                alert("Por favor debe ingresar una hora final");
                onload_send();
                $("#et_h_final").focus();
                return;
            }

            total_horas = get_horas(hora_inicial, hora_final);
        } else {
            hora_inicial = 0;
            hora_final = 0;
        }

        fecha_inicial__ = new Date(fecha_inicial);
        fecha_final__ = new Date(fecha_final);
        if (fecha_final__ < fecha_inicial__) {
            alert("No puede selecionar una fecha final menor a la fecha de inicio");
            onload_send();
            $("#et_hasta").focus();
            return;
        }
        let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
        let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;
        console.log(diasDeDiferencia);

        if (url_formulario == "") {
            alert("No se ha firmado el permiso!");
            onload_send();
            return;
        }
        let tipo_enfermedad = ""
        let select_entidad_certifica = 0
        let dm_id = 0;
        if (estado_enfermedad == 1) {
            tipo_enfermedad = $("#tipo_enfermedad").val();
            select_entidad_certifica = $("#sel_entidad_enfermedad").val();
            dm_id = document.getElementById('tipo_enfermedad').dataset.value;
        }

        let txtDiagnostico = document.getElementById('tipo_enfermedad');
        let selectEntidadEnfermedad = document.getElementById('sel_entidad_enfermedad');
        $('#badge_tipo_enfermedad').fadeOut();
        $('#badge_sel_entidad_enfermedad').fadeOut();
        if(tipo_solicitud == 4 && txtDiagnostico.validateInput() != ""){
            $('#badge_tipo_enfermedad').fadeIn();
            return;
        }
        
        if(tipo_solicitud == 4 && selectEntidadEnfermedad.value == 0){
            $('#badge_sel_entidad_enfermedad').fadeIn();
            $('#badge_sel_entidad_enfermedad').html("Debe seleccionar una entidad");
            return;
        }

        let datos = {
            cedula_solicitante,
            tipo_solicitud,
            fecha_inicial,
            fecha_final,
            hora_inicial,
            hora_final,
            observacion,
            fecha_solicitud,
            estado,
            estado_documento,
            fileURL_,
            file_name_,
            file_type_,
            file_size_,
            diasDeDiferencia,
            total_horas,
            url_formulario,
            tipo_enfermedad,
            select_entidad_certifica,
            dm_id
        };
        _AJAX_("/guardar_solicitud", "POST", token, datos, 0);

    }

    const validad_dias = () => {
        let meses_servicio = $("#et_meses_servicio").val();

    }
    const vistaprevia = () => {

        offload_vista_previa();
        let sel_tipo_permiso = $("#sel_tipo_permiso").val();
        let desde = $("#et_desde").val();
        let hasta = $("#et_hasta").val();
        let hora_inicial = 0;
        let hora_final = 0;
        let total_horas = '0';
        let observacion = $("#et_observacion").val();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let tipo_enfermedad = "";

        if (sel_tipo_permiso == 0) {
            alert("Debe seleccionar un tipo de permiso!");
            on_load_vista_previa();
            return;
        }

        if (desde == "" && hasta == "") {
            alert("Debe ingresar la fecha desde y hasta de su permiso");
            on_load_vista_previa();

            return;
        } else if (desde == "") {
            alert("Debe ingresar la fecha de inicio de su permiso");
            on_load_vista_previa();
            return;
        } else if (hasta == "") {
            alert("Debe ingresar la fecha fin de su permiso");
            on_load_vista_previa();
            return;
        }
        if (estado_permxhora == 1) {
            hora_inicial = $("#et_h_inicio").val();
            hora_final = $("#et_h_final").val();
            if (hora_inicial == "" || hora_inicial === undefined) {
                alert("Por favor debe ingresar una hora inicial");
                on_load_vista_previa();
                $("#et_h_inicio").focus();
                return;
            } else if (hora_final == "" || hora_final === undefined) {
                alert("Por favor debe ingresar una hora final");
                on_load_vista_previa();
                $("#et_h_final").focus();
                return;
            } else if (hora_final < hora_inicial) {
                alert("La hora final que quiere ingresar es menor a la hora inicial del permiso");
                on_load_vista_previa();
                $("#et_h_final").focus();
                return;
            }

            total_horas = get_horas(hora_inicial, hora_final);
            console.log(total_horas);
        } else {
            hora_inicial = 0;
            hora_final = 0;
        }



        if (observacion == "") {
            alert("Por favor debe detallar su permiso al menos 50 caracteres");
            on_load_vista_previa();
            return;
        }



        fecha_inicial__ = new Date(desde);
        fecha_final__ = new Date(hasta);

        let diasDeDiferencia = "";
        if (fecha_final__ < fecha_inicial__) {
            alert("No puede selecionar una fecha final menor a la fecha de inicio");
            onload_send();
            $("#et_hasta").focus();
            return;
        }

        let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
        diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;

        if (estado_enfermedad == 1) {
            tipo_enfermedad = $("#tipo_enfermedad").val();
        }

        let datos = {
            sel_tipo_permiso,
            desde,
            hasta,
            hora_inicial,
            hora_final,
            observacion,
            cedula_solicitante,
            diasDeDiferencia,
            tipo_enfermedad,
            total_horas
        };
        let token = $("#csrf-token").val();
        _AJAX_("/vista_previa", "POST", token, datos, 1);
    }

    $('#modal_vista_previa').on('hidden.bs.modal', function() {
        // do something…
        document.querySelector("#vistaPrevia").removeAttribute("src");

    })
    const firmar_documento = () => {
        //offload_firma()
        let sel_tipo_permiso = $("#sel_tipo_permiso").val();
        let desde = $("#et_desde").val();
        let hasta = $("#et_hasta").val();

        let h_ini = $("#et_h_inicio").val();
        let h_fin = $("#et_h_final").val();
        let observacion = $("#et_observacion").val();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let total_horas = '0';
        let fecha_actual = new Date();
        fecha_inicial__ = new Date(desde);
        fecha_final__ = new Date(hasta);

        var diff = fecha_inicial__ - fecha_actual;
        var total_dias_soli = (diff / 1000 / 60 / 60 / 24) + 1;
        // alert('total de dias' + total_dias_soli)

        var diff_desde_hasta = fecha_final__ - fecha_inicial__;
        var total_dias_desde_hasta = (diff_desde_hasta / 1000 / 60 / 60 / 24) + 1;

        if (sel_tipo_permiso == 0) {
            alert("Debe seleccionar un tipo de permiso!");
            onload_firma()
            onload_send()
            return
        } else if (desde == "" && hasta == "") {
            alert("Debe ingresar la fecha desde y hasta de su permiso");
            return;
        } else if (desde == "") {
            alert("Debe ingresar la fecha de inicio de su permiso");
            return;
        } else if (hasta == "") {
            alert("Debe ingresar la fecha fin de su permiso");
            return;
        } else if (fecha_final__ < fecha_inicial__) {
            alert("No puede selecionar una fecha final menor a la fecha de inicio");
            onload_send();
            $("#et_hasta").focus();
            return;
        } else if (observacion == "") {
            alert("Por favor debe detallar su permiso al menos 50 caracteres");
        }

        if (estado_permxhora == 1) {
            if (h_ini == "" && h_fin == "") {
                alert("Debe ingresar la hora de inicio y de retorno de su permiso");
                return;
            } else if (h_ini == "") {
                alert("Debe ingresar la hora de salida de su permiso");
                return;
            } else if (h_fin == "") {
                alert("Debe ingresar la hora de retorno de su permiso");
                return;
            }
            total_horas = parseInt(get_horas_(h_ini, h_fin));
            if (total_dias_desde_hasta > 1) {
                alert(
                    'Art. 33 LOSEP. - Tiene PERMISO para salir de la oficina por hora dentro del mismo dia'
                )
                onload_firma()
                onload_send()
            } else if (total_horas > "41") {
                alert('entro')
                alert(
                    'Art. 33 LOSEP. - Tiene PERMISO para salir de la oficina, por el tiempo de hasta dos horas del miso dia'
                )
                onload_firma()
                onload_send()
            }
        }

        let txtDiagnostico = document.getElementById('tipo_enfermedad');
        let selectEntidadEnfermedad = document.getElementById('sel_entidad_enfermedad');
        $('#badge_tipo_enfermedad').fadeOut();
        $('#badge_sel_entidad_enfermedad').fadeOut();
        if(sel_tipo_permiso == 4 && txtDiagnostico.validateInput() != ""){
            $('#badge_tipo_enfermedad').fadeIn();
            return;
        }
        if(sel_tipo_permiso == 4 && selectEntidadEnfermedad.value == 0){
            $('#badge_sel_entidad_enfermedad').fadeIn();
            $('#badge_sel_entidad_enfermedad').html("Debe seleccionar una entidad");
            return;
        }

        let datos = {
            cedula_solicitante,
        };

        let token = $("#csrf-token").val();
        _AJAX_("/enviar_code_qr", "POST", token, datos, 2);

    }

    const aprobar_firma = () => {
        offload_apfirma();
        let sel_tipo_permiso = $("#sel_tipo_permiso").val();
        let desde = $("#et_desde").val();
        let hasta = $("#et_hasta").val();
        let hora_inicial = $("#et_h_inicio").val();
        let hora_final = $("#et_h_final").val();
        let observacion = $("#et_observacion").val();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let total_horas = '0';
        if (sel_tipo_permiso == 0) {
            alert("Debe seleccionar un tipo de permiso!");
            return;
        }

        if (desde == "" && hasta == "") {
            alert("Debe ingresar la fecha desde y hasta de su permiso");
            return;
        } else if (desde == "") {
            alert("Debe ingresar la fecha de inicio de su permiso");
            return;
        } else if (hasta == "") {
            alert("Debe ingresar la fecha fin de su permiso");
            return;
        }
        if (estado_permxhora == 1) {
            hora_inicial = $("#et_h_inicio").val();
            hora_final = $("#et_h_final").val();
            if (hora_inicial == "" || hora_inicial === undefined) {
                alert("Por favor debe ingresar una hora inicial");
                onload_send();
                $("#et_h_inicio").focus();
                return;
            } else if (hora_final == "" || hora_final === undefined) {
                alert("Por favor debe ingresar una hora final");
                onload_send();
                $("#et_h_final").focus();
                return;
            }
            total_horas = get_horas(hora_inicial, hora_final);
        } else {
            hora_inicial = 0;
            hora_final = 0;
        }

        if (observacion == "") {
            alert("Por favor debe detallar su permiso al menos 50 caracteres");
        }
        fecha_inicial__ = new Date(desde);
        fecha_final__ = new Date(hasta);


        if (fecha_final__ < fecha_inicial__) {
            alert("No puede selecionar una fecha final menor a la fecha de inicio");
            onload_send();
            $("#et_hasta").focus();
            return;
        }
        let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
        let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;

        let codigo = $("#ip_codigo_a").val();
        let token = $("#csrf-token").val();

        let tipo_enfermedad = "";
        if (estado_enfermedad == 1) {
            tipo_enfermedad = $("#tipo_enfermedad").val();
        }

        let datos = {
            sel_tipo_permiso,
            desde,
            hasta,
            hora_inicial,
            hora_final,
            observacion,
            cedula_solicitante,
            diasDeDiferencia,
            codigo,
            tipo_enfermedad,
            total_horas
        };
        _AJAX_("/estampar_codigo", "POST", token, datos, 3);
    }

    const contar_caracteres = (e) => {
        var maxLength = 30;
        var strLength = e.value.length;
        let sel_tipo = $("#sel_tipo_permiso").val();

        $("#num").html(strLength)
        if (strLength > maxLength) {
            if (sel_tipo != 0) {
                $("#btn_enviar_permiso").removeAttr('disabled');
            }
            $("#btn_firmar_permiso").removeAttr('disabled');
            $("#btn_vista_previa").removeAttr('disabled');
        } else {
            $("#btn_enviar_permiso").attr('disabled', 'true');
            $("#btn_firmar_permiso").attr('disabled', 'true');
            //$("#btn_vista_previa").attr('disabled', 'true');
        }
    }

    function padTo2Digits(num) {
        return num.toString().padStart(2, '0');
    }

    function formatDate(date) {
        return [
            padTo2Digits(date.getDate()),
            padTo2Digits(date.getMonth() + 1),
            date.getFullYear(),
        ].join('/');
    }

    function get_horas_(horaF, horaI) {
        var hora1 = (horaI).split(":"),
            hora2 = (horaF).split(":"),
            t1 = new Date(),
            t2 = new Date();
        t1.setHours(hora1[0], hora1[1], '00');
        t2.setHours(hora2[0], hora2[1], '00');
        t1.setHours(t1.getHours() - t2.getHours(),
            t1.getMinutes() - t2.getMinutes(),
            t1.getSeconds() - t2.getSeconds()
        );

        return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? "" : " hora") : "") + (t1.getMinutes() ?
            "" + t1.getMinutes() + "" : "");
    }

    function get_horas(horaF, horaI) {
        var hora1 = (horaI).split(":"),
            hora2 = (horaF).split(":"),
            t1 = new Date(),
            t2 = new Date();
        t1.setHours(hora1[0], hora1[1], '00');
        t2.setHours(hora2[0], hora2[1], '00');
        t1.setHours(t1.getHours() - t2.getHours(),
            t1.getMinutes() - t2.getMinutes(),
            t1.getSeconds() - t2.getSeconds()
        );

        return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? " horas" : " hora") : "") + (t1.getMinutes() ?
            ", " + t1.getMinutes() + " minutos" : "") + (t1.getSeconds() ? (t1.getHours() || t1.getMinutes() ?
            " y " : "") + t1.getSeconds() + " segundos" : "");
    }
    $("#document").on("change", function(e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        file_name_ = file.name;
        file_type_ = file.type;
        file_size_ = file.size;
        reader.onloadend = () => {
            fileURL_ = reader.result;
            console.log(fileURL_);
        };
        reader.readAsDataURL(file);
    });

    function enviar_file(e) {
        const file = e.target.files[0];
        const reader = new FileReader();
        file_name_ = file.name;
        file_type_ = file.type;
        file_size_ = file.size;
        reader.onloadend = () => {
            fileURL_ = reader.result;
            console.log(fileURL_);
        };
        reader.readAsDataURL(file);
    }

    function offload_send() {
        $("#btn_enviar_permiso").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Enviando solicitud</span>'
        $("#btn_enviar_permiso").html(html);
    }

    function onload_send() {
        let html = ' <i class="fa-regular fa-paper-plane"></i><span class="m-l1">Enviar solicitud</span>'
        $("#btn_enviar_permiso").html(html);
        $("#btn_enviar_permiso").removeAttr('disabled');
    }

    const on_load_vista_previa = () => {
        let html = ' <i class="fa-solid fa-eye"></i><span class="m-l1">Vista Previa</span>'
        $("#btn_vista_previa").html(html);
        $("#btn_vista_previa").removeAttr('disabled');
    }

    function offload_vista_previa() {
        $("#btn_vista_previa").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando vista previa</span>'
        $("#btn_vista_previa").html(html);
    }


    /**LOAD FIRMAR DOCUMENTO*/
    function offload_firma() {
        $("#btn_firmar_permiso").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando código</span>'
        $("#btn_firmar_permiso").html(html);
    }

    function onload_firma() {
        let html = ' <i class="fa-solid fa-pencil"></i><span class="m-l1">Firmar Permiso</span>'
        $("#btn_firmar_permiso").html(html);
        $("#btn_firmar_permiso").removeAttr('disabled');
    }
    /**LOAD ESTAMPAR FIRMAR DOCUMENTO*/
    function offload_apfirma() {
        $("#btn_ap_firma").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Firmando Documento</span>'
        $("#btn_ap_firma").html(html);
    }

    function onload_apfirma() {
        let html = '<span class="m-l1">Estampar código</span>'
        $("#btn_ap_firma").html(html);
        $("#btn_ap_firma").removeAttr('disabled');
    }




    function conf_permiso(sel) {
        let permiso_sel = sel.value
        console.log("Permiso seleccionado" + permiso_sel)
        if (permiso_sel == "") {
            $("#c_p_nota").hide();
        } else {
            let permisos = $("#a_permisos").val();
            permisos = (JSON.parse(permisos))
            permisos.map(jsd => {
                if (jsd.id == permiso_sel) {
                    if (jsd.estado_permisoxhora == 1) {
                        $("#c_p_hora").show()
                    } else if (jsd.estado_permisoxhora == 2) {
                        let meses = $("#et_meses_servicio").val();
                        if (meses <= 11) {
                            alert('No puede solicitar vacaciones por que tiene ' + meses +
                                ' meses de servicios');
                            $("#sel_tipo_permiso").val('0')
                            return;
                        }
                    } else {
                        $("#c_p_hora").hide()
                    }

                    if (jsd.estado_documento == 1) {
                        $("#c_p_documento").show()
                    } else {
                        $("#c_p_documento").hide()
                    }

                    if (jsd.estado_enfermedad == 1) {
                        $("#c_p_enfermedad").show()
                    } else {
                        $("#c_p_enfermedad").hide()
                    }

                    if (jsd.estado_enfermedad == 1) {
                        $("#c_p_entidad_enfermedad").show()
                        c_p_entidad_enfermedad
                    } else {
                        $("#c_p_entidad_enfermedad").hide()
                    }

                    $("#c_p_nota").show();
                    $("#p_nota").html(jsd.notas);
                    $("#et_estado_documento").val(jsd.estado_documento);
                    $("#et_estado_permisoxhora").val(jsd.estado_permisoxhora);
                    $("#et_estado_enfermedad").val(jsd.estado_enfermedad);

                }
            })
        }
    }



    function _AJAX_(ruta, tipo, token, datos, p) {
        if (tipo == "POST") {
            $.ajax({
                url: ruta,
                type: tipo,
                dataType: "json",
                headers: {
                    "X-CSRF-TOKEN": token
                },
                data: datos,
                success: function(res) {
                    if (p == 0) {
                        onload_send();
                        if (res.respuesta) {
                            $("#aprobador").html(res.aprobador);
                            $("#modal_permiso_ok").modal("show");

                        } else {
                            if (res.sms == 'sinjefe') {
                                $("#sms").html(
                                    "Estimado por favor comuniquese al departamento de Talento Humano y comunique que no tiene Jefe asignado"
                                );
                                $("#modal-error").modal("show");
                            }

                        }
                    } else if (p == 1) {
                        on_load_vista_previa();
                        // $("#aprobador").html(res.aprobador);
                        document.querySelector("#vistaPrevia").setAttribute("src", "/storage/" + res.url +
                            "#toolbar=0&navpanes=0&scrollbar=0");
                        $("#modal_vista_previa").modal("show");
                    } else if (p == 2) {
                        onload_firma()
                        if (res.res) {
                            let codigo = res.Code
                            $("#modal_aprobar_code").modal("show");
                        }
                    } else if (p == 3) {
                        if (res.res) {
                            onload_apfirma();
                            $("#modal_aprobar_code").modal("hide");
                            $("#permiso_doc").html(res.u);
                            $("#ip_url_formulario").val(res.u);
                            $("#span_documento_firmado").show();
                        } else {
                            alert("el codigo de autorizacion es incorrecto")
                        }
                    }
                },
            }).fail(function(jqXHR, textStatus, errorthrown) {
                if (jqXHR.status === 0) {
                    alert("Not connect: Verify Network.");
                } else if (jqXHR.status == 404) {
                    alert("Requested page not found [404]");
                } else if (jqXHR.status == 500) {
                    alert("Internal Server Error [500].");
                } else if (textStatus === "parsererror") {
                    alert("Requested JSON parse failed.");
                } else if (textStatus === "timeout") {
                    alert("Time out error.");
                } else if (textStatus === "abort") {
                    alert("Ajax request aborted.");
                } else {
                    alert("Uncaught Error: " + jqXHR.responseText);
                }
            });
        } else if (tipo == "GET") {
            $.ajax({
                url: ruta,
                type: tipo,
                dataType: "json",
                success: function(res) {
                    let html_ = "";
                    if (p == 0) {
                        if (res.respuesta == true) {
                            var ht = "";
                            ht +=
                                '  <table id="table-proyectos" border="2" class="table dataTable no-footer">';
                            ht += '	    <thead class="background-thead">';
                            ht += '		    <tr align="center">';
                            ht +=
                                '				<th align="center" class="border-bottom-0 color-th">#</th>';
                            ht +=
                                '			    <th align="center" class="border-bottom-0 color-th">PROYECTO</th>';
                            ht +=
                                '			    <th align="center" class="border-bottom-0 color-th">ESTADO</th>';
                            ht +=
                                '			    <th align="center" class="border-bottom-0 color-th">FECHA</th>';
                            ht +=
                                '				<th align="center" class="border-bottom-0 color-th">Opciones</th>';
                            ht += "			</tr>";
                            ht += "		</thead>";
                            ht += "		<tbody>";
                            $(res.data).each(function(i, data) {
                                let proyecto = "'" + data.pro_nombre + "'";
                                ht += "			<tr>";
                                ht +=
                                    '			    <td class="color-td" align="center">' +
                                    data.pro_id +
                                    "</td>";
                                ht +=
                                    '				<td class="color-td" align="center">' +
                                    data.pro_nombre +
                                    "</td>";
                                if (data.pro_estado == 1) {
                                    ht +=
                                        '<td class="color-td" align="center"><span class="badge bg-success me-1">Activo</span></td>';
                                } else {
                                    ht +=
                                        '<td class="color-td" align="center"><span class="badge bg-danger me-1">Inactivo</span></td>';
                                }
                                ht +=
                                    '<td class="color-td" align="center">' +
                                    data.pro_fecha +
                                    "</td>";
                                ht += '<td class="color-td" align="center">';
                                ht +=
                                    '<button type="button" onclick="modal_editar(' +
                                    data.pro_id +
                                    "," +
                                    proyecto +
                                    "," +
                                    data.pro_estado +
                                    ')" class="tam-btn btn btn-warning btn-modal-editar"><i class="fa fa-edit tam-icono"></i></button>';
                                ht +=
                                    '              <button type="button" onclick="modal_delete(' +
                                    data.pro_id +
                                    ')" class="tam-btn btn btn-danger btn-modal-eliminar"><i class="fa fa-trash tam-icono"></i></button>';
                                ht += "			</td></tr>";
                            });
                            ht += "		</tbody>";
                            ht += "  </table>";
                            $("#div-table-proyectos").html(ht);
                        }
                        $("#table-proyectos").DataTable();
                        $("#global-loader").removeClass("block");
                        $("#global-loader").addClass("none");
                    }
                },
            }).fail(function(jqXHR, textStatus, errorthrown) {
                if (jqXHR.status === 0) {
                    alert("Not connect: Verify Network.");
                } else if (jqXHR.status == 404) {
                    alert("Requested page not found [404]");
                } else if (jqXHR.status == 500) {
                    alert("Internal Server Error [500].");
                } else if (textStatus === "parsererror") {
                    alert("Requested JSON parse failed.");
                } else if (textStatus === "timeout") {
                    alert("Time out error.");
                } else if (textStatus === "abort") {
                    alert("Ajax request aborted.");
                } else {
                    alert("Uncaught Error: " + jqXHR.responseText);
                }
            });
        }
    }

    function cerrar_modal_per() {
        $("#et_estado_documento").val("");
        $("#et_estado_permisoxhora").val("");
        $("#et_estado_enfermedad").val("");
        $("#et_cedula_s").val("");
        $("#sel_tipo_permiso").val("");
        $("#et_desde").val("");
        $("#et_hasta").val("");
        $("#et_observacion").val("");
        $("#et_h_inicio").val("");
        $("#et_h_final").val("");
        $("#modal_permiso_ok").modal("hide");
        location.href = "/permisos"
    }

    function firmar_() {
        offload_firma()
        let sel_tipo_permiso = $("#sel_tipo_permiso").val();
        let desde = $("#et_desde").val();
        let hasta = $("#et_hasta").val();

        let h_ini = $("#et_h_inicio").val();
        let h_fin = $("#et_h_final").val();
        let observacion = $("#et_observacion").val();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let total_horas = '0';
        if (sel_tipo_permiso == 0) {
            alert("Debe seleccionar un tipo de permiso!");
            return;
        }

        if (desde == "" && hasta == "") {
            alert("Debe ingresar la fecha desde y hasta de su permiso");
            return;
        } else if (desde == "") {
            alert("Debe ingresar la fecha de inicio de su permiso");
            return;
        } else if (hasta == "") {
            alert("Debe ingresar la fecha fin de su permiso");
            return;
        }
        if (estado_permxhora == 1) {

            if (h_ini == "" && h_fin == "") {
                alert("Debe ingresar la hora de inicio y de retorno de su permiso");
                return;
            } else if (h_ini == "") {
                alert("Debe ingresar la hora de salida de su permiso");
                return;
            } else if (h_fin == "") {
                alert("Debe ingresar la hora de retorno de su permiso");
                return;
            }
            total_horas = get_horas(h_ini, h_fin);

        } else {

        }

        if (observacion == "") {
            alert("Por favor debe detallar su permiso al menos 50 caracteres");
        }

        fecha_inicial__ = new Date(desde);
        fecha_final__ = new Date(hasta);


        if (fecha_final__ < fecha_inicial__) {
            alert("No puede selecionar una fecha final menor a la fecha de inicio");
            onload_send();
            $("#et_hasta").focus();
            return;
        }

        let fecha_actual = new Date();
        /*let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
        let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;*/

        var diff = fecha_inicial__ - fecha_actual;
        var total_dias_soli = (parseInt(diff) / (1000 * 60 * 60 * 24)) + 1;

        if (parseInt(total_dias_soli) < 15) {
            alert(
                'Toda solicitud de vacaciones deberá ser presentada a la Dirección Administrativa de Talento Humano con un mínimo de quince (15) días de anticipación.'
            )
            $("#et_desde").focus();
            onload_send();
            return;
        }

        let datos = {
            cedula_solicitante,
        };

        let token = $("#csrf-token").val();
        _AJAX_("/enviar_code_qr", "POST", token, datos, 2);
    }
</script>
@endsection
@else
<script>
    location.href = "/";
</script>


@endif