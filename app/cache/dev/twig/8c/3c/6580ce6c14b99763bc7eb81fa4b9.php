<?php

/* AcmeDemoBundle::layout2.html.twig */
class __TwigTemplate_8c3c6580ce6c14b99763bc7eb81fa4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
   <div class=\"block\">
        ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    </div>

    ";
        // line 20
        if (array_key_exists("code", $context)) {
            // line 21
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 23
            echo $this->getContext($context, "code");
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  81 => 23,  77 => 21,  75 => 20,  71 => 18,  69 => 17,  65 => 15,  53 => 11,  48 => 10,  45 => 9,  39 => 7,  34 => 4,  31 => 3,  93 => 23,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 12,  52 => 12,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
