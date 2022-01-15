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

/* default/template/account/login.twig */
class __TwigTemplate_31cb39c30381c3b34fee34909d6c32350aeb656583c219a2417d6e56d5b170c3 extends \Twig\Template
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
<br><br><br><br><br><br>
<div class=\"container height-full\">
  <div class=\"row\">
    <div class=\"col-sm-12\" style=\"padding: 0;\">
        <ul class=\"breadcrumb\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
      ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
      ";
        }
        // line 14
        echo "      ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      </div>
      ";
        }
        // line 18
        echo "    </div>
    <div id=\"content\" class=\"";
        // line 19
        echo ($context["class"] ?? null);
        echo " style-search\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row acount\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 23
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 24
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 25
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <div class=\"text-center\">
              <a href=\"";
        // line 27
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 33
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 34
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 35
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group mb-2\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 37
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 38
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"
                  class=\"form-control\" />
              </div>
              <div class=\"form-group mb-2\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 42
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 43
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\"
                  id=\"input-password\" class=\"form-control mb-2\" />
                <a href=\"";
        // line 45
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "?</a>
              </div>
              <div class=\"text-center\">
                <input type=\"submit\" value=\"";
        // line 48
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              </div>
              ";
        // line 50
        if (($context["redirect"] ?? null)) {
            // line 51
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 53
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

";
        // line 61
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 61,  176 => 53,  170 => 51,  168 => 50,  163 => 48,  155 => 45,  148 => 43,  144 => 42,  135 => 38,  131 => 37,  126 => 35,  122 => 34,  118 => 33,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  85 => 19,  82 => 18,  75 => 15,  72 => 14,  66 => 12,  64 => 11,  61 => 10,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
