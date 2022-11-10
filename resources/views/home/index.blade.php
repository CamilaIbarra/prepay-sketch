@extends('layout.layout')
@section('content')
  <!-- Transparent img header  -->
  <header>
  <header>
    <!-- Description -->
    <div class="container-fluid bg-image py-5" style="margin: 0">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5 home-banner mb-5 mb-lg-0">
            <div class="position-relative mb-4">
              <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                ¿Qué es PrePay?
              </h6>
              <h1 class="display-4 fw-bold">Pedir un <br>anticipo nunca <br> fue tan fácil<br></h1>
              <div class="text-block-5 fw-normal">Un servicio intuitivo, rápido y seguro.
                <br>Registrate hoy, seguí los pasos indicados
                <br>y en minutos recibirás el dinero solicitado!
              </div>
              <div>
                <div class="mt-4">
                  <a href="/login" class="request-btn">
                    <button class="btn btn-outline text-white" style="background:rgb(111, 117, 194)">Acceder</button>
                  </a>
                </div>
              </div>
            </div>
            <p class="m-0"></p>

          </div>
          <!-- image -->
          <div class="col-lg-6" style="min-height: 400px">
            <div class="position-relative">
              <img class="position-absolute w-100 h-20" src="{{ url('assets/img/foto-banner.jpg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  </header>
  <!-- How does the app work -->
  <div class="container-fluid px-0 py-5">
    <div class="row mx-0 justify-content-center pt-5">
      <div class="col-lg-6">
        <div class="section-title text-center position-relative mb-4">
          <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
            Elegí PrePay
          </h6>
          <h1 class="display-4 fw-bold">¿Cómo pedir un anticipo?</h1>
          <ul class="steps">
            <li>
              <div class="text-block-17">01</div>
              <div class="text-block-5">Registro</div>
              <p class="paragraph-3">
                Accede a nuestro formulario de registro, ingresa los datos requeridos e inicia sesión con tu nueva
                cuenta.
              </p>
            </li>
            <li>
              <div class="text-block-17">02</div>
              <div class="text-block-5">Solicitud</div>
              <p class="paragraph-3">
                Solicita tu anticipo en minutos y recibí una transferencia automática en tu cuenta bancaria
              </p>
            </li>
            <li>
              <div class="text-block-17">03</div>
              <div class="text-block-5">Retención</div>
              <p class="paragraph-3">
                Tu empleador retendrá de tu salario la cantidad solicitada y las tasas correspondientes al finalizar el
                mes.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Opinions -->
  <div class="container-fluid px-0 py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
              Calificaciones
            </h6>
            <h1 class="display-4 fw-bold">Opiniones de <br>nuestros usuarios</h1>
          </div>
          <p class="m-0"></p>
        </div>
        <div class="col-lg-7">
          <div>
            <div class="bg-white p-5">
              <i class="fa fa-3x fa-quote-left mb-4"></i>
              <p>
                Buen servicio y fácil de utilizar. Con PrePay recibí mi anticipo rápido y sin problemas.
              </p>
              <div class="d-flex flex-shrink-0 align-items-center mt-4">
                <img class="img-fluid mr-4" src="" alt="" />
                <div>
                  <h5>Camila Ibarra</h5>
                  <span></span>
                </div>
              </div>
            </div>
            <div class="bg-white p-5">
              <i class="fa fa-3x fa-quote-left mb-4"></i>
              <p>
                Necesitaba el dinero para un gasto imprevisto, y gracias a PrePay lo obtuve en el momento. Lo
                recomiendo.
              </p>
              <div class="d-flex flex-shrink-0 align-items-center mt-4">
                <img class="img-fluid mr-4" src="" alt="" />
                <div>
                  <h5>Juan López</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection