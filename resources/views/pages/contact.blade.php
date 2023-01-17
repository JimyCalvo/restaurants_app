<x-layouts.app.app title="Contact">

    <div class="container contact1">
      <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt="" style="transform: perspective(300px) rotateX(0deg) rotateY(0deg); will-change: transform;">
          <img src="https://grupoteaa.com/wp-content/uploads/2017/09/mensaje-enviado.png" alt="IMG" width="600px">
        </div>
        <form class="contact1-form validate-form" action="{{route('contact.store')}}" method="POST">
          @csrf
          <span class="contact1-form-title">
          <h2>Contactanos</h2>
          </span>
          <x-partials.messages.messages class="container"/>
          <div class="wrap-input1 validate-input" data-validate="Name is required">
            <input class="input1" type="text" name="name" placeholder="Nombre">
            <span class="shadow-input1"></span>
          </div>
          <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input1" type="text" name="email" placeholder="Correo">
            <span class="shadow-input1"></span>
          </div>
          <div class="wrap-input1 validate-input" data-validate="Subject is required">
            <input class="input1" type="text" name="subject" placeholder="Asunto">
            <span class="shadow-input1"></span>
          </div>
          <div class="wrap-input1 validate-input" data-validate="Message is required">
            <textarea class="input1" name="message" placeholder="Mensaje"></textarea>
            <span class="shadow-input1"></span>
          </div>
          <div class="container-contact1-form-btn">
            <button class="contact1-form-btn">
              <span>
                 Enviar correo
              <i class="bx-arrow-right nav_icon" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </x-layouts.app.app>
