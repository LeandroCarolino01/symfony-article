<?php

/* inc/navbar.html.twig */
class __TwigTemplate_5cae7a8f86fb6b9b02cddf79150493526f2be4684390aa0ae49f818bd6ce2795 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
    <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">Article</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li>
                    <a href=\"/\" class=\"nav-link\">Home</a>
                </li>
                <li>
                    <a href=\"/article/new\" class=\"nav-link\">article</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
    <div class=\"container\">
    <a href=\"/\" class=\"navbar-brand\">Article</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
            <span class=\"navbar-toggle-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li>
                    <a href=\"/\" class=\"nav-link\">Home</a>
                </li>
                <li>
                    <a href=\"/article/new\" class=\"nav-link\">article</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\article\\templates\\inc\\navbar.html.twig");
    }
}
