<?php

/* ::base.html.twig */
class __TwigTemplate_bfed2944acbe18f0f3cb117f4310d322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  59 => 6,  44 => 11,  35 => 7,  29 => 5,  23 => 1,  120 => 20,  117 => 19,  108 => 19,  105 => 18,  102 => 17,  88 => 31,  84 => 29,  82 => 28,  78 => 26,  76 => 17,  73 => 16,  64 => 10,  61 => 12,  56 => 11,  53 => 5,  47 => 12,  41 => 5,  33 => 6,  141 => 49,  131 => 45,  127 => 28,  123 => 43,  118 => 41,  114 => 40,  110 => 22,  106 => 38,  103 => 37,  94 => 34,  90 => 32,  85 => 32,  81 => 31,  77 => 30,  74 => 29,  70 => 28,  50 => 11,  45 => 8,  42 => 10,  36 => 4,  30 => 3,);
    }
}
