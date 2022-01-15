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

/* default/template/common/header.twig */
class __TwigTemplate_613831b326a8aa38ac784f02b7abb7da7c37c17288cc48496f1f20ed298baf6b extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta property=\"og:locale\" content=\"es_mx\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:title\" content=\"Todos los beneficios del matcha en una tasa de té cada mañana.\">
  <meta property=\"og:description\"
    content=\"Té matcha orgánico puro es una planta ancestral, importada de los campos de Japón y elaborado con hojas de té verde premium.\">
  <meta property=\"og:url\" content=\"http://moraymatcha.com\">
  <meta property=\"og:site_name\" content=\"mora y matcha\">
  <title>";
        // line 20
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 21
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 22
        if (($context["description"] ?? null)) {
            // line 23
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 25
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 26
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 28
        echo "  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  ";
        // line 31
        echo "  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/stylesheet.css\">
  <!-- CSS Personal -->
  <link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/app.css\">

  <!-- CDN CSS Bootstrap 5-->
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 40
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 40);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 40);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 40);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 43
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 47
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 47);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 47);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 50
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</head>

<body>
  <!-- AD -->
  <section class=\"ad\">
    <p>ENVÍOS SIN CARGO A CABA Y GBA | HASTA 12 CUOTAS SIN INTERÉS</p>
  </section>
  <!--End AD-->
  <nav class=\"nav-mora\">
    <a class=\"icons-mov\" href=\"/\">
      <div class=\"nav-logo\"></div>
      <div class=\"icon-logo\"></div>
    </a>
    <div id=\"nav-mov\" class=\"hamburguer\"></div>
    <ul class=\"links\">
      <li><a href=\"#whats-matcha\">¿Qué es matcha?</a></li>
      <li><a href=\"#about\">Quiénes somos</a></li>
      <li><a href=\"#benefits\">Beneficios</a></li>
      <li><a href=\"#matcha\">Matcha</a></li>
      <li><a href=\"#contact\">Contacto</a></li>
    </ul>
    <div>";
        // line 73
        echo ($context["search"] ?? null);
        echo "</div>
    <div class=\"icons\">
      <a id=\"icon-search\" class=\"search\"></a>
      <a href=\"";
        // line 76
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"user dropdown-toggle\" data-toggle=\"dropdown\"
        id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
      </a>
      <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
        <li class=\"text-center\"><a href=\"";
        // line 80
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["text_register"] ?? null);
        echo "</a></li>
        <li class=\"text-center\"><a href=\"";
        // line 81
        echo ($context["login"] ?? null);
        echo "\">";
        echo ($context["text_login"] ?? null);
        echo "</a></li>
      </ul>
      <a href=\"";
        // line 83
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"cart\"></a>
    </div>
  </nav>

  ";
        // line 87
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 87,  225 => 83,  218 => 81,  212 => 80,  203 => 76,  197 => 73,  174 => 52,  165 => 50,  160 => 49,  149 => 47,  145 => 46,  142 => 45,  133 => 43,  128 => 42,  115 => 40,  111 => 39,  101 => 31,  98 => 28,  92 => 26,  89 => 25,  83 => 23,  81 => 22,  77 => 21,  73 => 20,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
