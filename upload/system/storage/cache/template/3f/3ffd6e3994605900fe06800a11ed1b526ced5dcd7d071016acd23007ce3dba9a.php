<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/home.twig */
class __TwigTemplate_ddaea02b2e2b7595ff0542db3d2b1724d8f1c8a37f6a435b8d6df0599c4aba59 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "

 <!-- Icon Flotante -->
    <a href=\"#\" rel=\"noopener\">
        <div class=\"icon-float\"></div>
    </a>
    <!-- End Icon Flotante -->

    <!--Carousel-->
    <section id=\"carouselExampleControls\" class=\"carousel slide\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <!--<div class=\"box-text\">
                <h1>En estas fiestas brinda con Luigi Bosca</h1>
                <a href=\"#\" rel=\"noopener \">
                    <button class=\"btn btn-buy\">Comprar</button>
                </a>
            </div>-->
            <div class=\"carousel-item active\">
                <a href=\"#\">
                    <div class=\"slider slider1\"></div>
                </a>
            </div>
            <div class=\"carousel-item\">
                <a href=\"#\">
                    <div class=\"slider slider2\"></div>
                </a>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleControls\"
            data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleControls\"
            data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </section>
    <!--End Carousel-->
    
    <!-- What is matcha -->
    <div id=\"whats-matcha\"></div>
<section class=\"whats-matcha\">
    <h2>??QU?? ES MATCHA?</h2>
    <div class=\"box-matcha\">
        <div class=\"text-matcha\">
            <p>T?? matcha org??nico puro es una planta ancestral, importada de los campos de Jap??n y elaborado con hojas
                de t?? verde premium.</p>
            <p>Nuestro matcha pasa por un proceso de molido artesanal para la conservaci??n de sus nutrientes. </p>
        </div>
    </div>
    <img class=\"img-matcha\" src=\"catalog/view/theme/default/img/img-plato.png\" alt=\"image matcha\">
    <a href=\"#\" class=\"btn-matcha\">ver m??s</a>
</section>
<!-- End what is matcha -->

<!-- Abouts -->
<div id=\"about\"></div>
<section class=\"about\">
    <div class=\"box-about\">
        <h2>??QUI??NES SOMOS?</h2>
        <img src=\"catalog/view/theme/default/img/hoja.svg\" alt=\"image matcha\">
        <p>Mora y matcha es una tienda online de matcha org??nico, nos enfocamos en ofrecer un c??lido y ??gil servicio al
            cliente, por lo que tus compras ser??n entregadas en el menor tiempo posible, adem??s de brindarte una
            plataforma intuitiva para que puedas realizar tus compras de manera pr??tica, segura y con costos de env??o
            incluidos a partir de compras m??nimas.</p>
        <p>Mora y matcha es una empresa creada por j??venes mexicanos interesados en el bienestar de las personas y
            enfocados en dos objetivos principales: que hagas del matcha un estilo de vida para que puedas experimentar
            el poder curativo y antioxidante que nos brinda esta planta ancestral y ayudarte a mejorar tus d??as para
            comenzar la ma??ana con energ??a,enfoque, concentraci??n y claridad.</p>
    </div>
    <img class=\"tasa\" src=\"catalog/view/theme/default/img/tasa.png\" alt=\"image matcha\">
</section>
<!-- End Abouts -->

<!-- Benefits -->
<div id=\"benefits\"></div>
<section class=\"benefits\">
    <h2>Beneficios</h2>
    <div class=\"container-benefits\">
        <div class=\"box-benefits\">
            <img src=\"catalog/view/theme/default/img/send.svg\" alt=\"Image matcha\">
            <p class=\"one\">Env??o ??gil</p>
        </div>
        <div class=\"box-benefits\">
            <img src=\"catalog/view/theme/default/img/asistencia.svg\" alt=\"Image matcha\">
            <p class=\"two\">Asistencia online</p>
        </div>
        <div class=\"box-benefits\">
            <img src=\"catalog/view/theme/default/img/compra.svg\" alt=\"Image matcha\">
            <p>Compra Segura</p>
        </div>
    </div>
</section>
<!-- End Benefits -->


<!-- Box Te -->
<div id=\"matcha\"></div>
<section class=\"te\">
    <div class=\"box-gradient\">
        <div class=\"info-te\">
            <img class=\"icon-te\" src=\"catalog/view/theme/default/img/icon-te.svg\" alt=\"Image matcha\">
            <h3>Matcha \$198.00</h3>
            <p>Precio por bolsa \$200</p>
            <a href=\"index.php?route=product/product&product_id=42\">Comprar</a>
            <img class=\"img-hoja\" src=\"catalog/view/theme/default/img/hoja-te.svg\" alt=\"Image matcha\">
        </div>
        <div class=\"img-te\">
            <img src=\"catalog/view/theme/default/img/te.png\" alt=\"Image matcha\">
        </div>
    </div>
</section>
<!-- End Te -->

<!-- Newsletter -->
<div id=\"contact\"></div>
<article class=\"newsletter\">
    <div class=\"box-news\">
        <div class=\"mail\">
            <img src=\"catalog/view/theme/default/img/mail.svg\" alt=\"Icon de mail\">
            <h3>Newsletter</h3>
        </div>
        <p>Suscr??bete para recibir recetas, promociones y tips de bienestar.</p>
    </div>
    <div class=\"box-news\">
        <div class=\"box-form\">
            <form action=\"\">
                <div class=\"box-input\">
                    <label for=\"email\">Email</label><br>
                    <input type=\"email\" name=\"email\" placeholder=\"Ingresar correo electr??nico\">
                </div>
                <button type=\"submit\">Suscribirme</button>
            </form>
        </div>
    </div>
</article>
<!-- Newsletter -->

";
        // line 141
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 141,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
