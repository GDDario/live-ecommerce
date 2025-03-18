<footer class="w-full bg-black px-20 py-10 mt-10 text-white flex-col justify-between gap-16">
    <div class="flex justify-between gap-4">
        <div>
            <h4>Nossas redes sociais</h4>

            <div class="flex items-center gap-4 mt-2">
                <a href="#"><img src="img/icons/facebook.png" alt="Facebook" class="w-7 h-7"/></a>
                <a href="#"><img src="img/icons/instagram.png" alt="Instagram" class="w-7 h-7"/></a>
                <a href="#"><img src="img/icons/x.png" alt="X" class="w-7 h-7"/></a>
            </div>
        </div>

        <div class="lg:w-[500px]">
            <h4>Assine a nossa newsletter e fique por dentro das novidades</h4>

            <livewire:components.newsletter-form/>
        </div>
    </div>

    <div class="flex justify-between gap-4 mt-8">
        <div>
            <h3>Nossa missão</h3>

            <p class="max-w-[500px]">Nossa loja nasceu para impulsionar a evolução da indústria. Aprendemos,
                inovamos e melhoramos constantemente, para criar um mundo onde todos são encorajados subir a barra e
                buscar excelência</p>
        </div>

        <div class="flex flex-col gap-2 justify-center items-center lg:w-[500px]">
            <h4>Certificados</h4>

            <div class="flex gap-2 mt-2">
                <a href="#"><img src="img/certs/google-transparency-report.webp"
                                 alt="Google transparency report certification" class="w-18 h-18"/></a>
                <a href="#"><img src="img/certs/loja-protegida.webp" alt="Loja Protegida certification"
                                 class="w-18 h-18"/></a>
                <a href="#"><img src="img/certs/reclame-aqui.avif" alt="Reclame aqui certification"
                                 class="w-18 h-18"/></a>
            </div>

            <div class="flex gap-2">
                <a href="#"><img src="img/certs/abvtex.avif" alt="Abvtex certification" class="w-18 h-18"/></a>
                <a href="#"><img src="img/certs/eu-reciclo.avif" alt="Eu Reclico certification" class="w-18 h-18"/></a>
            </div>
        </div>
    </div>
</footer>
