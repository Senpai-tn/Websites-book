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

/* user/index.html.twig */
class __TwigTemplate_8192161a451cd772b7aad7c26f6789c4049dbf952dffbde9d85f521dfb001d2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        echo "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/css/main.css"), "html", null, true);
        echo "\" />
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the \"next button\" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3600s;
            animation-name: fade;
            /*animation-duration: 1.5s;*/
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: 1}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }

        .job-search {
            position: sticky;   /* The magic */
            z-index: 1;         /* Ensure it stays on top of other player divs */
            top: 0px;           /* Where it should stick to */
            opacity: 80%;
            background-color: darkred;



        }


    </style>



    <div class=\"slideshow-container\">

        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 127
            echo "            <div class=\"mySlides fade\">

                <img src=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/"), "html", null, true);
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo ".png\" width=\"100%\" height=\"400px\">

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "


        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>


    </div>

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
<div class=\"job-search\">
    <input type=\"text\" style=\"color: white;font-family: tahoma;font-size: 16px;\" placeholder=\"Search\" name=\"s\" id=\"s\" oninput=\"f()\">
</div>


    <section id=\"banner\" data-video=\"images/banner\">
        <div class=\"inner\">

            <a href=\"#main\" class=\"more\">Learn More</a>
        </div>
    </section>






    <!-- Main -->
    <div id=\"main\">
        <div class=\"inner\">
            <!-- Boxes -->
            <div class=\"thumbnails\">
                ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 210, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 211
            echo "
                    <div class=\"box\" >
                        <img src=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "logo", [], "any", false, false, false, 213), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"80%\">
                        <h3>";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 214), "html", null, true);
            echo "</h3>
                        <a href=\"";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "url", [], "any", false, false, false, 215), "html", null, true);
            echo "\" class=\"button fit\"  target=\"_blank\" data-poptrox=\"youtube,800x400\" style=\"opacity: 99%\">Watch</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "


            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer id=\"footer\">
        <div class=\"inner\">
            <h2>Etiam veroeros lorem</h2>
            <p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat venenatis. </p>

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
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.min.js"), "html", null, true);
        echo " }}\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.scrolly.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/jquery.poptrox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/skel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/util.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fullMotion/assets/js/main.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 248,  382 => 247,  378 => 246,  374 => 245,  370 => 244,  366 => 243,  339 => 218,  330 => 215,  326 => 214,  321 => 213,  317 => 211,  313 => 210,  234 => 133,  223 => 129,  219 => 127,  215 => 126,  94 => 8,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ title }} {% endblock %}

{% block body %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <link rel=\"stylesheet\" href=\"{{ asset(\"fullMotion/assets/css/main.css\") }}\" />
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the \"next button\" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3600s;
            animation-name: fade;
            /*animation-duration: 1.5s;*/
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: 1}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }

        .job-search {
            position: sticky;   /* The magic */
            z-index: 1;         /* Ensure it stays on top of other player divs */
            top: 0px;           /* Where it should stick to */
            opacity: 80%;
            background-color: darkred;



        }


    </style>



    <div class=\"slideshow-container\">

        {% for m in 1..5 %}
            <div class=\"mySlides fade\">

                <img src=\"{{ asset('img/banner/') }}{{ m }}.png\" width=\"100%\" height=\"400px\">

            </div>
        {% endfor %}



        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>


    </div>

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
<div class=\"job-search\">
    <input type=\"text\" style=\"color: white;font-family: tahoma;font-size: 16px;\" placeholder=\"Search\" name=\"s\" id=\"s\" oninput=\"f()\">
</div>


    <section id=\"banner\" data-video=\"images/banner\">
        <div class=\"inner\">

            <a href=\"#main\" class=\"more\">Learn More</a>
        </div>
    </section>






    <!-- Main -->
    <div id=\"main\">
        <div class=\"inner\">
            <!-- Boxes -->
            <div class=\"thumbnails\">
                {% for w in websites %}

                    <div class=\"box\" >
                        <img src=\"{{  asset('img/websites_logo/')}}{{ w.logo}}\" alt=\"\" width=\"100%\" height=\"80%\">
                        <h3>{{ w.name }}</h3>
                        <a href=\"{{ w.url }}\" class=\"button fit\"  target=\"_blank\" data-poptrox=\"youtube,800x400\" style=\"opacity: 99%\">Watch</a>
                    </div>
                {% endfor %}



            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer id=\"footer\">
        <div class=\"inner\">
            <h2>Etiam veroeros lorem</h2>
            <p>Pellentesque eleifend malesuada efficitur. Curabitur volutpat dui mi, ac imperdiet dolor tincidunt nec. Ut erat lectus, dictum sit amet lectus a, aliquet rutrum mauris. Etiam nec lectus hendrerit, consectetur risus viverra, iaculis orci. Phasellus eu nibh ut mi luctus auctor. Donec sit amet dolor in diam feugiat venenatis. </p>

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
", "user/index.html.twig", "C:\\wamp64\\www\\PFE\\templates\\user\\index.html.twig");
    }
}
