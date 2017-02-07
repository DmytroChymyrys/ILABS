<?php

/* home.twig */
class __TwigTemplate_2b3e8d6a46084fb9bce5967dadb84c8ae27b616ca4a733b0f5ddc4e474a30105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "home.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\xampp\\htdocs\\dmytro_test\\resource\\views\\home.twig");
    }
}
