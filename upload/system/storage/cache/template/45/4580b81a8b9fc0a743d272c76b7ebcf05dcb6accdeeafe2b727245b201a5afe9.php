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

/* default/template/common/footer.twig */
class __TwigTemplate_5bffe17cc2d12a051df64b05817f18b3021ea99f3f33ca11830a623810683261 extends \Twig\Template
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
        echo "<!-- Footer -->
<footer class=\"container-fluid footer\">
    <div class=\"row px-3\">
        <div class=\"col-12 col-md-2\">
            <a href=\"/moraymatcha.php\">
                <img src=\"catalog/view/theme/default/img/logo-footer.svg\" alt=\"Icon Vinimos\">
            </a>
            <hr class=\"mov-line\">
        </div>
        <div class=\"col-12 col-md-8 d-flex container-links\">
            <div class=\"col-md-3\">
                <div class=\"info-desc\">
                    <h4 class=\"mb-4\">Productos</h4>
                    <p><a href=\"#\">Matcha</a></p>
                </div>
                <div class=\"dropdown info-mov\">
                    <button class=\"btn dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\">
                        Productos
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                        <li><a class=\"dropdown-item\" href=\"#\">Matcha</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"info-desc\">
                    <h4 class=\"mb-4\">Asistencia online</h4>
                    <p><a href=\"#\">Preguntas frecuentes</a></p>
                    <p><a href=\"#\">T??rminos y condiciones</a></p>
                    <p><a href=\"#\">Pol??ticas de env??o</a></p>
                </div>
                <div class=\"dropdown info-mov\">
                    <button class=\"btn dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\">
                        Asistencia online
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                        <li><a class=\"dropdown-item\" href=\"#\">Preguntas frecuentes</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">T??rminos y condiciones</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Pol??ticas de env??o</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"info-desc\">
                    <h4 class=\"mb-4\">Empresa</h4>
                    <p><a href=\"#\">Nosotros</a></p>
                    <p><a href=\"#\">Nuestra raz??n de ser</a></p>
                </div>
                <div class=\"dropdown info-mov\">
                    <button class=\"btn dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\"
                        aria-expanded=\"false\">
                        Empresa
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                        <li><a class=\"dropdown-item\" href=\"#\">Nosotros</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Nuestra raz??n de ser</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 text-left\">
                <div class=\"info-desc\">
                    <h4>Contact??nos</h4>
                </div>
                <div class=\"dropdown info-mov\">
                    <button class=\"btn\" type=\"button\">
                        Contact??nos
                    </button>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-md-2 p-0 container-social\">
            <hr class=\"mov-line\">
            <a class=\"mx-2\" href=\"#\"><img src=\"catalog/view/theme/default/img/email.svg\" alt=\"Icon Email\"></a>
            <a class=\"mx-2\" href=\"#\"><img src=\"catalog/view/theme/default/img/facebook.svg\" alt=\"Icon Facebook\"></a>
            <a class=\"mx-2\" href=\"#\"><img src=\"catalog/view/theme/default/img/instagram.svg\" alt=\"Icon Instagram\"></a>
            <hr class=\"mov-line\">

        </div>
        <div class=\"col-12 copyright text-center\">
            <hr>
            <p class=\"text-privacy\">?? Mora & Matcha 2021 - Todos los derechos reservados |
                <a href=\"#\"> Aviso de privacidad</a>
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- CDN JS Bootstrap 5 -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
    integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\">
</script>
<!-- JS Personal -->
<script src=\"catalog/view/theme/default/js/main.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
