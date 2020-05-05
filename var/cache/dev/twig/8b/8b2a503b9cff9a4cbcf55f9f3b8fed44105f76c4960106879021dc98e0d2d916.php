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

/* Websites/index.html.twig */
class __TwigTemplate_2b0aec64dacbb2dc9b9c88cc9fe27a624ac155e7bde866daff8afa2a1a531b7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Websites/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Websites/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Websites/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"job-search\">

        <input type=\"text\" id=\"search\"  style=\"color: white;font-family: tahoma;font-size: 16px;\" placeholder=\"Search\" >


        <input type=\"text\" hidden id=\"i\">
    </div>

    <div class=\"slideshow-container\">

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 18
            echo "            <div class=\"mySlides fade\">

                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo ".png\" width=\"100%\" height=\"400px\">

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "


        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>


    </div>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);

        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"dot\");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }


    </script>


    <script>
        var myVar = setInterval(myTimer, 3000);
        function myTimer() {
            plusSlides(1);
        }

        function f() {
            //alert(\$(\"#s\").val());

        }

    </script>

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var allWebsites = \$(\"#entitiesNav\").html();
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                location.replace(\"#inner\");
                \$(\"#search\").focus();
                var minlength = 1;
                var listeLogo = new Array();
                var listeURL = new Array();
                ";
        // line 91
        $context["k"] = twig_get_array_keys_filter((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 91, $this->source); })()));
        // line 92
        echo "                ";
        $context["indice"] = 0;
        // line 93
        echo "
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 95
            echo "                    listeLogo[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 95, $this->source); })()), (isset($context["indice"]) || array_key_exists("indice", $context) ? $context["indice"] : (function () { throw new RuntimeError('Variable "indice" does not exist.', 95, $this->source); })()), [], "array", false, false, false, 95), "html", null, true);
            echo "] = \"";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "\";

                   ";
            // line 97
            $context["indice"] = ((isset($context["indice"]) || array_key_exists("indice", $context) ? $context["indice"] : (function () { throw new RuntimeError('Variable "indice" does not exist.', 97, $this->source); })()) + 1);
            // line 98
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                ";
        $context["indice"] = 0;
        // line 100
        echo "
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 102
            echo "                listeURL[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 102, $this->source); })()), (isset($context["indice"]) || array_key_exists("indice", $context) ? $context["indice"] : (function () { throw new RuntimeError('Variable "indice" does not exist.', 102, $this->source); })()), [], "array", false, false, false, 102), "html", null, true);
            echo "] = \"";
            echo twig_escape_filter($this->env, $context["u"], "html", null, true);
            echo "\";

                ";
            // line 104
            $context["indice"] = ((isset($context["indice"]) || array_key_exists("indice", $context) ? $context["indice"] : (function () { throw new RuntimeError('Variable "indice" does not exist.', 104, $this->source); })()) + 1);
            // line 105
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if(\$(\"#search\").val().length == 0)
                    \$(\"#entitiesNav\").html(allWebsites);
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<div class=\"box\" ><a href=\"/website/'+id+'\"> <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
        echo "'+listeLogo[id]+'\" alt=\"\" width=\"100%\" height=\"80%\"> <h3>'+value+'</h3> </a> </div>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>




    <section id=\"banner\" data-video=\"images/banner\">
        <div class=\"inner\">

            <a href=\"#inner\" class=\"more\">Learn More</a>
        </div>
    </section>






    <!-- Main -->
    <div id=\"main\">
        <div style=\"margin-left: 0;position: sticky;z-index: 1;top: 10%;width: 5% \" >
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 164
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 165), "html", null, true);
            echo "
            </a>
            <br>
            <br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "
        </div>
        <div class=\"inner\" id=\"inner\">
            <!-- Boxes -->
            <div class=\"thumbnails\" id=\"entitiesNav\">
                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 176
            echo "                    <div class=\"box\" >
                        <a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 177)]), "html", null, true);
            echo "\" >
                            <img src=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "logo", [], "any", false, false, false, 178), "html", null, true);
            echo "\"  width=\"100%\" height=\"80%\">
                            <h3>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 179), "html", null, true);
            echo "</h3>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id=\"footer\" style=\"height: 10px\">

        <div>
            <h2>Etiam veroeros lorem </h2>
            <p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a,  </p>

            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon fa-envelope\"><span class=\"label\">Email</span></a></li>
            </ul>
            <p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://templated.co\">TEMPLATED</a>. Images: <a href=\"https://unsplash.com/\">Unsplash</a>. Videos: <a href=\"http://coverr.co/\">Coverr</a>.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.min.js"), "html", null, true);
        echo " }}\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.poptrox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/util.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/main.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Websites/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 210,  403 => 209,  399 => 208,  395 => 207,  391 => 206,  387 => 205,  363 => 183,  353 => 179,  348 => 178,  344 => 177,  341 => 176,  337 => 175,  330 => 170,  319 => 165,  314 => 164,  310 => 163,  274 => 130,  258 => 117,  245 => 106,  239 => 105,  237 => 104,  229 => 102,  225 => 101,  222 => 100,  219 => 99,  213 => 98,  211 => 97,  203 => 95,  199 => 94,  196 => 93,  193 => 92,  191 => 91,  122 => 24,  111 => 20,  107 => 18,  103 => 17,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ title }} {% endblock %}

{% block body %}

    <div class=\"job-search\">

        <input type=\"text\" id=\"search\"  style=\"color: white;font-family: tahoma;font-size: 16px;\" placeholder=\"Search\" >


        <input type=\"text\" hidden id=\"i\">
    </div>

    <div class=\"slideshow-container\">

        {% for m in 1..5 %}
            <div class=\"mySlides fade\">

                <img src=\"{{ asset('img/banner/') }}{{ m }}.png\" width=\"100%\" height=\"400px\">

            </div>
        {% endfor %}



        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>


    </div>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);

        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName(\"mySlides\");
            var dots = document.getElementsByClassName(\"dot\");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = \"none\";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(\" active\", \"\");
            }
            slides[slideIndex-1].style.display = \"block\";
            dots[slideIndex-1].className += \" active\";
        }


    </script>


    <script>
        var myVar = setInterval(myTimer, 3000);
        function myTimer() {
            plusSlides(1);
        }

        function f() {
            //alert(\$(\"#s\").val());

        }

    </script>

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var allWebsites = \$(\"#entitiesNav\").html();
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                location.replace(\"#inner\");
                \$(\"#search\").focus();
                var minlength = 1;
                var listeLogo = new Array();
                var listeURL = new Array();
                {% set k = logo|keys %}
                {% set indice =0 %}

                {% for l in logo %}
                    listeLogo[{{ k[indice] }}] = \"{{ l }}\";

                   {% set indice =indice + 1%}
                {% endfor %}
                {% set indice =0 %}

                {% for u in url %}
                listeURL[{{ k[indice] }}] = \"{{ u }}\";

                {% set indice =indice + 1%}
                {% endfor %}

                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                if(\$(\"#search\").val().length == 0)
                    \$(\"#entitiesNav\").html(allWebsites);
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajax_search') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'entities') {
                                            if (id != 'error') {
                                                entitySelector.append('<div class=\"box\" ><a href=\"/website/'+id+'\"> <img src=\"{{  asset('img/websites_logo/')}}'+listeLogo[id]+'\" alt=\"\" width=\"100%\" height=\"80%\"> <h3>'+value+'</h3> </a> </div>');
                                            } else {
                                                entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>




    <section id=\"banner\" data-video=\"images/banner\">
        <div class=\"inner\">

            <a href=\"#inner\" class=\"more\">Learn More</a>
        </div>
    </section>






    <!-- Main -->
    <div id=\"main\">
        <div style=\"margin-left: 0;position: sticky;z-index: 1;top: 10%;width: 5% \" >
            {% for c in categories %}
            <a href=\"{{ path(\"category\",{'id': c.id  }) }}\" class=\"btn btn-primary\">
                {{ c.name }}
            </a>
            <br>
            <br>
            {% endfor %}

        </div>
        <div class=\"inner\" id=\"inner\">
            <!-- Boxes -->
            <div class=\"thumbnails\" id=\"entitiesNav\">
                {% for w in websites %}
                    <div class=\"box\" >
                        <a href=\"{{ path(\"show\",{\"id\":w.id})  }}\" >
                            <img src=\"{{  asset('img/websites_logo/')}}{{ w.logo}}\"  width=\"100%\" height=\"80%\">
                            <h3>{{ w.name }}</h3>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id=\"footer\" style=\"height: 10px\">

        <div>
            <h2>Etiam veroeros lorem </h2>
            <p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a,  </p>

            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon fa-envelope\"><span class=\"label\">Email</span></a></li>
            </ul>
            <p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://templated.co\">TEMPLATED</a>. Images: <a href=\"https://unsplash.com/\">Unsplash</a>. Videos: <a href=\"http://coverr.co/\">Coverr</a>.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src=\"{{ asset(\"fullMotion/assets/js/jquery.min.js\")}} }}\"></script>
    <script src=\"{{ asset(\"fullMotion/assets/js/jquery.scrolly.min.js\") }}\"></script>
    <script src=\"{{ asset(\"fullMotion/assets/js/jquery.poptrox.min.js\") }}\"></script>
    <script src=\"{{ asset(\"fullMotion/assets/js/skel.min.js\") }}\"></script>
    <script src=\"{{ asset(\"fullMotion/assets/js/util.js\")  }}\"></script>
    <script src=\"{{ asset(\"fullMotion/assets/js/main.js\")  }}\"></script>


{% endblock %}
", "Websites/index.html.twig", "C:\\wamp64\\www\\PFE\\templates\\Websites\\index.html.twig");
    }
}
