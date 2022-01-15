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

/* default/template/product/search.twig */
class __TwigTemplate_70b961459b9410532d4507c032cd0a2f25efdeea537357db6ef3084c3de46a76 extends \Twig\Template
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
<div id=\"product-search\" class=\"container height-full\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " style-search mb-5\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"control-label\" for=\"input-search\">";
        // line 19
        echo ($context["entry_search"] ?? null);
        echo " </label>
      <div class=\"row\">
        <form>
          <div class=\"mb-3\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\"
              class=\"form-control\" />
          </div>
          <div class=\"mb-3\">
            <select id=\"disabledSelect\" class=\"form-select\">
              <option value=\"0\">";
        // line 28
        echo ($context["text_category"] ?? null);
        echo "</option>
              ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 30
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                // line 31
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 31);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 31);
                echo "</option>
              ";
            } else {
                // line 33
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 33);
                echo "</option>
              ";
            }
            // line 35
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 36
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36) == ($context["category_id"] ?? null))) {
                    // line 37
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 37);
                    echo "\" selected=\"selected\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 38);
                    echo "</option>
              ";
                } else {
                    // line 40
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 40);
                    echo "
              </option>
              ";
                }
                // line 43
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 44
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44) == ($context["category_id"] ?? null))) {
                        // line 45
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 45);
                        echo "\" selected=\"selected\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        // line 46
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 46);
                        echo "</option>
              ";
                    } else {
                        // line 48
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 48);
                        echo "\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        echo "</option>
              ";
                    }
                    // line 51
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </select>
          </div>
          <div class=\"mb-3\">
            <label class=\"checkbox-inline\">
              ";
        // line 58
        if (($context["sub_category"] ?? null)) {
            // line 59
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
              ";
        } else {
            // line 61
            echo "              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
              ";
        }
        // line 63
        echo "              ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
          <div class=\"mb-3 d-flex justify-content-center\">
            <input type=\"button\" value=\"";
        // line 66
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />
          </div>
        </form>
      </div>
      <p>
        <label class=\"checkbox-inline\">
          ";
        // line 72
        if (($context["description"] ?? null)) {
            // line 73
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 75
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
          ";
        }
        // line 77
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      <h2>";
        // line 79
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 80
        if (($context["products"] ?? null)) {
            // line 81
            echo "      <div class=\"row style-search\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default btn-tooltip\" data-toggle=\"tooltip\"
              title=\"";
            // line 85
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default btn-tooltip\" data-toggle=\"tooltip\"
              title=\"";
            // line 87
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\">
            <a href=\"";
            // line 92
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
          </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 97
            echo ($context["text_sort"] ?? null);
            echo " </label>
            <select id=\"input-sort\" class=\"form-select\" aria-label=\"Default select example\"
              onchange=\"location = this.value;\">
              ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 101
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 101) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 102
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 102);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 102);
                    echo "</option>
              ";
                } else {
                    // line 104
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 104);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 104);
                    echo "</option>
              ";
                }
                // line 106
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            </select>
            ";
            // line 117
            echo "          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 121
            echo ($context["text_limit"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-select\" aria-label=\"Default select example\"
              onchange=\"location = this.value;\">
              ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 125
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 125) == ($context["limit"] ?? null))) {
                    // line 126
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 126);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 126);
                    echo "</option>
              ";
                } else {
                    // line 128
                    echo "              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 128);
                    echo "</option>
              ";
                }
                // line 130
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            </select>
            ";
            // line 141
            echo "          </div>
        </div>
      </div>
      <div class=\"row\">
        ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 146
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 148);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 148);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                echo "\"
                  title=\"";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
                echo "</a></h4>
                <p>";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 153);
                echo "</p>
                ";
                // line 154
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "                <p class=\"price\">
                  ";
                    // line 156
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157);
                        echo "
                  ";
                    } else {
                        // line 159
                        echo "                  <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159);
                        echo "</span> <span
                    class=\"price-old\">";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
                        echo "</span>
                  ";
                    }
                    // line 162
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "                  <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 163);
                        echo "</span>
                  ";
                    }
                    // line 165
                    echo "                </p>
                ";
                }
                // line 167
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 167)) {
                    // line 168
                    echo "                <div class=\"rating\">
                  ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 170
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 170) < $context["i"])) {
                            // line 171
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 173
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                      class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 176
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "                </div>
                ";
                }
                // line 179
                echo "              </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 181);
                echo "');\" 
                        title=\"";
                // line 182
                echo ($context["button_cart"] ?? null);
                echo "\">
                  <i class=\"fa fa-shopping-cart\"></i>
                  <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 184
                echo ($context["button_cart"] ?? null);
                echo "</span>
                </button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 186
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                  onclick=\"wishlist.add('";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
                echo "');\">
                  <i class=\"fa fa-heart\"></i>
                </button>
                ";
                // line 192
                echo "              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 199
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 200
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 203
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 205
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 207
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\">
  <!--
  \$('#button-search').bind('click', function () {
    url = 'index.php?route=product/search';

    var search = \$('#content input[name=\\'search\\']').prop('value');

    if (search) {
      url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    location = url;
  });

  \$('#content input[name=\\'search\\']').bind('keydown', function (e) {
    if (e.keyCode == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('select[name=\\'category_id\\']').on('change', function () {
    if (this.value == '0') {
      \$('input[name=\\'sub_category\\']').prop('disabled', true);
    } else {
      \$('input[name=\\'sub_category\\']').prop('disabled', false);
    }
  });

  \$('select[name=\\'category_id\\']').trigger('change');
  -->
</script>
";
        // line 258
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 258,  553 => 207,  547 => 205,  541 => 203,  535 => 200,  531 => 199,  527 => 197,  517 => 192,  511 => 187,  507 => 186,  502 => 184,  497 => 182,  491 => 181,  487 => 179,  483 => 177,  477 => 176,  472 => 173,  468 => 171,  465 => 170,  461 => 169,  458 => 168,  455 => 167,  451 => 165,  443 => 163,  440 => 162,  435 => 160,  430 => 159,  424 => 157,  422 => 156,  419 => 155,  417 => 154,  413 => 153,  407 => 152,  401 => 149,  393 => 148,  389 => 146,  385 => 145,  379 => 141,  376 => 131,  370 => 130,  362 => 128,  354 => 126,  351 => 125,  347 => 124,  341 => 121,  335 => 117,  332 => 107,  326 => 106,  318 => 104,  310 => 102,  307 => 101,  303 => 100,  297 => 97,  287 => 92,  279 => 87,  274 => 85,  268 => 81,  266 => 80,  262 => 79,  256 => 77,  252 => 75,  248 => 73,  246 => 72,  237 => 66,  230 => 63,  226 => 61,  222 => 59,  220 => 58,  214 => 54,  208 => 53,  202 => 52,  196 => 51,  191 => 49,  186 => 48,  181 => 46,  176 => 45,  173 => 44,  168 => 43,  159 => 40,  154 => 38,  149 => 37,  146 => 36,  141 => 35,  133 => 33,  125 => 31,  122 => 30,  118 => 29,  114 => 28,  104 => 23,  97 => 19,  93 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
