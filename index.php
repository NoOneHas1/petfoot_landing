<?php include("assets/layouts/nav.php"); ?>

<main>

    <!--INICIO-->
    <!--Portada de inicio-->
    <div class="container__cover div__offset">
        <div class="cover">
            <section class="text__cover">
                <h1>CUIDAMOS LO <br> QUE MAS AMAS</h1>
                <p>Gestiona la salud y bienestar de tus mascotas desde un solo lugar.  Regístrate gratis y accede a historiales médicos, vacunas, cédulas digitales y más.</p>
                <a href="./pages/contacto.php" class="btn__text-cover btn__text">Iniciar ahora</a>
            </section>
            <section class="image__cover">
                <img src="assets/images/cover/image_pets.jpeg" alt="">
            </section>
        </div>
    </div>

    <!--SERVICIOS-->

    <div class="container__service container__card-primary div__offset">
        <div class="service card__primary">
            <div class="text__service text__card-primary">
                <p>¿QUE HACEMOS?</p>
                <h1>Cuidamos y protegemos tu mascota</h1>
            </div>

            <div class="container__card-service container__box-cardPrimary">
                <div class=" card__service box__card-primary">
                    <img src="assets/images/icons/dog-solid.svg" alt="">
                    <p> Agrega y gestiona tus mascotas en un solo lugar</p>
                </div>
                <div class=" card__service box__card-primary">
                    <img src="assets/images/icons/paw-solid.svg" alt="">
                    <p>Accede al historial completo de salud de tu mascota.</p>
                </div>
                <div class=" card__service box__card-primary">
                    <img src="assets/images/icons/stethoscope-solid.svg" alt="">
                    <p>Veterinarios autorizados registran diagnósticos y cuidados.</p>
                </div>
                <div class=" card__service box__card-primary">
                    <img src="assets/images/icons/user-doctor-solid.svg" alt="">
                    <p>Identificador único para cada mascota.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Quienes somos-->
    <div class="container__about container__card-primary div__offset">
        <div class="about card__primary">
            <div class="text__about text__card-primary">
                <p>¿QUIENES SOMOS?</p>
                <h1>Unimos tecnología y amor por los animales</h1>
            </div>

            <div class="description__about">
                <div class="text-left">
                    <h2>Misión</h2>
                    <p>
                        Brindar a los dueños de mascotas y profesionales veterinarios una plataforma tecnológica completa,
                        segura y fácil de usar que permita centralizar, gestionar y consultar toda la información relevante sobre la salud y el bienestar de los
                        animales. A través de un sistema accesible desde cualquier dispositivo, buscamos mejorar el seguimiento médico, facilitar la comunicación
                        entre cuidadores y veterinarios, y ofrecer herramientas útiles que ayuden en situaciones críticas como la pérdida de mascotas o la programación de cuidados preventivos.
                    </p>
                </div>

                <div class="image-center">
                    <img src="assets/images/about/about-dog.png" alt="Perro feliz" />
                </div>
            </div>
            <div class="description__about">
                <div class="image-center">
                    <img src="assets/images/about/cali.png" alt="Cali" />
                </div>

                <div class="text-left">
                    <h2>Visión</h2>
                    <p>
                        Ser la plataforma digital líder en Cali en la gestión integral de la información veterinaria, promoviendo el bienestar
                        animal a través del uso de tecnología accesible, confiable y centrada en las necesidades reales de los cuidadores de mascotas.
                        Queremos fortalecer el vínculo entre humanos y animales en nuestra ciudad, ofreciendo una solución moderna que facilite el seguimiento médico,
                        fomente la tenencia responsable y mejore la atención veterinaria desde el entorno urbano y comunitario caleño.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--Llamado a la acción-->
    <div class="container__about container__card-primary div__offset">
        <div class="cta__final">
            <div class="container__cta">
                <h2>¿Listo para cuidar mejor de tu mascota?</h2>
                <p>Empieza a centralizar su información médica, recibir recordatorios y tenerlo todo al alcance desde un solo lugar.</p>
                <button>¡Empieza ahora!</button>
            </div>
        </div>
    </div>


</main>

<?php include("assets/layouts/footer.php"); ?>
